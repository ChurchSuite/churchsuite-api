# Calendar

[Home](https://github.com/ChurchSuite/churchsuite-api)

The Calendar module manages all events, HR and event sign up within ChurchSuite. The following endpoints are available:

## List/search events

* `GET /v1/calendar/events` will return future events
* `GET /v1/calendar/events?q=Alpha` will return future events whose name contains "Alpha"
* `GET /v1/calendar/events?date_start=2017-01-01&date_end=2017-01-31` will return events between 1st January 2017 and 31st January 2017
* `GET /v1/calendar/events?date_start=2017-01-01&date_end=2017-01-31&group_by_sequence=true` will return events between 1st January 2017 and 31st January 2017 and will group sequence events together only showing the next event in that sequence.
* `GET /v1/calendar/events?date_start=2017-01-01&date_end=2017-01-31&group_by_sequence_and_name=true` will return events between 1st January 2017 and 31st January 2017 and will group sequence events together only showing the next events in that sequence with unique names.
* `GET /v1/calendar/events?categories=1,2,5` will return events within categories 1, 2 or 5.

```json
{
  "pagination":{
    "no_results":396,
    "page":1,
    "per_page":2
  },
  "events":[
    {
      "id":44,
      "identifier":"ybiaty4c",
      "sequence":"13",
      "name":"Early Morning Prayer",
      "datetime_start":"2014-08-07 07:30:00",
      "datetime_end":"2014-08-07 08:30:00",
      "description":"",
      "category":{
        "id":1,
        "name":"Prayer",
        "color":"#4697c9"
      },
      "status":"confirmed",
      "visible_to":[
        
      ],
      "brand":{
        "brand_css":"https:\/\/d2oqjddkfv895o.cloudfront.net\/_brand\/300921\/4697c9.css",
        "color":"4697c9",
        "emblem":"https:\/\/d2oqjddkfv895o.cloudfront.net\/2mCEi8cf\/brand\/emblem_7KJawf_512.png",
        "logo":"https:\/\/d2oqjddkfv895o.cloudfront.net\/2mCEi8cf\/brand\/logo_ZRWjOy.png",
        "name":"ChurchSuite Developers",
        "favicon_16":"https:\/\/d2oqjddkfv895o.cloudfront.net\/2mCEi8cf\/brand\/emblem_7KJawf_16.png",
        "favicon_32":"https:\/\/d2oqjddkfv895o.cloudfront.net\/2mCEi8cf\/brand\/emblem_7KJawf_32.png",
        "favicon_64":"https:\/\/d2oqjddkfv895o.cloudfront.net\/2mCEi8cf\/brand\/emblem_7KJawf_64.png",
        "favicon_128":"https:\/\/d2oqjddkfv895o.cloudfront.net\/2mCEi8cf\/brand\/emblem_7KJawf_128.png",
        "favicon_152":"https:\/\/d2oqjddkfv895o.cloudfront.net\/2mCEi8cf\/brand\/emblem_7KJawf_152.png",
        "favicon_200":"https:\/\/d2oqjddkfv895o.cloudfront.net\/2mCEi8cf\/brand\/emblem_7KJawf_200.png",
        "favicon_512":"https:\/\/d2oqjddkfv895o.cloudfront.net\/2mCEi8cf\/brand\/emblem_7KJawf_512.png"
      },
      "capacity":null,
      "images":[
        
      ],
      "location":{
        "address":"",
        "latitude":"55.9643005829989",
        "longitude":"-3.20251352734374",
        "name":"",
        "type":"physical",
        "url":null
      },
      "signup_options":{
        "notification":"0",
        "connect":{
          "visible":"0"
        },
        "embed":{
          "visible":"0",
          "enabled":"0"
        },
        "public":{
          "visible":"0",
          "enabled":"0",
          "featured":"0"
        },
        "sequence_signup":"0",
        "signup_cancel":"0",
        "signup_enabled":"0",
        "tickets":{
          "enabled":"0",
          "url":"https:\/\/demo.churchsuite.com\/events\/ybiaty4c"
        },
        "visible_to_tags":[
          
        ],
        "fixed_questions":{
          "name":{
            "name":"Name",
            "response_type":"Text",
            "required":true,
            "hidden":false
          },
          "email":{
            "name":"Email",
            "response_type":"Email",
            "required":"first",
            "hidden":false
          },
          "mobile":{
            "name":"Phone",
            "response_type":"Phone",
            "required":false,
            "hidden":false
          },
          "notes":{
            "name":"Notes",
            "response_type":"Paragraph",
            "required":false,
            "hidden":false
          }
        }
      },
      "site":{
        "id":1,
        "name":"Nottingham",
        "initials":"",
        "color":"#e98c90",
        "order":1,
        "address":{
          "id":null,
          "line1":"Easter Park",
          "line2":"Lenton Lane",
          "line3":"",
          "city":"Nottingham",
          "county":"Notts",
          "postcode":"NG7 2PX",
          "country":""
        },
        "mtime":"2022-01-27 11:56:24",
        "muser":"nathaniel",
        "ctime":"2015-05-20 14:11:16",
        "cuser":"churchsuite"
      },
      "pin":916987,
      "invite_hash":null,
      "public_visible":false,
      "mtime":"2017-07-19 18:11:11",
      "muser":"luke",
      "ctime":"2012-03-05 15:18:12",
      "cuser":"churchsuite"
    },
    {
      "id":1204,
      "identifier":"uhagc2wy",
      "sequence":"1173",
      "name":"Wednesday Morning Kids Club",
      "datetime_start":"2014-08-07 09:00:00",
      "datetime_end":"2014-08-07 11:00:00",
      "description":"Our weekly Tuesday AM kids club. Fun and games for your kids - and for you! A great time to connect with other parents and your children. Refreshments are provided. So come along to the Life Centre and enjoy! For more info, please get in touch with Fiona Brown.",
      "category":{
        "id":5,
        "name":"Kids",
        "color":"#0e7b35"
      },
      "status":"confirmed",
      "visible_to":[
        
      ],
      "brand":{
        "brand_css":"https:\/\/d2oqjddkfv895o.cloudfront.net\/_brand\/300921\/4697c9.css",
        "color":"4697c9",
        "emblem":"https:\/\/d2oqjddkfv895o.cloudfront.net\/2mCEi8cf\/brand\/emblem_7KJawf_512.png",
        "logo":"https:\/\/d2oqjddkfv895o.cloudfront.net\/2mCEi8cf\/brand\/logo_ZRWjOy.png",
        "name":"ChurchSuite Developers",
        "favicon_16":"https:\/\/d2oqjddkfv895o.cloudfront.net\/2mCEi8cf\/brand\/emblem_7KJawf_16.png",
        "favicon_32":"https:\/\/d2oqjddkfv895o.cloudfront.net\/2mCEi8cf\/brand\/emblem_7KJawf_32.png",
        "favicon_64":"https:\/\/d2oqjddkfv895o.cloudfront.net\/2mCEi8cf\/brand\/emblem_7KJawf_64.png",
        "favicon_128":"https:\/\/d2oqjddkfv895o.cloudfront.net\/2mCEi8cf\/brand\/emblem_7KJawf_128.png",
        "favicon_152":"https:\/\/d2oqjddkfv895o.cloudfront.net\/2mCEi8cf\/brand\/emblem_7KJawf_152.png",
        "favicon_200":"https:\/\/d2oqjddkfv895o.cloudfront.net\/2mCEi8cf\/brand\/emblem_7KJawf_200.png",
        "favicon_512":"https:\/\/d2oqjddkfv895o.cloudfront.net\/2mCEi8cf\/brand\/emblem_7KJawf_512.png"
      },
      "capacity":null,
      "images":{
        "thumb":{
          "px":128,
          "square":true,
          "mtime":1494242883,
          "url":"https:\/\/d2oqjddkfv895o.cloudfront.net\/2mCEi8cf\/calendar\/events\/1173_OU7LJ1YR_thumb.jpg"
        },
        "sm":{
          "px":256,
          "square":false,
          "mtime":1494242883,
          "url":"https:\/\/d2oqjddkfv895o.cloudfront.net\/2mCEi8cf\/calendar\/events\/1173_OU7LJ1YR_sm.jpg"
        },
        "md":{
          "px":512,
          "square":false,
          "mtime":1494242883,
          "url":"https:\/\/d2oqjddkfv895o.cloudfront.net\/2mCEi8cf\/calendar\/events\/1173_OU7LJ1YR_md.jpg"
        },
        "lg":{
          "px":1024,
          "square":false,
          "mtime":1494242883,
          "url":"https:\/\/d2oqjddkfv895o.cloudfront.net\/2mCEi8cf\/calendar\/events\/1173_OU7LJ1YR_lg.jpg"
        },
        "original_16":"https:\/\/d2oqjddkfv895o.cloudfront.net\/2mCEi8cf\/calendar\/events\/1173_OU7LJ1YR_thumb.jpg",
        "original_100":"https:\/\/d2oqjddkfv895o.cloudfront.net\/2mCEi8cf\/calendar\/events\/1173_OU7LJ1YR_sm.jpg",
        "original_500":"https:\/\/d2oqjddkfv895o.cloudfront.net\/2mCEi8cf\/calendar\/events\/1173_OU7LJ1YR_md.jpg",
        "original_1000":"https:\/\/d2oqjddkfv895o.cloudfront.net\/2mCEi8cf\/calendar\/events\/1173_OU7LJ1YR_lg.jpg",
        "square_16":"https:\/\/d2oqjddkfv895o.cloudfront.net\/2mCEi8cf\/calendar\/events\/1173_OU7LJ1YR_thumb.jpg",
        "square_100":"https:\/\/d2oqjddkfv895o.cloudfront.net\/2mCEi8cf\/calendar\/events\/1173_OU7LJ1YR_thumb.jpg"
      },
      "location":{
        "address":"NG8 3RG",
        "latitude":"52.96245587432611",
        "longitude":"-1.1983199649529475",
        "name":"Life Centre",
        "type":"physical",
        "url":null
      },
      "signup_options":{
        "notification":"0",
        "connect":{
          "visible":"0"
        },
        "embed":{
          "visible":"1",
          "enabled":"1"
        },
        "public":{
          "visible":"1",
          "enabled":"1",
          "featured":"0"
        },
        "sequence_signup":"0",
        "signup_cancel":"0",
        "signup_enabled":"1",
        "tickets":{
          "enabled":"0",
          "url":"https:\/\/demo.churchsuite.com\/events\/uhagc2wy"
        },
        "visible_to_tags":[
          
        ],
        "fixed_questions":{
          "name":{
            "name":"Name",
            "response_type":"Text",
            "required":true,
            "hidden":false
          },
          "email":{
            "name":"Email",
            "response_type":"Email",
            "required":"first",
            "hidden":false
          },
          "mobile":{
            "name":"Phone",
            "response_type":"Phone",
            "required":false,
            "hidden":false
          },
          "notes":{
            "name":"Notes",
            "response_type":"Paragraph",
            "required":false,
            "hidden":false
          }
        }
      },
      "site":{
        "id":1,
        "name":"Nottingham",
        "initials":"",
        "color":"#e98c90",
        "order":1,
        "address":{
          "id":null,
          "line1":"Easter Park",
          "line2":"Lenton Lane",
          "line3":"",
          "city":"Nottingham",
          "county":"Notts",
          "postcode":"NG7 2PX",
          "country":""
        },
        "mtime":"2022-01-27 11:56:24",
        "muser":"nathaniel",
        "ctime":"2015-05-20 14:11:16",
        "cuser":"churchsuite"
      },
      "pin":839288,
      "invite_hash":null,
      "public_visible":true,
      "mtime":"2019-07-02 15:17:25",
      "muser":"shane",
      "ctime":"2012-03-05 16:07:51",
      "cuser":"churchsuite"
    }
  ]
}
```


## Get event

* `GET /v1/calendar/event/:id` will return data for a specific event with the given numeric ID
* `GET /v1/calendar/event/:identifier` will return data for a specific event with the given string identifier

```json
{
  "id":1127457,
  "identifier":"o5zuiml1",
  "sequence":null,
  "name":"Serve the City",
  "datetime_start":"2022-02-14 00:00:00",
  "datetime_end":"2022-02-14 23:59:59",
  "description":"A great mission opportunity",
  "category":{
    "id":49,
    "name":"City Outreach 620a2180b0fda",
    "color":"#ff69b4"
  },
  "status":"confirmed",
  "visible_to":[
    
  ],
  "brand":{
    "brand_css":"https:\/\/d2oqjddkfv895o.cloudfront.net\/_brand\/300921\/4697c9.css",
    "color":"4697c9",
    "emblem":"https:\/\/d2oqjddkfv895o.cloudfront.net\/2mCEi8cf\/brand\/emblem_7KJawf_512.png",
    "logo":"https:\/\/d2oqjddkfv895o.cloudfront.net\/2mCEi8cf\/brand\/logo_ZRWjOy.png",
    "name":"ChurchSuite Developers",
    "favicon_16":"https:\/\/d2oqjddkfv895o.cloudfront.net\/2mCEi8cf\/brand\/emblem_7KJawf_16.png",
    "favicon_32":"https:\/\/d2oqjddkfv895o.cloudfront.net\/2mCEi8cf\/brand\/emblem_7KJawf_32.png",
    "favicon_64":"https:\/\/d2oqjddkfv895o.cloudfront.net\/2mCEi8cf\/brand\/emblem_7KJawf_64.png",
    "favicon_128":"https:\/\/d2oqjddkfv895o.cloudfront.net\/2mCEi8cf\/brand\/emblem_7KJawf_128.png",
    "favicon_152":"https:\/\/d2oqjddkfv895o.cloudfront.net\/2mCEi8cf\/brand\/emblem_7KJawf_152.png",
    "favicon_200":"https:\/\/d2oqjddkfv895o.cloudfront.net\/2mCEi8cf\/brand\/emblem_7KJawf_200.png",
    "favicon_512":"https:\/\/d2oqjddkfv895o.cloudfront.net\/2mCEi8cf\/brand\/emblem_7KJawf_512.png"
  },
  "capacity":null,
  "images":[
    
  ],
  "location":{
    "address":null,
    "latitude":null,
    "longitude":null,
    "name":null,
    "type":"physical",
    "url":null
  },
  "signup_options":{
    "notification":"0",
    "connect":{
      "visible":"1"
    },
    "embed":{
      "visible":"1",
      "enabled":"1"
    },
    "public":{
      "visible":"1",
      "enabled":"1",
      "featured":"1"
    },
    "sequence_signup":"0",
    "signup_cancel":"1",
    "signup_enabled":"1",
    "tickets":{
      "enabled":"1",
      "url":"https:\/\/demo.churchsuite.com\/events\/o5zuiml1"
    },
    "visible_to_tags":[
      
    ],
    "fixed_questions":{
      "name":{
        "name":"Name",
        "response_type":"Text",
        "required":true,
        "hidden":false
      },
      "email":{
        "name":"Email",
        "response_type":"Email",
        "required":"first",
        "hidden":false
      },
      "mobile":{
        "name":"Phone",
        "response_type":"Phone",
        "required":false,
        "hidden":false
      },
      "notes":{
        "name":"Notes",
        "response_type":"Paragraph",
        "required":false,
        "hidden":false
      }
    }
  },
  "site":null,
  "public_visible":true,
  "pin":584263,
  "invite_hash":null,
  "questions":[
    
  ],
  "mtime":"2022-02-14 09:31:44",
  "muser":"import",
  "ctime":"2022-02-14 09:31:44",
  "cuser":"import"
}
```

This will return one of the following HTTP codes:

* `200` event data returned
* `400` some of the data passed through was not valid, e.g. invalid URL
* `404` event does not exist

## Get event tickets

* `GET /v1/calendar/event/:id/tickets` will return the data regarding tickets available for this event

```json
{
  "pagination":{
    "no_results":2,
    "page":1,
    "per_page":50
  },
  "tickets":[
    {
      "id":140645,
      "uid":"rYal",
      "name":"Standard",
      "description":"Standard ticket.",
      "datetime_start":null,
      "datetime_end":null,
      "paid":"0.00",
      "paid_status":"unpaid",
      "price":"50.00",
      "currency":{
        "code":"GBP",
        "country":"GB",
        "symbol":"\u00a3"
      },
      "quantity":20,
      "no_sold":2,
      "hidden":false,
      "pay_on_arrival":false,
      "pay_on_arrival_label":"Pay on arrival",
      "order":1,
      "ctime":"2022-02-14 09:31:44",
      "cuser":"import",
      "mtime":"2022-02-14 09:31:44",
      "muser":"import"
    },
    {
      "id":140646,
      "uid":"hDuC",
      "name":"Standard - Fed",
      "description":"Standard ticket with food paid for.",
      "datetime_start":null,
      "datetime_end":null,
      "paid":"0.00",
      "paid_status":"unpaid",
      "price":"10.00",
      "currency":{
        "code":"GBP",
        "country":"GB",
        "symbol":"\u00a3"
      },
      "quantity":20,
      "no_sold":1,
      "hidden":false,
      "pay_on_arrival":false,
      "pay_on_arrival_label":"Pay on arrival",
      "order":2,
      "ctime":"2022-02-14 09:31:44",
      "cuser":"import",
      "mtime":"2022-02-14 09:31:44",
      "muser":"import"
    }
  ]
}
```

This will return one of the following HTTP codes:

* `200` ticket data returned
* `404` event does not exist

## Get event signups

* `GET /v1/calendar/signups?event_id=:id` will return the data regarding people who have signed up for the event

```json
{
  "pagination":{
    "no_results":3,
    "page":1,
    "per_page":50
  },
  "signups":[
    {
      "batch_id":"b4af6f71-2bb7-4bf9-80c1-5cea11c66580",
      "event_id":1127457,
      "event_sequence":null,
      "event_sequence_signup":false,
      "event_identifier":"o5zuiml1",
      "expires":null,
      "first_name":"Natalie",
      "last_name":"Clark",
      "email":null,
      "mobile":null,
      "method":"API",
      "notes":"",
      "payments":[
        
      ],
      "person":{
        "email":"",
        "first_name":"Natalie",
        "id":null,
        "images":[
          
        ],
        "last_name":"Clark",
        "mobile":"",
        "notes":"",
        "sex":null,
        "ticket":{
          "id":140645,
          "uid":null,
          "name":"Standard",
          "description":"Standard ticket.",
          "datetime_start":null,
          "datetime_end":null,
          "paid":"0.00",
          "paid_status":"unpaid",
          "price":"50.00",
          "currency":{
            "code":"GBP",
            "country":"GB",
            "symbol":"\u00a3"
          },
          "quantity":null,
          "no_sold":0,
          "hidden":false,
          "pay_on_arrival":false,
          "pay_on_arrival_label":"Pay on arrival",
          "order":null,
          "ctime":null,
          "cuser":null,
          "mtime":null,
          "muser":null
        },
        "type":"guest",
        "communication":{
          "general_email":1,
          "general_sms":1
        }
      },
      "qrcode_url":"https:\/\/api.qrserver.com\/v1\/create-qr-code\/?data=http%3A%2F%2Fdev.churchsuite%2Fevents%2Fo5zuiml1%2Fcheckin%2F11490%2Fprocess&size=200x200",
      "question_responses":[
        
      ],
      "id":11490,
      "identifier":"cacE6zbr",
      "payment_status":"unpaid",
      "status":"active",
      "refund_tx_id":null,
      "refund_amount":0,
      "ctime":"2022-02-14 09:31:45",
      "cuser":"import",
      "mtime":"2022-02-14 09:31:45",
      "muser":"import"
    },
    {
      "batch_id":"0cdf5715-457c-4aaa-8f9e-e3e78816740b",
      "event_id":1127457,
      "event_sequence":null,
      "event_sequence_signup":false,
      "event_identifier":"o5zuiml1",
      "expires":null,
      "first_name":"Wanda",
      "last_name":"Leek",
      "email":null,
      "mobile":null,
      "method":"API",
      "notes":"",
      "payments":[
        
      ],
      "person":{
        "email":"",
        "first_name":"Wanda",
        "id":null,
        "images":[
          
        ],
        "last_name":"Leek",
        "mobile":"",
        "notes":"",
        "sex":null,
        "ticket":{
          "id":140646,
          "uid":null,
          "name":"Standard - Fed",
          "description":"Standard ticket with food paid for.",
          "datetime_start":null,
          "datetime_end":null,
          "paid":"0.00",
          "paid_status":"unpaid",
          "price":"10.00",
          "currency":{
            "code":"GBP",
            "country":"GB",
            "symbol":"\u00a3"
          },
          "quantity":null,
          "no_sold":0,
          "hidden":false,
          "pay_on_arrival":false,
          "pay_on_arrival_label":"Pay on arrival",
          "order":null,
          "ctime":null,
          "cuser":null,
          "mtime":null,
          "muser":null
        },
        "type":"guest",
        "communication":{
          "general_email":1,
          "general_sms":1
        }
      },
      "qrcode_url":"https:\/\/api.qrserver.com\/v1\/create-qr-code\/?data=http%3A%2F%2Fdev.churchsuite%2Fevents%2Fo5zuiml1%2Fcheckin%2F11492%2Fprocess&size=200x200",
      "question_responses":[
        
      ],
      "id":11492,
      "identifier":"lWnfDHZe",
      "payment_status":"unpaid",
      "status":"active",
      "refund_tx_id":null,
      "refund_amount":0,
      "ctime":"2022-02-14 09:31:45",
      "cuser":"import",
      "mtime":"2022-02-14 09:31:45",
      "muser":"import"
    },
    {
      "batch_id":"9b98fef4-f155-41a2-a592-e099c3b5d511",
      "event_id":1127457,
      "event_sequence":null,
      "event_sequence_signup":false,
      "event_identifier":"o5zuiml1",
      "expires":null,
      "first_name":"Tim",
      "last_name":"Shorebirch",
      "email":null,
      "mobile":null,
      "method":"API",
      "notes":"",
      "payments":[
        
      ],
      "person":{
        "email":"",
        "first_name":"Tim",
        "id":null,
        "images":[
          
        ],
        "last_name":"Shorebirch",
        "mobile":"",
        "notes":"",
        "sex":null,
        "ticket":{
          "id":140645,
          "uid":null,
          "name":"Standard",
          "description":"Standard ticket.",
          "datetime_start":null,
          "datetime_end":null,
          "paid":"0.00",
          "paid_status":"unpaid",
          "price":"50.00",
          "currency":{
            "code":"GBP",
            "country":"GB",
            "symbol":"\u00a3"
          },
          "quantity":null,
          "no_sold":0,
          "hidden":false,
          "pay_on_arrival":false,
          "pay_on_arrival_label":"Pay on arrival",
          "order":null,
          "ctime":null,
          "cuser":null,
          "mtime":null,
          "muser":null
        },
        "type":"guest",
        "communication":{
          "general_email":1,
          "general_sms":1
        }
      },
      "qrcode_url":"https:\/\/api.qrserver.com\/v1\/create-qr-code\/?data=http%3A%2F%2Fdev.churchsuite%2Fevents%2Fo5zuiml1%2Fcheckin%2F11491%2Fprocess&size=200x200",
      "question_responses":[
        
      ],
      "id":11491,
      "identifier":"JuHQcNLC",
      "payment_status":"unpaid",
      "status":"active",
      "refund_tx_id":null,
      "refund_amount":0,
      "ctime":"2022-02-14 09:31:45",
      "cuser":"import",
      "mtime":"2022-02-14 09:31:45",
      "muser":"import"
    }
  ]
}
```

This will return one of the following HTTP codes:

* `200` signup data returned
* `404` event does not exist

## Add one or more signups to an event

* `POST /v1/calendar/event/:id/signups` will create a new signup for the event

```json
{
  "action":"add",
  "signups":[
    {
      "first_name":"Mark",
      "last_name":"Davies",
      "mobile":"",
      "email":"mark.davies@gmail.com",
      "notes":"Ref: T4ngR7C8\n=====\nDietary requirements: Vegetarian\n-----\nHeard about event: From a friend",
      "ticket_id":140646
    }
  ]
}
```

This will return one of the following HTTP codes:

* `201` signup(s) created
* `400` some of the data passed through was not valid

This POST method will return output in the following format:

```json
{
  "event_id":"1127457",
  "signups":[
    {
      "batch_id":"f88ea08b-cd84-4e27-a996-1f4f8d6405dc",
      "event_id":1127457,
      "event_sequence":null,
      "event_sequence_signup":false,
      "event_identifier":"o5zuiml1",
      "expires":null,
      "first_name":"Mark",
      "last_name":"Davies",
      "email":"mark.davies@gmail.com",
      "mobile":"",
      "method":"API",
      "notes":"Ref: T4ngR7C8 ===== Dietary requirements: Vegetarian ----- Heard about event: From a friend",
      "payments":[
        
      ],
      "person":{
        "email":"mark.davies@gmail.com",
        "first_name":"Mark",
        "id":null,
        "images":[
          
        ],
        "last_name":"Davies",
        "mobile":"",
        "notes":"Ref: T4ngR7C8 ===== Dietary requirements: Vegetarian ----- Heard about event: From a friend",
        "sex":null,
        "ticket":{
          "id":140646,
          "uid":null,
          "name":"Standard - Fed",
          "description":"Standard ticket with food paid for.",
          "datetime_start":null,
          "datetime_end":null,
          "paid":"0.00",
          "paid_status":"unpaid",
          "price":"10.00",
          "currency":{
            "code":"GBP",
            "country":"GB",
            "symbol":"\u00a3"
          },
          "quantity":null,
          "no_sold":0,
          "hidden":false,
          "pay_on_arrival":false,
          "pay_on_arrival_label":"Pay on arrival",
          "order":null,
          "ctime":null,
          "cuser":null,
          "mtime":null,
          "muser":null
        },
        "type":"guest",
        "communication":{
          "general_email":1,
          "general_sms":1
        }
      },
      "qrcode_url":"https:\/\/api.qrserver.com\/v1\/create-qr-code\/?data=http%3A%2F%2Fdev.churchsuite%2Fevents%2Fo5zuiml1%2Fcheckin%2F11493%2Fprocess&size=200x200",
      "question_responses":[
        
      ],
      "id":11493,
      "identifier":"gP0KconW",
      "payment_status":"unpaid",
      "status":"active",
      "refund_tx_id":null,
      "refund_amount":0,
      "ctime":"2022-02-14 09:31:47",
      "cuser":"churchsuite",
      "mtime":"2022-02-14 09:31:47",
      "muser":"churchsuite"
    }
  ]
}
```

## Update event signup

* `PUT /v1/calendar/event/:id/signup/:id` will update the specified signup for the event

```json
{
  "signups":[
    {
      "first_name":"Marcus",
      "last_name":"Davies",
      "email":"marcus.davies@gmail.com"
    }
  ]
}
```

This will return one of the following HTTP codes:

* `200` signup updated
* `400` some of the data passed through was not valid
* `404` signup is not linked to the specified event - check error message for details

This PUT method will return output in the following format:

```json
{
  "batch_id":"f88ea08b-cd84-4e27-a996-1f4f8d6405dc",
  "event_id":1127457,
  "event_sequence":null,
  "event_sequence_signup":false,
  "event_identifier":"o5zuiml1",
  "expires":null,
  "first_name":"Marcus",
  "last_name":"Davies",
  "email":"marcus.davies@gmail.com",
  "mobile":"",
  "method":"API",
  "notes":"Ref: T4ngR7C8 ===== Dietary requirements: Vegetarian ----- Heard about event: From a friend",
  "payments":[
    
  ],
  "person":{
    "email":"marcus.davies@gmail.com",
    "first_name":"Marcus",
    "id":null,
    "images":[
      
    ],
    "last_name":"Davies",
    "mobile":"",
    "notes":"Ref: T4ngR7C8 ===== Dietary requirements: Vegetarian ----- Heard about event: From a friend",
    "sex":null,
    "ticket":{
      "id":140646,
      "uid":null,
      "name":"Standard - Fed",
      "description":"Standard ticket with food paid for.",
      "datetime_start":null,
      "datetime_end":null,
      "paid":"0.00",
      "paid_status":"unpaid",
      "price":"10.00",
      "currency":{
        "code":"GBP",
        "country":"GB",
        "symbol":"\u00a3"
      },
      "quantity":null,
      "no_sold":0,
      "hidden":false,
      "pay_on_arrival":false,
      "pay_on_arrival_label":"Pay on arrival",
      "order":null,
      "ctime":null,
      "cuser":null,
      "mtime":null,
      "muser":null
    },
    "type":"guest",
    "communication":{
      "general_email":1,
      "general_sms":1
    }
  },
  "qrcode_url":"https:\/\/api.qrserver.com\/v1\/create-qr-code\/?data=http%3A%2F%2Fdev.churchsuite%2Fevents%2Fo5zuiml1%2Fcheckin%2F11493%2Fprocess&size=200x200",
  "question_responses":[
    
  ],
  "id":11493,
  "identifier":"gP0KconW",
  "payment_status":"unpaid",
  "status":"active",
  "refund_tx_id":null,
  "refund_amount":0,
  "ctime":"2022-02-14 09:31:47",
  "cuser":"churchsuite",
  "mtime":"2022-02-14 09:31:48",
  "muser":"churchsuite"
}
```

## Delete event signup

* `DELETE /v1/calendar/event/:id/signup/:id` will remove the specified signup from the event

```json
[
  
]
```

This will return one of the following HTTP codes:

* `204` signup deleted
* `404` signup is not linked to the specified event - check error message for details



## List categories

* `GET /v1/calendar/categories` will return categories ordered alphabetically

```json
{
  "pagination":{
    "no_results":21,
    "page":1,
    "per_page":50
  },
  "categories":[
    {
      "id":33,
      "name":"City Outreach",
      "colour":"#ff69b4",
      "status":"active",
      "brand_id":null,
      "ctime":"2022-02-14 09:03:24",
      "cuser":"import",
      "mtime":"2022-02-14 09:03:24",
      "muser":"import",
      "brand":{
        "brand_css":"https:\/\/d2oqjddkfv895o.cloudfront.net\/_brand\/300921\/4697c9.css",
        "color":"4697c9",
        "emblem":"https:\/\/d2oqjddkfv895o.cloudfront.net\/2mCEi8cf\/brand\/emblem_7KJawf_512.png",
        "logo":"https:\/\/d2oqjddkfv895o.cloudfront.net\/2mCEi8cf\/brand\/logo_ZRWjOy.png",
        "name":"ChurchSuite Developers",
        "favicon_16":"https:\/\/d2oqjddkfv895o.cloudfront.net\/2mCEi8cf\/brand\/emblem_7KJawf_16.png",
        "favicon_32":"https:\/\/d2oqjddkfv895o.cloudfront.net\/2mCEi8cf\/brand\/emblem_7KJawf_32.png",
        "favicon_64":"https:\/\/d2oqjddkfv895o.cloudfront.net\/2mCEi8cf\/brand\/emblem_7KJawf_64.png",
        "favicon_128":"https:\/\/d2oqjddkfv895o.cloudfront.net\/2mCEi8cf\/brand\/emblem_7KJawf_128.png",
        "favicon_152":"https:\/\/d2oqjddkfv895o.cloudfront.net\/2mCEi8cf\/brand\/emblem_7KJawf_152.png",
        "favicon_200":"https:\/\/d2oqjddkfv895o.cloudfront.net\/2mCEi8cf\/brand\/emblem_7KJawf_200.png",
        "favicon_512":"https:\/\/d2oqjddkfv895o.cloudfront.net\/2mCEi8cf\/brand\/emblem_7KJawf_512.png"
      }
    },
    {
      "id":34,
      "name":"City Outreach 620a1b08574dd",
      "colour":"#ff69b4",
      "status":"active",
      "brand_id":null,
      "ctime":"2022-02-14 09:04:08",
      "cuser":"import",
      "mtime":"2022-02-14 09:04:08",
      "muser":"import",
      "brand":{
        "brand_css":"https:\/\/d2oqjddkfv895o.cloudfront.net\/_brand\/300921\/4697c9.css",
        "color":"4697c9",
        "emblem":"https:\/\/d2oqjddkfv895o.cloudfront.net\/2mCEi8cf\/brand\/emblem_7KJawf_512.png",
        "logo":"https:\/\/d2oqjddkfv895o.cloudfront.net\/2mCEi8cf\/brand\/logo_ZRWjOy.png",
        "name":"ChurchSuite Developers",
        "favicon_16":"https:\/\/d2oqjddkfv895o.cloudfront.net\/2mCEi8cf\/brand\/emblem_7KJawf_16.png",
        "favicon_32":"https:\/\/d2oqjddkfv895o.cloudfront.net\/2mCEi8cf\/brand\/emblem_7KJawf_32.png",
        "favicon_64":"https:\/\/d2oqjddkfv895o.cloudfront.net\/2mCEi8cf\/brand\/emblem_7KJawf_64.png",
        "favicon_128":"https:\/\/d2oqjddkfv895o.cloudfront.net\/2mCEi8cf\/brand\/emblem_7KJawf_128.png",
        "favicon_152":"https:\/\/d2oqjddkfv895o.cloudfront.net\/2mCEi8cf\/brand\/emblem_7KJawf_152.png",
        "favicon_200":"https:\/\/d2oqjddkfv895o.cloudfront.net\/2mCEi8cf\/brand\/emblem_7KJawf_200.png",
        "favicon_512":"https:\/\/d2oqjddkfv895o.cloudfront.net\/2mCEi8cf\/brand\/emblem_7KJawf_512.png"
      }
    },
    {
      "id":35,
      "name":"City Outreach 620a1b147b277",
      "colour":"#ff69b4",
      "status":"active",
      "brand_id":null,
      "ctime":"2022-02-14 09:04:20",
      "cuser":"import",
      "mtime":"2022-02-14 09:04:20",
      "muser":"import",
      "brand":{
        "brand_css":"https:\/\/d2oqjddkfv895o.cloudfront.net\/_brand\/300921\/4697c9.css",
        "color":"4697c9",
        "emblem":"https:\/\/d2oqjddkfv895o.cloudfront.net\/2mCEi8cf\/brand\/emblem_7KJawf_512.png",
        "logo":"https:\/\/d2oqjddkfv895o.cloudfront.net\/2mCEi8cf\/brand\/logo_ZRWjOy.png",
        "name":"ChurchSuite Developers",
        "favicon_16":"https:\/\/d2oqjddkfv895o.cloudfront.net\/2mCEi8cf\/brand\/emblem_7KJawf_16.png",
        "favicon_32":"https:\/\/d2oqjddkfv895o.cloudfront.net\/2mCEi8cf\/brand\/emblem_7KJawf_32.png",
        "favicon_64":"https:\/\/d2oqjddkfv895o.cloudfront.net\/2mCEi8cf\/brand\/emblem_7KJawf_64.png",
        "favicon_128":"https:\/\/d2oqjddkfv895o.cloudfront.net\/2mCEi8cf\/brand\/emblem_7KJawf_128.png",
        "favicon_152":"https:\/\/d2oqjddkfv895o.cloudfront.net\/2mCEi8cf\/brand\/emblem_7KJawf_152.png",
        "favicon_200":"https:\/\/d2oqjddkfv895o.cloudfront.net\/2mCEi8cf\/brand\/emblem_7KJawf_200.png",
        "favicon_512":"https:\/\/d2oqjddkfv895o.cloudfront.net\/2mCEi8cf\/brand\/emblem_7KJawf_512.png"
      }
    },
    {
      "id":36,
      "name":"City Outreach 620a1b353fcd1",
      "colour":"#ff69b4",
      "status":"active",
      "brand_id":null,
      "ctime":"2022-02-14 09:04:53",
      "cuser":"import",
      "mtime":"2022-02-14 09:04:53",
      "muser":"import",
      "brand":{
        "brand_css":"https:\/\/d2oqjddkfv895o.cloudfront.net\/_brand\/300921\/4697c9.css",
        "color":"4697c9",
        "emblem":"https:\/\/d2oqjddkfv895o.cloudfront.net\/2mCEi8cf\/brand\/emblem_7KJawf_512.png",
        "logo":"https:\/\/d2oqjddkfv895o.cloudfront.net\/2mCEi8cf\/brand\/logo_ZRWjOy.png",
        "name":"ChurchSuite Developers",
        "favicon_16":"https:\/\/d2oqjddkfv895o.cloudfront.net\/2mCEi8cf\/brand\/emblem_7KJawf_16.png",
        "favicon_32":"https:\/\/d2oqjddkfv895o.cloudfront.net\/2mCEi8cf\/brand\/emblem_7KJawf_32.png",
        "favicon_64":"https:\/\/d2oqjddkfv895o.cloudfront.net\/2mCEi8cf\/brand\/emblem_7KJawf_64.png",
        "favicon_128":"https:\/\/d2oqjddkfv895o.cloudfront.net\/2mCEi8cf\/brand\/emblem_7KJawf_128.png",
        "favicon_152":"https:\/\/d2oqjddkfv895o.cloudfront.net\/2mCEi8cf\/brand\/emblem_7KJawf_152.png",
        "favicon_200":"https:\/\/d2oqjddkfv895o.cloudfront.net\/2mCEi8cf\/brand\/emblem_7KJawf_200.png",
        "favicon_512":"https:\/\/d2oqjddkfv895o.cloudfront.net\/2mCEi8cf\/brand\/emblem_7KJawf_512.png"
      }
    },
    {
      "id":37,
      "name":"City Outreach 620a1b4471d71",
      "colour":"#ff69b4",
      "status":"active",
      "brand_id":null,
      "ctime":"2022-02-14 09:05:08",
      "cuser":"import",
      "mtime":"2022-02-14 09:05:08",
      "muser":"import",
      "brand":{
        "brand_css":"https:\/\/d2oqjddkfv895o.cloudfront.net\/_brand\/300921\/4697c9.css",
        "color":"4697c9",
        "emblem":"https:\/\/d2oqjddkfv895o.cloudfront.net\/2mCEi8cf\/brand\/emblem_7KJawf_512.png",
        "logo":"https:\/\/d2oqjddkfv895o.cloudfront.net\/2mCEi8cf\/brand\/logo_ZRWjOy.png",
        "name":"ChurchSuite Developers",
        "favicon_16":"https:\/\/d2oqjddkfv895o.cloudfront.net\/2mCEi8cf\/brand\/emblem_7KJawf_16.png",
        "favicon_32":"https:\/\/d2oqjddkfv895o.cloudfront.net\/2mCEi8cf\/brand\/emblem_7KJawf_32.png",
        "favicon_64":"https:\/\/d2oqjddkfv895o.cloudfront.net\/2mCEi8cf\/brand\/emblem_7KJawf_64.png",
        "favicon_128":"https:\/\/d2oqjddkfv895o.cloudfront.net\/2mCEi8cf\/brand\/emblem_7KJawf_128.png",
        "favicon_152":"https:\/\/d2oqjddkfv895o.cloudfront.net\/2mCEi8cf\/brand\/emblem_7KJawf_152.png",
        "favicon_200":"https:\/\/d2oqjddkfv895o.cloudfront.net\/2mCEi8cf\/brand\/emblem_7KJawf_200.png",
        "favicon_512":"https:\/\/d2oqjddkfv895o.cloudfront.net\/2mCEi8cf\/brand\/emblem_7KJawf_512.png"
      }
    },
    {
      "id":38,
      "name":"City Outreach 620a1b75ea829",
      "colour":"#ff69b4",
      "status":"active",
      "brand_id":null,
      "ctime":"2022-02-14 09:05:58",
      "cuser":"import",
      "mtime":"2022-02-14 09:05:58",
      "muser":"import",
      "brand":{
        "brand_css":"https:\/\/d2oqjddkfv895o.cloudfront.net\/_brand\/300921\/4697c9.css",
        "color":"4697c9",
        "emblem":"https:\/\/d2oqjddkfv895o.cloudfront.net\/2mCEi8cf\/brand\/emblem_7KJawf_512.png",
        "logo":"https:\/\/d2oqjddkfv895o.cloudfront.net\/2mCEi8cf\/brand\/logo_ZRWjOy.png",
        "name":"ChurchSuite Developers",
        "favicon_16":"https:\/\/d2oqjddkfv895o.cloudfront.net\/2mCEi8cf\/brand\/emblem_7KJawf_16.png",
        "favicon_32":"https:\/\/d2oqjddkfv895o.cloudfront.net\/2mCEi8cf\/brand\/emblem_7KJawf_32.png",
        "favicon_64":"https:\/\/d2oqjddkfv895o.cloudfront.net\/2mCEi8cf\/brand\/emblem_7KJawf_64.png",
        "favicon_128":"https:\/\/d2oqjddkfv895o.cloudfront.net\/2mCEi8cf\/brand\/emblem_7KJawf_128.png",
        "favicon_152":"https:\/\/d2oqjddkfv895o.cloudfront.net\/2mCEi8cf\/brand\/emblem_7KJawf_152.png",
        "favicon_200":"https:\/\/d2oqjddkfv895o.cloudfront.net\/2mCEi8cf\/brand\/emblem_7KJawf_200.png",
        "favicon_512":"https:\/\/d2oqjddkfv895o.cloudfront.net\/2mCEi8cf\/brand\/emblem_7KJawf_512.png"
      }
    },
    {
      "id":28,
      "name":"Conferences",
      "colour":"#0a4fa8",
      "status":"archived",
      "brand_id":2,
      "ctime":"2019-08-21 15:40:13",
      "cuser":"lindsey",
      "mtime":"2020-07-22 15:31:52",
      "muser":"nathaniel",
      "brand":{
        "brand_css":"https:\/\/d2oqjddkfv895o.cloudfront.net\/_brand\/300921\/6e4b99.css",
        "color":"#6e4b99",
        "email_font":"Open Sans",
        "email_footer":"Kings Hope Church\u2020Easter Park\u2020Lenton Lane\u2020Nottingham\u2020NG7 2PX\r\nRegistered charity number 0123456789",
        "emblem":"https:\/\/d2oqjddkfv895o.cloudfront.net\/2mCEi8cf\/brand\/emblem_NInjyM_512.png",
        "logo":"https:\/\/d2oqjddkfv895o.cloudfront.net\/2mCEi8cf\/brand\/logo_dow5lF.png",
        "name":"Kings Hope Conferencing",
        "favicon_16":"https:\/\/d2oqjddkfv895o.cloudfront.net\/2mCEi8cf\/brand\/emblem_NInjyM_16.png",
        "favicon_32":"https:\/\/d2oqjddkfv895o.cloudfront.net\/2mCEi8cf\/brand\/emblem_NInjyM_32.png",
        "favicon_64":"https:\/\/d2oqjddkfv895o.cloudfront.net\/2mCEi8cf\/brand\/emblem_NInjyM_64.png",
        "favicon_128":"https:\/\/d2oqjddkfv895o.cloudfront.net\/2mCEi8cf\/brand\/emblem_NInjyM_128.png",
        "favicon_152":"https:\/\/d2oqjddkfv895o.cloudfront.net\/2mCEi8cf\/brand\/emblem_NInjyM_152.png",
        "favicon_200":"https:\/\/d2oqjddkfv895o.cloudfront.net\/2mCEi8cf\/brand\/emblem_NInjyM_200.png",
        "favicon_512":"https:\/\/d2oqjddkfv895o.cloudfront.net\/2mCEi8cf\/brand\/emblem_NInjyM_512.png"
      }
    },
    {
      "id":31,
      "name":"Derby Events",
      "colour":"#4697c9",
      "status":"active",
      "brand_id":12,
      "ctime":"2021-04-26 17:25:44",
      "cuser":"churchsuite",
      "mtime":"2021-04-26 17:25:44",
      "muser":"churchsuite",
      "brand":{
        "brand_css":"https:\/\/d2oqjddkfv895o.cloudfront.net\/_brand\/300921\/4697c9.css",
        "color":"#4697c9",
        "email_font":"Open Sans",
        "email_footer":"Kings Hope Church\u2020Easter Park\u2020Lenton Lane\u2020Nottingham\u2020NG7 2PX\r\nRegistered charity number 0123456789",
        "emblem":"https:\/\/d2oqjddkfv895o.cloudfront.net\/2mCEi8cf\/brand\/emblem_aMlHX0_512.png",
        "logo":"https:\/\/d2oqjddkfv895o.cloudfront.net\/2mCEi8cf\/brand\/logo_zu60Pq.png",
        "name":"Site: Derby",
        "favicon_16":"https:\/\/d2oqjddkfv895o.cloudfront.net\/2mCEi8cf\/brand\/emblem_aMlHX0_16.png",
        "favicon_32":"https:\/\/d2oqjddkfv895o.cloudfront.net\/2mCEi8cf\/brand\/emblem_aMlHX0_32.png",
        "favicon_64":"https:\/\/d2oqjddkfv895o.cloudfront.net\/2mCEi8cf\/brand\/emblem_aMlHX0_64.png",
        "favicon_128":"https:\/\/d2oqjddkfv895o.cloudfront.net\/2mCEi8cf\/brand\/emblem_aMlHX0_128.png",
        "favicon_152":"https:\/\/d2oqjddkfv895o.cloudfront.net\/2mCEi8cf\/brand\/emblem_aMlHX0_152.png",
        "favicon_200":"https:\/\/d2oqjddkfv895o.cloudfront.net\/2mCEi8cf\/brand\/emblem_aMlHX0_200.png",
        "favicon_512":"https:\/\/d2oqjddkfv895o.cloudfront.net\/2mCEi8cf\/brand\/emblem_aMlHX0_512.png"
      }
    },
    {
      "id":22,
      "name":"Discipleship",
      "colour":"#4697c9",
      "status":"active",
      "brand_id":10,
      "ctime":null,
      "cuser":null,
      "mtime":"2021-10-05 12:16:50",
      "muser":"churchsuite",
      "brand":{
        "brand_css":"https:\/\/d2oqjddkfv895o.cloudfront.net\/_brand\/300921\/4697c9.css",
        "color":"#4697c9",
        "email_font":"Open Sans",
        "email_footer":"Kings Hope Church\u2020Easter Park\u2020Lenton Lane\u2020Nottingham\u2020NG7 2PX\r\nRegistered charity number 0123456789",
        "emblem":"https:\/\/d2oqjddkfv895o.cloudfront.net\/2mCEi8cf\/brand\/emblem_GBxlv9_512.png",
        "logo":"https:\/\/d2oqjddkfv895o.cloudfront.net\/2mCEi8cf\/brand\/logo_lxGYQw.png",
        "name":"Site: Nottingham",
        "favicon_16":"https:\/\/d2oqjddkfv895o.cloudfront.net\/2mCEi8cf\/brand\/emblem_GBxlv9_16.png",
        "favicon_32":"https:\/\/d2oqjddkfv895o.cloudfront.net\/2mCEi8cf\/brand\/emblem_GBxlv9_32.png",
        "favicon_64":"https:\/\/d2oqjddkfv895o.cloudfront.net\/2mCEi8cf\/brand\/emblem_GBxlv9_64.png",
        "favicon_128":"https:\/\/d2oqjddkfv895o.cloudfront.net\/2mCEi8cf\/brand\/emblem_GBxlv9_128.png",
        "favicon_152":"https:\/\/d2oqjddkfv895o.cloudfront.net\/2mCEi8cf\/brand\/emblem_GBxlv9_152.png",
        "favicon_200":"https:\/\/d2oqjddkfv895o.cloudfront.net\/2mCEi8cf\/brand\/emblem_GBxlv9_200.png",
        "favicon_512":"https:\/\/d2oqjddkfv895o.cloudfront.net\/2mCEi8cf\/brand\/emblem_GBxlv9_512.png"
      }
    },
    {
      "id":24,
      "name":"External Events",
      "colour":"#6e4b99",
      "status":"active",
      "brand_id":2,
      "ctime":null,
      "cuser":null,
      "mtime":"2021-04-26 17:24:16",
      "muser":"churchsuite",
      "brand":{
        "brand_css":"https:\/\/d2oqjddkfv895o.cloudfront.net\/_brand\/300921\/6e4b99.css",
        "color":"#6e4b99",
        "email_font":"Open Sans",
        "email_footer":"Kings Hope Church\u2020Easter Park\u2020Lenton Lane\u2020Nottingham\u2020NG7 2PX\r\nRegistered charity number 0123456789",
        "emblem":"https:\/\/d2oqjddkfv895o.cloudfront.net\/2mCEi8cf\/brand\/emblem_NInjyM_512.png",
        "logo":"https:\/\/d2oqjddkfv895o.cloudfront.net\/2mCEi8cf\/brand\/logo_dow5lF.png",
        "name":"Kings Hope Conferencing",
        "favicon_16":"https:\/\/d2oqjddkfv895o.cloudfront.net\/2mCEi8cf\/brand\/emblem_NInjyM_16.png",
        "favicon_32":"https:\/\/d2oqjddkfv895o.cloudfront.net\/2mCEi8cf\/brand\/emblem_NInjyM_32.png",
        "favicon_64":"https:\/\/d2oqjddkfv895o.cloudfront.net\/2mCEi8cf\/brand\/emblem_NInjyM_64.png",
        "favicon_128":"https:\/\/d2oqjddkfv895o.cloudfront.net\/2mCEi8cf\/brand\/emblem_NInjyM_128.png",
        "favicon_152":"https:\/\/d2oqjddkfv895o.cloudfront.net\/2mCEi8cf\/brand\/emblem_NInjyM_152.png",
        "favicon_200":"https:\/\/d2oqjddkfv895o.cloudfront.net\/2mCEi8cf\/brand\/emblem_NInjyM_200.png",
        "favicon_512":"https:\/\/d2oqjddkfv895o.cloudfront.net\/2mCEi8cf\/brand\/emblem_NInjyM_512.png"
      }
    },
    {
      "id":21,
      "name":"Family",
      "colour":"#4697c9",
      "status":"active",
      "brand_id":null,
      "ctime":null,
      "cuser":null,
      "mtime":"2021-04-26 17:26:32",
      "muser":"churchsuite",
      "brand":{
        "brand_css":"https:\/\/d2oqjddkfv895o.cloudfront.net\/_brand\/300921\/4697c9.css",
        "color":"4697c9",
        "emblem":"https:\/\/d2oqjddkfv895o.cloudfront.net\/2mCEi8cf\/brand\/emblem_7KJawf_512.png",
        "logo":"https:\/\/d2oqjddkfv895o.cloudfront.net\/2mCEi8cf\/brand\/logo_ZRWjOy.png",
        "name":"ChurchSuite Developers",
        "favicon_16":"https:\/\/d2oqjddkfv895o.cloudfront.net\/2mCEi8cf\/brand\/emblem_7KJawf_16.png",
        "favicon_32":"https:\/\/d2oqjddkfv895o.cloudfront.net\/2mCEi8cf\/brand\/emblem_7KJawf_32.png",
        "favicon_64":"https:\/\/d2oqjddkfv895o.cloudfront.net\/2mCEi8cf\/brand\/emblem_7KJawf_64.png",
        "favicon_128":"https:\/\/d2oqjddkfv895o.cloudfront.net\/2mCEi8cf\/brand\/emblem_7KJawf_128.png",
        "favicon_152":"https:\/\/d2oqjddkfv895o.cloudfront.net\/2mCEi8cf\/brand\/emblem_7KJawf_152.png",
        "favicon_200":"https:\/\/d2oqjddkfv895o.cloudfront.net\/2mCEi8cf\/brand\/emblem_7KJawf_200.png",
        "favicon_512":"https:\/\/d2oqjddkfv895o.cloudfront.net\/2mCEi8cf\/brand\/emblem_7KJawf_512.png"
      }
    },
    {
      "id":5,
      "name":"Kids",
      "colour":"#0e7b35",
      "status":"active",
      "brand_id":null,
      "ctime":null,
      "cuser":null,
      "mtime":"2021-04-26 17:26:38",
      "muser":"churchsuite",
      "brand":{
        "brand_css":"https:\/\/d2oqjddkfv895o.cloudfront.net\/_brand\/300921\/4697c9.css",
        "color":"4697c9",
        "emblem":"https:\/\/d2oqjddkfv895o.cloudfront.net\/2mCEi8cf\/brand\/emblem_7KJawf_512.png",
        "logo":"https:\/\/d2oqjddkfv895o.cloudfront.net\/2mCEi8cf\/brand\/logo_ZRWjOy.png",
        "name":"ChurchSuite Developers",
        "favicon_16":"https:\/\/d2oqjddkfv895o.cloudfront.net\/2mCEi8cf\/brand\/emblem_7KJawf_16.png",
        "favicon_32":"https:\/\/d2oqjddkfv895o.cloudfront.net\/2mCEi8cf\/brand\/emblem_7KJawf_32.png",
        "favicon_64":"https:\/\/d2oqjddkfv895o.cloudfront.net\/2mCEi8cf\/brand\/emblem_7KJawf_64.png",
        "favicon_128":"https:\/\/d2oqjddkfv895o.cloudfront.net\/2mCEi8cf\/brand\/emblem_7KJawf_128.png",
        "favicon_152":"https:\/\/d2oqjddkfv895o.cloudfront.net\/2mCEi8cf\/brand\/emblem_7KJawf_152.png",
        "favicon_200":"https:\/\/d2oqjddkfv895o.cloudfront.net\/2mCEi8cf\/brand\/emblem_7KJawf_200.png",
        "favicon_512":"https:\/\/d2oqjddkfv895o.cloudfront.net\/2mCEi8cf\/brand\/emblem_7KJawf_512.png"
      }
    },
    {
      "id":29,
      "name":"Large events and conferences",
      "colour":"#7950f2",
      "status":"archived",
      "brand_id":2,
      "ctime":"2020-07-22 16:09:38",
      "cuser":"nathaniel",
      "mtime":"2020-07-23 09:11:10",
      "muser":"nathaniel",
      "brand":{
        "brand_css":"https:\/\/d2oqjddkfv895o.cloudfront.net\/_brand\/300921\/6e4b99.css",
        "color":"#6e4b99",
        "email_font":"Open Sans",
        "email_footer":"Kings Hope Church\u2020Easter Park\u2020Lenton Lane\u2020Nottingham\u2020NG7 2PX\r\nRegistered charity number 0123456789",
        "emblem":"https:\/\/d2oqjddkfv895o.cloudfront.net\/2mCEi8cf\/brand\/emblem_NInjyM_512.png",
        "logo":"https:\/\/d2oqjddkfv895o.cloudfront.net\/2mCEi8cf\/brand\/logo_dow5lF.png",
        "name":"Kings Hope Conferencing",
        "favicon_16":"https:\/\/d2oqjddkfv895o.cloudfront.net\/2mCEi8cf\/brand\/emblem_NInjyM_16.png",
        "favicon_32":"https:\/\/d2oqjddkfv895o.cloudfront.net\/2mCEi8cf\/brand\/emblem_NInjyM_32.png",
        "favicon_64":"https:\/\/d2oqjddkfv895o.cloudfront.net\/2mCEi8cf\/brand\/emblem_NInjyM_64.png",
        "favicon_128":"https:\/\/d2oqjddkfv895o.cloudfront.net\/2mCEi8cf\/brand\/emblem_NInjyM_128.png",
        "favicon_152":"https:\/\/d2oqjddkfv895o.cloudfront.net\/2mCEi8cf\/brand\/emblem_NInjyM_152.png",
        "favicon_200":"https:\/\/d2oqjddkfv895o.cloudfront.net\/2mCEi8cf\/brand\/emblem_NInjyM_200.png",
        "favicon_512":"https:\/\/d2oqjddkfv895o.cloudfront.net\/2mCEi8cf\/brand\/emblem_NInjyM_512.png"
      }
    },
    {
      "id":30,
      "name":"Leicester Events",
      "colour":"#4697c9",
      "status":"active",
      "brand_id":11,
      "ctime":"2021-04-26 17:25:10",
      "cuser":"churchsuite",
      "mtime":"2021-04-26 17:25:32",
      "muser":"churchsuite",
      "brand":{
        "brand_css":"https:\/\/d2oqjddkfv895o.cloudfront.net\/_brand\/300921\/4697c9.css",
        "color":"#4697c9",
        "email_font":"Open Sans",
        "email_footer":"Kings Hope Church\u2020Easter Park\u2020Lenton Lane\u2020Nottingham\u2020NG7 2PX\r\nRegistered charity number 0123456789",
        "emblem":"https:\/\/d2oqjddkfv895o.cloudfront.net\/2mCEi8cf\/brand\/emblem_9OLibR_512.png",
        "logo":"https:\/\/d2oqjddkfv895o.cloudfront.net\/2mCEi8cf\/brand\/logo_3dq5C8.png",
        "name":"Site: Leicester",
        "favicon_16":"https:\/\/d2oqjddkfv895o.cloudfront.net\/2mCEi8cf\/brand\/emblem_9OLibR_16.png",
        "favicon_32":"https:\/\/d2oqjddkfv895o.cloudfront.net\/2mCEi8cf\/brand\/emblem_9OLibR_32.png",
        "favicon_64":"https:\/\/d2oqjddkfv895o.cloudfront.net\/2mCEi8cf\/brand\/emblem_9OLibR_64.png",
        "favicon_128":"https:\/\/d2oqjddkfv895o.cloudfront.net\/2mCEi8cf\/brand\/emblem_9OLibR_128.png",
        "favicon_152":"https:\/\/d2oqjddkfv895o.cloudfront.net\/2mCEi8cf\/brand\/emblem_9OLibR_152.png",
        "favicon_200":"https:\/\/d2oqjddkfv895o.cloudfront.net\/2mCEi8cf\/brand\/emblem_9OLibR_200.png",
        "favicon_512":"https:\/\/d2oqjddkfv895o.cloudfront.net\/2mCEi8cf\/brand\/emblem_9OLibR_512.png"
      }
    },
    {
      "id":17,
      "name":"Nottingham Events",
      "colour":"#4697c9",
      "status":"active",
      "brand_id":10,
      "ctime":"2016-03-17 14:24:06",
      "cuser":"paul",
      "mtime":"2021-04-26 17:24:57",
      "muser":"churchsuite",
      "brand":{
        "brand_css":"https:\/\/d2oqjddkfv895o.cloudfront.net\/_brand\/300921\/4697c9.css",
        "color":"#4697c9",
        "email_font":"Open Sans",
        "email_footer":"Kings Hope Church\u2020Easter Park\u2020Lenton Lane\u2020Nottingham\u2020NG7 2PX\r\nRegistered charity number 0123456789",
        "emblem":"https:\/\/d2oqjddkfv895o.cloudfront.net\/2mCEi8cf\/brand\/emblem_GBxlv9_512.png",
        "logo":"https:\/\/d2oqjddkfv895o.cloudfront.net\/2mCEi8cf\/brand\/logo_lxGYQw.png",
        "name":"Site: Nottingham",
        "favicon_16":"https:\/\/d2oqjddkfv895o.cloudfront.net\/2mCEi8cf\/brand\/emblem_GBxlv9_16.png",
        "favicon_32":"https:\/\/d2oqjddkfv895o.cloudfront.net\/2mCEi8cf\/brand\/emblem_GBxlv9_32.png",
        "favicon_64":"https:\/\/d2oqjddkfv895o.cloudfront.net\/2mCEi8cf\/brand\/emblem_GBxlv9_64.png",
        "favicon_128":"https:\/\/d2oqjddkfv895o.cloudfront.net\/2mCEi8cf\/brand\/emblem_GBxlv9_128.png",
        "favicon_152":"https:\/\/d2oqjddkfv895o.cloudfront.net\/2mCEi8cf\/brand\/emblem_GBxlv9_152.png",
        "favicon_200":"https:\/\/d2oqjddkfv895o.cloudfront.net\/2mCEi8cf\/brand\/emblem_GBxlv9_200.png",
        "favicon_512":"https:\/\/d2oqjddkfv895o.cloudfront.net\/2mCEi8cf\/brand\/emblem_GBxlv9_512.png"
      }
    },
    {
      "id":23,
      "name":"Outreach",
      "colour":"#4697c9",
      "status":"active",
      "brand_id":null,
      "ctime":null,
      "cuser":null,
      "mtime":"2021-07-16 18:19:08",
      "muser":"Paul",
      "brand":{
        "brand_css":"https:\/\/d2oqjddkfv895o.cloudfront.net\/_brand\/300921\/4697c9.css",
        "color":"4697c9",
        "emblem":"https:\/\/d2oqjddkfv895o.cloudfront.net\/2mCEi8cf\/brand\/emblem_7KJawf_512.png",
        "logo":"https:\/\/d2oqjddkfv895o.cloudfront.net\/2mCEi8cf\/brand\/logo_ZRWjOy.png",
        "name":"ChurchSuite Developers",
        "favicon_16":"https:\/\/d2oqjddkfv895o.cloudfront.net\/2mCEi8cf\/brand\/emblem_7KJawf_16.png",
        "favicon_32":"https:\/\/d2oqjddkfv895o.cloudfront.net\/2mCEi8cf\/brand\/emblem_7KJawf_32.png",
        "favicon_64":"https:\/\/d2oqjddkfv895o.cloudfront.net\/2mCEi8cf\/brand\/emblem_7KJawf_64.png",
        "favicon_128":"https:\/\/d2oqjddkfv895o.cloudfront.net\/2mCEi8cf\/brand\/emblem_7KJawf_128.png",
        "favicon_152":"https:\/\/d2oqjddkfv895o.cloudfront.net\/2mCEi8cf\/brand\/emblem_7KJawf_152.png",
        "favicon_200":"https:\/\/d2oqjddkfv895o.cloudfront.net\/2mCEi8cf\/brand\/emblem_7KJawf_200.png",
        "favicon_512":"https:\/\/d2oqjddkfv895o.cloudfront.net\/2mCEi8cf\/brand\/emblem_7KJawf_512.png"
      }
    },
    {
      "id":1,
      "name":"Prayer",
      "colour":"#4697c9",
      "status":"active",
      "brand_id":null,
      "ctime":null,
      "cuser":null,
      "mtime":"2021-04-26 17:26:52",
      "muser":"churchsuite",
      "brand":{
        "brand_css":"https:\/\/d2oqjddkfv895o.cloudfront.net\/_brand\/300921\/4697c9.css",
        "color":"4697c9",
        "emblem":"https:\/\/d2oqjddkfv895o.cloudfront.net\/2mCEi8cf\/brand\/emblem_7KJawf_512.png",
        "logo":"https:\/\/d2oqjddkfv895o.cloudfront.net\/2mCEi8cf\/brand\/logo_ZRWjOy.png",
        "name":"ChurchSuite Developers",
        "favicon_16":"https:\/\/d2oqjddkfv895o.cloudfront.net\/2mCEi8cf\/brand\/emblem_7KJawf_16.png",
        "favicon_32":"https:\/\/d2oqjddkfv895o.cloudfront.net\/2mCEi8cf\/brand\/emblem_7KJawf_32.png",
        "favicon_64":"https:\/\/d2oqjddkfv895o.cloudfront.net\/2mCEi8cf\/brand\/emblem_7KJawf_64.png",
        "favicon_128":"https:\/\/d2oqjddkfv895o.cloudfront.net\/2mCEi8cf\/brand\/emblem_7KJawf_128.png",
        "favicon_152":"https:\/\/d2oqjddkfv895o.cloudfront.net\/2mCEi8cf\/brand\/emblem_7KJawf_152.png",
        "favicon_200":"https:\/\/d2oqjddkfv895o.cloudfront.net\/2mCEi8cf\/brand\/emblem_7KJawf_200.png",
        "favicon_512":"https:\/\/d2oqjddkfv895o.cloudfront.net\/2mCEi8cf\/brand\/emblem_7KJawf_512.png"
      }
    },
    {
      "id":25,
      "name":"School Holidays",
      "colour":"#fd7e14",
      "status":"active",
      "brand_id":null,
      "ctime":"2017-08-07 16:53:16",
      "cuser":"paul",
      "mtime":"2017-08-07 16:53:16",
      "muser":"paul",
      "brand":{
        "brand_css":"https:\/\/d2oqjddkfv895o.cloudfront.net\/_brand\/300921\/4697c9.css",
        "color":"4697c9",
        "emblem":"https:\/\/d2oqjddkfv895o.cloudfront.net\/2mCEi8cf\/brand\/emblem_7KJawf_512.png",
        "logo":"https:\/\/d2oqjddkfv895o.cloudfront.net\/2mCEi8cf\/brand\/logo_ZRWjOy.png",
        "name":"ChurchSuite Developers",
        "favicon_16":"https:\/\/d2oqjddkfv895o.cloudfront.net\/2mCEi8cf\/brand\/emblem_7KJawf_16.png",
        "favicon_32":"https:\/\/d2oqjddkfv895o.cloudfront.net\/2mCEi8cf\/brand\/emblem_7KJawf_32.png",
        "favicon_64":"https:\/\/d2oqjddkfv895o.cloudfront.net\/2mCEi8cf\/brand\/emblem_7KJawf_64.png",
        "favicon_128":"https:\/\/d2oqjddkfv895o.cloudfront.net\/2mCEi8cf\/brand\/emblem_7KJawf_128.png",
        "favicon_152":"https:\/\/d2oqjddkfv895o.cloudfront.net\/2mCEi8cf\/brand\/emblem_7KJawf_152.png",
        "favicon_200":"https:\/\/d2oqjddkfv895o.cloudfront.net\/2mCEi8cf\/brand\/emblem_7KJawf_200.png",
        "favicon_512":"https:\/\/d2oqjddkfv895o.cloudfront.net\/2mCEi8cf\/brand\/emblem_7KJawf_512.png"
      }
    },
    {
      "id":27,
      "name":"Small Groups",
      "colour":"#4697c9",
      "status":"active",
      "brand_id":null,
      "ctime":"2017-08-30 15:06:15",
      "cuser":"gavin",
      "mtime":"2021-04-26 17:26:59",
      "muser":"churchsuite",
      "brand":{
        "brand_css":"https:\/\/d2oqjddkfv895o.cloudfront.net\/_brand\/300921\/4697c9.css",
        "color":"4697c9",
        "emblem":"https:\/\/d2oqjddkfv895o.cloudfront.net\/2mCEi8cf\/brand\/emblem_7KJawf_512.png",
        "logo":"https:\/\/d2oqjddkfv895o.cloudfront.net\/2mCEi8cf\/brand\/logo_ZRWjOy.png",
        "name":"ChurchSuite Developers",
        "favicon_16":"https:\/\/d2oqjddkfv895o.cloudfront.net\/2mCEi8cf\/brand\/emblem_7KJawf_16.png",
        "favicon_32":"https:\/\/d2oqjddkfv895o.cloudfront.net\/2mCEi8cf\/brand\/emblem_7KJawf_32.png",
        "favicon_64":"https:\/\/d2oqjddkfv895o.cloudfront.net\/2mCEi8cf\/brand\/emblem_7KJawf_64.png",
        "favicon_128":"https:\/\/d2oqjddkfv895o.cloudfront.net\/2mCEi8cf\/brand\/emblem_7KJawf_128.png",
        "favicon_152":"https:\/\/d2oqjddkfv895o.cloudfront.net\/2mCEi8cf\/brand\/emblem_7KJawf_152.png",
        "favicon_200":"https:\/\/d2oqjddkfv895o.cloudfront.net\/2mCEi8cf\/brand\/emblem_7KJawf_200.png",
        "favicon_512":"https:\/\/d2oqjddkfv895o.cloudfront.net\/2mCEi8cf\/brand\/emblem_7KJawf_512.png"
      }
    },
    {
      "id":2,
      "name":"Sunday Services",
      "colour":"#4697c9",
      "status":"active",
      "brand_id":null,
      "ctime":null,
      "cuser":null,
      "mtime":"2021-04-26 17:22:04",
      "muser":"churchsuite",
      "brand":{
        "brand_css":"https:\/\/d2oqjddkfv895o.cloudfront.net\/_brand\/300921\/4697c9.css",
        "color":"4697c9",
        "emblem":"https:\/\/d2oqjddkfv895o.cloudfront.net\/2mCEi8cf\/brand\/emblem_7KJawf_512.png",
        "logo":"https:\/\/d2oqjddkfv895o.cloudfront.net\/2mCEi8cf\/brand\/logo_ZRWjOy.png",
        "name":"ChurchSuite Developers",
        "favicon_16":"https:\/\/d2oqjddkfv895o.cloudfront.net\/2mCEi8cf\/brand\/emblem_7KJawf_16.png",
        "favicon_32":"https:\/\/d2oqjddkfv895o.cloudfront.net\/2mCEi8cf\/brand\/emblem_7KJawf_32.png",
        "favicon_64":"https:\/\/d2oqjddkfv895o.cloudfront.net\/2mCEi8cf\/brand\/emblem_7KJawf_64.png",
        "favicon_128":"https:\/\/d2oqjddkfv895o.cloudfront.net\/2mCEi8cf\/brand\/emblem_7KJawf_128.png",
        "favicon_152":"https:\/\/d2oqjddkfv895o.cloudfront.net\/2mCEi8cf\/brand\/emblem_7KJawf_152.png",
        "favicon_200":"https:\/\/d2oqjddkfv895o.cloudfront.net\/2mCEi8cf\/brand\/emblem_7KJawf_200.png",
        "favicon_512":"https:\/\/d2oqjddkfv895o.cloudfront.net\/2mCEi8cf\/brand\/emblem_7KJawf_512.png"
      }
    },
    {
      "id":6,
      "name":"Youth",
      "colour":"#c94746",
      "status":"active",
      "brand_id":7,
      "ctime":null,
      "cuser":null,
      "mtime":"2021-04-26 17:27:28",
      "muser":"churchsuite",
      "brand":{
        "brand_css":"https:\/\/d2oqjddkfv895o.cloudfront.net\/_brand\/300921\/c94746.css",
        "color":"#c94746",
        "email_font":"Open Sans",
        "email_footer":"Kings Hope Church\u2020Easter Park\u2020Lenton Lane\u2020Nottingham\u2020NG7 2PX\r\nRegistered charity number 0123456789",
        "emblem":"https:\/\/d2oqjddkfv895o.cloudfront.net\/2mCEi8cf\/brand\/emblem_6ofm0k_512.png",
        "logo":"https:\/\/d2oqjddkfv895o.cloudfront.net\/2mCEi8cf\/brand\/logo_wj5YIG.png",
        "name":"Kings Hope Youth",
        "favicon_16":"https:\/\/d2oqjddkfv895o.cloudfront.net\/2mCEi8cf\/brand\/emblem_6ofm0k_16.png",
        "favicon_32":"https:\/\/d2oqjddkfv895o.cloudfront.net\/2mCEi8cf\/brand\/emblem_6ofm0k_32.png",
        "favicon_64":"https:\/\/d2oqjddkfv895o.cloudfront.net\/2mCEi8cf\/brand\/emblem_6ofm0k_64.png",
        "favicon_128":"https:\/\/d2oqjddkfv895o.cloudfront.net\/2mCEi8cf\/brand\/emblem_6ofm0k_128.png",
        "favicon_152":"https:\/\/d2oqjddkfv895o.cloudfront.net\/2mCEi8cf\/brand\/emblem_6ofm0k_152.png",
        "favicon_200":"https:\/\/d2oqjddkfv895o.cloudfront.net\/2mCEi8cf\/brand\/emblem_6ofm0k_200.png",
        "favicon_512":"https:\/\/d2oqjddkfv895o.cloudfront.net\/2mCEi8cf\/brand\/emblem_6ofm0k_512.png"
      }
    }
  ]
}
```
