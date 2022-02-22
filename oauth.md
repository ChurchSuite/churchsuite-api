# ChurchSuite OAuth

[Home](https://github.com/ChurchSuite/churchsuite-api)

ChurchSuite provides an OAuth2 Server in order to access the API on behalf of a Contact in your Account Address Book. Common uses would include providing the ability for members to edit their own details, or using ChurchSuite to provide authentication for a web service or web site.

Requests to the OAuth Server require a Client Application be created, in order to do this you must contact Support (support@churchsuite.com), with the following details:

* The account for which you would like access (if applicable)
* The redirect_uri you wish to use (we generally do not allow Client Applications to have undefined redirect_uris)
* The name of your Application
* A brief description of your application and what it will do

*Should you wish to have both a development and production redirect_uri you will require two Client Applications.*

The OAuth endpoint for ChurchSuite is found at `youraccount.churchsuite.com/oauth` and adheres to the OAuth2 Specification.

The authorisation endpoint is: `/oauth/authorize`

The token endpoint is: `/oauth/token`

Example applications using the ChurchSuite OAuth endpoints are available in both [Ruby](https://github.com/ChurchSuite/churchsuite-oauth-ruby) and [PHP](https://github.com/ChurchSuite/churchsuite-oauth-php).
