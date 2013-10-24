# ChurchApp API V1

## Authentication

The ChurchApp API requires users to use a valid API key in order to interact with the data stored in their ChurchApp account. Currently API Keys must be requested via support (support@churchapp.co.uk).

To access the API each request must be accompanied by a `X-Account` header, a `X-Application` header and a `X-Auth` header. For example:

````
  X-Account: demo
  X-Application: Example
  X-Auth: 1234567890abc
````

The ChurchApp API is available at `https://api.churchapp.co.uk/v1` and should always be accessed via SSL. Failure to supply the required headers will result in a 403 error.

## API Structure

The API is structured in the same way as the main ChurchApp Application, with each model belonging to it's own module. For example a contact might be at the endpoint:

````
  http://api.churchapp.co.uk/v1/addressbook/contact/1
````

Whilst a child would appear at the endpoint:

````
  http://api.churchapp.co.uk/v1/children/child/1
````

## Documentation

The following modules currently have documented API Endpoints, this documentation is considered a work in progress:

* [Address Book](https://github.com/ChurchApp/churchapp-api/blob/master/modules/addressbook.md)
* [Administrator](https://github.com/ChurchApp/churchapp-api/blob/master/modules/administrator.md)
* [Calendar](https://github.com/ChurchApp/churchapp-api/blob/master/modules/calendar.md)
* [Small Groups](https://github.com/ChurchApp/churchapp-api/blob/master/modules/smallgroups.md)
