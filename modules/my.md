# My

[Home](https://github.com/ChurchSuite/churchsuite-api)

The My section of the API allows data to be queried for a given contact after they have passed through the OAuth process using the returned OAuth token as the X-Auth header. Any data passed back obeys the public visibility settings that can be set on a contact-by-contact basis. The following endpoints are available:



## Get a contact's details

* `GET /v1/my/details` will return the contact details for the logged in contact

```json
{
  "id":127,
  "person_uuid":"de962d58-30d7-463c-a7ab-3361ed6e5aa5",
  "type_id":"contact_127",
  "first_name":"Gavin",
  "last_name":"Courtney",
  "title":"Mr",
  "middle_name":"Rodney",
  "formal_name":"Mr Gavin Courtney Esq.",
  "former_name":"Gavalah",
  "maiden_name":"Gavalah",
  "sex":"m",
  "date_of_birth":"1982-09-14",
  "marital":"married",
  "spouse_id":436,
  "address":"12 Main Street",
  "address2":"Long Eaton",
  "address3":"",
  "city":"Nottingham",
  "county":"",
  "postcode":"NG1 1AB",
  "country":"GB",
  "latitude":52.955053,
  "longitude":-1.14103,
  "telephone":"0115 824 2300",
  "mobile":"07123 123 784",
  "work_telephone":"0115 824 2300",
  "email":"support@churchsuite.com",
  "job":"Managing Director",
  "employer":"ChurchSuite Ltd",
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
    "required":0,
    "request_ctime":"2021-04-01 14:03:23",
    "granted_ctime":"2021-09-27 14:40:00",
    "granted_name":"Gavin Courtney"
  },
  "status":"active",
  "site_id":1,
  "site_ids":[
    "1"
  ],
  "mtime":"2021-11-08 15:23:04",
  "muser":"gavin",
  "ctime":"2013-01-07 20:19:16",
  "cuser":"import",
  "profile_meta_data":{
    "sex":"m",
    "fuzzy_address":"Nottingham, GB",
    "dob":"14 September 1982",
    "age":"39",
    "job":"Managing Director",
    "employer":"ChurchSuite Ltd",
    "marital_status":"married",
    "spouse_name":"Mary Courtney",
    "former_name":"Gavin Gavalah",
    "formal_name":"Mr Mr Gavin Courtney Esq. Rodney Courtney",
    "custom_fields":[
      {
        "field_name":"contact_custom1131",
        "field_label":"Member status",
        "field_value":""
      },
      {
        "field_name":"contact_custom1132",
        "field_label":"Twitter",
        "field_value":""
      },
      {
        "field_name":"contact_custom1133",
        "field_label":"Communication - Areas of interest",
        "field_value":""
      },
      {
        "field_name":"contact_custom1134",
        "field_label":"Electoral Roll",
        "field_value":""
      },
      {
        "field_name":"contact_custom1135",
        "field_label":"Mentor",
        "field_value":""
      },
      {
        "field_name":"contact_custom1136",
        "field_label":"DBS Due",
        "field_value":""
      },
      {
        "field_name":"contact_custom1137",
        "field_label":"Ministry skills",
        "field_value":""
      },
      {
        "field_name":"contact_custom1138",
        "field_label":"Next of Kin - Email Address",
        "field_value":""
      },
      {
        "field_name":"contact_custom1139",
        "field_label":"Next of Kin - Phone Number",
        "field_value":""
      }
    ]
  },
  "public_hash":"a7bb87996be68bb476e4d6e9048f9273",
  "email_opt_out":false,
  "rota_email_opt_out":false,
  "sms_opt_out":false,
  "rota_sms_opt_out":false,
  "student_details":{
    "line1":"",
    "line2":"",
    "line3":"",
    "city":"",
    "county":"",
    "postcode":"",
    "country":"",
    "telephone":"",
    "university":"",
    "course":"",
    "year_start":"",
    "year_end":""
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
      "id":127,
      "person_uuid":"de962d58-30d7-463c-a7ab-3361ed6e5aa5",
      "type_id":"contact_127",
      "first_name":"Gavin",
      "last_name":"Courtney",
      "name":"Gavin Courtney",
      "sex":"m",
      "address":"",
      "address2":"",
      "address3":"",
      "city":"",
      "county":"",
      "postcode":"",
      "country":"",
      "location":[
        
      ],
      "email":"support@churchsuite.com",
      "mobile":"07123 123 784",
      "telephone":"",
      "communication":{
        "general_email":1,
        "general_sms":1,
        "phone":1,
        "post":1,
        "rota_email":1,
        "rota_sms":1
      },
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
      "custom_fields":[
        
      ],
      "images":[
        
      ],
      "site_ids":[
        "1"
      ],
      "multi_team_multi_role":false,
      "ctime":"2013-01-07 20:19:16",
      "cuser":"import",
      "mtime":"2021-11-08 15:23:04",
      "muser":"gavin"
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
  "pagination":{
    "no_results":2,
    "page":1,
    "per_page":null
  },
  "children":[
    {
      "id":803,
      "person_uuid":"c112b4fe-5c27-4480-bebc-30a33796fdd0",
      "type_id":"child_803",
      "first_name":"Alice",
      "middle_name":"",
      "last_name":"Courtney",
      "name":"Alice Courtney",
      "formal_name":"",
      "sex":null,
      "date_of_birth":"2015-09-02",
      "telephone":"0115 824 2300",
      "mobile":"",
      "email":"",
      "address":{
        "id":0,
        "line1":"12 Main Street",
        "line2":"Long Eaton",
        "line3":"",
        "city":"Nottingham",
        "county":"",
        "postcode":"NG1 1AB",
        "country":"GB"
      },
      "location":{
        "address":"12 Main Street, Long Eaton, Nottingham, NG1 1AB, GB",
        "latitude":"52.955053",
        "longitude":"-1.14103"
      },
      "contact_id":127,
      "parent":{
        "additional_emails":[
          "john@gmail.com"
        ],
        "additional_mobiles":[
          "07123 456 789",
          "07987 654 300"
        ],
        "primary":{
          "contact_id":127,
          "first_name":"Gavin",
          "last_name":"Courtney",
          "sex":"m",
          "relationship":"parent",
          "email":"support@churchsuite.com",
          "mobile":"07123 123 784",
          "telephone":"0115 824 2300",
          "communication":{
            "general_email":1,
            "general_sms":1
          }
        },
        "secondary":{
          "contact_id":436,
          "first_name":"Mary",
          "last_name":"Courtney",
          "sex":"f",
          "relationship":"parent",
          "email":"Mary_Courtney@gmail.com",
          "mobile":"",
          "telephone":"0115 824 2300",
          "communication":{
            "general_email":1,
            "general_sms":1
          }
        }
      },
      "custom_fields":[
        
      ],
      "school":"",
      "medical_short":"Allergic to peanuts",
      "medical":"",
      "doctor_details":"",
      "special_needs":"",
      "info":"Only likes orange juice",
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
      "site_id":1,
      "site_ids":[
        "1"
      ],
      "status":"active",
      "images":[
        
      ],
      "mtime":"2021-11-23 15:18:16",
      "muser":"Paul",
      "ctime":"2017-10-03 15:16:02",
      "cuser":"mychurchsuite"
    },
    {
      "id":802,
      "person_uuid":"b1eecd08-cc08-4161-9065-351d7528dda1",
      "type_id":"child_802",
      "first_name":"Lucille",
      "middle_name":"",
      "last_name":"Courtney",
      "name":"Lucille Courtney",
      "formal_name":"",
      "sex":null,
      "date_of_birth":"2012-08-07",
      "telephone":"0115 824 2300",
      "mobile":"07926 805 909",
      "email":"",
      "address":{
        "id":0,
        "line1":"12 Main Street",
        "line2":"Long Eaton",
        "line3":"",
        "city":"Nottingham",
        "county":"",
        "postcode":"NG1 1AB",
        "country":"GB"
      },
      "location":{
        "address":"12 Main Street, Long Eaton, Nottingham, NG1 1AB, GB",
        "latitude":"52.955053",
        "longitude":"-1.14103"
      },
      "contact_id":127,
      "parent":{
        "additional_emails":[
          
        ],
        "additional_mobiles":[
          
        ],
        "primary":{
          "contact_id":127,
          "first_name":"Gavin",
          "last_name":"Courtney",
          "sex":"m",
          "relationship":"parent",
          "email":"support@churchsuite.com",
          "mobile":"07123 123 784",
          "telephone":"0115 824 2300",
          "communication":{
            "general_email":1,
            "general_sms":1
          }
        },
        "secondary":{
          "contact_id":436,
          "first_name":"Mary",
          "last_name":"Courtney",
          "sex":"f",
          "relationship":"parent",
          "email":"Mary_Courtney@gmail.com",
          "mobile":"",
          "telephone":"0115 824 2300",
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
        "rota_email":1,
        "rota_sms":1
      },
      "has_email_opt_out":false,
      "has_rota_email_opt_out":false,
      "has_rota_sms_opt_out":false,
      "has_sms_opt_out":false,
      "consent":{
        "internal":"1",
        "external":"1"
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
      "mtime":"2021-11-26 10:28:23",
      "muser":"Paul",
      "ctime":"2017-10-03 11:58:55",
      "cuser":"mychurchsuite"
    }
  ]
}
```

This will return one of the following HTTP codes:

* `200` children data returned
* `400` some of the data passed through was not valid, e.g. invalid URL
* `404` contact does not exist



## Get a child's details

* `GET /v1/my/child/1` will return the details of any children linked to the current contact

```json
{
  "id":803,
  "person_uuid":"c112b4fe-5c27-4480-bebc-30a33796fdd0",
  "type_id":"child_803",
  "first_name":"Alice",
  "middle_name":"",
  "last_name":"Courtney",
  "name":"Alice Courtney",
  "formal_name":"",
  "sex":null,
  "date_of_birth":"2015-09-02",
  "telephone":"0115 824 2300",
  "mobile":"",
  "email":"",
  "address":{
    "id":0,
    "line1":"12 Main Street",
    "line2":"Long Eaton",
    "line3":"",
    "city":"Nottingham",
    "county":"",
    "postcode":"NG1 1AB",
    "country":"GB"
  },
  "location":{
    "address":"12 Main Street, Long Eaton, Nottingham, NG1 1AB, GB",
    "latitude":"52.955053",
    "longitude":"-1.14103"
  },
  "contact_id":127,
  "parent":{
    "additional_emails":[
      "john@gmail.com"
    ],
    "additional_mobiles":[
      "07123 456 789",
      "07987 654 300"
    ],
    "primary":{
      "contact_id":127,
      "first_name":"Gavin",
      "last_name":"Courtney",
      "sex":"m",
      "relationship":"parent",
      "email":"support@churchsuite.com",
      "mobile":"07123 123 784",
      "telephone":"0115 824 2300",
      "communication":{
        "general_email":1,
        "general_sms":1
      }
    },
    "secondary":{
      "contact_id":436,
      "first_name":"Mary",
      "last_name":"Courtney",
      "sex":"f",
      "relationship":"parent",
      "email":"Mary_Courtney@gmail.com",
      "mobile":"",
      "telephone":"0115 824 2300",
      "communication":{
        "general_email":1,
        "general_sms":1
      }
    }
  },
  "custom_fields":[
    
  ],
  "school":"",
  "medical_short":"Allergic to peanuts",
  "medical":"",
  "doctor_details":"",
  "special_needs":"",
  "info":"Only likes orange juice",
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
  "site_id":1,
  "site_ids":[
    "1"
  ],
  "status":"active",
  "images":[
    
  ],
  "mtime":"2021-11-23 15:18:16",
  "muser":"Paul",
  "ctime":"2017-10-03 15:16:02",
  "cuser":"mychurchsuite"
}
```

This will return one of the following HTTP codes:

* `200` child data returned
* `400` some of the data passed through was not valid, e.g. invalid URL
* `403` forbidden, no such child for this contact
* `404` child not found
