<?php

namespace ContainerQBNN73J;
include_once \dirname(__DIR__, 5).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'doctrine'.\DIRECTORY_SEPARATOR.'persistence'.\DIRECTORY_SEPARATOR.'src'.\DIRECTORY_SEPARATOR.'Persistence'.\DIRECTORY_SEPARATOR.'ObjectManager.php';
include_once \dirname(__DIR__, 5).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'doctrine'.\DIRECTORY_SEPARATOR.'orm'.\DIRECTORY_SEPARATOR.'lib'.\DIRECTORY_SEPARATOR.'Doctrine'.\DIRECTORY_SEPARATOR.'ORM'.\DIRECTORY_SEPARATOR.'EntityManagerInterface.php';
include_once \dirname(__DIR__, 5).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'doctrine'.\DIRECTORY_SEPARATOR.'orm'.\DIRECTORY_SEPARATOR.'lib'.\DIRECTORY_SEPARATOR.'Doctrine'.\DIRECTORY_SEPARATOR.'ORM'.\DIRECTORY_SEPARATOR.'EntityManager.php';

class EntityManager_9a5be93 extends \Doctrine\ORM\EntityManager implements \ProxyManager\Proxy\VirtualProxyInterface
{
    /**
     * @var \Doctrine\ORM\EntityManager|null wrapped object, if the proxy is initialized
     */
    private $valueHolderd24a7 = null;

    /**
     * @var \Closure|null initializer responsible for generating the wrapped object
     */
    private $initializerc6f83 = null;

    /**
     * @var bool[] map of public properties of the parent class
     */
    private static $publicProperties7db19 = [
        
    ];

    public function getConnection()
    {
        $this->initializerc6f83 && ($this->initializerc6f83->__invoke($valueHolderd24a7, $this, 'getConnection', array(), $this->initializerc6f83) || 1) && $this->valueHolderd24a7 = $valueHolderd24a7;

        return $this->valueHolderd24a7->getConnection();
    }

    public function getMetadataFactory()
    {
        $this->initializerc6f83 && ($this->initializerc6f83->__invoke($valueHolderd24a7, $this, 'getMetadataFactory', array(), $this->initializerc6f83) || 1) && $this->valueHolderd24a7 = $valueHolderd24a7;

        return $this->valueHolderd24a7->getMetadataFactory();
    }

    public function getExpressionBuilder()
    {
        $this->initializerc6f83 && ($this->initializerc6f83->__invoke($valueHolderd24a7, $this, 'getExpressionBuilder', array(), $this->initializerc6f83) || 1) && $this->valueHolderd24a7 = $valueHolderd24a7;

        return $this->valueHolderd24a7->getExpressionBuilder();
    }

    public function beginTransaction()
    {
        $this->initializerc6f83 && ($this->initializerc6f83->__invoke($valueHolderd24a7, $this, 'beginTransaction', array(), $this->initializerc6f83) || 1) && $this->valueHolderd24a7 = $valueHolderd24a7;

        return $this->valueHolderd24a7->beginTransaction();
    }

    public function getCache()
    {
        $this->initializerc6f83 && ($this->initializerc6f83->__invoke($valueHolderd24a7, $this, 'getCache', array(), $this->initializerc6f83) || 1) && $this->valueHolderd24a7 = $valueHolderd24a7;

        return $this->valueHolderd24a7->getCache();
    }

    public function transactional($func)
    {
        $this->initializerc6f83 && ($this->initializerc6f83->__invoke($valueHolderd24a7, $this, 'transactional', array('func' => $func), $this->initializerc6f83) || 1) && $this->valueHolderd24a7 = $valueHolderd24a7;

        return $this->valueHolderd24a7->transactional($func);
    }

    public function wrapInTransaction(callable $func)
    {
        $this->initializerc6f83 && ($this->initializerc6f83->__invoke($valueHolderd24a7, $this, 'wrapInTransaction', array('func' => $func), $this->initializerc6f83) || 1) && $this->valueHolderd24a7 = $valueHolderd24a7;

        return $this->valueHolderd24a7->wrapInTransaction($func);
    }

