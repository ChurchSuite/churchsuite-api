# Account

[Home](https://github.com/ChurchSuite/churchsuite-api)

The following core endpoints are available for retrieving data for the API user:

## Get profile

* `GET /v1/profile` will return the details regarding an account's global contact information

```json
{
  "name":"ChurchSuite Developers",
  "timezone":"Europe\/London",
  "currency":"GBP",
  "language":"en-gb",
  "give2_keyword":"KHC",
  "first_day_of_week":"1",
  "data_protection_title":"Privacy Notice",
  "data_protection_body":"",
  "data_protection_help":"",
  "email_font":"Open Sans",
  "email_footer":"Kings Hope Church",
  "email_template":"plain",
  "email_open_tracking":true,
  "billing_address":{
    "id":null,
    "line1":"1 Broadway",
    "line2":"Lace Market",
    "line3":null,
    "city":"Nottingham",
    "county":"Nottinghamshire",
    "postcode":"NG1 1PR",
    "country":"GB",
    "latitude":52.9421262260486,
    "longitude":-1.17162785403717
  },
  "billing_region":"ENG",
  "billing_contact":{
    "first_name":"Nathaniel",
    "last_name":"Alsop",
    "telephone":"0115 824 2300",
    "email":"support@churchsuite.com"
  },
  "account_contact":{
    "first_name":"Nathaniel",
    "last_name":"Alsop",
    "telephone":"0115 824 2300",
    "email":"nathaniel@churchsuite.com"
  },
  "data_protection_contact":{
    "first_name":"Data",
    "last_name":"Protection",
    "telephone":"0115 824 2300",
    "email":"datacontroller@kingshope.church"
  },
  "ctime":"2022-04-08 10:58:42",
  "cuser":"churchsuite",
  "mtime":"2022-09-13 10:14:50",
  "muser":"Ant"
}
```


## Get user

* `GET /v1/whoami` will return data on the user accessing the API

```json
{
  "username":"churchsuite",
  "contact_id":null,
  "name":"ChurchSuite Support",
  "email":"support@churchsuite.com",
  "type":"admin",
  "modules":{
    "addressbook":{
      "id":"addressbook",
      "name":"Address Book",
      "permission_use":true,
      "permission_manage":true,
      "permission_connect":true
    },
    "children":{
      "id":"children",
      "name":"Children",
      "permission_use":true,
      "permission_manage":true,
      "permission_connect":true
    },
    "attendance":{
      "id":"attendance",
      "name":"Attendance",
      "permission_use":true,
      "permission_manage":true,
      "permission_connect":true
    },
    "calendar":{
      "id":"calendar",
      "name":"Calendar",
      "permission_use":true,
      "permission_manage":true,
      "permission_connect":true
    },
    "smallgroups":{
      "id":"smallgroups",
      "name":"Small Groups",
      "permission_use":true,
      "permission_manage":true,
      "permission_connect":true
    },
    "rotas":{
      "id":"rotas",
      "name":"Rotas",
      "permission_use":true,
      "permission_manage":true,
      "permission_connect":true
    },
    "giving":{
      "id":"giving",
      "name":"Giving",
      "permission_use":true,
      "permission_manage":true,
      "permission_connect":true
    },
    "bookings":{
      "id":"bookings",
      "name":"Bookings",
      "permission_use":true,
      "permission_manage":true,
      "permission_connect":true
    }
  },
  "images":[
    
  ],
  "sites":{
    10:{
      "id":10,
      "name":"East Site"
    },
    1:{
      "id":1,
      "name":"Main Site"
    },
    7:{
      "id":7,
      "name":"South Site"
    },
    9:{
      "id":9,
      "name":"West Site"
    }
  }
}
```
