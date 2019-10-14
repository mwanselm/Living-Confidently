# Swagger\Client\AgencyApi

All URIs are relative to *https://devleadmon.dev.aws.glic.com/*

Method | HTTP request | Description
------------- | ------------- | -------------
[**addLeadWithAgency**](AgencyApi.md#addLeadWithAgency) | **POST** /agencies/{agency_id}/leads | 
[**findLocationByPermalink**](AgencyApi.md#findLocationByPermalink) | **GET** /locations/by_permalink | 
[**findLocations**](AgencyApi.md#findLocations) | **GET** /locations/search | 
[**getAgencies**](AgencyApi.md#getAgencies) | **GET** /agencies | 
[**getAgenciesByLocation**](AgencyApi.md#getAgenciesByLocation) | **GET** /agencies/search | 
[**getAgency**](AgencyApi.md#getAgency) | **GET** /agencies/{id} | 
[**getLeadAssignableAgencies**](AgencyApi.md#getLeadAssignableAgencies) | **GET** /leads/{id}/assignable_agencies | 
[**selectLocations**](AgencyApi.md#selectLocations) | **POST** /locations/select | 
[**updateAgency**](AgencyApi.md#updateAgency) | **PUT** /agencies/{id} | 
[**updateAgencyLogo**](AgencyApi.md#updateAgencyLogo) | **POST** /agencies/{id}/logo | 
[**updateLocation**](AgencyApi.md#updateLocation) | **PUT** /locations/{id} | 


# **addLeadWithAgency**
> \Swagger\Client\Model\Lead addLeadWithAgency($lead, $agency_id)



Creates a new lead that is assigned to this agency

### Example
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

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **lead** | [**\Swagger\Client\Model\Lead**](../Model/\Swagger\Client\Model\Lead.md)| Lead to create |
 **agency_id** | **int**| Agency to assign the lead to |

### Return type

[**\Swagger\Client\Model\Lead**](../Model/Lead.md)

### Authorization

[leadmon_auth](../../README.md#leadmon_auth)

### HTTP request headers

 - **Content-Type**: application/json, multi-part/form-data
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **findLocationByPermalink**
> \Swagger\Client\Model\LocationResponse findLocationByPermalink($permalink)



Gets location with permalink

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: leadmon_auth
Swagger\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$api_instance = new Swagger\Client\Api\AgencyApi();
$permalink = "permalink_example"; // string | Permalink for the location

try {
    $result = $api_instance->findLocationByPermalink($permalink);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AgencyApi->findLocationByPermalink: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **permalink** | **string**| Permalink for the location |

### Return type

[**\Swagger\Client\Model\LocationResponse**](../Model/LocationResponse.md)

### Authorization

[leadmon_auth](../../README.md#leadmon_auth)

### HTTP request headers

 - **Content-Type**: application/json, multi-part/form-data
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **findLocations**
> \Swagger\Client\Model\LocationsResponse findLocations($origin, $recruiting, $radius)



Gets all locations near a zip code

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: leadmon_auth
Swagger\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$api_instance = new Swagger\Client\Api\AgencyApi();
$origin = "origin_example"; // string | Location to search for
$recruiting = true; // bool | Only return locations that can receive recruiting requests
$radius = 789; // int | Initial max radius

try {
    $result = $api_instance->findLocations($origin, $recruiting, $radius);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AgencyApi->findLocations: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **origin** | **string**| Location to search for |
 **recruiting** | **bool**| Only return locations that can receive recruiting requests | [optional]
 **radius** | **int**| Initial max radius | [optional]

### Return type

[**\Swagger\Client\Model\LocationsResponse**](../Model/LocationsResponse.md)

### Authorization

[leadmon_auth](../../README.md#leadmon_auth)

### HTTP request headers

 - **Content-Type**: application/json, multi-part/form-data
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getAgencies**
> \Swagger\Client\Model\AgenciesResponse getAgencies()



Gets all agencies

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: leadmon_auth
Swagger\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$api_instance = new Swagger\Client\Api\AgencyApi();

try {
    $result = $api_instance->getAgencies();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AgencyApi->getAgencies: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters
This endpoint does not need any parameter.

### Return type

[**\Swagger\Client\Model\AgenciesResponse**](../Model/AgenciesResponse.md)

### Authorization

[leadmon_auth](../../README.md#leadmon_auth)

### HTTP request headers

 - **Content-Type**: application/json, multi-part/form-data
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getAgenciesByLocation**
> \Swagger\Client\Model\AgenciesResponse getAgenciesByLocation($origin, $radius)



Gets all agencies near a zip code

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: leadmon_auth
Swagger\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$api_instance = new Swagger\Client\Api\AgencyApi();
$origin = "origin_example"; // string | Location to search for
$radius = 789; // int | Initial max radius

try {
    $result = $api_instance->getAgenciesByLocation($origin, $radius);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AgencyApi->getAgenciesByLocation: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **origin** | **string**| Location to search for |
 **radius** | **int**| Initial max radius | [optional]

### Return type

[**\Swagger\Client\Model\AgenciesResponse**](../Model/AgenciesResponse.md)

### Authorization

[leadmon_auth](../../README.md#leadmon_auth)

### HTTP request headers

 - **Content-Type**: application/json, multi-part/form-data
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getAgency**
> \Swagger\Client\Model\AgencyResponse getAgency($id)



Gets an agencies

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: leadmon_auth
Swagger\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$api_instance = new Swagger\Client\Api\AgencyApi();
$id = 789; // int | Agency to get

try {
    $result = $api_instance->getAgency($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AgencyApi->getAgency: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**| Agency to get |

### Return type

[**\Swagger\Client\Model\AgencyResponse**](../Model/AgencyResponse.md)

### Authorization

[leadmon_auth](../../README.md#leadmon_auth)

### HTTP request headers

 - **Content-Type**: application/json, multi-part/form-data
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getLeadAssignableAgencies**
> \Swagger\Client\Model\AgenciesResponse getLeadAssignableAgencies($id)



Gets all agencies that can serve this leads zip code

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: leadmon_auth
Swagger\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$api_instance = new Swagger\Client\Api\AgencyApi();
$id = 56; // int | Lead id

try {
    $result = $api_instance->getLeadAssignableAgencies($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AgencyApi->getLeadAssignableAgencies: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**| Lead id |

### Return type

[**\Swagger\Client\Model\AgenciesResponse**](../Model/AgenciesResponse.md)

### Authorization

[leadmon_auth](../../README.md#leadmon_auth)

### HTTP request headers

 - **Content-Type**: application/json, multi-part/form-data
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **selectLocations**
> \Swagger\Client\Model\LocationsResponse selectLocations($location_ids)



Gets locations by ID

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: leadmon_auth
Swagger\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$api_instance = new Swagger\Client\Api\AgencyApi();
$location_ids = new \Swagger\Client\Model\SelectLocationsRequest(); // \Swagger\Client\Model\SelectLocationsRequest | Locations to fetch

try {
    $result = $api_instance->selectLocations($location_ids);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AgencyApi->selectLocations: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **location_ids** | [**\Swagger\Client\Model\SelectLocationsRequest**](../Model/\Swagger\Client\Model\SelectLocationsRequest.md)| Locations to fetch |

### Return type

[**\Swagger\Client\Model\LocationsResponse**](../Model/LocationsResponse.md)

### Authorization

[leadmon_auth](../../README.md#leadmon_auth)

### HTTP request headers

 - **Content-Type**: application/json, multi-part/form-data
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **updateAgency**
> \Swagger\Client\Model\AgencyResponse updateAgency($id, $agency)



update agency attributes

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: leadmon_auth
Swagger\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$api_instance = new Swagger\Client\Api\AgencyApi();
$id = 789; // int | ID for the agency
$agency = new \Swagger\Client\Model\AgencyRequest(); // \Swagger\Client\Model\AgencyRequest | Agency attributes to update

try {
    $result = $api_instance->updateAgency($id, $agency);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AgencyApi->updateAgency: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**| ID for the agency |
 **agency** | [**\Swagger\Client\Model\AgencyRequest**](../Model/\Swagger\Client\Model\AgencyRequest.md)| Agency attributes to update | [optional]

### Return type

[**\Swagger\Client\Model\AgencyResponse**](../Model/AgencyResponse.md)

### Authorization

[leadmon_auth](../../README.md#leadmon_auth)

### HTTP request headers

 - **Content-Type**: application/json, multi-part/form-data
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **updateAgencyLogo**
> \Swagger\Client\Model\AgencyResponse updateAgencyLogo($id, $logo)



update agency logo

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: leadmon_auth
Swagger\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$api_instance = new Swagger\Client\Api\AgencyApi();
$id = 789; // int | ID for the agency
$logo = "/path/to/file.txt"; // \SplFileObject | 

try {
    $result = $api_instance->updateAgencyLogo($id, $logo);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AgencyApi->updateAgencyLogo: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**| ID for the agency |
 **logo** | **\SplFileObject**|  | [optional]

### Return type

[**\Swagger\Client\Model\AgencyResponse**](../Model/AgencyResponse.md)

### Authorization

[leadmon_auth](../../README.md#leadmon_auth)

### HTTP request headers

 - **Content-Type**: multipart/form-data
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **updateLocation**
> \Swagger\Client\Model\LocationResponse updateLocation($id, $location)



update location attributes

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: leadmon_auth
Swagger\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$api_instance = new Swagger\Client\Api\AgencyApi();
$id = 789; // int | ID for the location
$location = new \Swagger\Client\Model\LocationRequest(); // \Swagger\Client\Model\LocationRequest | Location attributes to update

try {
    $result = $api_instance->updateLocation($id, $location);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AgencyApi->updateLocation: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**| ID for the location |
 **location** | [**\Swagger\Client\Model\LocationRequest**](../Model/\Swagger\Client\Model\LocationRequest.md)| Location attributes to update | [optional]

### Return type

[**\Swagger\Client\Model\LocationResponse**](../Model/LocationResponse.md)

### Authorization

[leadmon_auth](../../README.md#leadmon_auth)

### HTTP request headers

 - **Content-Type**: application/json, multi-part/form-data
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

