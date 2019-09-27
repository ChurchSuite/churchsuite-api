# ChurchSuite API V1

## Authentication

The ChurchSuite API requires users to use a valid API key in order to interact with the data stored in their ChurchSuite account. Currently API Keys must be requested via support (support@churchsuite.com), we also provide an [OAuth endpoint](https://github.com/ChurchSuite/churchsuite-api/blob/master/oauth.md) for using the API as a specific Contact with limited access. However use of the embed endpoints is not restricted.

To access the API each request must be accompanied by a `X-Account` header, a `X-Application` header and a `X-Auth` header, as of Dec 2013 requests missing any of these will not succeed. Additionally, the Content-Type header must be set to `application/json`. For example:

````
  Content-Type: application/json
  X-Account: demo
  X-Application: Example
  X-Auth: 1234567890abc
````

The ChurchSuite API is available at `https://api.churchsuite.co.uk/v1` and should always be accessed via SSL.

#### Headers: 

* `X-Account` refers to the subdomain of your ChurchSuite Account (*demo*.churchsuite.com)
* `X-Application` is an identifier used to describe your application, e.g., yourchurch-website
* `X-Auth` is an API Key, obtained either via OAuth or from Support.

## API Structure

The API is structured in the same way as the main ChurchSuite Application, with each model belonging to it's own module. For example a contact would be at the endpoint:

````
  https://api.churchsuite.co.uk/v1/addressbook/contact/1
  https://api.churchsuite.co.uk/v1/children/child/1
````

## Patterns

Data returned by our API follows a number of consistent design patterns. The following are designed to give you an understanding of the current design patterns:

* [Custom Fields](https://github.com/ChurchSuite/churchsuite-api/blob/master/patterns/custom_fields.md)
* [Images](https://github.com/ChurchSuite/churchsuite-api/blob/master/patterns/images.md)

## Modules

Since we are constantly improving ChurchSuite our API documentation is in flux, we therefore recommend that you watch this project if you plan on using our API. The following modules currently have documented API Endpoints:

* [Account](https://github.com/ChurchSuite/churchsuite-api/blob/master/modules/account.md)
* [Address Book](https://github.com/ChurchSuite/churchsuite-api/blob/master/modules/addressbook.md)
* [Calendar](https://github.com/ChurchSuite/churchsuite-api/blob/master/modules/calendar.md)
* [Children](https://github.com/ChurchSuite/churchsuite-api/blob/master/modules/children.md)
* [Embed](https://github.com/ChurchSuite/churchsuite-api/blob/master/modules/embed.md)
* [My](https://github.com/ChurchSuite/churchsuite-api/blob/master/modules/my.md)
* [Small Groups](https://github.com/ChurchSuite/churchsuite-api/blob/master/modules/smallgroups.md)
