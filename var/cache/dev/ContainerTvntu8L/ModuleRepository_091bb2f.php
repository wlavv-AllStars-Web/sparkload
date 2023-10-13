<?php

class ModuleRepository_091bb2f extends \PrestaShop\PrestaShop\Core\Module\ModuleRepository implements \ProxyManager\Proxy\VirtualProxyInterface
{
    /**
     * @var \PrestaShop\PrestaShop\Core\Module\ModuleRepository|null wrapped object, if the proxy is initialized
     */
    private $valueHoldere6532 = null;

    /**
     * @var \Closure|null initializer responsible for generating the wrapped object
     */
    private $initializerabdd2 = null;

    /**
     * @var bool[] map of public properties of the parent class
     */
    private static $publicProperties9a7e0 = [
        
    ];

    public function getList() : \PrestaShop\PrestaShop\Core\Module\ModuleCollection
    {
        $this->initializerabdd2 && ($this->initializerabdd2->__invoke($valueHoldere6532, $this, 'getList', array(), $this->initializerabdd2) || 1) && $this->valueHoldere6532 = $valueHoldere6532;

        return $this->valueHoldere6532->getList();
    }

    public function getInstalledModules() : \PrestaShop\PrestaShop\Core\Module\ModuleCollection
    {
        $this->initializerabdd2 && ($this->initializerabdd2->__invoke($valueHoldere6532, $this, 'getInstalledModules', array(), $this->initializerabdd2) || 1) && $this->valueHoldere6532 = $valueHoldere6532;

        return $this->valueHoldere6532->getInstalledModules();
    }

    public function getMustBeConfiguredModules() : \PrestaShop\PrestaShop\Core\Module\ModuleCollection
    {
        $this->initializerabdd2 && ($this->initializerabdd2->__invoke($valueHoldere6532, $this, 'getMustBeConfiguredModules', array(), $this->initializerabdd2) || 1) && $this->valueHoldere6532 = $valueHoldere6532;

        return $this->valueHoldere6532->getMustBeConfiguredModules();
    }

    public function getUpgradableModules() : \PrestaShop\PrestaShop\Core\Module\ModuleCollection
    {
        $this->initializerabdd2 && ($this->initializerabdd2->__invoke($valueHoldere6532, $this, 'getUpgradableModules', array(), $this->initializerabdd2) || 1) && $this->valueHoldere6532 = $valueHoldere6532;

        return $this->valueHoldere6532->getUpgradableModules();
    }

    public function getModule(string $moduleName) : \PrestaShop\PrestaShop\Core\Module\ModuleInterface
    {
        $this->initializerabdd2 && ($this->initializerabdd2->__invoke($valueHoldere6532, $this, 'getModule', array('moduleName' => $moduleName), $this->initializerabdd2) || 1) && $this->valueHoldere6532 = $valueHoldere6532;

        return $this->valueHoldere6532->getModule($moduleName);
    }

    public function getModulePath(string $moduleName) : ?string
    {
        $this->initializerabdd2 && ($this->initializerabdd2->__invoke($valueHoldere6532, $this, 'getModulePath', array('moduleName' => $moduleName), $this->initializerabdd2) || 1) && $this->valueHoldere6532 = $valueHoldere6532;

        return $this->valueHoldere6532->getModulePath($moduleName);
    }

    public function setActionUrls(\PrestaShop\PrestaShop\Core\Module\ModuleCollection $collection) : \PrestaShop\PrestaShop\Core\Module\ModuleCollection
    {
        $this->initializerabdd2 && ($this->initializerabdd2->__invoke($valueHoldere6532, $this, 'setActionUrls', array('collection' => $collection), $this->initializerabdd2) || 1) && $this->valueHoldere6532 = $valueHoldere6532;

        return $this->valueHoldere6532->setActionUrls($collection);
    }

    public function clearCache(?string $moduleName = null, bool $allShops = false) : bool
    {
        $this->initializerabdd2 && ($this->initializerabdd2->__invoke($valueHoldere6532, $this, 'clearCache', array('moduleName' => $moduleName, 'allShops' => $allShops), $this->initializerabdd2) || 1) && $this->valueHoldere6532 = $valueHoldere6532;

        return $this->valueHoldere6532->clearCache($moduleName, $allShops);
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

        $instance->initializerabdd2 = $initializer;

        return $instance;
    }

