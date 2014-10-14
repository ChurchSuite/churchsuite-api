# Address Book

[Home](https://github.com/ChurchApp/churchapp-api)

The Address Book module is concerned with the management of contacts within ChurchApp, the following endpoints are available:

## List/search contacts

* `GET /v1/addressbook/contacts` will return contacts ordered alphabetically
* `GET /v1/addressbook/contacts?q=gavin` will return contacts whose Name, Address, Job, Email, Telephone or Mobile contains "gavin"
* `GET /v1/addressbook/contacts?page=2` will return the second page of contacts
* `GET /v1/addressbook/contacts?page=2&per_page=5` will return the second page of contacts, with each page limited to 5 results

```json
{
  "pagination":{
    "no_results":1,
    "page":1,
    "per_page":2
  },
  "contacts":[
    {
      "id":"127",
      "name":"Courtney, Gavin",
      "first_name":"Gavin",
      "middle_name":"",
      "last_name":"Courtney",
      "formal_name":"",
      "maiden_name":"",
      "sex":"m",
      "date_of_birth":"1982-08-03",
      "marital":"married",
      "spouse_id":null,
      "spouse_name":" ",
      "address":"26 Smith Street",
      "address2":"",
      "address3":"",
      "city":"Eastgate",
      "county":"",
      "postcode":"NG5 2EF",
      "country":"",
      "telephone":"0115 824 2300",
      "mobile":"07707 777 777",
      "email":"support@churchapp.co.uk",
      "job":"Managing Director",
      "employer":"ChurchApp Ltd",
      "public_options":{
        "access":true,
        "visible":{
          "enabled":true,
          "address":true,
          "email":true,
          "mobile":true,
          "telephone":true
        }
      },
      "custom_fields":{
        "custom1":"@churchapp_",
        "custom2":"churchapp.co.uk"
      },
      "images":[
        
      ]
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
  "formal_name":"",
  "maiden_name":"",
  "sex":"m",
  "date_of_birth":"1981-12-26",
  "marital":"single",
  "spouse_id":null,
  "address":"194 Albert Drive",
  "address2":"Cotgrave",
  "address3":null,
  "city":"",
  "county":"",
  "postcode":"NG3 5GE",
  "country":"",
  "telephone":"01479 029 358",
  "mobile":"07223 446 512",
  "email":"",
  "job":"Primary Teacher",
  "employer":"",
  "public_options":{
    "access":true,
    "visible":{
      "enabled":true,
      "address":true,
      "email":true,
      "mobile":true,
      "telephone":true
    }
  },
  "custom_fields":{
    "custom1":"",
    "custom2":""
  },
  "images":[
    
  ],
  "tags":[
    {
      "id":null,
      "name":"Members"
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
      "name":"Members"
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
  "first_name":"Joe",
  "last_name":"Bloggs",
  "email":"joe@bloggs.com",
  "postcode":"NG1 1AB",
  "country":"GB",
  "sex":"m",
  "marital":"married",
  "dates":[
    {
      "name":"Married",
      "date":"14-10-2014"
    }
  ]
}
```

This will return one of the following HTTP codes:

* `201` contact created
* `400` some of the data passed through was not valid

This `POST` method will return output in the following format:

```json
{
  "id":"174",
  "name":"Bloggs, Joe",
  "first_name":"Joe",
  "middle_name":null,
  "last_name":"Bloggs",
  "formal_name":null,
  "maiden_name":null,
  "sex":"m",
  "date_of_birth":null,
  "marital":"married",
  "spouse_id":null,
  "spouse_name":" ",
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
  "employer":null,
  "public_options":{
    "access":true,
    "visible":{
      "enabled":true,
      "address":false,
      "email":false,
      "mobile":false,
      "telephone":false
    }
  },
  "custom_fields":{
    "custom1":null,
    "custom2":null
  },
  "images":[
    
  ]
}
```

## Update an existing contact's details

* `PUT /v1/addressbook/contact/1` will update the details of an existing contact in the database

```json
{
  "first_name":"Jane",
  "last_name":"Bloggs",
  "email":"jane.bloggs@gmail.com",
  "sex":"f",
  "custom_fields":{
    "custom1":"@janebloggs"
  }
}
```

This will return one of the following HTTP codes:

* `200` contact updated
* `400` some of the data passed through was not valid
* `404` contact specified to update does not exist

This `PUT` method will return output in the following format:

```json
{
  "id":"174",
  "name":"Bloggs, Jane",
  "first_name":"Jane",
  "middle_name":null,
  "last_name":"Bloggs",
  "formal_name":null,
  "maiden_name":null,
  "sex":"f",
  "date_of_birth":null,
  "marital":"married",
  "spouse_id":null,
  "spouse_name":" ",
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
  "employer":null,
  "public_options":{
    "access":true,
    "visible":{
      "enabled":true,
      "address":false,
      "email":false,
      "mobile":false,
      "telephone":false
    }
  },
  "custom_fields":{
    "custom1":"@janebloggs",
    "custom2":null
  },
  "images":[
    
  ]
}
```


## Delete a contact

* `DELETE /v1/addressbook/contact/1` will attempt to delete the specified contact

```json

```

This will return one of the following HTTP codes:

* `200` contact deleted
* `404` contact specified to delete does not exist



## List tags

* `GET /v1/addressbook/tags` will return tags ordered alphabetically

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
      "no_contacts":"69"
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
      "no_contacts":"7"
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
      "no_contacts":"11"
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
  "name":"Wine Evening",
  "no_contacts":"2"
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
    "no_results":2,
    "page":1,
    "per_page":2
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
      "employer":"",
      "images":{
        "original_16":"https:\/\/demo.churchapp.co.uk\/files\/addressbook\/contacts\/rw\/112_4_16.jpg",
        "original_100":"https:\/\/demo.churchapp.co.uk\/files\/addressbook\/contacts\/rw\/112_4_100.jpg",
        "original_500":"https:\/\/demo.churchapp.co.uk\/files\/addressbook\/contacts\/rw\/112_4_500.jpg",
        "square_16":"https:\/\/demo.churchapp.co.uk\/files\/addressbook\/contacts\/sf\/112_4_16.jpg",
        "square_100":"https:\/\/demo.churchapp.co.uk\/files\/addressbook\/contacts\/sf\/112_4_100.jpg",
        "square_500":"https:\/\/demo.churchapp.co.uk\/files\/addressbook\/contacts\/sf\/112_4_500.jpg"
      }
    },
    {
      "id":"111",
      "name":"Baxter, Rachael",
      "first_name":"Rachael",
      "middle_name":"Susan",
      "last_name":"Baxter",
      "formal_name":null,
      "maiden_name":"Smith-Wilson",
      "sex":"f",
      "date_of_birth":"1944-06-21",
      "address":"71 Lamont Road",
      "address2":"Thorpe",
      "address3":null,
      "city":"",
      "county":"",
      "postcode":"NG9 2FE",
      "country":"",
      "telephone":"0161 730 2326",
      "mobile":"07587 801 882",
      "email":"rachael.baker@gmail.com",
      "job":"Carer",
      "employer":"",
      "images":{
        "original_16":"https:\/\/demo.churchapp.co.uk\/files\/addressbook\/contacts\/rw\/111_5_16.jpg",
        "original_100":"https:\/\/demo.churchapp.co.uk\/files\/addressbook\/contacts\/rw\/111_5_100.jpg",
        "original_500":"https:\/\/demo.churchapp.co.uk\/files\/addressbook\/contacts\/rw\/111_5_500.jpg",
        "square_16":"https:\/\/demo.churchapp.co.uk\/files\/addressbook\/contacts\/sf\/111_5_16.jpg",
        "square_100":"https:\/\/demo.churchapp.co.uk\/files\/addressbook\/contacts\/sf\/111_5_100.jpg",
        "square_500":"https:\/\/demo.churchapp.co.uk\/files\/addressbook\/contacts\/sf\/111_5_500.jpg"
      }
    }
  ]
}
```

This will return one of the following HTTP codes:

* `200` tag contacts returned
* `400` some of the data passed through was not valid, e.g. invalid URL
* `404` tag does not exist
