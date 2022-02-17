<?php

namespace ContainerMxGaXdP;
include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'doctrine'.\DIRECTORY_SEPARATOR.'persistence'.\DIRECTORY_SEPARATOR.'lib'.\DIRECTORY_SEPARATOR.'Doctrine'.\DIRECTORY_SEPARATOR.'Persistence'.\DIRECTORY_SEPARATOR.'ObjectManager.php';
include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'doctrine'.\DIRECTORY_SEPARATOR.'orm'.\DIRECTORY_SEPARATOR.'lib'.\DIRECTORY_SEPARATOR.'Doctrine'.\DIRECTORY_SEPARATOR.'ORM'.\DIRECTORY_SEPARATOR.'EntityManagerInterface.php';
include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'doctrine'.\DIRECTORY_SEPARATOR.'orm'.\DIRECTORY_SEPARATOR.'lib'.\DIRECTORY_SEPARATOR.'Doctrine'.\DIRECTORY_SEPARATOR.'ORM'.\DIRECTORY_SEPARATOR.'EntityManager.php';

class EntityManager_9a5be93 extends \Doctrine\ORM\EntityManager implements \ProxyManager\Proxy\VirtualProxyInterface
{
    /**
     * @var \Doctrine\ORM\EntityManager|null wrapped object, if the proxy is initialized
     */
    private $valueHolderb16ef = null;

    /**
     * @var \Closure|null initializer responsible for generating the wrapped object
     */
    private $initializerbb58c = null;

    /**
     * @var bool[] map of public properties of the parent class
     */
    private static $publicPropertiesd5094 = [
        
    ];

    public function getConnection()
    {
        $this->initializerbb58c && ($this->initializerbb58c->__invoke($valueHolderb16ef, $this, 'getConnection', array(), $this->initializerbb58c) || 1) && $this->valueHolderb16ef = $valueHolderb16ef;

        return $this->valueHolderb16ef->getConnection();
    }

    public function getMetadataFactory()
    {
        $this->initializerbb58c && ($this->initializerbb58c->__invoke($valueHolderb16ef, $this, 'getMetadataFactory', array(), $this->initializerbb58c) || 1) && $this->valueHolderb16ef = $valueHolderb16ef;

        return $this->valueHolderb16ef->getMetadataFactory();
    }

    public function getExpressionBuilder()
    {
        $this->initializerbb58c && ($this->initializerbb58c->__invoke($valueHolderb16ef, $this, 'getExpressionBuilder', array(), $this->initializerbb58c) || 1) && $this->valueHolderb16ef = $valueHolderb16ef;

        return $this->valueHolderb16ef->getExpressionBuilder();
    }

    public function beginTransaction()
    {
        $this->initializerbb58c && ($this->initializerbb58c->__invoke($valueHolderb16ef, $this, 'beginTransaction', array(), $this->initializerbb58c) || 1) && $this->valueHolderb16ef = $valueHolderb16ef;

        return $this->valueHolderb16ef->beginTransaction();
    }

    public function getCache()
    {
        $this->initializerbb58c && ($this->initializerbb58c->__invoke($valueHolderb16ef, $this, 'getCache', array(), $this->initializerbb58c) || 1) && $this->valueHolderb16ef = $valueHolderb16ef;

        return $this->valueHolderb16ef->getCache();
    }

    public function transactional($func)
    {
        $this->initializerbb58c && ($this->initializerbb58c->__invoke($valueHolderb16ef, $this, 'transactional', array('func' => $func), $this->initializerbb58c) || 1) && $this->valueHolderb16ef = $valueHolderb16ef;

        return $this->valueHolderb16ef->transactional($func);
    }

    public function wrapInTransaction(callable $func)
    {
        $this->initializerbb58c && ($this->initializerbb58c->__invoke($valueHolderb16ef, $this, 'wrapInTransaction', array('func' => $func), $this->initializerbb58c) || 1) && $this->valueHolderb16ef = $valueHolderb16ef;

        return $this->valueHolderb16ef->wrapInTransaction($func);
    }

