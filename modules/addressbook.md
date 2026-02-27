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
      "person_id":172,
      "uuid":"cb246f98-65ef-4cd5-825f-1db639a37490",
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
  "pagination":{
    "no_results":16,
    "page":1,
    "per_page":null
  },
  "tags":[
    {
      "id":2024,
      "tag_id":2024,
      "name":"#DemoDataGenerated custom field smart tag",
      "description":"An example custom field tag to demonstrate referencing smart tags from other modules",
      "colour":"purple",
      "type":"smart",
      "tag_no_contacts":475,
      "no_contacts":475,
      "ctime":null,
      "cuser":null,
      "mtime":"2022-02-07 10:09:36",
      "muser":null
    },
    {
      "id":1204,
      "tag_id":1204,
      "name":"Active group members",
      "description":"",
      "colour":"blue",
      "type":"smart",
      "tag_no_contacts":115,
      "no_contacts":115,
      "ctime":"2019-02-05 11:52:40",
      "cuser":"gavin",
      "mtime":"2019-02-05 15:44:45",
      "muser":"gavin"
    },
    {
      "id":1367,
      "tag_id":1367,
      "name":"Consent Outstanding",
      "description":"",
      "colour":"red",
      "type":"smart",
      "tag_no_contacts":217,
      "no_contacts":217,
      "ctime":"2019-07-01 11:46:27",
      "cuser":"paul",
      "mtime":"2021-04-26 20:47:52",
      "muser":"Paul"
    },
    {
      "id":1924,
      "tag_id":1924,
      "name":"Contact Search Permitted",
      "description":"",
      "colour":"blue",
      "type":"smart",
      "tag_no_contacts":475,
      "no_contacts":475,
      "ctime":"2021-08-12 15:05:28",
      "cuser":"Paul",
      "mtime":"2021-08-12 15:05:28",
      "muser":"Paul"
    },
    {
      "id":579,
      "tag_id":579,
      "name":"DBS in progress",
      "description":"",
      "colour":"orange",
      "type":"fixed",
      "tag_no_contacts":113,
      "no_contacts":113,
      "ctime":"2017-03-24 16:05:23",
      "cuser":"richard",
      "mtime":"2022-01-13 15:23:23",
      "muser":"Sue"
    },
    {
      "id":1458,
      "tag_id":1458,
      "name":"Electoral roll",
      "description":"",
      "colour":"orange",
      "type":"smart",
      "tag_no_contacts":475,
      "no_contacts":475,
      "ctime":"2019-09-30 14:04:30",
      "cuser":"paul",
      "mtime":"2021-06-14 11:45:15",
      "muser":"Paul"
    },
    {
      "id":1672,
      "tag_id":1672,
      "name":"Mailing List - Building Project ??",
      "description":"",
      "colour":"grey",
      "type":"smart",
      "tag_no_contacts":475,
      "no_contacts":475,
      "ctime":"2020-06-10 17:56:02",
      "cuser":"Paul",
      "mtime":"2021-03-15 17:43:33",
      "muser":"Paul"
    },
    {
      "id":1670,
      "tag_id":1670,
      "name":"Mailing List - Children & Youth Events",
      "description":"",
      "colour":"grey",
      "type":"smart",
      "tag_no_contacts":475,
      "no_contacts":475,
      "ctime":"2020-06-10 17:55:35",
      "cuser":"Paul",
      "mtime":"2021-04-17 22:10:22",
      "muser":"Paul"
    },
    {
      "id":1663,
      "tag_id":1663,
      "name":"Mailing List - Foodbank",
      "description":"",
      "colour":"grey",
      "type":"smart",
      "tag_no_contacts":475,
      "no_contacts":475,
      "ctime":"2020-06-10 17:54:10",
      "cuser":"Paul",
      "mtime":"2020-06-10 20:08:39",
      "muser":"Paul"
    },
    {
      "id":1662,
      "tag_id":1662,
      "name":"Mailing List - Mission",
      "description":"",
      "colour":"grey",
      "type":"smart",
      "tag_no_contacts":475,
      "no_contacts":475,
      "ctime":"2020-06-10 17:53:59",
      "cuser":"Paul",
      "mtime":"2020-06-10 20:08:50",
      "muser":"Paul"
    },
    {
      "id":1666,
      "tag_id":1666,
      "name":"Mailing List - Serving Opportunities",
      "description":"",
      "colour":"grey",
      "type":"smart",
      "tag_no_contacts":475,
      "no_contacts":475,
      "ctime":"2020-06-10 17:54:50",
      "cuser":"Paul",
      "mtime":"2020-06-10 20:09:25",
      "muser":"Paul"
    },
    {
      "id":1665,
      "tag_id":1665,
      "name":"Mailing List - Small Groups",
      "description":"",
      "colour":"grey",
      "type":"smart",
      "tag_no_contacts":475,
      "no_contacts":475,
      "ctime":"2020-06-10 17:54:38",
      "cuser":"Paul",
      "mtime":"2020-06-10 20:09:34",
      "muser":"Paul"
    },
    {
      "id":1669,
      "tag_id":1669,
      "name":"Mailing List - Student Events",
      "description":"",
      "colour":"grey",
      "type":"smart",
      "tag_no_contacts":475,
      "no_contacts":475,
      "ctime":"2020-06-10 17:55:26",
      "cuser":"Paul",
      "mtime":"2020-06-10 20:09:50",
      "muser":"Paul"
    },
    {
      "id":1664,
      "tag_id":1664,
      "name":"Mailing List - Vision and Values",
      "description":"",
      "colour":"grey",
      "type":"smart",
      "tag_no_contacts":475,
      "no_contacts":475,
      "ctime":"2020-06-10 17:54:26",
      "cuser":"Paul",
      "mtime":"2020-06-10 20:09:59",
      "muser":"Paul"
    },
    {
      "id":1661,
      "tag_id":1661,
      "name":"Mailing List - Weekly church news",
      "description":"",
      "colour":"grey",
      "type":"smart",
      "tag_no_contacts":475,
      "no_contacts":475,
      "ctime":"2020-06-10 17:53:40",
      "cuser":"Paul",
      "mtime":"2021-04-26 20:47:00",
      "muser":"Paul"
    },
    {
      "id":1882,
      "tag_id":1882,
      "name":"Member",
      "description":"",
      "colour":"orange",
      "type":"smart",
      "tag_no_contacts":475,
      "no_contacts":475,
      "ctime":"2021-04-15 12:40:43",
      "cuser":"churchsuite",
      "mtime":"2021-04-15 12:40:43",
      "muser":"churchsuite"
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
      "date":"2022-02-14"
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
  "id":1795,
  "person_uuid":"74786666-abac-4529-a47e-beacc7707466",
  "type_id":"contact_1795",
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
    "access":true,
    "visible":{
      "enabled":true,
      "address":false,
      "email":false,
      "mobile":false,
      "telephone":false
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
  "mtime":"2022-02-14 08:15:28",
  "muser":"churchsuite",
  "ctime":"2022-02-14 08:15:28",
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
    "Newcomers",
    "Not in a group"
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
  "id":1795,
  "person_uuid":"74786666-abac-4529-a47e-beacc7707466",
  "type_id":"contact_1795",
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
    "access":true,
    "visible":{
      "enabled":true,
      "address":false,
      "email":false,
      "mobile":false,
      "telephone":false
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
  "mtime":"2022-02-14 08:15:29",
  "muser":"churchsuite",
  "ctime":"2022-02-14 08:15:28",
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
    "no_results":42,
    "page":1,
    "per_page":2
  },
  "tags":[
    {
      "id":1953,
      "tag_id":1953,
      "name":"Alpha Course Invitees",
      "description":"Potential invitees to the next Alpha Course",
      "colour":"blue",
      "type":"fixed",
      "tag_no_contacts":15,
      "no_contacts":15,
      "ctime":"2021-10-04 22:42:35",
      "cuser":"churchsuite",
      "mtime":"2022-02-08 18:30:53",
      "muser":"churchsuite"
    },
    {
      "id":2028,
      "tag_id":2028,
      "name":"Array",
      "description":null,
      "colour":"blue",
      "type":"fixed",
      "tag_no_contacts":0,
      "no_contacts":0,
      "ctime":"2022-02-14 08:13:38",
      "cuser":"churchsuite",
      "mtime":"2022-02-14 08:15:31",
      "muser":"churchsuite"
    }
  ]
}
```


## Get a tag

* `GET /v1/addressbook/tag/1` will return data for a specific tag with the ID of 1
* `GET /v1/addressbook/tag/1?contacts=true` will return data for a specific tag, including all contacts with the tag

```json
{
  "id":1953,
  "tag_id":1953,
  "name":"Alpha Course Invitees",
  "description":"Potential invitees to the next Alpha Course",
  "colour":"blue",
  "type":"fixed",
  "tag_no_contacts":15,
  "no_contacts":15,
  "ctime":"2021-10-04 22:42:35",
  "cuser":"churchsuite",
  "mtime":"2022-02-08 18:30:53",
  "muser":"churchsuite"
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
    "per_page":15
  },
  "contacts":[
    {
      "id":141,
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
      "person_id":499,
      "uuid":"d257692a-cb4b-49a7-8601-7191e91fc112",
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
        "required":0,
        "request_ctime":"2022-01-19 16:15:05",
        "granted_ctime":"2022-02-08 21:43:35",
        "granted_name":"frw"
      },
      "status":"active",
      "site_id":1,
      "site_ids":[
        "1"
      ],
      "mtime":"2022-02-08 21:43:34",
      "muser":"myconsent",
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
      "mtime":"2022-02-07 10:09:36",
      "muser":"import",
      "ctime":"2022-02-07 10:09:36",
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
  "mtime":"2022-12-19 10:15:24",
  "muser":"import",
  "ctime":"2022-12-19 10:15:24",
  "cuser":"import"
}
```

This will return one of the following HTTP codes:

* `200` flow data returned
* `400` some of the data passed through was not valid, e.g. invalid URL
* `404` flow does not exist

## Get the stages for a flow

* `GET /v1/addressbook/flow_stages/{flow_id}` will return data about the stages for a flow

```json
{
  "pagination":{
    "no_results":2,
    "page":1,
    "per_page":null
  },
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
      "mtime":"2022-02-07 10:09:36",
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
      "mtime":"2022-02-07 10:09:36",
      "muser":null,
      "ctime":null,
      "cuser":null
    }
  ]
}
```

This will return one of the following HTTP codes:

* `200` stages data returned
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
      "id":1738,
      "resource_id":127,
      "resource_type":"addressbook_contact",
      "stage_id":271,
      "due_date":"2022-02-21",
      "due_user":"",
      "mtime":"2022-02-14 08:15:37",
      "muser":"churchsuite",
      "ctime":"2022-02-14 08:15:37",
      "cuser":"churchsuite"
    },
    {
      "id":1739,
      "resource_id":1,
      "resource_type":"addressbook_contact",
      "stage_id":271,
      "due_date":"2022-02-21",
      "due_user":"",
      "mtime":"2022-02-14 08:15:37",
      "muser":"churchsuite",
      "ctime":"2022-02-14 08:15:37",
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
  "action":"add",
  "contacts":[
    {
      "contact_id":122,
      "stage_id":null
    },
    {
      "contact_id":881
    }
  ]
}
```

