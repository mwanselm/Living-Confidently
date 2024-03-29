# SwaggerClient-php
API for pulling information on FRs

This PHP package is automatically generated by the [Swagger Codegen](https://github.com/swagger-api/swagger-codegen) project:

- API version: 13a2629d2e525f48315447733f74e466e785cee9
- Build package: io.swagger.codegen.languages.PhpClientCodegen

## Requirements

PHP 5.4.0 and later

## Installation & Usage
### Composer

To install the bindings via [Composer](http://getcomposer.org/), add the following to `composer.json`:

```
{
  "repositories": [
    {
      "type": "git",
      "url": "https://github.com//.git"
    }
  ],
  "require": {
    "/": "*@dev"
  }
}
```

Then run `composer install`

### Manual Installation

Download the files and include `autoload.php`:

```php
    require_once('/path/to/SwaggerClient-php/autoload.php');
```

## Tests

To run the unit tests:

```
composer install
./vendor/bin/phpunit
```

## Getting Started

Please follow the [installation procedure](#installation--usage) and then run the following:

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: leadmon_auth
Swagger\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$api_instance = new Swagger\Client\Api\AgencyApi();
$lead = new \Swagger\Client\Model\Lead(); // \Swagger\Client\Model\Lead | Lead to create
$agency_id = 789; // int | Agency to assign the lead to

try {
    $result = $api_instance->addLeadWithAgency($lead, $agency_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AgencyApi->addLeadWithAgency: ', $e->getMessage(), PHP_EOL;
}

?>
```

## Documentation for API Endpoints

All URIs are relative to *https://devleadmon.dev.aws.glic.com/*

Class | Method | HTTP request | Description
------------ | ------------- | ------------- | -------------
*AgencyApi* | [**addLeadWithAgency**](docs/Api/AgencyApi.md#addleadwithagency) | **POST** /agencies/{agency_id}/leads | 
*AgencyApi* | [**findLocationByPermalink**](docs/Api/AgencyApi.md#findlocationbypermalink) | **GET** /locations/by_permalink | 
*AgencyApi* | [**findLocations**](docs/Api/AgencyApi.md#findlocations) | **GET** /locations/search | 
*AgencyApi* | [**getAgencies**](docs/Api/AgencyApi.md#getagencies) | **GET** /agencies | 
*AgencyApi* | [**getAgenciesByLocation**](docs/Api/AgencyApi.md#getagenciesbylocation) | **GET** /agencies/search | 
*AgencyApi* | [**getAgency**](docs/Api/AgencyApi.md#getagency) | **GET** /agencies/{id} | 
*AgencyApi* | [**getLeadAssignableAgencies**](docs/Api/AgencyApi.md#getleadassignableagencies) | **GET** /leads/{id}/assignable_agencies | 
*AgencyApi* | [**selectLocations**](docs/Api/AgencyApi.md#selectlocations) | **POST** /locations/select | 
*AgencyApi* | [**updateAgency**](docs/Api/AgencyApi.md#updateagency) | **PUT** /agencies/{id} | 
*AgencyApi* | [**updateAgencyLogo**](docs/Api/AgencyApi.md#updateagencylogo) | **POST** /agencies/{id}/logo | 
*AgencyApi* | [**updateLocation**](docs/Api/AgencyApi.md#updatelocation) | **PUT** /locations/{id} | 
*ApplicantApi* | [**addApplicant**](docs/Api/ApplicantApi.md#addapplicant) | **POST** /applicants | 
*ApplicantApi* | [**updateApplicantResume**](docs/Api/ApplicantApi.md#updateapplicantresume) | **POST** /applicants/{id}/resume | 
*Contact_usApi* | [**addInquiry**](docs/Api/Contact_usApi.md#addinquiry) | **POST** /inquiries | 
*Contact_usApi* | [**getInquiryTopics**](docs/Api/Contact_usApi.md#getinquirytopics) | **GET** /inquiry_topics | 
*LeadApi* | [**addActivityStatusComment**](docs/Api/LeadApi.md#addactivitystatuscomment) | **POST** /activity_statuses/{activity_status_id}/comments | 
*LeadApi* | [**addLead**](docs/Api/LeadApi.md#addlead) | **POST** /leads | 
*LeadApi* | [**addLeadByAlias**](docs/Api/LeadApi.md#addleadbyalias) | **POST** /leads/by_alias | 
*LeadApi* | [**createService**](docs/Api/LeadApi.md#createservice) | **POST** /services | 
*LeadApi* | [**findLeadById**](docs/Api/LeadApi.md#findleadbyid) | **GET** /leads/{id} | 
*LeadApi* | [**findLeads**](docs/Api/LeadApi.md#findleads) | **GET** /leads | 
*LeadApi* | [**getActivities**](docs/Api/LeadApi.md#getactivities) | **GET** /activities | 
*LeadApi* | [**getActivity**](docs/Api/LeadApi.md#getactivity) | **GET** /activities/{id} | 
*LeadApi* | [**getActivityStatus**](docs/Api/LeadApi.md#getactivitystatus) | **GET** /activity_statuses/{id} | 
*LeadApi* | [**getActivityStatusComments**](docs/Api/LeadApi.md#getactivitystatuscomments) | **GET** /leads/{lead_id}/comments | 
*LeadApi* | [**getAgencyForReassign**](docs/Api/LeadApi.md#getagencyforreassign) | **GET** /leads/{id}/reassign | 
*LeadApi* | [**getCampaigns**](docs/Api/LeadApi.md#getcampaigns) | **GET** /campaigns | 
*LeadApi* | [**getCommentById**](docs/Api/LeadApi.md#getcommentbyid) | **GET** /comments/{id} | 
*LeadApi* | [**getComments**](docs/Api/LeadApi.md#getcomments) | **GET** /comments | 
*LeadApi* | [**getLeadActivityStatuses**](docs/Api/LeadApi.md#getleadactivitystatuses) | **GET** /lead/{id}/activity_statuses | 
*LeadApi* | [**getLeadQuiz**](docs/Api/LeadApi.md#getleadquiz) | **GET** /leads/{id}/quizzes | 
*LeadApi* | [**getService**](docs/Api/LeadApi.md#getservice) | **GET** /services/{id} | 
*LeadApi* | [**getServices**](docs/Api/LeadApi.md#getservices) | **GET** /services | 
*LeadApi* | [**transitionLead**](docs/Api/LeadApi.md#transitionlead) | **POST** /leads/{id}/state | 
*LeadApi* | [**updateActivityStatus**](docs/Api/LeadApi.md#updateactivitystatus) | **POST** /activity_statuses/{id}/state | 
*LeadApi* | [**updateLead**](docs/Api/LeadApi.md#updatelead) | **PUT** /leads/{id} | 
*LeadApi* | [**updateLeadDiQuote**](docs/Api/LeadApi.md#updateleaddiquote) | **PUT** /leads/{id}/di_quote | 
*LeadApi* | [**updateService**](docs/Api/LeadApi.md#updateservice) | **PUT** /services/{id} | 
*UserApi* | [**createDevice**](docs/Api/UserApi.md#createdevice) | **POST** /user/devices | 
*UserApi* | [**currentUser**](docs/Api/UserApi.md#currentuser) | **GET** /user | 
*UserApi* | [**disassociateDevice**](docs/Api/UserApi.md#disassociatedevice) | **DELETE** /devices/{id} | 
*UserApi* | [**getAgencyUsers**](docs/Api/UserApi.md#getagencyusers) | **GET** /agencies/{agency_id}/users | 
*UserApi* | [**getDeviceById**](docs/Api/UserApi.md#getdevicebyid) | **GET** /devices/{id} | 
*UserApi* | [**getNotifications**](docs/Api/UserApi.md#getnotifications) | **GET** /user/notifications | 
*UserApi* | [**getUnreadNotifications**](docs/Api/UserApi.md#getunreadnotifications) | **GET** /user/notifications/unread | 
*UserApi* | [**getUserById**](docs/Api/UserApi.md#getuserbyid) | **GET** /users/{id} | 
*UserApi* | [**getUserDevices**](docs/Api/UserApi.md#getuserdevices) | **GET** /user/devices | 
*UserApi* | [**updateDevice**](docs/Api/UserApi.md#updatedevice) | **PUT** /devices/{id} | 
*UserApi* | [**updateNotification**](docs/Api/UserApi.md#updatenotification) | **PUT** /user/notifications/{id} | 


## Documentation For Models

 - [ActivitiesResponse](docs/Model/ActivitiesResponse.md)
 - [Activity](docs/Model/Activity.md)
 - [ActivityResponse](docs/Model/ActivityResponse.md)
 - [ActivityStatus](docs/Model/ActivityStatus.md)
 - [ActivityStatusResponse](docs/Model/ActivityStatusResponse.md)
 - [ActivityStatusesResponse](docs/Model/ActivityStatusesResponse.md)
 - [Address](docs/Model/Address.md)
 - [AgenciesResponse](docs/Model/AgenciesResponse.md)
 - [Agency](docs/Model/Agency.md)
 - [AgencyRequest](docs/Model/AgencyRequest.md)
 - [AgencyResponse](docs/Model/AgencyResponse.md)
 - [AgentProfile](docs/Model/AgentProfile.md)
 - [Applicant](docs/Model/Applicant.md)
 - [ApplicantRequest](docs/Model/ApplicantRequest.md)
 - [ApplicantResponse](docs/Model/ApplicantResponse.md)
 - [Campaign](docs/Model/Campaign.md)
 - [CampaignsResponse](docs/Model/CampaignsResponse.md)
 - [Comment](docs/Model/Comment.md)
 - [CommentResponse](docs/Model/CommentResponse.md)
 - [CommentsResponse](docs/Model/CommentsResponse.md)
 - [Device](docs/Model/Device.md)
 - [DiQuote](docs/Model/DiQuote.md)
 - [Email](docs/Model/Email.md)
 - [ErrorModel](docs/Model/ErrorModel.md)
 - [Inquiry](docs/Model/Inquiry.md)
 - [InquiryRequest](docs/Model/InquiryRequest.md)
 - [InquiryResponse](docs/Model/InquiryResponse.md)
 - [InquiryTopic](docs/Model/InquiryTopic.md)
 - [InquiryTopicsResponse](docs/Model/InquiryTopicsResponse.md)
 - [Lead](docs/Model/Lead.md)
 - [LeadRequest](docs/Model/LeadRequest.md)
 - [LeadResponse](docs/Model/LeadResponse.md)
 - [LeadTransitionRequest](docs/Model/LeadTransitionRequest.md)
 - [LeadsResponse](docs/Model/LeadsResponse.md)
 - [Location](docs/Model/Location.md)
 - [LocationRequest](docs/Model/LocationRequest.md)
 - [LocationResponse](docs/Model/LocationResponse.md)
 - [LocationsResponse](docs/Model/LocationsResponse.md)
 - [Logo](docs/Model/Logo.md)
 - [Notification](docs/Model/Notification.md)
 - [PhoneNumber](docs/Model/PhoneNumber.md)
 - [PostCommentRequest](docs/Model/PostCommentRequest.md)
 - [QuizResponse](docs/Model/QuizResponse.md)
 - [SearchQuery](docs/Model/SearchQuery.md)
 - [SelectLocationsRequest](docs/Model/SelectLocationsRequest.md)
 - [Service](docs/Model/Service.md)
 - [ServicesResponse](docs/Model/ServicesResponse.md)
 - [User](docs/Model/User.md)
 - [UserRespose](docs/Model/UserRespose.md)
 - [UsersResponse](docs/Model/UsersResponse.md)
 - [WebSite](docs/Model/WebSite.md)


## Documentation For Authorization


## basic

- **Type**: HTTP basic authentication

## leadmon_auth

- **Type**: OAuth
- **Flow**: password
- **Authorization URL**: 
- **Scopes**: 
 - **leadmon_access**: use the leadtracker API


## Author

kyle_mcmullen@glic.com