    public function commit()
    {
        $this->initializerc6f83 && ($this->initializerc6f83->__invoke($valueHolderd24a7, $this, 'commit', array(), $this->initializerc6f83) || 1) && $this->valueHolderd24a7 = $valueHolderd24a7;

        return $this->valueHolderd24a7->commit();
    }

    public function rollback()
    {
        $this->initializerc6f83 && ($this->initializerc6f83->__invoke($valueHolderd24a7, $this, 'rollback', array(), $this->initializerc6f83) || 1) && $this->valueHolderd24a7 = $valueHolderd24a7;

        return $this->valueHolderd24a7->rollback();
    }

    public function getClassMetadata($className)
    {
        $this->initializerc6f83 && ($this->initializerc6f83->__invoke($valueHolderd24a7, $this, 'getClassMetadata', array('className' => $className), $this->initializerc6f83) || 1) && $this->valueHolderd24a7 = $valueHolderd24a7;

        return $this->valueHolderd24a7->getClassMetadata($className);
    }

    public function createQuery($dql = '')
    {
        $this->initializerc6f83 && ($this->initializerc6f83->__invoke($valueHolderd24a7, $this, 'createQuery', array('dql' => $dql), $this->initializerc6f83) || 1) && $this->valueHolderd24a7 = $valueHolderd24a7;

        return $this->valueHolderd24a7->createQuery($dql);
    }

    public function createNamedQuery($name)
    {
        $this->initializerc6f83 && ($this->initializerc6f83->__invoke($valueHolderd24a7, $this, 'createNamedQuery', array('name' => $name), $this->initializerc6f83) || 1) && $this->valueHolderd24a7 = $valueHolderd24a7;

        return $this->valueHolderd24a7->createNamedQuery($name);
    }

    public function createNativeQuery($sql, \Doctrine\ORM\Query\ResultSetMapping $rsm)
    {
        $this->initializerc6f83 && ($this->initializerc6f83->__invoke($valueHolderd24a7, $this, 'createNativeQuery', array('sql' => $sql, 'rsm' => $rsm), $this->initializerc6f83) || 1) && $this->valueHolderd24a7 = $valueHolderd24a7;

        return $this->valueHolderd24a7->createNativeQuery($sql, $rsm);
    }

    public function createNamedNativeQuery($name)
    {
        $this->initializerc6f83 && ($this->initializerc6f83->__invoke($valueHolderd24a7, $this, 'createNamedNativeQuery', array('name' => $name), $this->initializerc6f83) || 1) && $this->valueHolderd24a7 = $valueHolderd24a7;

        return $this->valueHolderd24a7->createNamedNativeQuery($name);
    }

    public function createQueryBuilder()
    {
        $this->initializerc6f83 && ($this->initializerc6f83->__invoke($valueHolderd24a7, $this, 'createQueryBuilder', array(), $this->initializerc6f83) || 1) && $this->valueHolderd24a7 = $valueHolderd24a7;

        return $this->valueHolderd24a7->createQueryBuilder();
    }

    public function flush($entity = null)
    {
        $this->initializerc6f83 && ($this->initializerc6f83->__invoke($valueHolderd24a7, $this, 'flush', array('entity' => $entity), $this->initializerc6f83) || 1) && $this->valueHolderd24a7 = $valueHolderd24a7;

        return $this->valueHolderd24a7->flush($entity);
    }

