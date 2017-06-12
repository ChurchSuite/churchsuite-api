# Calendar

[Home](https://github.com/ChurchSuite/churchsuite-api)

The Calendar module manages all events, HR and event sign up within ChurchSuite. The following endpoints are available:

## List/search events

* `GET /v1/calendar/events` will return future events
* `GET /v1/calendar/events?date_start=2013-01-01&date_end=2013-01-31` will return events between 1st January 2013 and 31st January 2013
* `GET /v1/calendar/events?group_by_sequence=true` will return future events but will only show the next event in each sequence for sequence events
* `GET /v1/calendar/events?categories=1,2,5` will return events within categories 1, 2 or 5.

```json
{
  "pagination":{
    "no_results":201,
    "page":1,
    "per_page":2
  },
  "events":[
    {
      "id":"838",
      "name":"Mums & Tots",
      "datetime_start":"2014-08-08 11:00:00",
      "datetime_end":"2014-08-08 14:00:00",
      "category":{
        "id":"5",
        "name":"Kid's Events",
        "color":"#2020ab"
      },
      "description":"Mothers and Toddlers group that meets in the school hall each week. Come and join us for a morning of fun for your toddler and an opportunity to chat to other Mums (Dads are of course welcome too!)\r\n\r\nFor more information, please contact Fiona Brown.",
      "location":{
        "address":"NG7 2GU",
        "name":"School Hall",
        "latitude":"52.9479124853566",
        "longitude":"-1.1828878863056"
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
          "enabled":"0",
          "featured":"0"
        },
        "sms":{
          "enabled":"0"
        },
        "tickets":{
          "enabled":"",
          "url":"https:\/\/demo.churchsuite.co.uk\/events\/nro8mvlt"
        }
      }
    },
    {
      "id":"655",
      "name":"Worship Team Practice",
      "datetime_start":"2014-08-08 19:00:00",
      "datetime_end":"2014-08-08 21:00:00",
      "category":{
        "id":"4",
        "name":"Worship Team Events",
        "color":"#20ab7d"
      },
      "description":"Weekly worship team practice in the main venue.",
      "location":[
        
      ],
      "images":[
        
      ],
      "public_visible":"0",
      "signup_options":{
        "notification":"0",
        "embed":{
          "visible":"0",
          "enabled":"0"
        },
        "public":{
          "visible":"0",
          "enabled":"0",
          "featured":"0"
        },
        "sms":{
          "enabled":"0"
        },
        "tickets":{
          "enabled":"",
          "url":"https:\/\/demo.churchsuite.co.uk\/events\/hvmdux8k"
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
      "enabled":"0",
      "featured":"0"
    },
    "sms":{
      "enabled":"0"
    },
    "tickets":{
      "enabled":"1",
      "url":"https:\/\/demo.churchsuite.co.uk\/events\/wdczidyt"
    }
  }
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
  "event_id":"3110",
  "tickets":[
    {
      "id":"2",
      "name":"Adult entry",
      "description":"Includes canap\u00e9s, cocktails and comedy.",
      "datetime_start":null,
      "datetime_end":null,
      "price":"5.00",
      "currency":{
        "code":"GBP",
        "symbol":"\u00a3"
      },
      "quantity":null,
      "no_sold":"1",
      "active":"1",
      "order":"0"
    }
  ]
}
```

This will return one of the following HTTP codes:

* `200` ticket data returned
* `404` event does not exist

## Get event signups

* `GET /v1/calendar/event/:id/signups` will return the data regarding people who have signed up for the event

```json
{
  "event_id":"3110",
  "signups":[
    {
      "id":"49",
      "person":{
        "type":"guest",
        "id":null,
        "first_name":"Mark",
        "last_name":"Davies",
        "mobile":"",
        "email":"mark.davies@gmail.com",
        "notes":"",
        "ticket":{
          "id":"2",
          "name":"Adult entry",
          "description":null,
          "datetime_start":null,
          "datetime_end":null,
          "price":"5.00",
          "currency":{
            "code":"GBP",
            "symbol":"\u00a3"
          },
          "quantity":null,
          "no_sold":null,
          "active":null,
          "order":null
        }
      },
      "method":"API",
      "ctime":"2014-02-05 16:55:52"
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
      "notes":"Ref: 87d1sZ2U\n=====\nDietary requirements: Vegetarian\n-----\nHeard about event: From a friend",
      "ticket":{
        "id":1,
      }
    }
  ]
}
```

This will return one of the following HTTP codes:

* `201` signup(s) created
* `400` some of the data passed through was not valid

This `POST` method will return output in the following format:

```json
{
  "event_id":"2",
  "signups":[
    {
      "id":"59",
      "identifier":"OX8VPUim",
      "person":{
        "type":"guest",
        "id":null,
        "first_name":"Mark",
        "last_name":"Davies",
        "sex":null,
        "mobile":"",
        "email":"mark.davies@gmail.com",
        "notes":"Ref: 87d1sZ2U ===== Dietary requirements: Vegetarian ----- Heard about event: From a friend",
        "ticket":{
          "id":"1",
          "name":"Early Bird",
          "description":null,
          "paid":"0.00",
          "paid_status":"unpaid",
          "price":"5.00",
          "currency":{
            "code":"GBP",
            "country":"GB",
            "symbol":"\u00a3"
          },
          "quantity":null,
          "no_sold":null,
          "active":null,
          "hidden":null,
          "order":null
        }
      },
      "method":"API",
      "ctime":"2016-11-08 13:02:57"
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

This `PUT` method will return output in the following format:

```json
{
  "id":"356",
  "person":{
    "type":"guest",
    "id":null,
    "first_name":"Marcus",
    "last_name":"Davies",
    "mobile":null,
    "email":"marcus.davies@gmail.com",
    "notes":"",
    "ticket":false
  },
  "notes":"",
  "method":"API",
  "ctime":"2014-10-14 15:52:08"
}
```

## Delete event signup

* `DELETE /v1/calendar/event/:id/signup/:id` will remove the specified signup from the event

```json

```

This will return one of the following HTTP codes:

* `200` signup deleted
* `404` signup is not linked to the specified event - check error message for details

## List categories

* `GET /v1/calendar/categories` will return categories ordered alphabetically

```json
{
  "pagination":{
    "no_results":6,
    "page":1,
    "per_page":6
  },
  "categories":[
    {
      "id":"17",
      "name":"Church Meetings",
      "description":"Weekly church meetings, includes Sunday and mid-week events such as prayer meeting, etc.",
      "colour":"#fa5252",
      "public_visible":"1"
    },
    {
      "id":"22",
      "name":"Discipleship Events",
      "description":"",
      "colour":"#40c057",
      "public_visible":"0"
    },
    {
      "id":"5",
      "name":"Kid's Events",
      "description":"Events run by our children's team.",
      "colour":"#4c6ef5",
      "public_visible":"0"
    },
    {
      "id":"4",
      "name":"Worship Events",
      "description":"Events related to the Your Church worship team.",
      "colour":"#15aabf",
      "public_visible":"0"
    },
    {
      "id":"6",
      "name":"Youth Events",
      "description":"Youth Events in the life of Your Church.",
      "colour":"#fab005",
      "public_visible":"0"
    }
  ]
}
```
