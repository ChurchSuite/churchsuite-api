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
    "no_results":3,
    "page":1,
    "per_page":1
  },
  "contacts":[
    {
      "id":112,
      "person_uuid":"cb246f98-65ef-4cd5-825f-1db639a37490",
      "type_id":"contact_112",
      "first_name":"George",
      "last_name":"Baker",
      "title":"Mr",
      "middle_name":"",
      "formal_name":"Formal",
      "former_name":"",
      "maiden_name":"",
      "sex":"m",
      "date_of_birth":"1969-03-30",
      "marital":"married",
      "spouse_id":1042,
      "address":"44 Pruder Lane",
      "address2":"",
      "address3":"",
      "city":"Nottingham",
      "county":"",
      "postcode":"NG9 2FE",
      "country":"",
      "latitude":52.926458,
      "longitude":-1.204129,
      "telephone":"0161 730 2326",
      "mobile":"07987 654 123",
      "work_telephone":"",
      "email":"george.baker1@gmail.com",
      "job":"Web Developer",
      "employer":"National Health Service",
      "public_options":{
        "invited":true,
        "access":true,
        "visible":{
          "enabled":true,
          "address":true,
          "email":true,
          "mobile":true,
          "telephone":true
        }
      },
      "communication":{
        "general_email":1,
        "general_sms":1,
        "phone":1,
        "post":1,
        "rota_email":1,
        "rota_sms":1
      },
      "location":{
        "address":"44 Pruder Lane, Nottingham, NG9 2FE",
        "latitude":"52.926458",
        "longitude":"-1.204129"
      },
      "custom_fields":[
        
      ],
      "images":[
        
      ],
      "ongoing_consent":{
        "required":1,
        "request_ctime":"2022-01-19 16:15:05",
        "granted_ctime":null,
        "granted_name":null
      },
      "status":"active",
      "site_id":1,
      "site_ids":[
        "1"
      ],
      "mtime":"2021-05-25 16:14:16",
      "muser":"richard",
      "ctime":"2011-07-18 22:20:12",
      "cuser":"import"
    }
  ]
}
```


## Get a contact

* `GET /v1/addressbook/contact/1` will return data for a specific contact

```json
{
  "id":1,
  "person_uuid":"557bed1b-18a3-422e-ad43-d95f6a5633b3",
  "type_id":"contact_1",
  "first_name":"Philip",
  "last_name":"Ward",
  "title":"",
  "middle_name":"",
  "formal_name":"",
  "former_name":null,
  "maiden_name":null,
  "sex":"m",
  "date_of_birth":"1981-12-26",
  "marital":"single",
  "spouse_id":null,
  "address":"194 Albert Drive",
  "address2":"Cotgrave",
  "address3":"",
  "city":"Nottingham",
  "county":"",
  "postcode":"NG3 5GE",
  "country":"",
  "latitude":52.980603,
  "longitude":-1.135087,
  "telephone":"01479 029 358",
  "mobile":"07223 446 512",
  "work_telephone":"",
  "email":"Wardy.phil@mail.com",
  "job":"Primary Teacher",
  "employer":"",
  "public_options":{
    "invited":true,
    "access":true,
    "visible":{
      "enabled":true,
      "address":false,
      "email":true,
      "mobile":true,
      "telephone":false
    }
  },
  "communication":{
    "general_email":1,
    "general_sms":1,
    "phone":1,
    "post":1,
    "rota_email":1,
    "rota_sms":1
  },
  "location":[
    
  ],
  "custom_fields":[
    
  ],
  "images":[
    
  ],
  "ongoing_consent":{
    "required":1,
    "request_ctime":"2021-04-01 14:03:23",
    "granted_ctime":null,
    "granted_name":null
  },
  "status":"active",
  "site_id":1,
  "site_ids":[
    "1"
  ],
  "mtime":"2021-04-30 12:14:43",
  "muser":"Paul",
  "ctime":"2011-07-18 22:20:12",
  "cuser":"import"
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
      "id":"1985",
      "tag_id":"1985",
      "name":"5Cs Committed",
      "description":"",
      "colour":"blue",
      "type":"smart"
    },
    {
      "id":"579",
      "tag_id":"579",
      "name":"DBS in progress",
      "description":"",
      "colour":"orange",
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

* `GET /v1/addressbook/contact/1/keydates` will return data for a specific contact

```json
{
  "keydates":[
    {
      "id":66,
      "name":"Unsubscribe phone calls",
      "date":"2021-11-23",
      "description":"Unsubscribed on 23-Nov-2021 3:18pm via",
      "resource_keydate_id":9955
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
  "dates":[
    {
      "name":"Married",
      "date":"2022-01-31"
    }
  ],
  "site_ids":[
    1
  ]
}
```

This will return one of the following HTTP codes:

* `201` contact created
* `400` some of the data passed through was not valid

This `POST` method will return output in the following format:

```json
{
  "id":1822,
  "person_uuid":"0ce3f344-f2fa-4376-b7a0-c5d4ef47bb4e",
  "type_id":"contact_1822",
  "first_name":"Joe",
  "last_name":"Bloggs",
  "title":"",
  "middle_name":null,
  "formal_name":null,
  "former_name":null,
  "maiden_name":null,
  "sex":"m",
  "date_of_birth":"",
  "marital":"married",
  "spouse_id":null,
  "address":"",
  "address2":"",
  "address3":"",
  "city":"",
  "county":"",
  "postcode":"NG1 1AB",
  "country":"GB",
  "latitude":52.955053,
  "longitude":-1.14103,
  "telephone":"",
  "mobile":"",
  "work_telephone":"",
  "email":"joe@bloggs.com",
  "job":null,
  "employer":null,
  "public_options":{
    "invited":false,
    "access":false,
    "visible":{
      "enabled":false
    }
  },
  "communication":{
    "general_email":0,
    "general_sms":0,
    "phone":0,
    "post":0,
    "rota_email":0,
    "rota_sms":0
  },
  "location":[
    
  ],
  "custom_fields":[
    
  ],
  "images":[
    
  ],
  "ongoing_consent":{
    "required":1,
    "request_ctime":null,
    "granted_ctime":null,
    "granted_name":null
  },
  "status":"active",
  "site_id":1,
  "site_ids":[
    "1"
  ],
  "mtime":"2022-01-31 09:41:52",
  "muser":"churchsuite",
  "ctime":"2022-01-31 09:41:52",
  "cuser":"churchsuite"
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
  "communication":{
    "general_email":false,
    "general_sms":true
  },
  "tags":[
    {
      "name":"Newcomers"
    },
    {
      "name":"Not in a group"
    }
  ]
}
```

This will return one of the following HTTP codes:

* `200` contact updated
* `400` some of the data passed through was not valid
* `404` contact specified to update does not exist

This `PUT` method will return output in the following format:

```json
{
  "id":1822,
  "person_uuid":"0ce3f344-f2fa-4376-b7a0-c5d4ef47bb4e",
  "type_id":"contact_1822",
  "first_name":"Jane",
  "last_name":"Bloggs",
  "title":"",
  "middle_name":null,
  "formal_name":null,
  "former_name":null,
  "maiden_name":null,
  "sex":"f",
  "date_of_birth":"",
  "marital":"married",
  "spouse_id":null,
  "address":"",
  "address2":"",
  "address3":"",
  "city":"",
  "county":"",
  "postcode":"NG1 1AB",
  "country":"GB",
  "latitude":52.955053,
  "longitude":-1.14103,
  "telephone":"",
  "mobile":"",
  "work_telephone":"",
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
  "communication":{
    "general_email":0,
    "general_sms":1,
    "phone":0,
    "post":0,
    "rota_email":0,
    "rota_sms":0
  },
  "location":[
    
  ],
  "custom_fields":[
    
  ],
  "images":[
    
  ],
  "ongoing_consent":{
    "required":1,
    "request_ctime":null,
    "granted_ctime":null,
    "granted_name":null
  },
  "status":"active",
  "site_id":1,
  "site_ids":[
    "1"
  ],
  "mtime":"2022-01-31 09:41:53",
  "muser":"churchsuite",
  "ctime":"2022-01-31 09:41:52",
  "cuser":"churchsuite"
}
```

## Delete a contact

* `DELETE /v1/addressbook/contact/1` will attempt to delete the specified contact

```json

```

This will return one of the following HTTP codes:

* `204` contact deleted
* `404` contact specified to delete does not exist



## List tags

* `GET /v1/addressbook/tags` will return tags ordered alphabetically

```json
{
  "pagination":{
    "no_results":58,
    "page":1,
    "per_page":2
  },
  "tags":[
    {
      "id":"1981",
      "tag_id":"1981",
      "name":"Alpha & Christianity Explored Invitees",
      "description":"",
      "colour":"blue",
      "type":"fixed",
      "no_contacts":15,
      "tag_no_contacts":15
    },
    {
      "id":"1953",
      "tag_id":"1953",
      "name":"Alpha Course Invitees",
      "description":"Potential invitees to the next Alpha Course",
      "colour":"blue",
      "type":"fixed",
      "no_contacts":13,
      "tag_no_contacts":13
    }
  ]
}
```


## Get a tag

* `GET /v1/addressbook/tag/1` will return data for a specific tag with the ID of 1
* `GET /v1/addressbook/tag/1?contacts=true` will return data for a specific tag, including all contacts with the tag

```json
{
  "id":"1981",
  "tag_id":"1981",
  "name":"Alpha & Christianity Explored Invitees",
  "description":"",
  "colour":"blue",
  "type":"fixed",
  "no_contacts":15,
  "tag_no_contacts":15
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
    "no_results":15,
    "page":1,
    "per_page":null
  },
  "contacts":[
    {
      "id":141,
      "person_uuid":"8ce26b46-82dd-45a3-82e6-4eb05f45f007",
      "type_id":"contact_141",
      "first_name":"Gemma",
      "last_name":"Alexander",
      "title":"Rev",
      "middle_name":"",
      "formal_name":"",
      "former_name":"Thomas",
      "maiden_name":"Thomas",
      "sex":"f",
      "date_of_birth":"1981-02-10",
      "marital":"married",
      "spouse_id":584,
      "address":"70 Montgomery Place",
      "address2":"Sherwood",
      "address3":"",
      "city":"Nottingham",
      "county":"",
      "postcode":"NG2 7TF",
      "country":"",
      "latitude":52.910247,
      "longitude":-1.150793,
      "telephone":"0115 786 4002",
      "mobile":"07775 354 829",
      "work_telephone":"",
      "email":"gemma.alexander@gmail.com",
      "job":"Administrative Officer",
      "employer":"Kings Hope Church",
      "public_options":{
        "invited":true,
        "access":true,
        "visible":{
          "enabled":true,
          "address":true,
          "email":true,
          "mobile":true,
          "telephone":true
        }
      },
      "communication":{
        "general_email":1,
        "general_sms":1,
        "phone":1,
        "post":1,
        "rota_email":1,
        "rota_sms":1
      },
      "location":{
        "address":"70 Montgomery Place, Sherwood, Nottingham, NG2 7TF",
        "latitude":"52.910247",
        "longitude":"-1.150793"
      },
      "custom_fields":[
        
      ],
      "images":[
        
      ],
      "ongoing_consent":{
        "required":1,
        "request_ctime":"2022-01-19 16:15:05",
        "granted_ctime":null,
        "granted_name":null
      },
      "status":"active",
      "site_id":1,
      "site_ids":[
        "1"
      ],
      "mtime":"2022-01-20 10:02:23",
      "muser":"richard",
      "ctime":"2014-07-07 16:30:45",
      "cuser":"richard"
    }
  ]
}
```

This will return one of the following HTTP codes:

* `200` tag contacts returned
* `400` some of the data passed through was not valid, e.g. invalid URL
* `404` tag does not exist



## List flows

* `GET /v1/addressbook/flows` will return flows ordered alphabetically

```json
{
  "pagination":{
    "no_results":22,
    "page":1,
    "per_page":1
  },
  "flows":[
    {
      "id":94,
      "name":"#DemoDataGenerated custom field flow",
      "notification_days":"[\"2\",\"5\",\"6\"]",
      "status":"active",
      "stages":[
        {
          "flow_id":94,
          "id":271,
          "name":"#DemoDataGenerated flow stage 1",
          "instructions":"",
          "due_interval":7,
          "due_period":"day",
          "due_from":"previous",
          "assigned_user":"",
          "order":1,
          "num_people":0,
          "mtime":"2022-01-31 08:57:10",
          "muser":null,
          "ctime":null,
          "cuser":null
        },
        {
          "flow_id":94,
          "id":272,
          "name":"#DemoDataGenerated flow stage 2",
          "instructions":"",
          "due_interval":7,
          "due_period":"day",
          "due_from":"previous",
          "assigned_user":"",
          "order":2,
          "num_people":0,
          "mtime":"2022-01-31 08:57:10",
          "muser":null,
          "ctime":null,
          "cuser":null
        }
      ],
      "mtime":"2022-01-31 08:57:10",
      "muser":"import",
      "ctime":"2022-01-31 08:57:10",
      "cuser":"import"
    }
  ]
}
```


## Get a flow

* `GET /v1/addressbook/flow/1` will return data for a specific flow

```json
{
  "id":94,
  "name":"#DemoDataGenerated custom field flow",
  "notification_days":"[\"2\",\"5\",\"6\"]",
  "status":"active",
  "stages":[
    {
      "flow_id":94,
      "id":271,
      "name":"#DemoDataGenerated flow stage 1",
      "instructions":"",
      "due_interval":7,
      "due_period":"day",
      "due_from":"previous",
      "assigned_user":"",
      "order":1,
      "num_people":0,
      "mtime":"2022-01-31 08:57:10",
      "muser":null,
      "ctime":null,
      "cuser":null
    },
    {
      "flow_id":94,
      "id":272,
      "name":"#DemoDataGenerated flow stage 2",
      "instructions":"",
      "due_interval":7,
      "due_period":"day",
      "due_from":"previous",
      "assigned_user":"",
      "order":2,
      "num_people":0,
      "mtime":"2022-01-31 08:57:10",
      "muser":null,
      "ctime":null,
      "cuser":null
    }
  ],
  "mtime":"2022-01-31 08:57:10",
  "muser":"import",
  "ctime":"2022-01-31 08:57:10",
  "cuser":"import"
}
```

This will return one of the following HTTP codes:

* `200` flow data returned
* `400` some of the data passed through was not valid, e.g. invalid URL
* `404` flow does not exist

## Get a flow's tracking data

* `GET /v1/addressbook/flow/1/tracking` will return data about the contacts who are at each stage of the flow

```json
{
  "pagination":{
    "no_results":2,
    "page":1,
    "per_page":null
  },
  "tracking":[
    {
      "id":1739,
      "resource_id":127,
      "resource_type":"addressbook_contact",
      "stage_id":271,
      "due_date":"2022-02-07",
      "due_user":"",
      "mtime":"2022-01-31 09:42:00",
      "muser":"churchsuite",
      "ctime":"2022-01-31 09:42:00",
      "cuser":"churchsuite"
    },
    {
      "id":1740,
      "resource_id":1,
      "resource_type":"addressbook_contact",
      "stage_id":271,
      "due_date":"2022-02-07",
      "due_user":"",
      "mtime":"2022-01-31 09:42:00",
      "muser":"churchsuite",
      "ctime":"2022-01-31 09:42:00",
      "cuser":"churchsuite"
    }
  ]
}
```

This will return one of the following HTTP codes:

* `200` stage/contact data returned
* `400` some of the data passed through was not valid, e.g. invalid URL
* `404` flow does not exist

## Add contacts to be tracked through a flow

* `POST /v1/addressbook/flow/1/tracking` will attempt to add new contacts to the flow's tracking

```json
{
  "tracking":[
    {
      "id":1741,
      "due_date":"2022-02-07",
      "due_user":"",
      "resource_id":122,
      "resource_type":"addressbook_contact",
      "stage_id":"271",
      "status":"pending"
    },
    {
      "id":1742,
      "due_date":"2022-02-07",
      "due_user":"",
      "resource_id":881,
      "resource_type":"addressbook_contact",
      "stage_id":"271",
      "status":"pending"
    }
  ]
}
```

This will return one of the following HTTP codes:

* `201` stage/contact data returned
* `400` some of the data passed through was not valid, e.g. invalid URL
* `404` flow does not exist or specified contact does not exist



## List key dates

* `GET /v1/addressbook/keydates` will return key dates ordered alphabetically

```json
{
  "pagination":{
    "no_results":36,
    "page":1,
    "per_page":2
  },
  "keydates":[
    {
      "id":12,
      "name":"Attended Alpha Course",
      "color":"purple",
      "mtime":"2018-03-30 21:21:59",
      "muser":"lindsey",
      "ctime":"2017-10-23 10:01:37",
      "cuser":"luke"
    },
    {
      "id":188,
      "name":"Attended APCM",
      "color":"blue",
      "mtime":"2022-01-13 15:57:12",
      "muser":"Sue",
      "ctime":"2022-01-13 15:57:12",
      "cuser":"Sue"
    }
  ]
}
```


## Get a key date

* `GET /v1/addressbook/keydate/1` will return data for a specific key date

```json
{
  "id":12,
  "name":"Attended Alpha Course",
  "color":"purple",
  "mtime":"2018-03-30 21:21:59",
  "muser":"lindsey",
  "ctime":"2017-10-23 10:01:37",
  "cuser":"luke"
}
```

This will return one of the following HTTP codes:

* `200` key date data returned
* `400` some of the data passed through was not valid, e.g. invalid URL
* `404` key date does not exist

## Get a key date's contacts

* `GET /v1/addressbook/keydate/1/contacts` will return the contacts for the "Attended Alpha Course" key date

```json
{
  "pagination":{
    "no_results":84,
    "page":1,
    "per_page":null
  },
  "keydates":[
    {
      "id":9731,
      "keydate_id":12,
      "resource_type":"addressbook_contact",
      "resource_id":44,
      "date":"2021-11-24",
      "description":"",
      "linked_resource_type":null,
      "linked_resource_id":null,
      "mtime":"2021-09-28 11:00:16",
      "muser":"Paul",
      "ctime":"2021-09-28 11:00:16",
      "cuser":"Paul"
    }
  ]
}
```

This will return one of the following HTTP codes:

* `200` key date contacts returned
* `400` some of the data passed through was not valid, e.g. invalid URL
* `404` key date does not exist
