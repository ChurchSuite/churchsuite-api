# Calendar

[Home](https://github.com/ChurchApp/churchapp-api)

The Calendar module manages all events, HR and event sign up within ChurchApp. The following endpoints are available:

## List/search events

* `GET /v1/calendar/events` will return future events
* `GET /v1/calendar/events?date_start=2013-01-01&date_end=2013-01-31` will return events between 1st January 2013 and 31st January 2013

```json
{
  "pagination":{
    "no_results":3,
    "page":1,
    "per_page":50
  },
  "events":[
    {
      "id":"1474",
      "name":"Staff Team Meeting",
      "date":"2013-10-07",
      "time_start":"10:00:00",
      "time_end":"11:30:00",
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
        "public":{
          "enabled":"0"
        },
        "sms":{
          "enabled":"0"
        }
      }
    },
    {
      "id":"157",
      "name":"Early Morning Prayer",
      "date":"2013-10-08",
      "time_start":"07:30:00",
      "time_end":"08:30:00",
      "category":{
        "id":"1",
        "name":"Prayer Meetings",
        "color":"#ab207d"
      },
      "description":"",
      "location":[
        
      ],
      "images":{
        "original_16":"https:\/\/demo.churchapp.co.uk\/files\/calendar\/events\/rw\/13_16.jpg",
        "original_100":"https:\/\/demo.churchapp.co.uk\/files\/calendar\/events\/rw\/13_100.jpg",
        "original_500":"https:\/\/demo.churchapp.co.uk\/files\/calendar\/events\/rw\/13_500.jpg",
        "square_16":"https:\/\/demo.churchapp.co.uk\/files\/calendar\/events\/sf\/13_16.jpg",
        "square_100":"https:\/\/demo.churchapp.co.uk\/files\/calendar\/events\/sf\/13_100.jpg",
        "square_500":"https:\/\/demo.churchapp.co.uk\/files\/calendar\/events\/sf\/13_500.jpg"
      },
      "public_visible":"0",
      "signup_options":{
        "public":{
          "enabled":"0"
        },
        "sms":{
          "enabled":"0"
        }
      }
    },
    {
      "id":"1317",
      "name":"Tuesday Morning Kids Club",
      "date":"2013-10-08",
      "time_start":"09:00:00",
      "time_end":"11:00:00",
      "category":{
        "id":"5",
        "name":"Kid's Events",
        "color":"#2020ab"
      },
      "description":"Our weekly Tuesday AM kids club. Fun and games for your kids - and for you! A great time to connect with other parents and your children. Refreshments are provided. So come along to the Life Centre and enjoy! For more info, please get in touch with Fiona Brown.",
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
        "public":{
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
  "name":"Newcomers' Meal",
  "date":"2013-11-02",
  "time_start":"19:00:00",
  "time_end":"22:00:00",
  "category":{
    "id":"3",
    "name":"Misc Events",
    "color":"#207dab"
  },
  "description":"",
  "location":[
    
  ],
  "images":[
    
  ],
  "public_visible":"0",
  "signup_options":{
    "public":{
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
