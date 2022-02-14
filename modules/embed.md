# Embed

[Home](https://github.com/ChurchSuite/churchsuite-api)

Our Embed URL's allow you to place ready-made widgets into your website without the need to develop an integration with our API. Alongside this we have also made the JSON-equivalent feeds available so that you can use the data however you'd like. You do not need API access to use these features.

## Calendar

`https://{your_account_id}.churchsuite.com/embed/calendar`

The following URL parameters are accepted:

* `date=2017-12-01` The start date for the calendar in the format `Y-m-d`. If not given or empty today's date will be used.
* `category=1,2,3` A list of Category IDs to filter the calendar by. If not given or empty no category filtering will be done.
* `show_categories=(0|1)` Enable/disable the category filter dropdown. Default: `disabled`.
* `site=1` The Site ID to filter the events by. If not given or 0 then no site filtering will be done.

Sometimes you may wish to change some of the styling so that it fits better with your website. The following URL parameters enable you to do this. You must specify them in the full hex format `#FFFFFF`.

* `body_bgcolor` The main background. Default: `#FFFFFF`.


## Calendar Featured events list

`https://{your_account_id}.churchsuite.com/embed/calendar/featured`

The following URL parameters are accepted:

* `num_results=4` The number of events to show. If not given or 0 then all events are shown.
* `site=1` The Site ID to filter the events by. If not given or 0 then no site filtering will be done.

Sometimes you may wish to change some of the styling so that it fits better with your website. The following URL parameters enable you to do this. You must specify them in the full hex format `#FFFFFF`.

* `body_bgcolor` The main background. Default: `#F5F6F7`.
* `event_bgcolor` The background of the events. Default: `#FFFFFF`.
* `event_border_color` The colour of the event borders. Default: `#CCCCCC`.
* `heading_color` The colour of event headings. Default: `#444444`.
* `icon_color` The colour of icons in the event meta-data. Default: `#BBBBBB`.
* `text_color` The colour of text in an event. Default: `#666666`.

## Calendar JSON feed

`https://{your_account_id}.churchsuite.com/embed/calendar/json`

The following URL parameters are accepted:

* `callback` If you are requesting the JSON feed from JS you will need to specify the callback function's name in order to get around the cross-domain restrictions on browsers. You do not need to provide this if you request the JSON from the server-side (i.e. in a PHP script). This is empty by default.
* `date=2017-12-01` The start date for the calendar in the format `Y-m-d`. If not given or empty today's date will be used.
* `featured=(0|1)` If enabled only return featured events. Default: `disabled`.
* `site=1` The Site ID to filter the events by. If not given or 0 then no site filtering will be done.

```json
[
  {
    "id":1126646,
    "identifier":"echjpi3l",
    "sequence":"1126645",
    "name":"Alpha Online",
    "datetime_start":"2022-02-14 19:00:00",
    "datetime_end":"2022-02-14 21:30:00",
    "description":"Over 27 million people worldwide have now attended an Alpha course, taking the opportunity to explore the meaning of life in a relaxed and non-pressured social environment. Alpha is designed for people who are interested in finding out more about the Christian faith. There is a meal, followed by a thought provoking talk, then a chance to ask questions and discuss in a small group context. Alpha is ideal for anyone asking questions about faith and interested in exploring ideas. It's also good for new Christians, newcomers to church and those wanting to brush up on the basics. It's totally free and you're not tied into anything. Missed a talk? You will find them all here.",
    "category":{
      "id":17,
      "name":"Nottingham Events",
      "color":"#4697c9"
    },
    "status":"confirmed",
    "visible_to":[
      
    ],
    "brand":[
      
    ],
    "capacity":null,
    "images":[
      
    ],
    "location":{
      "address":null,
      "latitude":null,
      "longitude":null,
      "name":"Zoom",
      "type":"online",
      "url":null
    },
    "signup_options":{
      "notification":"0",
      "connect":{
        "visible":"1"
      },
      "embed":{
        "visible":"1",
        "enabled":"1"
      },
      "public":{
        "visible":"1",
        "enabled":"1",
        "featured":"1"
      },
      "sequence_signup":"1",
      "signup_cancel":"1",
      "signup_enabled":"1",
      "tickets":{
        "enabled":"1",
        "url":"https:\/\/demo.churchsuite.com\/events\/echjpi3l"
      },
      "visible_to_tags":[
        
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
    "site":null,
    "pin":653366,
    "invite_hash":null,
    "public_visible":true,
    "mtime":"2021-12-16 15:00:11",
    "muser":"nathaniel",
    "ctime":"2021-12-16 15:00:11",
    "cuser":"nathaniel",
    "merged_by_strategy":false
  }
]
```


## Small Groups List

`https://{your_account_id}.churchsuite.com/embed/smallgroups/list`

The following URL parameters are accepted:

* `show_dow=(0|1)` Enable/disable the Days of Week filter dropdown. Default: `disabled`.
* `show_tags=(0|1)` Enable/disable the Tags filter dropdown. Default: `disabled`.
* `tag=1,2,3` A list of Tag IDs to filter the groups by. If not given or empty no tag filtering will be done.
* `site=1` The Site ID to filter the groups by. If not given or 0 then no site filtering will be done.

Sometimes you may wish to change some of the styling so that it fits better with your website. The following URL parameters enable you to do this. You must specify them in the full hex format `#FFFFFF`.

* `body_bgcolor` The main background. Default: `#F5F6F7`.
* `filters_bgcolor` The background of the area where the day and tags filters sit. Default: `#FFFFFF`.
* `group_bgcolor` The background of the groups. Default: `#FFFFFF`.
* `group_border_color` The colour of the group borders. Default: `your brand colour`.
* `heading_color` The colour of group headings. Default: `#444444`.
* `icon_color` The colour of icons in the group meta-data. Default: `#BBBBBB`.
* `text_color` The colour of text in an group. Default: `#666666`.

## Small Groups Map

`https://{your_account_id}.churchsuite.com/embed/smallgroups/map`

The following URL parameters are accepted:

* `latitude` The latitude for the Google Map to centre upon. Default: Either your account's meeting address latitude or a calculated centre point based on the location of all of the groups that are displayed.
* `longitude` The longitude for the Google Map to centre upon. Default: Either your account's meeting address longitude or a calculated centre point based on the location of all of the groups that are displayed.
* `zoom` The amount of zoom on the Google Map. Default: `12`.
* `show_dow=(0|1)` Enable/disable the Days of Week filter dropdown. Default: `disabled`.
* `show_tags=(0|1)` Enable/disable the Tags filter dropdown. Default: `disabled`.
* `tag=1,2,3` A list of Tag IDs to filter the groups by. If not given or empty no tag filtering will be done.
* `site=1` The Site ID to filter the groups by. If not given or 0 then no site filtering will be done.

Sometimes you may wish to change some of the styling so that it fits better with your website. The following URL parameters enable you to do this. You must specify them in the full hex format `#FFFFFF`.

* `body_bgcolor` The main background. Default: `#F5F6F7`.
* `filters_bgcolor` The background of the area where the day and tags filters sit. Default: `#FFFFFF`.
* `group_bgcolor` The background of the groups. Default: `#FFFFFF`.
* `group_border_color` The colour of the group borders. Default: `your brand colour`.
* `heading_color` The colour of group headings. Default: `#444444`.
* `icon_color` The colour of icons in the group meta-data. Default: `#BBBBBB`.
* `text_color` The colour of text in an group. Default: `#666666`.

## Small Groups JSON feed

`https://{your_account_id}.churchsuite.com/embed/smallgroups/json`

The following URL parameters are accepted:

* `callback` If you are requesting the JSON feed from JS you will need to specify the callback function's name in order to get around the cross-domain restrictions on browsers. You do not need to provide this if you request the JSON from the server-side (i.e. in a PHP script). This is empty by default.
* `tag=1,2,3` A list of Tag IDs to filter the groups by. If not given or empty no tag filtering will be done.
* `site=1` The Site ID to filter the groups by. If not given or 0 then no site filtering will be done.

```json
[
  {
    "id":67,
    "identifier":"demycadz",
    "reference":"AB1",
    "name":"Arnold - North",
    "date_start":"2021-05-17",
    "date_end":"",
    "custom_frequency":"",
    "frequency":"weekly",
    "day":"2",
    "site":null,
    "time":"20:00",
    "location":{
      "address":"NG1 2AB",
      "latitude":"52.95481",
      "longitude":"-1.150963",
      "name":"Paul's House",
      "type":"physical",
      "url":null,
      "address_name":"Paul's House"
    },
    "description":"Our desire is to know God and pursue Him. We seek to encourage one another to fulfil our destiny in Him, as we live out our lives, believing that it is how we live, how we serve and how we love that will have the greatest impact in advancing the Kingdom.\r\n\r\nFor more info visit www.kingshope.church",
    "images":[
      
    ],
    "no_members":16,
    "public_visible":true,
    "public_signup":true,
    "embed_visible":true,
    "embed_signup":true,
    "connect_visible":true,
    "connect_signup":true,
    "signup_enabled":true,
    "signup_date_start":"2021-01-01",
    "signup_date_end":"",
    "signup_capacity":null,
    "signup_member_status":"pending",
    "signup_confirm_email":true,
    "signup_confirm_email_from_name":"",
    "signup_confirm_email_from_email":"",
    "signup_confirm_email_subject":null,
    "signup_confirm_email_body":"Thanks for signing up. See you soon!Lindsey",
    "signup_details_visible":"after_signup",
    "signup_link_visible":true,
    "signup_full":false,
    "cluster_id":14,
    "cluster":{
      "id":14,
      "name":"Cluster 1",
      "mtime":"2022-01-18 14:28:48",
      "muser":"Paul",
      "ctime":"2022-01-18 14:28:48",
      "cuser":"Paul"
    },
    "custom_fields":[
      
    ],
    "embed_signup_page_title":"",
    "embed_signup_page_message":"",
    "mtime":"2022-01-18 14:29:07",
    "muser":"Paul",
    "ctime":"2018-08-10 10:56:54",
    "cuser":"paul"
  }
]
```


## Address Book form

`https://{your_account_id}.churchsuite.com/embed/addressbook/form`

The following URL parameters are accepted:

* `site=1` The Site ID to add new contacts to. If not given and you have multiple sites on your account a Site dropdown selector will be presented in the form. You can also comma-separate your Site IDs to allow your contacts to choose between those Sites. If you do not have multiple sites on your account you can ignore this parameter.

Sometimes you may wish to change some of the styling so that it fits better with your website. The following URL parameters enable you to do this. You must specify them in the full hex format `#FFFFFF`.

* `body_bgcolor` The main background. Default: `#F5F6F7`.
