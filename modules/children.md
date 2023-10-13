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
    "no_results":182,
    "page":1,
    "per_page":1
  },
  "children":[
    {
      "id":982,
      "person_id":654,
      "uuid":"758acd29-a1e0-44e5-aea8-fa1769992e51",
      "type_id":"child_982",
      "first_name":"Joel",
      "middle_name":null,
      "last_name":"Simmonds",
      "name":"Joel Simmonds",
      "formal_name":null,
      "sex":"m",
      "date_of_birth":"2006-06-03",
      "mobile":"07228 377 761",
      "email":"joel.simmonds@gmail.com",
      "address":{
        "id":1703,
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
          "person_id":0,
          "contact_id":0,
          "first_name":null,
          "last_name":null,
          "sex":null,
          "relationship":"other",
          "email":null,
          "mobile":null,
          "telephone":null,
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
      "public_options":{
        "invited":false,
        "access":false,
        "visible":{
          "enabled":true,
          "address":false,
          "email":false,
          "mobile":false,
          "telephone":false
        }
      },
      "status":"pending",
      "images":[
        
      ],
      "mtime":"2020-02-24 17:45:19",
      "muser":"embed",
      "ctime":"2020-02-24 17:45:19",
      "cuser":"embed"
    }
  ]
}
```


## Get a child

* `GET /v1/children/child/1` will return data for a specific child

```json
{
  "id":1,
  "person_id":539,
  "uuid":"026d5e1d-1e3a-47ac-844d-92777ce0e880",
  "type_id":"child_1",
  "first_name":"Micah",
  "middle_name":"",
  "last_name":"Wright",
  "name":"Micah Wright",
  "formal_name":"",
  "sex":"m",
  "date_of_birth":"2007-05-28",
  "mobile":"",
  "email":"",
  "address":{
    "id":3269,
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
  "contact_id":null,
  "parent":{
    "additional_emails":[
      
    ],
    "additional_mobiles":[
      
    ],
    "primary":{
      "person_id":1871,
      "contact_id":0,
      "first_name":"Paula",
      "last_name":"",
      "sex":"u",
      "relationship":"parent",
      "email":"paula.wright@live.com",
      "mobile":"07369 801 623",
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
  "public_options":{
    "invited":false,
    "access":false,
    "visible":{
      "enabled":true,
      "address":false,
      "email":false,
      "mobile":false,
      "telephone":false
    }
  },
  "status":"active",
  "images":[
    
  ],
  "mtime":"2022-12-05 11:39:40",
  "muser":"testing",
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
  "pagination":{
    "no_results":3,
    "page":1,
    "per_page":50
  },
  "tags":[
    {
      "id":897,
      "tag_id":897,
      "name":"Consent: Outstanding",
      "description":"",
      "colour":"red",
      "type":"smart",
      "tag_no_children":94,
      "no_children":94,
      "ctime":"2018-03-29 16:26:18",
      "cuser":"paul",
      "mtime":"2022-06-26 19:09:54",
      "muser":"Paul"
    },
    {
      "id":246,
      "tag_id":246,
      "name":"Nativity Play - Christmas 2022",
      "description":"",
      "colour":"blue",
      "type":"fixed",
      "tag_no_children":21,
      "no_children":21,
      "ctime":"2016-04-09 16:05:06",
      "cuser":"paul",
      "mtime":"2023-02-20 10:36:35",
      "muser":"Paul"
    },
    {
      "id":2069,
      "tag_id":2069,
      "name":"Youth",
      "description":"",
      "colour":"blue",
      "type":"smart",
      "tag_no_children":77,
      "no_children":77,
      "ctime":"2022-04-20 12:26:36",
      "cuser":"LukeH",
      "mtime":"2022-04-20 12:26:36",
      "muser":"LukeH"
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
  "pagination":{
    "no_results":4,
    "page":1,
    "per_page":null
  },
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
  "id":1434,
  "person_id":2206,
  "uuid":"3e43065c-1589-459d-bdfe-7c192f19da02",
  "type_id":"child_1434",
  "first_name":"Joe",
  "middle_name":null,
  "last_name":"Bloggs",
  "name":"Joe Bloggs",
  "formal_name":null,
  "sex":"m",
  "date_of_birth":"2010-09-21",
  "mobile":"",
  "email":"joe@bloggs.com",
  "address":{
    "id":3584,
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
      "person_id":0,
      "contact_id":0,
      "first_name":null,
      "last_name":null,
      "sex":null,
      "relationship":"other",
      "email":null,
      "mobile":null,
      "telephone":null,
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
  "public_options":{
    "invited":false,
    "access":false,
    "visible":{
      "enabled":true,
      "address":0,
      "email":0,
      "mobile":0,
      "telephone":0
    }
  },
  "status":"active",
  "images":[
    
  ],
  "mtime":"2023-10-13 16:56:33",
  "muser":"churchsuite",
  "ctime":"2023-10-13 16:56:33",
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
  "id":1434,
  "person_id":2206,
  "uuid":"3e43065c-1589-459d-bdfe-7c192f19da02",
  "type_id":"child_1434",
  "first_name":"Jane",
  "middle_name":null,
  "last_name":"Bloggs",
  "name":"Jane Bloggs",
  "formal_name":null,
  "sex":"f",
  "date_of_birth":"2010-09-21",
  "mobile":"",
  "email":"jane.bloggs@gmail.com",
  "address":{
    "id":3584,
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
      "person_id":0,
      "contact_id":0,
      "first_name":null,
      "last_name":null,
      "sex":null,
      "relationship":"other",
      "email":null,
      "mobile":null,
      "telephone":null,
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
  "public_options":{
    "invited":false,
    "access":false,
    "visible":{
      "enabled":true,
      "address":0,
      "email":0,
      "mobile":0,
      "telephone":0
    }
  },
  "status":"active",
  "images":[
    
  ],
  "mtime":"2023-10-13 16:56:36",
  "muser":"churchsuite",
  "ctime":"2023-10-13 16:56:33",
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
    "no_results":12,
    "page":1,
    "per_page":1
  },
  "gatherings":[
    {
      "id":33,
      "site_id":1,
      "name":"Holiday Club",
      "max_age":11,
      "max_age_months":0,
      "exit_month":0,
      "status":"archived",
      "ctime":"2022-06-27 10:20:21",
      "cuser":"Paul",
      "mtime":"2022-06-27 10:59:56",
      "muser":"Paul",
      "groups":[
        {
          "id":232,
          "name":"Red",
          "gathering_id":33,
          "gathering_name":"Holiday Club",
          "checkin_badges_child":0,
          "checkin_badges_pickup":0,
          "checkin_badges_room":0,
          "checkin_capacity":null,
          "checkin_ratio":null,
          "entry_age":3,
          "entry_age_months":0,
          "entry_month":null,
          "entry_rule":"3 years",
          "status":"active",
          "ctime":"2022-06-27 10:20:33",
          "cuser":"Paul",
          "mtime":"2022-06-27 10:20:33",
          "muser":"Paul"
        },
        {
          "id":233,
          "name":"Green",
          "gathering_id":33,
          "gathering_name":"Holiday Club",
          "checkin_badges_child":0,
          "checkin_badges_pickup":0,
          "checkin_badges_room":0,
          "checkin_capacity":null,
          "checkin_ratio":null,
          "entry_age":4,
          "entry_age_months":0,
          "entry_month":null,
          "entry_rule":"4 years",
          "status":"active",
          "ctime":"2022-06-27 10:20:40",
          "cuser":"Paul",
          "mtime":"2022-06-27 10:20:40",
          "muser":"Paul"
        },
        {
          "id":234,
          "name":"Orange",
          "gathering_id":33,
          "gathering_name":"Holiday Club",
          "checkin_badges_child":0,
          "checkin_badges_pickup":0,
          "checkin_badges_room":0,
          "checkin_capacity":null,
          "checkin_ratio":null,
          "entry_age":5,
          "entry_age_months":0,
          "entry_month":null,
          "entry_rule":"5 years",
          "status":"active",
          "ctime":"2022-06-27 10:20:53",
          "cuser":"Paul",
          "mtime":"2022-06-27 10:20:53",
          "muser":"Paul"
        }
      ]
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
  "ctime":"2019-02-11 15:30:21",
  "cuser":"shane",
  "mtime":"2021-08-11 16:42:01",
  "muser":"Sue",
  "groups":[
    {
      "id":140,
      "name":"Babies",
      "gathering_id":1,
      "gathering_name":"Kings Kids & Youth (Nottingham)",
      "checkin_badges_child":1,
      "checkin_badges_pickup":2,
      "checkin_badges_room":1,
      "checkin_capacity":10,
      "checkin_ratio":2,
      "entry_age":0,
      "entry_age_months":0,
      "entry_month":null,
      "entry_rule":"0 years",
      "status":"active",
      "ctime":"2018-08-06 14:37:44",
      "cuser":"paul",
      "mtime":"2022-03-09 10:06:17",
      "muser":"nathaniel"
    },
    {
      "id":2,
      "name":"Tots",
      "gathering_id":1,
      "gathering_name":"Kings Kids & Youth (Nottingham)",
      "checkin_badges_child":1,
      "checkin_badges_pickup":1,
      "checkin_badges_room":0,
      "checkin_capacity":15,
      "checkin_ratio":3,
      "entry_age":2,
      "entry_age_months":6,
      "entry_month":null,
      "entry_rule":"2 years 6 months",
      "status":"active",
      "ctime":null,
      "cuser":null,
      "mtime":"2022-03-09 10:06:22",
      "muser":"nathaniel"
    },
    {
      "id":3,
      "name":"Impact",
      "gathering_id":1,
      "gathering_name":"Kings Kids & Youth (Nottingham)",
      "checkin_badges_child":1,
      "checkin_badges_pickup":1,
      "checkin_badges_room":0,
      "checkin_capacity":15,
      "checkin_ratio":4,
      "entry_age":5,
      "entry_age_months":0,
      "entry_month":9,
      "entry_rule":"5 years processed in September",
      "status":"active",
      "ctime":null,
      "cuser":null,
      "mtime":"2022-03-09 10:06:28",
      "muser":"nathaniel"
    },
    {
      "id":13,
      "name":"Explorers",
      "gathering_id":1,
      "gathering_name":"Kings Kids & Youth (Nottingham)",
      "checkin_badges_child":1,
      "checkin_badges_pickup":1,
      "checkin_badges_room":0,
      "checkin_capacity":15,
      "checkin_ratio":6,
      "entry_age":7,
      "entry_age_months":0,
      "entry_month":9,
      "entry_rule":"7 years processed in September",
      "status":"active",
      "ctime":null,
      "cuser":null,
      "mtime":"2022-03-09 10:06:41",
      "muser":"nathaniel"
    },
    {
      "id":4,
      "name":"Fusion",
      "gathering_id":1,
      "gathering_name":"Kings Kids & Youth (Nottingham)",
      "checkin_badges_child":1,
      "checkin_badges_pickup":1,
      "checkin_badges_room":0,
      "checkin_capacity":3,
      "checkin_ratio":6,
      "entry_age":9,
      "entry_age_months":0,
      "entry_month":9,
      "entry_rule":"9 years processed in September",
      "status":"active",
      "ctime":null,
      "cuser":null,
      "mtime":"2022-07-18 12:27:51",
      "muser":"richard"
    },
    {
      "id":5,
      "name":"Cohesion",
      "gathering_id":1,
      "gathering_name":"Kings Kids & Youth (Nottingham)",
      "checkin_badges_child":1,
      "checkin_badges_pickup":1,
      "checkin_badges_room":0,
      "checkin_capacity":10,
      "checkin_ratio":7,
      "entry_age":13,
      "entry_age_months":0,
      "entry_month":9,
      "entry_rule":"13 years processed in September",
      "status":"active",
      "ctime":null,
      "cuser":null,
      "mtime":"2022-03-09 10:08:28",
      "muser":"nathaniel"
    },
    {
      "id":191,
      "name":"Youth",
      "gathering_id":1,
      "gathering_name":"Kings Kids & Youth (Nottingham)",
      "checkin_badges_child":1,
      "checkin_badges_pickup":0,
      "checkin_badges_room":0,
      "checkin_capacity":40,
      "checkin_ratio":8,
      "entry_age":15,
      "entry_age_months":0,
      "entry_month":null,
      "entry_rule":"15 years",
      "status":"active",
      "ctime":"2021-02-02 15:57:19",
      "cuser":"shane",
      "mtime":"2022-03-09 10:08:32",
      "muser":"nathaniel"
    }
  ]
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
  "checkin_badges_child":1,
  "checkin_badges_pickup":2,
  "checkin_badges_room":1,
  "checkin_capacity":10,
  "checkin_ratio":2,
  "entry_age":0,
  "entry_age_months":0,
  "entry_month":null,
  "entry_rule":"0 years",
  "status":"active",
  "ctime":"2018-08-06 14:37:44",
  "cuser":"paul",
  "mtime":"2022-03-09 10:06:17",
  "muser":"nathaniel"
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
  "2023-04-02":{
    "0":"1039",
    "1":"1090",
    "2":"1110",
    "3":"1111",
    "total":4,
    "notes":""
  },
  "2023-04-16":{
    "0":"1039",
    "1":"1090",
    "2":"1110",
    "3":"1111",
    "total":4,
    "notes":""
  },
  "2023-04-23":{
    "0":"847",
    "1":"1039",
    "2":"1090",
    "3":"1110",
    "4":"1111",
    "total":5,
    "notes":""
  },
  "2023-04-30":{
    "0":"847",
    "1":"1090",
    "2":"1110",
    "3":"1111",
    "total":4,
    "notes":""
  },
  "2023-05-07":{
    "0":"1039",
    "1":"1090",
    "2":"1110",
    "total":4,
    "notes":""
  },
  "2023-05-08":{
    "0":"847",
    "1":"1039",
    "2":"1090",
    "3":"1110",
    "4":"1111",
    "total":5,
    "notes":""
  },
  "2023-05-14":{
    "0":"847",
    "1":"1039",
    "2":"1090",
    "3":"1110",
    "4":"1111",
    "total":5,
    "notes":""
  },
  "2023-05-21":{
    "0":"847",
    "1":"1039",
    "2":"1090",
    "3":"1110",
    "4":"1111",
    "total":5,
    "notes":""
  },
  "2023-05-28":{
    "0":"847",
    "1":"1039",
    "2":"1090",
    "3":"1110",
    "4":"1111",
    "total":5,
    "notes":""
  },
  "2023-05-31":{
    "0":"847",
    "1":"1110",
    "total":2,
    "notes":null
  },
  "2023-06-04":{
    "0":"1039",
    "1":"1090",
    "2":"1110",
    "3":"1111",
    "total":4,
    "notes":""
  },
  "2023-10-06":{
    "0":"1090",
    "1":"1039",
    "2":"1126",
    "total":3,
    "notes":null
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
      "id":1110,
      "person_id":1847,
      "uuid":"965501e3-dcd4-4b11-8458-6ec151453144",
      "type_id":"child_1110",
      "first_name":"Brian",
      "middle_name":null,
      "last_name":"Fontana",
      "name":"Brian Fontana",
      "formal_name":"",
      "sex":"m",
      "date_of_birth":"2022-02-01",
      "mobile":"",
      "email":"",
      "address":{
        "id":3248,
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
          "person_id":1848,
          "contact_id":0,
          "first_name":"Sophie",
          "last_name":"Fontana",
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
        "rota_email":1,
        "rota_sms":1
      },
      "has_email_opt_out":true,
      "has_rota_email_opt_out":false,
      "has_rota_sms_opt_out":false,
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
      "public_options":{
        "invited":false,
        "access":false,
        "visible":{
          "enabled":true,
          "address":0,
          "email":0,
          "mobile":0,
          "telephone":0
        }
      },
      "status":"active",
      "images":[
        
      ],
      "mtime":"2022-11-10 10:33:11",
      "muser":"nathaniel",
      "ctime":"2022-11-10 10:32:54",
      "cuser":"nathaniel"
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
    "no_results":18,
    "page":1,
    "per_page":2
  },
  "tags":[
    {
      "id":2303,
      "tag_id":2303,
      "name":"Consent Given",
      "description":"",
      "colour":"blue",
      "type":"fixed",
      "tag_no_children":0,
      "no_children":0,
      "ctime":"2023-05-10 20:47:47",
      "cuser":"Paul",
      "mtime":"2023-05-26 11:06:50",
      "muser":"luke"
    },
    {
      "id":1957,
      "tag_id":1957,
      "name":"Contact Search Permitted",
      "description":null,
      "colour":"blue",
      "type":"fixed",
      "tag_no_children":2,
      "no_children":2,
      "ctime":"2021-10-18 12:19:24",
      "cuser":"richard",
      "mtime":"2022-11-04 16:18:11",
      "muser":"churchsuite"
    }
  ]
}
```


## Get a tag

* `GET /v1/children/tag/1` will return data for a specific tag with the ID of 1
* `GET /v1/children/tag/1?children=true` will return data for a specific tag, including all children with the tag

```json
{
  "id":2303,
  "tag_id":2303,
  "name":"Consent Given",
  "description":"",
  "colour":"blue",
  "type":"fixed",
  "tag_no_children":0,
  "no_children":0,
  "ctime":"2023-05-10 20:47:47",
  "cuser":"Paul",
  "mtime":"2023-05-26 11:06:50",
  "muser":"luke"
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
    "no_results":0,
    "page":1,
    "per_page":0
  },
  "people":[
    
  ],
  "children":[
    null
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
    "no_results":23,
    "page":1,
    "per_page":5
  },
  "keydates":[
    {
      "id":235,
      "name":"Attended Alpha",
      "color":"pink",
      "mtime":"2023-02-14 13:50:13",
      "muser":"Paul",
      "ctime":"2023-02-14 13:50:13",
      "cuser":"Paul"
    },
    {
      "id":264,
      "name":"Attended Alpha Course",
      "color":"blue",
      "mtime":"2023-05-30 11:36:23",
      "muser":"Sue",
      "ctime":"2023-05-30 11:36:23",
      "cuser":"Sue"
    },
    {
      "id":265,
      "name":"Attended Church Weekend Away",
      "color":"blue",
      "mtime":"2023-05-30 15:11:49",
      "muser":"Sue",
      "ctime":"2023-05-30 15:11:49",
      "cuser":"Sue"
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
      "color":"purple",
      "mtime":"2022-08-12 10:59:36",
      "muser":"Sue",
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
  "id":235,
  "name":"Attended Alpha",
  "color":"pink",
  "mtime":"2023-02-14 13:50:13",
  "muser":"Paul",
  "ctime":"2023-02-14 13:50:13",
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
      "id":11206,
      "keydate_id":235,
      "resource_type":"children_child",
      "resource_id":46,
      "date":"2023-02-10",
      "description":"Spring 2023 Course",
      "linked_resource_type":null,
      "linked_resource_id":null,
      "mtime":"2023-02-14 13:50:24",
      "muser":"Paul",
      "ctime":"2023-02-14 13:50:24",
      "cuser":"Paul"
    }
  ]
}
```

This will return one of the following HTTP codes:

* `200` key date children returned
* `400` some of the data passed through was not valid, e.g. invalid URL
* `404` key date does not exist
