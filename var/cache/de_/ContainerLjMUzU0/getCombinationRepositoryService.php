<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the private 'PrestaShop\PrestaShop\Adapter\Product\Combination\Repository\CombinationRepository' shared autowired service.

return $this->privates['PrestaShop\\PrestaShop\\Adapter\\Product\\Combination\\Repository\\CombinationRepository'] = new \PrestaShop\PrestaShop\Adapter\Product\Combination\Repository\CombinationRepository(($this->services['doctrine.dbal.default_connection'] ?? $this->getDoctrine_Dbal_DefaultConnectionService()), 'spa_', ($this->services['PrestaShop\\PrestaShop\\Adapter\\Product\\Combination\\Validate\\CombinationValidator'] ?? ($this->services['PrestaShop\\PrestaShop\\Adapter\\Product\\Combination\\Validate\\CombinationValidator'] = new \PrestaShop\PrestaShop\Adapter\Product\Combination\Validate\CombinationValidator())), ($this->services['PrestaShop\\PrestaShop\\Adapter\\Attribute\\Repository\\AttributeRepository'] ?? $this->load('getAttributeRepositoryService.php')), ($this->services['PrestaShop\\PrestaShop\\Adapter\\Product\\Repository\\ProductRepository'] ?? $this->getProductRepositoryService()));
