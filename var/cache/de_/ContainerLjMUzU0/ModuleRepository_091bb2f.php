<?php

class ModuleRepository_091bb2f extends \PrestaShop\PrestaShop\Core\Module\ModuleRepository implements \ProxyManager\Proxy\VirtualProxyInterface
{
    /**
     * @var \PrestaShop\PrestaShop\Core\Module\ModuleRepository|null wrapped object, if the proxy is initialized
     */
    private $valueHolderccb46 = null;

    /**
     * @var \Closure|null initializer responsible for generating the wrapped object
     */
    private $initializer85dbc = null;

    /**
     * @var bool[] map of public properties of the parent class
     */
    private static $publicProperties22b55 = [
        
    ];

    public function getList() : \PrestaShop\PrestaShop\Core\Module\ModuleCollection
    {
        $this->initializer85dbc && ($this->initializer85dbc->__invoke($valueHolderccb46, $this, 'getList', array(), $this->initializer85dbc) || 1) && $this->valueHolderccb46 = $valueHolderccb46;

        return $this->valueHolderccb46->getList();
    }

    public function getInstalledModules() : \PrestaShop\PrestaShop\Core\Module\ModuleCollection
    {
        $this->initializer85dbc && ($this->initializer85dbc->__invoke($valueHolderccb46, $this, 'getInstalledModules', array(), $this->initializer85dbc) || 1) && $this->valueHolderccb46 = $valueHolderccb46;

        return $this->valueHolderccb46->getInstalledModules();
    }

    public function getMustBeConfiguredModules() : \PrestaShop\PrestaShop\Core\Module\ModuleCollection
    {
        $this->initializer85dbc && ($this->initializer85dbc->__invoke($valueHolderccb46, $this, 'getMustBeConfiguredModules', array(), $this->initializer85dbc) || 1) && $this->valueHolderccb46 = $valueHolderccb46;

        return $this->valueHolderccb46->getMustBeConfiguredModules();
    }

    public function getUpgradableModules() : \PrestaShop\PrestaShop\Core\Module\ModuleCollection
    {
        $this->initializer85dbc && ($this->initializer85dbc->__invoke($valueHolderccb46, $this, 'getUpgradableModules', array(), $this->initializer85dbc) || 1) && $this->valueHolderccb46 = $valueHolderccb46;

        return $this->valueHolderccb46->getUpgradableModules();
    }

    public function getModule(string $moduleName) : \PrestaShop\PrestaShop\Core\Module\ModuleInterface
    {
        $this->initializer85dbc && ($this->initializer85dbc->__invoke($valueHolderccb46, $this, 'getModule', array('moduleName' => $moduleName), $this->initializer85dbc) || 1) && $this->valueHolderccb46 = $valueHolderccb46;

        return $this->valueHolderccb46->getModule($moduleName);
    }

    public function getModulePath(string $moduleName) : ?string
    {
        $this->initializer85dbc && ($this->initializer85dbc->__invoke($valueHolderccb46, $this, 'getModulePath', array('moduleName' => $moduleName), $this->initializer85dbc) || 1) && $this->valueHolderccb46 = $valueHolderccb46;

        return $this->valueHolderccb46->getModulePath($moduleName);
    }

    public function setActionUrls(\PrestaShop\PrestaShop\Core\Module\ModuleCollection $collection) : \PrestaShop\PrestaShop\Core\Module\ModuleCollection
    {
        $this->initializer85dbc && ($this->initializer85dbc->__invoke($valueHolderccb46, $this, 'setActionUrls', array('collection' => $collection), $this->initializer85dbc) || 1) && $this->valueHolderccb46 = $valueHolderccb46;

        return $this->valueHolderccb46->setActionUrls($collection);
    }

    public function clearCache(?string $moduleName = null, bool $allShops = false) : bool
    {
        $this->initializer85dbc && ($this->initializer85dbc->__invoke($valueHolderccb46, $this, 'clearCache', array('moduleName' => $moduleName, 'allShops' => $allShops), $this->initializer85dbc) || 1) && $this->valueHolderccb46 = $valueHolderccb46;

        return $this->valueHolderccb46->clearCache($moduleName, $allShops);
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

        $instance->initializer85dbc = $initializer;

        return $instance;
    }

