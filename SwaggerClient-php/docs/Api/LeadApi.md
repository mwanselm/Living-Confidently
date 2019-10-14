# Swagger\Client\LeadApi

All URIs are relative to *https://devleadmon.dev.aws.glic.com/*

Method | HTTP request | Description
------------- | ------------- | -------------
[**addActivityStatusComment**](LeadApi.md#addActivityStatusComment) | **POST** /activity_statuses/{activity_status_id}/comments | 
[**addLead**](LeadApi.md#addLead) | **POST** /leads | 
[**addLeadByAlias**](LeadApi.md#addLeadByAlias) | **POST** /leads/by_alias | 
[**createService**](LeadApi.md#createService) | **POST** /services | 
[**findLeadById**](LeadApi.md#findLeadById) | **GET** /leads/{id} | 
[**findLeads**](LeadApi.md#findLeads) | **GET** /leads | 
[**getActivities**](LeadApi.md#getActivities) | **GET** /activities | 
[**getActivity**](LeadApi.md#getActivity) | **GET** /activities/{id} | 
[**getActivityStatus**](LeadApi.md#getActivityStatus) | **GET** /activity_statuses/{id} | 
[**getActivityStatusComments**](LeadApi.md#getActivityStatusComments) | **GET** /leads/{lead_id}/comments | 
[**getAgencyForReassign**](LeadApi.md#getAgencyForReassign) | **GET** /leads/{id}/reassign | 
[**getCampaigns**](LeadApi.md#getCampaigns) | **GET** /campaigns | 
[**getCommentById**](LeadApi.md#getCommentById) | **GET** /comments/{id} | 
[**getComments**](LeadApi.md#getComments) | **GET** /comments | 
[**getLeadActivityStatuses**](LeadApi.md#getLeadActivityStatuses) | **GET** /lead/{id}/activity_statuses | 
[**getLeadQuiz**](LeadApi.md#getLeadQuiz) | **GET** /leads/{id}/quizzes | 
[**getService**](LeadApi.md#getService) | **GET** /services/{id} | 
[**getServices**](LeadApi.md#getServices) | **GET** /services | 
[**transitionLead**](LeadApi.md#transitionLead) | **POST** /leads/{id}/state | 
[**updateActivityStatus**](LeadApi.md#updateActivityStatus) | **POST** /activity_statuses/{id}/state | 
[**updateLead**](LeadApi.md#updateLead) | **PUT** /leads/{id} | 
[**updateLeadDiQuote**](LeadApi.md#updateLeadDiQuote) | **PUT** /leads/{id}/di_quote | 
[**updateService**](LeadApi.md#updateService) | **PUT** /services/{id} | 


# **addActivityStatusComment**
> \Swagger\Client\Model\CommentsResponse addActivityStatusComment($activity_status_id, $comment_request)



Creates a new comment

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: leadmon_auth
Swagger\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$api_instance = new Swagger\Client\Api\LeadApi();
$activity_status_id = 789; // int | ID of the lead the comment should be attached to
$comment_request = new \Swagger\Client\Model\PostCommentRequest(); // \Swagger\Client\Model\PostCommentRequest | Comment to create

try {
    $result = $api_instance->addActivityStatusComment($activity_status_id, $comment_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling LeadApi->addActivityStatusComment: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **activity_status_id** | **int**| ID of the lead the comment should be attached to |
 **comment_request** | [**\Swagger\Client\Model\PostCommentRequest**](../Model/\Swagger\Client\Model\PostCommentRequest.md)| Comment to create |

### Return type

[**\Swagger\Client\Model\CommentsResponse**](../Model/CommentsResponse.md)

### Authorization

[leadmon_auth](../../README.md#leadmon_auth)

### HTTP request headers

 - **Content-Type**: application/json, multi-part/form-data
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **addLead**
> \Swagger\Client\Model\LeadResponse addLead($lead)



Creates a new lead

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: leadmon_auth
Swagger\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$api_instance = new Swagger\Client\Api\LeadApi();
$lead = new \Swagger\Client\Model\LeadRequest(); // \Swagger\Client\Model\LeadRequest | Lead to create

try {
    $result = $api_instance->addLead($lead);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling LeadApi->addLead: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **lead** | [**\Swagger\Client\Model\LeadRequest**](../Model/\Swagger\Client\Model\LeadRequest.md)| Lead to create |

### Return type

[**\Swagger\Client\Model\LeadResponse**](../Model/LeadResponse.md)

### Authorization

[leadmon_auth](../../README.md#leadmon_auth)

### HTTP request headers

 - **Content-Type**: application/json, multi-part/form-data
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **addLeadByAlias**
> \Swagger\Client\Model\LeadResponse addLeadByAlias($routing_policy, $routing_id, $lead)



Creates a new lead

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: leadmon_auth
Swagger\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$api_instance = new Swagger\Client\Api\LeadApi();
$routing_policy = "routing_policy_example"; // string | Label for the routing policy
$routing_id = "routing_id_example"; // string | ID used with the routing policy to direct the lead
$lead = new \Swagger\Client\Model\LeadRequest(); // \Swagger\Client\Model\LeadRequest | Lead to create

try {
    $result = $api_instance->addLeadByAlias($routing_policy, $routing_id, $lead);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling LeadApi->addLeadByAlias: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **routing_policy** | **string**| Label for the routing policy |
 **routing_id** | **string**| ID used with the routing policy to direct the lead |
 **lead** | [**\Swagger\Client\Model\LeadRequest**](../Model/\Swagger\Client\Model\LeadRequest.md)| Lead to create |

### Return type

[**\Swagger\Client\Model\LeadResponse**](../Model/LeadResponse.md)

### Authorization

[leadmon_auth](../../README.md#leadmon_auth)

### HTTP request headers

 - **Content-Type**: application/json, multi-part/form-data
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **createService**
> \Swagger\Client\Model\Service createService($service)



Creates a service

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: leadmon_auth
Swagger\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$api_instance = new Swagger\Client\Api\LeadApi();
$service = new \Swagger\Client\Model\Service(); // \Swagger\Client\Model\Service | Service fields to update

try {
    $result = $api_instance->createService($service);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling LeadApi->createService: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **service** | [**\Swagger\Client\Model\Service**](../Model/\Swagger\Client\Model\Service.md)| Service fields to update |

### Return type

[**\Swagger\Client\Model\Service**](../Model/Service.md)

### Authorization

[leadmon_auth](../../README.md#leadmon_auth)

### HTTP request headers

 - **Content-Type**: application/json, multi-part/form-data
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **findLeadById**
> \Swagger\Client\Model\LeadResponse findLeadById($id)



Returns a single lead if the user has access

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: leadmon_auth
Swagger\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$api_instance = new Swagger\Client\Api\LeadApi();
$id = 789; // int | ID of the lead

try {
    $result = $api_instance->findLeadById($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling LeadApi->findLeadById: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**| ID of the lead |

### Return type

[**\Swagger\Client\Model\LeadResponse**](../Model/LeadResponse.md)

### Authorization

[leadmon_auth](../../README.md#leadmon_auth)

### HTTP request headers

 - **Content-Type**: application/json, multi-part/form-data
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **findLeads**
> \Swagger\Client\Model\LeadsResponse[] findLeads()



Returns all leads from the system that the user has access to

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: leadmon_auth
Swagger\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$api_instance = new Swagger\Client\Api\LeadApi();

try {
    $result = $api_instance->findLeads();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling LeadApi->findLeads: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters
This endpoint does not need any parameter.

### Return type

[**\Swagger\Client\Model\LeadsResponse[]**](../Model/LeadsResponse.md)

### Authorization

[leadmon_auth](../../README.md#leadmon_auth)

### HTTP request headers

 - **Content-Type**: application/json, multi-part/form-data
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getActivities**
> \Swagger\Client\Model\ActivitiesResponse getActivities()



Gets activities

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: leadmon_auth
Swagger\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$api_instance = new Swagger\Client\Api\LeadApi();

try {
    $result = $api_instance->getActivities();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling LeadApi->getActivities: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters
This endpoint does not need any parameter.

### Return type

[**\Swagger\Client\Model\ActivitiesResponse**](../Model/ActivitiesResponse.md)

### Authorization

[leadmon_auth](../../README.md#leadmon_auth)

### HTTP request headers

 - **Content-Type**: application/json, multi-part/form-data
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getActivity**
> \Swagger\Client\Model\ActivityResponse getActivity($id)



Gets activity

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: leadmon_auth
Swagger\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$api_instance = new Swagger\Client\Api\LeadApi();
$id = 789; // int | ID of the activity

try {
    $result = $api_instance->getActivity($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling LeadApi->getActivity: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**| ID of the activity |

### Return type

[**\Swagger\Client\Model\ActivityResponse**](../Model/ActivityResponse.md)

### Authorization

[leadmon_auth](../../README.md#leadmon_auth)

### HTTP request headers

 - **Content-Type**: application/json, multi-part/form-data
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getActivityStatus**
> \Swagger\Client\Model\ActivityStatusResponse getActivityStatus($id)



Gets activity status

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: leadmon_auth
Swagger\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$api_instance = new Swagger\Client\Api\LeadApi();
$id = 789; // int | ID of the activity status

try {
    $result = $api_instance->getActivityStatus($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling LeadApi->getActivityStatus: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**| ID of the activity status |

### Return type

[**\Swagger\Client\Model\ActivityStatusResponse**](../Model/ActivityStatusResponse.md)

### Authorization

[leadmon_auth](../../README.md#leadmon_auth)

### HTTP request headers

 - **Content-Type**: application/json, multi-part/form-data
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getActivityStatusComments**
> \Swagger\Client\Model\CommentsResponse getActivityStatusComments($lead_id)



Returns all comments on this activity status

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: leadmon_auth
Swagger\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$api_instance = new Swagger\Client\Api\LeadApi();
$lead_id = 789; // int | ID of the activity status to get comments for

try {
    $result = $api_instance->getActivityStatusComments($lead_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling LeadApi->getActivityStatusComments: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **lead_id** | **int**| ID of the activity status to get comments for |

### Return type

[**\Swagger\Client\Model\CommentsResponse**](../Model/CommentsResponse.md)

### Authorization

[leadmon_auth](../../README.md#leadmon_auth)

### HTTP request headers

 - **Content-Type**: application/json, multi-part/form-data
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getAgencyForReassign**
> \Swagger\Client\Model\AgencyResponse getAgencyForReassign($id)



Gets an agency the lead can be reassigned to

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: leadmon_auth
Swagger\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$api_instance = new Swagger\Client\Api\LeadApi();
$id = 789; // int | ID of the lead to reassign

try {
    $result = $api_instance->getAgencyForReassign($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling LeadApi->getAgencyForReassign: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**| ID of the lead to reassign |

### Return type

[**\Swagger\Client\Model\AgencyResponse**](../Model/AgencyResponse.md)

### Authorization

[leadmon_auth](../../README.md#leadmon_auth)

### HTTP request headers

 - **Content-Type**: application/json, multi-part/form-data
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getCampaigns**
> \Swagger\Client\Model\CampaignsResponse getCampaigns()



Gets campaigns

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: leadmon_auth
Swagger\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$api_instance = new Swagger\Client\Api\LeadApi();

try {
    $result = $api_instance->getCampaigns();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling LeadApi->getCampaigns: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters
This endpoint does not need any parameter.

### Return type

[**\Swagger\Client\Model\CampaignsResponse**](../Model/CampaignsResponse.md)

### Authorization

[leadmon_auth](../../README.md#leadmon_auth)

### HTTP request headers

 - **Content-Type**: application/json, multi-part/form-data
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getCommentById**
> \Swagger\Client\Model\CommentResponse getCommentById($id)



Returns a comment associated with this lead by id

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: leadmon_auth
Swagger\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$api_instance = new Swagger\Client\Api\LeadApi();
$id = 789; // int | ID of the comment

try {
    $result = $api_instance->getCommentById($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling LeadApi->getCommentById: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**| ID of the comment |

### Return type

[**\Swagger\Client\Model\CommentResponse**](../Model/CommentResponse.md)

### Authorization

[leadmon_auth](../../README.md#leadmon_auth)

### HTTP request headers

 - **Content-Type**: application/json, multi-part/form-data
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getComments**
> \Swagger\Client\Model\CommentsResponse getComments()



Returns all comments

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: leadmon_auth
Swagger\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$api_instance = new Swagger\Client\Api\LeadApi();

try {
    $result = $api_instance->getComments();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling LeadApi->getComments: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters
This endpoint does not need any parameter.

### Return type

[**\Swagger\Client\Model\CommentsResponse**](../Model/CommentsResponse.md)

### Authorization

[leadmon_auth](../../README.md#leadmon_auth)

### HTTP request headers

 - **Content-Type**: application/json, multi-part/form-data
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getLeadActivityStatuses**
> \Swagger\Client\Model\ActivityStatusesResponse getLeadActivityStatuses($id)



Gets activity statuses for lead

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: leadmon_auth
Swagger\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$api_instance = new Swagger\Client\Api\LeadApi();
$id = 789; // int | ID of the lead

try {
    $result = $api_instance->getLeadActivityStatuses($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling LeadApi->getLeadActivityStatuses: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**| ID of the lead |

### Return type

[**\Swagger\Client\Model\ActivityStatusesResponse**](../Model/ActivityStatusesResponse.md)

### Authorization

[leadmon_auth](../../README.md#leadmon_auth)

### HTTP request headers

 - **Content-Type**: application/json, multi-part/form-data
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getLeadQuiz**
> \Swagger\Client\Model\QuizResponse getLeadQuiz($id)



Gets screening quizzes for this lead

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: leadmon_auth
Swagger\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$api_instance = new Swagger\Client\Api\LeadApi();
$id = 56; // int | Lead id

try {
    $result = $api_instance->getLeadQuiz($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling LeadApi->getLeadQuiz: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**| Lead id |

### Return type

[**\Swagger\Client\Model\QuizResponse**](../Model/QuizResponse.md)

### Authorization

[leadmon_auth](../../README.md#leadmon_auth)

### HTTP request headers

 - **Content-Type**: application/json, multi-part/form-data
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getService**
> \Swagger\Client\Model\Service getService($id)



Gets a service

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: leadmon_auth
Swagger\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$api_instance = new Swagger\Client\Api\LeadApi();
$id = 789; // int | Service ID

try {
    $result = $api_instance->getService($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling LeadApi->getService: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**| Service ID |

### Return type

[**\Swagger\Client\Model\Service**](../Model/Service.md)

### Authorization

[leadmon_auth](../../README.md#leadmon_auth)

### HTTP request headers

 - **Content-Type**: application/json, multi-part/form-data
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getServices**
> \Swagger\Client\Model\ServicesResponse getServices()



Gets services

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: leadmon_auth
Swagger\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$api_instance = new Swagger\Client\Api\LeadApi();

try {
    $result = $api_instance->getServices();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling LeadApi->getServices: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters
This endpoint does not need any parameter.

### Return type

[**\Swagger\Client\Model\ServicesResponse**](../Model/ServicesResponse.md)

### Authorization

[leadmon_auth](../../README.md#leadmon_auth)

### HTTP request headers

 - **Content-Type**: application/json, multi-part/form-data
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **transitionLead**
> \Swagger\Client\Model\Lead transitionLead($id, $event, $agency, $agent, $lead_transition_request)



Transitions a lead to a new state / workflow step

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: leadmon_auth
Swagger\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$api_instance = new Swagger\Client\Api\LeadApi();
$id = 789; // int | ID of the lead to update
$event = "event_example"; // string | Event that is triggering the state change
$agency = 789; // int | Agency that the lead should be assigned to
$agent = 789; // int | Agent that the lead should be assigned to
$lead_transition_request = new \Swagger\Client\Model\LeadTransitionRequest(); // \Swagger\Client\Model\LeadTransitionRequest | Comment to create

try {
    $result = $api_instance->transitionLead($id, $event, $agency, $agent, $lead_transition_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling LeadApi->transitionLead: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**| ID of the lead to update |
 **event** | **string**| Event that is triggering the state change |
 **agency** | **int**| Agency that the lead should be assigned to |
 **agent** | **int**| Agent that the lead should be assigned to |
 **lead_transition_request** | [**\Swagger\Client\Model\LeadTransitionRequest**](../Model/\Swagger\Client\Model\LeadTransitionRequest.md)| Comment to create |

### Return type

[**\Swagger\Client\Model\Lead**](../Model/Lead.md)

### Authorization

[leadmon_auth](../../README.md#leadmon_auth)

### HTTP request headers

 - **Content-Type**: application/json, multi-part/form-data
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **updateActivityStatus**
> \Swagger\Client\Model\ActivityStatusResponse updateActivityStatus($id, $event)



Update activity status

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: leadmon_auth
Swagger\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$api_instance = new Swagger\Client\Api\LeadApi();
$id = 789; // int | ID of the activity status
$event = "event_example"; // string | Name of the transition to do

try {
    $result = $api_instance->updateActivityStatus($id, $event);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling LeadApi->updateActivityStatus: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**| ID of the activity status |
 **event** | **string**| Name of the transition to do |

### Return type

[**\Swagger\Client\Model\ActivityStatusResponse**](../Model/ActivityStatusResponse.md)

### Authorization

[leadmon_auth](../../README.md#leadmon_auth)

### HTTP request headers

 - **Content-Type**: application/json, multi-part/form-data
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **updateLead**
> \Swagger\Client\Model\LeadResponse updateLead($id, $lead)



Updates a lead

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: leadmon_auth
Swagger\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$api_instance = new Swagger\Client\Api\LeadApi();
$id = 789; // int | ID of the lead to update
$lead = new \Swagger\Client\Model\Lead(); // \Swagger\Client\Model\Lead | Lead fields that should be updated

try {
    $result = $api_instance->updateLead($id, $lead);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling LeadApi->updateLead: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**| ID of the lead to update |
 **lead** | [**\Swagger\Client\Model\Lead**](../Model/\Swagger\Client\Model\Lead.md)| Lead fields that should be updated |

### Return type

[**\Swagger\Client\Model\LeadResponse**](../Model/LeadResponse.md)

### Authorization

[leadmon_auth](../../README.md#leadmon_auth)

### HTTP request headers

 - **Content-Type**: application/json, multi-part/form-data
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **updateLeadDiQuote**
> \Swagger\Client\Model\LeadResponse updateLeadDiQuote($id, $lead)



Updates the di quote for a lead

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: leadmon_auth
Swagger\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$api_instance = new Swagger\Client\Api\LeadApi();
$id = 789; // int | ID of the lead to update
$lead = new \Swagger\Client\Model\LeadRequest(); // \Swagger\Client\Model\LeadRequest | DI Quote in right spot

try {
    $result = $api_instance->updateLeadDiQuote($id, $lead);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling LeadApi->updateLeadDiQuote: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**| ID of the lead to update |
 **lead** | [**\Swagger\Client\Model\LeadRequest**](../Model/\Swagger\Client\Model\LeadRequest.md)| DI Quote in right spot |

### Return type

[**\Swagger\Client\Model\LeadResponse**](../Model/LeadResponse.md)

### Authorization

[leadmon_auth](../../README.md#leadmon_auth)

### HTTP request headers

 - **Content-Type**: application/json, multi-part/form-data
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **updateService**
> \Swagger\Client\Model\Service updateService($id, $service)



Updates a service

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: leadmon_auth
Swagger\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$api_instance = new Swagger\Client\Api\LeadApi();
$id = 789; // int | Service ID
$service = new \Swagger\Client\Model\Service(); // \Swagger\Client\Model\Service | Service fields to update

try {
    $result = $api_instance->updateService($id, $service);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling LeadApi->updateService: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**| Service ID |
 **service** | [**\Swagger\Client\Model\Service**](../Model/\Swagger\Client\Model\Service.md)| Service fields to update |

### Return type

[**\Swagger\Client\Model\Service**](../Model/Service.md)

### Authorization

[leadmon_auth](../../README.md#leadmon_auth)

### HTTP request headers

 - **Content-Type**: application/json, multi-part/form-data
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

