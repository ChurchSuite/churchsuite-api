# ChurchApp API V1

## Authentication

The ChurchApp API requires users to use a valid API key in order to interact with the data stored in their ChurchApp account. Currently API Keys must be requested via support (support@churchapp.co.uk), we also provide an [OAuth endpoint](https://github.com/ChurchApp/churchapp-api/blob/master/oauth.md) for using the API as a specific Contact with limited access.

To access the API each request must be accompanied by a `X-Account` header, a `X-Application` header and a `X-Auth` header, as of Dec 2013 requests missing any of these will not succeed. Additionally, the Content-Type header must be set to `application/json`. For example:

````
  Content-Type: application/json
  X-Account: demo
  X-Application: Example
  X-Auth: 1234567890abc
````

The ChurchApp API is available at `https://api.churchapp.co.uk/v1` and should always be accessed via SSL.

#### Headers: 

* `X-Account` refers to the subdomain of your ChurchApp Account (*demo*.churchapp.co.uk)
* `X-Application` is an identifier used to describe your application, e.g., yourchurch-website
* `X-Auth` is an API Key, obtained either via OAuth or from Support.

## API Structure

The API is structured in the same way as the main ChurchApp Application, with each model belonging to it's own module. For example a contact would be at the endpoint:

````
  https://api.churchapp.co.uk/v1/addressbook/contact/1
````

## Documentation

The following modules currently have documented API Endpoints, this documentation is considered a work in progress:

* [Address Book](https://github.com/ChurchApp/churchapp-api/blob/master/modules/addressbook.md)
* [Administrator](https://github.com/ChurchApp/churchapp-api/blob/master/modules/administrator.md)
* [Calendar](https://github.com/ChurchApp/churchapp-api/blob/master/modules/calendar.md)
* [Small Groups](https://github.com/ChurchApp/churchapp-api/blob/master/modules/smallgroups.md)
* [My](https://github.com/ChurchApp/churchapp-api/blob/master/modules/my.md)