    public function find($className, $id, $lockMode = null, $lockVersion = null)
    {
        $this->initializerc6f83 && ($this->initializerc6f83->__invoke($valueHolderd24a7, $this, 'find', array('className' => $className, 'id' => $id, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializerc6f83) || 1) && $this->valueHolderd24a7 = $valueHolderd24a7;

        return $this->valueHolderd24a7->find($className, $id, $lockMode, $lockVersion);
    }

    public function getReference($entityName, $id)
    {
        $this->initializerc6f83 && ($this->initializerc6f83->__invoke($valueHolderd24a7, $this, 'getReference', array('entityName' => $entityName, 'id' => $id), $this->initializerc6f83) || 1) && $this->valueHolderd24a7 = $valueHolderd24a7;

        return $this->valueHolderd24a7->getReference($entityName, $id);
    }

    public function getPartialReference($entityName, $identifier)
    {
        $this->initializerc6f83 && ($this->initializerc6f83->__invoke($valueHolderd24a7, $this, 'getPartialReference', array('entityName' => $entityName, 'identifier' => $identifier), $this->initializerc6f83) || 1) && $this->valueHolderd24a7 = $valueHolderd24a7;

        return $this->valueHolderd24a7->getPartialReference($entityName, $identifier);
    }

    public function clear($entityName = null)
    {
        $this->initializerc6f83 && ($this->initializerc6f83->__invoke($valueHolderd24a7, $this, 'clear', array('entityName' => $entityName), $this->initializerc6f83) || 1) && $this->valueHolderd24a7 = $valueHolderd24a7;

        return $this->valueHolderd24a7->clear($entityName);
    }

    public function close()
    {
        $this->initializerc6f83 && ($this->initializerc6f83->__invoke($valueHolderd24a7, $this, 'close', array(), $this->initializerc6f83) || 1) && $this->valueHolderd24a7 = $valueHolderd24a7;

        return $this->valueHolderd24a7->close();
    }

    public function persist($entity)
    {
        $this->initializerc6f83 && ($this->initializerc6f83->__invoke($valueHolderd24a7, $this, 'persist', array('entity' => $entity), $this->initializerc6f83) || 1) && $this->valueHolderd24a7 = $valueHolderd24a7;

        return $this->valueHolderd24a7->persist($entity);
    }

    public function remove($entity)
    {
        $this->initializerc6f83 && ($this->initializerc6f83->__invoke($valueHolderd24a7, $this, 'remove', array('entity' => $entity), $this->initializerc6f83) || 1) && $this->valueHolderd24a7 = $valueHolderd24a7;

        return $this->valueHolderd24a7->remove($entity);
    }

    public function refresh($entity)
    {
        $this->initializerc6f83 && ($this->initializerc6f83->__invoke($valueHolderd24a7, $this, 'refresh', array('entity' => $entity), $this->initializerc6f83) || 1) && $this->valueHolderd24a7 = $valueHolderd24a7;

        return $this->valueHolderd24a7->refresh($entity);
    }

    public function detach($entity)
    {
        $this->initializerc6f83 && ($this->initializerc6f83->__invoke($valueHolderd24a7, $this, 'detach', array('entity' => $entity), $this->initializerc6f83) || 1) && $this->valueHolderd24a7 = $valueHolderd24a7;

        return $this->valueHolderd24a7->detach($entity);
    }

    public function merge($entity)
    {
        $this->initializerc6f83 && ($this->initializerc6f83->__invoke($valueHolderd24a7, $this, 'merge', array('entity' => $entity), $this->initializerc6f83) || 1) && $this->valueHolderd24a7 = $valueHolderd24a7;

        return $this->valueHolderd24a7->merge($entity);
    }

    public function copy($entity, $deep = false)
    {
        $this->initializerc6f83 && ($this->initializerc6f83->__invoke($valueHolderd24a7, $this, 'copy', array('entity' => $entity, 'deep' => $deep), $this->initializerc6f83) || 1) && $this->valueHolderd24a7 = $valueHolderd24a7;

        return $this->valueHolderd24a7->copy($entity, $deep);
    }

    public function lock($entity, $lockMode, $lockVersion = null)
    {
        $this->initializerc6f83 && ($this->initializerc6f83->__invoke($valueHolderd24a7, $this, 'lock', array('entity' => $entity, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializerc6f83) || 1) && $this->valueHolderd24a7 = $valueHolderd24a7;

        return $this->valueHolderd24a7->lock($entity, $lockMode, $lockVersion);
    }

    public function getRepository($entityName)
    {
        $this->initializerc6f83 && ($this->initializerc6f83->__invoke($valueHolderd24a7, $this, 'getRepository', array('entityName' => $entityName), $this->initializerc6f83) || 1) && $this->valueHolderd24a7 = $valueHolderd24a7;

        return $this->valueHolderd24a7->getRepository($entityName);
    }

    public function contains($entity)
    {
        $this->initializerc6f83 && ($this->initializerc6f83->__invoke($valueHolderd24a7, $this, 'contains', array('entity' => $entity), $this->initializerc6f83) || 1) && $this->valueHolderd24a7 = $valueHolderd24a7;

        return $this->valueHolderd24a7->contains($entity);
    }

    public function getEventManager()
    {
        $this->initializerc6f83 && ($this->initializerc6f83->__invoke($valueHolderd24a7, $this, 'getEventManager', array(), $this->initializerc6f83) || 1) && $this->valueHolderd24a7 = $valueHolderd24a7;

        return $this->valueHolderd24a7->getEventManager();
    }

    public function getConfiguration()
    {
        $this->initializerc6f83 && ($this->initializerc6f83->__invoke($valueHolderd24a7, $this, 'getConfiguration', array(), $this->initializerc6f83) || 1) && $this->valueHolderd24a7 = $valueHolderd24a7;

        return $this->valueHolderd24a7->getConfiguration();
    }

    public function isOpen()
    {
        $this->initializerc6f83 && ($this->initializerc6f83->__invoke($valueHolderd24a7, $this, 'isOpen', array(), $this->initializerc6f83) || 1) && $this->valueHolderd24a7 = $valueHolderd24a7;

        return $this->valueHolderd24a7->isOpen();
    }

    public function getUnitOfWork()
    {
        $this->initializerc6f83 && ($this->initializerc6f83->__invoke($valueHolderd24a7, $this, 'getUnitOfWork', array(), $this->initializerc6f83) || 1) && $this->valueHolderd24a7 = $valueHolderd24a7;

        return $this->valueHolderd24a7->getUnitOfWork();
    }

    public function getHydrator($hydrationMode)
    {
        $this->initializerc6f83 && ($this->initializerc6f83->__invoke($valueHolderd24a7, $this, 'getHydrator', array('hydrationMode' => $hydrationMode), $this->initializerc6f83) || 1) && $this->valueHolderd24a7 = $valueHolderd24a7;

        return $this->valueHolderd24a7->getHydrator($hydrationMode);
    }

    public function newHydrator($hydrationMode)
    {
        $this->initializerc6f83 && ($this->initializerc6f83->__invoke($valueHolderd24a7, $this, 'newHydrator', array('hydrationMode' => $hydrationMode), $this->initializerc6f83) || 1) && $this->valueHolderd24a7 = $valueHolderd24a7;

        return $this->valueHolderd24a7->newHydrator($hydrationMode);
    }

    public function getProxyFactory()
    {
        $this->initializerc6f83 && ($this->initializerc6f83->__invoke($valueHolderd24a7, $this, 'getProxyFactory', array(), $this->initializerc6f83) || 1) && $this->valueHolderd24a7 = $valueHolderd24a7;

        return $this->valueHolderd24a7->getProxyFactory();
    }

    public function initializeObject($obj)
    {
        $this->initializerc6f83 && ($this->initializerc6f83->__invoke($valueHolderd24a7, $this, 'initializeObject', array('obj' => $obj), $this->initializerc6f83) || 1) && $this->valueHolderd24a7 = $valueHolderd24a7;

        return $this->valueHolderd24a7->initializeObject($obj);
    }

    public function getFilters()
    {
        $this->initializerc6f83 && ($this->initializerc6f83->__invoke($valueHolderd24a7, $this, 'getFilters', array(), $this->initializerc6f83) || 1) && $this->valueHolderd24a7 = $valueHolderd24a7;

        return $this->valueHolderd24a7->getFilters();
    }

    public function isFiltersStateClean()
    {
        $this->initializerc6f83 && ($this->initializerc6f83->__invoke($valueHolderd24a7, $this, 'isFiltersStateClean', array(), $this->initializerc6f83) || 1) && $this->valueHolderd24a7 = $valueHolderd24a7;

        return $this->valueHolderd24a7->isFiltersStateClean();
    }

    public function hasFilters()
    {
        $this->initializerc6f83 && ($this->initializerc6f83->__invoke($valueHolderd24a7, $this, 'hasFilters', array(), $this->initializerc6f83) || 1) && $this->valueHolderd24a7 = $valueHolderd24a7;

        return $this->valueHolderd24a7->hasFilters();
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

        $instance->initializerc6f83 = $initializer;

        return $instance;
    }

    public function __construct(\Doctrine\DBAL\Connection $conn, \Doctrine\ORM\Configuration $config)
    {
        static $reflection;

        if (! $this->valueHolderd24a7) {
            $reflection = $reflection ?? new \ReflectionClass('Doctrine\\ORM\\EntityManager');
            $this->valueHolderd24a7 = $reflection->newInstanceWithoutConstructor();
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);

        }

        $this->valueHolderd24a7->__construct($conn, $config);
    }

    public function & __get($name)
    {
        $this->initializerc6f83 && ($this->initializerc6f83->__invoke($valueHolderd24a7, $this, '__get', ['name' => $name], $this->initializerc6f83) || 1) && $this->valueHolderd24a7 = $valueHolderd24a7;

        if (isset(self::$publicProperties7db19[$name])) {
            return $this->valueHolderd24a7->$name;
        }

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolderd24a7;

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

        $targetObject = $this->valueHolderd24a7;
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
        $this->initializerc6f83 && ($this->initializerc6f83->__invoke($valueHolderd24a7, $this, '__set', array('name' => $name, 'value' => $value), $this->initializerc6f83) || 1) && $this->valueHolderd24a7 = $valueHolderd24a7;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolderd24a7;

            $targetObject->$name = $value;

            return $targetObject->$name;
        }

        $targetObject = $this->valueHolderd24a7;
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
        $this->initializerc6f83 && ($this->initializerc6f83->__invoke($valueHolderd24a7, $this, '__isset', array('name' => $name), $this->initializerc6f83) || 1) && $this->valueHolderd24a7 = $valueHolderd24a7;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolderd24a7;

            return isset($targetObject->$name);
        }

