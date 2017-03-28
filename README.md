# SwaggerClient-php
Our Route Optimization API solves the so called vehicle routing problem fast. It calculates an optimal tour for a set of vehicles, services and constraints

This PHP package is automatically generated by the [Swagger Codegen](https://github.com/swagger-api/swagger-codegen) project:

- API version: 1.0
- Package version: 0.8-SNAPSHOT
- Build package: class io.swagger.codegen.languages.PhpClientCodegen

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
      "url": "https://github.com/graphhopper/directions-api-clients-route-optimization.git"
    }
  ],
  "require": {
    "graphhopper/directions-api-clients-route-optimization": "*@dev"
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

// Configure API key authorization: api_key
Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('key', 'Bearer');

$api_instance = new Swagger\Client\Api\SolutionApi();
$key = "key_example"; // string | your API key
$job_id = "job_id_example"; // string | Request solution with jobId

try {
    $result = $api_instance->getSolution($key, $job_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SolutionApi->getSolution: ', $e->getMessage(), PHP_EOL;
}

?>
```

## Documentation for API Endpoints

All URIs are relative to *https://graphhopper.com/api/1/vrp*

Class | Method | HTTP request | Description
------------ | ------------- | ------------- | -------------
*SolutionApi* | [**getSolution**](docs/Api/SolutionApi.md#getsolution) | **GET** /solution/{jobId} | Return the solution associated to the jobId
*VrpApi* | [**postVrp**](docs/Api/VrpApi.md#postvrp) | **POST** /optimize | Solves vehicle routing problems


## Documentation For Models

 - [Activity](docs/Model/Activity.md)
 - [Address](docs/Model/Address.md)
 - [Algorithm](docs/Model/Algorithm.md)
 - [CostMatrix](docs/Model/CostMatrix.md)
 - [JobId](docs/Model/JobId.md)
 - [ModelBreak](docs/Model/ModelBreak.md)
 - [Objective](docs/Model/Objective.md)
 - [Relation](docs/Model/Relation.md)
 - [Request](docs/Model/Request.md)
 - [Response](docs/Model/Response.md)
 - [Route](docs/Model/Route.md)
 - [Service](docs/Model/Service.md)
 - [Shipment](docs/Model/Shipment.md)
 - [Solution](docs/Model/Solution.md)
 - [SolutionUnassigned](docs/Model/SolutionUnassigned.md)
 - [Stop](docs/Model/Stop.md)
 - [TimeWindow](docs/Model/TimeWindow.md)
 - [Vehicle](docs/Model/Vehicle.md)
 - [VehicleType](docs/Model/VehicleType.md)


## Documentation For Authorization


## api_key

- **Type**: API key
- **API key parameter name**: key
- **Location**: URL query string


## Author




