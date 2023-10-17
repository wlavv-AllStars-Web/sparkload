<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the public 'PrestaShop\PrestaShop\Core\Domain\Product\Image\Provider\ProductImageProviderInterface' shared autowired service.

return $this->services['PrestaShop\\PrestaShop\\Core\\Domain\\Product\\Image\\Provider\\ProductImageProviderInterface'] = new \PrestaShop\PrestaShop\Adapter\Product\Image\ProductImageProvider(($this->services['PrestaShop\\PrestaShop\\Adapter\\Product\\Image\\Repository\\ProductImageRepository'] ?? $this->load('getProductImageRepositoryService.php')), ($this->privates['PrestaShop\\PrestaShop\\Adapter\\Product\\Combination\\Repository\\CombinationRepository'] ?? $this->load('getCombinationRepositoryService.php')), ($this->services['PrestaShop\\PrestaShop\\Adapter\\Product\\Image\\ProductImagePathFactory'] ?? $this->load('getProductImagePathFactoryService.php')));