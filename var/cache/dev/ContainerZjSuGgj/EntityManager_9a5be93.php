<?php

class EntityManager_9a5be93 extends \Doctrine\ORM\EntityManager implements \ProxyManager\Proxy\VirtualProxyInterface
{
    /**
     * @var \Doctrine\ORM\EntityManager|null wrapped object, if the proxy is initialized
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

    public function getConnection()
    {
        $this->initializer23b81 && ($this->initializer23b81->__invoke($valueHolder62a41, $this, 'getConnection', array(), $this->initializer23b81) || 1) && $this->valueHolder62a41 = $valueHolder62a41;

        return $this->valueHolder62a41->getConnection();
    }

    public function getMetadataFactory()
    {
        $this->initializer23b81 && ($this->initializer23b81->__invoke($valueHolder62a41, $this, 'getMetadataFactory', array(), $this->initializer23b81) || 1) && $this->valueHolder62a41 = $valueHolder62a41;

        return $this->valueHolder62a41->getMetadataFactory();
    }

    public function getExpressionBuilder()
    {
        $this->initializer23b81 && ($this->initializer23b81->__invoke($valueHolder62a41, $this, 'getExpressionBuilder', array(), $this->initializer23b81) || 1) && $this->valueHolder62a41 = $valueHolder62a41;

        return $this->valueHolder62a41->getExpressionBuilder();
    }

    public function beginTransaction()
    {
        $this->initializer23b81 && ($this->initializer23b81->__invoke($valueHolder62a41, $this, 'beginTransaction', array(), $this->initializer23b81) || 1) && $this->valueHolder62a41 = $valueHolder62a41;

        return $this->valueHolder62a41->beginTransaction();
    }

    public function getCache()
    {
        $this->initializer23b81 && ($this->initializer23b81->__invoke($valueHolder62a41, $this, 'getCache', array(), $this->initializer23b81) || 1) && $this->valueHolder62a41 = $valueHolder62a41;

        return $this->valueHolder62a41->getCache();
    }

    public function transactional($func)
    {
        $this->initializer23b81 && ($this->initializer23b81->__invoke($valueHolder62a41, $this, 'transactional', array('func' => $func), $this->initializer23b81) || 1) && $this->valueHolder62a41 = $valueHolder62a41;

        return $this->valueHolder62a41->transactional($func);
    }

    public function wrapInTransaction(callable $func)
    {
        $this->initializer23b81 && ($this->initializer23b81->__invoke($valueHolder62a41, $this, 'wrapInTransaction', array('func' => $func), $this->initializer23b81) || 1) && $this->valueHolder62a41 = $valueHolder62a41;

        return $this->valueHolder62a41->wrapInTransaction($func);
    }

    public function commit()
    {
        $this->initializer23b81 && ($this->initializer23b81->__invoke($valueHolder62a41, $this, 'commit', array(), $this->initializer23b81) || 1) && $this->valueHolder62a41 = $valueHolder62a41;

        return $this->valueHolder62a41->commit();
    }

    public function rollback()
    {
        $this->initializer23b81 && ($this->initializer23b81->__invoke($valueHolder62a41, $this, 'rollback', array(), $this->initializer23b81) || 1) && $this->valueHolder62a41 = $valueHolder62a41;

        return $this->valueHolder62a41->rollback();
    }

    public function getClassMetadata($className)
    {
        $this->initializer23b81 && ($this->initializer23b81->__invoke($valueHolder62a41, $this, 'getClassMetadata', array('className' => $className), $this->initializer23b81) || 1) && $this->valueHolder62a41 = $valueHolder62a41;

        return $this->valueHolder62a41->getClassMetadata($className);
    }

    public function createQuery($dql = '')
    {
        $this->initializer23b81 && ($this->initializer23b81->__invoke($valueHolder62a41, $this, 'createQuery', array('dql' => $dql), $this->initializer23b81) || 1) && $this->valueHolder62a41 = $valueHolder62a41;

        return $this->valueHolder62a41->createQuery($dql);
    }

    public function createNamedQuery($name)
    {
        $this->initializer23b81 && ($this->initializer23b81->__invoke($valueHolder62a41, $this, 'createNamedQuery', array('name' => $name), $this->initializer23b81) || 1) && $this->valueHolder62a41 = $valueHolder62a41;

        return $this->valueHolder62a41->createNamedQuery($name);
    }

    public function createNativeQuery($sql, \Doctrine\ORM\Query\ResultSetMapping $rsm)
    {
        $this->initializer23b81 && ($this->initializer23b81->__invoke($valueHolder62a41, $this, 'createNativeQuery', array('sql' => $sql, 'rsm' => $rsm), $this->initializer23b81) || 1) && $this->valueHolder62a41 = $valueHolder62a41;

        return $this->valueHolder62a41->createNativeQuery($sql, $rsm);
    }

    public function createNamedNativeQuery($name)
    {
        $this->initializer23b81 && ($this->initializer23b81->__invoke($valueHolder62a41, $this, 'createNamedNativeQuery', array('name' => $name), $this->initializer23b81) || 1) && $this->valueHolder62a41 = $valueHolder62a41;

        return $this->valueHolder62a41->createNamedNativeQuery($name);
    }

    public function createQueryBuilder()
    {
        $this->initializer23b81 && ($this->initializer23b81->__invoke($valueHolder62a41, $this, 'createQueryBuilder', array(), $this->initializer23b81) || 1) && $this->valueHolder62a41 = $valueHolder62a41;

        return $this->valueHolder62a41->createQueryBuilder();
    }

    public function flush($entity = null)
    {
        $this->initializer23b81 && ($this->initializer23b81->__invoke($valueHolder62a41, $this, 'flush', array('entity' => $entity), $this->initializer23b81) || 1) && $this->valueHolder62a41 = $valueHolder62a41;

        return $this->valueHolder62a41->flush($entity);
    }

    public function find($className, $id, $lockMode = null, $lockVersion = null)
    {
        $this->initializer23b81 && ($this->initializer23b81->__invoke($valueHolder62a41, $this, 'find', array('className' => $className, 'id' => $id, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializer23b81) || 1) && $this->valueHolder62a41 = $valueHolder62a41;

        return $this->valueHolder62a41->find($className, $id, $lockMode, $lockVersion);
    }

    public function getReference($entityName, $id)
    {
        $this->initializer23b81 && ($this->initializer23b81->__invoke($valueHolder62a41, $this, 'getReference', array('entityName' => $entityName, 'id' => $id), $this->initializer23b81) || 1) && $this->valueHolder62a41 = $valueHolder62a41;

        return $this->valueHolder62a41->getReference($entityName, $id);
    }

    public function getPartialReference($entityName, $identifier)
    {
        $this->initializer23b81 && ($this->initializer23b81->__invoke($valueHolder62a41, $this, 'getPartialReference', array('entityName' => $entityName, 'identifier' => $identifier), $this->initializer23b81) || 1) && $this->valueHolder62a41 = $valueHolder62a41;

        return $this->valueHolder62a41->getPartialReference($entityName, $identifier);
    }

    public function clear($entityName = null)
    {
        $this->initializer23b81 && ($this->initializer23b81->__invoke($valueHolder62a41, $this, 'clear', array('entityName' => $entityName), $this->initializer23b81) || 1) && $this->valueHolder62a41 = $valueHolder62a41;

        return $this->valueHolder62a41->clear($entityName);
    }

    public function close()
    {
        $this->initializer23b81 && ($this->initializer23b81->__invoke($valueHolder62a41, $this, 'close', array(), $this->initializer23b81) || 1) && $this->valueHolder62a41 = $valueHolder62a41;

        return $this->valueHolder62a41->close();
    }

    public function persist($entity)
    {
        $this->initializer23b81 && ($this->initializer23b81->__invoke($valueHolder62a41, $this, 'persist', array('entity' => $entity), $this->initializer23b81) || 1) && $this->valueHolder62a41 = $valueHolder62a41;

        return $this->valueHolder62a41->persist($entity);
    }

    public function remove($entity)
    {
        $this->initializer23b81 && ($this->initializer23b81->__invoke($valueHolder62a41, $this, 'remove', array('entity' => $entity), $this->initializer23b81) || 1) && $this->valueHolder62a41 = $valueHolder62a41;

        return $this->valueHolder62a41->remove($entity);
    }

    public function refresh($entity)
    {
        $this->initializer23b81 && ($this->initializer23b81->__invoke($valueHolder62a41, $this, 'refresh', array('entity' => $entity), $this->initializer23b81) || 1) && $this->valueHolder62a41 = $valueHolder62a41;

        return $this->valueHolder62a41->refresh($entity);
    }

    public function detach($entity)
    {
        $this->initializer23b81 && ($this->initializer23b81->__invoke($valueHolder62a41, $this, 'detach', array('entity' => $entity), $this->initializer23b81) || 1) && $this->valueHolder62a41 = $valueHolder62a41;

        return $this->valueHolder62a41->detach($entity);
    }

    public function merge($entity)
    {
        $this->initializer23b81 && ($this->initializer23b81->__invoke($valueHolder62a41, $this, 'merge', array('entity' => $entity), $this->initializer23b81) || 1) && $this->valueHolder62a41 = $valueHolder62a41;

        return $this->valueHolder62a41->merge($entity);
    }

    public function copy($entity, $deep = false)
    {
        $this->initializer23b81 && ($this->initializer23b81->__invoke($valueHolder62a41, $this, 'copy', array('entity' => $entity, 'deep' => $deep), $this->initializer23b81) || 1) && $this->valueHolder62a41 = $valueHolder62a41;

        return $this->valueHolder62a41->copy($entity, $deep);
    }

    public function lock($entity, $lockMode, $lockVersion = null)
    {
        $this->initializer23b81 && ($this->initializer23b81->__invoke($valueHolder62a41, $this, 'lock', array('entity' => $entity, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializer23b81) || 1) && $this->valueHolder62a41 = $valueHolder62a41;

        return $this->valueHolder62a41->lock($entity, $lockMode, $lockVersion);
    }

    public function getRepository($entityName)
    {
        $this->initializer23b81 && ($this->initializer23b81->__invoke($valueHolder62a41, $this, 'getRepository', array('entityName' => $entityName), $this->initializer23b81) || 1) && $this->valueHolder62a41 = $valueHolder62a41;

        return $this->valueHolder62a41->getRepository($entityName);
    }

    public function contains($entity)
    {
        $this->initializer23b81 && ($this->initializer23b81->__invoke($valueHolder62a41, $this, 'contains', array('entity' => $entity), $this->initializer23b81) || 1) && $this->valueHolder62a41 = $valueHolder62a41;

        return $this->valueHolder62a41->contains($entity);
    }

    public function getEventManager()
    {
        $this->initializer23b81 && ($this->initializer23b81->__invoke($valueHolder62a41, $this, 'getEventManager', array(), $this->initializer23b81) || 1) && $this->valueHolder62a41 = $valueHolder62a41;

        return $this->valueHolder62a41->getEventManager();
    }

    public function getConfiguration()
    {
        $this->initializer23b81 && ($this->initializer23b81->__invoke($valueHolder62a41, $this, 'getConfiguration', array(), $this->initializer23b81) || 1) && $this->valueHolder62a41 = $valueHolder62a41;

        return $this->valueHolder62a41->getConfiguration();
    }

    public function isOpen()
    {
        $this->initializer23b81 && ($this->initializer23b81->__invoke($valueHolder62a41, $this, 'isOpen', array(), $this->initializer23b81) || 1) && $this->valueHolder62a41 = $valueHolder62a41;

        return $this->valueHolder62a41->isOpen();
    }

    public function getUnitOfWork()
    {
        $this->initializer23b81 && ($this->initializer23b81->__invoke($valueHolder62a41, $this, 'getUnitOfWork', array(), $this->initializer23b81) || 1) && $this->valueHolder62a41 = $valueHolder62a41;

        return $this->valueHolder62a41->getUnitOfWork();
    }

    public function getHydrator($hydrationMode)
    {
        $this->initializer23b81 && ($this->initializer23b81->__invoke($valueHolder62a41, $this, 'getHydrator', array('hydrationMode' => $hydrationMode), $this->initializer23b81) || 1) && $this->valueHolder62a41 = $valueHolder62a41;

        return $this->valueHolder62a41->getHydrator($hydrationMode);
    }

    public function newHydrator($hydrationMode)
    {
        $this->initializer23b81 && ($this->initializer23b81->__invoke($valueHolder62a41, $this, 'newHydrator', array('hydrationMode' => $hydrationMode), $this->initializer23b81) || 1) && $this->valueHolder62a41 = $valueHolder62a41;

        return $this->valueHolder62a41->newHydrator($hydrationMode);
    }

    public function getProxyFactory()
    {
        $this->initializer23b81 && ($this->initializer23b81->__invoke($valueHolder62a41, $this, 'getProxyFactory', array(), $this->initializer23b81) || 1) && $this->valueHolder62a41 = $valueHolder62a41;

        return $this->valueHolder62a41->getProxyFactory();
    }

    public function initializeObject($obj)
    {
        $this->initializer23b81 && ($this->initializer23b81->__invoke($valueHolder62a41, $this, 'initializeObject', array('obj' => $obj), $this->initializer23b81) || 1) && $this->valueHolder62a41 = $valueHolder62a41;

        return $this->valueHolder62a41->initializeObject($obj);
    }

    public function getFilters()
    {
        $this->initializer23b81 && ($this->initializer23b81->__invoke($valueHolder62a41, $this, 'getFilters', array(), $this->initializer23b81) || 1) && $this->valueHolder62a41 = $valueHolder62a41;

        return $this->valueHolder62a41->getFilters();
    }

    public function isFiltersStateClean()
    {
        $this->initializer23b81 && ($this->initializer23b81->__invoke($valueHolder62a41, $this, 'isFiltersStateClean', array(), $this->initializer23b81) || 1) && $this->valueHolder62a41 = $valueHolder62a41;

        return $this->valueHolder62a41->isFiltersStateClean();
    }

    public function hasFilters()
    {
        $this->initializer23b81 && ($this->initializer23b81->__invoke($valueHolder62a41, $this, 'hasFilters', array(), $this->initializer23b81) || 1) && $this->valueHolder62a41 = $valueHolder62a41;

        return $this->valueHolder62a41->hasFilters();
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

        $instance->initializer23b81 = $initializer;

        return $instance;
    }

    protected function __construct(\Doctrine\DBAL\Connection $conn, \Doctrine\ORM\Configuration $config, \Doctrine\Common\EventManager $eventManager)
    {
        static $reflection;

        if (! $this->valueHolder62a41) {
            $reflection = $reflection ?? new \ReflectionClass('Doctrine\\ORM\\EntityManager');
            $this->valueHolder62a41 = $reflection->newInstanceWithoutConstructor();
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);

        }

        $this->valueHolder62a41->__construct($conn, $config, $eventManager);
    }

    public function & __get($name)
    {
        $this->initializer23b81 && ($this->initializer23b81->__invoke($valueHolder62a41, $this, '__get', ['name' => $name], $this->initializer23b81) || 1) && $this->valueHolder62a41 = $valueHolder62a41;

        if (isset(self::$publicProperties50eff[$name])) {
            return $this->valueHolder62a41->$name;
        }

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

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

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

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

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

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

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

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
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);
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
