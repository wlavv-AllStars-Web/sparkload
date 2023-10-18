<?php

class ModuleRepository_091bb2f extends \PrestaShop\PrestaShop\Core\Module\ModuleRepository implements \ProxyManager\Proxy\VirtualProxyInterface
{
    /**
     * @var \PrestaShop\PrestaShop\Core\Module\ModuleRepository|null wrapped object, if the proxy is initialized
     */
    private $valueHolder85e71 = null;

    /**
     * @var \Closure|null initializer responsible for generating the wrapped object
     */
    private $initializer03c53 = null;

    /**
     * @var bool[] map of public properties of the parent class
     */
    private static $publicProperties9b850 = [
        
    ];

    public function getList() : \PrestaShop\PrestaShop\Core\Module\ModuleCollection
    {
        $this->initializer03c53 && ($this->initializer03c53->__invoke($valueHolder85e71, $this, 'getList', array(), $this->initializer03c53) || 1) && $this->valueHolder85e71 = $valueHolder85e71;

        return $this->valueHolder85e71->getList();
    }

    public function getInstalledModules() : \PrestaShop\PrestaShop\Core\Module\ModuleCollection
    {
        $this->initializer03c53 && ($this->initializer03c53->__invoke($valueHolder85e71, $this, 'getInstalledModules', array(), $this->initializer03c53) || 1) && $this->valueHolder85e71 = $valueHolder85e71;

        return $this->valueHolder85e71->getInstalledModules();
    }

    public function getMustBeConfiguredModules() : \PrestaShop\PrestaShop\Core\Module\ModuleCollection
    {
        $this->initializer03c53 && ($this->initializer03c53->__invoke($valueHolder85e71, $this, 'getMustBeConfiguredModules', array(), $this->initializer03c53) || 1) && $this->valueHolder85e71 = $valueHolder85e71;

        return $this->valueHolder85e71->getMustBeConfiguredModules();
    }

    public function getUpgradableModules() : \PrestaShop\PrestaShop\Core\Module\ModuleCollection
    {
        $this->initializer03c53 && ($this->initializer03c53->__invoke($valueHolder85e71, $this, 'getUpgradableModules', array(), $this->initializer03c53) || 1) && $this->valueHolder85e71 = $valueHolder85e71;

        return $this->valueHolder85e71->getUpgradableModules();
    }

    public function getModule(string $moduleName) : \PrestaShop\PrestaShop\Core\Module\ModuleInterface
    {
        $this->initializer03c53 && ($this->initializer03c53->__invoke($valueHolder85e71, $this, 'getModule', array('moduleName' => $moduleName), $this->initializer03c53) || 1) && $this->valueHolder85e71 = $valueHolder85e71;

        return $this->valueHolder85e71->getModule($moduleName);
    }

    public function getModulePath(string $moduleName) : ?string
    {
        $this->initializer03c53 && ($this->initializer03c53->__invoke($valueHolder85e71, $this, 'getModulePath', array('moduleName' => $moduleName), $this->initializer03c53) || 1) && $this->valueHolder85e71 = $valueHolder85e71;

        return $this->valueHolder85e71->getModulePath($moduleName);
    }

    public function setActionUrls(\PrestaShop\PrestaShop\Core\Module\ModuleCollection $collection) : \PrestaShop\PrestaShop\Core\Module\ModuleCollection
    {
        $this->initializer03c53 && ($this->initializer03c53->__invoke($valueHolder85e71, $this, 'setActionUrls', array('collection' => $collection), $this->initializer03c53) || 1) && $this->valueHolder85e71 = $valueHolder85e71;

        return $this->valueHolder85e71->setActionUrls($collection);
    }

    public function clearCache(?string $moduleName = null, bool $allShops = false) : bool
    {
        $this->initializer03c53 && ($this->initializer03c53->__invoke($valueHolder85e71, $this, 'clearCache', array('moduleName' => $moduleName, 'allShops' => $allShops), $this->initializer03c53) || 1) && $this->valueHolder85e71 = $valueHolder85e71;

        return $this->valueHolder85e71->clearCache($moduleName, $allShops);
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

        $instance->initializer03c53 = $initializer;

        return $instance;
    }

