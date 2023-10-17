<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the public 'prestashop.core.currency.exchange_rate.settings' shared service.

$this->services['prestashop.core.currency.exchange_rate.settings'] = $instance = new \PrestaShop\CircuitBreaker\FactorySettings(3, 1, 3600);

$instance->setStrippedFailures(3);
$instance->setStrippedTimeout(2);
$instance->setStorage(($this->services['prestashop.core.circuit_breaker.storage'] ?? $this->load('getPrestashop_Core_CircuitBreaker_StorageService.php')));

return $instance;