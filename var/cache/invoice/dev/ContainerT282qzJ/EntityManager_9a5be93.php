<?php

namespace ContainerT282qzJ;
include_once \dirname(__DIR__, 5).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'doctrine'.\DIRECTORY_SEPARATOR.'persistence'.\DIRECTORY_SEPARATOR.'src'.\DIRECTORY_SEPARATOR.'Persistence'.\DIRECTORY_SEPARATOR.'ObjectManager.php';
include_once \dirname(__DIR__, 5).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'doctrine'.\DIRECTORY_SEPARATOR.'orm'.\DIRECTORY_SEPARATOR.'lib'.\DIRECTORY_SEPARATOR.'Doctrine'.\DIRECTORY_SEPARATOR.'ORM'.\DIRECTORY_SEPARATOR.'EntityManagerInterface.php';
include_once \dirname(__DIR__, 5).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'doctrine'.\DIRECTORY_SEPARATOR.'orm'.\DIRECTORY_SEPARATOR.'lib'.\DIRECTORY_SEPARATOR.'Doctrine'.\DIRECTORY_SEPARATOR.'ORM'.\DIRECTORY_SEPARATOR.'EntityManager.php';

class EntityManager_9a5be93 extends \Doctrine\ORM\EntityManager implements \ProxyManager\Proxy\VirtualProxyInterface
{
    /**
     * @var \Doctrine\ORM\EntityManager|null wrapped object, if the proxy is initialized
     */
    private $valueHolderec34d = null;

    /**
     * @var \Closure|null initializer responsible for generating the wrapped object
     */
    private $initializer8c276 = null;

    /**
     * @var bool[] map of public properties of the parent class
     */
    private static $publicPropertiesaa399 = [
        
    ];

    public function getConnection()
    {
        $this->initializer8c276 && ($this->initializer8c276->__invoke($valueHolderec34d, $this, 'getConnection', array(), $this->initializer8c276) || 1) && $this->valueHolderec34d = $valueHolderec34d;

        return $this->valueHolderec34d->getConnection();
    }

    public function getMetadataFactory()
    {
        $this->initializer8c276 && ($this->initializer8c276->__invoke($valueHolderec34d, $this, 'getMetadataFactory', array(), $this->initializer8c276) || 1) && $this->valueHolderec34d = $valueHolderec34d;

        return $this->valueHolderec34d->getMetadataFactory();
    }

    public function getExpressionBuilder()
    {
        $this->initializer8c276 && ($this->initializer8c276->__invoke($valueHolderec34d, $this, 'getExpressionBuilder', array(), $this->initializer8c276) || 1) && $this->valueHolderec34d = $valueHolderec34d;

        return $this->valueHolderec34d->getExpressionBuilder();
    }

    public function beginTransaction()
    {
        $this->initializer8c276 && ($this->initializer8c276->__invoke($valueHolderec34d, $this, 'beginTransaction', array(), $this->initializer8c276) || 1) && $this->valueHolderec34d = $valueHolderec34d;

        return $this->valueHolderec34d->beginTransaction();
    }

    public function getCache()
    {
        $this->initializer8c276 && ($this->initializer8c276->__invoke($valueHolderec34d, $this, 'getCache', array(), $this->initializer8c276) || 1) && $this->valueHolderec34d = $valueHolderec34d;

        return $this->valueHolderec34d->getCache();
    }

    public function transactional($func)
    {
        $this->initializer8c276 && ($this->initializer8c276->__invoke($valueHolderec34d, $this, 'transactional', array('func' => $func), $this->initializer8c276) || 1) && $this->valueHolderec34d = $valueHolderec34d;

        return $this->valueHolderec34d->transactional($func);
    }

    public function wrapInTransaction(callable $func)
    {
        $this->initializer8c276 && ($this->initializer8c276->__invoke($valueHolderec34d, $this, 'wrapInTransaction', array('func' => $func), $this->initializer8c276) || 1) && $this->valueHolderec34d = $valueHolderec34d;

        return $this->valueHolderec34d->wrapInTransaction($func);
    }

