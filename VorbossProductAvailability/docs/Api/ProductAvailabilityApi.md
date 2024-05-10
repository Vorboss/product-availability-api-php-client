# Vorboss\ProductAvailabilityApi

All URIs are relative to */*

Method | HTTP request | Description
------------- | ------------- | -------------
[**confirmPostcode**](ProductAvailabilityApi.md#confirmpostcode) | **GET** /product-availability/postcode/{postcode} | Check a postcode

# **confirmPostcode**
> \Vorboss\ProductAvailability\Postcode confirmPostcode($postcode)

Check a postcode

Check which products are available at the given postcode.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
    // Configure HTTP bearer authorization: bearerAuth
    $config = Vorboss\Configuration::getDefaultConfiguration()
    ->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Vorboss\ProductAvailability\ProductAvailabilityApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$postcode = "postcode_example"; // string | UK Postcode to check availability for.

try {
    $result = $apiInstance->confirmPostcode($postcode);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProductAvailabilityApi->confirmPostcode: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **postcode** | **string**| UK Postcode to check availability for. |

### Return type

[**\Vorboss\ProductAvailability\Postcode**](../Model/Postcode.md)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

