<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the public 'PrestaShop\PrestaShop\Adapter\Cache\Clearer\DoctrineCacheClearer' shared service.

return $this->services['PrestaShop\\PrestaShop\\Adapter\\Cache\\Clearer\\DoctrineCacheClearer'] = new \PrestaShop\PrestaShop\Adapter\Cache\Clearer\DoctrineCacheClearer(($this->services['doctrine.cache.provider'] ?? $this->getDoctrine_Cache_ProviderService()));