    public function commit()
    {
        $this->initializer8c276 && ($this->initializer8c276->__invoke($valueHolderec34d, $this, 'commit', array(), $this->initializer8c276) || 1) && $this->valueHolderec34d = $valueHolderec34d;

        return $this->valueHolderec34d->commit();
    }

    public function rollback()
    {
        $this->initializer8c276 && ($this->initializer8c276->__invoke($valueHolderec34d, $this, 'rollback', array(), $this->initializer8c276) || 1) && $this->valueHolderec34d = $valueHolderec34d;

        return $this->valueHolderec34d->rollback();
    }

    public function getClassMetadata($className)
    {
        $this->initializer8c276 && ($this->initializer8c276->__invoke($valueHolderec34d, $this, 'getClassMetadata', array('className' => $className), $this->initializer8c276) || 1) && $this->valueHolderec34d = $valueHolderec34d;

        return $this->valueHolderec34d->getClassMetadata($className);
    }

    public function createQuery($dql = '')
    {
        $this->initializer8c276 && ($this->initializer8c276->__invoke($valueHolderec34d, $this, 'createQuery', array('dql' => $dql), $this->initializer8c276) || 1) && $this->valueHolderec34d = $valueHolderec34d;

        return $this->valueHolderec34d->createQuery($dql);
    }

    public function createNamedQuery($name)
    {
        $this->initializer8c276 && ($this->initializer8c276->__invoke($valueHolderec34d, $this, 'createNamedQuery', array('name' => $name), $this->initializer8c276) || 1) && $this->valueHolderec34d = $valueHolderec34d;

        return $this->valueHolderec34d->createNamedQuery($name);
    }

    public function createNativeQuery($sql, \Doctrine\ORM\Query\ResultSetMapping $rsm)
    {
        $this->initializer8c276 && ($this->initializer8c276->__invoke($valueHolderec34d, $this, 'createNativeQuery', array('sql' => $sql, 'rsm' => $rsm), $this->initializer8c276) || 1) && $this->valueHolderec34d = $valueHolderec34d;

        return $this->valueHolderec34d->createNativeQuery($sql, $rsm);
    }

    public function createNamedNativeQuery($name)
    {
        $this->initializer8c276 && ($this->initializer8c276->__invoke($valueHolderec34d, $this, 'createNamedNativeQuery', array('name' => $name), $this->initializer8c276) || 1) && $this->valueHolderec34d = $valueHolderec34d;

        return $this->valueHolderec34d->createNamedNativeQuery($name);
    }

    public function createQueryBuilder()
    {
        $this->initializer8c276 && ($this->initializer8c276->__invoke($valueHolderec34d, $this, 'createQueryBuilder', array(), $this->initializer8c276) || 1) && $this->valueHolderec34d = $valueHolderec34d;

        return $this->valueHolderec34d->createQueryBuilder();
    }

    public function flush($entity = null)
    {
        $this->initializer8c276 && ($this->initializer8c276->__invoke($valueHolderec34d, $this, 'flush', array('entity' => $entity), $this->initializer8c276) || 1) && $this->valueHolderec34d = $valueHolderec34d;

        return $this->valueHolderec34d->flush($entity);
    }

