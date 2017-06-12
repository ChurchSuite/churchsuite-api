# My

[Home](https://github.com/ChurchSuite/churchsuite-api)

The My section of the API allows data to be queried for a given contact after they have passed through the OAuth process. Any data passed back obeys the public visibility settings that can be set on a contact-by-contact basis. The following endpoints are available:

## Get a contact's details

* `GET /v1/my/details` will return the contact details for the logged in contact

```json
{
  "id":"127",
  "name":"Courtney, Gavin",
  "first_name":"Gavin",
  "middle_name":"",
  "last_name":"Courtney",
  "formal_name":null,
  "maiden_name":"",
  "sex":"m",
  "date_of_birth":"1982-08-03",
  "address":"125 Derby Road",
  "address2":"",
  "address3":null,
  "city":"Nottingham",
  "county":"",
  "postcode":"NG9 3LP",
  "country":"",
  "telephone":"0115 824 2300",
  "mobile":"07707 777 777",
  "email":"support@churchsuite.com",
  "job":"Managing Director",
  "employer":"ChurchApp Ltd",
  "images":{
  
  }
}
```

This will return one of the following HTTP codes:

* `200` contact data returned
* `400` some of the data passed through was not valid, e.g. invalid URL
* `404` contact does not exist



## List/search other publicly visible contacts

* `GET /v1/my/contacts` will return contacts ordered alphabetically
* `GET /v1/my/contacts?q=gavin` will return contacts whose Name, Address, Job, Email, Telephone or Mobile contains "gavin"

```json
{
  "pagination":{
    "no_results":1,
    "page":1,
    "per_page":50
  },
  "contacts":[
    {
      "id":"127",
      "name":"Courtney, Gavin",
      "first_name":"Gavin",
      "middle_name":"",
      "last_name":"Courtney",
      "formal_name":null,
      "maiden_name":"",
      "sex":"m",
      "date_of_birth":"1982-08-03",
      "address":"125 Derby Road",
      "address2":"",
      "address3":null,
      "city":"Nottingham",
      "county":"",
      "postcode":"NG9 3LP",
      "country":"",
      "telephone":"0115 824 2300",
      "mobile":"07707 777 777",
      "email":"support@churchsuite.com",
      "job":"Managing Director",
      "employer":"ChurchApp Ltd",
      "images":{
      
      }
    }
  ]
}
```

This will return one of the following HTTP codes:

* `200` contact data returned
* `400` some of the data passed through was not valid, e.g. invalid URL
* `404` contact does not exist



## Get a contact's children

* `GET /v1/my/children` will return the details of any children linked to the current contact

```json
{
  "children":[
    {
      "id":"33",
      "name":"Baker, Oscar",
      "first_name":"Oscar",
      "last_name":"Baker",
      "mobile":null,
      "sex":"m",
      "email":null,
      "telephone":""
    },
    {
      "id":"10",
      "name":"Clark, Helen",
      "first_name":"Helen",
      "last_name":"Clark",
      "mobile":null,
      "sex":"f",
      "email":null,
      "telephone":""
    }
  ]
}
```

This will return one of the following HTTP codes:

* `200` children data returned
* `400` some of the data passed through was not valid, e.g. invalid URL



## Get a child's details

* `GET /v1/my/child/1` will return the details of any children linked to the current contact

```json
{
  "id":"10",
  "name":"Clark, Helen",
  "first_name":"Helen",
  "last_name":"Clark",
  "mobile":"",
  "sex":"f",
  "email":"",
  "telephone":"0115 824 2300"
}
```

This will return one of the following HTTP codes:

* `200` child data returned
* `400` some of the data passed through was not valid, e.g. invalid URL
* `404` child not found
