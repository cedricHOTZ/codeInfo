<?php

namespace Container4lE7dwF;
include_once \dirname(__DIR__, 4).'/vendor/doctrine/persistence/src/Persistence/ObjectManager.php';
include_once \dirname(__DIR__, 4).'/vendor/doctrine/orm/lib/Doctrine/ORM/EntityManagerInterface.php';
include_once \dirname(__DIR__, 4).'/vendor/doctrine/orm/lib/Doctrine/ORM/EntityManager.php';

class EntityManager_9a5be93 extends \Doctrine\ORM\EntityManager implements \ProxyManager\Proxy\VirtualProxyInterface
{
    /**
     * @var \Doctrine\ORM\EntityManager|null wrapped object, if the proxy is initialized
     */
    private $valueHolder41bd9 = null;

    /**
     * @var \Closure|null initializer responsible for generating the wrapped object
     */
    private $initializerda455 = null;

    /**
     * @var bool[] map of public properties of the parent class
     */
    private static $publicPropertiesa348a = [
        
    ];

    public function getConnection()
    {
        $this->initializerda455 && ($this->initializerda455->__invoke($valueHolder41bd9, $this, 'getConnection', array(), $this->initializerda455) || 1) && $this->valueHolder41bd9 = $valueHolder41bd9;

        return $this->valueHolder41bd9->getConnection();
    }

    public function getMetadataFactory()
    {
        $this->initializerda455 && ($this->initializerda455->__invoke($valueHolder41bd9, $this, 'getMetadataFactory', array(), $this->initializerda455) || 1) && $this->valueHolder41bd9 = $valueHolder41bd9;

        return $this->valueHolder41bd9->getMetadataFactory();
    }

    public function getExpressionBuilder()
    {
        $this->initializerda455 && ($this->initializerda455->__invoke($valueHolder41bd9, $this, 'getExpressionBuilder', array(), $this->initializerda455) || 1) && $this->valueHolder41bd9 = $valueHolder41bd9;

        return $this->valueHolder41bd9->getExpressionBuilder();
    }

    public function beginTransaction()
    {
        $this->initializerda455 && ($this->initializerda455->__invoke($valueHolder41bd9, $this, 'beginTransaction', array(), $this->initializerda455) || 1) && $this->valueHolder41bd9 = $valueHolder41bd9;

        return $this->valueHolder41bd9->beginTransaction();
    }

    public function getCache()
    {
        $this->initializerda455 && ($this->initializerda455->__invoke($valueHolder41bd9, $this, 'getCache', array(), $this->initializerda455) || 1) && $this->valueHolder41bd9 = $valueHolder41bd9;

        return $this->valueHolder41bd9->getCache();
    }

    public function transactional($func)
    {
        $this->initializerda455 && ($this->initializerda455->__invoke($valueHolder41bd9, $this, 'transactional', array('func' => $func), $this->initializerda455) || 1) && $this->valueHolder41bd9 = $valueHolder41bd9;

        return $this->valueHolder41bd9->transactional($func);
    }

    public function wrapInTransaction(callable $func)
    {
        $this->initializerda455 && ($this->initializerda455->__invoke($valueHolder41bd9, $this, 'wrapInTransaction', array('func' => $func), $this->initializerda455) || 1) && $this->valueHolder41bd9 = $valueHolder41bd9;

        return $this->valueHolder41bd9->wrapInTransaction($func);
    }

    public function commit()
    {
        $this->initializerda455 && ($this->initializerda455->__invoke($valueHolder41bd9, $this, 'commit', array(), $this->initializerda455) || 1) && $this->valueHolder41bd9 = $valueHolder41bd9;

        return $this->valueHolder41bd9->commit();
    }

    public function rollback()
    {
        $this->initializerda455 && ($this->initializerda455->__invoke($valueHolder41bd9, $this, 'rollback', array(), $this->initializerda455) || 1) && $this->valueHolder41bd9 = $valueHolder41bd9;

        return $this->valueHolder41bd9->rollback();
    }

    public function getClassMetadata($className)
    {
        $this->initializerda455 && ($this->initializerda455->__invoke($valueHolder41bd9, $this, 'getClassMetadata', array('className' => $className), $this->initializerda455) || 1) && $this->valueHolder41bd9 = $valueHolder41bd9;

        return $this->valueHolder41bd9->getClassMetadata($className);
    }

    public function createQuery($dql = '')
    {
        $this->initializerda455 && ($this->initializerda455->__invoke($valueHolder41bd9, $this, 'createQuery', array('dql' => $dql), $this->initializerda455) || 1) && $this->valueHolder41bd9 = $valueHolder41bd9;

        return $this->valueHolder41bd9->createQuery($dql);
    }

