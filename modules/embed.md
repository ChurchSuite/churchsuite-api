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

The featured events feed is an alias for the calendar events list below.
When using this endpoint `featured=1` is automatically added to the parameters passed into the calendar events list to ensure only featured events are returned.
You have access to all the URL parameters available in the calendar events list.

## Calendar events list

`https://{your_account_url}.churchsuite.com/embed/calendar/events`

Results default to the following unless defined otherwise:

Unless defined otherwise, the returned events are filtered by default as follows (more info on these params can be found further along in this section):

* `layout=grid-2019`
* `merge=signup_to_sequence`
* `num_results=-1` This shows all events by default.
* `date_start=(*today's date)`
* `date_end=(*today's date + 3 months)`

The following URL parameters are accepted:

* `layout=(grid|grid-2019|list)` The layout used to render the events feed.
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

Sometimes you may wish to change some of the styling so that it fits better with your website. The following URL parameters enable you to do this. You must specify them in the full hex format `#FFFFFF`.

* `body_bgcolor` The main background. Default: `#F5F6F7`.
* `event_bgcolor` The background of the events. Default: `#FFFFFF`.
* `event_border_color` The colour of the event borders. Default: `#CCCCCC`.
* `heading_color` The colour of event headings. Default: `#444444`.
* `icon_color` The colour of icons in the event meta-data. Default: `#BBBBBB`.
* `text_color` The colour of text in an event. Default: `#666666`.
* `show_categories` Show a category select above the feed to filter the feed results. Default: `0`.
* `show_search` Show a search bar above the feed to filter the feed results. Default: `0`.
* `show_sites` Show a sites select above the feed to filter the feed results. Default: `0`.

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
    "id":1127446,
    "identifier":"dzag26hw",
    "sequence":null,
    "name":"Serve the City",
    "datetime_start":"2022-02-14 00:00:00",
    "datetime_end":"2022-02-14 23:59:59",
    "description":"A great mission opportunity",
    "category":{
      "id":38,
      "name":"City Outreach 620a1b75ea829",
      "color":"#ff69b4"
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
      "name":null,
      "type":"physical",
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
      "sequence_signup":"0",
      "signup_cancel":"1",
      "signup_enabled":"1",
      "tickets":{
        "enabled":"1",
        "url":"https:\/\/demo.churchsuite.com\/events\/dzag26hw"
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
    "pin":625232,
    "invite_hash":null,
    "public_visible":true,
    "mtime":"2022-02-14 09:05:58",
    "muser":"import",
    "ctime":"2022-02-14 09:05:58",
    "cuser":"import",
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
