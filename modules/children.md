# Children

[Home](https://github.com/ChurchApp/churchapp-api)

The Children module manages all children and youth within ChurchApp. The following endpoints are available:

## List/search children

* `GET /v1/children/children will return contacts ordered alphabetically
* `GET /v1/children/children?q=sarah` will return contacts whose Name, Address, Email, Telephone, Mobile or Parent Name contains "sarah"
* `GET /v1/children/children?page=2 will return the second page of contacts
* `GET /v1/children/children?page=2&per_page=5 will return the second page of contacts, with each page limited to 5 results

```json
{
  "pagination":{
    "no_results":67,
    "page":1,
    "per_page":2
  },
  "children":[
    {
      "id":"67",
      "contact_id":"141",
      "name":"Alexander, Emma",
      "first_name":"Emma",
      "last_name":"Alexander",
      "sex":"f",
      "date_of_birth":"2014-01-08",
      "mobile":false,
      "email":"",
      "telephone":"0115 786 4001",
      "location":{
        "address":"",
        "latitude":null,
        "longitude":null
      },
      "consent":{
        "internal":"0",
        "external":"0"
      },
      "school":"",
      "medical":"",
      "medical_short":"",
      "special_needs":"",
      "doctor_details":"",
      "images":[
        
      ]
    },
    {
      "id":"59",
      "contact_id":"112",
      "name":"Baker, Amelia",
      "first_name":"Amelia",
      "last_name":"Baker",
      "sex":"f",
      "date_of_birth":"2003-08-07",
      "mobile":"0886 775 2234",
      "email":"",
      "telephone":"",
      "location":{
        "address":"",
        "latitude":null,
        "longitude":null
      },
      "consent":{
        "internal":"0",
        "external":"0"
      },
      "school":"Camberwick Green Secondary School",
      "medical":"",
      "medical_short":"",
      "special_needs":"",
      "doctor_details":"",
      "images":[
        
      ]
    }
  ]
}
```


## Get a child

* `GET /v1/children/child/1` will return data for a specific child

```json
{
  "id":"1",
  "contact_id":"2",
  "name":"Wright, Micah",
  "first_name":"Micah",
  "last_name":"Wright",
  "sex":"m",
  "date_of_birth":"2007-05-28",
  "mobile":false,
  "email":"",
  "telephone":"01062 438 661",
  "location":{
    "address":"24 Frederick Crescent, Wollaton, NG5 3DW",
    "latitude":null,
    "longitude":null
  },
  "consent":{
    "internal":"0",
    "external":"0"
  },
  "school":"Southam St James Primary School",
  "medical":null,
  "medical_short":null,
  "special_needs":null,
  "doctor_details":"Netherfield Medical Centre, 2a Forester Street, Netherfield, Nottingham, NG42NJ",
  "images":[
    
  ]
}
```

This will return one of the following HTTP codes:

* `200` child data returned
* `400` some of the data passed through was not valid, e.g. invalid URL
* `404` child does not exist

## Create a new child

* `POST /v1/children/child` will create a new child in the Address Book

```json
{
  "first_name":"Joe",
  "last_name":"Bloggs",
  "email":"joe@bloggs.com",
  "sex":"m",
  "date_of_birth":"2010-09-21"
}
```

This will return one of the following HTTP codes:

* `201` child created
* `400` some of the data passed through was not valid

This `POST` method returns output in the following format:

```json
{
  "id":"83",
  "contact_id":null,
  "name":"Bloggs, Joe",
  "first_name":"Joe",
  "last_name":"Bloggs",
  "sex":"m",
  "date_of_birth":"2010-09-21",
  "mobile":false,
  "email":"joe@bloggs.com",
  "telephone":"",
  "location":{
    "address":"",
    "latitude":null,
    "longitude":null
  },
  "consent":{
    "internal":"0",
    "external":"0"
  },
  "school":null,
  "medical":null,
  "medical_short":null,
  "special_needs":null,
  "doctor_details":null,
  "images":[
    
  ]
}
```

## Update an existing child's details

* `PUT /v1/children/child/1` will update the details of an existing child in the database

```json
{
  "first_name":"Jane",
  "last_name":"Bloggs",
  "email":"jane.bloggs@gmail.com",
  "sex":"f"
}
```

This will return one of the following HTTP codes:

* `200` child updated
* `400` some of the data passed through was not valid
* `404` child specified to update does not exist

This `PUT` method returns output in the following format:

```json
{
  "id":"83",
  "contact_id":null,
  "name":"Bloggs, Jane",
  "first_name":"Jane",
  "last_name":"Bloggs",
  "sex":"f",
  "date_of_birth":"2010-09-21",
  "mobile":false,
  "email":"jane.bloggs@gmail.com",
  "telephone":"",
  "location":{
    "address":"",
    "latitude":null,
    "longitude":null
  },
  "consent":{
    "internal":"0",
    "external":"0"
  },
  "school":null,
  "medical":null,
  "medical_short":null,
  "special_needs":null,
  "doctor_details":null,
  "images":[
    
  ]
}
```


## Delete a child

* `DELETE /v1/children/child/1` will attempt to delete the specified child

```json

```

This will return one of the following HTTP codes:

* `200` child deleted
* `404` child specified to delete does not exist
 

## List child gatherings

* `GET /v1/children/gatherings` will return data for all child gatherings

```json
{
  "gatherings":[
    {
      "id":"3",
      "name":"DK Groups",
      "groups":[
        {
          "id":"10",
          "name":"Junior",
          "gathering_id":"3",
          "checkin_labels":"1",
          "checkin_capacity":null,
          "checkin_ratio":null
        },
        {
          "id":"9",
          "name":"Senior",
          "gathering_id":"3",
          "checkin_labels":"1",
          "checkin_capacity":"0",
          "checkin_ratio":"0"
        }
      ]
    },
    {
      "id":"1",
      "name":"Sundays",
      "groups":[
        {
          "id":"1",
          "name":"Babies",
          "gathering_id":"1",
          "checkin_labels":"1",
          "checkin_capacity":"10",
          "checkin_ratio":"0"
        },
        {
          "id":"2",
          "name":"Tots",
          "gathering_id":"1",
          "checkin_labels":"1",
          "checkin_capacity":"10",
          "checkin_ratio":"0"
        },
        {
          "id":"3",
          "name":"Impact",
          "gathering_id":"1",
          "checkin_labels":"1",
          "checkin_capacity":"10",
          "checkin_ratio":"0"
        },
        {
          "id":"4",
          "name":"Fusion",
          "gathering_id":"1",
          "checkin_labels":"1",
          "checkin_capacity":"10",
          "checkin_ratio":"0"
        },
        {
          "id":"5",
          "name":"Cohesion",
          "gathering_id":"1",
          "checkin_labels":"1",
          "checkin_capacity":"10",
          "checkin_ratio":"0"
        },
        {
          "id":"11",
          "name":"Adult",
          "gathering_id":"1",
          "checkin_labels":"1",
          "checkin_capacity":"0",
          "checkin_ratio":"0"
        }
      ]
    }
  ]
}
```

## Get a child gathering

* `GET /v1/children/gathering/1` will return data for a specific child gathering

```json
{
  "id":"1",
  "name":"Sundays",
  "groups":[
    {
      "id":"1",
      "name":"Babies",
      "gathering_id":"1",
      "checkin_labels":"1",
      "checkin_capacity":"10",
      "checkin_ratio":"0"
    },
    {
      "id":"2",
      "name":"Tots",
      "gathering_id":"1",
      "checkin_labels":"1",
      "checkin_capacity":"10",
      "checkin_ratio":"0"
    },
    {
      "id":"3",
      "name":"Impact",
      "gathering_id":"1",
      "checkin_labels":"1",
      "checkin_capacity":"10",
      "checkin_ratio":"0"
    },
    {
      "id":"4",
      "name":"Fusion",
      "gathering_id":"1",
      "checkin_labels":"1",
      "checkin_capacity":"10",
      "checkin_ratio":"0"
    },
    {
      "id":"5",
      "name":"Cohesion",
      "gathering_id":"1",
      "checkin_labels":"1",
      "checkin_capacity":"10",
      "checkin_ratio":"0"
    },
    {
      "id":"11",
      "name":"Adult",
      "gathering_id":"1",
      "checkin_labels":"1",
      "checkin_capacity":"0",
      "checkin_ratio":"0"
    }
  ]
}
```

This will return one of the following HTTP codes:

* `200` gathering data returned
* `400` some of the data passed through was not valid, e.g. invalid URL
* `404` gathering does not exist

## Get a child group

* `GET /v1/children/group/1` will return data for a specific child group

```json
{
  "id":"1",
  "name":"Babies",
  "gathering_id":"1",
  "checkin_labels":"1",
  "checkin_capacity":"10",
  "checkin_ratio":"0"
}
```

This will return one of the following HTTP codes:

* `200` group data returned
* `400` some of the data passed through was not valid, e.g. invalid URL
* `404` group does not exist

## Get the attendance data for a child group

* `GET /v1/children/group/1/attendance` will return data for the attendance of a specific child group

```json
{
  "2014-07-17":{
    "0":null,
    "1":"58",
    "total":2
  },
  "2014-07-18":{
    "0":null,
    "1":"58",
    "total":2
  },
  "2014-07-21":{
    "0":"58",
    "total":1
  },
  "2014-07-22":{
    "0":"58",
    "total":1
  },
  "2014-07-29":{
    "0":null,
    "total":1
  },
  "2014-08-08":{
    "0":null,
    "1":null,
    "total":2
  },
  "2014-08-11":{
    "0":null,
    "total":1
  },
  "2014-08-26":{
    "0":null,
    "total":1
  },
  "2014-09-03":{
    "0":null,
    "total":1
  },
  "2014-09-23":{
    "0":"60",
    "1":"66",
    "2":"67",
    "3":"68",
    "total":4
  },
  "2014-10-02":{
    "0":null,
    "1":null,
    "2":"67",
    "total":3
  },
  "2014-10-03":{
    "0":null,
    "1":null,
    "2":null,
    "3":null,
    "total":4
  }
}
```

This will return one of the following HTTP codes:

* `200` group attendance data returned
* `400` some of the data passed through was not valid, e.g. invalid URL
* `404` group does not exist

## Get children in a child group

* `GET /v1/children/group/1/children` will return data for the children in a specific child group

```json
{
  "children":[
    {
      "id":"67",
      "contact_id":"141",
      "name":"Alexander, Emma",
      "first_name":"Emma",
      "last_name":"Alexander",
      "sex":"f",
      "date_of_birth":"2014-01-08",
      "mobile":false,
      "email":"",
      "telephone":"0115 786 4001",
      "location":{
        "address":"",
        "latitude":null,
        "longitude":null
      },
      "consent":{
        "internal":"0",
        "external":"0"
      },
      "school":"",
      "medical":"",
      "medical_short":"",
      "special_needs":"",
      "doctor_details":"",
      "images":[
        
      ]
    },
    {
      "id":"66",
      "contact_id":"65",
      "name":"Marshall, Peter",
      "first_name":"Peter",
      "last_name":"Marshall",
      "sex":"m",
      "date_of_birth":"2014-05-01",
      "mobile":false,
      "email":"",
      "telephone":"01459 409 330",
      "location":{
        "address":"",
        "latitude":null,
        "longitude":null
      },
      "consent":{
        "internal":"0",
        "external":"0"
      },
      "school":"",
      "medical":"",
      "medical_short":"",
      "special_needs":"",
      "doctor_details":"",
      "images":[
        
      ]
    }
  ]
}
```

This will return one of the following HTTP codes:

* `200` group children data returned
* `400` some of the data passed through was not valid, e.g. invalid URL
* `404` group does not exist