    public function __construct(\PrestaShop\PrestaShop\Adapter\Module\ModuleDataProvider $moduleDataProvider, \PrestaShop\PrestaShop\Adapter\Module\AdminModuleDataProvider $adminModuleDataProvider, \Doctrine\Common\Cache\CacheProvider $cacheProvider, \PrestaShop\PrestaShop\Adapter\HookManager $hookManager, string $modulePath, int $contextLangId)
    {
        static $reflection;

        if (! $this->valueHolderccb46) {
            $reflection = $reflection ?? new \ReflectionClass('PrestaShop\\PrestaShop\\Core\\Module\\ModuleRepository');
            $this->valueHolderccb46 = $reflection->newInstanceWithoutConstructor();
        \Closure::bind(function (\PrestaShop\PrestaShop\Core\Module\ModuleRepository $instance) {
            unset($instance->moduleDataProvider, $instance->adminModuleDataProvider, $instance->hookManager, $instance->cacheProvider, $instance->modulePath, $instance->installedModules, $instance->modulesFromHook, $instance->contextLangId);
        }, $this, 'PrestaShop\\PrestaShop\\Core\\Module\\ModuleRepository')->__invoke($this);

        }

        $this->valueHolderccb46->__construct($moduleDataProvider, $adminModuleDataProvider, $cacheProvider, $hookManager, $modulePath, $contextLangId);
    }

    public function & __get($name)
    {
        $this->initializer85dbc && ($this->initializer85dbc->__invoke($valueHolderccb46, $this, '__get', ['name' => $name], $this->initializer85dbc) || 1) && $this->valueHolderccb46 = $valueHolderccb46;

        if (isset(self::$publicProperties22b55[$name])) {
            return $this->valueHolderccb46->$name;
        }

        $realInstanceReflection = new \ReflectionClass('PrestaShop\\PrestaShop\\Core\\Module\\ModuleRepository');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolderccb46;

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

        $targetObject = $this->valueHolderccb46;
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
        $this->initializer85dbc && ($this->initializer85dbc->__invoke($valueHolderccb46, $this, '__set', array('name' => $name, 'value' => $value), $this->initializer85dbc) || 1) && $this->valueHolderccb46 = $valueHolderccb46;

        $realInstanceReflection = new \ReflectionClass('PrestaShop\\PrestaShop\\Core\\Module\\ModuleRepository');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolderccb46;

            $targetObject->$name = $value;

            return $targetObject->$name;
        }

        $targetObject = $this->valueHolderccb46;
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
        $this->initializer85dbc && ($this->initializer85dbc->__invoke($valueHolderccb46, $this, '__isset', array('name' => $name), $this->initializer85dbc) || 1) && $this->valueHolderccb46 = $valueHolderccb46;

        $realInstanceReflection = new \ReflectionClass('PrestaShop\\PrestaShop\\Core\\Module\\ModuleRepository');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolderccb46;

            return isset($targetObject->$name);
        }

        $targetObject = $this->valueHolderccb46;
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
        $this->initializer85dbc && ($this->initializer85dbc->__invoke($valueHolderccb46, $this, '__unset', array('name' => $name), $this->initializer85dbc) || 1) && $this->valueHolderccb46 = $valueHolderccb46;

        $realInstanceReflection = new \ReflectionClass('PrestaShop\\PrestaShop\\Core\\Module\\ModuleRepository');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolderccb46;

            unset($targetObject->$name);

            return;
        }

        $targetObject = $this->valueHolderccb46;
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
        $this->initializer85dbc && ($this->initializer85dbc->__invoke($valueHolderccb46, $this, '__clone', array(), $this->initializer85dbc) || 1) && $this->valueHolderccb46 = $valueHolderccb46;

        $this->valueHolderccb46 = clone $this->valueHolderccb46;
    }

    public function __sleep()
    {
        $this->initializer85dbc && ($this->initializer85dbc->__invoke($valueHolderccb46, $this, '__sleep', array(), $this->initializer85dbc) || 1) && $this->valueHolderccb46 = $valueHolderccb46;

        return array('valueHolderccb46');
    }

    public function __wakeup()
    {
        \Closure::bind(function (\PrestaShop\PrestaShop\Core\Module\ModuleRepository $instance) {
            unset($instance->moduleDataProvider, $instance->adminModuleDataProvider, $instance->hookManager, $instance->cacheProvider, $instance->modulePath, $instance->installedModules, $instance->modulesFromHook, $instance->contextLangId);
        }, $this, 'PrestaShop\\PrestaShop\\Core\\Module\\ModuleRepository')->__invoke($this);
    }

    public function setProxyInitializer(\Closure $initializer = null) : void
    {
        $this->initializer85dbc = $initializer;
    }

    public function getProxyInitializer() : ?\Closure
    {
        return $this->initializer85dbc;
    }

    public function initializeProxy() : bool
    {
        return $this->initializer85dbc && ($this->initializer85dbc->__invoke($valueHolderccb46, $this, 'initializeProxy', array(), $this->initializer85dbc) || 1) && $this->valueHolderccb46 = $valueHolderccb46;
    }

    public function isProxyInitialized() : bool
    {
        return null !== $this->valueHolderccb46;
    }

    public function getWrappedValueHolderValue()
    {
        return $this->valueHolderccb46;
    }
}
