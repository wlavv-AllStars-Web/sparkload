<?php

class EntityManager_9a5be93 extends \Doctrine\ORM\EntityManager implements \ProxyManager\Proxy\VirtualProxyInterface
{
    /**
     * @var \Doctrine\ORM\EntityManager|null wrapped object, if the proxy is initialized
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

    public function getConnection()
    {
        $this->initializerabdd2 && ($this->initializerabdd2->__invoke($valueHoldere6532, $this, 'getConnection', array(), $this->initializerabdd2) || 1) && $this->valueHoldere6532 = $valueHoldere6532;

        return $this->valueHoldere6532->getConnection();
    }

    public function getMetadataFactory()
    {
        $this->initializerabdd2 && ($this->initializerabdd2->__invoke($valueHoldere6532, $this, 'getMetadataFactory', array(), $this->initializerabdd2) || 1) && $this->valueHoldere6532 = $valueHoldere6532;

        return $this->valueHoldere6532->getMetadataFactory();
    }

    public function getExpressionBuilder()
    {
        $this->initializerabdd2 && ($this->initializerabdd2->__invoke($valueHoldere6532, $this, 'getExpressionBuilder', array(), $this->initializerabdd2) || 1) && $this->valueHoldere6532 = $valueHoldere6532;

        return $this->valueHoldere6532->getExpressionBuilder();
    }

    public function beginTransaction()
    {
        $this->initializerabdd2 && ($this->initializerabdd2->__invoke($valueHoldere6532, $this, 'beginTransaction', array(), $this->initializerabdd2) || 1) && $this->valueHoldere6532 = $valueHoldere6532;

        return $this->valueHoldere6532->beginTransaction();
    }

    public function getCache()
    {
        $this->initializerabdd2 && ($this->initializerabdd2->__invoke($valueHoldere6532, $this, 'getCache', array(), $this->initializerabdd2) || 1) && $this->valueHoldere6532 = $valueHoldere6532;

        return $this->valueHoldere6532->getCache();
    }

    public function transactional($func)
    {
        $this->initializerabdd2 && ($this->initializerabdd2->__invoke($valueHoldere6532, $this, 'transactional', array('func' => $func), $this->initializerabdd2) || 1) && $this->valueHoldere6532 = $valueHoldere6532;

        return $this->valueHoldere6532->transactional($func);
    }

    public function wrapInTransaction(callable $func)
    {
        $this->initializerabdd2 && ($this->initializerabdd2->__invoke($valueHoldere6532, $this, 'wrapInTransaction', array('func' => $func), $this->initializerabdd2) || 1) && $this->valueHoldere6532 = $valueHoldere6532;

        return $this->valueHoldere6532->wrapInTransaction($func);
    }

    public function commit()
    {
        $this->initializerabdd2 && ($this->initializerabdd2->__invoke($valueHoldere6532, $this, 'commit', array(), $this->initializerabdd2) || 1) && $this->valueHoldere6532 = $valueHoldere6532;

        return $this->valueHoldere6532->commit();
    }

    public function rollback()
    {
        $this->initializerabdd2 && ($this->initializerabdd2->__invoke($valueHoldere6532, $this, 'rollback', array(), $this->initializerabdd2) || 1) && $this->valueHoldere6532 = $valueHoldere6532;

        return $this->valueHoldere6532->rollback();
    }

    public function getClassMetadata($className)
    {
        $this->initializerabdd2 && ($this->initializerabdd2->__invoke($valueHoldere6532, $this, 'getClassMetadata', array('className' => $className), $this->initializerabdd2) || 1) && $this->valueHoldere6532 = $valueHoldere6532;

        return $this->valueHoldere6532->getClassMetadata($className);
    }

    public function createQuery($dql = '')
    {
        $this->initializerabdd2 && ($this->initializerabdd2->__invoke($valueHoldere6532, $this, 'createQuery', array('dql' => $dql), $this->initializerabdd2) || 1) && $this->valueHoldere6532 = $valueHoldere6532;

        return $this->valueHoldere6532->createQuery($dql);
    }

    public function createNamedQuery($name)
    {
        $this->initializerabdd2 && ($this->initializerabdd2->__invoke($valueHoldere6532, $this, 'createNamedQuery', array('name' => $name), $this->initializerabdd2) || 1) && $this->valueHoldere6532 = $valueHoldere6532;

        return $this->valueHoldere6532->createNamedQuery($name);
    }

    public function createNativeQuery($sql, \Doctrine\ORM\Query\ResultSetMapping $rsm)
    {
        $this->initializerabdd2 && ($this->initializerabdd2->__invoke($valueHoldere6532, $this, 'createNativeQuery', array('sql' => $sql, 'rsm' => $rsm), $this->initializerabdd2) || 1) && $this->valueHoldere6532 = $valueHoldere6532;

        return $this->valueHoldere6532->createNativeQuery($sql, $rsm);
    }

    public function createNamedNativeQuery($name)
    {
        $this->initializerabdd2 && ($this->initializerabdd2->__invoke($valueHoldere6532, $this, 'createNamedNativeQuery', array('name' => $name), $this->initializerabdd2) || 1) && $this->valueHoldere6532 = $valueHoldere6532;

        return $this->valueHoldere6532->createNamedNativeQuery($name);
    }

    public function createQueryBuilder()
    {
        $this->initializerabdd2 && ($this->initializerabdd2->__invoke($valueHoldere6532, $this, 'createQueryBuilder', array(), $this->initializerabdd2) || 1) && $this->valueHoldere6532 = $valueHoldere6532;

        return $this->valueHoldere6532->createQueryBuilder();
    }

    public function flush($entity = null)
    {
        $this->initializerabdd2 && ($this->initializerabdd2->__invoke($valueHoldere6532, $this, 'flush', array('entity' => $entity), $this->initializerabdd2) || 1) && $this->valueHoldere6532 = $valueHoldere6532;

        return $this->valueHoldere6532->flush($entity);
    }

    public function find($className, $id, $lockMode = null, $lockVersion = null)
    {
        $this->initializerabdd2 && ($this->initializerabdd2->__invoke($valueHoldere6532, $this, 'find', array('className' => $className, 'id' => $id, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializerabdd2) || 1) && $this->valueHoldere6532 = $valueHoldere6532;

        return $this->valueHoldere6532->find($className, $id, $lockMode, $lockVersion);
    }

    public function getReference($entityName, $id)
    {
        $this->initializerabdd2 && ($this->initializerabdd2->__invoke($valueHoldere6532, $this, 'getReference', array('entityName' => $entityName, 'id' => $id), $this->initializerabdd2) || 1) && $this->valueHoldere6532 = $valueHoldere6532;

        return $this->valueHoldere6532->getReference($entityName, $id);
    }

    public function getPartialReference($entityName, $identifier)
    {
        $this->initializerabdd2 && ($this->initializerabdd2->__invoke($valueHoldere6532, $this, 'getPartialReference', array('entityName' => $entityName, 'identifier' => $identifier), $this->initializerabdd2) || 1) && $this->valueHoldere6532 = $valueHoldere6532;

        return $this->valueHoldere6532->getPartialReference($entityName, $identifier);
    }

    public function clear($entityName = null)
    {
        $this->initializerabdd2 && ($this->initializerabdd2->__invoke($valueHoldere6532, $this, 'clear', array('entityName' => $entityName), $this->initializerabdd2) || 1) && $this->valueHoldere6532 = $valueHoldere6532;

        return $this->valueHoldere6532->clear($entityName);
    }

    public function close()
    {
        $this->initializerabdd2 && ($this->initializerabdd2->__invoke($valueHoldere6532, $this, 'close', array(), $this->initializerabdd2) || 1) && $this->valueHoldere6532 = $valueHoldere6532;

        return $this->valueHoldere6532->close();
    }

    public function persist($entity)
    {
        $this->initializerabdd2 && ($this->initializerabdd2->__invoke($valueHoldere6532, $this, 'persist', array('entity' => $entity), $this->initializerabdd2) || 1) && $this->valueHoldere6532 = $valueHoldere6532;

        return $this->valueHoldere6532->persist($entity);
    }

    public function remove($entity)
    {
        $this->initializerabdd2 && ($this->initializerabdd2->__invoke($valueHoldere6532, $this, 'remove', array('entity' => $entity), $this->initializerabdd2) || 1) && $this->valueHoldere6532 = $valueHoldere6532;

        return $this->valueHoldere6532->remove($entity);
    }

    public function refresh($entity)
    {
        $this->initializerabdd2 && ($this->initializerabdd2->__invoke($valueHoldere6532, $this, 'refresh', array('entity' => $entity), $this->initializerabdd2) || 1) && $this->valueHoldere6532 = $valueHoldere6532;

        return $this->valueHoldere6532->refresh($entity);
    }

    public function detach($entity)
    {
        $this->initializerabdd2 && ($this->initializerabdd2->__invoke($valueHoldere6532, $this, 'detach', array('entity' => $entity), $this->initializerabdd2) || 1) && $this->valueHoldere6532 = $valueHoldere6532;

        return $this->valueHoldere6532->detach($entity);
    }

    public function merge($entity)
    {
        $this->initializerabdd2 && ($this->initializerabdd2->__invoke($valueHoldere6532, $this, 'merge', array('entity' => $entity), $this->initializerabdd2) || 1) && $this->valueHoldere6532 = $valueHoldere6532;

        return $this->valueHoldere6532->merge($entity);
    }

    public function copy($entity, $deep = false)
    {
        $this->initializerabdd2 && ($this->initializerabdd2->__invoke($valueHoldere6532, $this, 'copy', array('entity' => $entity, 'deep' => $deep), $this->initializerabdd2) || 1) && $this->valueHoldere6532 = $valueHoldere6532;

        return $this->valueHoldere6532->copy($entity, $deep);
    }

    public function lock($entity, $lockMode, $lockVersion = null)
    {
        $this->initializerabdd2 && ($this->initializerabdd2->__invoke($valueHoldere6532, $this, 'lock', array('entity' => $entity, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializerabdd2) || 1) && $this->valueHoldere6532 = $valueHoldere6532;

        return $this->valueHoldere6532->lock($entity, $lockMode, $lockVersion);
    }

    public function getRepository($entityName)
    {
        $this->initializerabdd2 && ($this->initializerabdd2->__invoke($valueHoldere6532, $this, 'getRepository', array('entityName' => $entityName), $this->initializerabdd2) || 1) && $this->valueHoldere6532 = $valueHoldere6532;

        return $this->valueHoldere6532->getRepository($entityName);
    }

    public function contains($entity)
    {
        $this->initializerabdd2 && ($this->initializerabdd2->__invoke($valueHoldere6532, $this, 'contains', array('entity' => $entity), $this->initializerabdd2) || 1) && $this->valueHoldere6532 = $valueHoldere6532;

        return $this->valueHoldere6532->contains($entity);
    }

    public function getEventManager()
    {
        $this->initializerabdd2 && ($this->initializerabdd2->__invoke($valueHoldere6532, $this, 'getEventManager', array(), $this->initializerabdd2) || 1) && $this->valueHoldere6532 = $valueHoldere6532;

        return $this->valueHoldere6532->getEventManager();
    }

    public function getConfiguration()
    {
        $this->initializerabdd2 && ($this->initializerabdd2->__invoke($valueHoldere6532, $this, 'getConfiguration', array(), $this->initializerabdd2) || 1) && $this->valueHoldere6532 = $valueHoldere6532;

        return $this->valueHoldere6532->getConfiguration();
    }

    public function isOpen()
    {
        $this->initializerabdd2 && ($this->initializerabdd2->__invoke($valueHoldere6532, $this, 'isOpen', array(), $this->initializerabdd2) || 1) && $this->valueHoldere6532 = $valueHoldere6532;

        return $this->valueHoldere6532->isOpen();
    }

    public function getUnitOfWork()
    {
        $this->initializerabdd2 && ($this->initializerabdd2->__invoke($valueHoldere6532, $this, 'getUnitOfWork', array(), $this->initializerabdd2) || 1) && $this->valueHoldere6532 = $valueHoldere6532;

        return $this->valueHoldere6532->getUnitOfWork();
    }

    public function getHydrator($hydrationMode)
    {
        $this->initializerabdd2 && ($this->initializerabdd2->__invoke($valueHoldere6532, $this, 'getHydrator', array('hydrationMode' => $hydrationMode), $this->initializerabdd2) || 1) && $this->valueHoldere6532 = $valueHoldere6532;

        return $this->valueHoldere6532->getHydrator($hydrationMode);
    }

    public function newHydrator($hydrationMode)
    {
        $this->initializerabdd2 && ($this->initializerabdd2->__invoke($valueHoldere6532, $this, 'newHydrator', array('hydrationMode' => $hydrationMode), $this->initializerabdd2) || 1) && $this->valueHoldere6532 = $valueHoldere6532;

        return $this->valueHoldere6532->newHydrator($hydrationMode);
    }

    public function getProxyFactory()
    {
        $this->initializerabdd2 && ($this->initializerabdd2->__invoke($valueHoldere6532, $this, 'getProxyFactory', array(), $this->initializerabdd2) || 1) && $this->valueHoldere6532 = $valueHoldere6532;

        return $this->valueHoldere6532->getProxyFactory();
    }

    public function initializeObject($obj)
    {
        $this->initializerabdd2 && ($this->initializerabdd2->__invoke($valueHoldere6532, $this, 'initializeObject', array('obj' => $obj), $this->initializerabdd2) || 1) && $this->valueHoldere6532 = $valueHoldere6532;

        return $this->valueHoldere6532->initializeObject($obj);
    }

    public function getFilters()
    {
        $this->initializerabdd2 && ($this->initializerabdd2->__invoke($valueHoldere6532, $this, 'getFilters', array(), $this->initializerabdd2) || 1) && $this->valueHoldere6532 = $valueHoldere6532;

        return $this->valueHoldere6532->getFilters();
    }

    public function isFiltersStateClean()
    {
        $this->initializerabdd2 && ($this->initializerabdd2->__invoke($valueHoldere6532, $this, 'isFiltersStateClean', array(), $this->initializerabdd2) || 1) && $this->valueHoldere6532 = $valueHoldere6532;

        return $this->valueHoldere6532->isFiltersStateClean();
    }

    public function hasFilters()
    {
        $this->initializerabdd2 && ($this->initializerabdd2->__invoke($valueHoldere6532, $this, 'hasFilters', array(), $this->initializerabdd2) || 1) && $this->valueHoldere6532 = $valueHoldere6532;

        return $this->valueHoldere6532->hasFilters();
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

        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $instance, 'Doctrine\\ORM\\EntityManager')->__invoke($instance);

        $instance->initializerabdd2 = $initializer;

        return $instance;
    }

    protected function __construct(\Doctrine\DBAL\Connection $conn, \Doctrine\ORM\Configuration $config, \Doctrine\Common\EventManager $eventManager)
    {
        static $reflection;

        if (! $this->valueHoldere6532) {
            $reflection = $reflection ?? new \ReflectionClass('Doctrine\\ORM\\EntityManager');
            $this->valueHoldere6532 = $reflection->newInstanceWithoutConstructor();
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);

        }

        $this->valueHoldere6532->__construct($conn, $config, $eventManager);
    }

    public function & __get($name)
    {
        $this->initializerabdd2 && ($this->initializerabdd2->__invoke($valueHoldere6532, $this, '__get', ['name' => $name], $this->initializerabdd2) || 1) && $this->valueHoldere6532 = $valueHoldere6532;

        if (isset(self::$publicProperties9a7e0[$name])) {
            return $this->valueHoldere6532->$name;
        }

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

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

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

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

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

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

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

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
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);
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