This will return one of the following HTTP codes:

* `201` stage/contact data returned
* `400` some of the data passed through was not valid, e.g. invalid URL
* `404` flow does not exist or specified contact does not exist

This `POST` method will return output in the following format:

```json
{
  "tracking":[
    {
      "id":1785,
      "due_date":"2022-05-03",
      "due_user":"",
      "resource_id":122,
      "resource_type":"addressbook_contact",
      "stage_id":"271",
      "status":"pending"
    },
    {
      "id":1786,
      "due_date":"2022-05-03",
      "due_user":"",
      "resource_id":881,
      "resource_type":"addressbook_contact",
      "stage_id":"271",
      "status":"pending"
    }
  ]
}
```


## List key dates

* `GET /v1/addressbook/keydates` will return key dates ordered alphabetically

```json
{
  "pagination":{
    "no_results":30,
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

* `GET /v1/addressbook/keydate/1/contacts` will return the contacts for a specific key date

```json
{
  "pagination":{
    "no_results":88,
    "page":1,
    "per_page":null
  },
  "keydates":[
    {
      "id":10140,
      "keydate_id":12,
      "resource_type":"addressbook_contact",
      "resource_id":1581,
      "date":"2022-02-04",
      "description":"",
      "linked_resource_type":null,
      "linked_resource_id":null,
      "mtime":"2022-02-04 15:13:46",
      "muser":"alys",
      "ctime":"2022-02-04 15:13:46",
      "cuser":"alys"
    }
  ]
}
```

This will return one of the following HTTP codes:

* `200` key date contacts returned
* `400` some of the data passed through was not valid, e.g. invalid URL
* `404` key date does not exist
