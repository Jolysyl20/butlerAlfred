<?php

namespace ContainerXerq0m5;
include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'doctrine'.\DIRECTORY_SEPARATOR.'persistence'.\DIRECTORY_SEPARATOR.'lib'.\DIRECTORY_SEPARATOR.'Doctrine'.\DIRECTORY_SEPARATOR.'Persistence'.\DIRECTORY_SEPARATOR.'ObjectManager.php';
include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'doctrine'.\DIRECTORY_SEPARATOR.'orm'.\DIRECTORY_SEPARATOR.'lib'.\DIRECTORY_SEPARATOR.'Doctrine'.\DIRECTORY_SEPARATOR.'ORM'.\DIRECTORY_SEPARATOR.'EntityManagerInterface.php';
include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'doctrine'.\DIRECTORY_SEPARATOR.'orm'.\DIRECTORY_SEPARATOR.'lib'.\DIRECTORY_SEPARATOR.'Doctrine'.\DIRECTORY_SEPARATOR.'ORM'.\DIRECTORY_SEPARATOR.'EntityManager.php';

class EntityManager_9a5be93 extends \Doctrine\ORM\EntityManager implements \ProxyManager\Proxy\VirtualProxyInterface
{
    /**
     * @var \Doctrine\ORM\EntityManager|null wrapped object, if the proxy is initialized
     */
    private $valueHolder9390e = null;

    /**
     * @var \Closure|null initializer responsible for generating the wrapped object
     */
    private $initializere1683 = null;

    /**
     * @var bool[] map of public properties of the parent class
     */
    private static $publicPropertiesd166d = [
        
    ];

    public function getConnection()
    {
        $this->initializere1683 && ($this->initializere1683->__invoke($valueHolder9390e, $this, 'getConnection', array(), $this->initializere1683) || 1) && $this->valueHolder9390e = $valueHolder9390e;

        return $this->valueHolder9390e->getConnection();
    }

    public function getMetadataFactory()
    {
        $this->initializere1683 && ($this->initializere1683->__invoke($valueHolder9390e, $this, 'getMetadataFactory', array(), $this->initializere1683) || 1) && $this->valueHolder9390e = $valueHolder9390e;

        return $this->valueHolder9390e->getMetadataFactory();
    }

    public function getExpressionBuilder()
    {
        $this->initializere1683 && ($this->initializere1683->__invoke($valueHolder9390e, $this, 'getExpressionBuilder', array(), $this->initializere1683) || 1) && $this->valueHolder9390e = $valueHolder9390e;

        return $this->valueHolder9390e->getExpressionBuilder();
    }

    public function beginTransaction()
    {
        $this->initializere1683 && ($this->initializere1683->__invoke($valueHolder9390e, $this, 'beginTransaction', array(), $this->initializere1683) || 1) && $this->valueHolder9390e = $valueHolder9390e;

        return $this->valueHolder9390e->beginTransaction();
    }

    public function getCache()
    {
        $this->initializere1683 && ($this->initializere1683->__invoke($valueHolder9390e, $this, 'getCache', array(), $this->initializere1683) || 1) && $this->valueHolder9390e = $valueHolder9390e;

        return $this->valueHolder9390e->getCache();
    }

    public function transactional($func)
    {
        $this->initializere1683 && ($this->initializere1683->__invoke($valueHolder9390e, $this, 'transactional', array('func' => $func), $this->initializere1683) || 1) && $this->valueHolder9390e = $valueHolder9390e;

        return $this->valueHolder9390e->transactional($func);
    }

    public function commit()
    {
        $this->initializere1683 && ($this->initializere1683->__invoke($valueHolder9390e, $this, 'commit', array(), $this->initializere1683) || 1) && $this->valueHolder9390e = $valueHolder9390e;

        return $this->valueHolder9390e->commit();
    }

    public function rollback()
    {
        $this->initializere1683 && ($this->initializere1683->__invoke($valueHolder9390e, $this, 'rollback', array(), $this->initializere1683) || 1) && $this->valueHolder9390e = $valueHolder9390e;

        return $this->valueHolder9390e->rollback();
    }

    public function getClassMetadata($className)
    {
        $this->initializere1683 && ($this->initializere1683->__invoke($valueHolder9390e, $this, 'getClassMetadata', array('className' => $className), $this->initializere1683) || 1) && $this->valueHolder9390e = $valueHolder9390e;

        return $this->valueHolder9390e->getClassMetadata($className);
    }

    public function createQuery($dql = '')
    {
        $this->initializere1683 && ($this->initializere1683->__invoke($valueHolder9390e, $this, 'createQuery', array('dql' => $dql), $this->initializere1683) || 1) && $this->valueHolder9390e = $valueHolder9390e;

        return $this->valueHolder9390e->createQuery($dql);
    }