    public function commit()
    {
        $this->initializerbb58c && ($this->initializerbb58c->__invoke($valueHolderb16ef, $this, 'commit', array(), $this->initializerbb58c) || 1) && $this->valueHolderb16ef = $valueHolderb16ef;

        return $this->valueHolderb16ef->commit();
    }

    public function rollback()
    {
        $this->initializerbb58c && ($this->initializerbb58c->__invoke($valueHolderb16ef, $this, 'rollback', array(), $this->initializerbb58c) || 1) && $this->valueHolderb16ef = $valueHolderb16ef;

        return $this->valueHolderb16ef->rollback();
    }

    public function getClassMetadata($className)
    {
        $this->initializerbb58c && ($this->initializerbb58c->__invoke($valueHolderb16ef, $this, 'getClassMetadata', array('className' => $className), $this->initializerbb58c) || 1) && $this->valueHolderb16ef = $valueHolderb16ef;

        return $this->valueHolderb16ef->getClassMetadata($className);
    }

    public function createQuery($dql = '')
    {
        $this->initializerbb58c && ($this->initializerbb58c->__invoke($valueHolderb16ef, $this, 'createQuery', array('dql' => $dql), $this->initializerbb58c) || 1) && $this->valueHolderb16ef = $valueHolderb16ef;

        return $this->valueHolderb16ef->createQuery($dql);
    }

    public function createNamedQuery($name)
    {
        $this->initializerbb58c && ($this->initializerbb58c->__invoke($valueHolderb16ef, $this, 'createNamedQuery', array('name' => $name), $this->initializerbb58c) || 1) && $this->valueHolderb16ef = $valueHolderb16ef;

        return $this->valueHolderb16ef->createNamedQuery($name);
    }

    public function createNativeQuery($sql, \Doctrine\ORM\Query\ResultSetMapping $rsm)
    {
        $this->initializerbb58c && ($this->initializerbb58c->__invoke($valueHolderb16ef, $this, 'createNativeQuery', array('sql' => $sql, 'rsm' => $rsm), $this->initializerbb58c) || 1) && $this->valueHolderb16ef = $valueHolderb16ef;

        return $this->valueHolderb16ef->createNativeQuery($sql, $rsm);
    }

    public function createNamedNativeQuery($name)
    {
        $this->initializerbb58c && ($this->initializerbb58c->__invoke($valueHolderb16ef, $this, 'createNamedNativeQuery', array('name' => $name), $this->initializerbb58c) || 1) && $this->valueHolderb16ef = $valueHolderb16ef;

        return $this->valueHolderb16ef->createNamedNativeQuery($name);
    }

    public function createQueryBuilder()
    {
        $this->initializerbb58c && ($this->initializerbb58c->__invoke($valueHolderb16ef, $this, 'createQueryBuilder', array(), $this->initializerbb58c) || 1) && $this->valueHolderb16ef = $valueHolderb16ef;

        return $this->valueHolderb16ef->createQueryBuilder();
    }

    public function flush($entity = null)
    {
        $this->initializerbb58c && ($this->initializerbb58c->__invoke($valueHolderb16ef, $this, 'flush', array('entity' => $entity), $this->initializerbb58c) || 1) && $this->valueHolderb16ef = $valueHolderb16ef;

        return $this->valueHolderb16ef->flush($entity);
    }

