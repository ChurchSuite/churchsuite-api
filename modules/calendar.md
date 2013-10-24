# Calendar

[Home](https://github.com/ChurchApp/churchapp-api)

The Calendar module manages all events, HR and event sign up within ChurchApp. The following endpoints are available:

## Get events

* `GET /v1/calendar/events` will return future events
* `GET /v1/calendar/events?date_start=2013-01-01&date_end=2013-01-31` will return events between 1st January 2013 and 31st January 2013

```json
{
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

* `GET /v1/calendar/event/1` will return data for a specific event

```json
{
  "id":"1",
  "name":"Sunday Service",
  "date":"2011-07-17",
  "time_start":"10:30:00",
  "time_end":"13:00:00",
  "category":{
    "id":"1",
    "name":"Prayer Meetings",
    "color":"#ab207d"
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
