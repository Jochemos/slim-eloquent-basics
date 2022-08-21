<?php

use Slim\Factory\AppFactory;
use Psr\Http\Message\ResponseFactoryInterface as ResponseFactoryInterface;

require 'vendor/autoload.php';


# app instance
$app = AppFactory::create();

# Database setup
App\Config\Dependencies::getContainer()->setUpDatabase();

# routing
require_once 'routes.php';


$app->run();

?>