    public function find($className, $id, $lockMode = null, $lockVersion = null)
    {
        $this->initializerbb58c && ($this->initializerbb58c->__invoke($valueHolderb16ef, $this, 'find', array('className' => $className, 'id' => $id, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializerbb58c) || 1) && $this->valueHolderb16ef = $valueHolderb16ef;

        return $this->valueHolderb16ef->find($className, $id, $lockMode, $lockVersion);
    }

    public function getReference($entityName, $id)
    {
        $this->initializerbb58c && ($this->initializerbb58c->__invoke($valueHolderb16ef, $this, 'getReference', array('entityName' => $entityName, 'id' => $id), $this->initializerbb58c) || 1) && $this->valueHolderb16ef = $valueHolderb16ef;

        return $this->valueHolderb16ef->getReference($entityName, $id);
    }

    public function getPartialReference($entityName, $identifier)
    {
        $this->initializerbb58c && ($this->initializerbb58c->__invoke($valueHolderb16ef, $this, 'getPartialReference', array('entityName' => $entityName, 'identifier' => $identifier), $this->initializerbb58c) || 1) && $this->valueHolderb16ef = $valueHolderb16ef;

        return $this->valueHolderb16ef->getPartialReference($entityName, $identifier);
    }

    public function clear($entityName = null)
    {
        $this->initializerbb58c && ($this->initializerbb58c->__invoke($valueHolderb16ef, $this, 'clear', array('entityName' => $entityName), $this->initializerbb58c) || 1) && $this->valueHolderb16ef = $valueHolderb16ef;

        return $this->valueHolderb16ef->clear($entityName);
    }

    public function close()
    {
        $this->initializerbb58c && ($this->initializerbb58c->__invoke($valueHolderb16ef, $this, 'close', array(), $this->initializerbb58c) || 1) && $this->valueHolderb16ef = $valueHolderb16ef;

        return $this->valueHolderb16ef->close();
    }

    public function persist($entity)
    {
        $this->initializerbb58c && ($this->initializerbb58c->__invoke($valueHolderb16ef, $this, 'persist', array('entity' => $entity), $this->initializerbb58c) || 1) && $this->valueHolderb16ef = $valueHolderb16ef;

        return $this->valueHolderb16ef->persist($entity);
    }

    public function remove($entity)
    {
        $this->initializerbb58c && ($this->initializerbb58c->__invoke($valueHolderb16ef, $this, 'remove', array('entity' => $entity), $this->initializerbb58c) || 1) && $this->valueHolderb16ef = $valueHolderb16ef;

        return $this->valueHolderb16ef->remove($entity);
    }

    public function refresh($entity)
    {
        $this->initializerbb58c && ($this->initializerbb58c->__invoke($valueHolderb16ef, $this, 'refresh', array('entity' => $entity), $this->initializerbb58c) || 1) && $this->valueHolderb16ef = $valueHolderb16ef;

        return $this->valueHolderb16ef->refresh($entity);
    }

    public function detach($entity)
    {
        $this->initializerbb58c && ($this->initializerbb58c->__invoke($valueHolderb16ef, $this, 'detach', array('entity' => $entity), $this->initializerbb58c) || 1) && $this->valueHolderb16ef = $valueHolderb16ef;

        return $this->valueHolderb16ef->detach($entity);
    }

    public function merge($entity)
    {
        $this->initializerbb58c && ($this->initializerbb58c->__invoke($valueHolderb16ef, $this, 'merge', array('entity' => $entity), $this->initializerbb58c) || 1) && $this->valueHolderb16ef = $valueHolderb16ef;

        return $this->valueHolderb16ef->merge($entity);
    }

    public function copy($entity, $deep = false)
    {
        $this->initializerbb58c && ($this->initializerbb58c->__invoke($valueHolderb16ef, $this, 'copy', array('entity' => $entity, 'deep' => $deep), $this->initializerbb58c) || 1) && $this->valueHolderb16ef = $valueHolderb16ef;

        return $this->valueHolderb16ef->copy($entity, $deep);
    }

    public function lock($entity, $lockMode, $lockVersion = null)
    {
        $this->initializerbb58c && ($this->initializerbb58c->__invoke($valueHolderb16ef, $this, 'lock', array('entity' => $entity, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializerbb58c) || 1) && $this->valueHolderb16ef = $valueHolderb16ef;

        return $this->valueHolderb16ef->lock($entity, $lockMode, $lockVersion);
    }

    public function getRepository($entityName)
    {
        $this->initializerbb58c && ($this->initializerbb58c->__invoke($valueHolderb16ef, $this, 'getRepository', array('entityName' => $entityName), $this->initializerbb58c) || 1) && $this->valueHolderb16ef = $valueHolderb16ef;

        return $this->valueHolderb16ef->getRepository($entityName);
    }

    public function contains($entity)
    {
        $this->initializerbb58c && ($this->initializerbb58c->__invoke($valueHolderb16ef, $this, 'contains', array('entity' => $entity), $this->initializerbb58c) || 1) && $this->valueHolderb16ef = $valueHolderb16ef;

        return $this->valueHolderb16ef->contains($entity);
    }

    public function getEventManager()
    {
        $this->initializerbb58c && ($this->initializerbb58c->__invoke($valueHolderb16ef, $this, 'getEventManager', array(), $this->initializerbb58c) || 1) && $this->valueHolderb16ef = $valueHolderb16ef;

        return $this->valueHolderb16ef->getEventManager();
    }

    public function getConfiguration()
    {
        $this->initializerbb58c && ($this->initializerbb58c->__invoke($valueHolderb16ef, $this, 'getConfiguration', array(), $this->initializerbb58c) || 1) && $this->valueHolderb16ef = $valueHolderb16ef;

        return $this->valueHolderb16ef->getConfiguration();
    }

    public function isOpen()
    {
        $this->initializerbb58c && ($this->initializerbb58c->__invoke($valueHolderb16ef, $this, 'isOpen', array(), $this->initializerbb58c) || 1) && $this->valueHolderb16ef = $valueHolderb16ef;

        return $this->valueHolderb16ef->isOpen();
    }

    public function getUnitOfWork()
    {
        $this->initializerbb58c && ($this->initializerbb58c->__invoke($valueHolderb16ef, $this, 'getUnitOfWork', array(), $this->initializerbb58c) || 1) && $this->valueHolderb16ef = $valueHolderb16ef;

        return $this->valueHolderb16ef->getUnitOfWork();
    }

    public function getHydrator($hydrationMode)
    {
        $this->initializerbb58c && ($this->initializerbb58c->__invoke($valueHolderb16ef, $this, 'getHydrator', array('hydrationMode' => $hydrationMode), $this->initializerbb58c) || 1) && $this->valueHolderb16ef = $valueHolderb16ef;

        return $this->valueHolderb16ef->getHydrator($hydrationMode);
    }

    public function newHydrator($hydrationMode)
    {
        $this->initializerbb58c && ($this->initializerbb58c->__invoke($valueHolderb16ef, $this, 'newHydrator', array('hydrationMode' => $hydrationMode), $this->initializerbb58c) || 1) && $this->valueHolderb16ef = $valueHolderb16ef;

        return $this->valueHolderb16ef->newHydrator($hydrationMode);
    }

    public function getProxyFactory()
    {
        $this->initializerbb58c && ($this->initializerbb58c->__invoke($valueHolderb16ef, $this, 'getProxyFactory', array(), $this->initializerbb58c) || 1) && $this->valueHolderb16ef = $valueHolderb16ef;

        return $this->valueHolderb16ef->getProxyFactory();
    }

    public function initializeObject($obj)
    {
        $this->initializerbb58c && ($this->initializerbb58c->__invoke($valueHolderb16ef, $this, 'initializeObject', array('obj' => $obj), $this->initializerbb58c) || 1) && $this->valueHolderb16ef = $valueHolderb16ef;

        return $this->valueHolderb16ef->initializeObject($obj);
    }

    public function getFilters()
    {
        $this->initializerbb58c && ($this->initializerbb58c->__invoke($valueHolderb16ef, $this, 'getFilters', array(), $this->initializerbb58c) || 1) && $this->valueHolderb16ef = $valueHolderb16ef;

        return $this->valueHolderb16ef->getFilters();
    }

    public function isFiltersStateClean()
    {
        $this->initializerbb58c && ($this->initializerbb58c->__invoke($valueHolderb16ef, $this, 'isFiltersStateClean', array(), $this->initializerbb58c) || 1) && $this->valueHolderb16ef = $valueHolderb16ef;

        return $this->valueHolderb16ef->isFiltersStateClean();
    }

    public function hasFilters()
    {
        $this->initializerbb58c && ($this->initializerbb58c->__invoke($valueHolderb16ef, $this, 'hasFilters', array(), $this->initializerbb58c) || 1) && $this->valueHolderb16ef = $valueHolderb16ef;

        return $this->valueHolderb16ef->hasFilters();
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

        $instance->initializerbb58c = $initializer;

        return $instance;
    }

    protected function __construct(\Doctrine\DBAL\Connection $conn, \Doctrine\ORM\Configuration $config, \Doctrine\Common\EventManager $eventManager)
    {
        static $reflection;

        if (! $this->valueHolderb16ef) {
            $reflection = $reflection ?? new \ReflectionClass('Doctrine\\ORM\\EntityManager');
            $this->valueHolderb16ef = $reflection->newInstanceWithoutConstructor();
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);

        }

        $this->valueHolderb16ef->__construct($conn, $config, $eventManager);
    }

    public function & __get($name)
    {
        $this->initializerbb58c && ($this->initializerbb58c->__invoke($valueHolderb16ef, $this, '__get', ['name' => $name], $this->initializerbb58c) || 1) && $this->valueHolderb16ef = $valueHolderb16ef;

        if (isset(self::$publicPropertiesd5094[$name])) {
            return $this->valueHolderb16ef->$name;
        }

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolderb16ef;

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

        $targetObject = $this->valueHolderb16ef;
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
        $this->initializerbb58c && ($this->initializerbb58c->__invoke($valueHolderb16ef, $this, '__set', array('name' => $name, 'value' => $value), $this->initializerbb58c) || 1) && $this->valueHolderb16ef = $valueHolderb16ef;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolderb16ef;

            $targetObject->$name = $value;

            return $targetObject->$name;
        }

        $targetObject = $this->valueHolderb16ef;
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
        $this->initializerbb58c && ($this->initializerbb58c->__invoke($valueHolderb16ef, $this, '__isset', array('name' => $name), $this->initializerbb58c) || 1) && $this->valueHolderb16ef = $valueHolderb16ef;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolderb16ef;

            return isset($targetObject->$name);
        }

