# slim-controller

[![Build Status](https://api.travis-ci.org/arekwiertlewski/slim-controller.svg?branch=master)](https://travis-ci.org/arekwiertlewski/slim-controller)

Controller for Slim Framework 3

## Install

Via Composer

``` bash
$ composer require arek/slim-controller
```

## Usage

Can be use with Slim Framework 3.

Add Controller to Slim Container.
```
$container['controller'] = function ($container) {
    return new \Arek\Slim\Controller\Controller($container);
};
```

Add Controller action to Slim Route.
```
$app->get('/', 'controller:App_Action_Home_Index');
```

Create Action.
```
<?php

namespace App\Action\Home;

class Index
{
    public function __invoke($container, $req, $res, $args)
    {
        // action code here
    }
}
```

## License

The MIT License (MIT). Please see [License File](LICENSE.md) for more information.
