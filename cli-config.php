<?php

namespace CliConfig;

use Ilium\Ilium;
use Doctrine\ORM\EntityManager;
use Doctrine\ORM\Tools\Console\ConsoleRunner;

require_once __DIR__ . '/vendor/autoload.php';

$app = new Ilium();
return ConsoleRunner::createHelperSet($app->container->get(EntityManager::class));