    public function createNamedQuery($name)
    {
        $this->initializerda455 && ($this->initializerda455->__invoke($valueHolder41bd9, $this, 'createNamedQuery', array('name' => $name), $this->initializerda455) || 1) && $this->valueHolder41bd9 = $valueHolder41bd9;

        return $this->valueHolder41bd9->createNamedQuery($name);
    }

    public function createNativeQuery($sql, \Doctrine\ORM\Query\ResultSetMapping $rsm)
    {
        $this->initializerda455 && ($this->initializerda455->__invoke($valueHolder41bd9, $this, 'createNativeQuery', array('sql' => $sql, 'rsm' => $rsm), $this->initializerda455) || 1) && $this->valueHolder41bd9 = $valueHolder41bd9;

        return $this->valueHolder41bd9->createNativeQuery($sql, $rsm);
    }

    public function createNamedNativeQuery($name)
    {
        $this->initializerda455 && ($this->initializerda455->__invoke($valueHolder41bd9, $this, 'createNamedNativeQuery', array('name' => $name), $this->initializerda455) || 1) && $this->valueHolder41bd9 = $valueHolder41bd9;

        return $this->valueHolder41bd9->createNamedNativeQuery($name);
    }

    public function createQueryBuilder()
    {
        $this->initializerda455 && ($this->initializerda455->__invoke($valueHolder41bd9, $this, 'createQueryBuilder', array(), $this->initializerda455) || 1) && $this->valueHolder41bd9 = $valueHolder41bd9;

        return $this->valueHolder41bd9->createQueryBuilder();
    }

    public function flush($entity = null)
    {
        $this->initializerda455 && ($this->initializerda455->__invoke($valueHolder41bd9, $this, 'flush', array('entity' => $entity), $this->initializerda455) || 1) && $this->valueHolder41bd9 = $valueHolder41bd9;

        return $this->valueHolder41bd9->flush($entity);
    }

