# Address Book

[Home](https://github.com/ChurchSuite/churchsuite-api)

The Address Book module is concerned with the management of contacts within ChurchSuite, the following endpoints are available:

## List/search contacts

* `GET /v1/addressbook/contacts` will return contacts ordered alphabetically
* `GET /v1/addressbook/contacts?name=gavin+courtney` will return contacts whose Name matches "gavin courtney"
* `GET /v1/addressbook/contacts?q=gavin` will return contacts whose Name, Address, Job, Email, Telephone or Mobile contains "gavin"
* `GET /v1/addressbook/contacts?page=2` will return the second page of contacts
* `GET /v1/addressbook/contacts?page=2&per_page=5` will return the second page of contacts, with each page limited to 5 results
* `GET /v1/addressbook/contacts?public_access=1` will return contacts filtered by "Allow My ChurchSuite access". Valid values are [0, 1].
* `GET /v1/addressbook/contacts?public_invited=1` will return contacts filtered by whether they have been sent a My ChurchSuite invite or not. Valid values are [0, 1].
* `GET /v1/addressbook/contacts?public_visible=0` will return contacts filtered by their Public Communication "Name is visible" setting. Valid values are [null, 0, 1]. By default, only contacts with `public_visible=1` will be returned.
* `GET /v1/addressbook/contacts?view=archived` will return archived contacts; by default only active contacts will be returned. Valid values are ['active', 'archived'].

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
      "email":"support@churchsuite.com",
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
      
      },
      "images":[
        
      ]
    }
  ]
}
```


## Get a contact

* `GET /v1/addressbook/contact/1` will return data for a specific contact

```json
{
  "id":"1",
  "first_name":"Philip",
  "last_name":"Ward",
  "site_id":"1",
  "name":"Ward, Philip",
  "middle_name":"",
  "formal_name":"",
  "maiden_name":"",
  "sex":"m",
  "date_of_birth":"1981-12-26",
  "marital":"single",
  "spouse_id":null,
  "spouse_name":" ",
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
  
  },
  "images":[
    
  ],
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
      "id":"7",
      "tag_id":"7",
      "name":"Members",
      "description":"",
      "type":"fixed"
    }
  ]
}
```

This will return one of the following HTTP codes:

* `200` contact tags returned
* `400` some of the data passed through was not valid, e.g. invalid URL
* `404` contact does not exist

## Get a contact's key dates

* `GET /v1/addressbook/contact/1/keydates` will return data for a specific contact, where "resource_keydate_id" is a unique link id linking the key date and contact

```json
{
  "keydates":[
    {
      "id":1,
      "name":"Attended First Aid Training",
      "date":"2020-08-16",
      "description":"Focus on first aid for children",
      "resource_keydate_id":12
    },
    {
      "id":2,
      "name":"Baptism",
      "date":"2002-05-07",
      "description":"",
      "resource_keydate_id":7
    }
  ]
}
```

This will return one of the following HTTP codes:

* `200` contact key dates returned
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
  "keydates":[
    {
      "name":"Married",
      "date":"2014-10-14",
      "description":"To Rachel (Smith) Bloggs"
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
  
  },
  "images":[
    
  ]
}
```

## Update an existing contact's details

* `PUT /v1/addressbook/contact/1` will update the details of an existing contact in the database. If you include tags in this request please note that whatever you pass through will replace any tags already listed against the contact.

```json
{
  "first_name":"Jane",
  "last_name":"Bloggs",
  "email":"jane.bloggs@gmail.com",
  "sex":"f",
  "email_opt_out":false,
  "sms_opt_out":true,
  "custom_fields":{
    "custom1":"@janebloggs"
  },
  "tags":["Newcomers","Not in a group"]
}
```

This will return one of the following HTTP codes:

* `200` contact updated
* `400` some of the data passed through was not valid
* `404` contact specified to update does not exist

This `PUT` method will return output in the following format:

```json
{
  "id":"562",
  "first_name":"Jane",
  "last_name":"Bloggs",
  "type_id":"contact_562",
  "site_id":"1",
  "title":"",
  "name":"Bloggs, Jane",
  "middle_name":null,
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
  "work_telephone":null,
  "email":"jane.bloggs@gmail.com",
  "job":null,
  "employer":null,
  "public_options":{
    "invited":false,
    "access":false,
    "visible":{
      "enabled":false
    }
  },
  "custom_fields":{
  
  },
  "images":[
    
  ],
  "has_email_opt_out":false,
  "has_sms_opt_out":true
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
    "no_results":5,
    "page":1,
    "per_page":10
  },
  "tags":[
        {
            "id": "1",
            "tag_id": "1",
            "name": "Christianity Explored Potential Invitees",
            "description": null,
            "colour": "blue",
            "type": "fixed"
        },
        {
            "id": "2",
            "tag_id": "2",
            "name": "DBS In a Ministry requiring DBS Check",
            "description": "",
            "colour": "orange",
            "type": "smart"
        },
        {
            "id": "3",
            "tag_id": "3",
            "name": "e-Newsletter",
            "description": "Address Book contacts who have consented to receiving the weekly church e-newsletter.",
            "colour": "purple",
            "type": "fixed"
        },
        {
            "id": "4",
            "tag_id": "4",
            "name": "Member",
            "description": null,
            "colour": "blue",
            "type": "fixed"
        },
        {
            "id": "5",
            "tag_id": "5",
            "name": "My ChurchSuite Search for Others Opted-In",
            "description": "",
            "colour": "blue",
            "type": "smart"
        }
  ]
}
```




