<?php

class ModuleRepository_091bb2f extends \PrestaShop\PrestaShop\Core\Module\ModuleRepository implements \ProxyManager\Proxy\VirtualProxyInterface
{
    /**
     * @var \PrestaShop\PrestaShop\Core\Module\ModuleRepository|null wrapped object, if the proxy is initialized
     */
    private $valueHolder62a41 = null;

    /**
     * @var \Closure|null initializer responsible for generating the wrapped object
     */
    private $initializer23b81 = null;

    /**
     * @var bool[] map of public properties of the parent class
     */
    private static $publicProperties50eff = [
        
    ];

    public function getList() : \PrestaShop\PrestaShop\Core\Module\ModuleCollection
    {
        $this->initializer23b81 && ($this->initializer23b81->__invoke($valueHolder62a41, $this, 'getList', array(), $this->initializer23b81) || 1) && $this->valueHolder62a41 = $valueHolder62a41;

        return $this->valueHolder62a41->getList();
    }

    public function getInstalledModules() : \PrestaShop\PrestaShop\Core\Module\ModuleCollection
    {
        $this->initializer23b81 && ($this->initializer23b81->__invoke($valueHolder62a41, $this, 'getInstalledModules', array(), $this->initializer23b81) || 1) && $this->valueHolder62a41 = $valueHolder62a41;

        return $this->valueHolder62a41->getInstalledModules();
    }

    public function getMustBeConfiguredModules() : \PrestaShop\PrestaShop\Core\Module\ModuleCollection
    {
        $this->initializer23b81 && ($this->initializer23b81->__invoke($valueHolder62a41, $this, 'getMustBeConfiguredModules', array(), $this->initializer23b81) || 1) && $this->valueHolder62a41 = $valueHolder62a41;

        return $this->valueHolder62a41->getMustBeConfiguredModules();
    }

    public function getUpgradableModules() : \PrestaShop\PrestaShop\Core\Module\ModuleCollection
    {
        $this->initializer23b81 && ($this->initializer23b81->__invoke($valueHolder62a41, $this, 'getUpgradableModules', array(), $this->initializer23b81) || 1) && $this->valueHolder62a41 = $valueHolder62a41;

        return $this->valueHolder62a41->getUpgradableModules();
    }

    public function getModule(string $moduleName) : \PrestaShop\PrestaShop\Core\Module\ModuleInterface
    {
        $this->initializer23b81 && ($this->initializer23b81->__invoke($valueHolder62a41, $this, 'getModule', array('moduleName' => $moduleName), $this->initializer23b81) || 1) && $this->valueHolder62a41 = $valueHolder62a41;

        return $this->valueHolder62a41->getModule($moduleName);
    }

    public function getModulePath(string $moduleName) : ?string
    {
        $this->initializer23b81 && ($this->initializer23b81->__invoke($valueHolder62a41, $this, 'getModulePath', array('moduleName' => $moduleName), $this->initializer23b81) || 1) && $this->valueHolder62a41 = $valueHolder62a41;

        return $this->valueHolder62a41->getModulePath($moduleName);
    }

    public function setActionUrls(\PrestaShop\PrestaShop\Core\Module\ModuleCollection $collection) : \PrestaShop\PrestaShop\Core\Module\ModuleCollection
    {
        $this->initializer23b81 && ($this->initializer23b81->__invoke($valueHolder62a41, $this, 'setActionUrls', array('collection' => $collection), $this->initializer23b81) || 1) && $this->valueHolder62a41 = $valueHolder62a41;

        return $this->valueHolder62a41->setActionUrls($collection);
    }

    public function clearCache(?string $moduleName = null, bool $allShops = false) : bool
    {
        $this->initializer23b81 && ($this->initializer23b81->__invoke($valueHolder62a41, $this, 'clearCache', array('moduleName' => $moduleName, 'allShops' => $allShops), $this->initializer23b81) || 1) && $this->valueHolder62a41 = $valueHolder62a41;

        return $this->valueHolder62a41->clearCache($moduleName, $allShops);
    }

