# Small Groups

[Home](https://github.com/ChurchSuite/churchsuite-api)

The Small Groups module is concerned with the management of groups of contacts, along with their attendance, and support the following endpoints:

## List/search groups

* `GET /v1/smallgroups/groups`  will return all groups
* `GET /v1/smallgroups/groups?embed_visible=true`  will return all groups visible to Embed, without pagination.
* `GET /v1/smallgroups/groups?public_visible=true`  will return all groups visible to My ChurchSuite.
* `GET /v1/smallgroups/groups?tags=true`  will return all groups, including tags associated to each group.
* `GET /v1/smallgroups/groups?view=active`  will return all groups in a view. The view parameter accepts the following values; archived, active, active_future, future. Not using this parameter will return groups from the active view.
* `GET /v1/smallgroups/groups?page=2` will return the second page of groups
* `GET /v1/smallgroups/groups?page=2&per_page=5` will return the second page of groups, with each page limited to 5 results

```json
{
  "pagination":{
    "no_results":16,
    "page":1,
    "per_page":1
  },
  "groups":[
    {
      "id":67,
      "identifier":"demycadz",
      "reference":"AB1",
      "name":"Arnold - North",
      "date_start":"2021-05-17",
      "date_end":"",
      "custom_frequency":"",
      "frequency":"weekly",
      "day":"2",
      "site":null,
      "time":"20:00",
      "location":{
        "address":"NG1 2AB",
        "latitude":"52.95481",
        "longitude":"-1.150963",
        "name":"Paul's House",
        "type":"physical",
        "url":null,
        "address_name":"Paul's House"
      },
      "description":"Our desire is to know God and pursue Him. We seek to encourage one another to fulfil our destiny in Him, as we live out our lives, believing that it is how we live, how we serve and how we love that will have the greatest impact in advancing the Kingdom.\r\n\r\nFor more info visit www.kingshope.church",
      "images":[
        
      ],
      "no_members":16,
      "public_visible":true,
      "public_signup":true,
      "embed_visible":true,
      "embed_signup":true,
      "connect_visible":true,
      "connect_signup":true,
      "signup_enabled":true,
      "signup_date_start":"2021-01-01",
      "signup_date_end":"",
      "signup_capacity":null,
      "signup_member_status":"pending",
      "signup_confirm_email":true,
      "signup_confirm_email_from_name":"",
      "signup_confirm_email_from_email":"",
      "signup_confirm_email_subject":null,
      "signup_confirm_email_body":"Thanks for signing up. See you soon!Lindsey",
      "signup_details_visible":"after_signup",
      "signup_link_visible":true,
      "signup_full":false,
      "cluster_id":14,
      "cluster":{
        "id":14,
        "name":"Cluster 1",
        "mtime":"2022-01-18 14:28:48",
        "muser":"Paul",
        "ctime":"2022-01-18 14:28:48",
        "cuser":"Paul"
      },
      "custom_fields":[
        
      ],
      "embed_signup_page_title":"",
      "embed_signup_page_message":"",
      "mtime":"2022-01-18 14:29:07",
      "muser":"Paul",
      "ctime":"2018-08-10 10:56:54",
      "cuser":"paul"
    }
  ]
}
```
## List group to tag relationships

* `GET /v1/smallgroups/groups_to_tags` will return a list of all smallgroup ids and the tag ids associated to each smallgroup

```json
{
  "95":[
    "17"
  ],
  "96":[
    "17"
  ],
  "2":[
    "18",
    "19",
    "25"
  ],
  "8":[
    "18",
    "19",
    "20"
  ],
  "12":[
    "18"
  ],
  "17":[
    "18",
    "19"
  ],
  "29":[
    "18"
  ],
  "34":[
    "18",
    "19",
    "20"
  ],
  "67":[
    "18",
    "23",
    "26",
    "27"
  ],
  "3":[
    "19"
  ],
  "56":[
    "19",
    "23"
  ],
  "65":[
    "19"
  ],
  "69":[
    "19",
    "20",
    "23"
  ],
  "71":[
    "19",
    "20"
  ],
  "73":[
    "19"
  ],
  "74":[
    "19"
  ],
  "80":[
    "19"
  ],
  "4":[
    "20"
  ],
  "66":[
    "20"
  ],
  "70":[
    "20"
  ],
  "5":[
    "25",
    "26"
  ]
}
```



## Get a group

* `GET /v1/smallgroups/group/1` will return data for a specific group
* `GET /v1/smallgroups/group/1?tags=true` will return data for a specific group, including any tags for the group

```json
{
  "id":1,
  "identifier":"ihdqujh9",
  "reference":"",
  "name":"West Bridgford",
  "date_start":"2008-01-02",
  "date_end":"",
  "custom_frequency":"",
  "frequency":"weekly",
  "day":"3",
  "site":null,
  "time":"19:45",
  "location":{
    "address":"NG2 6BP",
    "latitude":"52.930949",
    "longitude":"-1.130751",
    "name":"Members homes",
    "type":"physical",
    "url":null,
    "address_name":"Members homes"
  },
  "description":"We are a really mixed group of people but our heart to love God is something we definitely have in common. We really enjoy spending time with each other and with God encouraging and supporting one another through the ups and downs of life.\r\n\r\nFor more info visit www.kingshope.church",
  "images":[
    
  ],
  "no_members":11,
  "public_visible":true,
  "public_signup":true,
  "embed_visible":true,
  "embed_signup":true,
  "connect_visible":true,
  "connect_signup":true,
  "signup_enabled":true,
  "signup_date_start":"2021-01-01",
  "signup_date_end":"",
  "signup_capacity":null,
  "signup_member_status":"active",
  "signup_confirm_email":"1",
  "signup_confirm_email_from_name":"",
  "signup_confirm_email_from_email":"",
  "signup_confirm_email_subject":null,
  "signup_confirm_email_body":"Thanks for signing up to our group!",
  "signup_details_visible":"immediate",
  "signup_link_visible":true,
  "signup_full":false,
  "cluster_id":3,
  "cluster":{
    "id":3,
    "name":"Leicester",
    "mtime":"2021-04-26 18:28:41",
    "muser":"churchsuite",
    "ctime":"2011-12-06 10:08:04",
    "cuser":"churchsuite"
  },
  "custom_fields":[
    
  ],
  "embed_signup_page_title":"",
  "embed_signup_page_message":"",
  "tags":[
    
  ],
  "mtime":"2021-07-14 14:56:06",
  "muser":"Paul",
  "ctime":"2011-07-28 15:17:44",
  "cuser":"admin"
}
```

This will return one of the following HTTP codes:

* `200` group data returned
* `400` some of the data passed through was not valid, e.g. invalid URL
* `404` group does not exist



## Get all members associated to a group

* `GET /v1/smallgroups/group/1/members` will return data for a specific group's membership

```json
{
  "pagination":{
    "no_results":11,
    "page":1,
    "per_page":50
  },
  "members":[
    {
      "id":659,
      "person_uuid":null,
      "type_id":"child_659",
      "first_name":"Steven",
      "middle_name":null,
      "last_name":"Hurst",
      "name":"Steven Hurst",
      "formal_name":null,
      "sex":"m",
      "date_of_birth":"2008-01-24",
      "telephone":"0115 822 1284",
      "mobile":"",
      "email":"",
      "address":{
        "id":114,
        "line1":"42 Frederick Street",
        "line2":"West Bridgford",
        "line3":"",
        "city":"Nottingham",
        "county":"Nottinghamshire",
        "postcode":"NG12 2DY",
        "country":"UK"
      },
      "location":{
        "address":"42 Frederick Street, West Bridgford, Nottingham, Nottinghamshire, NG12 2DY, UK",
        "latitude":"52.942888",
        "longitude":"-1.046402"
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
          "relationship":null,
          "email":"",
          "mobile":"",
          "telephone":"0115 822 1284",
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
      "site_id":1,
      "site_ids":[
        "1"
      ],
      "status":"active",
      "images":[
        
      ],
      "mtime":null,
      "muser":null,
      "ctime":null,
      "cuser":null,
      "member_id":1,
      "group_id":1,
      "roles":[
        
      ]
    },
    {
      "id":2,
      "person_uuid":null,
      "type_id":"child_2",
      "first_name":"Diane",
      "middle_name":null,
      "last_name":"Simmons",
      "name":"Diane Simmons",
      "formal_name":null,
      "sex":"f",
      "date_of_birth":"2006-12-19",
      "telephone":"01525 119 241",
      "mobile":"",
      "email":"",
      "address":{
        "id":0,
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
          "relationship":null,
          "email":"",
          "mobile":"",
          "telephone":"01525 119 241",
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
      "site_id":20,
      "site_ids":[
        "20"
      ],
      "status":"active",
      "images":[
        
      ],
      "mtime":"2022-02-14 10:33:08",
      "muser":"churchsuite",
      "ctime":"2022-02-14 10:33:08",
      "cuser":"churchsuite",
      "member_id":839,
      "group_id":1,
      "roles":[
        
      ]
    }
  ]
}
```

This will return one of the following HTTP codes:

* `200` group member data returned
* `400` some of the data passed through was not valid, e.g. invalid URL
* `404` group does not exist

## Add or replace members associated to a group

* `POST /v1/smallgroups/group/1/members` will add new members to a group. Setting "send_confirmation" to true will send out confirmation emails to all new members.

```json
{
  "action":"add",
  "members":[
    "contact_127",
    "contact_4",
    "child_2"
  ],
  "send_confirmation":false
}
```

This will return one of the following HTTP codes:

* `201` members added/replaced
* `400` some of the data passed through was not valid
* `409` one of the people you tried to add to the group is already a group member

You can also give the action `replace_all` to overwrite the group's member lists.

```json
{
  "action":"replace_all",
  "members":[
    "contact_127",
    "contact_4",
    "child_2"
  ]
}
```

This `POST` method will return output in the following format:

```json
{
  "id":1,
  "identifier":"ihdqujh9",
  "reference":"",
  "name":"West Bridgford",
  "date_start":"2008-01-02",
  "date_end":"",
  "custom_frequency":"",
  "frequency":"weekly",
  "day":"3",
  "site":null,
  "time":"19:45",
  "location":{
    "address":"NG2 6BP",
    "latitude":"52.930949",
    "longitude":"-1.130751",
    "name":"Members homes",
    "type":"physical",
    "url":null,
    "address_name":"Members homes"
  },
  "description":"We are a really mixed group of people but our heart to love God is something we definitely have in common. We really enjoy spending time with each other and with God encouraging and supporting one another through the ups and downs of life.\r\n\r\nFor more info visit www.kingshope.church",
  "images":[
    
  ],
  "no_members":11,
  "public_visible":true,
  "public_signup":true,
  "embed_visible":true,
  "embed_signup":true,
  "connect_visible":true,
  "connect_signup":true,
  "signup_enabled":true,
  "signup_date_start":"2021-01-01",
  "signup_date_end":"",
  "signup_capacity":null,
  "signup_member_status":"active",
  "signup_confirm_email":true,
  "signup_confirm_email_from_name":"",
  "signup_confirm_email_from_email":"",
  "signup_confirm_email_subject":null,
  "signup_confirm_email_body":"Thanks for signing up to our group!",
  "signup_details_visible":"immediate",
  "signup_link_visible":true,
  "signup_full":false,
  "cluster_id":3,
  "cluster":{
    "id":3,
    "name":"Leicester",
    "mtime":"2021-04-26 18:28:41",
    "muser":"churchsuite",
    "ctime":"2011-12-06 10:08:04",
    "cuser":"churchsuite"
  },
  "custom_fields":[
    
  ],
  "embed_signup_page_title":"",
  "embed_signup_page_message":"",
  "mtime":"2021-07-14 14:56:06",
  "muser":"Paul",
  "ctime":"2011-07-28 15:17:44",
  "cuser":"admin"
}
```



## List tags

* `GET /v1/smallgroups/tags` will return tags ordered alphabetically

```json
{
  "pagination":{
    "no_results":9,
    "page":1,
    "per_page":50
  },
  "tags":[
    {
      "id":18,
      "tag_id":18,
      "name":"Daytime groups",
      "color":"orange",
      "num_groups":7,
      "mtime":"2022-01-31 16:15:04",
      "muser":"shane",
      "ctime":"2019-10-23 20:14:46",
      "cuser":"paul"
    },
    {
      "id":23,
      "tag_id":23,
      "name":"Prayer-focussed groups",
      "color":"orange",
      "num_groups":3,
      "mtime":"2021-04-26 18:51:59",
      "muser":"churchsuite",
      "ctime":"2020-05-01 11:04:13",
      "cuser":"Sue"
    },
    {
      "id":20,
      "tag_id":20,
      "name":"Social justice groups",
      "color":"orange",
      "num_groups":7,
      "mtime":"2021-10-08 14:39:46",
      "muser":"shane",
      "ctime":"2019-11-28 21:50:52",
      "cuser":"paul"
    },
    {
      "id":17,
      "tag_id":17,
      "name":"Special interest groups",
      "color":"orange",
      "num_groups":2,
      "mtime":"2021-04-28 23:46:36",
      "muser":"Paul",
      "ctime":"2019-05-29 00:40:52",
      "cuser":"paul"
    },
    {
      "id":19,
      "tag_id":19,
      "name":"Study groups",
      "color":"orange",
      "num_groups":12,
      "mtime":"2021-04-28 23:46:41",
      "muser":"Paul",
      "ctime":"2019-11-28 21:49:47",
      "cuser":"paul"
    },
    {
      "id":24,
      "tag_id":24,
      "name":"Test",
      "color":"grey",
      "num_groups":0,
      "mtime":"2022-01-13 12:20:28",
      "muser":"cara",
      "ctime":"2022-01-13 12:18:52",
      "cuser":"cara"
    },
    {
      "id":26,
      "tag_id":26,
      "name":"UK",
      "color":"red",
      "num_groups":2,
      "mtime":"2022-01-14 16:24:00",
      "muser":"Paul",
      "ctime":"2022-01-14 16:24:00",
      "cuser":"Paul"
    },
    {
      "id":27,
      "tag_id":27,
      "name":"Women's Group",
      "color":"blue",
      "num_groups":1,
      "mtime":"2022-01-18 14:27:03",
      "muser":"Paul",
      "ctime":"2022-01-18 14:27:03",
      "cuser":"Paul"
    },
    {
      "id":25,
      "tag_id":25,
      "name":"Zone 1 London",
      "color":"blue",
      "num_groups":2,
      "mtime":"2022-01-14 16:21:31",
      "muser":"Paul",
      "ctime":"2022-01-14 16:21:31",
      "cuser":"Paul"
    }
  ]
}
```
## Get a tag

* `GET /v1/smallgroups/tag/1` will return data for a specific tag with the ID of 1
* `GET /v1/smallgroups/tag/1?groups=true` will return data for a specific tag, including all groups with the tag

```json
{
  "id":18,
  "tag_id":18,
  "name":"Daytime groups",
  "color":"orange",
  "num_groups":7,
  "mtime":"2022-01-31 16:15:04",
  "muser":"shane",
  "ctime":"2019-10-23 20:14:46",
  "cuser":"paul"
}
```

This will return one of the following HTTP codes:

* `200` tag data returned
* `400` some of the data passed through was not valid, e.g. invalid URL
* `404` tag does not exist

## Get a tag's groups

* `GET /v1/smallgroups/tag/1/groups` will return the groups for the tag with the ID of 1

```json
{
  "pagination":{
    "no_results":6,
    "page":1,
    "per_page":1
  },
  "groups":[
    {
      "id":67,
      "identifier":"demycadz",
      "reference":"AB1",
      "name":"Arnold - North",
      "date_start":"2021-05-17",
      "date_end":"",
      "custom_frequency":"",
      "frequency":"weekly",
      "day":"2",
      "site":null,
      "time":"20:00",
      "location":{
        "address":"NG1 2AB",
        "latitude":"52.95481",
        "longitude":"-1.150963",
        "name":"Paul's House",
        "type":"physical",
        "url":null,
        "address_name":"Paul's House"
      },
      "description":"Our desire is to know God and pursue Him. We seek to encourage one another to fulfil our destiny in Him, as we live out our lives, believing that it is how we live, how we serve and how we love that will have the greatest impact in advancing the Kingdom.\r\n\r\nFor more info visit www.kingshope.church",
      "images":[
        
      ],
      "no_members":16,
      "public_visible":true,
      "public_signup":true,
      "embed_visible":true,
      "embed_signup":true,
      "connect_visible":true,
      "connect_signup":true,
      "signup_enabled":true,
      "signup_date_start":"2021-01-01",
      "signup_date_end":"",
      "signup_capacity":null,
      "signup_member_status":"pending",
      "signup_confirm_email":true,
      "signup_confirm_email_from_name":"",
      "signup_confirm_email_from_email":"",
      "signup_confirm_email_subject":null,
      "signup_confirm_email_body":"Thanks for signing up. See you soon!Lindsey",
      "signup_details_visible":"after_signup",
      "signup_link_visible":true,
      "signup_full":false,
      "cluster_id":14,
      "cluster":{
        "id":14,
        "name":"Cluster 1",
        "mtime":"2022-01-18 14:28:48",
        "muser":"Paul",
        "ctime":"2022-01-18 14:28:48",
        "cuser":"Paul"
      },
      "custom_fields":[
        
      ],
      "embed_signup_page_title":"",
      "embed_signup_page_message":"",
      "mtime":"2022-01-18 14:29:07",
      "muser":"Paul",
      "ctime":"2018-08-10 10:56:54",
      "cuser":"paul"
    }
  ]
}
```

This will return one of the following HTTP codes:

* `200` tag groups returned
* `400` some of the data passed through was not valid, e.g. invalid URL
* `404` tag does not exist



## List clusters

* `GET /v1/smallgroups/clusters` will return clusters

```json
{
  "pagination":{
    "no_results":6,
    "page":1,
    "per_page":50
  },
  "clusters":[
    {
      "id":14,
      "name":"Cluster 1",
      "mtime":"2022-01-18 14:28:48",
      "muser":"Paul",
      "ctime":"2022-01-18 14:28:48",
      "cuser":"Paul"
    },
    {
      "id":4,
      "name":"Derby",
      "mtime":"2021-04-26 18:28:50",
      "muser":"churchsuite",
      "ctime":"2011-12-06 10:08:08",
      "cuser":"churchsuite"
    },
    {
      "id":10,
      "name":"Leadership",
      "mtime":"2019-03-03 17:56:39",
      "muser":"paul",
      "ctime":"2019-03-03 17:56:39",
      "cuser":"paul"
    },
    {
      "id":3,
      "name":"Leicester",
      "mtime":"2021-04-26 18:28:41",
      "muser":"churchsuite",
      "ctime":"2011-12-06 10:08:04",
      "cuser":"churchsuite"
    },
    {
      "id":8,
      "name":"Nottingham",
      "mtime":"2021-04-26 18:49:24",
      "muser":"churchsuite",
      "ctime":"2018-08-10 10:59:36",
      "cuser":"paul"
    },
    {
      "id":12,
      "name":"Online Gatherings",
      "mtime":"2020-05-01 14:43:33",
      "muser":"Sue",
      "ctime":"2020-05-01 14:43:33",
      "cuser":"Sue"
    }
  ]
}
```
## Get a cluster

* `GET /v1/smallgroups/cluster/6` will return data for a specific cluster with the ID of 6

```json
{
  "id":14,
  "name":"Cluster 1",
  "mtime":"2022-01-18 14:28:48",
  "muser":"Paul",
  "ctime":"2022-01-18 14:28:48",
  "cuser":"Paul"
}
```

This will return one of the following HTTP codes:

* `200` cluster data returned
* `400` some of the data passed through was not valid, e.g. invalid URL
* `404` cluster does not exist
