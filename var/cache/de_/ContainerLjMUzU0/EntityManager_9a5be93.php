<?php

class EntityManager_9a5be93 extends \Doctrine\ORM\EntityManager implements \ProxyManager\Proxy\VirtualProxyInterface
{
    /**
     * @var \Doctrine\ORM\EntityManager|null wrapped object, if the proxy is initialized
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

    public function getConnection()
    {
        $this->initializer85dbc && ($this->initializer85dbc->__invoke($valueHolderccb46, $this, 'getConnection', array(), $this->initializer85dbc) || 1) && $this->valueHolderccb46 = $valueHolderccb46;

        return $this->valueHolderccb46->getConnection();
    }

    public function getMetadataFactory()
    {
        $this->initializer85dbc && ($this->initializer85dbc->__invoke($valueHolderccb46, $this, 'getMetadataFactory', array(), $this->initializer85dbc) || 1) && $this->valueHolderccb46 = $valueHolderccb46;

        return $this->valueHolderccb46->getMetadataFactory();
    }

    public function getExpressionBuilder()
    {
        $this->initializer85dbc && ($this->initializer85dbc->__invoke($valueHolderccb46, $this, 'getExpressionBuilder', array(), $this->initializer85dbc) || 1) && $this->valueHolderccb46 = $valueHolderccb46;

        return $this->valueHolderccb46->getExpressionBuilder();
    }

    public function beginTransaction()
    {
        $this->initializer85dbc && ($this->initializer85dbc->__invoke($valueHolderccb46, $this, 'beginTransaction', array(), $this->initializer85dbc) || 1) && $this->valueHolderccb46 = $valueHolderccb46;

        return $this->valueHolderccb46->beginTransaction();
    }

    public function getCache()
    {
        $this->initializer85dbc && ($this->initializer85dbc->__invoke($valueHolderccb46, $this, 'getCache', array(), $this->initializer85dbc) || 1) && $this->valueHolderccb46 = $valueHolderccb46;

        return $this->valueHolderccb46->getCache();
    }

    public function transactional($func)
    {
        $this->initializer85dbc && ($this->initializer85dbc->__invoke($valueHolderccb46, $this, 'transactional', array('func' => $func), $this->initializer85dbc) || 1) && $this->valueHolderccb46 = $valueHolderccb46;

        return $this->valueHolderccb46->transactional($func);
    }

    public function wrapInTransaction(callable $func)
    {
        $this->initializer85dbc && ($this->initializer85dbc->__invoke($valueHolderccb46, $this, 'wrapInTransaction', array('func' => $func), $this->initializer85dbc) || 1) && $this->valueHolderccb46 = $valueHolderccb46;

        return $this->valueHolderccb46->wrapInTransaction($func);
    }

    public function commit()
    {
        $this->initializer85dbc && ($this->initializer85dbc->__invoke($valueHolderccb46, $this, 'commit', array(), $this->initializer85dbc) || 1) && $this->valueHolderccb46 = $valueHolderccb46;

        return $this->valueHolderccb46->commit();
    }

    public function rollback()
    {
        $this->initializer85dbc && ($this->initializer85dbc->__invoke($valueHolderccb46, $this, 'rollback', array(), $this->initializer85dbc) || 1) && $this->valueHolderccb46 = $valueHolderccb46;

        return $this->valueHolderccb46->rollback();
    }

    public function getClassMetadata($className)
    {
        $this->initializer85dbc && ($this->initializer85dbc->__invoke($valueHolderccb46, $this, 'getClassMetadata', array('className' => $className), $this->initializer85dbc) || 1) && $this->valueHolderccb46 = $valueHolderccb46;

        return $this->valueHolderccb46->getClassMetadata($className);
    }

    public function createQuery($dql = '')
    {
        $this->initializer85dbc && ($this->initializer85dbc->__invoke($valueHolderccb46, $this, 'createQuery', array('dql' => $dql), $this->initializer85dbc) || 1) && $this->valueHolderccb46 = $valueHolderccb46;

        return $this->valueHolderccb46->createQuery($dql);
    }

    public function createNamedQuery($name)
    {
        $this->initializer85dbc && ($this->initializer85dbc->__invoke($valueHolderccb46, $this, 'createNamedQuery', array('name' => $name), $this->initializer85dbc) || 1) && $this->valueHolderccb46 = $valueHolderccb46;

        return $this->valueHolderccb46->createNamedQuery($name);
    }

    public function createNativeQuery($sql, \Doctrine\ORM\Query\ResultSetMapping $rsm)
    {
        $this->initializer85dbc && ($this->initializer85dbc->__invoke($valueHolderccb46, $this, 'createNativeQuery', array('sql' => $sql, 'rsm' => $rsm), $this->initializer85dbc) || 1) && $this->valueHolderccb46 = $valueHolderccb46;

        return $this->valueHolderccb46->createNativeQuery($sql, $rsm);
    }

    public function createNamedNativeQuery($name)
    {
        $this->initializer85dbc && ($this->initializer85dbc->__invoke($valueHolderccb46, $this, 'createNamedNativeQuery', array('name' => $name), $this->initializer85dbc) || 1) && $this->valueHolderccb46 = $valueHolderccb46;

        return $this->valueHolderccb46->createNamedNativeQuery($name);
    }

    public function createQueryBuilder()
    {
        $this->initializer85dbc && ($this->initializer85dbc->__invoke($valueHolderccb46, $this, 'createQueryBuilder', array(), $this->initializer85dbc) || 1) && $this->valueHolderccb46 = $valueHolderccb46;

        return $this->valueHolderccb46->createQueryBuilder();
    }

    public function flush($entity = null)
    {
        $this->initializer85dbc && ($this->initializer85dbc->__invoke($valueHolderccb46, $this, 'flush', array('entity' => $entity), $this->initializer85dbc) || 1) && $this->valueHolderccb46 = $valueHolderccb46;

        return $this->valueHolderccb46->flush($entity);
    }

    public function find($className, $id, $lockMode = null, $lockVersion = null)
    {
        $this->initializer85dbc && ($this->initializer85dbc->__invoke($valueHolderccb46, $this, 'find', array('className' => $className, 'id' => $id, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializer85dbc) || 1) && $this->valueHolderccb46 = $valueHolderccb46;

        return $this->valueHolderccb46->find($className, $id, $lockMode, $lockVersion);
    }

    public function getReference($entityName, $id)
    {
        $this->initializer85dbc && ($this->initializer85dbc->__invoke($valueHolderccb46, $this, 'getReference', array('entityName' => $entityName, 'id' => $id), $this->initializer85dbc) || 1) && $this->valueHolderccb46 = $valueHolderccb46;

        return $this->valueHolderccb46->getReference($entityName, $id);
    }

    public function getPartialReference($entityName, $identifier)
    {
        $this->initializer85dbc && ($this->initializer85dbc->__invoke($valueHolderccb46, $this, 'getPartialReference', array('entityName' => $entityName, 'identifier' => $identifier), $this->initializer85dbc) || 1) && $this->valueHolderccb46 = $valueHolderccb46;

        return $this->valueHolderccb46->getPartialReference($entityName, $identifier);
    }

    public function clear($entityName = null)
    {
        $this->initializer85dbc && ($this->initializer85dbc->__invoke($valueHolderccb46, $this, 'clear', array('entityName' => $entityName), $this->initializer85dbc) || 1) && $this->valueHolderccb46 = $valueHolderccb46;

        return $this->valueHolderccb46->clear($entityName);
    }

    public function close()
    {
        $this->initializer85dbc && ($this->initializer85dbc->__invoke($valueHolderccb46, $this, 'close', array(), $this->initializer85dbc) || 1) && $this->valueHolderccb46 = $valueHolderccb46;

        return $this->valueHolderccb46->close();
    }

    public function persist($entity)
    {
        $this->initializer85dbc && ($this->initializer85dbc->__invoke($valueHolderccb46, $this, 'persist', array('entity' => $entity), $this->initializer85dbc) || 1) && $this->valueHolderccb46 = $valueHolderccb46;

        return $this->valueHolderccb46->persist($entity);
    }

    public function remove($entity)
    {
        $this->initializer85dbc && ($this->initializer85dbc->__invoke($valueHolderccb46, $this, 'remove', array('entity' => $entity), $this->initializer85dbc) || 1) && $this->valueHolderccb46 = $valueHolderccb46;

        return $this->valueHolderccb46->remove($entity);
    }

    public function refresh($entity)
    {
        $this->initializer85dbc && ($this->initializer85dbc->__invoke($valueHolderccb46, $this, 'refresh', array('entity' => $entity), $this->initializer85dbc) || 1) && $this->valueHolderccb46 = $valueHolderccb46;

        return $this->valueHolderccb46->refresh($entity);
    }

    public function detach($entity)
    {
        $this->initializer85dbc && ($this->initializer85dbc->__invoke($valueHolderccb46, $this, 'detach', array('entity' => $entity), $this->initializer85dbc) || 1) && $this->valueHolderccb46 = $valueHolderccb46;

        return $this->valueHolderccb46->detach($entity);
    }

    public function merge($entity)
    {
        $this->initializer85dbc && ($this->initializer85dbc->__invoke($valueHolderccb46, $this, 'merge', array('entity' => $entity), $this->initializer85dbc) || 1) && $this->valueHolderccb46 = $valueHolderccb46;

        return $this->valueHolderccb46->merge($entity);
    }

    public function copy($entity, $deep = false)
    {
        $this->initializer85dbc && ($this->initializer85dbc->__invoke($valueHolderccb46, $this, 'copy', array('entity' => $entity, 'deep' => $deep), $this->initializer85dbc) || 1) && $this->valueHolderccb46 = $valueHolderccb46;

        return $this->valueHolderccb46->copy($entity, $deep);
    }

    public function lock($entity, $lockMode, $lockVersion = null)
    {
        $this->initializer85dbc && ($this->initializer85dbc->__invoke($valueHolderccb46, $this, 'lock', array('entity' => $entity, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializer85dbc) || 1) && $this->valueHolderccb46 = $valueHolderccb46;

        return $this->valueHolderccb46->lock($entity, $lockMode, $lockVersion);
    }

    public function getRepository($entityName)
    {
        $this->initializer85dbc && ($this->initializer85dbc->__invoke($valueHolderccb46, $this, 'getRepository', array('entityName' => $entityName), $this->initializer85dbc) || 1) && $this->valueHolderccb46 = $valueHolderccb46;

        return $this->valueHolderccb46->getRepository($entityName);
    }

    public function contains($entity)
    {
        $this->initializer85dbc && ($this->initializer85dbc->__invoke($valueHolderccb46, $this, 'contains', array('entity' => $entity), $this->initializer85dbc) || 1) && $this->valueHolderccb46 = $valueHolderccb46;

        return $this->valueHolderccb46->contains($entity);
    }

    public function getEventManager()
    {
        $this->initializer85dbc && ($this->initializer85dbc->__invoke($valueHolderccb46, $this, 'getEventManager', array(), $this->initializer85dbc) || 1) && $this->valueHolderccb46 = $valueHolderccb46;

        return $this->valueHolderccb46->getEventManager();
    }

    public function getConfiguration()
    {
        $this->initializer85dbc && ($this->initializer85dbc->__invoke($valueHolderccb46, $this, 'getConfiguration', array(), $this->initializer85dbc) || 1) && $this->valueHolderccb46 = $valueHolderccb46;

        return $this->valueHolderccb46->getConfiguration();
    }

    public function isOpen()
    {
        $this->initializer85dbc && ($this->initializer85dbc->__invoke($valueHolderccb46, $this, 'isOpen', array(), $this->initializer85dbc) || 1) && $this->valueHolderccb46 = $valueHolderccb46;

        return $this->valueHolderccb46->isOpen();
    }

    public function getUnitOfWork()
    {
        $this->initializer85dbc && ($this->initializer85dbc->__invoke($valueHolderccb46, $this, 'getUnitOfWork', array(), $this->initializer85dbc) || 1) && $this->valueHolderccb46 = $valueHolderccb46;

        return $this->valueHolderccb46->getUnitOfWork();
    }

    public function getHydrator($hydrationMode)
    {
        $this->initializer85dbc && ($this->initializer85dbc->__invoke($valueHolderccb46, $this, 'getHydrator', array('hydrationMode' => $hydrationMode), $this->initializer85dbc) || 1) && $this->valueHolderccb46 = $valueHolderccb46;

        return $this->valueHolderccb46->getHydrator($hydrationMode);
    }

    public function newHydrator($hydrationMode)
    {
        $this->initializer85dbc && ($this->initializer85dbc->__invoke($valueHolderccb46, $this, 'newHydrator', array('hydrationMode' => $hydrationMode), $this->initializer85dbc) || 1) && $this->valueHolderccb46 = $valueHolderccb46;

        return $this->valueHolderccb46->newHydrator($hydrationMode);
    }

    public function getProxyFactory()
    {
        $this->initializer85dbc && ($this->initializer85dbc->__invoke($valueHolderccb46, $this, 'getProxyFactory', array(), $this->initializer85dbc) || 1) && $this->valueHolderccb46 = $valueHolderccb46;

        return $this->valueHolderccb46->getProxyFactory();
    }

    public function initializeObject($obj)
    {
        $this->initializer85dbc && ($this->initializer85dbc->__invoke($valueHolderccb46, $this, 'initializeObject', array('obj' => $obj), $this->initializer85dbc) || 1) && $this->valueHolderccb46 = $valueHolderccb46;

        return $this->valueHolderccb46->initializeObject($obj);
    }

    public function getFilters()
    {
        $this->initializer85dbc && ($this->initializer85dbc->__invoke($valueHolderccb46, $this, 'getFilters', array(), $this->initializer85dbc) || 1) && $this->valueHolderccb46 = $valueHolderccb46;

        return $this->valueHolderccb46->getFilters();
    }

    public function isFiltersStateClean()
    {
        $this->initializer85dbc && ($this->initializer85dbc->__invoke($valueHolderccb46, $this, 'isFiltersStateClean', array(), $this->initializer85dbc) || 1) && $this->valueHolderccb46 = $valueHolderccb46;

        return $this->valueHolderccb46->isFiltersStateClean();
    }

    public function hasFilters()
    {
        $this->initializer85dbc && ($this->initializer85dbc->__invoke($valueHolderccb46, $this, 'hasFilters', array(), $this->initializer85dbc) || 1) && $this->valueHolderccb46 = $valueHolderccb46;

        return $this->valueHolderccb46->hasFilters();
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

        $instance->initializer85dbc = $initializer;

        return $instance;
    }

    protected function __construct(\Doctrine\DBAL\Connection $conn, \Doctrine\ORM\Configuration $config, \Doctrine\Common\EventManager $eventManager)
    {
        static $reflection;

        if (! $this->valueHolderccb46) {
            $reflection = $reflection ?? new \ReflectionClass('Doctrine\\ORM\\EntityManager');
            $this->valueHolderccb46 = $reflection->newInstanceWithoutConstructor();
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);

        }

        $this->valueHolderccb46->__construct($conn, $config, $eventManager);
    }

    public function & __get($name)
    {
        $this->initializer85dbc && ($this->initializer85dbc->__invoke($valueHolderccb46, $this, '__get', ['name' => $name], $this->initializer85dbc) || 1) && $this->valueHolderccb46 = $valueHolderccb46;

        if (isset(self::$publicProperties22b55[$name])) {
            return $this->valueHolderccb46->$name;
        }

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

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

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

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

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

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

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

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
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);
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
