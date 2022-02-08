# Children

[Home](https://github.com/ChurchSuite/churchsuite-api)

The Children module manages all children and youth within ChurchSuite. The following endpoints are available:

## List/search children

* `GET /v1/children/children` will return people ordered alphabetically
* `GET /v1/children/children?q=sarah` will return people whose Name, Address, Email, Telephone, Mobile or Parent Name contains "sarah"
* `GET /v1/children/children?page=2` will return the second page of people
* `GET /v1/children/children?page=2&per_page=5` will return the second page of people, with each page limited to 5 results

```json
{
  "pagination":{
    "no_results":153,
    "page":1,
    "per_page":1
  },
  "children":[
    {
      "id":1029,
      "person_uuid":"5da14d88-af94-4813-8167-c694840793ae",
      "type_id":"child_1029",
      "first_name":"Taupe",
      "middle_name":null,
      "last_name":"Parsons",
      "name":"Taupe Parsons",
      "formal_name":null,
      "sex":"m",
      "date_of_birth":"2007-08-04",
      "telephone":"",
      "mobile":"",
      "email":"",
      "address":{
        "id":2356,
        "line1":"",
        "line2":"",
        "line3":"",
        "city":"",
        "county":"",
        "postcode":"",
        "country":""
      },
      "location":{
        "address":"",
        "latitude":null,
        "longitude":null
      },
      "contact_id":1698,
      "parent":{
        "additional_emails":[
          
        ],
        "additional_mobiles":[
          
        ],
        "primary":{
          "contact_id":1698,
          "first_name":"Steve",
          "last_name":"Parsons",
          "sex":"m",
          "relationship":"parent",
          "email":"",
          "mobile":"",
          "telephone":"",
          "communication":{
            "general_email":1,
            "general_sms":1
          }
        },
        "secondary":{
          "contact_id":1699,
          "first_name":"Delia",
          "last_name":"Parsons",
          "sex":"f",
          "relationship":"parent",
          "email":"",
          "mobile":"",
          "telephone":"",
          "communication":{
            "general_email":1,
            "general_sms":1
          }
        }
      },
      "custom_fields":[
        
      ],
      "school":null,
      "medical_short":null,
      "medical":"",
      "doctor_details":null,
      "special_needs":null,
      "info":null,
      "communication":{
        "general_email":1,
        "general_sms":1,
        "phone":0,
        "post":1,
        "rota_email":1,
        "rota_sms":1
      },
      "has_email_opt_out":false,
      "has_rota_email_opt_out":false,
      "has_rota_sms_opt_out":false,
      "has_sms_opt_out":false,
      "consent":{
        "internal":null,
        "external":null
      },
      "ongoing_consent":{
        "required":1,
        "request_ctime":null,
        "granted_ctime":null,
        "granted_name":null
      },
      "site_id":19,
      "site_ids":[
        "19"
      ],
      "status":"active",
      "images":[
        
      ],
      "mtime":"2021-11-26 10:28:24",
      "muser":"Paul",
      "ctime":"2021-01-27 16:41:01",
      "cuser":"connect"
    }
  ]
}
```


## Get a child

* `GET /v1/children/child/1` will return data for a specific child

```json
{
  "id":1,
  "person_uuid":"026d5e1d-1e3a-47ac-844d-92777ce0e880",
  "type_id":"child_1",
  "first_name":"Micah",
  "middle_name":"",
  "last_name":"Wright",
  "name":"Micah Wright",
  "formal_name":"",
  "sex":"m",
  "date_of_birth":"2007-05-28",
  "telephone":"01062 438 661",
  "mobile":"",
  "email":"",
  "address":{
    "id":0,
    "line1":"57 Evington Road",
    "line2":"Clarendon Park",
    "line3":"",
    "city":"Leicester",
    "county":"",
    "postcode":"LE2 1HG",
    "country":""
  },
  "location":{
    "address":"57 Evington Road, Clarendon Park, Leicester, LE2 1HG",
    "latitude":"52.626616",
    "longitude":"-1.114667"
  },
  "contact_id":2,
  "parent":{
    "additional_emails":[
      
    ],
    "additional_mobiles":[
      
    ],
    "primary":{
      "contact_id":2,
      "first_name":"Paula",
      "last_name":"Wright",
      "sex":"f",
      "relationship":"parent",
      "email":"paula.wright@live.com",
      "mobile":"07369 801 623",
      "telephone":"01062 438 661",
      "communication":{
        "general_email":1,
        "general_sms":1
      }
    },
    "secondary":{
      "contact_id":3,
      "first_name":"Joe",
      "last_name":"Wright",
      "sex":"m",
      "relationship":"parent",
      "email":"joe.wright@btconnect.com",
      "mobile":"07122 783 153",
      "telephone":"01062 438 661",
      "communication":{
        "general_email":1,
        "general_sms":0
      }
    }
  },
  "custom_fields":[
    
  ],
  "school":"Southam St James Primary School",
  "medical_short":"",
  "medical":"",
  "doctor_details":"Netherfield Medical Centre, 2a Forester Street, Netherfield, Nottingham, NG42NJ",
  "special_needs":"",
  "info":"",
  "communication":{
    "general_email":1,
    "general_sms":1,
    "phone":0,
    "post":1,
    "rota_email":1,
    "rota_sms":1
  },
  "has_email_opt_out":false,
  "has_rota_email_opt_out":false,
  "has_rota_sms_opt_out":false,
  "has_sms_opt_out":false,
  "consent":{
    "internal":"0",
    "external":"0"
  },
  "ongoing_consent":{
    "required":1,
    "request_ctime":null,
    "granted_ctime":null,
    "granted_name":null
  },
  "site_id":20,
  "site_ids":[
    "20"
  ],
  "status":"active",
  "images":[
    
  ],
  "mtime":"2021-11-26 10:28:24",
  "muser":"Paul",
  "ctime":"2013-01-15 22:21:09",
  "cuser":"chris"
}
```

This will return one of the following HTTP codes:

* `200` child data returned
* `400` some of the data passed through was not valid, e.g. invalid URL
* `404` child does not exist

## Get a child's tags

* `GET /v1/children/child/1/tags` will return data for a specific child

```json
{
  "tags":[
    {
      "id":"2025",
      "tag_id":"2025",
      "name":"#DemoDataGenerated custom field smart tag",
      "description":"An example custom field tag to demonstrate referencing smart tags from other modules",
      "colour":"purple",
      "type":"smart",
      "no_children":135,
      "tag_no_children":135
    },
    {
      "id":"897",
      "tag_id":"897",
      "name":"Consent: Outstanding",
      "description":"",
      "colour":"red",
      "type":"smart",
      "no_children":98,
      "tag_no_children":98
    },
    {
      "id":"246",
      "tag_id":"246",
      "name":"Nativity Play - Christmas 2020",
      "description":"",
      "colour":"blue",
      "type":"fixed",
      "no_children":22,
      "tag_no_children":22
    }
  ]
}
```

This will return one of the following HTTP codes:

* `200` child tags returned
* `400` some of the data passed through was not valid, e.g. invalid URL
* `404` child does not exist

## Get a child's key dates

* `GET /v1/children/child/1/keydates` will return data for a specific child

```json
{
  "keydates":[
    {
      "id":151,
      "name":"Unsubscribe phone calls",
      "date":"2021-01-08",
      "description":"Unsubscribed on 08-Jan-2021 12:24pm via",
      "resource_keydate_id":9138
    },
    {
      "id":152,
      "name":"Unsubscribe post",
      "date":"2021-01-08",
      "description":"Unsubscribed on 08-Jan-2021 12:24pm via",
      "resource_keydate_id":9139
    },
    {
      "id":21,
      "name":"Joined ministry",
      "date":"2016-03-16",
      "description":"Kids",
      "resource_keydate_id":3296
    },
    {
      "id":21,
      "name":"Joined ministry",
      "date":"2016-02-05",
      "description":"Media team",
      "resource_keydate_id":3272
    }
  ]
}
```

This will return one of the following HTTP codes:

* `200` child key dates returned
* `400` some of the data passed through was not valid, e.g. invalid URL
* `404` child does not exist

## Get a child's groups

* `GET /v1/children/child/1/groups` will return data for a specific child

```json
{
  "pagination":{
    "no_results":2,
    "page":1,
    "per_page":null
  },
  "groups":[
    {
      "id":123,
      "name":"Cohesion",
      "gathering_id":20,
      "gathering_name":"Kings Kids & Youth (Leicester)",
      "checkin_badges_child":0,
      "checkin_badges_pickup":0,
      "checkin_badges_room":0,
      "checkin_capacity":null,
      "checkin_ratio":7,
      "entry_age":13,
      "entry_age_months":0,
      "entry_month":9,
      "entry_rule":"13 years processed in September",
      "status":"active",
      "ctime":"2018-04-24 13:26:58",
      "cuser":"paul",
      "mtime":"2021-01-08 19:20:33",
      "muser":"Paul"
    },
    {
      "id":192,
      "name":"Sparklers Zoom Group",
      "gathering_id":23,
      "gathering_name":"Online Kids Church",
      "checkin_badges_child":0,
      "checkin_badges_pickup":0,
      "checkin_badges_room":0,
      "checkin_capacity":null,
      "checkin_ratio":0,
      "entry_age":8,
      "entry_age_months":0,
      "entry_month":9,
      "entry_rule":"8 years processed in September",
      "status":"active",
      "ctime":"2021-02-10 11:14:47",
      "cuser":"Paul",
      "mtime":"2021-02-10 11:14:47",
      "muser":"Paul"
    }
  ]
}
```

This will return one of the following HTTP codes:

* `200` child groups returned
* `400` some of the data passed through was not valid, e.g. invalid URL
* `404` child does not exist

## Create a new child

* `POST /v1/children/child` will create a new child in the Address Book

```json
{
  "first_name":"Joe",
  "last_name":"Bloggs",
  "email":"joe@bloggs.com",
  "sex":"m",
  "date_of_birth":"2010-09-21",
  "site_ids":[
    1
  ]
}
```

This will return one of the following HTTP codes:

* `201` child created
* `400` some of the data passed through was not valid

This `POST` method returns output in the following format:

```json
{
  "id":1085,
  "person_uuid":"92da1e7a-c9c1-4fb8-a4dc-0aee69895905",
  "type_id":"child_1085",
  "first_name":"Joe",
  "middle_name":null,
  "last_name":"Bloggs",
  "name":"Joe Bloggs",
  "formal_name":null,
  "sex":"m",
  "date_of_birth":"2010-09-21",
  "telephone":"",
  "mobile":"",
  "email":"joe@bloggs.com",
  "address":{
    "id":2894,
    "line1":"",
    "line2":"",
    "line3":"",
    "city":"",
    "county":"",
    "postcode":"",
    "country":""
  },
  "location":{
    "address":"",
    "latitude":null,
    "longitude":null
  },
  "contact_id":null,
  "parent":{
    "additional_emails":[
      
    ],
    "additional_mobiles":[
      
    ],
    "primary":{
      "contact_id":0,
      "first_name":"",
      "last_name":"",
      "sex":"u",
      "relationship":"parent",
      "email":"",
      "mobile":"",
      "telephone":"",
      "communication":{
        "general_email":0,
        "general_sms":0
      }
    }
  },
  "custom_fields":[
    
  ],
  "school":null,
  "medical_short":null,
  "medical":null,
  "doctor_details":null,
  "special_needs":null,
  "info":null,
  "communication":{
    "general_email":0,
    "general_sms":0,
    "phone":0,
    "post":0,
    "rota_email":0,
    "rota_sms":0
  },
  "has_email_opt_out":true,
  "has_rota_email_opt_out":true,
  "has_rota_sms_opt_out":true,
  "has_sms_opt_out":true,
  "consent":{
    "internal":null,
    "external":null
  },
  "ongoing_consent":{
    "required":1,
    "request_ctime":null,
    "granted_ctime":null,
    "granted_name":null
  },
  "site_id":1,
  "site_ids":[
    "1"
  ],
  "status":"active",
  "images":[
    
  ],
  "mtime":"2022-02-08 15:51:58",
  "muser":"churchsuite",
  "ctime":"2022-02-08 15:51:58",
  "cuser":"churchsuite"
}
```

## Update an existing child's details

* `PUT /v1/children/child/1` will update the details of an existing child in the database

```json
{
  "first_name":"Jane",
  "last_name":"Bloggs",
  "email":"jane.bloggs@gmail.com",
  "sex":"f"
}
```

This will return one of the following HTTP codes:

* `200` child updated
* `400` some of the data passed through was not valid
* `404` child specified to update does not exist

This `PUT` method returns output in the following format:

```json
{
  "id":1085,
  "person_uuid":"92da1e7a-c9c1-4fb8-a4dc-0aee69895905",
  "type_id":"child_1085",
  "first_name":"Jane",
  "middle_name":null,
  "last_name":"Bloggs",
  "name":"Jane Bloggs",
  "formal_name":null,
  "sex":"f",
  "date_of_birth":"2010-09-21",
  "telephone":"",
  "mobile":"",
  "email":"jane.bloggs@gmail.com",
  "address":{
    "id":2894,
    "line1":"",
    "line2":"",
    "line3":"",
    "city":"",
    "county":"",
    "postcode":"",
    "country":""
  },
  "location":{
    "address":"",
    "latitude":null,
    "longitude":null
  },
  "contact_id":null,
  "parent":{
    "additional_emails":[
      
    ],
    "additional_mobiles":[
      
    ],
    "primary":{
      "contact_id":0,
      "first_name":"",
      "last_name":"",
      "sex":"u",
      "relationship":"parent",
      "email":"",
      "mobile":"",
      "telephone":"",
      "communication":{
        "general_email":0,
        "general_sms":0
      }
    }
  },
  "custom_fields":[
    
  ],
  "school":null,
  "medical_short":null,
  "medical":null,
  "doctor_details":null,
  "special_needs":null,
  "info":null,
  "communication":{
    "general_email":0,
    "general_sms":0,
    "phone":0,
    "post":0,
    "rota_email":0,
    "rota_sms":0
  },
  "has_email_opt_out":true,
  "has_rota_email_opt_out":true,
  "has_rota_sms_opt_out":true,
  "has_sms_opt_out":true,
  "consent":{
    "internal":null,
    "external":null
  },
  "ongoing_consent":{
    "required":1,
    "request_ctime":null,
    "granted_ctime":null,
    "granted_name":null
  },
  "site_id":1,
  "site_ids":[
    "1"
  ],
  "status":"active",
  "images":[
    
  ],
  "mtime":"2022-02-08 15:51:59",
  "muser":"churchsuite",
  "ctime":"2022-02-08 15:51:58",
  "cuser":"churchsuite"
}
```

## Delete a child

* `DELETE /v1/children/child/1` will attempt to delete the specified child

```json

```

This will return one of the following HTTP codes:

* `204` child deleted
* `404` child specified to delete does not exist

## List child gatherings

* `GET /v1/children/gatherings` will return data for all child gatherings

```json
{
  "pagination":{
    "no_results":7,
    "page":1,
    "per_page":1
  },
  "gatherings":[
    {
      "id":29,
      "site_id":19,
      "name":"Kings Kids & Youth (Derby)",
      "max_age":19,
      "max_age_months":0,
      "exit_month":8,
      "status":"active",
      "groups":[
        {
          "id":209,
          "name":"Babies",
          "gathering_id":29,
          "gathering_name":"Kings Kids & Youth (Derby)",
          "checkin_badges_child":2,
          "checkin_badges_pickup":2,
          "checkin_badges_room":0,
          "checkin_capacity":10,
          "checkin_ratio":2,
          "entry_age":0,
          "entry_age_months":0,
          "entry_month":null,
          "entry_rule":"0 years",
          "status":"active",
          "ctime":"2021-08-12 16:02:33",
          "cuser":"Sue",
          "mtime":"2021-08-12 16:02:33",
          "muser":"Sue"
        },
        {
          "id":210,
          "name":"Tots",
          "gathering_id":29,
          "gathering_name":"Kings Kids & Youth (Derby)",
          "checkin_badges_child":1,
          "checkin_badges_pickup":1,
          "checkin_badges_room":0,
          "checkin_capacity":null,
          "checkin_ratio":3,
          "entry_age":2,
          "entry_age_months":0,
          "entry_month":5,
          "entry_rule":"2 years processed in May",
          "status":"active",
          "ctime":"2021-08-12 16:03:00",
          "cuser":"Sue",
          "mtime":"2022-02-08 14:49:20",
          "muser":"churchsuite"
        },
        {
          "id":208,
          "name":"Impact",
          "gathering_id":29,
          "gathering_name":"Kings Kids & Youth (Derby)",
          "checkin_badges_child":1,
          "checkin_badges_pickup":1,
          "checkin_badges_room":0,
          "checkin_capacity":30,
          "checkin_ratio":6,
          "entry_age":5,
          "entry_age_months":0,
          "entry_month":9,
          "entry_rule":"5 years processed in September",
          "status":"active",
          "ctime":"2021-08-12 14:18:30",
          "cuser":"Sue",
          "mtime":"2021-08-13 14:58:18",
          "muser":"Sue"
        },
        {
          "id":211,
          "name":"Explorers",
          "gathering_id":29,
          "gathering_name":"Kings Kids & Youth (Derby)",
          "checkin_badges_child":1,
          "checkin_badges_pickup":1,
          "checkin_badges_room":0,
          "checkin_capacity":25,
          "checkin_ratio":6,
          "entry_age":7,
          "entry_age_months":0,
          "entry_month":9,
          "entry_rule":"7 years processed in September",
          "status":"active",
          "ctime":"2021-08-12 16:04:10",
          "cuser":"Sue",
          "mtime":"2021-08-12 16:04:10",
          "muser":"Sue"
        },
        {
          "id":212,
          "name":"Fusion",
          "gathering_id":29,
          "gathering_name":"Kings Kids & Youth (Derby)",
          "checkin_badges_child":1,
          "checkin_badges_pickup":1,
          "checkin_badges_room":0,
          "checkin_capacity":20,
          "checkin_ratio":10,
          "entry_age":9,
          "entry_age_months":0,
          "entry_month":9,
          "entry_rule":"9 years processed in September",
          "status":"active",
          "ctime":"2021-08-12 16:04:52",
          "cuser":"Sue",
          "mtime":"2021-08-12 16:04:52",
          "muser":"Sue"
        },
        {
          "id":213,
          "name":"Cohesion",
          "gathering_id":29,
          "gathering_name":"Kings Kids & Youth (Derby)",
          "checkin_badges_child":1,
          "checkin_badges_pickup":1,
          "checkin_badges_room":0,
          "checkin_capacity":25,
          "checkin_ratio":10,
          "entry_age":13,
          "entry_age_months":0,
          "entry_month":9,
          "entry_rule":"13 years processed in September",
          "status":"active",
          "ctime":"2021-08-12 16:05:27",
          "cuser":"Sue",
          "mtime":"2021-08-12 16:05:27",
          "muser":"Sue"
        }
      ],
      "ctime":"2021-08-12 12:28:46",
      "cuser":"Sue",
      "mtime":"2021-12-07 16:47:11",
      "muser":"jack"
    }
  ]
}
```

## Get a child gathering

* `GET /v1/children/gathering/1` will return data for a specific child gathering

```json
{
  "id":1,
  "site_id":1,
  "name":"Kings Kids & Youth (Nottingham)",
  "max_age":18,
  "max_age_months":0,
  "exit_month":9,
  "status":"active",
  "groups":[
    {
      "id":140,
      "name":"Babies",
      "gathering_id":1,
      "gathering_name":"Kings Kids & Youth (Nottingham)",
      "checkin_badges_child":2,
      "checkin_badges_pickup":2,
      "checkin_badges_room":0,
      "checkin_capacity":null,
      "checkin_ratio":2,
      "entry_age":0,
      "entry_age_months":0,
      "entry_month":null,
      "entry_rule":"0 years",
      "status":"active",
      "ctime":"2018-08-06 14:37:44",
      "cuser":"paul",
      "mtime":"2021-06-30 16:38:21",
      "muser":"gavin"
    },
    {
      "id":2,
      "name":"Tots",
      "gathering_id":1,
      "gathering_name":"Kings Kids & Youth (Nottingham)",
      "checkin_badges_child":1,
      "checkin_badges_pickup":1,
      "checkin_badges_room":0,
      "checkin_capacity":null,
      "checkin_ratio":3,
      "entry_age":2,
      "entry_age_months":6,
      "entry_month":null,
      "entry_rule":"2 years 6 months",
      "status":"active",
      "ctime":null,
      "cuser":null,
      "mtime":"2021-04-30 12:47:20",
      "muser":"richard"
    },
    {
      "id":3,
      "name":"Impact",
      "gathering_id":1,
      "gathering_name":"Kings Kids & Youth (Nottingham)",
      "checkin_badges_child":1,
      "checkin_badges_pickup":1,
      "checkin_badges_room":0,
      "checkin_capacity":null,
      "checkin_ratio":4,
      "entry_age":5,
      "entry_age_months":0,
      "entry_month":9,
      "entry_rule":"5 years processed in September",
      "status":"active",
      "ctime":null,
      "cuser":null,
      "mtime":"2019-07-22 13:21:50",
      "muser":"paul"
    },
    {
      "id":13,
      "name":"Explorers",
      "gathering_id":1,
      "gathering_name":"Kings Kids & Youth (Nottingham)",
      "checkin_badges_child":1,
      "checkin_badges_pickup":1,
      "checkin_badges_room":0,
      "checkin_capacity":null,
      "checkin_ratio":6,
      "entry_age":7,
      "entry_age_months":0,
      "entry_month":9,
      "entry_rule":"7 years processed in September",
      "status":"active",
      "ctime":null,
      "cuser":null,
      "mtime":"2020-03-12 15:44:09",
      "muser":"richard"
    },
    {
      "id":4,
      "name":"Fusion",
      "gathering_id":1,
      "gathering_name":"Kings Kids & Youth (Nottingham)",
      "checkin_badges_child":1,
      "checkin_badges_pickup":1,
      "checkin_badges_room":0,
      "checkin_capacity":null,
      "checkin_ratio":6,
      "entry_age":9,
      "entry_age_months":0,
      "entry_month":9,
      "entry_rule":"9 years processed in September",
      "status":"active",
      "ctime":null,
      "cuser":null,
      "mtime":"2019-08-02 09:44:51",
      "muser":"paul"
    },
    {
      "id":5,
      "name":"Cohesion",
      "gathering_id":1,
      "gathering_name":"Kings Kids & Youth (Nottingham)",
      "checkin_badges_child":0,
      "checkin_badges_pickup":0,
      "checkin_badges_room":0,
      "checkin_capacity":null,
      "checkin_ratio":7,
      "entry_age":13,
      "entry_age_months":0,
      "entry_month":9,
      "entry_rule":"13 years processed in September",
      "status":"active",
      "ctime":null,
      "cuser":null,
      "mtime":"2019-07-22 13:21:50",
      "muser":"paul"
    },
    {
      "id":191,
      "name":"Youth",
      "gathering_id":1,
      "gathering_name":"Kings Kids & Youth (Nottingham)",
      "checkin_badges_child":0,
      "checkin_badges_pickup":0,
      "checkin_badges_room":0,
      "checkin_capacity":null,
      "checkin_ratio":8,
      "entry_age":15,
      "entry_age_months":0,
      "entry_month":null,
      "entry_rule":"15 years",
      "status":"active",
      "ctime":"2021-02-02 15:57:19",
      "cuser":"shane",
      "mtime":"2021-12-16 11:21:15",
      "muser":"Paul"
    }
  ],
  "ctime":"2019-02-11 15:30:21",
  "cuser":"shane",
  "mtime":"2021-08-11 16:42:01",
  "muser":"Sue"
}
```

This will return one of the following HTTP codes:

* `200` gathering data returned
* `400` some of the data passed through was not valid, e.g. invalid URL
* `404` gathering does not exist

## Get a child group

* `GET /v1/children/group/1` will return data for a specific child group

```json
{
  "id":140,
  "name":"Babies",
  "gathering_id":1,
  "gathering_name":"Kings Kids & Youth (Nottingham)",
  "checkin_badges_child":2,
  "checkin_badges_pickup":2,
  "checkin_badges_room":0,
  "checkin_capacity":null,
  "checkin_ratio":2,
  "entry_age":0,
  "entry_age_months":0,
  "entry_month":null,
  "entry_rule":"0 years",
  "status":"active",
  "ctime":"2018-08-06 14:37:44",
  "cuser":"paul",
  "mtime":"2021-06-30 16:38:21",
  "muser":"gavin"
}
```

This will return one of the following HTTP codes:

* `200` group data returned
* `400` some of the data passed through was not valid, e.g. invalid URL
* `404` group does not exist

## Get the attendance data for a child group

* `GET /v1/children/group/1/attendance` will return data for the attendance of a specific child group

```json
{
  "2021-10-31":{
    "0":"718",
    "1":"1036",
    "2":"1037",
    "3":"1039",
    "total":4,
    "notes":""
  },
  "2021-11-07":{
    "0":"718",
    "1":"1036",
    "2":"1039",
    "3":"1055",
    "4":"1056",
    "total":5,
    "notes":""
  },
  "2021-11-14":{
    "0":"718",
    "1":"1036",
    "2":"1055",
    "3":"1056",
    "total":4,
    "notes":""
  },
  "2021-11-21":{
    "0":"35",
    "1":"718",
    "2":"1039",
    "3":"1055",
    "4":"1056",
    "total":7,
    "notes":""
  },
  "2021-11-28":{
    "0":"35",
    "1":"718",
    "2":"1036",
    "3":"1039",
    "4":"1055",
    "5":"1056",
    "total":6,
    "notes":""
  },
  "2021-12-05":{
    "0":"718",
    "1":"1036",
    "2":"1037",
    "3":"1039",
    "4":"1055",
    "5":"1056",
    "total":6,
    "notes":""
  },
  "2021-12-12":{
    "0":"847",
    "1":"1037",
    "2":"1039",
    "3":"1055",
    "4":"1056",
    "total":5,
    "notes":""
  },
  "2022-01-02":{
    "0":"718",
    "1":"1036",
    "2":"1055",
    "3":"1056",
    "total":4,
    "notes":""
  },
  "2022-01-09":{
    "0":"35",
    "1":"718",
    "2":"847",
    "3":"1036",
    "4":"1055",
    "5":"1056",
    "total":6,
    "notes":""
  },
  "2022-01-16":{
    "0":"35",
    "1":"718",
    "2":"1036",
    "3":"1037",
    "4":"1039",
    "5":"1055",
    "6":"1056",
    "total":7,
    "notes":""
  },
  "2022-01-23":{
    "0":"35",
    "1":"1036",
    "2":"1037",
    "3":"1039",
    "4":"1055",
    "5":"1056",
    "total":6,
    "notes":""
  },
  "2022-01-30":{
    "0":"35",
    "1":"718",
    "2":"1036",
    "3":"1039",
    "4":"1055",
    "5":"1056",
    "6":"1064",
    "total":7,
    "notes":""
  }
}
```

This will return one of the following HTTP codes:

* `200` group attendance data returned
* `400` some of the data passed through was not valid, e.g. invalid URL
* `404` group does not exist

## Get children in a child group

* `GET /v1/children/group/1/children` will return data for the children in a specific child group

```json
{
  "children":[
    {
      "id":1064,
      "person_uuid":"cfbaf98a-0f28-43c2-803a-68213d002cf6",
      "type_id":"child_1064",
      "first_name":"Daisy",
      "middle_name":null,
      "last_name":"Andrews",
      "name":"Daisy Andrews",
      "formal_name":null,
      "sex":"f",
      "date_of_birth":"2021-05-13",
      "telephone":"",
      "mobile":"",
      "email":"",
      "address":{
        "id":2825,
        "line1":"",
        "line2":"",
        "line3":"",
        "city":"",
        "county":"",
        "postcode":"",
        "country":""
      },
      "location":{
        "address":"",
        "latitude":null,
        "longitude":null
      },
      "contact_id":null,
      "parent":{
        "additional_emails":[
          
        ],
        "additional_mobiles":[
          
        ],
        "primary":{
          "contact_id":0,
          "first_name":"Sarah",
          "last_name":"Andrews",
          "sex":"u",
          "relationship":"parent",
          "email":"sandrews@gmail.com",
          "mobile":"",
          "telephone":"",
          "communication":{
            "general_email":0,
            "general_sms":0
          }
        }
      },
      "custom_fields":[
        
      ],
      "school":"",
      "medical_short":"",
      "medical":"",
      "doctor_details":"",
      "special_needs":"",
      "info":"",
      "communication":{
        "general_email":0,
        "general_sms":0,
        "phone":0,
        "post":0,
        "rota_email":0,
        "rota_sms":0
      },
      "has_email_opt_out":true,
      "has_rota_email_opt_out":true,
      "has_rota_sms_opt_out":true,
      "has_sms_opt_out":true,
      "consent":{
        "internal":null,
        "external":null
      },
      "ongoing_consent":{
        "required":1,
        "request_ctime":null,
        "granted_ctime":null,
        "granted_name":null
      },
      "site_id":20,
      "site_ids":[
        "20"
      ],
      "status":"active",
      "images":[
        
      ],
      "mtime":"2022-01-27 16:17:21",
      "muser":"nathaniel",
      "ctime":"2022-01-18 15:14:41",
      "cuser":"Paul"
    }
  ]
}
```

This will return one of the following HTTP codes:

* `200` group children data returned
* `400` some of the data passed through was not valid, e.g. invalid URL
* `404` group does not exist



## List tags

* `GET /v1/children/tags` will return tags ordered alphabetically

```json
{
  "pagination":{
    "no_results":10,
    "page":1,
    "per_page":2
  },
  "tags":[
    {
      "id":"1957",
      "tag_id":"1957",
      "name":"Contact Search Permitted",
      "description":null,
      "colour":"blue",
      "type":"fixed",
      "no_children":2,
      "tag_no_children":2
    },
    {
      "id":"26",
      "tag_id":"26",
      "name":"Easter Holiday Club 2021",
      "description":"",
      "colour":"grey",
      "type":"fixed",
      "no_children":15,
      "tag_no_children":15
    }
  ]
}
```


## Get a tag

* `GET /v1/children/tag/1` will return data for a specific tag with the ID of 1
* `GET /v1/children/tag/1?children=true` will return data for a specific tag, including all children with the tag

```json
{
  "id":"1957",
  "tag_id":"1957",
  "name":"Contact Search Permitted",
  "description":null,
  "colour":"blue",
  "type":"fixed",
  "no_children":2,
  "tag_no_children":2
}
```

This will return one of the following HTTP codes:

* `200` tag data returned
* `400` some of the data passed through was not valid, e.g. invalid URL
* `404` tag does not exist

## Get a tag's children

* `GET /v1/children/tag/1/children` will return the children for the tag with the ID of 1

```json
{
  "pagination":{
    "no_results":2,
    "page":1,
    "per_page":null
  },
  "children":[
    {
      "id":1061,
      "person_uuid":"2581960e-24b6-44e5-ab72-0835c5bd1330",
      "type_id":"child_1061",
      "first_name":"Becca",
      "middle_name":null,
      "last_name":"Adams",
      "name":"Becca Adams",
      "formal_name":null,
      "sex":"f",
      "date_of_birth":"2018-08-09",
      "telephone":"01720 862 978",
      "mobile":"07854 412 321",
      "email":"john.adams@icloud.com",
      "address":{
        "id":2806,
        "line1":"72 Glenfield Road",
        "line2":"Dane Hills",
        "line3":"",
        "city":"Leicester",
        "county":"",
        "postcode":"LE3 6ED",
        "country":""
      },
      "location":{
        "address":"72 Glenfield Road, Dane Hills, Leicester, LE3 6ED",
        "latitude":"52.637895",
        "longitude":"-1.166287"
      },
      "contact_id":1581,
      "parent":{
        "additional_emails":[
          
        ],
        "additional_mobiles":[
          
        ],
        "primary":{
          "contact_id":1581,
          "first_name":"John",
          "last_name":"Adams",
          "sex":"m",
          "relationship":"parent",
          "email":"john.adams@icloud.com",
          "mobile":"07987 654 321",
          "telephone":"01720 862 978",
          "communication":{
            "general_email":1,
            "general_sms":1
          }
        },
        "secondary":{
          "contact_id":28,
          "first_name":"Laksha",
          "last_name":"Adams",
          "sex":"f",
          "relationship":"parent",
          "email":"john.adams@icloud.com",
          "mobile":"07314 631 184",
          "telephone":"01720 862 978",
          "communication":{
            "general_email":1,
            "general_sms":1
          }
        }
      },
      "custom_fields":[
        
      ],
      "school":"",
      "medical_short":"",
      "medical":"",
      "doctor_details":"",
      "special_needs":"",
      "info":"",
      "communication":{
        "general_email":1,
        "general_sms":1,
        "phone":0,
        "post":1,
        "rota_email":0,
        "rota_sms":0
      },
      "has_email_opt_out":false,
      "has_rota_email_opt_out":true,
      "has_rota_sms_opt_out":true,
      "has_sms_opt_out":false,
      "consent":{
        "internal":"0",
        "external":"0"
      },
      "ongoing_consent":{
        "required":1,
        "request_ctime":null,
        "granted_ctime":null,
        "granted_name":null
      },
      "site_id":20,
      "site_ids":[
        "20",
        "19"
      ],
      "status":"active",
      "images":[
        
      ],
      "mtime":"2021-12-16 14:38:03",
      "muser":"Sue",
      "ctime":"2021-12-16 14:38:03",
      "cuser":"Sue"
    }
  ]
}
```

This will return one of the following HTTP codes:

* `200` tag children returned
* `400` some of the data passed through was not valid, e.g. invalid URL
* `404` tag does not exist



## List key dates

* `GET /v1/children/keydates` will return key dates ordered alphabetically

```json
{
  "pagination":{
    "no_results":22,
    "page":1,
    "per_page":5
  },
  "keydates":[
    {
      "id":167,
      "name":"Attended Alpha Course",
      "color":"blue",
      "mtime":"2021-06-21 12:42:12",
      "muser":"Paul",
      "ctime":"2021-06-21 12:42:12",
      "cuser":"Paul"
    },
    {
      "id":119,
      "name":"Attended Kids Club",
      "color":"blue",
      "mtime":"2019-06-17 14:25:22",
      "muser":"paul",
      "ctime":"2019-06-17 14:25:22",
      "cuser":"paul"
    },
    {
      "id":144,
      "name":"Attended Volunteer Training",
      "color":"blue",
      "mtime":"2020-09-18 11:12:29",
      "muser":"shane",
      "ctime":"2020-09-18 11:12:29",
      "cuser":"shane"
    },
    {
      "id":113,
      "name":"Baptised",
      "color":"blue",
      "mtime":"2019-04-15 16:36:30",
      "muser":"shane",
      "ctime":"2019-04-15 16:36:30",
      "cuser":"shane"
    },
    {
      "id":171,
      "name":"DBS Check Requested",
      "color":"blue",
      "mtime":"2021-09-08 16:14:33",
      "muser":"richard",
      "ctime":"2021-09-08 16:14:33",
      "cuser":"richard"
    }
  ]
}
```


## Get a key date

* `GET /v1/children/keydate/1` will return data for a specific key date
* `GET /v1/children/keydate/1?children=true` will return data for a specific key date, including all children with the key date

```json
{
  "id":167,
  "name":"Attended Alpha Course",
  "color":"blue",
  "mtime":"2021-06-21 12:42:12",
  "muser":"Paul",
  "ctime":"2021-06-21 12:42:12",
  "cuser":"Paul"
}
```

This will return one of the following HTTP codes:

* `200` key date data returned
* `400` some of the data passed through was not valid, e.g. invalid URL
* `404` key date does not exist

## Get a key date's children

* `GET /v1/children/keydate/1/children` will return the children for the specified key date

```json
{
  "pagination":{
    "no_results":1,
    "page":1,
    "per_page":null
  },
  "keydates":[
    {
      "id":9546,
      "keydate_id":167,
      "resource_type":"children_child",
      "resource_id":53,
      "date":"2021-06-21",
      "description":"Alpha Spring 2021",
      "linked_resource_type":null,
      "linked_resource_id":null,
      "mtime":"2021-06-21 12:42:12",
      "muser":"Paul",
      "ctime":"2021-06-21 12:42:12",
      "cuser":"Paul"
    }
  ]
}
```

This will return one of the following HTTP codes:

* `200` key date children returned
* `400` some of the data passed through was not valid, e.g. invalid URL
* `404` key date does not exist
