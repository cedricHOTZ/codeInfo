<?php

namespace ContainerB7kx8LP;
include_once \dirname(__DIR__, 4).'/vendor/doctrine/persistence/src/Persistence/ObjectManager.php';
include_once \dirname(__DIR__, 4).'/vendor/doctrine/orm/lib/Doctrine/ORM/EntityManagerInterface.php';
include_once \dirname(__DIR__, 4).'/vendor/doctrine/orm/lib/Doctrine/ORM/EntityManager.php';

class EntityManager_9a5be93 extends \Doctrine\ORM\EntityManager implements \ProxyManager\Proxy\VirtualProxyInterface
{
    /**
     * @var \Doctrine\ORM\EntityManager|null wrapped object, if the proxy is initialized
     */
    private $valueHolder3b17d = null;

    /**
     * @var \Closure|null initializer responsible for generating the wrapped object
     */
    private $initializer0172e = null;

    /**
     * @var bool[] map of public properties of the parent class
     */
    private static $publicPropertiesff58a = [
        
    ];

    public function getConnection()
    {
        $this->initializer0172e && ($this->initializer0172e->__invoke($valueHolder3b17d, $this, 'getConnection', array(), $this->initializer0172e) || 1) && $this->valueHolder3b17d = $valueHolder3b17d;

        return $this->valueHolder3b17d->getConnection();
    }

    public function getMetadataFactory()
    {
        $this->initializer0172e && ($this->initializer0172e->__invoke($valueHolder3b17d, $this, 'getMetadataFactory', array(), $this->initializer0172e) || 1) && $this->valueHolder3b17d = $valueHolder3b17d;

        return $this->valueHolder3b17d->getMetadataFactory();
    }

    public function getExpressionBuilder()
    {
        $this->initializer0172e && ($this->initializer0172e->__invoke($valueHolder3b17d, $this, 'getExpressionBuilder', array(), $this->initializer0172e) || 1) && $this->valueHolder3b17d = $valueHolder3b17d;

        return $this->valueHolder3b17d->getExpressionBuilder();
    }

    public function beginTransaction()
    {
        $this->initializer0172e && ($this->initializer0172e->__invoke($valueHolder3b17d, $this, 'beginTransaction', array(), $this->initializer0172e) || 1) && $this->valueHolder3b17d = $valueHolder3b17d;

        return $this->valueHolder3b17d->beginTransaction();
    }

    public function getCache()
    {
        $this->initializer0172e && ($this->initializer0172e->__invoke($valueHolder3b17d, $this, 'getCache', array(), $this->initializer0172e) || 1) && $this->valueHolder3b17d = $valueHolder3b17d;

        return $this->valueHolder3b17d->getCache();
    }

    public function transactional($func)
    {
        $this->initializer0172e && ($this->initializer0172e->__invoke($valueHolder3b17d, $this, 'transactional', array('func' => $func), $this->initializer0172e) || 1) && $this->valueHolder3b17d = $valueHolder3b17d;

        return $this->valueHolder3b17d->transactional($func);
    }

    public function wrapInTransaction(callable $func)
    {
        $this->initializer0172e && ($this->initializer0172e->__invoke($valueHolder3b17d, $this, 'wrapInTransaction', array('func' => $func), $this->initializer0172e) || 1) && $this->valueHolder3b17d = $valueHolder3b17d;

        return $this->valueHolder3b17d->wrapInTransaction($func);
    }

    public function commit()
    {
        $this->initializer0172e && ($this->initializer0172e->__invoke($valueHolder3b17d, $this, 'commit', array(), $this->initializer0172e) || 1) && $this->valueHolder3b17d = $valueHolder3b17d;

        return $this->valueHolder3b17d->commit();
    }

    public function rollback()
    {
        $this->initializer0172e && ($this->initializer0172e->__invoke($valueHolder3b17d, $this, 'rollback', array(), $this->initializer0172e) || 1) && $this->valueHolder3b17d = $valueHolder3b17d;

        return $this->valueHolder3b17d->rollback();
    }

    public function getClassMetadata($className)
    {
        $this->initializer0172e && ($this->initializer0172e->__invoke($valueHolder3b17d, $this, 'getClassMetadata', array('className' => $className), $this->initializer0172e) || 1) && $this->valueHolder3b17d = $valueHolder3b17d;

        return $this->valueHolder3b17d->getClassMetadata($className);
    }

    public function createQuery($dql = '')
    {
        $this->initializer0172e && ($this->initializer0172e->__invoke($valueHolder3b17d, $this, 'createQuery', array('dql' => $dql), $this->initializer0172e) || 1) && $this->valueHolder3b17d = $valueHolder3b17d;

        return $this->valueHolder3b17d->createQuery($dql);
    }

