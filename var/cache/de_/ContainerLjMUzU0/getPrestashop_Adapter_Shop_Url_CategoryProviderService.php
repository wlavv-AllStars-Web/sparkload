<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the public 'prestashop.adapter.shop.url.category_provider' shared service.

return $this->services['prestashop.adapter.shop.url.category_provider'] = new \PrestaShop\PrestaShop\Adapter\Shop\Url\CategoryProvider(($this->services['PrestaShop\\PrestaShop\\Adapter\\LegacyContext'] ?? $this->getLegacyContextService())->getContext()->link);