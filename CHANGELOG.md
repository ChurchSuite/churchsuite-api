# Changelog

All notable changes to this project should be documented in this file.

The format is based on [Keep a Changelog](https://keepachangelog.com/en/1.0.0/),
and this project adheres to [Semantic Versioning](https://semver.org/spec/v2.0.0.html).

## [2.88.0] - 2026-07-08

### Added

- Added a new GET `giving/batches` endpoint to list Batches in the Giving module.

## [2.87.0] - 2026-07-02

The ChurchSuite Core API specification has changed from JSON to YAML, with no functional changes to the API.

## [2.86.1] - 2026-07-02

## Fixed

- Documented minimum length for string properties on POST and PUT schemas.
- Documented maximum length for phone number properties on POST and PUT schemas.
- Documented maximum length for `name` property on POST `/calendar/events` and PUT `/calendar/events/{id}` schemas.

## [2.86.0] - 2026-06-25

### Added

- Added a new GET `addressbook/flow_stages` endpoint to list Flow Stages in the Address Book module
- Added a new POST `addressbook/flow_stages` endpoint to create a single Flow Stage in the Address Book module
- Added a new PUT `addressbook/flow_stages/{id}` endpoint to update a single Flow Stage in the Address Book module
- Added a new DELETE `addressbook/flow_stages/{id}` endpoint to delete a single Flow Stage in the Address Book module
- Added a new GET `bookings/flow_stages` endpoint to list Flow Stages in the Bookings module
- Added a new POST `bookings/flow_stages` endpoint to create a single Flow Stage in the Bookings module
- Added a new PUT `bookings/flow_stages/{id}` endpoint to update a single Flow Stage in the Bookings module
- Added a new DELETE `bookings/flow_stages/{id}` endpoint to delete a single Flow Stage in the Bookings module
- Added a new GET `children/flow_stages` endpoint to list Flow Stages in the Children module
- Added a new POST `children/flow_stages` endpoint to create a single Flow Stage in the Children module
- Added a new PUT `children/flow_stages/{id}` endpoint to update a single Flow Stage in the Children module
- Added a new DELETE `children/flow_stages/{id}` endpoint to delete a single Flow Stage in the Children module
- Added a new GET `giving/flow_stages` endpoint to list Flow Stages in the Giving module
- Added a new POST `giving/flow_stages` endpoint to create a single Flow Stage in the Giving module
- Added a new PUT `giving/flow_stages/{id}` endpoint to update a single Flow Stage in the Giving module
- Added a new DELETE `giving/flow_stages/{id}` endpoint to delete a single Flow Stage in the Giving module

## [2.85.3] - 2026-06-22

## Added

- Added an `errors` object to the 409 error response.

## [2.85.2] - 2026-06-19

## Added

- Added 409 as a possible response to the following POST endpoints `calendar\categories`, `smallgroups\clusters`, `smallgroups\roles`, `addressbook\tags`, `bookings\tags`, `children\tags` and `giving\tags`.
- Added 409 as a possible response to the following PUT endpoints `calendar\categories\{id}`, `smallgroups\clusters\{id}`, `smallgroups\roles\{id}`, `addressbook\tags\{id}`, `bookings\tags\{id}`, `children\tags\{id}` and `giving\tags\{id}`.

## [2.85.1] - 2026-06-05

## Added

- Added a `ministry_id` key to the `rotas/ministry_members` response

## [2.85.0] - 2026-06-04

We're excited to begin opening up the data within the Rotas module through our API.

These initial Rotas API endpoints give you read access to your Ministry, Team and Member information, allowing you to pull insights about a person's Ministry involvement into your own applications.

## Added

- Added a new `rotas/ministries/{id}` endpoint to retrieve a single Ministry in the Rotas module
- Added a new `rotas/ministries` endpoint to list all Ministries in the Rotas module
- Added a new `rotas/ministry_members` endpoint to list all Ministry Members in the Rotas module
- Added a new `rotas/ministry_teams/{id}` endpoint to retrieve a single Ministry Team in the Rotas module
- Added a new `rotas/ministry_teams` endpoint to list all Ministry Teams in the Rotas module
- Added a new `rotas/roles` endpoint to list all Roles in the Rotas module

## [2.84.0] - 2026-06-01

The Core v2 API now supports scoped OAuth2 tokens, allowing third-party integrations to be given restricted access to your data.

If your application uses the Client Credentials grant with an API-enabled user, you likely want to continue using the `full_access` scope and managing permissions directly on the user via the ChurchSuite web interface. If you are using the Authorisation Code grant via an OAuth App, though, you should consider updating your application to request a restricted scope of access.

## Added

- Added read and write scopes for each module.
- Added `account` scope providing read access to the default brand, sites, and non-sensitive account details.
- Added `brands.read` scope providing read access to all brands in the account.
- Added `profile.read` scope providing read access to the full account profile.
- Added `user` scope providing read access to the current user profile.
- Added `usergroups.read` scope providing read access to all user groups in the account.
- Added `users.read` scope providing read access to all users in the account.

## [2.83.0] - 2026-05-27

### Added

- Added a new `account/info` endpoint that returns a summary of public account information, which can be used in preference to the `/account` endpoint for third party applications.

## [2.82.8] - 2026-05-21

### Changed

- Added `tag_ids[]` filters to `addressbook/tag_resources`, `bookings/tag_resources`, `children/tag_resources` and `giving/tag_resources`

## [2.82.7] - 2026-05-18

### Changed

- Deprecated `resource_id` and `resource_type` properties on Plan and Template Item responses, in favour of new `type` and `id` properties. If you are using one of these deprecated properties, please update your application to remove the `resource_` prefix.

## [2.82.6] - 2026-05-18

### Changed

- Added `created_at`, `created_by`, `modified_at` and `modified_by` properties to key date resource responses.

## [2.82.4] - 2026-05-15

### Fixed

- The Parent Carer Relationship list endpoint no longer orders results by the order property.

## [2.82.3] - 2026-03-27

### Changed

- Added a `num_remaining` key to the Calendar Ticket response to show how many tickets remain that are not reserved or taken

### Fixed

- Tag add/edit now has a regex pattern on the `name` field to indicate that a fully numeric name is not allowed

## [2.82.2] - 2026-03-23

### Fixed

- Corrected the example data for the Parent/Carer `is_contact` property, in line with the description

## [2.82.1] - 2026-03-17

### Changed

- Added 400 as a possible response to `calendar/categories/{id}` DELETE endpoint

## [2.82.0] - 2026-03-03

### Changed

- Added `communication` field to the Child response.

### Added

- Added a new `children/children` POST endpoint to add a Child to the Children module
- Added new `children/children/{id}` DELETE and PUT endpoints to delete and edit a Child in the Children module
- Added a new `addressbook/contacts` POST endpoint to add a Contact to the Address Book module
- Added new `addressbook/contacts/{id}` DELETE and PUT endpoints to delete and edit a Contact in the Address Book module

## [2.81.0] - 2026-02-26

### Added

- Added a new POST `calendar/categories` endpoint to create a single Category in the Calendar module
- Added a new PUT `calendar/categories/{id}` endpoint to update a single Category in the Calendar module
- Added a new DELETE `calendar/categories/{id}` endpoint to delete a single Category in the Calendar module
- Added a new POST `smallgroups/cluster` endpoint to create a single Cluster in the Small Groups module
- Added a new PUT `smallgroups/cluster/{id}` endpoint to update a single Cluster in the Small Groups module
- Added a new DELETE `smallgroups/cluster/{id}` endpoint to delete a single Cluster in the Small Groups module

## [2.80.1] - 2026-02-23

## Fixed

- The  GET `/addressbook/form_responses/{id}` and `/children/form_responses/{id}` endpoints are now correctly tagged.

## [2.80.0] - 2026-02-13

## Changed

- The Tag response now contains a "pinned_icon" property. See the [support article](https://support.churchsuite.com/article/37-smart-tags#how) for an explanation of pinned tags.

## Fixed

- The Tag response now returns {"visible_to": null} where there are no visibility restrictions. This behaviour now matches the documentation, and is consistent with "visible_to" elsewhere.

### Added

- Added a new POST `addressbook/key_dates` endpoint to create a single Key Date in the Address Book module
- Added a new POST `children/key_dates` endpoint to create a single Key Date in the Children module
- Added a new POST `network/key_dates` endpoint to create a single Key Date in the Network module
- Added a new PUT `addressbook/key_dates/{id}` endpoint to update a single Key Date in the Address Book module
- Added a new PUT `children/key_dates/{id}` endpoint to update a single Key Date in the Children module
- Added a new PUT `network/key_dates/{id}` endpoint to update a single Key Date in the Network module
- Added a new DELETE `addressbook/key_dates/{id}` endpoint to delete a single Key Date from the Address Book module
- Added a new DELETE `children/key_dates/{id}` endpoint to delete a single Key Date from the Children module
- Added a new DELETE `network/key_dates/{id}` endpoint to delete a single Key Date from the Network module
- Added a new POST `addressbook/key_date_resources` endpoint to create a single Key Date Resource in the Address Book module
- Added a new POST `children/key_date_resources` endpoint to create a single Key Date Resource in the Children module
- Added a new POST `network/key_date_resources` endpoint to create a single Key Date Resource in the Network module
- Added a new PUT `addressbook/key_date_resources/{id}` endpoint to update a single Key Date Resource in the Address Book module
- Added a new PUT `children/key_date_resources/{id}` endpoint to update a single Key Date Resource in the Children module
- Added a new PUT `network/key_date_resources/{id}` endpoint to update a single Key Date Resource in the Network module
- Added a new DELETE `addressbook/key_date_resources/{id}` endpoint to delete a single Key Date Resource from the Address Book module
- Added a new DELETE `children/key_date_resources/{id}` endpoint to delete a single Key Date Resource from the Children module
- Added a new DELETE `network/key_date_resources/{id}` endpoint to delete a single Key Date Resource from the Network module

- Added a new POST `addressbook/tags` endpoint to create a single Tag in the Address Book module
- Added a new POST `bookings/tags` endpoint to create a single Tag in the Bookings module
- Added a new POST `children/tags` endpoint to create a single Tag in the Children module
- Added a new POST `giving/tags` endpoint to create a single Tag in the Giving module
- Added a new PUT `addressbook/tags/{id}` endpoint to update a single Tag in the Address Book module
- Added a new PUT `bookings/tags/{id}` endpoint to update a single Tag in the Bookings module
- Added a new PUT `children/tags/{id}` endpoint to update a single Tag in the Children module
- Added a new PUT `giving/tags/{id}` endpoint to update a single Tag in the Giving module
- Added a new DELETE `addressbook/tags/{id}` endpoint to delete a single Tag from the Address Book module
- Added a new DELETE `bookings/tags/{id}` endpoint to delete a single Tag from the Bookings module
- Added a new DELETE `children/tags/{id}` endpoint to delete a single Tag from the Children module
- Added a new DELETE `giving/tags/{id}` endpoint to delete a single Tag from the Giving module

- Added a new DELETE `smallgroups/roles/{id}` endpoint to delete a single Role from the Small Groups module
- Added a new PUT `smallgroups/roles/{id}` endpoint to edit a single Role in the Small Groups module
- Added a new POST `smallgroups/roles` endpoint to create a single Role in the Small Groups module

## [2.79.1] - 2026-02-12

### Changed

- Deprecated `price_id` on the Charge schema in the Bookings module, this will now always return null

## [2.79.0] - 2026-01-28

### Fixed

- The `smallgroups/members` endpoints now specify the correct type for the person.type enum

### Added

- Added a new `planning/song_arrangements` endpoint to list Song Arrangements in the Planning module
- Added a new `planning/song_arrangements/{id}` endpoint to retrieve a single Song Arrangement from the Planning module

## [2.78.0] - 2026-01-28

### Changed

- The tag_resource POST endpoints now expect a top level "person" object with a person type and ID. Module specific IDs have been deprecated.
- The tag_resource GET endpoints now return a top level "person" object with a person type and ID. Module specific IDs have been deprecated.

### Fixed

- The tag_resource DELETE endpoints now correctly specify a 400 response.

## [2.77.0] - 2026-01-15

### Added

- Added a new POST `addressbook/tag_resources` endpoint to create a single Tag Resource in the Address Book module
- Added a new POST `bookings/tag_resources` endpoint to create a single Tag Resource in the Bookings module
- Added a new POST `children/tag_resources` endpoint to create a single Tag Resource in the Children module
- Added a new POST `giving/tag_resources` endpoint to create a single Tag Resource in the Giving module
- Added a new DELETE `addressbook/tag_resources/{id}` endpoint to delete a single Tag Resource from the Address Book module
- Added a new DELETE `bookings/tag_resources/{id}` endpoint to delete a single Tag Resource from the Bookings module
- Added a new DELETE `children/tag_resources/{id}` endpoint to delete a single Tag Resource from the Children module
- Added a new DELETE `giving/tag_resources/{id}` endpoint to delete a single Tag Resource from the Giving module

## [2.76.0] - 2026-01-14

### Added

- Added a new `smallgroups/members` POST endpoint to add a single Member to a group in the Small Groups module
- Added a new `smallgroups/members/{id}` PUT endpoint to edit a single Member from the Small Groups module
- Added a new `person` property to the Member schema in the Small Groups module to define the members type and id

### Deprecated

- Deprecated `contact_id` and `child_id` on the Member schema in the Small Groups module, please now use `person`

## [2.75.1] - 2026-01-13

### Fixed

- The FieldResponse response now supports the photo/video consent field

## [2.75.0] - 2026-01-07

### Added

- Added a new DELETE `smallgroups/members/{id}` endpoint to delete a single Member from the Small Groups module

## [2.74.0] - 2026-01-07

### Added

- Added a new `smallgroups/members/{id}` endpoint to retrieve a single Member from the Small Groups module

## [2.73.0] - 2026-01-07

### Added

- Added a new `planning/songs` endpoint to list Songs in the Planning module
- Added a new `planning/songs/{id}` endpoint to retrieve a single Song from the Planning module

## [2.72.6] - 2026-01-06

### Added

- Added a new `addressbook/form_fields` endpoint to list Form Fields in the Address Book module
- Added a new `addressbook/form_fields/{id}`endpoint to retrieve a single Form Field in the Address Book module
- Added a new `addressbook/form_responses` endpoint to list Form Responses in the Address Book module
- Added a new `addressbook/form_responses/{id}`endpoint to retrieve a single Form Response in the Address Book module
- Added a new `children/form_fields` endpoint to list Form Fields in the Children module
- Added a new `children/form_fields/{id}`endpoint to retrieve a single Form Field in the Children module
- Added a new `children/form_responses` endpoint to list Form Responses in the Children module
- Added a new `children/form_responses/{id}`endpoint to retrieve a single Form Response in the Children module

## [2.71.2] - 2025-11-05

### Added

- Added a new `giving/donations` endpoint to list Donations in the Giving module

## [2.70.0] - 2025-10-27

### Added

- Added a new `giving/pledges` endpoint to list Pledges in the Giving module
- Added a new `giving/pledges/{id}` endpoint to retrieve a single Pledge from the Giving module

## [2.69.0] - 2025-10-27

ChurchSuite now supports OAuth Apps, which can be created in the Settings area of your account, that allow the OAuth2 Authorization Code flow to be used to authenticate the v2 API. As such, the security schemes on the specification have been updated to reflect the new functionality.

## [2.68.0] - 2025-10-27

### Added

- Added a new `calendar/invites` endpoint to list an Event Invites
- Added a new `calendar/invites/{id}` endpoint to retrieve an Invite

## [2.67.0] - 2025-10-20

### Changed

- Added minLength and examples to a number of paths with an id parameter.
- Added minLength to various string query parameters.

## [2.65.1] - 2025-09-04

### Fixed

- The ParentCarer response now shows "pending" as a possible status, as the linked Contacts can be pending status.

## [2.65.0] - 2025-08-08

### Removed

- The user response no longer has the `module_permissions` property.

## [2.64.0] - 2025-07-18

### Added

- The account response now has an additional `feature_flags` property.

## [2.63.0] - 2025-06-30

### Fixed

- The `children/parent_carer_relationships` endpoint is no longer capped at 50 results, and now supports pagination. The restriction around having to provide a `child_ids` parameter has also been removed.

## [2.62.1] - 2025-06-17

### Added

- Added a new `network/members` endpoint to list Organisation Members

## [2.60.4] - 2025-05-13

### Added

- Added a new `smallgroups/attendances` endpoint to list Attendance

## [2.59.1] - 2025-04-22

### Changed

- Updated `children/gatherings` to `children/group_setups`
- Updated `children/gatherings/{id}` to `children/group_setups/{id}`
- Updated `children/groups` query parameter `gathering_ids[]` to `group_setup_ids[]`
- Updated `children/group_members` query parameter `gathering_ids[]` to `group_setup_ids[]`
- Updated `children/groups` property `gathering_id` to `group_setup_id`

## [2.58.1] - 2025-03-31

### Added

- Added a new `network/label_resources` endpoint to list Label Resources
- Added a new `smallgroups/label_resources` endpoint to list Label Resources

## [2.57.0] - 2025-03-31

As part of ongoing behind-the-scenes improvements to our OAuth system, the Token URL for obtaining an access token via the Client Credentials grant has changed. All applications using the beta API should update their OAuth flows to the new URL, as the `/token` route is now deprecated and will be removed at some point in the future.

### Changed

- The OAuth2 token URL has changed from `https://login.churchsuite.com/token` to `https://login.churchsuite.com/oauth2/token`

## [2.56.0] - 2025-03-19

### Added

- Added a new `addressbook/custom_fields` endpoint to list Custom Fields
- Added a new `addressbook/custom_fields/{id}` endpoint to retrieve a Custom Field
- Added a new `bookings/custom_fields` endpoint to list Custom Fields
- Added a new `bookings/custom_fields/{id}` endpoint to retrieve a Custom Field
- Added a new `children/custom_fields` endpoint to list Custom Fields
- Added a new `children/custom_fields/{id}` endpoint to retrieve a Custom Field
- Added a new `giving/custom_fields` endpoint to list Custom Fields
- Added a new `giving/custom_fields/{id}` endpoint to retrieve a Custom Field
- Added a new `network/custom_fields` endpoint to list Custom Fields
- Added a new `network/custom_fields/{id}` endpoint to retrieve a Custom Field
- Added a new `smallgroups/custom_fields` endpoint to list Custom Fields
- Added a new `smallgroups/custom_fields/{id}` endpoint to retrieve a Custom Field

## [2.54.0] - 2025-03-18

### Added

- Added a new `addressbook/tag_categories` endpoint to list Tag Categories
- Added a new `addressbook/tag_categories/{id}` endpoint to retrieve a Tag Category
- Added a new `bookings/tag_categories` endpoint to list Tag Categories
- Added a new `bookings/tag_categories/{id}` endpoint to retrieve a Tag Category
- Added a new `children/tag_categories` endpoint to list Tag Categories
- Added a new `children/tag_categories/{id}` endpoint to retrieve a Tag Category
- Added a new `giving/tag_categories` endpoint to list Tag Categories
- Added a new `giving/tag_categories/{id}` endpoint to retrieve a Tag Category

## [2.53.0] - 2025-02-28

### Added

- Added a `school_year_name` property to children.

## [2.52.0] - 2025-02-27

### Added

- Added a new `addressbook/contacts/{id}/notes` endpoint to list Contact Notes.
- Added a new `bookings/bookings/{id}/notes` endpoint to list Booking Notes.
- Added a new `bookings/customers/{id}/notes` endpoint to list Customer Notes.
- Added a new `children/children/{id}/notes` endpoint to list Child Notes.
- Added a new `giving/givers/{id}/notes` endpoint to list Giver Notes.
- Added a new `network/organisations/{id}/notes` endpoint to list Organisation Notes.
- Added a new `planning/plans/{id}/notes` endpoint to list Plan Notes.
- Added a new `smallgroups/groups/{id}/notes` endpoint to list Group Notes.

## [2.51.0] - 2025-02-17

### Added

- Added `/bookings/tag_resources`, `/children/tag_resources` and `/giving/tag_resources` endpoints.

## [2.50.1] - 2025-02-14

### Changed

- Updates to language and terminology used throughout the docs to bring consistency across all modules. Think of it as a Valentines Day gift of love from the ChurchSuite developers to you!

## [2.50.0] - 2025-02-13

### Added

- Added a `/account/user_groups` endpoint to return User Groups from the account settings.

## [2.49.1] - 2025-02-13

### Fixed

- Corrected a typo in the `/account/users/{id}` description.

## [2.49.0] - 2025-02-10

### Added

- Added the `joined_date` property to group members, as returned from the `smallgroups/members` endpoint.

## [2.48.0] - 2025-01-30

### Added

- Added a new `addressbook/tag_resources` endpoint to list Tag Resources.

## [2.47.0] - 2025-01-22

### Changed

- Listing Booked Resources no longer requires providing booking_ids, and is now paginated.
- Bookings now have `declined` as a status option, and listing them now returns `confirmed` bookings by default.
- The `day` filter for `attendance/records` has been replaced with a `days` filter that expects an array of strings.
- The `status` filters for `bookings/types`, `bookings/resources` and `network/organisations` now default to `active`.
- The `attendance/metrics` endpoint no longer requires an array of `metricset_ids`, and is now paginated.

### Fixed

- Corrected the `organisation_ids` filter for `network/key_date_resources` which was previously documented as `contact_ids`.
- Clarified that the `days` filter for `smallgroups/groups` expects an array of string values, rather than a single string, as was previously documented.
- The `calendar/signups` and `calendar/tickets` endpoints now have documented pagination parameters, and the `calendar/tickets` `event_id` parameter has been corrected to a single integer.

## [2.46.0] - 2025-01-20

### Added

- Added support for the `view` filter to `smallgroups/groups`

### Fixed

- Clarified that the `cluster_ids` filter for `smallgroups/groups` expects an array of integer values, rather than a single integer, as was previously documented.

## [2.45.0] - 2025-01-19

### Added

- Added support for `tag_ids` filter to `addressbook/contacts`
- Added support for `tag_ids` filter to `bookings/customers`
- Added support for `tag_ids` filter to `children/children`
- Added support for `tag_ids` filter to `giving/givers`

### Removed

- Removed the `gathering_ids` filter for `children/children`. If you wish to find all children who are members of the groups in a gathering, please provide the appropriate array of group_ids.

## [2.44.3] - 2025-01-16

### Added

- Added a new `role_ids` property to the Small Groups Member model, which lists the array of roles a member has been assigned within a group.

## [2.44.2] - 2025-01-16

### Changed

- Removed "ChurchSuite API - " from the name of each separate spec, to make the docs site and Postman collection prettier.

## [2.44.1] - 2025-01-06

### Fixed

- Changed optional "email" format property to be nullable for Giver.

## [2.44.0] - 2024-12-18

### Added

- Added a giving/givers and giving/givers/{id} GET endpoints for returning Givers in the Giving module.

## [2.43.3] - 2024-12-16

### Added

- Added a new tap_to_donate_amounts property to a Fund containing the preset amounts that will be presented in the Tap to Donate app.

## [2.43.2] - 2024-12-06

### Changed

- Added a 409 response to Event delete; if there is a signup paid through Stripe, an Event cannot be deleted.

## [2.43.1] - 2024-11-29

### Removed

- Removed arrangement_ids and library_item_ids queries from PlanItem list endpoint, and make plan_ids required. They feel like overkill, and we need to improve performance on this endpoint.

## [2.43.0] - 2024-11-29

### Added

- Added create and list endpoints for CA Event Notes

### Changed

- Added support for multilevel validation errors

## [2.42.0] - 2024-11-26

### Added

- Added POST, PUT and DELETE endpoints for CA Event

## [2.41.3] - 2024-11-25

### Fixed

- Changed optional "email" format properties to be nullable - Organisation, Child, ParentCarer, Contact, Signup, Customer

## [2.41.0] - 2024-11-21

### Changed

- Changed APIv2 from HTTP Basic Auth to OAuth2 Client Credentials flow

## [2.40.8] - 2024-11-21

### Added

- Added created_source property to Booking

## [2.40.7] - 2024-11-21

### Changed

- Removed api_application key from User

## [2.40.6] - 2024-11-21

### Changed

- Removed enum from 401 response message

## [2.40.5] - 2024-11-13

### Added

- Added a visible_in_tap_to_donate property to the Fund response for Funds that are visible in Tap to Donate
- Added a visible_in_tap_to_donate query parameter to the /giving/funds endpoint to filter results by visibility in the Tap to Donate app

## [2.40.4] - 2024-10-29

### Added

- Added a booking_id property to the Event response for Events that are linked to Bookings

## [2.40.3] - 2024-10-23

### Added

- Added a visible_in_donate query parameter to the /giving/funds endpoint to filter results by visibility in Donate

## [2.40.2] - 2024-10-22

### Changed

- Renamed RecordData to RecordMetric and updated the attendance/record_data endpoint to attendance/record_metric

## [2.40.1] - 2024-10-07

### Changed

- Updated Tag schema to include category_id

## [2.40.0] - 2024-10-04

### Added

- Added planning/library_items and planning/library_items/{id} GET endpoints for returning Planning module Library Items

## [2.39.0] - 2024-10-04

### Added

- Added planning/template_items and planning/template_items/{id} GET endpoints for returning Planning module Template Items

## [2.38.4] - 2024-10-04

### Fixed

- Allow null for PlanItem settings tempo

## [2.38.3] - 2024-10-04

### Fixed

- Wrapped PlanItem, people object in an array

## [2.38.2] - 2024-10-03

### Fixed

- Moved QuestionResponses nullable to correct position

## [2.38.1] - 2024-10-03

### Changed

- Changed QuestionResponses to be nullable and the QuestionResponses spotify value to be nullable

## [2.38.0] - 2024-09-30

### Added

- Added planning/plan_items and planning/plan_items/{id} GET endpoints for returning Planning module Plan Items

## [2.37.0] - 2024-09-27

### Added

- Added planning/templates and planning/templates/{id} GET endpoints for returning Planning module Templates

## [2.36.0] - 2024-09-27

### Added

- Added planning/types and planning/types/{id} GET endpoints for returning Planning module Types

## [2.35.1] - 2024-09-26

### Fixed

- Updated oneOf to anyOf on RecordData schema

## [2.35.0] - 2024-09-26

### Added

- Added planning/plans and planning/plans/{id} GET endpoints for returning Planning module Plans

## [2.34.0] - 2024-09-25

### Added

- Added attendance/record_data GET endpoint for returning Attendance Record Data

## [2.33.3] - 2024-09-23

### Changed

- Update attendance/record_contacts to accept contact_ids and record_ids queries and update the expected parameters for a Record Contact

## [2.33.2] - 2024-09-23

### Changed

- Re-added "colour" property to Brand, while we make sure apps support color properly

## [2.33.1] - 2024-09-20

### Fixed

- Add missing 404 response to attendance/records_contacts GET

## [2.33.0] - 2024-09-20

### Added

- Added attendance/records_contacts GET endpoints for returning Record Contacts

## [2.32.1] - 2024-09-20

### Changed

- Changed colour keys from colour to color when the value is a hexadecimal value

## [2.32.0] - 2024-09-20

### Added

- Added /children/tags and /children/tags/{id} GET endpoints for returning Children module tags

## [2.31.0] - 2024-09-20

### Added

- Added /giving/tags and /giving/tags/{id} GET endpoints for returning giving module tags

## [2.30.0] - 2024-09-19

### Added

- Added /addressbook/tags and /addressbook/tags/{id} GET endpoints for returning addressbook module tags

## [2.29.0] - 2024-09-16

### Added

- Added attendance/metrics GET endpoint for returning attendance metricset metrics

## [2.28.0] - 2024-09-16

### Added

- Added network/roles, network/roles/{id} GET endpoints for returning roles

## [2.27.0] - 2024-09-13

### Added

- Added attendance/metricsets, attendance/metricsets/{id} GET endpoints for returning metricsets

## [2.26.0] - 2024-09-13

### Added

- Added network/organisations, network/organisations/{id} GET endpoints for returning organisations

## [2.25.2] - 2024-09-13

### Changed

- Corrected total_people, total_currency and total_number on Records to not be nullable

## [2.25.1] - 2024-09-12

### Fixed

- Removed site_ids from Record

## [2.25.0] - 2024-09-12

### Added

- Added attendance/records, attendance/records/{id} GET endpoints for returning records

## [2.24.0] - 2024-09-12

### Added

- Added children/parent_carer_relationships GET endpoint for returning parent/carer relationships of children

## [2.23.10] - 2024-09-11

### Fixed

- Corrected model names to start with capital letters
- Corrected model names to use the correct name in places

## [2.23.9] - 2024-09-06

### Fixed

- Added missing nullable properties in several schemas
- Removed redundant nullable properties from several schemas

## [2.23.8] - 2024-09-05

### Fixed

- Corrected description of Small Group Members.

## [2.23.7] - 2024-09-05

### Fixed

- Corrected description for addressbook/contacts status parameter

## [2.23.6] - 2024-09-05

### Changed

- Added q query to booking/customers endpoint

## [2.23.5] - 2024-09-05

### Fixed

- Fixed status example for calendar/events endpoint

## [2.23.4] - 2024-09-05

### Changed

- Adding missing get parameters for calendar/events

## [2.23.3] - 2024-09-05

### Fixed

- Renamed booking_id parameter to booking_ids for booking/booked_resources

## [2.23.2] - 2024-09-04

### Fixed

- Updating Attendance Gathering from site_id to site_ids

## [2.23.1] - 2024-09-03

### Fixed

- Corrected description for Event site_ids

## [2.23.0] - 2024-08-30

### Added

- Added attendance/gatherings, attendance/gatherings/{id} GET endpoints for returning gatherings

## [2.22.0] - 2024-08-29

### Added

- Added smallgroups/clusters, smallgroups/clusters GET endpoints for returning clusters

## [2.21.0] - 2024-08-29

### Added

- Added smallgroups/labels, smallgroups/labels/{id}, network/labels and network/labels/{id} GET endpoints for returning labels

## [2.20.2] - 2024-08-28

### Changed

- Removed redundant 400 response from SG group get endpoint

## [2.20.1] - 2024-06-06

### Added

- Added smallgroups/roles and smallgroups/roles/{id} GET endpoints for returning Small Groups roles

## [2.19.2] - 2024-07-22

### Fixed

- Signup method now has "public" as an option, as a client query shows exists in historic data

## [2.19.1] - 2024-06-27

### Fixed

- Signups identifier sometimes nullable in database due to historic data

## [2.19.0] - 2024-06-06

### Added

- Added calendar/categories and calendar/categories/{id} GET endpoints for returning Small Groups categories

## [2.18.7] - 2024-06-25

### Changed

- Added various days to SG group days property enum
- Made member visibility a boolean value

## [2.18.6] - 2024-06-25

### Changed

- Change Small groups ends at and signup.ends_at properties to be nullable

## [2.18.3] - 2024-06-25

### Changed

- Add 404 route to SG Group
- Change Signup option object to be nullable
- Use Custom Field Response resource on SG Group instead of Custom Field resource

## [2.18.2] - 2024-06-25

### Changed

- Removed seconds from time example on SG Group

## [2.18.1] - 2024-06-19

### Fixed

- The signup ticket_id property is now nullable, for signups to events without tickets.

## [2.18.0] - 2024-06-17

### Added

- Added smallgroups/groups and smallgroups/groups/{id} GET endpoints for returning Small Groups groups

## [2.17.1] - 2024-06-14

### Added

- Readded role_id filtering for members endpoint

## [2.17.0] - 2024-06-14

### Added

- Added smallgroups/members GET endpoint for returning Small Groups members

## [2.16.2] - 2024-06-13

### Changed

- Removed sites from Signup spec - they belong to the contact/child/event, not the signup.

## [2.16.1] - 2024-06-13

### Changed

- Pagination no longer silently ignores bad data, and will return a 400 for silly values

## [2.16.0] - 2024-05-28

### Added

- Added calendar/signups GET endpoint for returning calendar signups

## [2.15.4] - 2024-06-06

### Fixed

- Made ticket starts_at and ends_at nullable, because they are optional fields

## [2.15.3] - 2024-06-04

### Changed

- Removed ticket_ids query for calendar/tickets routes

## [2.15.2] - 2024-05-31

### Fixed

- Corrected typo on error spec

## [2.15.1] - 2024-05-31

### Added

- Added 400 error for calendar/tickets

## [2.15.0] - 2024-05-27

### Added

- Added calendar/tickets GET endpoint for returning calendar tickets

## [2.14.4] - 2024-05-30

### Changed

- Changed Event visibility to show tag module name

## [2.14.3] - 2024-05-30

### Changed

- Corrected spelling mistake on Contact spec

## [2.14.2] - 2024-05-30

### Changed

- Fixed Contact spec to have correct Custom Field format

## [2.14.1] - 2024-05-21

### Added

- Fixed location to include latitude and longitude

## [2.14.0] - 2024-05-21

### Added

- Added calendar/events and calendar/events/{id} GET endpoints for returning calendar events

## [2.13.0] - 2024-05-21

### Added

- Added addressbook/contacts and addressbook/contacts/{id} GET endpoints for returning addressbook contacts

## [2.12.0] - 2024-05-17

### Added

- Added /addressbook/key_date_resources and /network/key_date_resources GET endpoints for returning key date resources

## [2.11.1] - 2024-05-16

### Added

- Updated confirm email to be a shared resource and all confirmation emails to use it

## [2.11.0] - 2024-05-13

### Added

- Added /addressbook/key_dates, /addressbook/key_dates/{id}, /children/key_dates and /children/key_dates/{id}, /network/key_dates and /network/key_dates/{id} GET endpoints for returning keydates

## [2.10.1] - 2024-05-13

### Changed

- Changed tags to be more specific than the module, and the pipeline to deploy a versions to separate folders

## [2.10.0] - 2024-05-13

### Added

- Added /addressbook/flows and /addressbook/flows/{id}, /children/flows and /children/flows/{id}, /giving/flows and /giving/flows/{id} GET endpoints for returning module flows

## [2.9.2] - 2024-05-10

### Added

- Removed reference to resource_type from tags as module is decided in api route

## [2.9.1] - 2024-05-10

### Added

- Removed property resource_ids from tags

## [2.9.0] - 2024-05-09

### Added

- Added /bookings/tags and /bookings/tags/{id} GET endpoints for returning bookings module tags

## [2.8.0] - 2024-05-07

### Added

- Added bookings/flows and bookings/flows/{id} GET endpoints for returning booking flows

## [2.7.0] - 2024-04-22

### Added

- Added /bookings/resources and /bookings/resources/{id} GET endpoints for returning bookings module resources

## [2.6.0] - 2024-04-19

### Added

- Added /bookings/prices GET endpoint for returning bookings module prices

## [2.5.0] - 2024-04-18

### Added

- Added /bookings/booked_resources GET endpoint for returning bookings module booked resources

## [2.4.5] - 2024-04-18

### Changes

- Changed charges endpoint so booking/customer IDs that don't exist return a 400 rather than a 404

## [2.4.4] - 2024-04-18

### Changes

- Changed charges object amount property, removing the minimum value to allow negative integers

## [2.4.3] - 2024-04-18

### Added

- Added a 404 response to the bookings/charges endpoint

## [2.4.2] - 2024-04-17

### Changed

- Changed the bookings/charges endpoint description, and the query parameters. The parameters now expect either a single booking_id or customer_id instead of arrays. Nullable is also removed from the booking_id property in the charges spec

## [2.4.1] - 2024-04-12

### Fixed

- Use the correct spec for bookings/types endpoint

## [2.4.0] - 2024-04-12

### Added

- Added /bookings/charges GET endpoint for returning bookings module charges

## [2.3.1] - 2024-04-11

### Added

- Added account_id property to terminal_connection_token endpoint response

## [2.3.0] - 2024-04-11

### Added

- Added /bookings/types and /bookings/types/{id} GET endpoints for returning bookings module types

## [2.2.0] - 2024-04-09

### Added

- Added /bookings/customers and /bookings/customers/{id} GET endpoints for returning bookings module customers

## [2.1.1] - 2024-04-09

### Fixed

- Removed array from terminal_connection_token endpoint

## [2.1.0] - 2024-04-05

### Added

- Added an /giving/funds/{id}/terminal_connection_token endpoint

## [2.0.17] - 2024-04-04

### Fixed

- Added missing required fields to Site spec

## [2.0.16] - 2024-04-03

### Changed

- Change Stripe payment methods from formatted values to DB values

## [2.0.15] - 2024-03-22

### Added

- Added /giving/funds and /giving/funds/{id} GET endpoints for returning giving module funds

## [2.0.14] - 2024-03-22

### Added

- Added /account/users/current, /account/users/{id} and /account/users GET endpoints for returning account users

## [2.0.13] - 2024-03-21

### Added

- Added /account GET endpoint for returning account details

## [2.0.12] - 2024-03-18

### Added

- Added /account/integrations/stripe/accounts GET endpoint for returning an accounts Stripe integration

## [2.0.11] - 2024-03-12

### Added

- Added /account/brands and /account/brands/{id} GET endpoints for returning account brands

## [2.0.10] - 2024-03-11

### Added

- Added /bookings/bookings and /bookings/booking/{id} GET endpoints for returning bookings module bookings

## [2.0.9] - 2024-02-28

### Changed

- Modified /children/children query parameters adding gathering_ids[] and group_ids[] array queries and a q string query

## [2.0.8] - 2024-02-26

### Added

- Added a /children/group_members GET endpoint for returning children module group members

## [2.0.7] - 2024-02-23

### Added

- Added a /children/groups and /children/groups/{id} GET endpoints for returning children module groups

## [2.0.6] - 2024-02-21

### Added

- Added a /children/key_date_resources GET endpoint for returning a child's key dates

## [2.0.5] - 2024-02-20

### Added

- Added a /children/gatherings and /children/gatherings/{id} endpoints

## [2.0.4] - 2024-02-15

### Added

- Added a /account/sites GET endpoint for returning multiple sites

## [2.0.3] - 2024-02-14

### Added

- Added a new account.json spec
- Added an /account/sites/{id} GET endpoint for returning an account site

### Changed

- Modified the compile script to build the two separate specs, and then combine
- Changed the pipeline to upload separate and combined schemas

## [2.0.2] - 2024-02-13

### Added

- Added a /children/children GET endpoint for returning multiple children

## [2.0.1] - 2024-02-12

### Added

- Added an images array to the Child response

## [2.0.0] - 2024-01-16

### Added

- Initial pipeline setup, changelog added
