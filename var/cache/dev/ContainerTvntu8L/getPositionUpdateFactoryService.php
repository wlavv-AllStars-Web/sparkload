<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the public 'PrestaShop\PrestaShop\Core\Grid\Position\PositionUpdateFactory' shared service.

return $this->services['PrestaShop\\PrestaShop\\Core\\Grid\\Position\\PositionUpdateFactory'] = new \PrestaShop\PrestaShop\Core\Grid\Position\PositionUpdateFactory('positions', 'rowId', 'oldPosition', 'newPosition', 'parentId');