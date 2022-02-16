<?php

namespace ContainerGG1WmB7;
include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'doctrine'.\DIRECTORY_SEPARATOR.'persistence'.\DIRECTORY_SEPARATOR.'lib'.\DIRECTORY_SEPARATOR.'Doctrine'.\DIRECTORY_SEPARATOR.'Persistence'.\DIRECTORY_SEPARATOR.'ObjectManager.php';
include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'doctrine'.\DIRECTORY_SEPARATOR.'orm'.\DIRECTORY_SEPARATOR.'lib'.\DIRECTORY_SEPARATOR.'Doctrine'.\DIRECTORY_SEPARATOR.'ORM'.\DIRECTORY_SEPARATOR.'EntityManagerInterface.php';
include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'doctrine'.\DIRECTORY_SEPARATOR.'orm'.\DIRECTORY_SEPARATOR.'lib'.\DIRECTORY_SEPARATOR.'Doctrine'.\DIRECTORY_SEPARATOR.'ORM'.\DIRECTORY_SEPARATOR.'EntityManager.php';

class EntityManager_9a5be93 extends \Doctrine\ORM\EntityManager implements \ProxyManager\Proxy\VirtualProxyInterface
{
    /**
     * @var \Doctrine\ORM\EntityManager|null wrapped object, if the proxy is initialized
     */
    private $valueHolder77b0e = null;

    /**
     * @var \Closure|null initializer responsible for generating the wrapped object
     */
    private $initializerae1e4 = null;

    /**
     * @var bool[] map of public properties of the parent class
     */
    private static $publicPropertiesf64b0 = [
        
    ];

    public function getConnection()
    {
        $this->initializerae1e4 && ($this->initializerae1e4->__invoke($valueHolder77b0e, $this, 'getConnection', array(), $this->initializerae1e4) || 1) && $this->valueHolder77b0e = $valueHolder77b0e;

        return $this->valueHolder77b0e->getConnection();
    }

    public function getMetadataFactory()
    {
        $this->initializerae1e4 && ($this->initializerae1e4->__invoke($valueHolder77b0e, $this, 'getMetadataFactory', array(), $this->initializerae1e4) || 1) && $this->valueHolder77b0e = $valueHolder77b0e;

        return $this->valueHolder77b0e->getMetadataFactory();
    }

    public function getExpressionBuilder()
    {
        $this->initializerae1e4 && ($this->initializerae1e4->__invoke($valueHolder77b0e, $this, 'getExpressionBuilder', array(), $this->initializerae1e4) || 1) && $this->valueHolder77b0e = $valueHolder77b0e;

        return $this->valueHolder77b0e->getExpressionBuilder();
    }

    public function beginTransaction()
    {
        $this->initializerae1e4 && ($this->initializerae1e4->__invoke($valueHolder77b0e, $this, 'beginTransaction', array(), $this->initializerae1e4) || 1) && $this->valueHolder77b0e = $valueHolder77b0e;

        return $this->valueHolder77b0e->beginTransaction();
    }

    public function getCache()
    {
        $this->initializerae1e4 && ($this->initializerae1e4->__invoke($valueHolder77b0e, $this, 'getCache', array(), $this->initializerae1e4) || 1) && $this->valueHolder77b0e = $valueHolder77b0e;

        return $this->valueHolder77b0e->getCache();
    }

    public function transactional($func)
    {
        $this->initializerae1e4 && ($this->initializerae1e4->__invoke($valueHolder77b0e, $this, 'transactional', array('func' => $func), $this->initializerae1e4) || 1) && $this->valueHolder77b0e = $valueHolder77b0e;

        return $this->valueHolder77b0e->transactional($func);
    }

    public function wrapInTransaction(callable $func)
    {
        $this->initializerae1e4 && ($this->initializerae1e4->__invoke($valueHolder77b0e, $this, 'wrapInTransaction', array('func' => $func), $this->initializerae1e4) || 1) && $this->valueHolder77b0e = $valueHolder77b0e;

        return $this->valueHolder77b0e->wrapInTransaction($func);
    }

