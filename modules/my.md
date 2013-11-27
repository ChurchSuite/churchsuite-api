# My

[Home](https://github.com/ChurchApp/churchapp-api)

The My section of the API allows data to be queried for a given contact after they have passed through the OAuth process. Any data passed back obeys the public visibility settings that can be set on a contact-by-contact basis. The following endpoints are available:

## Get a contact's details

* `GET /v1/my/details` will return the contact details for the logged in contact

```json
{
  "id":"7",
  "name":"Courtney, Gavin",
  "first_name":"Gavin",
  "middle_name":"",
  "last_name":"Courtney",
  "formal_name":"",
  "maiden_name":"",
  "sex":"m",
  "date_of_birth":"1982-08-03",
  "address":"125 Derby Road",
  "address2":"",
  "address3":null,
  "city":"Nottingham",
  "county":"",
  "postcode":"NG9 3LP",
  "country":"",
  "telephone":"0115 824 2300",
  "mobile":"07707 777 777",
  "email":"support@churchapp.co.uk",
  "job":"Managing Director",
  "employer":"ChurchApp",
  "images":{
    "original_16":"https:\/\/demo.churchapp.co.uk\/files\/addressbook\/contacts\/rw\/7_20_16.jpg",
    "original_100":"https:\/\/demo.churchapp.co.uk\/files\/addressbook\/contacts\/rw\/7_20_100.jpg",
    "original_500":"https:\/\/demo.churchapp.co.uk\/files\/addressbook\/contacts\/rw\/7_20_500.jpg",
    "square_16":"https:\/\/demo.churchapp.co.uk\/files\/addressbook\/contacts\/sf\/7_20_16.jpg",
    "square_100":"https:\/\/demo.churchapp.co.uk\/files\/addressbook\/contacts\/sf\/7_20_100.jpg",
    "square_500":"https:\/\/demo.churchapp.co.uk\/files\/addressbook\/contacts\/sf\/7_20_500.jpg"
  }
}
```

This will return one of the following HTTP codes:

* `200` contact data returned
* `400` some of the data passed through was not valid, e.g. invalid URL
* `404` contact does not exist



## List/search other publicly visible contacts

* `GET /v1/my/contacts` will return contacts ordered alphabetically
* `GET /v1/my/contacts?q=gavin` will return contacts whose Name, Address, Job, Email, Telephone or Mobile contains "gavin"

```json
{
  "pagination":{
    "no_results":2,
    "page":1,
    "per_page":50
  },
  "contacts":[
    {
      "id":"139",
      "name":"Address, Return",
      "first_name":"Return",
      "middle_name":null,
      "last_name":"Address",
      "formal_name":null,
      "maiden_name":null,
      "sex":"m",
      "date_of_birth":null,
      "address":"",
      "address2":"",
      "address3":"",
      "city":"",
      "county":"",
      "postcode":"",
      "country":"",
      "telephone":"",
      "mobile":"",
      "email":"",
      "job":"",
      "employer":null,
      "images":[
        
      ]
    },
    {
      "id":"7",
      "name":"Courtney, Gavin",
      "first_name":"Gavin",
      "middle_name":"",
      "last_name":"Courtney",
      "formal_name":"",
      "maiden_name":"",
      "sex":"m",
      "date_of_birth":"1982-08-03",
      "address":"",
      "address2":"",
      "address3":"",
      "city":"",
      "county":"",
      "postcode":"",
      "country":"",
      "telephone":"0115 824 2300",
      "mobile":"07707 777 777",
      "email":"support@churchapp.co.uk",
      "job":"Managing Director",
      "employer":null,
      "images":{
        "original_16":"https:\/\/demo.churchapp.co.uk\/files\/addressbook\/contacts\/rw\/7_20_16.jpg",
        "original_100":"https:\/\/demo.churchapp.co.uk\/files\/addressbook\/contacts\/rw\/7_20_100.jpg",
        "original_500":"https:\/\/demo.churchapp.co.uk\/files\/addressbook\/contacts\/rw\/7_20_500.jpg",
        "square_16":"https:\/\/demo.churchapp.co.uk\/files\/addressbook\/contacts\/sf\/7_20_16.jpg",
        "square_100":"https:\/\/demo.churchapp.co.uk\/files\/addressbook\/contacts\/sf\/7_20_100.jpg",
        "square_500":"https:\/\/demo.churchapp.co.uk\/files\/addressbook\/contacts\/sf\/7_20_500.jpg"
      }
    }
  ]
}
```

This will return one of the following HTTP codes:

* `200` contact data returned
* `400` some of the data passed through was not valid, e.g. invalid URL
* `404` contact does not exist



## Get contact's ChurchApp Public URL

* `GET /v1/my/churchapp_url will return a temporary URL that will log the user directly into ChurchApp Public

```json
{
  "url":"https:\/\/demo.churchapp.co.uk\/public\/passthrough\/nR5I1F2qBr1woBdKXucOM+vniUHtWJ1PFobvOVGetjLqNtnKR3iUq5g+1HZR8bTp"
}
```

This URL will change each time a contact logs in through an OAuth exchange and we strongly recommend immediately redirecting to this URL upon request, rather than saving to session data or similar.

This will return one of the following HTTP codes:

* `200` ChurchApp URL returned
