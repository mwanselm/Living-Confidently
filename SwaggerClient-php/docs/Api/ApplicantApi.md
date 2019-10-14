# Swagger\Client\ApplicantApi

All URIs are relative to *https://devleadmon.dev.aws.glic.com/*

Method | HTTP request | Description
------------- | ------------- | -------------
[**addApplicant**](ApplicantApi.md#addApplicant) | **POST** /applicants | 
[**updateApplicantResume**](ApplicantApi.md#updateApplicantResume) | **POST** /applicants/{id}/resume | 


# **addApplicant**
> \Swagger\Client\Model\ApplicantResponse addApplicant($applicant)



Creates a new applicant

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: leadmon_auth
Swagger\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$api_instance = new Swagger\Client\Api\ApplicantApi();
$applicant = new \Swagger\Client\Model\ApplicantRequest(); // \Swagger\Client\Model\ApplicantRequest | Applicant to create

try {
    $result = $api_instance->addApplicant($applicant);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ApplicantApi->addApplicant: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **applicant** | [**\Swagger\Client\Model\ApplicantRequest**](../Model/\Swagger\Client\Model\ApplicantRequest.md)| Applicant to create |

### Return type

[**\Swagger\Client\Model\ApplicantResponse**](../Model/ApplicantResponse.md)

### Authorization

[leadmon_auth](../../README.md#leadmon_auth)

### HTTP request headers

 - **Content-Type**: application/json, multi-part/form-data
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **updateApplicantResume**
> \Swagger\Client\Model\ApplicantResponse updateApplicantResume($id, $resume)



update applicant resume

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: leadmon_auth
Swagger\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$api_instance = new Swagger\Client\Api\ApplicantApi();
$id = 789; // int | ID for the applicant
$resume = "/path/to/file.txt"; // \SplFileObject | 

try {
    $result = $api_instance->updateApplicantResume($id, $resume);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ApplicantApi->updateApplicantResume: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**| ID for the applicant |
 **resume** | **\SplFileObject**|  | [optional]

### Return type

[**\Swagger\Client\Model\ApplicantResponse**](../Model/ApplicantResponse.md)

### Authorization

[leadmon_auth](../../README.md#leadmon_auth)

### HTTP request headers

 - **Content-Type**: multipart/form-data
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