    public function find($className, $id, $lockMode = null, $lockVersion = null)
    {
        $this->initializer8c276 && ($this->initializer8c276->__invoke($valueHolderec34d, $this, 'find', array('className' => $className, 'id' => $id, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializer8c276) || 1) && $this->valueHolderec34d = $valueHolderec34d;

        return $this->valueHolderec34d->find($className, $id, $lockMode, $lockVersion);
    }

    public function getReference($entityName, $id)
    {
        $this->initializer8c276 && ($this->initializer8c276->__invoke($valueHolderec34d, $this, 'getReference', array('entityName' => $entityName, 'id' => $id), $this->initializer8c276) || 1) && $this->valueHolderec34d = $valueHolderec34d;

        return $this->valueHolderec34d->getReference($entityName, $id);
    }

    public function getPartialReference($entityName, $identifier)
    {
        $this->initializer8c276 && ($this->initializer8c276->__invoke($valueHolderec34d, $this, 'getPartialReference', array('entityName' => $entityName, 'identifier' => $identifier), $this->initializer8c276) || 1) && $this->valueHolderec34d = $valueHolderec34d;

        return $this->valueHolderec34d->getPartialReference($entityName, $identifier);
    }

    public function clear($entityName = null)
    {
        $this->initializer8c276 && ($this->initializer8c276->__invoke($valueHolderec34d, $this, 'clear', array('entityName' => $entityName), $this->initializer8c276) || 1) && $this->valueHolderec34d = $valueHolderec34d;

        return $this->valueHolderec34d->clear($entityName);
    }

    public function close()
    {
        $this->initializer8c276 && ($this->initializer8c276->__invoke($valueHolderec34d, $this, 'close', array(), $this->initializer8c276) || 1) && $this->valueHolderec34d = $valueHolderec34d;

        return $this->valueHolderec34d->close();
    }

    public function persist($entity)
    {
        $this->initializer8c276 && ($this->initializer8c276->__invoke($valueHolderec34d, $this, 'persist', array('entity' => $entity), $this->initializer8c276) || 1) && $this->valueHolderec34d = $valueHolderec34d;

        return $this->valueHolderec34d->persist($entity);
    }

    public function remove($entity)
    {
        $this->initializer8c276 && ($this->initializer8c276->__invoke($valueHolderec34d, $this, 'remove', array('entity' => $entity), $this->initializer8c276) || 1) && $this->valueHolderec34d = $valueHolderec34d;

        return $this->valueHolderec34d->remove($entity);
    }

    public function refresh($entity)
    {
        $this->initializer8c276 && ($this->initializer8c276->__invoke($valueHolderec34d, $this, 'refresh', array('entity' => $entity), $this->initializer8c276) || 1) && $this->valueHolderec34d = $valueHolderec34d;

        return $this->valueHolderec34d->refresh($entity);
    }

    public function detach($entity)
    {
        $this->initializer8c276 && ($this->initializer8c276->__invoke($valueHolderec34d, $this, 'detach', array('entity' => $entity), $this->initializer8c276) || 1) && $this->valueHolderec34d = $valueHolderec34d;

        return $this->valueHolderec34d->detach($entity);
    }

    public function merge($entity)
    {
        $this->initializer8c276 && ($this->initializer8c276->__invoke($valueHolderec34d, $this, 'merge', array('entity' => $entity), $this->initializer8c276) || 1) && $this->valueHolderec34d = $valueHolderec34d;

        return $this->valueHolderec34d->merge($entity);
    }

    public function copy($entity, $deep = false)
    {
        $this->initializer8c276 && ($this->initializer8c276->__invoke($valueHolderec34d, $this, 'copy', array('entity' => $entity, 'deep' => $deep), $this->initializer8c276) || 1) && $this->valueHolderec34d = $valueHolderec34d;

        return $this->valueHolderec34d->copy($entity, $deep);
    }

    public function lock($entity, $lockMode, $lockVersion = null)
    {
        $this->initializer8c276 && ($this->initializer8c276->__invoke($valueHolderec34d, $this, 'lock', array('entity' => $entity, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializer8c276) || 1) && $this->valueHolderec34d = $valueHolderec34d;

        return $this->valueHolderec34d->lock($entity, $lockMode, $lockVersion);
    }

    public function getRepository($entityName)
    {
        $this->initializer8c276 && ($this->initializer8c276->__invoke($valueHolderec34d, $this, 'getRepository', array('entityName' => $entityName), $this->initializer8c276) || 1) && $this->valueHolderec34d = $valueHolderec34d;

        return $this->valueHolderec34d->getRepository($entityName);
    }

    public function contains($entity)
    {
        $this->initializer8c276 && ($this->initializer8c276->__invoke($valueHolderec34d, $this, 'contains', array('entity' => $entity), $this->initializer8c276) || 1) && $this->valueHolderec34d = $valueHolderec34d;

        return $this->valueHolderec34d->contains($entity);
    }

    public function getEventManager()
    {
        $this->initializer8c276 && ($this->initializer8c276->__invoke($valueHolderec34d, $this, 'getEventManager', array(), $this->initializer8c276) || 1) && $this->valueHolderec34d = $valueHolderec34d;

        return $this->valueHolderec34d->getEventManager();
    }

    public function getConfiguration()
    {
        $this->initializer8c276 && ($this->initializer8c276->__invoke($valueHolderec34d, $this, 'getConfiguration', array(), $this->initializer8c276) || 1) && $this->valueHolderec34d = $valueHolderec34d;

        return $this->valueHolderec34d->getConfiguration();
    }

    public function isOpen()
    {
        $this->initializer8c276 && ($this->initializer8c276->__invoke($valueHolderec34d, $this, 'isOpen', array(), $this->initializer8c276) || 1) && $this->valueHolderec34d = $valueHolderec34d;

        return $this->valueHolderec34d->isOpen();
    }

    public function getUnitOfWork()
    {
        $this->initializer8c276 && ($this->initializer8c276->__invoke($valueHolderec34d, $this, 'getUnitOfWork', array(), $this->initializer8c276) || 1) && $this->valueHolderec34d = $valueHolderec34d;

        return $this->valueHolderec34d->getUnitOfWork();
    }

    public function getHydrator($hydrationMode)
    {
        $this->initializer8c276 && ($this->initializer8c276->__invoke($valueHolderec34d, $this, 'getHydrator', array('hydrationMode' => $hydrationMode), $this->initializer8c276) || 1) && $this->valueHolderec34d = $valueHolderec34d;

        return $this->valueHolderec34d->getHydrator($hydrationMode);
    }

    public function newHydrator($hydrationMode)
    {
        $this->initializer8c276 && ($this->initializer8c276->__invoke($valueHolderec34d, $this, 'newHydrator', array('hydrationMode' => $hydrationMode), $this->initializer8c276) || 1) && $this->valueHolderec34d = $valueHolderec34d;

        return $this->valueHolderec34d->newHydrator($hydrationMode);
    }

    public function getProxyFactory()
    {
        $this->initializer8c276 && ($this->initializer8c276->__invoke($valueHolderec34d, $this, 'getProxyFactory', array(), $this->initializer8c276) || 1) && $this->valueHolderec34d = $valueHolderec34d;

        return $this->valueHolderec34d->getProxyFactory();
    }

    public function initializeObject($obj)
    {
        $this->initializer8c276 && ($this->initializer8c276->__invoke($valueHolderec34d, $this, 'initializeObject', array('obj' => $obj), $this->initializer8c276) || 1) && $this->valueHolderec34d = $valueHolderec34d;

        return $this->valueHolderec34d->initializeObject($obj);
    }

    public function getFilters()
    {
        $this->initializer8c276 && ($this->initializer8c276->__invoke($valueHolderec34d, $this, 'getFilters', array(), $this->initializer8c276) || 1) && $this->valueHolderec34d = $valueHolderec34d;

        return $this->valueHolderec34d->getFilters();
    }

    public function isFiltersStateClean()
    {
        $this->initializer8c276 && ($this->initializer8c276->__invoke($valueHolderec34d, $this, 'isFiltersStateClean', array(), $this->initializer8c276) || 1) && $this->valueHolderec34d = $valueHolderec34d;

        return $this->valueHolderec34d->isFiltersStateClean();
    }

    public function hasFilters()
    {
        $this->initializer8c276 && ($this->initializer8c276->__invoke($valueHolderec34d, $this, 'hasFilters', array(), $this->initializer8c276) || 1) && $this->valueHolderec34d = $valueHolderec34d;

        return $this->valueHolderec34d->hasFilters();
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

        $instance->initializer8c276 = $initializer;

        return $instance;
    }

    public function __construct(\Doctrine\DBAL\Connection $conn, \Doctrine\ORM\Configuration $config)
    {
        static $reflection;

        if (! $this->valueHolderec34d) {
            $reflection = $reflection ?? new \ReflectionClass('Doctrine\\ORM\\EntityManager');
            $this->valueHolderec34d = $reflection->newInstanceWithoutConstructor();
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);

        }

        $this->valueHolderec34d->__construct($conn, $config);
    }

    public function & __get($name)
    {
        $this->initializer8c276 && ($this->initializer8c276->__invoke($valueHolderec34d, $this, '__get', ['name' => $name], $this->initializer8c276) || 1) && $this->valueHolderec34d = $valueHolderec34d;

        if (isset(self::$publicPropertiesaa399[$name])) {
            return $this->valueHolderec34d->$name;
        }

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolderec34d;

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

        $targetObject = $this->valueHolderec34d;
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
        $this->initializer8c276 && ($this->initializer8c276->__invoke($valueHolderec34d, $this, '__set', array('name' => $name, 'value' => $value), $this->initializer8c276) || 1) && $this->valueHolderec34d = $valueHolderec34d;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolderec34d;

            $targetObject->$name = $value;

            return $targetObject->$name;
        }

        $targetObject = $this->valueHolderec34d;
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
        $this->initializer8c276 && ($this->initializer8c276->__invoke($valueHolderec34d, $this, '__isset', array('name' => $name), $this->initializer8c276) || 1) && $this->valueHolderec34d = $valueHolderec34d;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolderec34d;

            return isset($targetObject->$name);
        }