        $targetObject = $this->valueHolderd24a7;
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
        $this->initializerc6f83 && ($this->initializerc6f83->__invoke($valueHolderd24a7, $this, '__unset', array('name' => $name), $this->initializerc6f83) || 1) && $this->valueHolderd24a7 = $valueHolderd24a7;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolderd24a7;

            unset($targetObject->$name);

            return;
        }

        $targetObject = $this->valueHolderd24a7;
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
        $this->initializerc6f83 && ($this->initializerc6f83->__invoke($valueHolderd24a7, $this, '__clone', array(), $this->initializerc6f83) || 1) && $this->valueHolderd24a7 = $valueHolderd24a7;

        $this->valueHolderd24a7 = clone $this->valueHolderd24a7;
    }

    public function __sleep()
    {
        $this->initializerc6f83 && ($this->initializerc6f83->__invoke($valueHolderd24a7, $this, '__sleep', array(), $this->initializerc6f83) || 1) && $this->valueHolderd24a7 = $valueHolderd24a7;

        return array('valueHolderd24a7');
    }

    public function __wakeup()
    {
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);
    }

    public function setProxyInitializer(\Closure $initializer = null) : void
    {
        $this->initializerc6f83 = $initializer;
    }

    public function getProxyInitializer() : ?\Closure
    {
        return $this->initializerc6f83;
    }

    public function initializeProxy() : bool
    {
        return $this->initializerc6f83 && ($this->initializerc6f83->__invoke($valueHolderd24a7, $this, 'initializeProxy', array(), $this->initializerc6f83) || 1) && $this->valueHolderd24a7 = $valueHolderd24a7;
    }

    public function isProxyInitialized() : bool
    {
        return null !== $this->valueHolderd24a7;
    }

    public function getWrappedValueHolderValue()
    {
        return $this->valueHolderd24a7;
    }
}

if (!\class_exists('EntityManager_9a5be93', false)) {
    \class_alias(__NAMESPACE__.'\\EntityManager_9a5be93', 'EntityManager_9a5be93', false);
}
