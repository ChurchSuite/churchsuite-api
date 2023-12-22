# Embed

[Home](https://github.com/ChurchSuite/churchsuite-api)

Our Embed Configurations allow you to place ready-made widgets into your website without the need to develop an integration with our API. Alongside this we have also made the JSON-equivalent feeds available so that you can use the data however you'd like. You do not need API access to use these features.

## Event List & Calendar Configurations

Calendar and event list iframes can be embedded using configurations. Details can be found here: [Support Article](https://support.churchsuite.com/article/640-embed-your-calendar-and-your-events-into-your-website)

## Calendar JSON feed

`https://{your_account_id}.churchsuite.com/embed/calendar/json`

The following URL parameters are accepted:

* `callback` If you are requesting the JSON feed from JS you will need to specify the callback function's name in order to get around the cross-domain restrictions on browsers. You do not need to provide this if you request the JSON from the server-side (i.e. in a PHP script). This is empty by default.
* `merge=sequence` Show all single events and the first upcoming event in a sequence.
* `merge=sequence_name` Show all single events and uniquely named sequence events. Where a sequenced event has the same name as another event in that sequence only the first upcoming event will be shown.
* `merge=signup_to_sequence` "Sign up to sequence" events will show where they are the next upcoming event matching the sequence AND name combination. Sequence events that do not have "Sign up to sequence" enabled will be displayed where they are the next upcoming event in the sequence OR have sign-up enabled.
* `merge=show_all` Do filter events using a merge strategy.
* `date_start=(yyyy-mm-dd)` Show events starting on or after a specific date.
* `date_end=(yyyy-mm-dd)` Show events ending on or before a specific date.
* `num_results=4` The number of events to show. If not given or 0 then all events are shown.
* `featured=(1|on|true|yes|0|off|false|no)` Filter events based on whether or not it is featured.
* `(category|category_id)=31` Show events in a specific category id.
* `(categories|category_ids)=(12|12,13,14)` Show events in specific category ids.
* `(categories[]|category_ids[])=12` Show events in specific category ids.
* `(site|site_id)=31` Show events in a specific site id.
* `(sites|site_ids)=(12|12,13,14)` Show events in specific site ids.
* `(sites[]|site_ids[])=12` Show events in specific site ids.
* `(event|event_id)=31` Show a specific event id.
* `(events|event_ids)=(12|12,13,14)` Show events in specific category ids.
* `(events[]|event_ids[])=12` Show specific event ids.
* `q=alpha` Show events which contain a string within its name.
* `embed_signup=(1|on|true|yes|0|off|false|no)` Filter events based on embed signup.
* `public_signup=(1|on|true|yes|0|off|false|no)` Filter events based on public signup.
* `sequence=9` Show only events in the event sequence id 9.
* `num_results=4&page=1` Pagination example. Show the first page of 4 results.

```json
[
  {
    "id":1129099,
    "identifier":"f3jywymn",
    "sequence":null,
    "name":"Kings Kids Team Christmas Party",
    "datetime_start":"2023-12-22 20:00:00",
    "datetime_end":"2023-12-22 23:59:00",
    "description":"",
    "category":{
      "id":5,
      "name":"Kids",
      "color":"#be4bdb"
    },
    "status":"confirmed",
    "visible_to":[
      "addressbook_tag_2419"
    ],
    "brand":[
      
    ],
    "capacity":null,
    "images":[
      
    ],
    "location":{
      "address":"The Shire Hall, High Pavement, Nottingham NG1 1HN",
      "latitude":"52.950673",
      "longitude":"-1.14424",
      "name":"Iberico World Tapas",
      "type":"physical",
      "url":null
    },
    "signup_options":{
      "notification":"0",
      "connect":{
        "visible":"0"
      },
      "embed":{
        "visible":"1",
        "enabled":"1"
      },
      "public":{
        "visible":"1",
        "enabled":"1",
        "featured":"0"
      },
      "sequence_signup":"0",
      "signup_cancel":"1",
      "signup_enabled":"1",
      "tickets":{
        "enabled":"1",
        "url":"https:\/\/demo.churchsuite.com\/events\/f3jywymn"
      },
      "visible_to_tags":[
        "addressbook_tag_2419"
      ],
      "fixed_questions":{
        "name":{
          "name":"Name",
          "response_type":"Text",
          "required":true,
          "hidden":false
        },
        "email":{
          "name":"Email",
          "response_type":"Email",
          "required":"first",
          "hidden":false
        },
        "mobile":{
          "name":"Phone",
          "response_type":"Phone",
          "required":false,
          "hidden":false
        },
        "notes":{
          "name":"Notes",
          "response_type":"Paragraph",
          "required":false,
          "hidden":false
        }
      }
    },
    "site":{
      "id":1,
      "name":"Nottingham",
      "initials":"",
      "color":"#e98c90",
      "order":1,
      "address":{
        "id":null,
        "line1":"Easter Park",
        "line2":"Lenton Lane",
        "line3":"",
        "city":"Nottingham",
        "county":"Notts",
        "postcode":"NG7 2PX",
        "country":""
      },
      "mtime":"2023-09-20 11:26:06",
      "muser":"churchsuite",
      "ctime":"2015-05-20 14:11:16",
      "cuser":"churchsuite"
    },
    "site_ids":[
      "1"
    ],
    "pin":533847,
    "invite_hash":null,
    "public_visible":true,
    "mtime":"2023-11-28 15:48:18",
    "muser":"luke",
    "ctime":"2023-11-07 09:56:51",
    "cuser":"kerry",
    "merged_by_strategy":false
  }
]
```


## Group List & Map Configurations

Map and group list iframes can be embedded using configurations. Details can be found here: [Support Article](https://support.churchsuite.com/article/97-embed-small-group-lists-and-maps-in-your-website)

## Small Groups JSON feed

`https://{your_account_id}.churchsuite.com/embed/smallgroups/json`

The following URL parameters are accepted:

* `callback` If you are requesting the JSON feed from JS you will need to specify the callback function's name in order to get around the cross-domain restrictions on browsers. You do not need to provide this if you request the JSON from the server-side (i.e. in a PHP script). This is empty by default.
* `site=1` The Site ID to filter the groups by. If not given or 0 then no site filtering will be done.

```json
[
  {
    "id":112,
    "identifier":"gisiog3m",
    "reference":null,
    "name":"Arnold - North (Online)",
    "date_start":"2023-09-05",
    "date_end":"",
    "custom_frequency":"",
    "frequency":"weekly",
    "day":"2",
    "site":null,
    "time":"20:00",
    "location":{
      "address":null,
      "latitude":null,
      "longitude":null,
      "name":"",
      "type":"online",
      "url":null,
      "address_name":""
    },
    "description":"Our desire is to know God and pursue Him. We seek to encourage one another to fulfil our destiny in Him, as we live out our lives, believing that it is how we live, how we serve and how we love that will have the greatest impact in advancing the Kingdom.\r\n\r\nFor more info visit www.kingshope.church",
    "images":[
      
    ],
    "no_members":15,
    "public_visible":true,
    "public_signup":true,
    "embed_visible":true,
    "embed_signup":true,
    "connect_visible":true,
    "connect_signup":true,
    "signup_enabled":true,
    "signup_date_start":"2023-08-28",
    "signup_date_end":"",
    "signup_capacity":20,
    "signup_member_status":"pending",
    "signup_confirm_email":true,
    "signup_confirm_email_from_name":"",
    "signup_confirm_email_from_email":"",
    "signup_confirm_email_subject":"",
    "signup_confirm_email_body":"",
    "signup_details_visible":"after_signup",
    "signup_link_visible":true,
    "signup_full":false,
    "cluster_id":null,
    "cluster":null,
    "custom_fields":[
      
    ],
    "labels":[
      {
        "id":13,
        "value":[
          "26ba4865-212a-4e23-82f4-0ca643e533aa",
          "cf6bc8ea-783d-427d-bed5-24d1057a25e3",
          "1c8b2247-2ebf-4f5b-965b-0e9f35524434",
          "ac556e29-317f-4378-9d24-1969d6dd74e0"
        ]
      },
      {
        "id":14,
        "value":[
          "cde141a8-0755-4f3a-b280-65740e1cf236",
          "4427e3ba-ae45-441a-bc28-493620b381b4",
          "95d535d3-7a8b-4ce2-9c4b-3bb490cf45e0"
        ]
      },
      {
        "id":15,
        "value":[
          "e6ffb9ed-9abd-48fc-90f8-7f76d853aaa0",
          "3fdf6cc8-5117-4dd1-b772-3742f2ebb287"
        ]
      }
    ],
    "embed_signup_page_title":"Find a home in a small group \ud83c\udfe1",
    "embed_signup_page_message":"We'd love everyone to find a home in a small group! If you can't find one that is near you or seems like a good fit for you, email smallgroups@kingshope.church <\/a>and we'll help you locate a small group to join.",
    "mtime":"2023-11-20 23:15:12",
    "muser":"Paul",
    "ctime":"2023-08-29 16:24:29",
    "cuser":"Sue"
  }
]
```


## Address Book form

`https://{your_account_id}.churchsuite.com/embed/addressbook/form`

The following URL parameters are accepted:

* `site=1` The Site ID to add new contacts to. If not given and you have multiple sites on your account a Site dropdown selector will be presented in the form. You can also comma-separate your Site IDs to allow your contacts to choose between those Sites. If you do not have multiple sites on your account you can ignore this parameter.

Sometimes you may wish to change some of the styling so that it fits better with your website. The following URL parameters enable you to do this. You must specify them in the full hex format `#FFFFFF`.

* `body_bgcolor` The main background. Default: `#F5F6F7`.
