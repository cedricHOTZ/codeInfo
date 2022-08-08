<?php

namespace ContainerHOCDKEc;
include_once \dirname(__DIR__, 4).'/vendor/doctrine/persistence/src/Persistence/ObjectManager.php';
include_once \dirname(__DIR__, 4).'/vendor/doctrine/orm/lib/Doctrine/ORM/EntityManagerInterface.php';
include_once \dirname(__DIR__, 4).'/vendor/doctrine/orm/lib/Doctrine/ORM/EntityManager.php';

class EntityManager_9a5be93 extends \Doctrine\ORM\EntityManager implements \ProxyManager\Proxy\VirtualProxyInterface
{
    /**
     * @var \Doctrine\ORM\EntityManager|null wrapped object, if the proxy is initialized
     */
    private $valueHolder19135 = null;

    /**
     * @var \Closure|null initializer responsible for generating the wrapped object
     */
    private $initializer2fade = null;

    /**
     * @var bool[] map of public properties of the parent class
     */
    private static $publicPropertiesff409 = [
        
    ];

    public function getConnection()
    {
        $this->initializer2fade && ($this->initializer2fade->__invoke($valueHolder19135, $this, 'getConnection', array(), $this->initializer2fade) || 1) && $this->valueHolder19135 = $valueHolder19135;

        return $this->valueHolder19135->getConnection();
    }

    public function getMetadataFactory()
    {
        $this->initializer2fade && ($this->initializer2fade->__invoke($valueHolder19135, $this, 'getMetadataFactory', array(), $this->initializer2fade) || 1) && $this->valueHolder19135 = $valueHolder19135;

        return $this->valueHolder19135->getMetadataFactory();
    }

    public function getExpressionBuilder()
    {
        $this->initializer2fade && ($this->initializer2fade->__invoke($valueHolder19135, $this, 'getExpressionBuilder', array(), $this->initializer2fade) || 1) && $this->valueHolder19135 = $valueHolder19135;

        return $this->valueHolder19135->getExpressionBuilder();
    }

    public function beginTransaction()
    {
        $this->initializer2fade && ($this->initializer2fade->__invoke($valueHolder19135, $this, 'beginTransaction', array(), $this->initializer2fade) || 1) && $this->valueHolder19135 = $valueHolder19135;

        return $this->valueHolder19135->beginTransaction();
    }

    public function getCache()
    {
        $this->initializer2fade && ($this->initializer2fade->__invoke($valueHolder19135, $this, 'getCache', array(), $this->initializer2fade) || 1) && $this->valueHolder19135 = $valueHolder19135;

        return $this->valueHolder19135->getCache();
    }

    public function transactional($func)
    {
        $this->initializer2fade && ($this->initializer2fade->__invoke($valueHolder19135, $this, 'transactional', array('func' => $func), $this->initializer2fade) || 1) && $this->valueHolder19135 = $valueHolder19135;

        return $this->valueHolder19135->transactional($func);
    }

    public function wrapInTransaction(callable $func)
    {
        $this->initializer2fade && ($this->initializer2fade->__invoke($valueHolder19135, $this, 'wrapInTransaction', array('func' => $func), $this->initializer2fade) || 1) && $this->valueHolder19135 = $valueHolder19135;

        return $this->valueHolder19135->wrapInTransaction($func);
    }

    public function commit()
    {
        $this->initializer2fade && ($this->initializer2fade->__invoke($valueHolder19135, $this, 'commit', array(), $this->initializer2fade) || 1) && $this->valueHolder19135 = $valueHolder19135;

        return $this->valueHolder19135->commit();
    }

    public function rollback()
    {
        $this->initializer2fade && ($this->initializer2fade->__invoke($valueHolder19135, $this, 'rollback', array(), $this->initializer2fade) || 1) && $this->valueHolder19135 = $valueHolder19135;

        return $this->valueHolder19135->rollback();
    }

    public function getClassMetadata($className)
    {
        $this->initializer2fade && ($this->initializer2fade->__invoke($valueHolder19135, $this, 'getClassMetadata', array('className' => $className), $this->initializer2fade) || 1) && $this->valueHolder19135 = $valueHolder19135;

        return $this->valueHolder19135->getClassMetadata($className);
    }

    public function createQuery($dql = '')
    {
        $this->initializer2fade && ($this->initializer2fade->__invoke($valueHolder19135, $this, 'createQuery', array('dql' => $dql), $this->initializer2fade) || 1) && $this->valueHolder19135 = $valueHolder19135;

        return $this->valueHolder19135->createQuery($dql);
    }

