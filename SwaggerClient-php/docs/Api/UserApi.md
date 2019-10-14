# Swagger\Client\UserApi

All URIs are relative to *https://devleadmon.dev.aws.glic.com/*

Method | HTTP request | Description
------------- | ------------- | -------------
[**createDevice**](UserApi.md#createDevice) | **POST** /user/devices | 
[**currentUser**](UserApi.md#currentUser) | **GET** /user | 
[**disassociateDevice**](UserApi.md#disassociateDevice) | **DELETE** /devices/{id} | 
[**getAgencyUsers**](UserApi.md#getAgencyUsers) | **GET** /agencies/{agency_id}/users | 
[**getDeviceById**](UserApi.md#getDeviceById) | **GET** /devices/{id} | 
[**getNotifications**](UserApi.md#getNotifications) | **GET** /user/notifications | 
[**getUnreadNotifications**](UserApi.md#getUnreadNotifications) | **GET** /user/notifications/unread | 
[**getUserById**](UserApi.md#getUserById) | **GET** /users/{id} | 
[**getUserDevices**](UserApi.md#getUserDevices) | **GET** /user/devices | 
[**updateDevice**](UserApi.md#updateDevice) | **PUT** /devices/{id} | 
[**updateNotification**](UserApi.md#updateNotification) | **PUT** /user/notifications/{id} | 


# **createDevice**
> \Swagger\Client\Model\Device createDevice($device)



Creates a device and associates it with the current user

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: leadmon_auth
Swagger\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$api_instance = new Swagger\Client\Api\UserApi();
$device = new \Swagger\Client\Model\Device(); // \Swagger\Client\Model\Device | Attributes of device

try {
    $result = $api_instance->createDevice($device);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling UserApi->createDevice: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **device** | [**\Swagger\Client\Model\Device**](../Model/\Swagger\Client\Model\Device.md)| Attributes of device | [optional]

### Return type

[**\Swagger\Client\Model\Device**](../Model/Device.md)

### Authorization

[leadmon_auth](../../README.md#leadmon_auth)

### HTTP request headers

 - **Content-Type**: application/json, multi-part/form-data
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **currentUser**
> \Swagger\Client\Model\UserRespose currentUser()



Get information on the current user

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: leadmon_auth
Swagger\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$api_instance = new Swagger\Client\Api\UserApi();

try {
    $result = $api_instance->currentUser();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling UserApi->currentUser: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters
This endpoint does not need any parameter.

### Return type

[**\Swagger\Client\Model\UserRespose**](../Model/UserRespose.md)

### Authorization

[leadmon_auth](../../README.md#leadmon_auth)

### HTTP request headers

 - **Content-Type**: application/json, multi-part/form-data
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **disassociateDevice**
> \Swagger\Client\Model\Device disassociateDevice($id)



Deletes record associating a device to a user

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: leadmon_auth
Swagger\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$api_instance = new Swagger\Client\Api\UserApi();
$id = 789; // int | ID of the device

try {
    $result = $api_instance->disassociateDevice($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling UserApi->disassociateDevice: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**| ID of the device |

### Return type

[**\Swagger\Client\Model\Device**](../Model/Device.md)

### Authorization

[leadmon_auth](../../README.md#leadmon_auth)

### HTTP request headers

 - **Content-Type**: application/json, multi-part/form-data
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getAgencyUsers**
> \Swagger\Client\Model\UsersResponse getAgencyUsers($agency_id)



Get users at an agency

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: leadmon_auth
Swagger\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$api_instance = new Swagger\Client\Api\UserApi();
$agency_id = 789; // int | Agency to assign the lead to

try {
    $result = $api_instance->getAgencyUsers($agency_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling UserApi->getAgencyUsers: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **agency_id** | **int**| Agency to assign the lead to |

### Return type

[**\Swagger\Client\Model\UsersResponse**](../Model/UsersResponse.md)

### Authorization

[leadmon_auth](../../README.md#leadmon_auth)

### HTTP request headers

 - **Content-Type**: application/json, multi-part/form-data
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getDeviceById**
> \Swagger\Client\Model\Device getDeviceById($id)



Gets a device by its ID

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: leadmon_auth
Swagger\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$api_instance = new Swagger\Client\Api\UserApi();
$id = 789; // int | ID of the device

try {
    $result = $api_instance->getDeviceById($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling UserApi->getDeviceById: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**| ID of the device |

### Return type

[**\Swagger\Client\Model\Device**](../Model/Device.md)

### Authorization

[leadmon_auth](../../README.md#leadmon_auth)

### HTTP request headers

 - **Content-Type**: application/json, multi-part/form-data
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getNotifications**
> \Swagger\Client\Model\Notification[] getNotifications()



Get notifications for the current user

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: leadmon_auth
Swagger\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$api_instance = new Swagger\Client\Api\UserApi();

try {
    $result = $api_instance->getNotifications();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling UserApi->getNotifications: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters
This endpoint does not need any parameter.

### Return type

[**\Swagger\Client\Model\Notification[]**](../Model/Notification.md)

### Authorization

[leadmon_auth](../../README.md#leadmon_auth)

### HTTP request headers

 - **Content-Type**: application/json, multi-part/form-data
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getUnreadNotifications**
> \Swagger\Client\Model\Notification[] getUnreadNotifications()



Get unread notifications

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: leadmon_auth
Swagger\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$api_instance = new Swagger\Client\Api\UserApi();

try {
    $result = $api_instance->getUnreadNotifications();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling UserApi->getUnreadNotifications: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters
This endpoint does not need any parameter.

### Return type

[**\Swagger\Client\Model\Notification[]**](../Model/Notification.md)

### Authorization

[leadmon_auth](../../README.md#leadmon_auth)

### HTTP request headers

 - **Content-Type**: application/json, multi-part/form-data
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getUserById**
> \Swagger\Client\Model\User getUserById($id)



Get information on a user

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: leadmon_auth
Swagger\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$api_instance = new Swagger\Client\Api\UserApi();
$id = 789; // int | ID of the user

try {
    $result = $api_instance->getUserById($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling UserApi->getUserById: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**| ID of the user |

### Return type

[**\Swagger\Client\Model\User**](../Model/User.md)

### Authorization

[leadmon_auth](../../README.md#leadmon_auth)

### HTTP request headers

 - **Content-Type**: application/json, multi-part/form-data
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getUserDevices**
> \Swagger\Client\Model\Device[] getUserDevices()



Gets all devices associated with a user

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: leadmon_auth
Swagger\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$api_instance = new Swagger\Client\Api\UserApi();

try {
    $result = $api_instance->getUserDevices();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling UserApi->getUserDevices: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters
This endpoint does not need any parameter.

### Return type

[**\Swagger\Client\Model\Device[]**](../Model/Device.md)

### Authorization

[leadmon_auth](../../README.md#leadmon_auth)

### HTTP request headers

 - **Content-Type**: application/json, multi-part/form-data
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **updateDevice**
> \Swagger\Client\Model\Device updateDevice($id, $device)



Updates a device

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: leadmon_auth
Swagger\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$api_instance = new Swagger\Client\Api\UserApi();
$id = 789; // int | ID of the device
$device = new \Swagger\Client\Model\Device(); // \Swagger\Client\Model\Device | Device attributes to update

try {
    $result = $api_instance->updateDevice($id, $device);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling UserApi->updateDevice: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**| ID of the device |
 **device** | [**\Swagger\Client\Model\Device**](../Model/\Swagger\Client\Model\Device.md)| Device attributes to update | [optional]

### Return type

[**\Swagger\Client\Model\Device**](../Model/Device.md)

### Authorization

[leadmon_auth](../../README.md#leadmon_auth)

### HTTP request headers

 - **Content-Type**: application/json, multi-part/form-data
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **updateNotification**
> \Swagger\Client\Model\Notification updateNotification($id, $notification)



Update a notification

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: leadmon_auth
Swagger\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$api_instance = new Swagger\Client\Api\UserApi();
$id = 789; // int | ID of notification to update
$notification = new \Swagger\Client\Model\Notification(); // \Swagger\Client\Model\Notification | Notification fields to update

try {
    $result = $api_instance->updateNotification($id, $notification);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling UserApi->updateNotification: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**| ID of notification to update |
 **notification** | [**\Swagger\Client\Model\Notification**](../Model/\Swagger\Client\Model\Notification.md)| Notification fields to update | [optional]

### Return type

[**\Swagger\Client\Model\Notification**](../Model/Notification.md)

### Authorization

[leadmon_auth](../../README.md#leadmon_auth)

### HTTP request headers

 - **Content-Type**: application/json, multi-part/form-data
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

