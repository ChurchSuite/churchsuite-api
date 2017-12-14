<?php

/*****
*
* Basic script to connect to the API and GET a contact's details.
*
*****/

$url = 'https://api.churchsuite.co.uk/v1/addressbook/contact/1';

$x_account = '';
$x_application = '';
$x_auth = '';

$api_headers = array(
	'Accept: application/json',
	'Content-Type: application/json',
	'X-Account: '.$x_account,
	'X-Auth: '.$x_auth,
	'X-Application: '.$x_application,
);

$ch = curl_init($url);

$curlopts = array();
$curlopts[CURLOPT_RETURNTRANSFER] = true;
$curlopts[CURLOPT_HTTPHEADER] = $api_headers;
curl_setopt_array($ch, $curlopts);

$response = curl_exec($ch);
$error = curl_errno($ch);
$http_code = curl_getinfo($ch, CURLINFO_HTTP_CODE);

$json = json_decode($response, 1);

if (in_array($http_code, array(200, 201))) {
	// OK response
	echo '<h1>OK: '.$http_code.'</h1>';
	var_dump($json);
} else {
	// got an error response
	echo '<h1>Error: '.$http_code.'</h1>';
	echo '<p>ChurchSuite reported the following error: '.$json['error']['message'].'</p>';
}