    public function createNamedQuery($name)
    {
        $this->initializer2fade && ($this->initializer2fade->__invoke($valueHolder19135, $this, 'createNamedQuery', array('name' => $name), $this->initializer2fade) || 1) && $this->valueHolder19135 = $valueHolder19135;

        return $this->valueHolder19135->createNamedQuery($name);
    }

    public function createNativeQuery($sql, \Doctrine\ORM\Query\ResultSetMapping $rsm)
    {
        $this->initializer2fade && ($this->initializer2fade->__invoke($valueHolder19135, $this, 'createNativeQuery', array('sql' => $sql, 'rsm' => $rsm), $this->initializer2fade) || 1) && $this->valueHolder19135 = $valueHolder19135;

        return $this->valueHolder19135->createNativeQuery($sql, $rsm);
    }

    public function createNamedNativeQuery($name)
    {
        $this->initializer2fade && ($this->initializer2fade->__invoke($valueHolder19135, $this, 'createNamedNativeQuery', array('name' => $name), $this->initializer2fade) || 1) && $this->valueHolder19135 = $valueHolder19135;

        return $this->valueHolder19135->createNamedNativeQuery($name);
    }

    public function createQueryBuilder()
    {
        $this->initializer2fade && ($this->initializer2fade->__invoke($valueHolder19135, $this, 'createQueryBuilder', array(), $this->initializer2fade) || 1) && $this->valueHolder19135 = $valueHolder19135;

        return $this->valueHolder19135->createQueryBuilder();
    }

    public function flush($entity = null)
    {
        $this->initializer2fade && ($this->initializer2fade->__invoke($valueHolder19135, $this, 'flush', array('entity' => $entity), $this->initializer2fade) || 1) && $this->valueHolder19135 = $valueHolder19135;

        return $this->valueHolder19135->flush($entity);
    }

