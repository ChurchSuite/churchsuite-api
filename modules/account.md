# Account

[Home](https://github.com/ChurchSuite/churchsuite-api)

The following core endpoints are available for retrieving data for the API user:

## Get module

* `GET /v1/module/addressbook` will return the details regarding the Address Book module
* `GET /v1/module/attendance` will return the details regarding the Attendance module
* `GET /v1/module/calendar` will return the details regarding the Calendar module
* `GET /v1/module/children` will return the details regarding the Children module
* `GET /v1/module/giving` will return the details regarding the Giving module
* `GET /v1/module/rotas` will return the details regarding the Rotas module
* `GET /v1/module/smallgroups` will return the details regarding the Small Groups module

```json
{
  "id":"rotas",
  "name":"Rotas",
  "order":"6",
  "options":{
    "connect":"[]",
    "embed":"[]",
    "module":{
      "unavailability_enabled":1,
      "person_search":"all-sites"
    },
    "public":{
      "my_menu_rotas":"",
      "enable_all_rotas_view":1,
      "public_access":1,
      "public_rota_swap":0,
      "public_disable_swap":0,
      "public_rota_email_recipients":"rota"
    }
  }
}
```


## Get profile

* `GET /v1/profile` will return the details regarding an account's global contact information

```json
{
  "id":"demo",
  "name":"Kings Hope Church",
  "billing":{
    "first_name":"ChurchSuite",
    "last_name":"Support",
    "telephone":"0115 824 2300",
    "email":"support@churchsuite.com",
    "address":"Easter Park",
    "address2":"Lenton Lane",
    "city":"Nottingham",
    "county":"Notts",
    "postcode":"NG7 2PX",
    "region":"ENG",
    "country":"GB",
    "latitude":"52.9421262260486",
    "longitude":"-1.17162785403717"
  },
  "meeting":{
    "address":"Easter Park",
    "address2":"Lenton Lane",
    "city":"Nottingham",
    "county":"Notts",
    "postcode":"NG7 2PX",
    "country":null,
    "latitude":"52.9421262260486",
    "longitude":"-1.17162785403717"
  }
}
```


## Get user

* `GET /v1/whoami` will return data on the user accessing the API

```json
{
  "username":"churchsuite",
  "contact_id":null,
  "name":"ChurchSuite Support",
  "email":"support@churchsuite.co.uk",
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
    "10":{
      "id":"10",
      "name":"East Site"
    },
    "1":{
      "id":"1",
      "name":"Main Site"
    },
    "7":{
      "id":"7",
      "name":"South Site"
    },
    "9":{
      "id":"9",
      "name":"West Site"
    }
  }
}
```
