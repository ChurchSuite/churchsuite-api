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
      "id":"5",
      "reference":"5",
      "name":"Carlton",
      "date_start":"2008-04-09",
      "date_end":null,
      "frequency":"weekly",
      "day":"1",
      "time":"19:45",
      "location":{
        "address":"NG4 3AH",
        "latitude":"52.9655435137538",
        "longitude":"-1.0845412672821"
      },
      "description":"Join us on Monday evenings as we pursue together all that God has for us! Our prayer for our group would be the same as Paul's for the Ephesians - and since he put it so well!",
      "images":[
        
      ],
      "no_members":"14",
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
    },
    {
      "id":"3",
      "reference":"",
      "name":"Meadows",
      "date_start":"2010-06-16",
      "date_end":null,
      "frequency":"weekly",
      "day":"3",
      "time":"19:45",
      "location":{
        "address":"NG2 2EB",
        "latitude":"52.9394244750898",
        "longitude":"-1.14428534438493"
      },
      "description":"Our desire is to know God and pursue Him. We seek to encourage one another to fulfill our destiny in Him, as we live out our lives, believing that it is how we live, how we serve and how we love that will have the greatest impact in advancing the Kingdom.",
      "images":[
        
      ],
      "no_members":"10",
      "public_visible":"1"
    },
    {
      "id":"8",
      "reference":"6",
      "name":"West Bridgford",
      "date_start":"2011-09-01",
      "date_end":null,
      "frequency":"weekly",
      "day":"3",
      "time":"19:45",
      "location":{
        "address":"NG2 5GS",
        "latitude":"52.9327143896931",
        "longitude":"-1.12400541402906"
      },
      "description":"As a group our focus is heavily on community and worship, as such we spend about 45 minutes at the start of the evening in community with the next 45 minutes dedicated to worship.\r\n\r\nWe alternate the final half hour between praying for each other and bible teaching.",
      "images":[
        
      ],
      "no_members":"11",
      "public_visible":"1"
    },
    {
      "id":"7",
      "reference":"7",
      "name":"West Bridgford 2",
      "date_start":"2012-02-09",
      "date_end":null,
      "frequency":"weekly",
      "day":"3",
      "time":"19:45",
      "location":{
        "address":"NG2 5GS",
        "latitude":"52.9327143896931",
        "longitude":"-1.12400541402906"
      },
      "description":"We're excited to chase after all God has for us - we believe He has an incredible plan for each and every one of our lives, and we're determined to see that worked out! Our lifegroup is a place for everyone to feel welcome and valued.",
      "images":[
        
      ],
      "no_members":"14",
      "public_visible":"1"
    }
  ]
}
```
