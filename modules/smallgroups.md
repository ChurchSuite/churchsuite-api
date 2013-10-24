# Small Groups

[Home](https://github.com/ChurchApp/churchapp-api)

The Small Groups module is concerned with the management of groups of contacts, along with their attendance, and support the following endpoints:

## Get groups

* `GET /v1/smallgroups/groups`  will return all groups

```json
{
  "groups":[
    {
      "id":"2",
      "reference":"2",
      "name":"Beeston",
      "date_start":"2009-05-20",
      "date_end":null,
      "frequency":"weekly",
      "day":"3",
      "time":"19:45",
      "location":{
        "address":"NG9 2GU",
        "latitude":"52.9319152832031",
        "longitude":"-1.2050369977951"
      },
      "description":"Our aim is for everyone to feel welcome and part of the group. We want to meet with God and allow Him to impact us through our relationships so that we see His Kingdom come in our workplaces, in our homes and throughout our daily lives.",
      "images":[
        
      ],
      "no_members":"17",
      "public_visible":"1"
    },
    {
      "id":"4",
      "reference":"4",
      "name":"Gamston",
      "date_start":"2007-11-14",
      "date_end":null,
      "frequency":"fortnightly",
      "day":"3",
      "time":"19:45",
      "location":{
        "address":"NG2 6PQ",
        "latitude":"52.926987702",
        "longitude":"-1.101470465"
      },
      "description":"We are a really mixed group of people but our heart to love God is something we definitely have in common. We really enjoy spending time with each other and with God encouraging and supporting one another through the ups and downs of life.",
      "images":[
        
      ],
      "no_members":"17",
      "public_visible":"1"
    }
  ]
}
```