    public function createNamedQuery($name)
    {
        $this->initializer0172e && ($this->initializer0172e->__invoke($valueHolder3b17d, $this, 'createNamedQuery', array('name' => $name), $this->initializer0172e) || 1) && $this->valueHolder3b17d = $valueHolder3b17d;

        return $this->valueHolder3b17d->createNamedQuery($name);
    }

    public function createNativeQuery($sql, \Doctrine\ORM\Query\ResultSetMapping $rsm)
    {
        $this->initializer0172e && ($this->initializer0172e->__invoke($valueHolder3b17d, $this, 'createNativeQuery', array('sql' => $sql, 'rsm' => $rsm), $this->initializer0172e) || 1) && $this->valueHolder3b17d = $valueHolder3b17d;

        return $this->valueHolder3b17d->createNativeQuery($sql, $rsm);
    }

    public function createNamedNativeQuery($name)
    {
        $this->initializer0172e && ($this->initializer0172e->__invoke($valueHolder3b17d, $this, 'createNamedNativeQuery', array('name' => $name), $this->initializer0172e) || 1) && $this->valueHolder3b17d = $valueHolder3b17d;

        return $this->valueHolder3b17d->createNamedNativeQuery($name);
    }

    public function createQueryBuilder()
    {
        $this->initializer0172e && ($this->initializer0172e->__invoke($valueHolder3b17d, $this, 'createQueryBuilder', array(), $this->initializer0172e) || 1) && $this->valueHolder3b17d = $valueHolder3b17d;

        return $this->valueHolder3b17d->createQueryBuilder();
    }

    public function flush($entity = null)
    {
        $this->initializer0172e && ($this->initializer0172e->__invoke($valueHolder3b17d, $this, 'flush', array('entity' => $entity), $this->initializer0172e) || 1) && $this->valueHolder3b17d = $valueHolder3b17d;

        return $this->valueHolder3b17d->flush($entity);
    }

