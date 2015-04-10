# Small Groups

[Home](https://github.com/ChurchApp/churchapp-api)

The Small Groups module is concerned with the management of groups of contacts, along with their attendance, and support the following endpoints:



## List/search groups

* `GET /v1/smallgroups/groups`  will return all groups
* `GET /v1/smallgroups/groups?embed_visible=true`  will return all groups visible to Embed, without pagination.
* `GET /v1/smallgroups/groups?public_visible=true`  will return all groups visible to My ChurchApp.
* `GET /v1/smallgroups/groups?tags=true`  will return all groups, including tags associated to each group.
* `GET /v1/smallgroups/groups?view=active`  will return all groups in a view. The view parameter accepts the following values; archived, active, future. Not using this parameter will return groups from any view.
* `GET /v1/smallgroups/groups?page=2` will return the second page of groups
* `GET /v1/smallgroups/groups?page=2&per_page=5` will return the second page of groups, with each page limited to 5 results

```json
{
  "pagination":{
    "no_results":8,
    "page":1,
    "per_page":2
  },
  "groups":[
    {
      "id":"2",
      "reference":"2",
      "name":"Beeston",
      "date_start":"2009-05-20",
      "date_end":"2015-12-31",
      "frequency":"weekly",
      "day":"1",
      "time":"20:00",
      "location":{
        "address":"NG9 1PA",
        "latitude":"52.9211461693166",
        "longitude":"-1.20475036320128"
      },
      "description":"We're a group of passionate followers of Jesus trying to do life together and be family. We meet weekly on Wednesdays - we'd love for you to join us!",
      "images":[
        
      ],
      "no_members":17,
      "public_visible":"1",
      "signup_date_start":"2014-09-01",
      "signup_date_end":"2015-09-30",
      "signup_capacity":"25",
      "custom_fields":{
        "custom1":"All ages"
      },
      "embed_visible":"1",
      "tags":[
        {
          "tag_id":"1",
          "name":"Beeston groups"
        }
      ]
    },
    {
      "id":"6",
      "reference":"5",
      "name":"Beeston 2",
      "date_start":"2013-03-07",
      "date_end":null,
      "frequency":"weekly",
      "day":"4",
      "time":"19:45",
      "location":{
        "address":"NG9 2GU",
        "latitude":"52.9319152832031",
        "longitude":"-1.2050369977951"
      },
      "description":"We're a group of passionate followers of Jesus trying to do life together and be family. We meet weekly on Wednesdays - we'd love for you to join us!",
      "images":[
        
      ],
      "no_members":21,
      "public_visible":"1",
      "signup_date_start":"2014-12-01",
      "signup_date_end":"2019-12-21",
      "signup_capacity":"60",
      "custom_fields":{
        "custom1":""
      },
      "embed_visible":"0",
      "tags":[
        {
          "tag_id":"1",
          "name":"Beeston groups"
        }
      ]
    }
  ]
}
```

## List group to tag relationships

* `GET /v1/smallgroups/groups_to_tags` will return a list of all smallgroup ids and the tag ids associated to each smallgroup

```json
{
  "2":[
    "1"
  ],
  "6":[
    "1"
  ],
  "1":[
    "2"
  ],
  "7":[
    "2"
  ],
  "8":[
    "2"
  ],
  "5":[
    "4"
  ],
  "4":[
    "5"
  ],
  "3":[
    "6"
  ]
}
```

## Get a group

* `GET /v1/smallgroups/group/1` will return data for a specific group
* `GET /v1/smallgroups/group/1?tags=true` will return data for a specific group, including any tags for the group

```json
{
  "id":"1",
  "reference":"1",
  "name":"West Bridgford",
  "date_start":"2008-01-02",
  "date_end":"2011-09-26",
  "frequency":"weekly",
  "day":"3",
  "time":"19:45",
  "location":[
    
  ],
  "description":"We are a really mixed group of people but our heart to love God is something we definitely have in common. We really enjoy spending time with each other and with God encouraging and supporting one another through the ups and downs of life",
  "images":[
    
  ],
  "no_members":13,
  "public_visible":"1",
  "signup_date_start":null,
  "signup_date_end":null,
  "signup_capacity":null,
  "custom_fields":{
    "custom1":null
  },
  "embed_visible":"1",
  "tags":[
    {
      "tag_id":"2",
      "name":"West Bridgford groups"
    }
  ]
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
  "members":{
    "contacts":[
      {
        "id":"127",
        "name":"Courtney, Gavin",
        "first_name":"Gavin",
        "last_name":"Courtney",
        "sex":null,
        "address":"26 Smith Street",
        "address2":"",
        "address3":"",
        "city":"Eastgate",
        "county":"",
        "postcode":"NG5 2EF",
        "country":null,
        "telephone":"0115 824 2300",
        "mobile":"07707 777 777",
        "email":"support@churchapp.co.uk",
        "public_options":{
          "access":false,
          "visible":{
            "enabled":true,
            "address":true,
            "email":true,
            "mobile":true,
            "telephone":true
          }
        },
        "location":{
          "address":"26 Smith Street, Eastgate, NG5 2EF",
          "latitude":"52.9719337522764",
          "longitude":"-1.15226554048982"
        },
        "custom_fields":{
          "custom1":null,
          "custom2":null
        },
        "images":[
          
        ],
        "roles":""
      }
    ],
    "children":[
      {
        "id":"2",
        "contact_id":null,
        "name":"Simmons, Diane",
        "first_name":"Diane",
        "last_name":"Simmons",
        "sex":"f",
        "date_of_birth":null,
        "mobile":false,
        "email":"",
        "telephone":"01525 119 241",
        "location":{
          "address":"",
          "latitude":null,
          "longitude":null
        },
        "consent":{
          "internal":null,
          "external":null
        },
        "school":null,
        "medical":null,
        "medical_short":null,
        "special_needs":null,
        "doctor_details":null,
        "images":[
          
        ],
        "roles":""
      }
    ]
  }
}
```

This will return one of the following HTTP codes:

* `200` group member data returned
* `400` some of the data passed through was not valid, e.g. invalid URL
* `404` group does not exist

## Add or replace members associated to a group

* `POST /v1/smallgroups/group/1/members` will add new members to a group

```json
{
  "action":"add",
  "members":{
    "contacts":[
      127,
      4
    ],
    "children":[
      2
    ]
  }
}
```

This will return one of the following HTTP codes:

* `201` members added/replaced
* `400` some of the data passed through was not valid
* `409` one of the members you tried to add to the group is already a group member

You can also give the action `replace_all` to overwrite the group's member lists.

```json
{
  "action":"replace_all",
  "members":{
    "contacts":[
      127,
      4
    ],
    "children":[
      2
    ]
  }
}
```

This `POST` method will return output in the following format:

```json
{
  "data":{
    "members":{
      "contacts":[
        {
          "id":"127",
          "name":"Courtney, Gavin",
          "first_name":"Gavin",
          "last_name":"Courtney",
          "sex":null,
          "address":"26 Smith Street",
          "address2":"",
          "address3":"",
          "city":"Eastgate",
          "county":"",
          "postcode":"NG5 2EF",
          "country":null,
          "telephone":"0115 824 2300",
          "mobile":"07707 777 777",
          "email":"support@churchapp.co.uk",
          "public_options":{
            "access":false,
            "visible":{
              "enabled":true,
              "address":true,
              "email":true,
              "mobile":true,
              "telephone":true
            }
          },
          "location":{
            "address":"26 Smith Street, Eastgate, NG5 2EF",
            "latitude":"52.9719337522764",
            "longitude":"-1.15226554048982"
          },
          "custom_fields":{
            "custom1":null,
            "custom2":null
          },
          "images":[
            
          ],
          "roles":""
        },
        {
          "id":"1",
          "name":"Ward, Philip",
          "first_name":"Philip",
          "last_name":"Ward",
          "sex":null,
          "address":"194 Albert Drive",
          "address2":"Cotgrave",
          "address3":null,
          "city":"",
          "county":"",
          "postcode":"NG3 5GE",
          "country":null,
          "telephone":"01479 029 358",
          "mobile":"07223 446 512",
          "email":"",
          "public_options":{
            "access":false,
            "visible":{
              "enabled":true,
              "address":true,
              "email":true,
              "mobile":true,
              "telephone":true
            }
          },
          "location":{
            "address":"194 Albert Drive, Cotgrave, NG3 5GE",
            "latitude":"52.9806106376197",
            "longitude":"-1.13507172180195"
          },
          "custom_fields":{
            "custom1":null,
            "custom2":null
          },
          "images":[
            
          ],
          "roles":""
        }
      ],
      "children":[
        {
          "id":"2",
          "contact_id":null,
          "name":"Simmons, Diane",
          "first_name":"Diane",
          "last_name":"Simmons",
          "sex":"f",
          "date_of_birth":null,
          "mobile":false,
          "email":"",
          "telephone":"01525 119 241",
          "location":{
            "address":"",
            "latitude":null,
            "longitude":null
          },
          "consent":{
            "internal":null,
            "external":null
          },
          "school":null,
          "medical":null,
          "medical_short":null,
          "special_needs":null,
          "doctor_details":null,
          "images":[
            
          ],
          "roles":""
        },
        {
          "id":"1",
          "contact_id":null,
          "name":"Wright, Micah",
          "first_name":"Micah",
          "last_name":"Wright",
          "sex":"m",
          "date_of_birth":null,
          "mobile":false,
          "email":"",
          "telephone":"01062 438 661",
          "location":{
            "address":"",
            "latitude":null,
            "longitude":null
          },
          "consent":{
            "internal":null,
            "external":null
          },
          "school":null,
          "medical":null,
          "medical_short":null,
          "special_needs":null,
          "doctor_details":null,
          "images":[
            
          ],
          "roles":""
        }
      ]
    }
  },
  "status_code":201
}
```

## List tags

* `GET /v1/smallgroups/tags` will return tags ordered alphabetically

```json
{
  "pagination":{
    "no_results":5,
    "page":1,
    "per_page":5
  },
  "tags":[
    {
      "tag_id":"1",
      "name":"Beeston groups",
      "no_groups":"1"
    },
    {
      "tag_id":"4",
      "name":"Carlton groups",
      "no_groups":"1"
    },
    {
      "tag_id":"5",
      "name":"Gamston groups",
      "no_groups":"1"
    },
    {
      "tag_id":"6",
      "name":"Meadows groups",
      "no_groups":"1"
    },
    {
      "tag_id":"2",
      "name":"West Bridgford groups",
      "no_groups":"1"
    }
  ]
}
```

## Get a tag

* `GET /v1/smallgroups/tag/1` will return data for a specific tag with the ID of 1
* `GET /v1/smallgroups/tag/1?groups=true` will return data for a specific tag, including all groups with the tag

```json
{
  "tag_id":"1",
  "name":"Beeston groups",
  "no_groups":"1",
  "groups":[
    {
      "id":"6",
      "reference":"5",
      "name":"Beeston 2",
      "date_start":"2013-03-07",
      "date_end":null,
      "frequency":"weekly",
      "day":"4",
      "time":"19:45",
      "location":{
        "address":"NG9 2GU",
        "latitude":null,
        "longitude":null
      },
      "description":"We're a group of passionate followers of Jesus trying to do life together and be family. We meet weekly on Wednesdays - we'd love for you to join us!",
      "images":[
        
      ],
      "no_members":22,
      "public_visible":"1",
      "signup_date_start":"2014-12-01",
      "signup_date_end":"2019-12-21",
      "signup_capacity":"60",
      "custom_fields":{
        "custom1":""
      },
      "embed_visible":"0"
    }
  ]
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
    "no_results":1,
    "page":1,
    "per_page":1
  },
  "groups":[
    {
      "id":"6",
      "reference":"5",
      "name":"Beeston 2",
      "date_start":"2013-03-07",
      "date_end":null,
      "frequency":"weekly",
      "day":"4",
      "time":"19:45",
      "location":{
        "address":"NG9 2GU",
        "latitude":null,
        "longitude":null
      },
      "description":"We're a group of passionate followers of Jesus trying to do life together and be family. We meet weekly on Wednesdays - we'd love for you to join us!",
      "images":[
        
      ],
      "no_members":22,
      "public_visible":"1",
      "signup_date_start":"2014-12-01",
      "signup_date_end":"2019-12-21",
      "signup_capacity":"60",
      "custom_fields":{
        "custom1":""
      },
      "embed_visible":"0"
    }
  ]
}
```

This will return one of the following HTTP codes:

* `200` tag groups returned
* `400` some of the data passed through was not valid, e.g. invalid URL
* `404` tag does not exist