## Get a tag

* `GET /v1/addressbook/tag/1` will return data for a specific tag with the ID of 1
* `GET /v1/addressbook/tag/1?contacts=true` will return data for a specific tag, including all contacts with the tag

```json
{
  "id":"1",
  "tag_id":"1",
  "name":"Church Administrator",
  "description": "",
  "colour": "blue",
  "type":"fixed",
  "tag_no_contacts":"2",
  "no_contacts":"2"
}
```

This will return one of the following HTTP codes:

* `200` tag data returned
* `400` some of the data passed through was not valid, e.g. invalid URL
* `404` tag does not exist

## Get a tag's contacts

* `GET /v1/addressbook/tag/1/contacts` will return the contacts for the tag with the ID of 1

```json
{
  "pagination":{
    "no_results":2,
    "page":1,
    "per_page":2
  },
  "contacts":[
    {
      "id":"141",
      "first_name":"Gemma",
      "last_name":"Alexander",
      "site_id":"1",
      "name":"Alexander, Gemma",
      "middle_name":"",
      "formal_name":"",
      "maiden_name":"",
      "sex":"f",
      "date_of_birth":"1982-05-05",
      "marital":"married",
      "spouse_id":"147",
      "spouse_name":"Jim Moriarty",
      "address":"28 Cavendish Grove",
      "address2":"Sherwood",
      "address3":null,
      "city":"Nottingham",
      "county":"Nottinghamshire",
      "postcode":"NG23 8TC",
      "country":"United Kingdom",
      "telephone":"0115 786 4001",
      "mobile":"07775 354 829",
      "email":"gemma.alexander@gmail.com",
      "job":"Administrative Officer",
      "employer":"",
      "public_options":{
        "access":true,
        "visible":{
          "enabled":true,
          "address":true,
          "email":true,
          "mobile":false,
          "telephone":false
        }
      },
      "custom_fields":{
      
      },
      "images":[
        
      ]
    },
    {
      "id":"152",
      "first_name":"David",
      "last_name":"Crank",
      "site_id":"1",
      "middle_name":"",
      "formal_name":"",
      "maiden_name":"",
      "sex":"m",
      "date_of_birth":"1951-09-24",
      "marital":"married",
      "spouse_id":"153",
      "address":"10 Northcott Way",
      "address2":"",
      "address3":null,
      "city":"Dunstable",
      "county":"",
      "postcode":"LU5 4AH",
      "country":"",
      "telephone":"01582 600 710",
      "mobile":"07832 409 238",
      "email":"administrator@christchurch.org.uk",
      "job":"Church Administrator",
      "employer":"Christ Church",
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
      
      },
      "images":[
        
      ]
    }
  ]
}
```

This will return one of the following HTTP codes:

* `200` tag contacts returned
* `400` some of the data passed through was not valid, e.g. invalid URL
* `404` tag does not exist


## List key dates

* `GET /v1/addressbook/keydates` will return key dates ordered alphabetically

```json
{
  "pagination":{
    "no_results":10,
    "page":1,
    "per_page":10
  },
  "keydates":[
    {
        "id": 12,
        "name": "Attended Alpha Course",
        "color": "purple",
        "mtime": "2018-03-30 21:21:59",
        "muser": "lindsey",
        "ctime": "2017-10-23 10:01:37",
        "cuser": "luke"
    },
    {
        "id": 31,
        "name": "Attended First Aid Training",
        "color": "purple",
        "mtime": "2021-01-10 22:18:35",
        "muser": "churchsuite",
        "ctime": "2019-09-06 13:52:00",
        "cuser": "paul"
    },
  ]
}
```

## Get a key date

* `GET /v1/addressbook/keydate/12` will return data for a specific key date

```json
{
  "id": 12,
  "name": "Attended Alpha Course",
  "color": "purple",
  "mtime": "2018-03-30 21:21:59",
  "muser": "lindsey",
  "ctime": "2017-10-23 10:01:37",
  "cuser": "luke"
}
```

This will return one of the following HTTP codes:

* `200` key date data returned
* `400` some of the data passed through was not valid, e.g. invalid URL
* `404` key date does not exist

## Get a key date's resources

* `GET /v1/addressbook/keydate_resources?keydate_id=12` will return the resources for the specified key date
* `GET /v1/addressbook/keydate_resources?contact_id=127` will return the resources for the specified contact_id

This will return one of the following HTTP codes:

```json
{
  "pagination": {
    "no_results": 21,
    "page": 1,
    "per_page": 50
  },
  "keydates": [
    {
      "id": 3891,
      "keydate_id": 12,
      "resource_type": "addressbook_contact",
      "resource_id": 127,
      "date": "2018-02-27",
      "description": "",
      "linked_resource_type": null,
      "linked_resource_id": null,
      "mtime": "2018-02-27 17:07:06",
      "muser": "paul",
      "ctime": "2018-02-27 17:07:06",
      "cuser": "paul"
    },
  ],
}
```

* `200` key date resources returned
* `400` some of the data passed through was not valid, e.g. invalid URL
