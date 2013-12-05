# ChurchApp OAuth

[Home](https://github.com/ChurchApp/churchapp-api)

ChurchApp provides an OAuth2 Server in order to access the API on behalf of a Contact in your Account Address Book. Common uses would include providing the ability for members to edit their own details, or using ChurchApp as an authentication for a web service or web site.

Requests to the OAuth Server require a Client Application be created, in order to do this you must contact Support (support@churchapp.co.uk), with the following details:

* The Account for which you would like access (if applicable)
* The redirect_uri you wish to use (we generally do not allow Client Applications to have undefined redirect_uris)
* The name of your Application
* A breif description of your application and what it will do

**Should you wish to have both a development and production redirect_uri you will need two Client Applications, just be sure to let us know.**

The OAuth endpoint for ChurchApp is found at youraccount.churchapp.co.uk/oauth and adheres to the OAuth2 Specification.

The authorisation endpoint is: `/oauth/authorization`
The token endpoint is: `/oauth/token`

Example applications are available in both [Ruby](https://github.com/ChurchApp/churchapp-oauth-ruby) and [PHP](https://github.com/ChurchApp/churchapp-oauth-php).
