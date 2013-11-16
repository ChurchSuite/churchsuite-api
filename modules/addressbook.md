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
      "address":"125 Derby Road",
      "address2":"",
      "address3":null,
      "city":"Nottingham",
      "county":"",
      "postcode":"NG9 3LP",
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
* `GET /v1/addressbook/contact/1?tags=true` will return data for a specific contact, including any tags for the contact

```json
{
  "id":"1",
  "name":"Ward, Philip",
  "first_name":"Philip",
  "middle_name":"",
  "last_name":"Ward",
  "formal_name":null,
  "maiden_name":"",
  "sex":"m",
  "date_of_birth":"1981-12-26",
  "address":"19 Albert Drive",
  "address2":"Cotgrave",
  "address3":null,
  "city":"",
  "county":"",
  "postcode":"NG3 5GE",
  "country":"",
  "telephone":"01479 029 358",
  "mobile":"07223 446 512",
  "email":"philip.ward@yahoo.com",
  "job":"Primary Teacher",
  "employer":"",
  "tags":[
    {
      "id":null,
      "name":"Setup Team"
    },
    {
      "id":null,
      "name":"Worship Band"
    }
  ]
}
```

This will return one of the following HTTP codes:

* `200` contact data returned
* `400` some of the data passed through was not valid, e.g. invalid URL
* `404` contact does not exist

## Get a contact's tags

* `GET /v1/addressbook/contact/1/tags` will return data for a specific contact

```json
{
  "tags":[
    {
      "id":null,
      "name":"Setup Team"
    },
    {
      "id":null,
      "name":"Worship Band"
    }
  ]
}
```

This will return one of the following HTTP codes:

* `200` contact tags returned
* `400` some of the data passed through was not valid, e.g. invalid URL
* `404` contact does not exist

## Create a new contact

* `POST /v1/addressbook/contact` will create a new contact in the Address Book

```json
{
  "id":"155",
  "name":"Bloggs, Joe",
  "first_name":"Joe",
  "middle_name":null,
  "last_name":"Bloggs",
  "formal_name":null,
  "maiden_name":null,
  "sex":"m",
  "date_of_birth":null,
  "address":null,
  "address2":null,
  "address3":null,
  "city":null,
  "county":null,
  "postcode":"NG1 1AB",
  "country":"GB",
  "telephone":null,
  "mobile":null,
  "email":"joe@bloggs.com",
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
  "id":"155",
  "name":"Bloggs, Jane",
  "first_name":"Jane",
  "middle_name":null,
  "last_name":"Bloggs",
  "formal_name":null,
  "maiden_name":null,
  "sex":"f",
  "date_of_birth":null,
  "address":null,
  "address2":null,
  "address3":null,
  "city":null,
  "county":null,
  "postcode":"NG1 1AB",
  "country":"GB",
  "telephone":null,
  "mobile":null,
  "email":"jane.bloggs@gmail.com",
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
* `404` contact specified to delete does not exist



## List tags

* `GET /v1/addressbook/tags will return tags ordered alphabetically

```json
{
  "pagination":{
    "no_results":10,
    "page":1,
    "per_page":10
  },
  "tags":[
    {
      "id":null,
      "name":"Leader",
      "no_contacts":"15"
    },
    {
      "id":null,
      "name":"Members",
      "no_contacts":"4"
    },
    {
      "id":null,
      "name":"North City Campus",
      "no_contacts":"5"
    },
    {
      "id":null,
      "name":"Potential Leaders",
      "no_contacts":"8"
    },
    {
      "id":null,
      "name":"Prayer Team",
      "no_contacts":"11"
    },
    {
      "id":null,
      "name":"Setup Team",
      "no_contacts":"8"
    },
    {
      "id":null,
      "name":"South City Campus",
      "no_contacts":"29"
    },
    {
      "id":null,
      "name":"Staff",
      "no_contacts":"1"
    },
    {
      "id":null,
      "name":"Wine Evening",
      "no_contacts":"2"
    },
    {
      "id":null,
      "name":"Worship Band",
      "no_contacts":"12"
    }
  ]
}
```


## Get a tag

* `GET /v1/addressbook/tag/Wine+Evening` will return data for a specific tag

Tag names *must be urlencoded*, particularly if they include a space character in them. Failure to correctly encode the tag name could result in a 404 response being returned rather than a 200.

```json
{
  "id":null,
  "name":"Members",
  "no_contacts":"4"
}
```

This will return one of the following HTTP codes:

* `200` tag data returned
* `400` some of the data passed through was not valid, e.g. invalid URL
* `404` tag does not exist

## Get a tag's contacts

* `GET /v1/addressbook/tag/Members/contacts` will return the contacts for the "Members" tag

```json
{
  "pagination":{
    "no_results":4,
    "page":1,
    "per_page":4
  },
  "contacts":[
    {
      "id":"112",
      "name":"Baker, George",
      "first_name":"George",
      "middle_name":"Harris",
      "last_name":"Baker",
      "formal_name":null,
      "maiden_name":"",
      "sex":"m",
      "date_of_birth":"1945-08-13",
      "address":"71 Lamont Road",
      "address2":"Thorpe",
      "address3":null,
      "city":"",
      "county":"",
      "postcode":"NG9 2FE",
      "country":"",
      "telephone":"0161 730 2326",
      "mobile":"07824 842 761",
      "email":"george@thebakers.com",
      "job":"Physician",
      "employer":""
    },
    {
      "id":"94",
      "name":"Bradley, Emma",
      "first_name":"Emma",
      "middle_name":"",
      "last_name":"Bradley",
      "formal_name":null,
      "maiden_name":"",
      "sex":"f",
      "date_of_birth":"1973-05-15",
      "address":"74 Calendon Lane",
      "address2":"Arnold",
      "address3":null,
      "city":"",
      "county":"",
      "postcode":"NG5 2EF",
      "country":"",
      "telephone":"01662 021 460",
      "mobile":"07336 197 473",
      "email":"emma.bradley@facebook.com",
      "job":"Teaching Assistant",
      "employer":""
    },
    {
      "id":"34",
      "name":"Bradley, Julie",
      "first_name":"Julie",
      "middle_name":"",
      "last_name":"Bradley",
      "formal_name":null,
      "maiden_name":"",
      "sex":"f",
      "date_of_birth":"1955-11-18",
      "address":"62 Downs Court",
      "address2":"Gedling",
      "address3":null,
      "city":"",
      "county":"",
      "postcode":"NG9 3LP",
      "country":"",
      "telephone":"01010 544 224",
      "mobile":"07307 699 576",
      "email":"julie.bradley@gmail.com",
      "job":"Support Worker",
      "employer":""
    },
    {
      "id":"104",
      "name":"Bradley, Samuel",
      "first_name":"Samuel",
      "middle_name":"",
      "last_name":"Bradley",
      "formal_name":null,
      "maiden_name":"",
      "sex":"m",
      "date_of_birth":"1958-06-19",
      "address":"40 Clarence Way",
      "address2":"Stapleford",
      "address3":null,
      "city":"",
      "county":"",
      "postcode":"NG7 2PX",
      "country":"",
      "telephone":"01464 816 866",
      "mobile":"07258 594 857",
      "email":"samuel.bradley@facebook.com",
      "job":"Graphic Designer",
      "employer":""
    }
  ]
}
```

This will return one of the following HTTP codes:

* `200` tag contacts returned
* `400` some of the data passed through was not valid, e.g. invalid URL
* `404` tag does not exist
