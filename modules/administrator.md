# Administrator

[Home](https://github.com/ChurchApp/churchapp-api)

The Administrator module is concerned with global account settings, such as module options and the account profile information.

## Get module

* `GET /v1/administrator/module/addressbook` will return the details regarding the Address Book module
* `GET /v1/administrator/module/attendance` will return the details regarding the Attendance module
* `GET /v1/administrator/module/calendar` will return the details regarding the Calendar module
* `GET /v1/administrator/module/children` will return the details regarding the Children module
* `GET /v1/administrator/module/giving` will return the details regarding the Giving module
* `GET /v1/administrator/module/rotas` will return the details regarding the Rotas module
* `GET /v1/administrator/module/smallgroups` will return the details regarding the Small Groups module

```json
{
  "id":"addressbook",
  "name":"Address Book",
  "order":"1",
  "options":{
    "connect":null,
    "embed":null,
    "module":{
      "contact_title":"1",
      "contact_middle_name":"1",
      "contact_formal_name":"0",
      "contact_maiden_name":"1",
      "contact_address3":"0",
      "contact_work_telephone":"0",
      "contact_student_details":"1",
      "public_access":"1",
      "public_visible":"1",
      "public_address":"0",
      "public_mobile":"0",
      "public_telephone":"0",
      "public_email":"0",
      "labels_format":"labelprinter_Brother-205S"
    },
    "public":{
      "public_access":"1",
      "contact_search":"1",
      "welcome_message":"",
      "contact_edit_date_of_birth":"1",
      "contact_edit_job":"1",
      "contact_edit_employer":"0",
      "public_reminders":"0"
    }
  }
}
```


## Get profile

* `GET /v1/administrator/profile` will return the details regarding an account's global contact information

```json
{
  "id":"diffuse",
  "name":"Your Church",
  "billing":{
    "first_name":"Test",
    "last_name":"Person",
    "telephone":"0111 111 111",
    "email":"test@example.com",
    "address":"19 Test Road",
    "address2":"",
    "city":"Test City",
    "county":"",
    "postcode":"TE57 1NG",
    "country":"GB",
    "latitude":null,
    "longitude":null
  },
  "meeting":{
    "address":"19 Test Road",
    "address2":"",
    "city":"Test City",
    "county":"",
    "postcode":"TE57 1NG",
    "country":"GB",
    "latitude":null,
    "longitude":null
  }
}
```
