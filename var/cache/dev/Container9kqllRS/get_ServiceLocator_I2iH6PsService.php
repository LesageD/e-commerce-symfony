<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the private '.service_locator.I2iH6Ps' shared service.

return $this->privates['.service_locator.I2iH6Ps'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($this->getService, [
    'cartTools' => ['privates', 'App\\Tools\\Cart\\CartTools', 'getCartToolsService.php', true],
], [
    'cartTools' => 'App\\Tools\\Cart\\CartTools',
]);
