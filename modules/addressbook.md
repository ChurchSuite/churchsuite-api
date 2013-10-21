# Address Book

[Home](https://github.com/ChurchApp/churchapp-api)

The Address Book module is concered with the management of contacts within ChurchApp, the following endpoint are available:

## Create a contact

This endpoint allows you to create a new contact in the Address Book.

````
  POST /v1/addressbook/contact
````

Supported parameters:

````
  array(
    'title',
    'first_name',
    'middle_name',
    'last_name',
    'formal_name',
    'maiden_name',
    'marital',
    'sex',
    'date_of_birth',
    'address',
    'address2',
    'address3',
    'city',
    'county',
    'postcode',
    'country',
    'mobile',
    'telephone',
    'work_telephone',
    'email',
    'job',
    'employer',
    'dates' => array(
      'date',
      'name',
    ),
    'tags' => array(
      'tag_name',
    ),
  );
````

