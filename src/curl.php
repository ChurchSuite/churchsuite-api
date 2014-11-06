<?php

/*
 * A set of helper functions to make using Curl faster and simpler within ChurchApp.
 */
class Helper_Curl {

	/**
	 * Runs a cURL DELETE command.
	 *
	 * @access public
	 * @static
	 * @param string $url
	 * @param array $headers (default: '')
	 * @param array $options (default: '')
	 * @return array
	 */
	public static function delete($url, $headers = '', $options = '') {
		$ch = curl_init($url);

		$curlopts = array(
			CURLOPT_CUSTOMREQUEST => 'DELETE',
		);

		return self::run($ch, $curlopts, $headers, $options);
	}

	/**
	 * Executes the cURL command that has been set up. Returns an associative array of error, http_code and response for the command.
	 *
	 * @access private
	 * @static
	 * @param mixed $ch
	 * @return array
	 */
	private static function exec($ch) {
		$response = curl_exec($ch);
		$error = curl_errno($ch);
	    $http_code = curl_getinfo($ch, CURLINFO_HTTP_CODE);

	    return array(
	    	'error' => $error,
	    	'http_code' => $http_code,
	    	'response' => $response,
	    );
	}

	/**
	 * Runs a cURL GET command.
	 *
	 * @access public
	 * @static
	 * @param string $url
	 * @param array $headers (default: '')
	 * @param array $options (default: '')
	 * @return array
	 */
	public static function get($url, $headers = '', $options = '') {
		$ch = curl_init($url);

		$curlopts = array();

		return self::run($ch, $curlopts, $headers, $options);
	}

	/**
	 * Returns an array of JSON headers (Accept and Content-Type)
	 *
	 * @access public
	 * @static
	 * @return array
	 */
	public static function headers_json() {
		return array(
			'Accept: application/json',
			'Content-Type: application/json',
		);
	}

	/**
	 * Runs a cURL POST command.
	 *
	 * @access public
	 * @static
	 * @param string $url
	 * @param mixed $data
	 * @param array $headers (default: '')
	 * @param array $options (default: '')
	 * @return array
	 */
	public static function post($url, $data, $headers = '', $options = '') {
		$ch = curl_init($url);

		$curlopts = array(
			CURLOPT_POST => true,
			CURLOPT_POSTFIELDS => $data,
		);

		return self::run($ch, $curlopts, $headers, $options);
	}

	/**
	 * Runs a cURL PUT command.
	 *
	 * @access public
	 * @static
	 * @param string $url
	 * @param mixed $data
	 * @param array $headers (default: '')
	 * @param array $options (default: '')
	 * @return array
	 */
	public static function put($url, $data, $headers = '', $options = '') {
		$ch = curl_init($url);

		$curlopts = array(
			CURLOPT_CUSTOMREQUEST => 'PUT',
			CURLOPT_POST => true,
			CURLOPT_POSTFIELDS => $data,
		);

		return self::run($ch, $curlopts, $headers, $options);
	}


	/**
	 * Runs the cURL command, gathers responses and returns them.
	 *
	 * @access private
	 * @static
	 * @param mixed $ch
	 * @param array $curlopts
	 * @param array $headers
	 * @param array $options
	 * @return array
	 */
	private static function run($ch, $curlopts, $headers, $options) {
		// set the default CURLOPTs
		$curlopts[CURLOPT_RETURNTRANSFER] = true;

		if (!empty($headers) && is_array($headers)) {
			$curlopts[CURLOPT_HTTPHEADER] = $headers;
		}

		if (is_array($options)) {
			// custom options have been set, so set the necessary parameters
			foreach ($options as $key => $value) {
				switch ($key) {
					case 'auth':
						$curlopts[CURLOPT_USERPWD] = $value;
						break;
				}
			}
		}

        curl_setopt_array($ch, $curlopts);
		$response = self::exec($ch);

		if ($response['error'] != 0) {
			if (($response['error'] == CURLE_SSL_PEER_CERTIFICATE) || ($response['error'] == CURLE_SSL_CACERT) || ($response['error'] == 77)) {
				curl_setopt($ch, CURLOPT_CAINFO, __DIR__.'/cacert.pem');
				$response = self::exec($ch);
			}
		}
	    curl_close($ch);

	    return $response;
	}

}