    public function createNamedQuery($name)
    {
        $this->initializere1683 && ($this->initializere1683->__invoke($valueHolder9390e, $this, 'createNamedQuery', array('name' => $name), $this->initializere1683) || 1) && $this->valueHolder9390e = $valueHolder9390e;

        return $this->valueHolder9390e->createNamedQuery($name);
    }

    public function createNativeQuery($sql, \Doctrine\ORM\Query\ResultSetMapping $rsm)
    {
        $this->initializere1683 && ($this->initializere1683->__invoke($valueHolder9390e, $this, 'createNativeQuery', array('sql' => $sql, 'rsm' => $rsm), $this->initializere1683) || 1) && $this->valueHolder9390e = $valueHolder9390e;

        return $this->valueHolder9390e->createNativeQuery($sql, $rsm);
    }

    public function createNamedNativeQuery($name)
    {
        $this->initializere1683 && ($this->initializere1683->__invoke($valueHolder9390e, $this, 'createNamedNativeQuery', array('name' => $name), $this->initializere1683) || 1) && $this->valueHolder9390e = $valueHolder9390e;

        return $this->valueHolder9390e->createNamedNativeQuery($name);
    }

    public function createQueryBuilder()
    {
        $this->initializere1683 && ($this->initializere1683->__invoke($valueHolder9390e, $this, 'createQueryBuilder', array(), $this->initializere1683) || 1) && $this->valueHolder9390e = $valueHolder9390e;

        return $this->valueHolder9390e->createQueryBuilder();
    }

    public function flush($entity = null)
    {
        $this->initializere1683 && ($this->initializere1683->__invoke($valueHolder9390e, $this, 'flush', array('entity' => $entity), $this->initializere1683) || 1) && $this->valueHolder9390e = $valueHolder9390e;

        return $this->valueHolder9390e->flush($entity);
    }

