# Calendar

[Home](https://github.com/ChurchApp/churchapp-api)

The Calendar module manages all events, HR and event sign up within ChurchApp. The following endpoints are available:

## List/search events

* `GET /v1/calendar/events` will return future events
* `GET /v1/calendar/events?date_start=2013-01-01&date_end=2013-01-31` will return events between 1st January 2013 and 31st January 2013

```json
{
  "pagination":{
    "no_results":4,
    "page":1,
    "per_page":50
  },
  "events":[
    {
      "id":"455",
      "name":"Pre-service Prayer Meeting",
      "datetime_start":"2013-10-07 10:00:00",
      "datetime_end":"2013-10-07 10:30:00",
      "category":{
        "id":"1",
        "name":"Prayer Meetings",
        "color":"#ab207d"
      },
      "description":"Our pre-service prayer meetings before the Sunday AM service.",
      "location":[
        
      ],
      "images":[
        
      ],
      "public_visible":"0",
      "signup_options":{
        "notification":"0",
        "embed":{
          "visible":"1",
          "enabled":"0"
        },
        "public":{
          "visible":"1",
          "enabled":"0"
        },
        "sms":{
          "enabled":"0"
        }
      }
    },
    {
      "id":"262",
      "name":"Sunday AM Service",
      "datetime_start":"2013-10-07 10:30:00",
      "datetime_end":"2013-10-07 12:00:00",
      "category":{
        "id":"2",
        "name":"Sunday Services",
        "color":"#7d20ab"
      },
      "description":"Our weekly AM service. It is always exciting when the whole family gets together on a Sunday morning to explore, meet and connect with God. We always start out with refreshments and a coffee, which sets the tone for our gathering - warm, welcoming and friendly. If you're considering coming for the first time - do come along, we love having visitors and will do our best to make you feel welcome!",
      "location":{
        "address":"NG8 3RG",
        "name":"Life Centre",
        "latitude":"52.9627660678353",
        "longitude":"-1.19917827183772"
      },
      "images":[
        
      ],
      "public_visible":"1",
      "signup_options":{
        "notification":"0",
        "embed":{
          "visible":"1",
          "enabled":"0"
        },
        "public":{
          "visible":"1",
          "enabled":"0"
        },
        "sms":{
          "enabled":"0"
        }
      }
    },
    {
      "id":"1108",
      "name":"Sunday School",
      "datetime_start":"2013-10-07 10:00:00",
      "datetime_end":"2013-10-07 11:00:00",
      "category":{
        "id":"5",
        "name":"Kid's Events",
        "color":"#2020ab"
      },
      "description":"Our weekly Sunday School for children aged 11 and under.",
      "location":[
        
      ],
      "images":[
        
      ],
      "public_visible":"0",
      "signup_options":{
        "notification":"0",
        "embed":{
          "visible":"1",
          "enabled":"0"
        },
        "public":{
          "visible":"1",
          "enabled":"0"
        },
        "sms":{
          "enabled":"0"
        }
      }
    },
    {
      "id":"1422",
      "name":"Staff Team Meeting",
      "datetime_start":"2013-10-08 10:00:00",
      "datetime_end":"2013-10-08 11:30:00",
      "category":{
        "id":"3",
        "name":"Misc Events",
        "color":"#207dab"
      },
      "description":"Weekly all-staff meeting.",
      "location":[
        
      ],
      "images":[
        
      ],
      "public_visible":"0",
      "signup_options":{
        "notification":"0",
        "embed":{
          "visible":"1",
          "enabled":"0"
        },
        "public":{
          "visible":"1",
          "enabled":"0"
        },
        "sms":{
          "enabled":"0"
        }
      }
    }
  ]
}
```


## Get event

* `GET /v1/calendar/event/:id` will return data for a specific event

```json
{
  "id":"3110",
  "name":"Alpha Taster Night",
  "datetime_start":"2014-02-08 00:00:00",
  "datetime_end":"2014-02-08 23:59:59",
  "category":{
    "id":"3",
    "name":"Misc Events",
    "color":"#207dab"
  },
  "description":"Bring your friends to this entertaining night which acts as a taster for the Alpha course. There will be inspiring faith stories mixed in with an evening of canap\u00e9s, cocktails and comedy. Tickets \u00a35 on sale at Sunday services, or you can reserve tickets on the church website. Starts at 8pm. For more information contact John Bodily.",
  "location":{
    "address":"NG7 2PX",
    "name":"The Warehouse",
    "latitude":"52.9421274",
    "longitude":"-1.1716278"
  },
  "images":[
    
  ],
  "public_visible":"1",
  "signup_options":{
    "notification":"0",
    "embed":{
      "visible":"1",
      "enabled":"0"
    },
    "public":{
      "visible":"1",
      "enabled":"0"
    },
    "sms":{
      "enabled":"0"
    }
  }
}
```

This will return one of the following HTTP codes:

* `200` event data returned
* `400` some of the data passed through was not valid, e.g. invalid URL
* `404` event does not exist

## Get event signups

* `GET /v1/calendar/event/:id/signups` will return the data regarding people who have signed up for the event

```json
{
  "event_id":"3110",
  "signups":[
    {
      "id":"36",
      "person":{
        "type":"contact",
        "id":"94",
        "first_name":"Emma",
        "last_name":"Bradley",
        "mobile":"07336 197 473",
        "email":"thebradleys@gmail.com"
      },
      "notes":"Ref: cg8e5Qak\r\n=====\r\nDietary requirements: Vegetarian\r\n-----\r\nHeard about Alpha: From a friend",
      "method":"API",
      "ctime":"2013-10-28 13:00:58"
    },
    {
      "id":"28",
      "person":{
        "type":"contact",
        "id":"112",
        "first_name":"George",
        "last_name":"Baker",
        "mobile":"07824 842 761",
        "email":"george@thebakers.com"
      },
      "notes":"",
      "method":"API",
      "ctime":"2013-10-28 12:40:27"
    },
    {
      "id":"37",
      "person":{
        "type":"guest",
        "id":null,
        "first_name":"Alison",
        "last_name":"Philips",
        "mobile":"07970 123 456",
        "email":"alison.philips@gmail.com"
      },
      "notes":"Ref: Rgk8D3No\n=====\nDietary requirements: Vegetarian\n-----\nHeard about event: Saw billboard in town",
      "method":"API",
      "ctime":"2013-10-28 14:42:07"
    }
  ]
}
```

This will return one of the following HTTP codes:

* `200` signup data returned
* `404` event does not exist

## Add one or more signups to an event

* `POST /v1/calendar/event/:id/signups will create a new contact in the Address Book

```json
{
  "event_id":"3110",
  "signups":[
    {
      "id":"41",
      "person":{
        "type":"guest",
        "id":null,
        "first_name":"Mark",
        "last_name":"Davies",
        "mobile":null,
        "email":"mark.davies@gmail.com"
      },
      "notes":"Ref: CDRqHHX6\n=====\nDietary requirements: Vegetarian\n-----\nHeard about event: From a friend",
      "method":"API",
      "ctime":"2013-10-28 14:43:01"
    }
  ]
}
```

This will return one of the following HTTP codes:

* `201` signup(s) created
* `400` some of the data passed through was not valid

## Delete event signup

* `DELETE /v1/calendar/event/:id/signup/:id` will remove the specified signup from the event

```json

```

This will return one of the following HTTP codes:

* `200` signup deleted
* `404` signup is not linked to the specified event - check error message for details