        $targetObject = $this->valueHolderb16ef;
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
        $this->initializerbb58c && ($this->initializerbb58c->__invoke($valueHolderb16ef, $this, '__unset', array('name' => $name), $this->initializerbb58c) || 1) && $this->valueHolderb16ef = $valueHolderb16ef;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolderb16ef;

            unset($targetObject->$name);

            return;
        }

        $targetObject = $this->valueHolderb16ef;
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
        $this->initializerbb58c && ($this->initializerbb58c->__invoke($valueHolderb16ef, $this, '__clone', array(), $this->initializerbb58c) || 1) && $this->valueHolderb16ef = $valueHolderb16ef;

        $this->valueHolderb16ef = clone $this->valueHolderb16ef;
    }

    public function __sleep()
    {
        $this->initializerbb58c && ($this->initializerbb58c->__invoke($valueHolderb16ef, $this, '__sleep', array(), $this->initializerbb58c) || 1) && $this->valueHolderb16ef = $valueHolderb16ef;

        return array('valueHolderb16ef');
    }

    public function __wakeup()
    {
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);
    }

    public function setProxyInitializer(\Closure $initializer = null) : void
    {
        $this->initializerbb58c = $initializer;
    }

    public function getProxyInitializer() : ?\Closure
    {
        return $this->initializerbb58c;
    }

    public function initializeProxy() : bool
    {
        return $this->initializerbb58c && ($this->initializerbb58c->__invoke($valueHolderb16ef, $this, 'initializeProxy', array(), $this->initializerbb58c) || 1) && $this->valueHolderb16ef = $valueHolderb16ef;
    }

    public function isProxyInitialized() : bool
    {
        return null !== $this->valueHolderb16ef;
    }

    public function getWrappedValueHolderValue()
    {
        return $this->valueHolderb16ef;
    }
}

if (!\class_exists('EntityManager_9a5be93', false)) {
    \class_alias(__NAMESPACE__.'\\EntityManager_9a5be93', 'EntityManager_9a5be93', false);
}