    public function find($className, $id, $lockMode = null, $lockVersion = null)
    {
        $this->initializere1683 && ($this->initializere1683->__invoke($valueHolder9390e, $this, 'find', array('className' => $className, 'id' => $id, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializere1683) || 1) && $this->valueHolder9390e = $valueHolder9390e;

        return $this->valueHolder9390e->find($className, $id, $lockMode, $lockVersion);
    }

    public function getReference($entityName, $id)
    {
        $this->initializere1683 && ($this->initializere1683->__invoke($valueHolder9390e, $this, 'getReference', array('entityName' => $entityName, 'id' => $id), $this->initializere1683) || 1) && $this->valueHolder9390e = $valueHolder9390e;

        return $this->valueHolder9390e->getReference($entityName, $id);
    }

    public function getPartialReference($entityName, $identifier)
    {
        $this->initializere1683 && ($this->initializere1683->__invoke($valueHolder9390e, $this, 'getPartialReference', array('entityName' => $entityName, 'identifier' => $identifier), $this->initializere1683) || 1) && $this->valueHolder9390e = $valueHolder9390e;

        return $this->valueHolder9390e->getPartialReference($entityName, $identifier);
    }

    public function clear($entityName = null)
    {
        $this->initializere1683 && ($this->initializere1683->__invoke($valueHolder9390e, $this, 'clear', array('entityName' => $entityName), $this->initializere1683) || 1) && $this->valueHolder9390e = $valueHolder9390e;

        return $this->valueHolder9390e->clear($entityName);
    }

    public function close()
    {
        $this->initializere1683 && ($this->initializere1683->__invoke($valueHolder9390e, $this, 'close', array(), $this->initializere1683) || 1) && $this->valueHolder9390e = $valueHolder9390e;

        return $this->valueHolder9390e->close();
    }

    public function persist($entity)
    {
        $this->initializere1683 && ($this->initializere1683->__invoke($valueHolder9390e, $this, 'persist', array('entity' => $entity), $this->initializere1683) || 1) && $this->valueHolder9390e = $valueHolder9390e;

        return $this->valueHolder9390e->persist($entity);
    }

    public function remove($entity)
    {
        $this->initializere1683 && ($this->initializere1683->__invoke($valueHolder9390e, $this, 'remove', array('entity' => $entity), $this->initializere1683) || 1) && $this->valueHolder9390e = $valueHolder9390e;

        return $this->valueHolder9390e->remove($entity);
    }

    public function refresh($entity)
    {
        $this->initializere1683 && ($this->initializere1683->__invoke($valueHolder9390e, $this, 'refresh', array('entity' => $entity), $this->initializere1683) || 1) && $this->valueHolder9390e = $valueHolder9390e;

        return $this->valueHolder9390e->refresh($entity);
    }

    public function detach($entity)
    {
        $this->initializere1683 && ($this->initializere1683->__invoke($valueHolder9390e, $this, 'detach', array('entity' => $entity), $this->initializere1683) || 1) && $this->valueHolder9390e = $valueHolder9390e;

        return $this->valueHolder9390e->detach($entity);
    }

    public function merge($entity)
    {
        $this->initializere1683 && ($this->initializere1683->__invoke($valueHolder9390e, $this, 'merge', array('entity' => $entity), $this->initializere1683) || 1) && $this->valueHolder9390e = $valueHolder9390e;

        return $this->valueHolder9390e->merge($entity);
    }

    public function copy($entity, $deep = false)
    {
        $this->initializere1683 && ($this->initializere1683->__invoke($valueHolder9390e, $this, 'copy', array('entity' => $entity, 'deep' => $deep), $this->initializere1683) || 1) && $this->valueHolder9390e = $valueHolder9390e;

        return $this->valueHolder9390e->copy($entity, $deep);
    }

    public function lock($entity, $lockMode, $lockVersion = null)
    {
        $this->initializere1683 && ($this->initializere1683->__invoke($valueHolder9390e, $this, 'lock', array('entity' => $entity, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializere1683) || 1) && $this->valueHolder9390e = $valueHolder9390e;

        return $this->valueHolder9390e->lock($entity, $lockMode, $lockVersion);
    }

    public function getRepository($entityName)
    {
        $this->initializere1683 && ($this->initializere1683->__invoke($valueHolder9390e, $this, 'getRepository', array('entityName' => $entityName), $this->initializere1683) || 1) && $this->valueHolder9390e = $valueHolder9390e;

        return $this->valueHolder9390e->getRepository($entityName);
    }

    public function contains($entity)
    {
        $this->initializere1683 && ($this->initializere1683->__invoke($valueHolder9390e, $this, 'contains', array('entity' => $entity), $this->initializere1683) || 1) && $this->valueHolder9390e = $valueHolder9390e;

        return $this->valueHolder9390e->contains($entity);
    }

    public function getEventManager()
    {
        $this->initializere1683 && ($this->initializere1683->__invoke($valueHolder9390e, $this, 'getEventManager', array(), $this->initializere1683) || 1) && $this->valueHolder9390e = $valueHolder9390e;

        return $this->valueHolder9390e->getEventManager();
    }

    public function getConfiguration()
    {
        $this->initializere1683 && ($this->initializere1683->__invoke($valueHolder9390e, $this, 'getConfiguration', array(), $this->initializere1683) || 1) && $this->valueHolder9390e = $valueHolder9390e;

        return $this->valueHolder9390e->getConfiguration();
    }

    public function isOpen()
    {
        $this->initializere1683 && ($this->initializere1683->__invoke($valueHolder9390e, $this, 'isOpen', array(), $this->initializere1683) || 1) && $this->valueHolder9390e = $valueHolder9390e;

        return $this->valueHolder9390e->isOpen();
    }

    public function getUnitOfWork()
    {
        $this->initializere1683 && ($this->initializere1683->__invoke($valueHolder9390e, $this, 'getUnitOfWork', array(), $this->initializere1683) || 1) && $this->valueHolder9390e = $valueHolder9390e;

        return $this->valueHolder9390e->getUnitOfWork();
    }

    public function getHydrator($hydrationMode)
    {
        $this->initializere1683 && ($this->initializere1683->__invoke($valueHolder9390e, $this, 'getHydrator', array('hydrationMode' => $hydrationMode), $this->initializere1683) || 1) && $this->valueHolder9390e = $valueHolder9390e;

        return $this->valueHolder9390e->getHydrator($hydrationMode);
    }

    public function newHydrator($hydrationMode)
    {
        $this->initializere1683 && ($this->initializere1683->__invoke($valueHolder9390e, $this, 'newHydrator', array('hydrationMode' => $hydrationMode), $this->initializere1683) || 1) && $this->valueHolder9390e = $valueHolder9390e;

        return $this->valueHolder9390e->newHydrator($hydrationMode);
    }

    public function getProxyFactory()
    {
        $this->initializere1683 && ($this->initializere1683->__invoke($valueHolder9390e, $this, 'getProxyFactory', array(), $this->initializere1683) || 1) && $this->valueHolder9390e = $valueHolder9390e;

        return $this->valueHolder9390e->getProxyFactory();
    }

    public function initializeObject($obj)
    {
        $this->initializere1683 && ($this->initializere1683->__invoke($valueHolder9390e, $this, 'initializeObject', array('obj' => $obj), $this->initializere1683) || 1) && $this->valueHolder9390e = $valueHolder9390e;

        return $this->valueHolder9390e->initializeObject($obj);
    }

    public function getFilters()
    {
        $this->initializere1683 && ($this->initializere1683->__invoke($valueHolder9390e, $this, 'getFilters', array(), $this->initializere1683) || 1) && $this->valueHolder9390e = $valueHolder9390e;

        return $this->valueHolder9390e->getFilters();
    }

    public function isFiltersStateClean()
    {
        $this->initializere1683 && ($this->initializere1683->__invoke($valueHolder9390e, $this, 'isFiltersStateClean', array(), $this->initializere1683) || 1) && $this->valueHolder9390e = $valueHolder9390e;

        return $this->valueHolder9390e->isFiltersStateClean();
    }

    public function hasFilters()
    {
        $this->initializere1683 && ($this->initializere1683->__invoke($valueHolder9390e, $this, 'hasFilters', array(), $this->initializere1683) || 1) && $this->valueHolder9390e = $valueHolder9390e;

        return $this->valueHolder9390e->hasFilters();
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

        $instance->initializere1683 = $initializer;

        return $instance;
    }

    protected function __construct(\Doctrine\DBAL\Connection $conn, \Doctrine\ORM\Configuration $config, \Doctrine\Common\EventManager $eventManager)
    {
        static $reflection;

        if (! $this->valueHolder9390e) {
            $reflection = $reflection ?? new \ReflectionClass('Doctrine\\ORM\\EntityManager');
            $this->valueHolder9390e = $reflection->newInstanceWithoutConstructor();
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);

        }

        $this->valueHolder9390e->__construct($conn, $config, $eventManager);
    }

    public function & __get($name)
    {
        $this->initializere1683 && ($this->initializere1683->__invoke($valueHolder9390e, $this, '__get', ['name' => $name], $this->initializere1683) || 1) && $this->valueHolder9390e = $valueHolder9390e;

        if (isset(self::$publicPropertiesd166d[$name])) {
            return $this->valueHolder9390e->$name;
        }

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder9390e;

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

        $targetObject = $this->valueHolder9390e;
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
        $this->initializere1683 && ($this->initializere1683->__invoke($valueHolder9390e, $this, '__set', array('name' => $name, 'value' => $value), $this->initializere1683) || 1) && $this->valueHolder9390e = $valueHolder9390e;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder9390e;

            $targetObject->$name = $value;

            return $targetObject->$name;
        }

        $targetObject = $this->valueHolder9390e;
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
        $this->initializere1683 && ($this->initializere1683->__invoke($valueHolder9390e, $this, '__isset', array('name' => $name), $this->initializere1683) || 1) && $this->valueHolder9390e = $valueHolder9390e;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder9390e;

            return isset($targetObject->$name);
        }

