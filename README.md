<p align="center">
    <a href="https://highsidelabs.co" target="_blank">
        <img src="https://github.com/highsidelabs/.github/blob/main/images/logo.png?raw=true" width="125">
    </a>
</p>

<p align="center">
    <a href="https://packagist.org/packages/highsidelabs/amazon-business-api"><img alt="Total downloads" src="https://img.shields.io/packagist/dt/highsidelabs/amazon-business-api.svg?style=flat-square"></a>
    <a href="https://packagist.org/packages/highsidelabs/amazon-business-api"><img alt="Latest stable version" src="https://img.shields.io/packagist/v/highsidelabs/amazon-business-api.svg?style=flat-square"></a>
    <a href="https://packagist.org/packages/highsidelabs/amazon-business-api"><img alt="License" src="https://img.shields.io/packagist/l/highsidelabs/amazon-business-api.svg?style=flat-square"></a>
</p>

## Amazon Business API for PHP
A PHP library for connecting to Amazon's [Business API](https://developer-docs.amazon.com/amazon-business/).

### Related packages

* [`jlevers/selling-partner-api`](https://github.com/jlevers/selling-partner-api): A PHP library for Amazon's [Selling Partner API](https://developer-docs.amazon.com/sp-api/docs), with a near-identical interface to this package. Our most popular package.
* [`highsidelabs/laravel-spapi`](https://github.com/highsidelabs/laravel-spapi): An Laravel wrapper for the package above, making SP API integration in Laravel projects quick and easy.

---

**This package is developed and maintained by [Highside Labs](https://highsidelabs.co). If you need support integrating with Amazon's (or any other e-commerce platform's) APIs, we're happy to help! Shoot us an email at [hi@highsidelabs.co](mailto:hi@highsidelabs.co). We'd love to hear from you :)**

If you've found any of our packages useful, please consider [becoming a Sponsor](https://github.com/sponsors/highsidelabs), or making a donation via the button below. We appreciate any and all support you can provide!

<p align="center">
    <a href="https://www.paypal.com/donate/?hosted_button_id=FG8Q6MNB4HJCC"><img alt="Donate to Highside Labs" src="https://www.paypalobjects.com/en_US/i/btn/btn_donateCC_LG.gif"></a>
</p>

---

_(There is a more in-depth guide to using this package on our blog, [here](https://www.highsidelabs.co/blog/amazon-business-api).)_

## Features

* Supports all Amazon Business API operations as of 11/13/2022 ([see here](#supported-api-segments) for links to documentation for all calls)
* Supports applications made with both IAM user and IAM role ARNs ([docs](#setup))


## Installation

`composer require highsidelabs/amazon-business-api`


## Table of Contents 

Check out the [Getting Started](#getting-started) section below for a quick overview.

This README is divided into several sections:
* [Setup](#setup)
    * [Configuration options](#configuration-options)
* [Examples](#examples)
* [Debug mode](#debug-mode)
* [Supported API segments](#supported-api-segments)
* [Working with model classes](#working-with-model-classes)
* [Response headers](#response-headers)
* [Custom request authorization](#custom-authorization-signer)
* [Custom request signing](#custom-request-signer)

## Getting Started

We wrote a blog post with more detailed instructions on connecting to the Amazon Business API [here](https://www.highsidelabs.co/blog/amazon-business-api). Check it out if you need more help getting set up.

### Prerequisites

You need a few things to get started:
* A Amazon Business API developer account
* An AWS IAM user or role configured for use with the Amazon Business API
* An Amazon Business API application

If you're looking for more information on how to set those things up, check out [this blog post](https://jesseevers.com/selling-partner-api-access/). It provides a detailed walkthrough of the whole setup process. That guide refers to the Selling Partner API, but all the setup steps are the same for the Amazon Business API.


### Setup

The [`Configuration`](https://github.com/highsidelabs/amazon-business-api/blob/main/lib/Configuration.php) constructor takes a single argument: an associative array with all the configuration information that's needed to connect to the Amazon Business API:

```php
$config = new AmazonBusinessApi\Configuration([
    'lwaClientId' => '<LWA client ID>',
    'lwaClientSecret' => '<LWA client secret>',
    'lwaRefreshToken' => '<LWA refresh token>',
    'awsAccessKeyId' => '<AWS access key ID>',
    'awsSecretAccessKey' => '<AWS secret access key>',
    // If you're not working in the North American marketplace, change
    // this to another endpoint from lib/Endpoint.php
    'endpoint' => AmazonBusinessApi\Endpoint::NA,
]);
```

If you created your Amazon Business API application using an IAM role ARN instead of a user ARN, pass that role ARN in the configuration array:

```php
$config = new AmazonBusinessApi\Configuration([
    'lwaClientId' => '<LWA client ID>',
    'lwaClientSecret' => '<LWA client secret>',
    'lwaRefreshToken' => '<LWA refresh token>',
    'awsAccessKeyId' => '<AWS access key ID>',
    'awsSecretAccessKey' => '<AWS secret access key>',
    // If you're not working in the North American marketplace, change
    // this to another endpoint from lib/Endpoint.php
    'endpoint' => AmazonBusinessApi\Endpoint::NA,
    'roleArn' => '<Role ARN>',
]);
```

Getter and setter methods exist for the `Configuration` class's `lwaClientId`, `lwaClientSecret`, `lwaRefreshToken`, `awsAccessKeyId`, `awsSecretAccessKey`, and `endpoint` properties. The methods are named in accordance with the name of the property they interact with: `getLwaClientId`, `setLwaClientId`, `getLwaClientSecret`, etc.

`$config` can then be passed into the constructor of any `AmazonBusinessApi\Api\*Api` class. See the `Example` section for a complete example.

##### Configuration options

The array passed to the `Configuration` constructor accepts the following keys:

* `lwaClientId (string)`: Required. The LWA client ID of the SP API application to use to execute API requests.
* `lwaClientSecret (string)`: Required. The LWA client secret of the SP API application to use to execute API requests.
* `lwaRefreshToken (string)`: Required. The LWA refresh token of the SP API application to use to execute API requests.
* `awsAccessKeyId (string)`: Required. AWS IAM user Access Key ID with SP API ExecuteAPI permissions.
* `awsSecretAccessKey (string)`: Required. AWS IAM user Secret Access Key with SP API ExecuteAPI permissions.
* `endpoint (array)`: Required. An array containing a `url` key (the endpoint URL) and a `region` key (the AWS region). There are predefined constants for these arrays in [`lib/Endpoint.php`](https://github.com/highsidelabs/amazon-business-api/blob/main/lib/Endpoint.php): (`NA`, `EU`, and `FE`. See [here](https://developer-docs.amazon.com/amazon-business/docs/ab-api-endpoints) for more details.
* `accessToken (string)`: An access token generated from the refresh token.
* `accessTokenExpiration (int)`: A Unix timestamp corresponding to the time when the `accessToken` expires. If `accessToken` is given, `accessTokenExpiration` is required (and vice versa).
* `onUpdateCredentials (callable|Closure)`: A callback function to call when a new access token is generated. The function should accept a single argument of type [`AmazonBusinessApi\Credentials`](https://github.com/highsidelabs/amazon-business-api/blob/main/lib/Credentials.php).
* `roleArn (string)`: If you set up your Amazon Business API application with an AWS IAM role ARN instead of a user ARN, pass that ARN here.
* `authenticationClient (GuzzleHttp\ClientInterface)`: Optional `GuzzleHttp\ClientInterface` object that will be used to generate the access token from the refresh token
* `authorizationSigner (AmazonBusinessApi\Contract\AuthorizationSignerContract)`: Optional `AmazonBusinessApi\Contract\AuthorizationSignerContract` implementation. See [Custom Authorization Signer](#custom-authorization-signer) section
* `requestSigner (AmazonBusinessApi\Contract\RequestSignerContract)`: Optional `AmazonBusinessApi\Contract\RequestSignerContract` implementation. See [Custom Request Signer](#custom-request-signer) section.

### Examples

This example assumes you have access to the `Product Search` Amazon Business API role, but the general format applies to any Amazon Business API request.

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

use AmazonBusinessApi\Api\ProductSearchV20200826Api as ProductSearchApi;
use AmazonBusinessApi\Configuration;
use AmazonBusinessApi\Endpoint;

$config = new Configuration([
    'lwaClientId' => 'amzn1.application-oa2-client.....',
    'lwaClientSecret' => 'abcd....',
    'lwaRefreshToken' => 'Aztr|IwEBI....',
    'awsAccessKeyId' => 'AKIA....',
    'awsSecretAccessKey' => 'ABCD....',
    // If you're not working in the North American marketplace, change
    // this to another endpoint from lib/Endpoint.php
    'endpoint' => Endpoint::NA
]);

$api = new ProductSearchApi($config);
try {
    $result = $api->productsRequest('B0B96H7LGX', 'US', 'en_US', 'johndoe@acmecorp.com');
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProductSearchApi->productsRequest: ', $e->getMessage(), PHP_EOL;
}

?>
```

### Debug mode

To get debugging output when you make an API request, you can call `$config->setDebug(true)`. By default, debug output goes to `stdout` via `php://output`, but you can redirect it a file with `$config->setDebugFile('<path>')`.

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

use AmazonBusinessApi\Configuration;

$config = new Configuration([/* ... */]);
$config->setDebug(true);
// To redirect debug info to a file:
$config->setDebugFile('./debug.log');
```


## Supported API segments

Each API class name contains the API's version. This allows for multiple versions of the same API to be accessible in a single version of this package. It makes the class names a little uglier, but allows for simultaneously using new and old versions of the same API segment, which is often useful. The uglier names can be remedied by formatting `use` statements like so:

```php
use AmazonBusinessApi\Api\ProductSearchV20200826Api as ProductSearchApi;
use AmazonBusinessApi\Model\ProductSearchV20200826 as ProductSearch;
```

It also means that if a new version of an existing API is introduced, the library can be updated to include that new version without introducing breaking changes.

* [Invoice Download API (v2021-09-30)](https://github.com/highsidelabs/amazon-business-api/blob/main/docs/Api/InvoiceDownloadV20210930Api.md)
* [Product Search API (v2021-08-26)](https://github.com/highsidelabs/amazon-business-api/blob/main/docs/Api/ProductSearchV20210826Api.md)
* [Reconciliation API (v2021-01-08)](https://github.com/highsidelabs/amazon-business-api/blob/main/docs/Api/ReconciliationV20210108Api.md)
* [Reporting API (v2021-01-08)](https://github.com/highsidelabs/amazon-business-api/blob/main/docs/Api/ReportingV20210108API.md)
* [User Management API (v2021-08-30)](https://github.com/highsidelabs/amazon-business-api/blob/main/docs/Api/UserManagementV20210830.md)


## Working with model classes

Most operations have one or more models associated with it. These models are classes that contain the data needed to make a certain kind of request to the API, or contain the data returned by a given request type. All of the models share the same general interface: you can either specify all the model's attributes during initialization, or set each attribute after the fact. Here's an example using the User Management API's `AccountHolder` model ([docs](https://github.com/highsidelabs/amazon-business-api/blob/main/docs/Model/UserManagementV20210830Api/AccountHolder.md), ([source](https://github.com/highsidelabs/amazon-business-api/blob/main/lib/Model/UserManagementV20210830Api/AccountHolder.php)).

The `AccountHolder` model has three attributes: `email`, `given_name`, and `family_name`. (If you're wondering how to figure out which attributes a model has on your own, check out the `docs` link above.) To create an instance of the `AccountHolder` model with all those attributes set:

```php
$accountHolder = new AmazonBusinessApi\Model\UserManagementV20210830Api\AccountHolder([
    'email' => 'janedoe@acmecorp.com',
    'given_name' => 'Jane',
    'family_name' => 'Doe'
]);
```

Alternatively, you can create an instance of the `Buyer` model and then populate its fields:

```php
$accountHolder = new AmazonBusinessApi\Model\UserManagementV20210830Api\AccountHolder();
$accountHolder->email = 'janedoe@acmecorp.com';
$accountHolder->givenName = 'Jane';
$accountHolder->familyName = 'Doe';
```

Each model also has the property accessors you might expect:

```php
$accountHolder->email;          // -> 'janedoe@acmecorp.com'
$accountHolder->givenName;      // -> 'Jane'
$accountHolder->familyName;     // -> 'Doe'
```

Models can (and usually do) have other models as attributes:

``` php
$requestBody = new AmazonBusinessApi\Model\UserManagementV20210830Api\CreateBusinessUserAccountRequest([
    // ...
    'account_holder' => $accountHolder,
    // ...
]);

$requestBody->accountHolder;        // -> [AccountHolder instance]
$requestBody->requestBody->email;  // -> 'janedoe@acmecorp.com'
```


## Response headers
Amazon includes some useful headers with each SP API response. If you need those for any reason, you can get an associative array of response headers by calling `getHeaders()` on the response object. For instance:

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

use AmazonBusinessApi\Api\ProductSearchV20200826Api as ProductSearchApi;
use AmazonBusinessApi\Configuration;
use AmazonBusinessApi\Endpoint;

$config = new Configuration([...]);
$api = new ProductSearchApi($config);
try {
    $result = $api->productsRequest('B0B96H7LGX', 'US', 'en_US', 'johndoe@acmecorp.com');
    $headers = $result->headers;
    print_r($headers);
} catch (Exception $e) {
    echo 'Exception when calling ProductSearchApi->productsRequest: ', $e->getMessage(), PHP_EOL;
}
```

## Custom Authorization Signer
You may need to do custom operations while signing the API request. You can create a custom authorization signer by creating an implementation of the [AuthorizationSignerContract](lib/Contract/AuthorizationSignerContract.php) interface and passing it into the `Configuration` constructor array.

```php
// CustomAuthorizationSigner.php
use GuzzleHttp\Psr7\Request;
use AmazonBusinessApi\Contract\AuthorizationSignerContract;

class CustomAuthorizationSigner implements AuthorizationSignerContract
{
    public function sign(Request $request, Credentials $credentials): Request
    {
        // Calculate request signature and request date.
        
        $requestDate = '20220426T202300Z';
        $signatureHeaderValue = 'some calculated signature value';
        
        $signedRequest = $request
            ->withHeader('Authorization', $signatureHeaderValue)
            ->withHeader('x-amz-date', $requestDate);
        
        return $signedRequest;
    }

    // ...
}

// Consumer code
<?php
require_once(__DIR__ . '/vendor/autoload.php');

use AmazonBusinessApi\Api\ProductSearchV20200826Api as ProductSearchApi;
use AmazonBusinessApi\Configuration;
use AmazonBusinessApi\Endpoint;
use CustomAuthorizationSigner;

$config = new Configuration([
    ..., 
    'authorizationSigner' => new CustomAuthorizationSigner(),
]);
$api = new ProductSearchApi($config);
try {
    $result = $api->productsRequest('B0B96H7LGX', 'US', 'en_US', 'johndoe@acmecorp.com');
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProductSearchApi->productsRequest: ', $e->getMessage(), PHP_EOL;
}
```

## Custom Request Signer
You may also need to customize the entire request signing process – for instance, if you need to call an external service in the process of signing the request. You can do so by creating an implementation of the [RequestSignerContract](lib/Contract/RequestSignerContract.php) interface, and passing an instance of it into the `Configuration` constructor array.

```php
// RemoteRequestSigner.php
use GuzzleHttp\Psr7\Request;
use AmazonBusinessApi\Contract\RequestSignerContract;

class RemoteRequestSigner implements RequestSignerContract
{
    public function signRequest(Request $request): Request {
        // Sign request by sending HTTP call
        // to external/separate service instance.
        
        return $signedRequest;
    }
}

// Consumer code
<?php
require_once(__DIR__ . '/vendor/autoload.php');

use AmazonBusinessApi\Api\ProductSearchV20200826Api as ProductSearchApi;
use AmazonBusinessApi\Configuration;
use AmazonBusinessApi\Endpoint;
use RemoteRequestSigner;

$config = new Configuration([
    ..., 
    'requestSigner' => new RemoteRequestSigner(),
]);
$api = new ProductSearchApi($config);
try {
    $result = $api->productsRequest('B0B96H7LGX', 'US', 'en_US', 'johndoe@acmecorp.com');
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProductSearchApi->productsRequest: ', $e->getMessage(), PHP_EOL;
}
```