    public function find($className, $id, $lockMode = null, $lockVersion = null)
    {
        $this->initializerda455 && ($this->initializerda455->__invoke($valueHolder41bd9, $this, 'find', array('className' => $className, 'id' => $id, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializerda455) || 1) && $this->valueHolder41bd9 = $valueHolder41bd9;

        return $this->valueHolder41bd9->find($className, $id, $lockMode, $lockVersion);
    }

    public function getReference($entityName, $id)
    {
        $this->initializerda455 && ($this->initializerda455->__invoke($valueHolder41bd9, $this, 'getReference', array('entityName' => $entityName, 'id' => $id), $this->initializerda455) || 1) && $this->valueHolder41bd9 = $valueHolder41bd9;

        return $this->valueHolder41bd9->getReference($entityName, $id);
    }

    public function getPartialReference($entityName, $identifier)
    {
        $this->initializerda455 && ($this->initializerda455->__invoke($valueHolder41bd9, $this, 'getPartialReference', array('entityName' => $entityName, 'identifier' => $identifier), $this->initializerda455) || 1) && $this->valueHolder41bd9 = $valueHolder41bd9;

        return $this->valueHolder41bd9->getPartialReference($entityName, $identifier);
    }

    public function clear($entityName = null)
    {
        $this->initializerda455 && ($this->initializerda455->__invoke($valueHolder41bd9, $this, 'clear', array('entityName' => $entityName), $this->initializerda455) || 1) && $this->valueHolder41bd9 = $valueHolder41bd9;

        return $this->valueHolder41bd9->clear($entityName);
    }

    public function close()
    {
        $this->initializerda455 && ($this->initializerda455->__invoke($valueHolder41bd9, $this, 'close', array(), $this->initializerda455) || 1) && $this->valueHolder41bd9 = $valueHolder41bd9;

        return $this->valueHolder41bd9->close();
    }

    public function persist($entity)
    {
        $this->initializerda455 && ($this->initializerda455->__invoke($valueHolder41bd9, $this, 'persist', array('entity' => $entity), $this->initializerda455) || 1) && $this->valueHolder41bd9 = $valueHolder41bd9;

        return $this->valueHolder41bd9->persist($entity);
    }

    public function remove($entity)
    {
        $this->initializerda455 && ($this->initializerda455->__invoke($valueHolder41bd9, $this, 'remove', array('entity' => $entity), $this->initializerda455) || 1) && $this->valueHolder41bd9 = $valueHolder41bd9;

        return $this->valueHolder41bd9->remove($entity);
    }

    public function refresh($entity)
    {
        $this->initializerda455 && ($this->initializerda455->__invoke($valueHolder41bd9, $this, 'refresh', array('entity' => $entity), $this->initializerda455) || 1) && $this->valueHolder41bd9 = $valueHolder41bd9;

        return $this->valueHolder41bd9->refresh($entity);
    }

    public function detach($entity)
    {
        $this->initializerda455 && ($this->initializerda455->__invoke($valueHolder41bd9, $this, 'detach', array('entity' => $entity), $this->initializerda455) || 1) && $this->valueHolder41bd9 = $valueHolder41bd9;

        return $this->valueHolder41bd9->detach($entity);
    }

    public function merge($entity)
    {
        $this->initializerda455 && ($this->initializerda455->__invoke($valueHolder41bd9, $this, 'merge', array('entity' => $entity), $this->initializerda455) || 1) && $this->valueHolder41bd9 = $valueHolder41bd9;

        return $this->valueHolder41bd9->merge($entity);
    }

    public function copy($entity, $deep = false)
    {
        $this->initializerda455 && ($this->initializerda455->__invoke($valueHolder41bd9, $this, 'copy', array('entity' => $entity, 'deep' => $deep), $this->initializerda455) || 1) && $this->valueHolder41bd9 = $valueHolder41bd9;

        return $this->valueHolder41bd9->copy($entity, $deep);
    }

    public function lock($entity, $lockMode, $lockVersion = null)
    {
        $this->initializerda455 && ($this->initializerda455->__invoke($valueHolder41bd9, $this, 'lock', array('entity' => $entity, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializerda455) || 1) && $this->valueHolder41bd9 = $valueHolder41bd9;

        return $this->valueHolder41bd9->lock($entity, $lockMode, $lockVersion);
    }

    public function getRepository($entityName)
    {
        $this->initializerda455 && ($this->initializerda455->__invoke($valueHolder41bd9, $this, 'getRepository', array('entityName' => $entityName), $this->initializerda455) || 1) && $this->valueHolder41bd9 = $valueHolder41bd9;

        return $this->valueHolder41bd9->getRepository($entityName);
    }

    public function contains($entity)
    {
        $this->initializerda455 && ($this->initializerda455->__invoke($valueHolder41bd9, $this, 'contains', array('entity' => $entity), $this->initializerda455) || 1) && $this->valueHolder41bd9 = $valueHolder41bd9;

        return $this->valueHolder41bd9->contains($entity);
    }

    public function getEventManager()
    {
        $this->initializerda455 && ($this->initializerda455->__invoke($valueHolder41bd9, $this, 'getEventManager', array(), $this->initializerda455) || 1) && $this->valueHolder41bd9 = $valueHolder41bd9;

        return $this->valueHolder41bd9->getEventManager();
    }

    public function getConfiguration()
    {
        $this->initializerda455 && ($this->initializerda455->__invoke($valueHolder41bd9, $this, 'getConfiguration', array(), $this->initializerda455) || 1) && $this->valueHolder41bd9 = $valueHolder41bd9;

        return $this->valueHolder41bd9->getConfiguration();
    }

    public function isOpen()
    {
        $this->initializerda455 && ($this->initializerda455->__invoke($valueHolder41bd9, $this, 'isOpen', array(), $this->initializerda455) || 1) && $this->valueHolder41bd9 = $valueHolder41bd9;

        return $this->valueHolder41bd9->isOpen();
    }

    public function getUnitOfWork()
    {
        $this->initializerda455 && ($this->initializerda455->__invoke($valueHolder41bd9, $this, 'getUnitOfWork', array(), $this->initializerda455) || 1) && $this->valueHolder41bd9 = $valueHolder41bd9;

        return $this->valueHolder41bd9->getUnitOfWork();
    }

    public function getHydrator($hydrationMode)
    {
        $this->initializerda455 && ($this->initializerda455->__invoke($valueHolder41bd9, $this, 'getHydrator', array('hydrationMode' => $hydrationMode), $this->initializerda455) || 1) && $this->valueHolder41bd9 = $valueHolder41bd9;

        return $this->valueHolder41bd9->getHydrator($hydrationMode);
    }

    public function newHydrator($hydrationMode)
    {
        $this->initializerda455 && ($this->initializerda455->__invoke($valueHolder41bd9, $this, 'newHydrator', array('hydrationMode' => $hydrationMode), $this->initializerda455) || 1) && $this->valueHolder41bd9 = $valueHolder41bd9;

        return $this->valueHolder41bd9->newHydrator($hydrationMode);
    }

    public function getProxyFactory()
    {
        $this->initializerda455 && ($this->initializerda455->__invoke($valueHolder41bd9, $this, 'getProxyFactory', array(), $this->initializerda455) || 1) && $this->valueHolder41bd9 = $valueHolder41bd9;

        return $this->valueHolder41bd9->getProxyFactory();
    }

    public function initializeObject($obj)
    {
        $this->initializerda455 && ($this->initializerda455->__invoke($valueHolder41bd9, $this, 'initializeObject', array('obj' => $obj), $this->initializerda455) || 1) && $this->valueHolder41bd9 = $valueHolder41bd9;

        return $this->valueHolder41bd9->initializeObject($obj);
    }

    public function getFilters()
    {
        $this->initializerda455 && ($this->initializerda455->__invoke($valueHolder41bd9, $this, 'getFilters', array(), $this->initializerda455) || 1) && $this->valueHolder41bd9 = $valueHolder41bd9;

        return $this->valueHolder41bd9->getFilters();
    }

    public function isFiltersStateClean()
    {
        $this->initializerda455 && ($this->initializerda455->__invoke($valueHolder41bd9, $this, 'isFiltersStateClean', array(), $this->initializerda455) || 1) && $this->valueHolder41bd9 = $valueHolder41bd9;

        return $this->valueHolder41bd9->isFiltersStateClean();
    }

    public function hasFilters()
    {
        $this->initializerda455 && ($this->initializerda455->__invoke($valueHolder41bd9, $this, 'hasFilters', array(), $this->initializerda455) || 1) && $this->valueHolder41bd9 = $valueHolder41bd9;

        return $this->valueHolder41bd9->hasFilters();
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

        $instance->initializerda455 = $initializer;

        return $instance;
    }

    protected function __construct(\Doctrine\DBAL\Connection $conn, \Doctrine\ORM\Configuration $config, \Doctrine\Common\EventManager $eventManager)
    {
        static $reflection;

        if (! $this->valueHolder41bd9) {
            $reflection = $reflection ?? new \ReflectionClass('Doctrine\\ORM\\EntityManager');
            $this->valueHolder41bd9 = $reflection->newInstanceWithoutConstructor();
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);

        }

        $this->valueHolder41bd9->__construct($conn, $config, $eventManager);
    }

    public function & __get($name)
    {
        $this->initializerda455 && ($this->initializerda455->__invoke($valueHolder41bd9, $this, '__get', ['name' => $name], $this->initializerda455) || 1) && $this->valueHolder41bd9 = $valueHolder41bd9;

        if (isset(self::$publicPropertiesa348a[$name])) {
            return $this->valueHolder41bd9->$name;
        }

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder41bd9;

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

        $targetObject = $this->valueHolder41bd9;
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
        $this->initializerda455 && ($this->initializerda455->__invoke($valueHolder41bd9, $this, '__set', array('name' => $name, 'value' => $value), $this->initializerda455) || 1) && $this->valueHolder41bd9 = $valueHolder41bd9;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder41bd9;

            $targetObject->$name = $value;

            return $targetObject->$name;
        }

        $targetObject = $this->valueHolder41bd9;
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
        $this->initializerda455 && ($this->initializerda455->__invoke($valueHolder41bd9, $this, '__isset', array('name' => $name), $this->initializerda455) || 1) && $this->valueHolder41bd9 = $valueHolder41bd9;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder41bd9;

            return isset($targetObject->$name);
        }