    public function find($className, $id, $lockMode = null, $lockVersion = null)
    {
        $this->initializer2fade && ($this->initializer2fade->__invoke($valueHolder19135, $this, 'find', array('className' => $className, 'id' => $id, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializer2fade) || 1) && $this->valueHolder19135 = $valueHolder19135;

        return $this->valueHolder19135->find($className, $id, $lockMode, $lockVersion);
    }

    public function getReference($entityName, $id)
    {
        $this->initializer2fade && ($this->initializer2fade->__invoke($valueHolder19135, $this, 'getReference', array('entityName' => $entityName, 'id' => $id), $this->initializer2fade) || 1) && $this->valueHolder19135 = $valueHolder19135;

        return $this->valueHolder19135->getReference($entityName, $id);
    }

    public function getPartialReference($entityName, $identifier)
    {
        $this->initializer2fade && ($this->initializer2fade->__invoke($valueHolder19135, $this, 'getPartialReference', array('entityName' => $entityName, 'identifier' => $identifier), $this->initializer2fade) || 1) && $this->valueHolder19135 = $valueHolder19135;

        return $this->valueHolder19135->getPartialReference($entityName, $identifier);
    }

    public function clear($entityName = null)
    {
        $this->initializer2fade && ($this->initializer2fade->__invoke($valueHolder19135, $this, 'clear', array('entityName' => $entityName), $this->initializer2fade) || 1) && $this->valueHolder19135 = $valueHolder19135;

        return $this->valueHolder19135->clear($entityName);
    }

    public function close()
    {
        $this->initializer2fade && ($this->initializer2fade->__invoke($valueHolder19135, $this, 'close', array(), $this->initializer2fade) || 1) && $this->valueHolder19135 = $valueHolder19135;

        return $this->valueHolder19135->close();
    }

    public function persist($entity)
    {
        $this->initializer2fade && ($this->initializer2fade->__invoke($valueHolder19135, $this, 'persist', array('entity' => $entity), $this->initializer2fade) || 1) && $this->valueHolder19135 = $valueHolder19135;

        return $this->valueHolder19135->persist($entity);
    }

    public function remove($entity)
    {
        $this->initializer2fade && ($this->initializer2fade->__invoke($valueHolder19135, $this, 'remove', array('entity' => $entity), $this->initializer2fade) || 1) && $this->valueHolder19135 = $valueHolder19135;

        return $this->valueHolder19135->remove($entity);
    }

    public function refresh($entity)
    {
        $this->initializer2fade && ($this->initializer2fade->__invoke($valueHolder19135, $this, 'refresh', array('entity' => $entity), $this->initializer2fade) || 1) && $this->valueHolder19135 = $valueHolder19135;

        return $this->valueHolder19135->refresh($entity);
    }

    public function detach($entity)
    {
        $this->initializer2fade && ($this->initializer2fade->__invoke($valueHolder19135, $this, 'detach', array('entity' => $entity), $this->initializer2fade) || 1) && $this->valueHolder19135 = $valueHolder19135;

        return $this->valueHolder19135->detach($entity);
    }

    public function merge($entity)
    {
        $this->initializer2fade && ($this->initializer2fade->__invoke($valueHolder19135, $this, 'merge', array('entity' => $entity), $this->initializer2fade) || 1) && $this->valueHolder19135 = $valueHolder19135;

        return $this->valueHolder19135->merge($entity);
    }

    public function copy($entity, $deep = false)
    {
        $this->initializer2fade && ($this->initializer2fade->__invoke($valueHolder19135, $this, 'copy', array('entity' => $entity, 'deep' => $deep), $this->initializer2fade) || 1) && $this->valueHolder19135 = $valueHolder19135;

        return $this->valueHolder19135->copy($entity, $deep);
    }

    public function lock($entity, $lockMode, $lockVersion = null)
    {
        $this->initializer2fade && ($this->initializer2fade->__invoke($valueHolder19135, $this, 'lock', array('entity' => $entity, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializer2fade) || 1) && $this->valueHolder19135 = $valueHolder19135;

        return $this->valueHolder19135->lock($entity, $lockMode, $lockVersion);
    }

    public function getRepository($entityName)
    {
        $this->initializer2fade && ($this->initializer2fade->__invoke($valueHolder19135, $this, 'getRepository', array('entityName' => $entityName), $this->initializer2fade) || 1) && $this->valueHolder19135 = $valueHolder19135;

        return $this->valueHolder19135->getRepository($entityName);
    }

    public function contains($entity)
    {
        $this->initializer2fade && ($this->initializer2fade->__invoke($valueHolder19135, $this, 'contains', array('entity' => $entity), $this->initializer2fade) || 1) && $this->valueHolder19135 = $valueHolder19135;

        return $this->valueHolder19135->contains($entity);
    }

    public function getEventManager()
    {
        $this->initializer2fade && ($this->initializer2fade->__invoke($valueHolder19135, $this, 'getEventManager', array(), $this->initializer2fade) || 1) && $this->valueHolder19135 = $valueHolder19135;

        return $this->valueHolder19135->getEventManager();
    }

    public function getConfiguration()
    {
        $this->initializer2fade && ($this->initializer2fade->__invoke($valueHolder19135, $this, 'getConfiguration', array(), $this->initializer2fade) || 1) && $this->valueHolder19135 = $valueHolder19135;

        return $this->valueHolder19135->getConfiguration();
    }

    public function isOpen()
    {
        $this->initializer2fade && ($this->initializer2fade->__invoke($valueHolder19135, $this, 'isOpen', array(), $this->initializer2fade) || 1) && $this->valueHolder19135 = $valueHolder19135;

        return $this->valueHolder19135->isOpen();
    }

    public function getUnitOfWork()
    {
        $this->initializer2fade && ($this->initializer2fade->__invoke($valueHolder19135, $this, 'getUnitOfWork', array(), $this->initializer2fade) || 1) && $this->valueHolder19135 = $valueHolder19135;

        return $this->valueHolder19135->getUnitOfWork();
    }

    public function getHydrator($hydrationMode)
    {
        $this->initializer2fade && ($this->initializer2fade->__invoke($valueHolder19135, $this, 'getHydrator', array('hydrationMode' => $hydrationMode), $this->initializer2fade) || 1) && $this->valueHolder19135 = $valueHolder19135;

        return $this->valueHolder19135->getHydrator($hydrationMode);
    }

    public function newHydrator($hydrationMode)
    {
        $this->initializer2fade && ($this->initializer2fade->__invoke($valueHolder19135, $this, 'newHydrator', array('hydrationMode' => $hydrationMode), $this->initializer2fade) || 1) && $this->valueHolder19135 = $valueHolder19135;

        return $this->valueHolder19135->newHydrator($hydrationMode);
    }

    public function getProxyFactory()
    {
        $this->initializer2fade && ($this->initializer2fade->__invoke($valueHolder19135, $this, 'getProxyFactory', array(), $this->initializer2fade) || 1) && $this->valueHolder19135 = $valueHolder19135;

        return $this->valueHolder19135->getProxyFactory();
    }

    public function initializeObject($obj)
    {
        $this->initializer2fade && ($this->initializer2fade->__invoke($valueHolder19135, $this, 'initializeObject', array('obj' => $obj), $this->initializer2fade) || 1) && $this->valueHolder19135 = $valueHolder19135;

        return $this->valueHolder19135->initializeObject($obj);
    }

    public function getFilters()
    {
        $this->initializer2fade && ($this->initializer2fade->__invoke($valueHolder19135, $this, 'getFilters', array(), $this->initializer2fade) || 1) && $this->valueHolder19135 = $valueHolder19135;

        return $this->valueHolder19135->getFilters();
    }

    public function isFiltersStateClean()
    {
        $this->initializer2fade && ($this->initializer2fade->__invoke($valueHolder19135, $this, 'isFiltersStateClean', array(), $this->initializer2fade) || 1) && $this->valueHolder19135 = $valueHolder19135;

        return $this->valueHolder19135->isFiltersStateClean();
    }

    public function hasFilters()
    {
        $this->initializer2fade && ($this->initializer2fade->__invoke($valueHolder19135, $this, 'hasFilters', array(), $this->initializer2fade) || 1) && $this->valueHolder19135 = $valueHolder19135;

        return $this->valueHolder19135->hasFilters();
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

        $instance->initializer2fade = $initializer;

        return $instance;
    }

    protected function __construct(\Doctrine\DBAL\Connection $conn, \Doctrine\ORM\Configuration $config, \Doctrine\Common\EventManager $eventManager)
    {
        static $reflection;

        if (! $this->valueHolder19135) {
            $reflection = $reflection ?? new \ReflectionClass('Doctrine\\ORM\\EntityManager');
            $this->valueHolder19135 = $reflection->newInstanceWithoutConstructor();
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);

        }

        $this->valueHolder19135->__construct($conn, $config, $eventManager);
    }

    public function & __get($name)
    {
        $this->initializer2fade && ($this->initializer2fade->__invoke($valueHolder19135, $this, '__get', ['name' => $name], $this->initializer2fade) || 1) && $this->valueHolder19135 = $valueHolder19135;

        if (isset(self::$publicPropertiesff409[$name])) {
            return $this->valueHolder19135->$name;
        }

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder19135;

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

        $targetObject = $this->valueHolder19135;
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
        $this->initializer2fade && ($this->initializer2fade->__invoke($valueHolder19135, $this, '__set', array('name' => $name, 'value' => $value), $this->initializer2fade) || 1) && $this->valueHolder19135 = $valueHolder19135;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder19135;

            $targetObject->$name = $value;

            return $targetObject->$name;
        }

        $targetObject = $this->valueHolder19135;
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
        $this->initializer2fade && ($this->initializer2fade->__invoke($valueHolder19135, $this, '__isset', array('name' => $name), $this->initializer2fade) || 1) && $this->valueHolder19135 = $valueHolder19135;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder19135;

            return isset($targetObject->$name);
        }

