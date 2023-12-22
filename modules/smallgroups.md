# Small Groups

[Home](https://github.com/ChurchSuite/churchsuite-api)

The Small Groups module is concerned with the management of groups of contacts, along with their attendance, and support the following endpoints:

## List/search groups

* `GET /v1/smallgroups/groups`  will return all groups
* `GET /v1/smallgroups/groups?embed_visible=true`  will return all groups visible to Embed, without pagination.
* `GET /v1/smallgroups/groups?public_visible=true`  will return all groups visible to My ChurchSuite.
* `GET /v1/smallgroups/groups?view=active`  will return all groups in a view. The view parameter accepts the following values; archived, active, active_future, future. Not using this parameter will return groups from the active view.
* `GET /v1/smallgroups/groups?page=2` will return the second page of groups
* `GET /v1/smallgroups/groups?page=2&per_page=5` will return the second page of groups, with each page limited to 5 results

```json
{
  "pagination":{
    "no_results":11,
    "page":1,
    "per_page":1
  },
  "groups":[
    {
      "id":112,
      "identifier":"gisiog3m",
      "reference":null,
      "name":"Arnold - North (Online)",
      "date_start":"2023-09-05",
      "date_end":"",
      "custom_frequency":"",
      "frequency":"weekly",
      "day":"2",
      "site":null,
      "time":"20:00",
      "location":{
        "address":null,
        "latitude":null,
        "longitude":null,
        "name":"",
        "type":"online",
        "url":"",
        "address_name":""
      },
      "description":"Our desire is to know God and pursue Him. We seek to encourage one another to fulfil our destiny in Him, as we live out our lives, believing that it is how we live, how we serve and how we love that will have the greatest impact in advancing the Kingdom.\r\n\r\nFor more info visit www.kingshope.church",
      "images":[
        
      ],
      "no_members":15,
      "public_visible":true,
      "public_signup":true,
      "embed_visible":true,
      "embed_signup":true,
      "connect_visible":true,
      "connect_signup":true,
      "signup_enabled":true,
      "signup_date_start":"2023-08-28",
      "signup_date_end":"",
      "signup_capacity":20,
      "signup_member_status":"pending",
      "signup_confirm_email":true,
      "signup_confirm_email_from_name":"",
      "signup_confirm_email_from_email":"",
      "signup_confirm_email_subject":"",
      "signup_confirm_email_body":"",
      "signup_details_visible":"after_signup",
      "signup_link_visible":true,
      "signup_full":false,
      "cluster_id":null,
      "cluster":null,
      "custom_fields":[
        
      ],
      "labels":[
        {
          "id":13,
          "value":[
            "26ba4865-212a-4e23-82f4-0ca643e533aa",
            "cf6bc8ea-783d-427d-bed5-24d1057a25e3",
            "1c8b2247-2ebf-4f5b-965b-0e9f35524434",
            "ac556e29-317f-4378-9d24-1969d6dd74e0"
          ]
        },
        {
          "id":14,
          "value":[
            "cde141a8-0755-4f3a-b280-65740e1cf236",
            "4427e3ba-ae45-441a-bc28-493620b381b4",
            "95d535d3-7a8b-4ce2-9c4b-3bb490cf45e0"
          ]
        },
        {
          "id":15,
          "value":[
            "e6ffb9ed-9abd-48fc-90f8-7f76d853aaa0",
            "3fdf6cc8-5117-4dd1-b772-3742f2ebb287"
          ]
        }
      ],
      "embed_signup_page_title":"Find a home in a small group \ud83c\udfe1",
      "embed_signup_page_message":"We'd love everyone to find a home in a small group! If you can't find one that is near you or seems like a good fit for you, email smallgroups@kingshope.church <\/a>and we'll help you locate a small group to join.",
      "mtime":"2023-11-20 23:15:12",
      "muser":"Paul",
      "ctime":"2023-08-29 16:24:29",
      "cuser":"Sue"
    }
  ]
}
```


## Get a group

* `GET /v1/smallgroups/group/1` will return data for a specific group

```json
{
  "id":1,
  "identifier":"ihdqujh9",
  "reference":"",
  "name":"West Bridgford",
  "date_start":"2008-01-02",
  "date_end":"2023-08-06",
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
  "no_members":4,
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
  "cluster_id":null,
  "cluster":null,
  "custom_fields":[
    
  ],
  "labels":[
    {
      "id":13,
      "value":[
        "d746f9c7-9db9-4d89-aafa-b8951f6fbfa2",
        "bf195d7e-5527-431e-92d9-62a38ce3139c",
        "26ba4865-212a-4e23-82f4-0ca643e533aa",
        "cf6bc8ea-783d-427d-bed5-24d1057a25e3",
        "2a9b99b0-7cad-47a5-ba5b-95977c30ad5c",
        "4e065a57-52c4-42ed-b355-cbc596d4d8ab",
        "1c8b2247-2ebf-4f5b-965b-0e9f35524434",
        "ac556e29-317f-4378-9d24-1969d6dd74e0"
      ]
    },
    {
      "id":14,
      "value":[
        "cde141a8-0755-4f3a-b280-65740e1cf236",
        "4427e3ba-ae45-441a-bc28-493620b381b4",
        "95d535d3-7a8b-4ce2-9c4b-3bb490cf45e0"
      ]
    },
    {
      "id":15,
      "value":[
        "e6ffb9ed-9abd-48fc-90f8-7f76d853aaa0"
      ]
    }
  ],
  "embed_signup_page_title":"Find a home in a small group \ud83c\udfe1",
  "embed_signup_page_message":"We'd love everyone to find a home in a small group! If you can't find one that is near you or seems like a good fit for you, email smallgroups@kingshope.church <\/a>and we'll help you locate a small group to join.",
  "mtime":"2023-11-20 23:15:04",
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
    "no_results":2,
    "page":1,
    "per_page":50
  },
  "members":[
    {
      "id":41,
      "person_id":108,
      "uuid":null,
      "type_id":"contact_41",
      "first_name":"Beth",
      "last_name":"King",
      "title":null,
      "middle_name":null,
      "formal_name":null,
      "former_name":null,
      "maiden_name":null,
      "sex":"f",
      "date_of_birth":"1959-05-21",
      "marital":"married",
      "spouse_id":null,
      "address":"37 Rolleston Place",
      "address2":"Chilwell",
      "address3":"",
      "city":"Nottingham",
      "county":"",
      "postcode":"NG11 6AY",
      "country":"",
      "latitude":52.894409,
      "longitude":-1.159888,
      "telephone":"01247 528 727",
      "mobile":"07219 248 364",
      "work_telephone":"",
      "email":"beth.king@live.com",
      "job":null,
      "employer":null,
      "public_options":{
        "invited":false,
        "access":false,
        "visible":{
          "enabled":true,
          "address":false,
          "email":true,
          "mobile":true,
          "telephone":false
        },
        "custom":false
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
        "request_ctime":null,
        "granted_ctime":null,
        "granted_name":null
      },
      "status":"active",
      "site_id":1,
      "site_ids":[
        "1"
      ],
      "mtime":null,
      "muser":null,
      "ctime":null,
      "cuser":null,
      "member_id":8,
      "group_id":1,
      "roles":[
        
      ]
    },
    {
      "id":16,
      "person_id":85,
      "uuid":null,
      "type_id":"contact_16",
      "first_name":"Ian",
      "last_name":"Turner",
      "title":null,
      "middle_name":null,
      "formal_name":null,
      "former_name":null,
      "maiden_name":null,
      "sex":"m",
      "date_of_birth":"1989-12-03",
      "marital":"married",
      "spouse_id":null,
      "address":"20 Austrey Crescent",
      "address2":"Lenton",
      "address3":"",
      "city":"Nottingham",
      "county":"",
      "postcode":"NG7 7FB",
      "country":"",
      "latitude":52.979557,
      "longitude":-1.173802,
      "telephone":"0121 788 5049",
      "mobile":"07839 987 566",
      "work_telephone":"",
      "email":"ian.turner@sky.com",
      "job":null,
      "employer":null,
      "public_options":{
        "invited":false,
        "access":false,
        "visible":{
          "enabled":true,
          "address":true,
          "email":true,
          "mobile":true,
          "telephone":false
        },
        "custom":false
      },
      "communication":{
        "general_email":1,
        "general_sms":1,
        "phone":0,
        "post":0,
        "rota_email":1,
        "rota_sms":1
      },
      "location":{
        "address":"20 Austrey Crescent, Lenton, Nottingham, NG7 7FB",
        "latitude":"52.979557",
        "longitude":"-1.173802"
      },
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
      "mtime":null,
      "muser":null,
      "ctime":null,
      "cuser":null,
      "member_id":4,
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
  "date_end":"2023-08-06",
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
  "no_members":4,
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
  "cluster_id":null,
  "cluster":null,
  "custom_fields":[
    
  ],
  "labels":[
    {
      "id":13,
      "value":[
        "d746f9c7-9db9-4d89-aafa-b8951f6fbfa2",
        "bf195d7e-5527-431e-92d9-62a38ce3139c",
        "26ba4865-212a-4e23-82f4-0ca643e533aa",
        "cf6bc8ea-783d-427d-bed5-24d1057a25e3",
        "2a9b99b0-7cad-47a5-ba5b-95977c30ad5c",
        "4e065a57-52c4-42ed-b355-cbc596d4d8ab",
        "1c8b2247-2ebf-4f5b-965b-0e9f35524434",
        "ac556e29-317f-4378-9d24-1969d6dd74e0"
      ]
    },
    {
      "id":14,
      "value":[
        "cde141a8-0755-4f3a-b280-65740e1cf236",
        "4427e3ba-ae45-441a-bc28-493620b381b4",
        "95d535d3-7a8b-4ce2-9c4b-3bb490cf45e0"
      ]
    },
    {
      "id":15,
      "value":[
        "e6ffb9ed-9abd-48fc-90f8-7f76d853aaa0"
      ]
    }
  ],
  "embed_signup_page_title":"Find a home in a small group \ud83c\udfe1",
  "embed_signup_page_message":"We'd love everyone to find a home in a small group! If you can't find one that is near you or seems like a good fit for you, email smallgroups@kingshope.church <\/a>and we'll help you locate a small group to join.",
  "mtime":"2023-11-20 23:15:04",
  "muser":"Paul",
  "ctime":"2011-07-28 15:17:44",
  "cuser":"admin"
}
```



## List clusters

* `GET /v1/smallgroups/clusters` will return clusters

```json
{
  "pagination":{
    "no_results":2,
    "page":1,
    "per_page":null
  },
  "clusters":[
    {
      "id":4,
      "name":"Derby",
      "mtime":"2021-04-26 18:28:50",
      "muser":"churchsuite",
      "ctime":"2011-12-06 10:08:08",
      "cuser":"churchsuite"
    },
    {
      "id":8,
      "name":"Nottingham",
      "mtime":"2021-04-26 18:49:24",
      "muser":"churchsuite",
      "ctime":"2018-08-10 10:59:36",
      "cuser":"paul"
    }
  ]
}
```
## Get a cluster

* `GET /v1/smallgroups/cluster/6` will return data for a specific cluster with the ID of 6

```json
{
  "id":4,
  "name":"Derby",
  "mtime":"2021-04-26 18:28:50",
  "muser":"churchsuite",
  "ctime":"2011-12-06 10:08:08",
  "cuser":"churchsuite"
}
```

This will return one of the following HTTP codes:

* `200` cluster data returned
* `400` some of the data passed through was not valid, e.g. invalid URL
* `404` cluster does not exist