        $targetObject = $this->valueHolder41bd9;
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
        $this->initializerda455 && ($this->initializerda455->__invoke($valueHolder41bd9, $this, '__unset', array('name' => $name), $this->initializerda455) || 1) && $this->valueHolder41bd9 = $valueHolder41bd9;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder41bd9;

            unset($targetObject->$name);

            return;
        }

        $targetObject = $this->valueHolder41bd9;
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
        $this->initializerda455 && ($this->initializerda455->__invoke($valueHolder41bd9, $this, '__clone', array(), $this->initializerda455) || 1) && $this->valueHolder41bd9 = $valueHolder41bd9;

        $this->valueHolder41bd9 = clone $this->valueHolder41bd9;
    }

    public function __sleep()
    {
        $this->initializerda455 && ($this->initializerda455->__invoke($valueHolder41bd9, $this, '__sleep', array(), $this->initializerda455) || 1) && $this->valueHolder41bd9 = $valueHolder41bd9;

        return array('valueHolder41bd9');
    }

    public function __wakeup()
    {
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);
    }

    public function setProxyInitializer(\Closure $initializer = null) : void
    {
        $this->initializerda455 = $initializer;
    }

    public function getProxyInitializer() : ?\Closure
    {
        return $this->initializerda455;
    }

    public function initializeProxy() : bool
    {
        return $this->initializerda455 && ($this->initializerda455->__invoke($valueHolder41bd9, $this, 'initializeProxy', array(), $this->initializerda455) || 1) && $this->valueHolder41bd9 = $valueHolder41bd9;
    }

    public function isProxyInitialized() : bool
    {
        return null !== $this->valueHolder41bd9;
    }

    public function getWrappedValueHolderValue()
    {
        return $this->valueHolder41bd9;
    }
}

if (!\class_exists('EntityManager_9a5be93', false)) {
    \class_alias(__NAMESPACE__.'\\EntityManager_9a5be93', 'EntityManager_9a5be93', false);
}