        $targetObject = $this->valueHolder19135;
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
        $this->initializer2fade && ($this->initializer2fade->__invoke($valueHolder19135, $this, '__unset', array('name' => $name), $this->initializer2fade) || 1) && $this->valueHolder19135 = $valueHolder19135;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder19135;

            unset($targetObject->$name);

            return;
        }

        $targetObject = $this->valueHolder19135;
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
        $this->initializer2fade && ($this->initializer2fade->__invoke($valueHolder19135, $this, '__clone', array(), $this->initializer2fade) || 1) && $this->valueHolder19135 = $valueHolder19135;

        $this->valueHolder19135 = clone $this->valueHolder19135;
    }

    public function __sleep()
    {
        $this->initializer2fade && ($this->initializer2fade->__invoke($valueHolder19135, $this, '__sleep', array(), $this->initializer2fade) || 1) && $this->valueHolder19135 = $valueHolder19135;

        return array('valueHolder19135');
    }

    public function __wakeup()
    {
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);
    }

    public function setProxyInitializer(\Closure $initializer = null) : void
    {
        $this->initializer2fade = $initializer;
    }

    public function getProxyInitializer() : ?\Closure
    {
        return $this->initializer2fade;
    }

    public function initializeProxy() : bool
    {
        return $this->initializer2fade && ($this->initializer2fade->__invoke($valueHolder19135, $this, 'initializeProxy', array(), $this->initializer2fade) || 1) && $this->valueHolder19135 = $valueHolder19135;
    }

    public function isProxyInitialized() : bool
    {
        return null !== $this->valueHolder19135;
    }

    public function getWrappedValueHolderValue()
    {
        return $this->valueHolder19135;
    }
}

if (!\class_exists('EntityManager_9a5be93', false)) {
    \class_alias(__NAMESPACE__.'\\EntityManager_9a5be93', 'EntityManager_9a5be93', false);
}