        $targetObject = $this->valueHolderec34d;
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
        $this->initializer8c276 && ($this->initializer8c276->__invoke($valueHolderec34d, $this, '__unset', array('name' => $name), $this->initializer8c276) || 1) && $this->valueHolderec34d = $valueHolderec34d;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolderec34d;

            unset($targetObject->$name);

            return;
        }

        $targetObject = $this->valueHolderec34d;
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
        $this->initializer8c276 && ($this->initializer8c276->__invoke($valueHolderec34d, $this, '__clone', array(), $this->initializer8c276) || 1) && $this->valueHolderec34d = $valueHolderec34d;

        $this->valueHolderec34d = clone $this->valueHolderec34d;
    }

    public function __sleep()
    {
        $this->initializer8c276 && ($this->initializer8c276->__invoke($valueHolderec34d, $this, '__sleep', array(), $this->initializer8c276) || 1) && $this->valueHolderec34d = $valueHolderec34d;

        return array('valueHolderec34d');
    }

    public function __wakeup()
    {
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);
    }

    public function setProxyInitializer(\Closure $initializer = null) : void
    {
        $this->initializer8c276 = $initializer;
    }

    public function getProxyInitializer() : ?\Closure
    {
        return $this->initializer8c276;
    }

    public function initializeProxy() : bool
    {
        return $this->initializer8c276 && ($this->initializer8c276->__invoke($valueHolderec34d, $this, 'initializeProxy', array(), $this->initializer8c276) || 1) && $this->valueHolderec34d = $valueHolderec34d;
    }

    public function isProxyInitialized() : bool
    {
        return null !== $this->valueHolderec34d;
    }

    public function getWrappedValueHolderValue()
    {
        return $this->valueHolderec34d;
    }
}

if (!\class_exists('EntityManager_9a5be93', false)) {
    \class_alias(__NAMESPACE__.'\\EntityManager_9a5be93', 'EntityManager_9a5be93', false);
}
