# Small Groups

[Home](https://github.com/ChurchApp/churchapp-api)

The Small Groups module is concered with the management of groups of contacts, along with their attendance, and support the following endpoints:

## List Groups

This endpoint returns an array of small groups including group location, which will be either a postcode and latitude/longitude pair, or for international accounts, an address with latitude/longitude.

````
  GET /v1/smallgroups/group_index
````

