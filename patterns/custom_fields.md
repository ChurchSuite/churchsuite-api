# Custom Fields over the ChurchSuite API

[Home](https://github.com/ChurchSuite/churchsuite-api)

Contacts, children and small groups all have custom fields and our API endpoints provide a means of accessing these. We return data on our custom fields consistently, so no matter which API endpoint you call you can expect them to be returned in the same way. A sample response when requesting the JSON response for a contact may contain the following:

```json
{
  "id":"1",
  "first_name": "Gemma",
  "last_name": "Alexander",
  
  ...
  
  "custom_fields":{
        "custom1": "Non-member",
        "field1": {
            "id": "1",
            "type": "select",
            "name": "Member status",
            "value": "Non-member",
            "options": [
                "Non-member",
                "Member"
            ]
        },
        "custom2": "@twitter",
        "field2": {
            "id": "2",
            "type": "text",
            "name": "Twitter",
            "value": "@twitter"
        },
        "custom3": [
            "Mission news",
            "Monthly round-up"
        ],
        "field3": {
            "id": "3",
            "type": "checkboxes",
            "name": "Mailing Lists",
            "value": "Mission news, Monthly round-up",
            "options": [
                "Weekly news",
                "Mission news",
                "Monthly round-up"
            ]
        },
        "custom4": "Not on electoral roll",
        "field4": {
            "id": "4",
            "type": "radios",
            "name": "Electoral Roll",
            "value": "Not on electoral roll",
            "options": [
                "Not on electoral roll",
                "On electoral roll"
            ]
        },
        "custom5": "2020-12-01",
        "field5": {
            "id": "5",
            "type": "date",
            "name": "DBS Due",
            "value": "01-12-2020"
        },
        "custom6": "434",
        "field6": {
            "id": "6",
            "type": "contact_id",
            "name": "Mentor",
            "value": "Ruth Kennedy"
        },
        "custom7": "Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vestibulum sed congue nisl. Nam sodales magna at lorem commodo, ut mollis urna volutpat. Aenean aliquet dui ut pretium efficitur. Aenean interdum viverra pellentesque. Nam malesuada quam nulla.",
        "field7": {
            "id": "7",
            "type": "paragraph",
            "name": "Misc.",
            "value": "Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vestibulum sed congue nisl. Nam sodales magna at lorem commodo, ut mollis urna volutpat. Aenean aliquet dui ut pretium efficitur. Aenean interdum viverra pellentesque. Nam malesuada quam nulla."
        }
  },
  
  ...
  
}
```
As you can see, for each custom field, we describe the value of the custom field as well as the field itself. The value of the field will always be DB formatted and in a variable named `customX` where `X` is the ID of the custom field.

When describing the field for a custom field we give:
  * `id` - the identifier of the field
  * `type` - a string of any of the following: `text`, `paragraph`, `checkboxes`, `radios`, `select`, `date` ot `contact_id`
  * `name` - the name of a custom field is what the input label will be when displaying it in a form or in a view
  * `value` - this value is different to the DB ready value, it's formatted for displaying to the user. Dates are formatted based on the country of your ChurchSuite account
  * `options` - this is only given for the `checkboxes`, `radios` and `select` types and will give you all allowed values for the custom field

As mentioned, we currently have 7 data types for custom fields:
  * `text` - a simple textbox input
  * `paragraph` - a textarea input
  * `checkboxes` - checkbox list
  * `radios` - radio list
  * `select` -  drop-down list
  * `date` - date selector
  * `contact_id` - AddressBook Contact selector