    public function commit()
    {
        $this->initializerae1e4 && ($this->initializerae1e4->__invoke($valueHolder77b0e, $this, 'commit', array(), $this->initializerae1e4) || 1) && $this->valueHolder77b0e = $valueHolder77b0e;

        return $this->valueHolder77b0e->commit();
    }

    public function rollback()
    {
        $this->initializerae1e4 && ($this->initializerae1e4->__invoke($valueHolder77b0e, $this, 'rollback', array(), $this->initializerae1e4) || 1) && $this->valueHolder77b0e = $valueHolder77b0e;

        return $this->valueHolder77b0e->rollback();
    }

    public function getClassMetadata($className)
    {
        $this->initializerae1e4 && ($this->initializerae1e4->__invoke($valueHolder77b0e, $this, 'getClassMetadata', array('className' => $className), $this->initializerae1e4) || 1) && $this->valueHolder77b0e = $valueHolder77b0e;

        return $this->valueHolder77b0e->getClassMetadata($className);
    }

    public function createQuery($dql = '')
    {
        $this->initializerae1e4 && ($this->initializerae1e4->__invoke($valueHolder77b0e, $this, 'createQuery', array('dql' => $dql), $this->initializerae1e4) || 1) && $this->valueHolder77b0e = $valueHolder77b0e;

        return $this->valueHolder77b0e->createQuery($dql);
    }

    public function createNamedQuery($name)
    {
        $this->initializerae1e4 && ($this->initializerae1e4->__invoke($valueHolder77b0e, $this, 'createNamedQuery', array('name' => $name), $this->initializerae1e4) || 1) && $this->valueHolder77b0e = $valueHolder77b0e;

        return $this->valueHolder77b0e->createNamedQuery($name);
    }

    public function createNativeQuery($sql, \Doctrine\ORM\Query\ResultSetMapping $rsm)
    {
        $this->initializerae1e4 && ($this->initializerae1e4->__invoke($valueHolder77b0e, $this, 'createNativeQuery', array('sql' => $sql, 'rsm' => $rsm), $this->initializerae1e4) || 1) && $this->valueHolder77b0e = $valueHolder77b0e;

        return $this->valueHolder77b0e->createNativeQuery($sql, $rsm);
    }

    public function createNamedNativeQuery($name)
    {
        $this->initializerae1e4 && ($this->initializerae1e4->__invoke($valueHolder77b0e, $this, 'createNamedNativeQuery', array('name' => $name), $this->initializerae1e4) || 1) && $this->valueHolder77b0e = $valueHolder77b0e;

        return $this->valueHolder77b0e->createNamedNativeQuery($name);
    }

    public function createQueryBuilder()
    {
        $this->initializerae1e4 && ($this->initializerae1e4->__invoke($valueHolder77b0e, $this, 'createQueryBuilder', array(), $this->initializerae1e4) || 1) && $this->valueHolder77b0e = $valueHolder77b0e;

        return $this->valueHolder77b0e->createQueryBuilder();
    }

    public function flush($entity = null)
    {
        $this->initializerae1e4 && ($this->initializerae1e4->__invoke($valueHolder77b0e, $this, 'flush', array('entity' => $entity), $this->initializerae1e4) || 1) && $this->valueHolder77b0e = $valueHolder77b0e;

        return $this->valueHolder77b0e->flush($entity);
    }

