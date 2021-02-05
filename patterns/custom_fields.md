# Custom Fields over the ChurchSuite API

[Home](https://github.com/ChurchSuite/churchsuite-api)

Please note: We've been overhauling our custom field logic to allow for unlimited quantities of them, rather than a maximum of 10 in the addressbook, children and smallgroup modules respectively. We're trying to maintain the current API pattern alongside the new, which is a struggle and we are trying to work with users to iron out the issues as fast as possible. 

Contacts, children and small groups all have custom fields and our API endpoints provide a means of accessing these. We return data on our custom fields consistently, so no matter which API endpoint you call you can expect them to be returned in the same way. A sample response when requesting the JSON response for a contact may contain the following:

```json
{
  "id":"1",
  "first_name": "Gemma",
  "last_name": "Alexander",
  
  ...
  
  "custom_fields":{
        "field_1": {
            "id": "1",
            "resource_type": "churchsuite_module",
            "resource_id": "1",
            "order": "1",
            "type": "select",
            "name": "Member status",
            "help": null,
            "options": [
                {
                    "id": "ffbfc9fd-4579-4370-9783-2e4390cd0e30",
                    "name": "Non-member",
                    "status": "active"
                },
                {
                    "id": "3ec40d19-f346-42ef-aad0-797da87093f3",
                    "name": "Member",
                    "status": "active"
                }
            ],
            "formatted_options": "Non-member, Member",
            "value": {
                "id": "ffbfc9fd-4579-4370-9783-2e4390cd0e30"
            },
            "formatted_value": "Non-member",
            "required": "1",
            "settings": {
                "my": {
                    "edit": true,
                    "view": true,
                    "required": true
                },
                "embed": {
                    "edit": true,
                    "required": false
                },
                "connect": {
                    "edit": true,
                    "required": false
                }
            }
        },
        "custom1": "Non-member",
        "field1": {
            "id": "1",
            "order": "1",
            "type": "select",
            "name": "Member status",
            "value": "Non-member",
            "options": [
                "Non-member",
                "Member"
            ]
        },
        "field_2": {
            "id": "2",
            "resource_type": "churchsuite_module",
            "resource_id": "1",
            "order": "2",
            "type": "text",
            "name": "Twitter",
            "help": null,
            "options": null,
            "formatted_options": "",
            "value": null,
            "formatted_value": "",
            "required": "0",
            "settings": {
                "my": {
                    "edit": true,
                    "view": true,
                    "required": false
                },
                "embed": {
                    "edit": true,
                    "required": false
                },
                "connect": {
                    "edit": true,
                    "required": false
                }
            }
        },
        "custom2": "",
        "field2": {
            "id": "2",
            "order": "2",
            "type": "text",
            "name": "Twitter",
            "value": ""
        },
        "field_3": {
            "id": "3",
            "resource_type": "churchsuite_module",
            "resource_id": "1",
            "order": "3",
            "type": "checkbox",
            "name": "Communication - Areas of interest",
            "help": null,
            "options": [
                {
                    "id": "5714a7c3-be40-42a5-8ed2-0d5a100df220",
                    "name": "Weekly church news",
                    "status": "active"
                },
                {
                    "id": "11e24bb8-2df4-428d-b9b8-f8160bd1688b",
                    "name": "Mission news",
                    "status": "active"
                },
                {
                    "id": "20344b52-5699-4d75-9503-42eda56d2d25",
                    "name": "Foodbank",
                    "status": "active"
                },
                {
                    "id": "aec7e2a5-d71e-4a5e-adb5-30cde417bd2c",
                    "name": "Vision and values",
                    "status": "active"
                },
                {
                    "id": "330be1c8-b5cb-4b2c-8983-211ecb02c9a6",
                    "name": "Small groups",
                    "status": "active"
                },
                {
                    "id": "5b0c22d9-1f8a-469f-a6a9-264e7b553403",
                    "name": "Serving opportunities",
                    "status": "active"
                },
                {
                    "id": "13083502-d88c-4cc6-a2d7-5b43b4e604a3",
                    "name": "Pastor's blog - [Philip Ward](addressbook_contact:1)",
                    "status": "active"
                },
                {
                    "id": "bd74601b-4089-4303-aed3-6036bdaf3945",
                    "name": "Pastor's blog - [Paula Wright](addressbook_contact:2)",
                    "status": "active"
                },
                {
                    "id": "e296ee1b-9dab-405f-9a4b-807778f39071",
                    "name": "Social events",
                    "status": "active"
                },
                {
                    "id": "5660afc7-8c88-4844-8345-a19af25f473d",
                    "name": "Student events",
                    "status": "active"
                },
                {
                    "id": "4134d172-240f-4cfe-9541-ef3eee88f998",
                    "name": "Youth events",
                    "status": "active"
                },
                {
                    "id": "9c87f8a0-4169-4976-8ce2-57bde0e8d2a2",
                    "name": "Children events",
                    "status": "active"
                },
                {
                    "id": "0dec2193-3812-4392-9078-1b7fe9812acf",
                    "name": "Building project",
                    "status": "active"
                }
            ],
            "formatted_options": "Weekly church news, Mission news, Foodbank, Vision and values, Small groups, Serving opportunities, Pastor's blog - Philip Ward, Pastor's blog - Paula Wright, Social events, Student events, Youth events, Children events, Building project",
            "value": [
                {
                    "id": "5714a7c3-be40-42a5-8ed2-0d5a100df220"
                },
                {
                    "id": "11e24bb8-2df4-428d-b9b8-f8160bd1688b"
                },
                {
                    "id": "20344b52-5699-4d75-9503-42eda56d2d25"
                }
            ],
            "formatted_value": "Weekly church news, Mission news, Foodbank",
            "required": "0",
            "settings": {
                "my": {
                    "edit": true,
                    "view": true,
                    "required": false
                },
                "embed": {
                    "edit": true,
                    "required": false
                },
                "connect": {
                    "edit": true,
                    "required": false
                }
            }
        },
        "custom3": "Weekly church news, Mission news, Foodbank",
        "field3": {
            "id": "3",
            "order": "3",
            "type": "checkboxes",
            "name": "Communication - Areas of interest",
            "value": "Weekly church news, Mission news, Foodbank",
            "options": [
                "Weekly church news",
                "Mission news",
                "Foodbank",
                "Vision and values",
                "Small groups",
                "Serving opportunities",
                "Pastor's blog - Philip Ward",
                "Pastor's blog - Paula Wright",
                "Social events",
                "Student events",
                "Youth events",
                "Children events",
                "Building project"
            ]
        },
        "field_4": {
            "id": "4",
            "resource_type": "churchsuite_module",
            "resource_id": "1",
            "order": "4",
            "type": "radio",
            "name": "Electoral Roll",
            "help": null,
            "options": [
                {
                    "id": "d0f078d2-9a59-46b5-84b1-c95db548e22a",
                    "name": "Not on electoral roll",
                    "status": "active"
                },
                {
                    "id": "e6250e86-0334-4253-8d02-07ead45cd6d5",
                    "name": "On electoral roll",
                    "status": "active"
                }
            ],
            "formatted_options": "Not on electoral roll, On electoral roll",
            "value": null,
            "formatted_value": "",
            "required": "0",
            "settings": {
                "my": {
                    "edit": true,
                    "view": true,
                    "required": false
                },
                "embed": {
                    "edit": true,
                    "required": false
                },
                "connect": {
                    "edit": true,
                    "required": false
                }
            }
        },
        "custom4": "",
        "field4": {
            "id": "4",
            "order": "4",
            "type": "radios",
            "name": "Electoral Roll",
            "value": "",
            "options": [
                "Not on electoral roll",
                "On electoral roll"
            ]
        },
        "field_5": {
            "id": "5",
            "resource_type": "churchsuite_module",
            "resource_id": "1",
            "order": "5",
            "type": "text",
            "name": "Mentor",
            "help": null,
            "options": null,
            "formatted_options": "",
            "value": null,
            "formatted_value": "",
            "required": "0",
            "settings": {
                "my": {
                    "edit": true,
                    "view": true,
                    "required": false
                },
                "embed": {
                    "edit": true,
                    "required": false
                },
                "connect": {
                    "edit": true,
                    "required": false
                }
            }
        },
        "custom5": "",
        "field5": {
            "id": "5",
            "order": "5",
            "type": "text",
            "name": "Mentor",
            "value": ""
        },
        "field_6": {
            "id": "6",
            "resource_type": "churchsuite_module",
            "resource_id": "1",
            "order": "6",
            "type": "date",
            "name": "DBS Due",
            "help": null,
            "options": null,
            "formatted_options": "",
            "value": "2021-02-13",
            "formatted_value": "13-02-2021",
            "required": "0",
            "settings": {
                "my": {
                    "edit": true,
                    "view": true,
                    "required": false
                },
                "embed": {
                    "edit": true,
                    "required": false
                },
                "connect": {
                    "edit": true,
                    "required": false
                }
            }
        },
        "custom6": "13-02-2021",
        "field6": {
            "id": "6",
            "order": "6",
            "type": "date",
            "name": "DBS Due",
            "value": "13-02-2021"
        },
        "field_7": {
            "id": "7",
            "resource_type": "churchsuite_module",
            "resource_id": "1",
            "order": "7",
            "type": "textarea",
            "name": "Ministry skills",
            "help": null,
            "options": null,
            "formatted_options": "",
            "value": null,
            "formatted_value": "",
            "required": "0",
            "settings": {
                "my": {
                    "edit": true,
                    "view": true,
                    "required": false
                },
                "embed": {
                    "edit": true,
                    "required": false
                },
                "connect": {
                    "edit": true,
                    "required": false
                }
            }
        },
        "custom7": "",
        "field7": {
            "id": "7",
            "order": "7",
            "type": "paragraph",
            "name": "Ministry skills",
            "value": ""
        },
        "field_8": {
            "id": "8",
            "resource_type": "churchsuite_module",
            "resource_id": "1",
            "order": "8",
            "type": "email",
            "name": "Next of Kin - Email Address",
            "help": null,
            "options": null,
            "formatted_options": "",
            "value": null,
            "formatted_value": "",
            "required": "0",
            "settings": {
                "my": {
                    "edit": true,
                    "view": true,
                    "required": false
                },
                "embed": {
                    "edit": true,
                    "required": false
                },
                "connect": {
                    "edit": true,
                    "required": false
                }
            }
        },
        "custom8": "",
        "field8": {
            "id": "8",
            "order": "8",
            "type": "email",
            "name": "Next of Kin - Email Address",
            "value": ""
        },
        "field_9": {
            "id": "9",
            "resource_type": "churchsuite_module",
            "resource_id": "1",
            "order": "9",
            "type": "phone",
            "name": "Next of Kin - Phone Number",
            "help": null,
            "options": null,
            "formatted_options": "",
            "value": null,
            "formatted_value": "",
            "required": "0",
            "settings": {
                "my": {
                    "edit": true,
                    "view": true,
                    "required": false
                },
                "embed": {
                    "edit": true,
                    "required": false
                },
                "connect": {
                    "edit": true,
                    "required": false
                }
            }
        },
        "custom9": "",
        "field9": {
            "id": "9",
            "order": "9",
            "type": "phone",
            "name": "Next of Kin - Phone Number",
            "value": ""
        }
  },
  
  ...
  
}
```

## Legacy data

As you can see, for each custom field, we describe the value of the custom field (i.e. `custom1`) as well as the field itself (i.e. `field1`). The value of the field will always be DB formatted and in a variable named `customX` where `X` is the ID of the custom field.

When describing the field for a custom field we give:
  * `id` - the identifier of the field
  * `type` - a string of any of the following: `text`, `textarea`, `checkbox`, `radio`, `select`, `date`, `email` or `phone`
  * `name` - the name of a custom field is what the input label will be when displaying it in a form or in a view
  * `value` - this value is different to the DB ready value, it's formatted for displaying to the user. Dates are formatted based on the country of your ChurchSuite account
  * `options` - this is only given for the `checkbox`, `radio` and `select` types and will give you all allowed values for the custom field

## New data

Our new format for custom fields will be in the `field_X` object:
  * `id` - the identifier of the field
  * `resource_type` - for custom fields this will always be "churchsuite_module" this is a field which will be used in the future to enable us to create custom forms 
  * `resource_id` - this is our internal ID for the custom field's module; 1 for Address Book, 5 for Children and 9 for Small Groups
  * `order` - within a module custom fields can be orderred easily, this field will give the ordering for the field from 1 to the number of fields in that module
  * `type` - the custom field's type, which can be any of the following: `text`, `textarea`, `checkbox`, `radio`, `select`, `date`, `email` or `phone`
  * `name` - the name of the custom field, as defined in the module
  * `help` - a future value for describing what the field does, envisaged to be used as form help text for the user
  * `options` - if the type is `checkbox`, `radio` or `select` this will contain the options available for this field. For all other types this will be `null`. See below for further details.
  * `value` - the DB value for the field on the model. For `checkbox`, `radio` and `select` this value is a collection of option uuids. 
  * `formatted_value` - this value is formatted for displaying directly to the user. Dates are formatted based on the country of your ChurchSuite account. For fields with options we return a CSV value of the selected options.
  * `required` - if the field is required in the ChurchSuite admin side of the system this will return 1, otherwise 0.
  * `settings` - in a module you've always been able to choose certain settings for custom fields in My, Embed and Connect but we haven't returned that in the API before. This is now present as JSON and is described further down below in more detail.
  
### Custom field types
  
As mentioned, we currently have 8 data types for custom fields:
  * `text` - a simple textbox input
  * `textarea` (`paragraph` will work too but this is deprecated) - a textarea input
  * `checkbox` (`checkboxes` will work too but this is deprecated) - checkbox list
  * `radio` (`radios` will work too but this is deprecated) - radio list
  * `select` -  drop-down list
  * `date` - date selector
  * `email` - AddressBook Contact selector
  * `phone` - AddressBook Contact selector
  
### Custom field option data

We return a field's options as a JSON array. Each option has the following values:

  * `id` - Every option has an autogenerated uuid string, which doesn't change. This means that even if the name of the field changes the uuid will not. 
  * `name` - The option's name
  * `status` - An option can be; `active` meaning it's in use as an available option, or `archived` meaning it's no longer shown but possibly still selected by models in the system. The `archived` status allows you to maintain data about the model without allowing a non-admin user from seeing it.
  
### Custom field settings data

We return settings for each field, broken down into the systems; My, Embed and Connect. These settings vary a little bit depending by the module a custom field belongs to. All settings are boolean and either a 1 for true, or 0 for false.

#### Address Book

  * My ChurchSuite (`my`)
    * `view` - field is visible in "Search for Others"
    * `edit` - field is editable in "My Details" and "My Consent"
    * `required` - field is required in "My Details" and "My Consent"
  * Connect (`connect`)
    * `edit` - field is editable in Connect - My Details
    * `required` - field is required in Connect - My Details
  * Embed (`embed`)
    * `edit` - field is editable in the embeddable My Details form
    * `required` - field is required in the embeddable My Details form
    
#### Children

  * My ChurchSuite (`my`)
    * `edit` - field is editable by parents in "My Children"
    * `required` - field is required in "My Children"
  * Connect (`connect`)
    * `view` - field is visible in the admin section of child check-in
    * `edit` - field is editable in Connect - My Details
    * `required` - field is required in Connect - My Details
  * Embed (`embed`)
    * `edit` - field is editable in the embeddable My Details form
    * `required` - field is required in the embeddable My Details form
    
#### Small groups

  * My ChurchSuite (`my`)
    * `view` - field is visible in "My Groups"
    * `edit` - field is editable by group admins in "My Groups"
    * `required` - field is required in "My Groups"
  * Connect (`connect`)
    * `view` - field is visible in the groups map/list
  * Embed (`embed`)
    * `view` - field is visible in the groups map/list
    