    public function find($className, $id, $lockMode = null, $lockVersion = null)
    {
        $this->initializer0172e && ($this->initializer0172e->__invoke($valueHolder3b17d, $this, 'find', array('className' => $className, 'id' => $id, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializer0172e) || 1) && $this->valueHolder3b17d = $valueHolder3b17d;

        return $this->valueHolder3b17d->find($className, $id, $lockMode, $lockVersion);
    }

    public function getReference($entityName, $id)
    {
        $this->initializer0172e && ($this->initializer0172e->__invoke($valueHolder3b17d, $this, 'getReference', array('entityName' => $entityName, 'id' => $id), $this->initializer0172e) || 1) && $this->valueHolder3b17d = $valueHolder3b17d;

        return $this->valueHolder3b17d->getReference($entityName, $id);
    }

    public function getPartialReference($entityName, $identifier)
    {
        $this->initializer0172e && ($this->initializer0172e->__invoke($valueHolder3b17d, $this, 'getPartialReference', array('entityName' => $entityName, 'identifier' => $identifier), $this->initializer0172e) || 1) && $this->valueHolder3b17d = $valueHolder3b17d;

        return $this->valueHolder3b17d->getPartialReference($entityName, $identifier);
    }

    public function clear($entityName = null)
    {
        $this->initializer0172e && ($this->initializer0172e->__invoke($valueHolder3b17d, $this, 'clear', array('entityName' => $entityName), $this->initializer0172e) || 1) && $this->valueHolder3b17d = $valueHolder3b17d;

        return $this->valueHolder3b17d->clear($entityName);
    }

    public function close()
    {
        $this->initializer0172e && ($this->initializer0172e->__invoke($valueHolder3b17d, $this, 'close', array(), $this->initializer0172e) || 1) && $this->valueHolder3b17d = $valueHolder3b17d;

        return $this->valueHolder3b17d->close();
    }

    public function persist($entity)
    {
        $this->initializer0172e && ($this->initializer0172e->__invoke($valueHolder3b17d, $this, 'persist', array('entity' => $entity), $this->initializer0172e) || 1) && $this->valueHolder3b17d = $valueHolder3b17d;

        return $this->valueHolder3b17d->persist($entity);
    }

    public function remove($entity)
    {
        $this->initializer0172e && ($this->initializer0172e->__invoke($valueHolder3b17d, $this, 'remove', array('entity' => $entity), $this->initializer0172e) || 1) && $this->valueHolder3b17d = $valueHolder3b17d;

        return $this->valueHolder3b17d->remove($entity);
    }

    public function refresh($entity)
    {
        $this->initializer0172e && ($this->initializer0172e->__invoke($valueHolder3b17d, $this, 'refresh', array('entity' => $entity), $this->initializer0172e) || 1) && $this->valueHolder3b17d = $valueHolder3b17d;

        return $this->valueHolder3b17d->refresh($entity);
    }

    public function detach($entity)
    {
        $this->initializer0172e && ($this->initializer0172e->__invoke($valueHolder3b17d, $this, 'detach', array('entity' => $entity), $this->initializer0172e) || 1) && $this->valueHolder3b17d = $valueHolder3b17d;

        return $this->valueHolder3b17d->detach($entity);
    }

    public function merge($entity)
    {
        $this->initializer0172e && ($this->initializer0172e->__invoke($valueHolder3b17d, $this, 'merge', array('entity' => $entity), $this->initializer0172e) || 1) && $this->valueHolder3b17d = $valueHolder3b17d;

        return $this->valueHolder3b17d->merge($entity);
    }

    public function copy($entity, $deep = false)
    {
        $this->initializer0172e && ($this->initializer0172e->__invoke($valueHolder3b17d, $this, 'copy', array('entity' => $entity, 'deep' => $deep), $this->initializer0172e) || 1) && $this->valueHolder3b17d = $valueHolder3b17d;

        return $this->valueHolder3b17d->copy($entity, $deep);
    }

    public function lock($entity, $lockMode, $lockVersion = null)
    {
        $this->initializer0172e && ($this->initializer0172e->__invoke($valueHolder3b17d, $this, 'lock', array('entity' => $entity, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializer0172e) || 1) && $this->valueHolder3b17d = $valueHolder3b17d;

        return $this->valueHolder3b17d->lock($entity, $lockMode, $lockVersion);
    }

    public function getRepository($entityName)
    {
        $this->initializer0172e && ($this->initializer0172e->__invoke($valueHolder3b17d, $this, 'getRepository', array('entityName' => $entityName), $this->initializer0172e) || 1) && $this->valueHolder3b17d = $valueHolder3b17d;

        return $this->valueHolder3b17d->getRepository($entityName);
    }

    public function contains($entity)
    {
        $this->initializer0172e && ($this->initializer0172e->__invoke($valueHolder3b17d, $this, 'contains', array('entity' => $entity), $this->initializer0172e) || 1) && $this->valueHolder3b17d = $valueHolder3b17d;

        return $this->valueHolder3b17d->contains($entity);
    }

    public function getEventManager()
    {
        $this->initializer0172e && ($this->initializer0172e->__invoke($valueHolder3b17d, $this, 'getEventManager', array(), $this->initializer0172e) || 1) && $this->valueHolder3b17d = $valueHolder3b17d;

        return $this->valueHolder3b17d->getEventManager();
    }

    public function getConfiguration()
    {
        $this->initializer0172e && ($this->initializer0172e->__invoke($valueHolder3b17d, $this, 'getConfiguration', array(), $this->initializer0172e) || 1) && $this->valueHolder3b17d = $valueHolder3b17d;

        return $this->valueHolder3b17d->getConfiguration();
    }

    public function isOpen()
    {
        $this->initializer0172e && ($this->initializer0172e->__invoke($valueHolder3b17d, $this, 'isOpen', array(), $this->initializer0172e) || 1) && $this->valueHolder3b17d = $valueHolder3b17d;

        return $this->valueHolder3b17d->isOpen();
    }

    public function getUnitOfWork()
    {
        $this->initializer0172e && ($this->initializer0172e->__invoke($valueHolder3b17d, $this, 'getUnitOfWork', array(), $this->initializer0172e) || 1) && $this->valueHolder3b17d = $valueHolder3b17d;

        return $this->valueHolder3b17d->getUnitOfWork();
    }

    public function getHydrator($hydrationMode)
    {
        $this->initializer0172e && ($this->initializer0172e->__invoke($valueHolder3b17d, $this, 'getHydrator', array('hydrationMode' => $hydrationMode), $this->initializer0172e) || 1) && $this->valueHolder3b17d = $valueHolder3b17d;

        return $this->valueHolder3b17d->getHydrator($hydrationMode);
    }

    public function newHydrator($hydrationMode)
    {
        $this->initializer0172e && ($this->initializer0172e->__invoke($valueHolder3b17d, $this, 'newHydrator', array('hydrationMode' => $hydrationMode), $this->initializer0172e) || 1) && $this->valueHolder3b17d = $valueHolder3b17d;

        return $this->valueHolder3b17d->newHydrator($hydrationMode);
    }

    public function getProxyFactory()
    {
        $this->initializer0172e && ($this->initializer0172e->__invoke($valueHolder3b17d, $this, 'getProxyFactory', array(), $this->initializer0172e) || 1) && $this->valueHolder3b17d = $valueHolder3b17d;

        return $this->valueHolder3b17d->getProxyFactory();
    }

    public function initializeObject($obj)
    {
        $this->initializer0172e && ($this->initializer0172e->__invoke($valueHolder3b17d, $this, 'initializeObject', array('obj' => $obj), $this->initializer0172e) || 1) && $this->valueHolder3b17d = $valueHolder3b17d;

        return $this->valueHolder3b17d->initializeObject($obj);
    }

    public function getFilters()
    {
        $this->initializer0172e && ($this->initializer0172e->__invoke($valueHolder3b17d, $this, 'getFilters', array(), $this->initializer0172e) || 1) && $this->valueHolder3b17d = $valueHolder3b17d;

        return $this->valueHolder3b17d->getFilters();
    }

    public function isFiltersStateClean()
    {
        $this->initializer0172e && ($this->initializer0172e->__invoke($valueHolder3b17d, $this, 'isFiltersStateClean', array(), $this->initializer0172e) || 1) && $this->valueHolder3b17d = $valueHolder3b17d;

        return $this->valueHolder3b17d->isFiltersStateClean();
    }

    public function hasFilters()
    {
        $this->initializer0172e && ($this->initializer0172e->__invoke($valueHolder3b17d, $this, 'hasFilters', array(), $this->initializer0172e) || 1) && $this->valueHolder3b17d = $valueHolder3b17d;

        return $this->valueHolder3b17d->hasFilters();
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

        $instance->initializer0172e = $initializer;

        return $instance;
    }

    protected function __construct(\Doctrine\DBAL\Connection $conn, \Doctrine\ORM\Configuration $config, \Doctrine\Common\EventManager $eventManager)
    {
        static $reflection;

        if (! $this->valueHolder3b17d) {
            $reflection = $reflection ?? new \ReflectionClass('Doctrine\\ORM\\EntityManager');
            $this->valueHolder3b17d = $reflection->newInstanceWithoutConstructor();
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);

        }

        $this->valueHolder3b17d->__construct($conn, $config, $eventManager);
    }

    public function & __get($name)
    {
        $this->initializer0172e && ($this->initializer0172e->__invoke($valueHolder3b17d, $this, '__get', ['name' => $name], $this->initializer0172e) || 1) && $this->valueHolder3b17d = $valueHolder3b17d;

        if (isset(self::$publicPropertiesff58a[$name])) {
            return $this->valueHolder3b17d->$name;
        }

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder3b17d;

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

        $targetObject = $this->valueHolder3b17d;
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
        $this->initializer0172e && ($this->initializer0172e->__invoke($valueHolder3b17d, $this, '__set', array('name' => $name, 'value' => $value), $this->initializer0172e) || 1) && $this->valueHolder3b17d = $valueHolder3b17d;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder3b17d;

            $targetObject->$name = $value;

            return $targetObject->$name;
        }

        $targetObject = $this->valueHolder3b17d;
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
        $this->initializer0172e && ($this->initializer0172e->__invoke($valueHolder3b17d, $this, '__isset', array('name' => $name), $this->initializer0172e) || 1) && $this->valueHolder3b17d = $valueHolder3b17d;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder3b17d;

            return isset($targetObject->$name);
        }