    public function find($className, $id, $lockMode = null, $lockVersion = null)
    {
        $this->initializerae1e4 && ($this->initializerae1e4->__invoke($valueHolder77b0e, $this, 'find', array('className' => $className, 'id' => $id, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializerae1e4) || 1) && $this->valueHolder77b0e = $valueHolder77b0e;

        return $this->valueHolder77b0e->find($className, $id, $lockMode, $lockVersion);
    }

    public function getReference($entityName, $id)
    {
        $this->initializerae1e4 && ($this->initializerae1e4->__invoke($valueHolder77b0e, $this, 'getReference', array('entityName' => $entityName, 'id' => $id), $this->initializerae1e4) || 1) && $this->valueHolder77b0e = $valueHolder77b0e;

        return $this->valueHolder77b0e->getReference($entityName, $id);
    }

    public function getPartialReference($entityName, $identifier)
    {
        $this->initializerae1e4 && ($this->initializerae1e4->__invoke($valueHolder77b0e, $this, 'getPartialReference', array('entityName' => $entityName, 'identifier' => $identifier), $this->initializerae1e4) || 1) && $this->valueHolder77b0e = $valueHolder77b0e;

        return $this->valueHolder77b0e->getPartialReference($entityName, $identifier);
    }

    public function clear($entityName = null)
    {
        $this->initializerae1e4 && ($this->initializerae1e4->__invoke($valueHolder77b0e, $this, 'clear', array('entityName' => $entityName), $this->initializerae1e4) || 1) && $this->valueHolder77b0e = $valueHolder77b0e;

        return $this->valueHolder77b0e->clear($entityName);
    }

    public function close()
    {
        $this->initializerae1e4 && ($this->initializerae1e4->__invoke($valueHolder77b0e, $this, 'close', array(), $this->initializerae1e4) || 1) && $this->valueHolder77b0e = $valueHolder77b0e;

        return $this->valueHolder77b0e->close();
    }

    public function persist($entity)
    {
        $this->initializerae1e4 && ($this->initializerae1e4->__invoke($valueHolder77b0e, $this, 'persist', array('entity' => $entity), $this->initializerae1e4) || 1) && $this->valueHolder77b0e = $valueHolder77b0e;

        return $this->valueHolder77b0e->persist($entity);
    }

    public function remove($entity)
    {
        $this->initializerae1e4 && ($this->initializerae1e4->__invoke($valueHolder77b0e, $this, 'remove', array('entity' => $entity), $this->initializerae1e4) || 1) && $this->valueHolder77b0e = $valueHolder77b0e;

        return $this->valueHolder77b0e->remove($entity);
    }

    public function refresh($entity)
    {
        $this->initializerae1e4 && ($this->initializerae1e4->__invoke($valueHolder77b0e, $this, 'refresh', array('entity' => $entity), $this->initializerae1e4) || 1) && $this->valueHolder77b0e = $valueHolder77b0e;

        return $this->valueHolder77b0e->refresh($entity);
    }

    public function detach($entity)
    {
        $this->initializerae1e4 && ($this->initializerae1e4->__invoke($valueHolder77b0e, $this, 'detach', array('entity' => $entity), $this->initializerae1e4) || 1) && $this->valueHolder77b0e = $valueHolder77b0e;

        return $this->valueHolder77b0e->detach($entity);
    }

    public function merge($entity)
    {
        $this->initializerae1e4 && ($this->initializerae1e4->__invoke($valueHolder77b0e, $this, 'merge', array('entity' => $entity), $this->initializerae1e4) || 1) && $this->valueHolder77b0e = $valueHolder77b0e;

        return $this->valueHolder77b0e->merge($entity);
    }

    public function copy($entity, $deep = false)
    {
        $this->initializerae1e4 && ($this->initializerae1e4->__invoke($valueHolder77b0e, $this, 'copy', array('entity' => $entity, 'deep' => $deep), $this->initializerae1e4) || 1) && $this->valueHolder77b0e = $valueHolder77b0e;

        return $this->valueHolder77b0e->copy($entity, $deep);
    }

    public function lock($entity, $lockMode, $lockVersion = null)
    {
        $this->initializerae1e4 && ($this->initializerae1e4->__invoke($valueHolder77b0e, $this, 'lock', array('entity' => $entity, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializerae1e4) || 1) && $this->valueHolder77b0e = $valueHolder77b0e;

        return $this->valueHolder77b0e->lock($entity, $lockMode, $lockVersion);
    }

    public function getRepository($entityName)
    {
        $this->initializerae1e4 && ($this->initializerae1e4->__invoke($valueHolder77b0e, $this, 'getRepository', array('entityName' => $entityName), $this->initializerae1e4) || 1) && $this->valueHolder77b0e = $valueHolder77b0e;

        return $this->valueHolder77b0e->getRepository($entityName);
    }

    public function contains($entity)
    {
        $this->initializerae1e4 && ($this->initializerae1e4->__invoke($valueHolder77b0e, $this, 'contains', array('entity' => $entity), $this->initializerae1e4) || 1) && $this->valueHolder77b0e = $valueHolder77b0e;

        return $this->valueHolder77b0e->contains($entity);
    }

    public function getEventManager()
    {
        $this->initializerae1e4 && ($this->initializerae1e4->__invoke($valueHolder77b0e, $this, 'getEventManager', array(), $this->initializerae1e4) || 1) && $this->valueHolder77b0e = $valueHolder77b0e;

        return $this->valueHolder77b0e->getEventManager();
    }

    public function getConfiguration()
    {
        $this->initializerae1e4 && ($this->initializerae1e4->__invoke($valueHolder77b0e, $this, 'getConfiguration', array(), $this->initializerae1e4) || 1) && $this->valueHolder77b0e = $valueHolder77b0e;

        return $this->valueHolder77b0e->getConfiguration();
    }

    public function isOpen()
    {
        $this->initializerae1e4 && ($this->initializerae1e4->__invoke($valueHolder77b0e, $this, 'isOpen', array(), $this->initializerae1e4) || 1) && $this->valueHolder77b0e = $valueHolder77b0e;

        return $this->valueHolder77b0e->isOpen();
    }

    public function getUnitOfWork()
    {
        $this->initializerae1e4 && ($this->initializerae1e4->__invoke($valueHolder77b0e, $this, 'getUnitOfWork', array(), $this->initializerae1e4) || 1) && $this->valueHolder77b0e = $valueHolder77b0e;

        return $this->valueHolder77b0e->getUnitOfWork();
    }

    public function getHydrator($hydrationMode)
    {
        $this->initializerae1e4 && ($this->initializerae1e4->__invoke($valueHolder77b0e, $this, 'getHydrator', array('hydrationMode' => $hydrationMode), $this->initializerae1e4) || 1) && $this->valueHolder77b0e = $valueHolder77b0e;

        return $this->valueHolder77b0e->getHydrator($hydrationMode);
    }

    public function newHydrator($hydrationMode)
    {
        $this->initializerae1e4 && ($this->initializerae1e4->__invoke($valueHolder77b0e, $this, 'newHydrator', array('hydrationMode' => $hydrationMode), $this->initializerae1e4) || 1) && $this->valueHolder77b0e = $valueHolder77b0e;

        return $this->valueHolder77b0e->newHydrator($hydrationMode);
    }

    public function getProxyFactory()
    {
        $this->initializerae1e4 && ($this->initializerae1e4->__invoke($valueHolder77b0e, $this, 'getProxyFactory', array(), $this->initializerae1e4) || 1) && $this->valueHolder77b0e = $valueHolder77b0e;

        return $this->valueHolder77b0e->getProxyFactory();
    }

    public function initializeObject($obj)
    {
        $this->initializerae1e4 && ($this->initializerae1e4->__invoke($valueHolder77b0e, $this, 'initializeObject', array('obj' => $obj), $this->initializerae1e4) || 1) && $this->valueHolder77b0e = $valueHolder77b0e;

        return $this->valueHolder77b0e->initializeObject($obj);
    }

    public function getFilters()
    {
        $this->initializerae1e4 && ($this->initializerae1e4->__invoke($valueHolder77b0e, $this, 'getFilters', array(), $this->initializerae1e4) || 1) && $this->valueHolder77b0e = $valueHolder77b0e;

        return $this->valueHolder77b0e->getFilters();
    }

    public function isFiltersStateClean()
    {
        $this->initializerae1e4 && ($this->initializerae1e4->__invoke($valueHolder77b0e, $this, 'isFiltersStateClean', array(), $this->initializerae1e4) || 1) && $this->valueHolder77b0e = $valueHolder77b0e;

        return $this->valueHolder77b0e->isFiltersStateClean();
    }

    public function hasFilters()
    {
        $this->initializerae1e4 && ($this->initializerae1e4->__invoke($valueHolder77b0e, $this, 'hasFilters', array(), $this->initializerae1e4) || 1) && $this->valueHolder77b0e = $valueHolder77b0e;

        return $this->valueHolder77b0e->hasFilters();
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

        $instance->initializerae1e4 = $initializer;

        return $instance;
    }

    protected function __construct(\Doctrine\DBAL\Connection $conn, \Doctrine\ORM\Configuration $config, \Doctrine\Common\EventManager $eventManager)
    {
        static $reflection;

        if (! $this->valueHolder77b0e) {
            $reflection = $reflection ?? new \ReflectionClass('Doctrine\\ORM\\EntityManager');
            $this->valueHolder77b0e = $reflection->newInstanceWithoutConstructor();
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);

        }

        $this->valueHolder77b0e->__construct($conn, $config, $eventManager);
    }

    public function & __get($name)
    {
        $this->initializerae1e4 && ($this->initializerae1e4->__invoke($valueHolder77b0e, $this, '__get', ['name' => $name], $this->initializerae1e4) || 1) && $this->valueHolder77b0e = $valueHolder77b0e;

        if (isset(self::$publicPropertiesf64b0[$name])) {
            return $this->valueHolder77b0e->$name;
        }

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder77b0e;

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

        $targetObject = $this->valueHolder77b0e;
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
        $this->initializerae1e4 && ($this->initializerae1e4->__invoke($valueHolder77b0e, $this, '__set', array('name' => $name, 'value' => $value), $this->initializerae1e4) || 1) && $this->valueHolder77b0e = $valueHolder77b0e;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder77b0e;

            $targetObject->$name = $value;

            return $targetObject->$name;
        }

        $targetObject = $this->valueHolder77b0e;
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
        $this->initializerae1e4 && ($this->initializerae1e4->__invoke($valueHolder77b0e, $this, '__isset', array('name' => $name), $this->initializerae1e4) || 1) && $this->valueHolder77b0e = $valueHolder77b0e;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder77b0e;

            return isset($targetObject->$name);
        }

