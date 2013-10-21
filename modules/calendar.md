# Calendar

[Home](https://github.com/ChurchApp/churchapp-api)

The Calendar module manages all events, HR and event sign up within ChurchApp. The following endpoints are available:

## List Events

This endpoints allows you to list all events either between a pair of dates or for future/past.

````
  GET /v1/calendar/events_index
````

## Get an Event

This endpoint returns all the information held about a particular event

````
  GET /v1/calendar/event/1
````