    /**
     * Constructor for lazy initialization
     *
     * @param \Closure|null $initializer
     */
    public static function staticProxyConstructor($initializer)
    {
        static $reflection;

        $reflection = $reflection ?? new \ReflectionClass(__CLASS__);
        $instance   = $reflection->newInstanceWithoutConstructor();

        \Closure::bind(function (\PrestaShop\PrestaShop\Core\Module\ModuleRepository $instance) {
            unset($instance->moduleDataProvider, $instance->adminModuleDataProvider, $instance->hookManager, $instance->cacheProvider, $instance->modulePath, $instance->installedModules, $instance->modulesFromHook, $instance->contextLangId);
        }, $instance, 'PrestaShop\\PrestaShop\\Core\\Module\\ModuleRepository')->__invoke($instance);

        $instance->initializer23b81 = $initializer;

        return $instance;
    }

    public function __construct(\PrestaShop\PrestaShop\Adapter\Module\ModuleDataProvider $moduleDataProvider, \PrestaShop\PrestaShop\Adapter\Module\AdminModuleDataProvider $adminModuleDataProvider, \Doctrine\Common\Cache\CacheProvider $cacheProvider, \PrestaShop\PrestaShop\Adapter\HookManager $hookManager, string $modulePath, int $contextLangId)
    {
        static $reflection;

        if (! $this->valueHolder62a41) {
            $reflection = $reflection ?? new \ReflectionClass('PrestaShop\\PrestaShop\\Core\\Module\\ModuleRepository');
            $this->valueHolder62a41 = $reflection->newInstanceWithoutConstructor();
        \Closure::bind(function (\PrestaShop\PrestaShop\Core\Module\ModuleRepository $instance) {
            unset($instance->moduleDataProvider, $instance->adminModuleDataProvider, $instance->hookManager, $instance->cacheProvider, $instance->modulePath, $instance->installedModules, $instance->modulesFromHook, $instance->contextLangId);
        }, $this, 'PrestaShop\\PrestaShop\\Core\\Module\\ModuleRepository')->__invoke($this);

        }

        $this->valueHolder62a41->__construct($moduleDataProvider, $adminModuleDataProvider, $cacheProvider, $hookManager, $modulePath, $contextLangId);
    }

    public function & __get($name)
    {
        $this->initializer23b81 && ($this->initializer23b81->__invoke($valueHolder62a41, $this, '__get', ['name' => $name], $this->initializer23b81) || 1) && $this->valueHolder62a41 = $valueHolder62a41;

        if (isset(self::$publicProperties50eff[$name])) {
            return $this->valueHolder62a41->$name;
        }

        $realInstanceReflection = new \ReflectionClass('PrestaShop\\PrestaShop\\Core\\Module\\ModuleRepository');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder62a41;

            $backtrace = debug_backtrace(false, 1);
            trigger_error(
                sprintf(
                    'Undefined property: %s::$%s in %s on line %s',
                    $realInstanceReflection->getName(),
                    $name,
                    $backtrace[0]['file'],
                    $backtrace[0]['line']
                ),
                \E_USER_NOTICE
            );
            return $targetObject->$name;
        }

        $targetObject = $this->valueHolder62a41;
        $accessor = function & () use ($targetObject, $name) {
            return $targetObject->$name;
        };
        $backtrace = debug_backtrace(true, 2);
        $scopeObject = isset($backtrace[1]['object']) ? $backtrace[1]['object'] : new \ProxyManager\Stub\EmptyClassStub();
        $accessor = $accessor->bindTo($scopeObject, get_class($scopeObject));
        $returnValue = & $accessor();