        $targetObject = $this->valueHolder77b0e;
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
        $this->initializerae1e4 && ($this->initializerae1e4->__invoke($valueHolder77b0e, $this, '__unset', array('name' => $name), $this->initializerae1e4) || 1) && $this->valueHolder77b0e = $valueHolder77b0e;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder77b0e;

            unset($targetObject->$name);

            return;
        }

        $targetObject = $this->valueHolder77b0e;
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
        $this->initializerae1e4 && ($this->initializerae1e4->__invoke($valueHolder77b0e, $this, '__clone', array(), $this->initializerae1e4) || 1) && $this->valueHolder77b0e = $valueHolder77b0e;

        $this->valueHolder77b0e = clone $this->valueHolder77b0e;
    }

    public function __sleep()
    {
        $this->initializerae1e4 && ($this->initializerae1e4->__invoke($valueHolder77b0e, $this, '__sleep', array(), $this->initializerae1e4) || 1) && $this->valueHolder77b0e = $valueHolder77b0e;

        return array('valueHolder77b0e');
    }

    public function __wakeup()
    {
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);
    }

    public function setProxyInitializer(\Closure $initializer = null) : void
    {
        $this->initializerae1e4 = $initializer;
    }

    public function getProxyInitializer() : ?\Closure
    {
        return $this->initializerae1e4;
    }

    public function initializeProxy() : bool
    {
        return $this->initializerae1e4 && ($this->initializerae1e4->__invoke($valueHolder77b0e, $this, 'initializeProxy', array(), $this->initializerae1e4) || 1) && $this->valueHolder77b0e = $valueHolder77b0e;
    }

    public function isProxyInitialized() : bool
    {
        return null !== $this->valueHolder77b0e;
    }

    public function getWrappedValueHolderValue()
    {
        return $this->valueHolder77b0e;
    }
}

if (!\class_exists('EntityManager_9a5be93', false)) {
    \class_alias(__NAMESPACE__.'\\EntityManager_9a5be93', 'EntityManager_9a5be93', false);
}
