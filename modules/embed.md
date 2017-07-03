# Embed

[Home](https://github.com/ChurchSuite/churchsuite-api)

Our Embed URL's allow you to place ready-made widgets into your website without the need to develop an integration with our API. Alongside this we have also made the JSON-equivalent feeds available so that you can use the data however you'd like. You do not need API access to use these features.

## Calendar

`https://{your_account_id}.churchsuite.co.uk/embed/calendar`

The following URL parameters are accepted:

* `date=2017-12-01` The start date for the calendar in the format `Y-m-d`. If not given or empty today's date will be used.
* `category=1,2,3` A list of Category IDs to filter the calendar by. If not given or empty no category filtering will be done.
* `show_categories=(0|1)` Enable/disable the category filter dropdown. Default: `disabled`.
* `site=1` The Site ID to filter the events by. If not given or 0 then no site filtering will be done.

Sometimes you may wish to change some of the styling so that it fits better with your website. The following URL parameters enable you to do this. You must specify them in the full hex format `#FFFFFF`.

* `body_bgcolor` The main background. Default: `#FFFFFF`.


## Calendar Featured events list

`https://{your_account_id}.churchsuite.co.uk/embed/calendar/featured`

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

`https://{your_account_id}.churchsuite.co.uk/embed/calendar/json`

The following URL parameters are accepted:

* `callback` If you are requesting the JSON feed from JS you will need to specify the callback function's name in order to get around the cross-domain restrictions on browsers. You do not need to provide this if you request the JSON from the server-side (i.e. in a PHP script). This is empty by default.
* `date_start=2017-12-01` The start date for the calendar in the format `Y-m-d`. If not given or empty today's date will be used.
* `date_end=2017-01-15` The end date for the calendar in the format `Y-m-d`. If not given or empty the last day of the week for the date_start's month will be used.
* `featured=(0|1)` If enabled only return featured events. Default: `disabled`.
* `site=1` The Site ID to filter the events by. If not given or 0 then no site filtering will be done.

```json
[
  {
    "id":"2714",
    "identifier":"pibs3mla",
    "name":"Coffee and Song",
    "datetime_start":"2016-06-26 20:30:00",
    "datetime_end":"2016-06-26 22:30:00",
    "category":{
      "id":"5",
      "name":"Kid's Events",
      "color":"#2020ab"
    },
    "public_visible":"1",
    "description":"",
    "images":{
    
    },
    "location":{
      "address":"NG7 1GX",
      "name":"Starbucks Lenton",
      "latitude":"52.9450058024525",
      "longitude":"-1.16562010111933"
    },
    "signup_options":{
      "notification":"0",
      "connect":{
        "visible":"0"
      },
      "embed":{
        "visible":"1",
        "enabled":"0"
      },
      "public":{
        "visible":"1",
        "enabled":"0",
        "featured":"0"
      },
      "sequence_signup":"0",
      "sms":{
        "enabled":"0"
      },
      "tickets":{
        "enabled":"0",
        "url":"https:\/\/demo.churchsuite.com\/events\/pibs3mla"
      }
    },
    "site":{
      "id":"1",
      "name":"Main site",
      "color":"red"
    }
  }
]
```


## Small Groups List

`https://{your_account_id}.churchsuite.co.uk/embed/smallgroups/list`

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

`https://{your_account_id}.churchsuite.co.uk/embed/smallgroups/map`

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

`https://{your_account_id}.churchsuite.co.uk/embed/smallgroups/json`

The following URL parameters are accepted:

* `callback` If you are requesting the JSON feed from JS you will need to specify the callback function's name in order to get around the cross-domain restrictions on browsers. You do not need to provide this if you request the JSON from the server-side (i.e. in a PHP script). This is empty by default.
* `tag=1,2,3` A list of Tag IDs to filter the groups by. If not given or empty no tag filtering will be done.
* `site=1` The Site ID to filter the groups by. If not given or 0 then no site filtering will be done.

```json
[
  {
    "id":"2",
    "identifier":"rewzlrhk",
    "reference":"2",
    "name":"Beeston",
    "date_start":"2009-05-20",
    "date_end":"2017-04-30",
    "frequency":"weekly",
    "day":"4",
    "time":"20:30",
    "location":{
      "address":"NG4 2PQ",
      "address_name":"14, The Crescent",
      "latitude":"52.9819039",
      "longitude":"-1.0811233"
    },
    "description":"We're a group of passionate followers of Jesus trying to do life together and be family. We meet weekly on Wednesdays - we'd love for you to join us!",
    "images":{
    
    },
    "no_members":15,
    "public_visible":"1",
    "embed_signup":"1",
    "signup_enabled":"1",
    "signup_date_start":"2016-01-25",
    "signup_date_end":null,
    "signup_capacity":"25",
    "signup_confirm_email":"1",
    "signup_confirm_email_from_name":"",
    "signup_confirm_email_from_email":"",
    "signup_confirm_email_subject":"Welcome to the Beeston Small Group",
    "signup_confirm_email_body":"Dear ::first_name::Thanks for signing up to join the Beeston Small Group - we're looking forward to welcoming you. We'll drop you a line over the next couple of days to introduce ourselves. In the mean time, if you have any questions, do get in touch. Finally, we've attached a map and directions to help you find us.Beeston Group Map.png Every blessingGeorge & Sally BakerBeeston Group Leaders",
    "signup_link_visible":true,
    "custom_fields":[
      
    ],
    "embed_signup_page_title":"Data Protection Disclaimer",
    "embed_signup_page_message":"King's Hope Church recognises the <strong>importance<\/strong> of the correct and lawful treatment of personal data. <br \/><br \/>All personal data, whether it is held on paper, on computer or other media, will be subject to the appropriate legal safeguards as specified in the Data Protection Act 1998.",
    "embed_visible":"1"
  }
]
```


## Address Book form

`https://{your_account_id}.churchsuite.co.uk/embed/addressbook/form`

The following URL parameters are accepted:

* `site=1` The Site ID to add new contacts to. If not given and you have multiple sites on your account a Site dropdown selector will be presented in the form. You can also comma-separate your Site IDs to allow your contacts to choose between those Sites. If you do not have multiple sites on your account you can ignore this parameter.

Sometimes you may wish to change some of the styling so that it fits better with your website. The following URL parameters enable you to do this. You must specify them in the full hex format `#FFFFFF`.

* `body_bgcolor` The main background. Default: `#F5F6F7`.