    public function __construct(\PrestaShop\PrestaShop\Adapter\Module\ModuleDataProvider $moduleDataProvider, \PrestaShop\PrestaShop\Adapter\Module\AdminModuleDataProvider $adminModuleDataProvider, \Doctrine\Common\Cache\CacheProvider $cacheProvider, \PrestaShop\PrestaShop\Adapter\HookManager $hookManager, string $modulePath, int $contextLangId)
    {
        static $reflection;

        if (! $this->valueHolder85e71) {
            $reflection = $reflection ?? new \ReflectionClass('PrestaShop\\PrestaShop\\Core\\Module\\ModuleRepository');
            $this->valueHolder85e71 = $reflection->newInstanceWithoutConstructor();
        \Closure::bind(function (\PrestaShop\PrestaShop\Core\Module\ModuleRepository $instance) {
            unset($instance->moduleDataProvider, $instance->adminModuleDataProvider, $instance->hookManager, $instance->cacheProvider, $instance->modulePath, $instance->installedModules, $instance->modulesFromHook, $instance->contextLangId);
        }, $this, 'PrestaShop\\PrestaShop\\Core\\Module\\ModuleRepository')->__invoke($this);

        }

        $this->valueHolder85e71->__construct($moduleDataProvider, $adminModuleDataProvider, $cacheProvider, $hookManager, $modulePath, $contextLangId);
    }

    public function & __get($name)
    {
        $this->initializer03c53 && ($this->initializer03c53->__invoke($valueHolder85e71, $this, '__get', ['name' => $name], $this->initializer03c53) || 1) && $this->valueHolder85e71 = $valueHolder85e71;

        if (isset(self::$publicProperties9b850[$name])) {
            return $this->valueHolder85e71->$name;
        }

        $realInstanceReflection = new \ReflectionClass('PrestaShop\\PrestaShop\\Core\\Module\\ModuleRepository');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder85e71;

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

        $targetObject = $this->valueHolder85e71;
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
        $this->initializer03c53 && ($this->initializer03c53->__invoke($valueHolder85e71, $this, '__set', array('name' => $name, 'value' => $value), $this->initializer03c53) || 1) && $this->valueHolder85e71 = $valueHolder85e71;

        $realInstanceReflection = new \ReflectionClass('PrestaShop\\PrestaShop\\Core\\Module\\ModuleRepository');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder85e71;

            $targetObject->$name = $value;

            return $targetObject->$name;
        }

        $targetObject = $this->valueHolder85e71;
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
        $this->initializer03c53 && ($this->initializer03c53->__invoke($valueHolder85e71, $this, '__isset', array('name' => $name), $this->initializer03c53) || 1) && $this->valueHolder85e71 = $valueHolder85e71;

        $realInstanceReflection = new \ReflectionClass('PrestaShop\\PrestaShop\\Core\\Module\\ModuleRepository');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder85e71;

            return isset($targetObject->$name);
        }

        $targetObject = $this->valueHolder85e71;
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
        $this->initializer03c53 && ($this->initializer03c53->__invoke($valueHolder85e71, $this, '__unset', array('name' => $name), $this->initializer03c53) || 1) && $this->valueHolder85e71 = $valueHolder85e71;

        $realInstanceReflection = new \ReflectionClass('PrestaShop\\PrestaShop\\Core\\Module\\ModuleRepository');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder85e71;

            unset($targetObject->$name);

            return;
        }

        $targetObject = $this->valueHolder85e71;
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
        $this->initializer03c53 && ($this->initializer03c53->__invoke($valueHolder85e71, $this, '__clone', array(), $this->initializer03c53) || 1) && $this->valueHolder85e71 = $valueHolder85e71;

        $this->valueHolder85e71 = clone $this->valueHolder85e71;
    }

    public function __sleep()
    {
        $this->initializer03c53 && ($this->initializer03c53->__invoke($valueHolder85e71, $this, '__sleep', array(), $this->initializer03c53) || 1) && $this->valueHolder85e71 = $valueHolder85e71;

        return array('valueHolder85e71');
    }

    public function __wakeup()
    {
        \Closure::bind(function (\PrestaShop\PrestaShop\Core\Module\ModuleRepository $instance) {
            unset($instance->moduleDataProvider, $instance->adminModuleDataProvider, $instance->hookManager, $instance->cacheProvider, $instance->modulePath, $instance->installedModules, $instance->modulesFromHook, $instance->contextLangId);
        }, $this, 'PrestaShop\\PrestaShop\\Core\\Module\\ModuleRepository')->__invoke($this);
    }

    public function setProxyInitializer(\Closure $initializer = null) : void
    {
        $this->initializer03c53 = $initializer;
    }

    public function getProxyInitializer() : ?\Closure
    {
        return $this->initializer03c53;
    }

    public function initializeProxy() : bool
    {
        return $this->initializer03c53 && ($this->initializer03c53->__invoke($valueHolder85e71, $this, 'initializeProxy', array(), $this->initializer03c53) || 1) && $this->valueHolder85e71 = $valueHolder85e71;
    }

    public function isProxyInitialized() : bool
    {
        return null !== $this->valueHolder85e71;
    }

    public function getWrappedValueHolderValue()
    {
        return $this->valueHolder85e71;
    }
}
