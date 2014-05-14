# Children

[Home](https://github.com/ChurchApp/churchapp-api)

The Children module manages all children and youth within ChurchApp. The following endpoints are available:

## List/search children

* `GET /v1/children/children will return contacts ordered alphabetically
* `GET /v1/children/children?q=sarah` will return contacts whose Name, Address, Email, Telephone, Mobile or Parent Name contains "sarah"
* `GET /v1/children/children?page=2 will return the second page of contacts
* `GET /v1/children/children?page=2&per_page=5 will return the second page of contacts, with each page limited to 5 results

```json
{
  "pagination":{
    "no_results":63,
    "page":1,
    "per_page":2
  },
  "children":[
    {
      "id":"59",
      "contact_id":"112",
      "name":"Baker, Amelia",
      "first_name":"Amelia",
      "last_name":"Baker",
      "sex":"f",
      "date_of_birth":"2003-08-07",
      "mobile":"",
      "email":"",
      "telephone":"",
      "location":{
        "address":"",
        "latitude":null,
        "longitude":null
      },
      "consent":{
        "internal":"0",
        "external":"0"
      },
      "school":"Camberwick Green Secondary School",
      "medical":"",
      "medical_short":"",
      "special_needs":"",
      "doctor_details":"",
      "images":[
        
      ]
    },
    {
      "id":"57",
      "contact_id":"112",
      "name":"Baker, Harry",
      "first_name":"Harry",
      "last_name":"Baker",
      "sex":"m",
      "date_of_birth":"2005-07-30",
      "mobile":"",
      "email":"",
      "telephone":"",
      "location":{
        "address":"",
        "latitude":null,
        "longitude":null
      },
      "consent":{
        "internal":"0",
        "external":"0"
      },
      "school":"Dunshire Primary School",
      "medical":"",
      "medical_short":"",
      "special_needs":"",
      "doctor_details":"",
      "images":[
        
      ]
    }
  ]
}
```


## Get a child

* `GET /v1/children/child/1` will return data for a specific child

```json
{
  "id":"1",
  "contact_id":"2",
  "name":"Wright, Micah",
  "first_name":"Micah",
  "last_name":"Wright",
  "sex":"m",
  "date_of_birth":"2007-05-28",
  "mobile":"",
  "email":null,
  "telephone":"01062 438 661",
  "location":{
    "address":"24 Frederick Crescent, Wollaton, NG5 3DW",
    "latitude":null,
    "longitude":null
  },
  "consent":{
    "internal":"0",
    "external":"0"
  },
  "school":"Southam St James Primary School",
  "medical":null,
  "medical_short":null,
  "special_needs":null,
  "doctor_details":"Netherfield Medical Centre, 2a Forester Street, Netherfield, Nottingham, NG42NJ",
  "images":[
    
  ]
}
```

This will return one of the following HTTP codes:

* `200` child data returned
* `400` some of the data passed through was not valid, e.g. invalid URL
* `404` child does not exist

## Create a new child

* `POST /v1/children/child` will create a new child in the Address Book

```json
{
  "id":"65",
  "contact_id":null,
  "name":"Bloggs, Joe",
  "first_name":"Joe",
  "last_name":"Bloggs",
  "sex":"m",
  "date_of_birth":"2010-09-21",
  "mobile":"",
  "email":"joe@bloggs.com",
  "telephone":"",
  "location":{
    "address":"",
    "latitude":null,
    "longitude":null
  },
  "consent":{
    "internal":"0",
    "external":"0"
  },
  "school":null,
  "medical":null,
  "medical_short":null,
  "special_needs":null,
  "doctor_details":null,
  "images":[
    
  ]
}
```

This will return one of the following HTTP codes:

* `201` child created
* `400` some of the data passed through was not valid

## Update an existing child's details

* `PUT /v1/children/child/1` will update the details of an existing child in the database

```json
{
  "id":"65",
  "contact_id":null,
  "name":"Bloggs, Jane",
  "first_name":"Jane",
  "last_name":"Bloggs",
  "sex":"f",
  "date_of_birth":"2010-09-21",
  "mobile":"",
  "email":"jane.bloggs@gmail.com",
  "telephone":"",
  "location":{
    "address":"",
    "latitude":null,
    "longitude":null
  },
  "consent":{
    "internal":"0",
    "external":"0"
  },
  "school":null,
  "medical":null,
  "medical_short":null,
  "special_needs":null,
  "doctor_details":null,
  "images":[
    
  ]
}
```

This will return one of the following HTTP codes:

* `200` child updated
* `400` some of the data passed through was not valid
* `404` child specified to update does not exist

## Delete a child

* `DELETE /v1/children/child/1` will attempt to delete the specified child

```json

```

This will return one of the following HTTP codes:

* `200` child deleted
* `404` child specified to delete does not exist
