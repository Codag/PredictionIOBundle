CodagPredictionIOBundle
==================

This bundle provides an [PredictionIO](http://prediction.io/) integration for your Symfony2 Project.

[![Build Status](https://travis-ci.org/Codag/PredictionIOBundle.png?branch=master)](https://travis-ci.org/Codag/PredictionIOBundle)
[![Total Downloads](https://poser.pugx.org/codag/predictionio-bundle/downloads.png)](https://packagist.org/packages/codag/predictionio-bundle)
[![Latest Stable Version](https://poser.pugx.org/codag/predictionio-bundle/v/stable.png)](https://packagist.org/packages/codag/predictionio-bundle)

**PredictionIO Methods Supported**

This Bundle is just a wrapper for the [PredictionIO-PHP-SDK](https://github.com/PredictionIO/PredictionIO-PHP-SDK) and will support all methods provided in the SDK.

## Installation

1. Add CodagPredictionIOBundle to your composer.json
2. Enable the bundle
3. Configure the bundle

### Step 1: Add CodagAlchemyApiBundle to your composer.json
```js
{
    "require": {
        "codag/predictionio-bundle": "dev-master"
    }
}
```

Update your project dependencies: 
```bash
php composer.phar update codag/predictionio-bundle
```

### Step 2: Enable the bundle
```php
<?php
// app/AppKernel.php

public function registerBundles()
{
    $bundles = array(
        // ...
        new Codag\PredictionIOBundle\CodagPredictionIOBundle(),
    );
}
```

### Step 3: Configure the bundle

Yml configuration:
```yaml
# app/config/config.yml

codag_prediction_io:
    app_key: Your App Key
    api_url: Your Api Url  # Optional

```

## Usage
This bundle provides the service `codag.predictionio`
```php
<?php
$client = $this->get('codag.predictionio')->getClient();
```

For further implementation examples please see also our [Sandbox](https://github.com/Codag/PredictionIOBundle-Sandbox).

##Contribute

If the bundle doesn't allow you to customize an option, I invite you to fork the project, create a feature branch, and send a pull request.

To ensure a consistent code base, you should make sure the code follows
the [Coding Standards](http://symfony.com/doc/current/contributing/code/standards.html).


##License

This bundle is under the MIT license. See the complete license [here](https://github.com/Codag/PredictionIOBundle/blob/master/Resources/meta/LICENSE).