    public function __construct(\PrestaShop\PrestaShop\Adapter\Module\ModuleDataProvider $moduleDataProvider, \PrestaShop\PrestaShop\Adapter\Module\AdminModuleDataProvider $adminModuleDataProvider, \Doctrine\Common\Cache\CacheProvider $cacheProvider, \PrestaShop\PrestaShop\Adapter\HookManager $hookManager, string $modulePath, int $contextLangId)
    {
        static $reflection;

        if (! $this->valueHoldere6532) {
            $reflection = $reflection ?? new \ReflectionClass('PrestaShop\\PrestaShop\\Core\\Module\\ModuleRepository');
            $this->valueHoldere6532 = $reflection->newInstanceWithoutConstructor();
        \Closure::bind(function (\PrestaShop\PrestaShop\Core\Module\ModuleRepository $instance) {
            unset($instance->moduleDataProvider, $instance->adminModuleDataProvider, $instance->hookManager, $instance->cacheProvider, $instance->modulePath, $instance->installedModules, $instance->modulesFromHook, $instance->contextLangId);
        }, $this, 'PrestaShop\\PrestaShop\\Core\\Module\\ModuleRepository')->__invoke($this);

        }

        $this->valueHoldere6532->__construct($moduleDataProvider, $adminModuleDataProvider, $cacheProvider, $hookManager, $modulePath, $contextLangId);
    }

    public function & __get($name)
    {
        $this->initializerabdd2 && ($this->initializerabdd2->__invoke($valueHoldere6532, $this, '__get', ['name' => $name], $this->initializerabdd2) || 1) && $this->valueHoldere6532 = $valueHoldere6532;

        if (isset(self::$publicProperties9a7e0[$name])) {
            return $this->valueHoldere6532->$name;
        }

        $realInstanceReflection = new \ReflectionClass('PrestaShop\\PrestaShop\\Core\\Module\\ModuleRepository');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHoldere6532;

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

        $targetObject = $this->valueHoldere6532;
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
        $this->initializerabdd2 && ($this->initializerabdd2->__invoke($valueHoldere6532, $this, '__set', array('name' => $name, 'value' => $value), $this->initializerabdd2) || 1) && $this->valueHoldere6532 = $valueHoldere6532;

        $realInstanceReflection = new \ReflectionClass('PrestaShop\\PrestaShop\\Core\\Module\\ModuleRepository');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHoldere6532;

            $targetObject->$name = $value;

            return $targetObject->$name;
        }

        $targetObject = $this->valueHoldere6532;
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
        $this->initializerabdd2 && ($this->initializerabdd2->__invoke($valueHoldere6532, $this, '__isset', array('name' => $name), $this->initializerabdd2) || 1) && $this->valueHoldere6532 = $valueHoldere6532;

        $realInstanceReflection = new \ReflectionClass('PrestaShop\\PrestaShop\\Core\\Module\\ModuleRepository');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHoldere6532;

            return isset($targetObject->$name);
        }

        $targetObject = $this->valueHoldere6532;
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
        $this->initializerabdd2 && ($this->initializerabdd2->__invoke($valueHoldere6532, $this, '__unset', array('name' => $name), $this->initializerabdd2) || 1) && $this->valueHoldere6532 = $valueHoldere6532;

        $realInstanceReflection = new \ReflectionClass('PrestaShop\\PrestaShop\\Core\\Module\\ModuleRepository');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHoldere6532;

            unset($targetObject->$name);

            return;
        }

        $targetObject = $this->valueHoldere6532;
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
        $this->initializerabdd2 && ($this->initializerabdd2->__invoke($valueHoldere6532, $this, '__clone', array(), $this->initializerabdd2) || 1) && $this->valueHoldere6532 = $valueHoldere6532;

        $this->valueHoldere6532 = clone $this->valueHoldere6532;
    }

    public function __sleep()
    {
        $this->initializerabdd2 && ($this->initializerabdd2->__invoke($valueHoldere6532, $this, '__sleep', array(), $this->initializerabdd2) || 1) && $this->valueHoldere6532 = $valueHoldere6532;

        return array('valueHoldere6532');
    }

    public function __wakeup()
    {
        \Closure::bind(function (\PrestaShop\PrestaShop\Core\Module\ModuleRepository $instance) {
            unset($instance->moduleDataProvider, $instance->adminModuleDataProvider, $instance->hookManager, $instance->cacheProvider, $instance->modulePath, $instance->installedModules, $instance->modulesFromHook, $instance->contextLangId);
        }, $this, 'PrestaShop\\PrestaShop\\Core\\Module\\ModuleRepository')->__invoke($this);
    }

    public function setProxyInitializer(\Closure $initializer = null) : void
    {
        $this->initializerabdd2 = $initializer;
    }

    public function getProxyInitializer() : ?\Closure
    {
        return $this->initializerabdd2;
    }

    public function initializeProxy() : bool
    {
        return $this->initializerabdd2 && ($this->initializerabdd2->__invoke($valueHoldere6532, $this, 'initializeProxy', array(), $this->initializerabdd2) || 1) && $this->valueHoldere6532 = $valueHoldere6532;
    }

    public function isProxyInitialized() : bool
    {
        return null !== $this->valueHoldere6532;
    }

    public function getWrappedValueHolderValue()
    {
        return $this->valueHoldere6532;
    }
}