        $targetObject = $this->valueHolder9390e;
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
        $this->initializere1683 && ($this->initializere1683->__invoke($valueHolder9390e, $this, '__unset', array('name' => $name), $this->initializere1683) || 1) && $this->valueHolder9390e = $valueHolder9390e;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder9390e;

            unset($targetObject->$name);

            return;
        }

        $targetObject = $this->valueHolder9390e;
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
        $this->initializere1683 && ($this->initializere1683->__invoke($valueHolder9390e, $this, '__clone', array(), $this->initializere1683) || 1) && $this->valueHolder9390e = $valueHolder9390e;

        $this->valueHolder9390e = clone $this->valueHolder9390e;
    }

    public function __sleep()
    {
        $this->initializere1683 && ($this->initializere1683->__invoke($valueHolder9390e, $this, '__sleep', array(), $this->initializere1683) || 1) && $this->valueHolder9390e = $valueHolder9390e;

        return array('valueHolder9390e');
    }

    public function __wakeup()
    {
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);
    }

    public function setProxyInitializer(\Closure $initializer = null) : void
    {
        $this->initializere1683 = $initializer;
    }

    public function getProxyInitializer() : ?\Closure
    {
        return $this->initializere1683;
    }

    public function initializeProxy() : bool
    {
        return $this->initializere1683 && ($this->initializere1683->__invoke($valueHolder9390e, $this, 'initializeProxy', array(), $this->initializere1683) || 1) && $this->valueHolder9390e = $valueHolder9390e;
    }

    public function isProxyInitialized() : bool
    {
        return null !== $this->valueHolder9390e;
    }

    public function getWrappedValueHolderValue()
    {
        return $this->valueHolder9390e;
    }
}

if (!\class_exists('EntityManager_9a5be93', false)) {
    \class_alias(__NAMESPACE__.'\\EntityManager_9a5be93', 'EntityManager_9a5be93', false);
}
