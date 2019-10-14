# Swagger\Client\Contact_usApi

All URIs are relative to *https://devleadmon.dev.aws.glic.com/*

Method | HTTP request | Description
------------- | ------------- | -------------
[**addInquiry**](Contact_usApi.md#addInquiry) | **POST** /inquiries | 
[**getInquiryTopics**](Contact_usApi.md#getInquiryTopics) | **GET** /inquiry_topics | 


# **addInquiry**
> \Swagger\Client\Model\InquiryResponse addInquiry($inquiry)



Creates a new inquiry

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: leadmon_auth
Swagger\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$api_instance = new Swagger\Client\Api\Contact_usApi();
$inquiry = new \Swagger\Client\Model\InquiryRequest(); // \Swagger\Client\Model\InquiryRequest | Inquiry to create

try {
    $result = $api_instance->addInquiry($inquiry);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling Contact_usApi->addInquiry: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **inquiry** | [**\Swagger\Client\Model\InquiryRequest**](../Model/\Swagger\Client\Model\InquiryRequest.md)| Inquiry to create |

### Return type

[**\Swagger\Client\Model\InquiryResponse**](../Model/InquiryResponse.md)

### Authorization

[leadmon_auth](../../README.md#leadmon_auth)

### HTTP request headers

 - **Content-Type**: application/json, multi-part/form-data
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getInquiryTopics**
> \Swagger\Client\Model\InquiryTopicsResponse getInquiryTopics()



Gets inquiry topics

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: leadmon_auth
Swagger\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$api_instance = new Swagger\Client\Api\Contact_usApi();

try {
    $result = $api_instance->getInquiryTopics();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling Contact_usApi->getInquiryTopics: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters
This endpoint does not need any parameter.

### Return type

[**\Swagger\Client\Model\InquiryTopicsResponse**](../Model/InquiryTopicsResponse.md)

### Authorization

[leadmon_auth](../../README.md#leadmon_auth)

### HTTP request headers

 - **Content-Type**: application/json, multi-part/form-data
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

