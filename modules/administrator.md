# Administrator

[Home](https://github.com/ChurchSuite/churchsuite-api)

The Administrator module is concerned with global account settings, such as module options and the account profile information.

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
