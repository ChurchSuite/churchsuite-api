# Address Book

[Home](https://github.com/ChurchApp/churchapp-api)

The Address Book module is concered with the management of contacts within ChurchApp, the following endpoints are available:

## List/search contacts

* `GET /v1/addressbook/contacts` will return contacts ordered alphabetically
* `GET /v1/calendar/contacts?q=gavin` will return contacts whose Name, Address, Job, Email, Telephone or Mobile contains "gavin"

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
      "address":"1 Wellington Street",
      "address2":"",
      "address3":null,
      "city":"London",
      "county":"",
      "postcode":"SW1A 0AA",
      "country":"",
      "telephone":"0115 824 2300",
      "mobile":"07707 777 777",
      "email":"support@churchapp.co.uk",
      "job":"Managing Director",
      "employer":null
    }
  ]
}
```


## Get a contact

* `GET /v1/addressbook/contact/1` will return data for a specific contact

```json
{
  "id":"1",
  "name":"Ward, Philip",
  "first_name":"Philip",
  "middle_name":null,
  "last_name":"Ward",
  "formal_name":null,
  "maiden_name":null,
  "sex":"m",
  "date_of_birth":"1981-12-26",
  "address":"19 Albert Drive",
  "address2":"Cotgrave",
  "address3":null,
  "city":null,
  "county":null,
  "postcode":"NG3 5GE",
  "country":null,
  "telephone":"01479029358",
  "mobile":"07223446512",
  "email":"philip.ward@yahoo.com",
  "job":"Primary Teacher",
  "employer":null
}
```

This will return one of the following HTTP codes:

* `200` contact data returned
* `400` some of the data passed through was not valid, e.g. invalid URL
* `404` contact does not exist

## Create a new contact

* `POST /v1/addressbook/contact` will create a new contact in the Address Book. On success, it will return a 201 response

```json
{
  "id":"136",
  "name":"Surname, Test",
  "first_name":"Test",
  "middle_name":null,
  "last_name":"Surname",
  "formal_name":null,
  "maiden_name":null,
  "sex":"m",
  "date_of_birth":null,
  "address":null,
  "address2":null,
  "address3":null,
  "city":null,
  "county":null,
  "postcode":"NG5 2EP",
  "country":"GB",
  "telephone":null,
  "mobile":null,
  "email":"test@test.com",
  "job":null,
  "employer":null
}
```

This will return one of the following HTTP codes:

* `201` contact created
* `400` some of the data passed through was not valid

## Update an existing contact's details

* `PUT /v1/addressbook/contact/1` will update the details of an existing contact in the database

```json
{
  "id":"136",
  "name":"Courtney, Alison",
  "first_name":"Alison",
  "middle_name":null,
  "last_name":"Courtney",
  "formal_name":null,
  "maiden_name":null,
  "sex":"m",
  "date_of_birth":null,
  "address":null,
  "address2":null,
  "address3":null,
  "city":null,
  "county":null,
  "postcode":"NG5 2EP",
  "country":"GB",
  "telephone":null,
  "mobile":null,
  "email":"test@test.com",
  "job":null,
  "employer":null
}
```

This will return one of the following HTTP codes:

* `200` contact updated
* `400` some of the data passed through was not valid
* `404` contact specified to update does not exist

## Delete a contact

* `DELETE /v1/addressbook/contact/1` will attempt to delete the specified contact

```json

```

This will return one of the following HTTP codes:

* `200` contact deleted
* `404` contact specified to update does not exist