        return $returnValue;
    }

    public function __set($name, $value)
    {
        $this->initializer23b81 && ($this->initializer23b81->__invoke($valueHolder62a41, $this, '__set', array('name' => $name, 'value' => $value), $this->initializer23b81) || 1) && $this->valueHolder62a41 = $valueHolder62a41;

        $realInstanceReflection = new \ReflectionClass('PrestaShop\\PrestaShop\\Core\\Module\\ModuleRepository');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder62a41;

            $targetObject->$name = $value;

            return $targetObject->$name;
        }

        $targetObject = $this->valueHolder62a41;
        $accessor = function & () use ($targetObject, $name, $value) {
            $targetObject->$name = $value;

            return $targetObject->$name;
        };
        $backtrace = debug_backtrace(true, 2);
        $scopeObject = isset($backtrace[1]['object']) ? $backtrace[1]['object'] : new \ProxyManager\Stub\EmptyClassStub();
        $accessor = $accessor->bindTo($scopeObject, get_class($scopeObject));
        $returnValue = & $accessor();

        return $returnValue;
    }

    public function __isset($name)
    {
        $this->initializer23b81 && ($this->initializer23b81->__invoke($valueHolder62a41, $this, '__isset', array('name' => $name), $this->initializer23b81) || 1) && $this->valueHolder62a41 = $valueHolder62a41;

        $realInstanceReflection = new \ReflectionClass('PrestaShop\\PrestaShop\\Core\\Module\\ModuleRepository');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder62a41;

            return isset($targetObject->$name);
        }

        $targetObject = $this->valueHolder62a41;
        $accessor = function () use ($targetObject, $name) {
            return isset($targetObject->$name);
        };
        $backtrace = debug_backtrace(true, 2);
        $scopeObject = isset($backtrace[1]['object']) ? $backtrace[1]['object'] : new \ProxyManager\Stub\EmptyClassStub();
        $accessor = $accessor->bindTo($scopeObject, get_class($scopeObject));
        $returnValue = $accessor();

        return $returnValue;
    }

    public function __unset($name)
    {
        $this->initializer23b81 && ($this->initializer23b81->__invoke($valueHolder62a41, $this, '__unset', array('name' => $name), $this->initializer23b81) || 1) && $this->valueHolder62a41 = $valueHolder62a41;

        $realInstanceReflection = new \ReflectionClass('PrestaShop\\PrestaShop\\Core\\Module\\ModuleRepository');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder62a41;

            unset($targetObject->$name);

            return;
        }

        $targetObject = $this->valueHolder62a41;
        $accessor = function () use ($targetObject, $name) {
            unset($targetObject->$name);

            return;
        };
        $backtrace = debug_backtrace(true, 2);
        $scopeObject = isset($backtrace[1]['object']) ? $backtrace[1]['object'] : new \ProxyManager\Stub\EmptyClassStub();
        $accessor = $accessor->bindTo($scopeObject, get_class($scopeObject));
        $accessor();
    }

    public function __clone()
    {
        $this->initializer23b81 && ($this->initializer23b81->__invoke($valueHolder62a41, $this, '__clone', array(), $this->initializer23b81) || 1) && $this->valueHolder62a41 = $valueHolder62a41;

        $this->valueHolder62a41 = clone $this->valueHolder62a41;
    }

    public function __sleep()
    {
        $this->initializer23b81 && ($this->initializer23b81->__invoke($valueHolder62a41, $this, '__sleep', array(), $this->initializer23b81) || 1) && $this->valueHolder62a41 = $valueHolder62a41;

        return array('valueHolder62a41');
    }

    public function __wakeup()
    {
        \Closure::bind(function (\PrestaShop\PrestaShop\Core\Module\ModuleRepository $instance) {
            unset($instance->moduleDataProvider, $instance->adminModuleDataProvider, $instance->hookManager, $instance->cacheProvider, $instance->modulePath, $instance->installedModules, $instance->modulesFromHook, $instance->contextLangId);
        }, $this, 'PrestaShop\\PrestaShop\\Core\\Module\\ModuleRepository')->__invoke($this);
    }

    public function setProxyInitializer(\Closure $initializer = null) : void
    {
        $this->initializer23b81 = $initializer;
    }

    public function getProxyInitializer() : ?\Closure
    {
        return $this->initializer23b81;
    }

    public function initializeProxy() : bool
    {
        return $this->initializer23b81 && ($this->initializer23b81->__invoke($valueHolder62a41, $this, 'initializeProxy', array(), $this->initializer23b81) || 1) && $this->valueHolder62a41 = $valueHolder62a41;
    }

    public function isProxyInitialized() : bool
    {
        return null !== $this->valueHolder62a41;
    }

    public function getWrappedValueHolderValue()
    {
        return $this->valueHolder62a41;
    }
}