        $targetObject = $this->valueHolder3b17d;
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
        $this->initializer0172e && ($this->initializer0172e->__invoke($valueHolder3b17d, $this, '__unset', array('name' => $name), $this->initializer0172e) || 1) && $this->valueHolder3b17d = $valueHolder3b17d;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder3b17d;

            unset($targetObject->$name);

            return;
        }

        $targetObject = $this->valueHolder3b17d;
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
        $this->initializer0172e && ($this->initializer0172e->__invoke($valueHolder3b17d, $this, '__clone', array(), $this->initializer0172e) || 1) && $this->valueHolder3b17d = $valueHolder3b17d;

        $this->valueHolder3b17d = clone $this->valueHolder3b17d;
    }

    public function __sleep()
    {
        $this->initializer0172e && ($this->initializer0172e->__invoke($valueHolder3b17d, $this, '__sleep', array(), $this->initializer0172e) || 1) && $this->valueHolder3b17d = $valueHolder3b17d;

        return array('valueHolder3b17d');
    }

    public function __wakeup()
    {
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);
    }

    public function setProxyInitializer(\Closure $initializer = null) : void
    {
        $this->initializer0172e = $initializer;
    }

    public function getProxyInitializer() : ?\Closure
    {
        return $this->initializer0172e;
    }

    public function initializeProxy() : bool
    {
        return $this->initializer0172e && ($this->initializer0172e->__invoke($valueHolder3b17d, $this, 'initializeProxy', array(), $this->initializer0172e) || 1) && $this->valueHolder3b17d = $valueHolder3b17d;
    }

    public function isProxyInitialized() : bool
    {
        return null !== $this->valueHolder3b17d;
    }

    public function getWrappedValueHolderValue()
    {
        return $this->valueHolder3b17d;
    }
}

if (!\class_exists('EntityManager_9a5be93', false)) {
    \class_alias(__NAMESPACE__.'\\EntityManager_9a5be93', 'EntityManager_9a5be93', false);
}
