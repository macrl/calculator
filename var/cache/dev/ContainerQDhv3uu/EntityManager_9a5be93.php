<?php

namespace ContainerQDhv3uu;
include_once \dirname(__DIR__, 4).'/vendor/doctrine/persistence/lib/Doctrine/Persistence/ObjectManager.php';
include_once \dirname(__DIR__, 4).'/vendor/doctrine/orm/lib/Doctrine/ORM/EntityManagerInterface.php';
include_once \dirname(__DIR__, 4).'/vendor/doctrine/orm/lib/Doctrine/ORM/EntityManager.php';

class EntityManager_9a5be93 extends \Doctrine\ORM\EntityManager implements \ProxyManager\Proxy\VirtualProxyInterface
{

    /**
     * @var \Doctrine\ORM\EntityManager|null wrapped object, if the proxy is initialized
     */
    private $valueHolderad906 = null;

    /**
     * @var \Closure|null initializer responsible for generating the wrapped object
     */
    private $initializerc6bd3 = null;

    /**
     * @var bool[] map of public properties of the parent class
     */
    private static $publicPropertiesda3e4 = [
        
    ];

    public function getConnection()
    {
        $this->initializerc6bd3 && ($this->initializerc6bd3->__invoke($valueHolderad906, $this, 'getConnection', array(), $this->initializerc6bd3) || 1) && $this->valueHolderad906 = $valueHolderad906;

        return $this->valueHolderad906->getConnection();
    }

    public function getMetadataFactory()
    {
        $this->initializerc6bd3 && ($this->initializerc6bd3->__invoke($valueHolderad906, $this, 'getMetadataFactory', array(), $this->initializerc6bd3) || 1) && $this->valueHolderad906 = $valueHolderad906;

        return $this->valueHolderad906->getMetadataFactory();
    }

    public function getExpressionBuilder()
    {
        $this->initializerc6bd3 && ($this->initializerc6bd3->__invoke($valueHolderad906, $this, 'getExpressionBuilder', array(), $this->initializerc6bd3) || 1) && $this->valueHolderad906 = $valueHolderad906;

        return $this->valueHolderad906->getExpressionBuilder();
    }

    public function beginTransaction()
    {
        $this->initializerc6bd3 && ($this->initializerc6bd3->__invoke($valueHolderad906, $this, 'beginTransaction', array(), $this->initializerc6bd3) || 1) && $this->valueHolderad906 = $valueHolderad906;

        return $this->valueHolderad906->beginTransaction();
    }

    public function getCache()
    {
        $this->initializerc6bd3 && ($this->initializerc6bd3->__invoke($valueHolderad906, $this, 'getCache', array(), $this->initializerc6bd3) || 1) && $this->valueHolderad906 = $valueHolderad906;

        return $this->valueHolderad906->getCache();
    }

    public function transactional($func)
    {
        $this->initializerc6bd3 && ($this->initializerc6bd3->__invoke($valueHolderad906, $this, 'transactional', array('func' => $func), $this->initializerc6bd3) || 1) && $this->valueHolderad906 = $valueHolderad906;

        return $this->valueHolderad906->transactional($func);
    }

    public function commit()
    {
        $this->initializerc6bd3 && ($this->initializerc6bd3->__invoke($valueHolderad906, $this, 'commit', array(), $this->initializerc6bd3) || 1) && $this->valueHolderad906 = $valueHolderad906;

        return $this->valueHolderad906->commit();
    }

    public function rollback()
    {
        $this->initializerc6bd3 && ($this->initializerc6bd3->__invoke($valueHolderad906, $this, 'rollback', array(), $this->initializerc6bd3) || 1) && $this->valueHolderad906 = $valueHolderad906;

        return $this->valueHolderad906->rollback();
    }

    public function getClassMetadata($className)
    {
        $this->initializerc6bd3 && ($this->initializerc6bd3->__invoke($valueHolderad906, $this, 'getClassMetadata', array('className' => $className), $this->initializerc6bd3) || 1) && $this->valueHolderad906 = $valueHolderad906;

        return $this->valueHolderad906->getClassMetadata($className);
    }

    public function createQuery($dql = '')
    {
        $this->initializerc6bd3 && ($this->initializerc6bd3->__invoke($valueHolderad906, $this, 'createQuery', array('dql' => $dql), $this->initializerc6bd3) || 1) && $this->valueHolderad906 = $valueHolderad906;

        return $this->valueHolderad906->createQuery($dql);
    }

    public function createNamedQuery($name)
    {
        $this->initializerc6bd3 && ($this->initializerc6bd3->__invoke($valueHolderad906, $this, 'createNamedQuery', array('name' => $name), $this->initializerc6bd3) || 1) && $this->valueHolderad906 = $valueHolderad906;

        return $this->valueHolderad906->createNamedQuery($name);
    }

    public function createNativeQuery($sql, \Doctrine\ORM\Query\ResultSetMapping $rsm)
    {
        $this->initializerc6bd3 && ($this->initializerc6bd3->__invoke($valueHolderad906, $this, 'createNativeQuery', array('sql' => $sql, 'rsm' => $rsm), $this->initializerc6bd3) || 1) && $this->valueHolderad906 = $valueHolderad906;

        return $this->valueHolderad906->createNativeQuery($sql, $rsm);
    }

    public function createNamedNativeQuery($name)
    {
        $this->initializerc6bd3 && ($this->initializerc6bd3->__invoke($valueHolderad906, $this, 'createNamedNativeQuery', array('name' => $name), $this->initializerc6bd3) || 1) && $this->valueHolderad906 = $valueHolderad906;

        return $this->valueHolderad906->createNamedNativeQuery($name);
    }

    public function createQueryBuilder()
    {
        $this->initializerc6bd3 && ($this->initializerc6bd3->__invoke($valueHolderad906, $this, 'createQueryBuilder', array(), $this->initializerc6bd3) || 1) && $this->valueHolderad906 = $valueHolderad906;

        return $this->valueHolderad906->createQueryBuilder();
    }

    public function flush($entity = null)
    {
        $this->initializerc6bd3 && ($this->initializerc6bd3->__invoke($valueHolderad906, $this, 'flush', array('entity' => $entity), $this->initializerc6bd3) || 1) && $this->valueHolderad906 = $valueHolderad906;

        return $this->valueHolderad906->flush($entity);
    }

    public function find($className, $id, $lockMode = null, $lockVersion = null)
    {
        $this->initializerc6bd3 && ($this->initializerc6bd3->__invoke($valueHolderad906, $this, 'find', array('className' => $className, 'id' => $id, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializerc6bd3) || 1) && $this->valueHolderad906 = $valueHolderad906;

        return $this->valueHolderad906->find($className, $id, $lockMode, $lockVersion);
    }

    public function getReference($entityName, $id)
    {
        $this->initializerc6bd3 && ($this->initializerc6bd3->__invoke($valueHolderad906, $this, 'getReference', array('entityName' => $entityName, 'id' => $id), $this->initializerc6bd3) || 1) && $this->valueHolderad906 = $valueHolderad906;

        return $this->valueHolderad906->getReference($entityName, $id);
    }

    public function getPartialReference($entityName, $identifier)
    {
        $this->initializerc6bd3 && ($this->initializerc6bd3->__invoke($valueHolderad906, $this, 'getPartialReference', array('entityName' => $entityName, 'identifier' => $identifier), $this->initializerc6bd3) || 1) && $this->valueHolderad906 = $valueHolderad906;

        return $this->valueHolderad906->getPartialReference($entityName, $identifier);
    }

    public function clear($entityName = null)
    {
        $this->initializerc6bd3 && ($this->initializerc6bd3->__invoke($valueHolderad906, $this, 'clear', array('entityName' => $entityName), $this->initializerc6bd3) || 1) && $this->valueHolderad906 = $valueHolderad906;

        return $this->valueHolderad906->clear($entityName);
    }

    public function close()
    {
        $this->initializerc6bd3 && ($this->initializerc6bd3->__invoke($valueHolderad906, $this, 'close', array(), $this->initializerc6bd3) || 1) && $this->valueHolderad906 = $valueHolderad906;

        return $this->valueHolderad906->close();
    }

    public function persist($entity)
    {
        $this->initializerc6bd3 && ($this->initializerc6bd3->__invoke($valueHolderad906, $this, 'persist', array('entity' => $entity), $this->initializerc6bd3) || 1) && $this->valueHolderad906 = $valueHolderad906;

        return $this->valueHolderad906->persist($entity);
    }

    public function remove($entity)
    {
        $this->initializerc6bd3 && ($this->initializerc6bd3->__invoke($valueHolderad906, $this, 'remove', array('entity' => $entity), $this->initializerc6bd3) || 1) && $this->valueHolderad906 = $valueHolderad906;

        return $this->valueHolderad906->remove($entity);
    }

    public function refresh($entity)
    {
        $this->initializerc6bd3 && ($this->initializerc6bd3->__invoke($valueHolderad906, $this, 'refresh', array('entity' => $entity), $this->initializerc6bd3) || 1) && $this->valueHolderad906 = $valueHolderad906;

        return $this->valueHolderad906->refresh($entity);
    }

    public function detach($entity)
    {
        $this->initializerc6bd3 && ($this->initializerc6bd3->__invoke($valueHolderad906, $this, 'detach', array('entity' => $entity), $this->initializerc6bd3) || 1) && $this->valueHolderad906 = $valueHolderad906;

        return $this->valueHolderad906->detach($entity);
    }

    public function merge($entity)
    {
        $this->initializerc6bd3 && ($this->initializerc6bd3->__invoke($valueHolderad906, $this, 'merge', array('entity' => $entity), $this->initializerc6bd3) || 1) && $this->valueHolderad906 = $valueHolderad906;

        return $this->valueHolderad906->merge($entity);
    }

    public function copy($entity, $deep = false)
    {
        $this->initializerc6bd3 && ($this->initializerc6bd3->__invoke($valueHolderad906, $this, 'copy', array('entity' => $entity, 'deep' => $deep), $this->initializerc6bd3) || 1) && $this->valueHolderad906 = $valueHolderad906;

        return $this->valueHolderad906->copy($entity, $deep);
    }

    public function lock($entity, $lockMode, $lockVersion = null)
    {
        $this->initializerc6bd3 && ($this->initializerc6bd3->__invoke($valueHolderad906, $this, 'lock', array('entity' => $entity, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializerc6bd3) || 1) && $this->valueHolderad906 = $valueHolderad906;

        return $this->valueHolderad906->lock($entity, $lockMode, $lockVersion);
    }

    public function getRepository($entityName)
    {
        $this->initializerc6bd3 && ($this->initializerc6bd3->__invoke($valueHolderad906, $this, 'getRepository', array('entityName' => $entityName), $this->initializerc6bd3) || 1) && $this->valueHolderad906 = $valueHolderad906;

        return $this->valueHolderad906->getRepository($entityName);
    }

    public function contains($entity)
    {
        $this->initializerc6bd3 && ($this->initializerc6bd3->__invoke($valueHolderad906, $this, 'contains', array('entity' => $entity), $this->initializerc6bd3) || 1) && $this->valueHolderad906 = $valueHolderad906;

        return $this->valueHolderad906->contains($entity);
    }

    public function getEventManager()
    {
        $this->initializerc6bd3 && ($this->initializerc6bd3->__invoke($valueHolderad906, $this, 'getEventManager', array(), $this->initializerc6bd3) || 1) && $this->valueHolderad906 = $valueHolderad906;

        return $this->valueHolderad906->getEventManager();
    }

    public function getConfiguration()
    {
        $this->initializerc6bd3 && ($this->initializerc6bd3->__invoke($valueHolderad906, $this, 'getConfiguration', array(), $this->initializerc6bd3) || 1) && $this->valueHolderad906 = $valueHolderad906;

        return $this->valueHolderad906->getConfiguration();
    }

    public function isOpen()
    {
        $this->initializerc6bd3 && ($this->initializerc6bd3->__invoke($valueHolderad906, $this, 'isOpen', array(), $this->initializerc6bd3) || 1) && $this->valueHolderad906 = $valueHolderad906;

        return $this->valueHolderad906->isOpen();
    }

    public function getUnitOfWork()
    {
        $this->initializerc6bd3 && ($this->initializerc6bd3->__invoke($valueHolderad906, $this, 'getUnitOfWork', array(), $this->initializerc6bd3) || 1) && $this->valueHolderad906 = $valueHolderad906;

        return $this->valueHolderad906->getUnitOfWork();
    }

    public function getHydrator($hydrationMode)
    {
        $this->initializerc6bd3 && ($this->initializerc6bd3->__invoke($valueHolderad906, $this, 'getHydrator', array('hydrationMode' => $hydrationMode), $this->initializerc6bd3) || 1) && $this->valueHolderad906 = $valueHolderad906;

        return $this->valueHolderad906->getHydrator($hydrationMode);
    }

    public function newHydrator($hydrationMode)
    {
        $this->initializerc6bd3 && ($this->initializerc6bd3->__invoke($valueHolderad906, $this, 'newHydrator', array('hydrationMode' => $hydrationMode), $this->initializerc6bd3) || 1) && $this->valueHolderad906 = $valueHolderad906;

        return $this->valueHolderad906->newHydrator($hydrationMode);
    }

    public function getProxyFactory()
    {
        $this->initializerc6bd3 && ($this->initializerc6bd3->__invoke($valueHolderad906, $this, 'getProxyFactory', array(), $this->initializerc6bd3) || 1) && $this->valueHolderad906 = $valueHolderad906;

        return $this->valueHolderad906->getProxyFactory();
    }

    public function initializeObject($obj)
    {
        $this->initializerc6bd3 && ($this->initializerc6bd3->__invoke($valueHolderad906, $this, 'initializeObject', array('obj' => $obj), $this->initializerc6bd3) || 1) && $this->valueHolderad906 = $valueHolderad906;

        return $this->valueHolderad906->initializeObject($obj);
    }

    public function getFilters()
    {
        $this->initializerc6bd3 && ($this->initializerc6bd3->__invoke($valueHolderad906, $this, 'getFilters', array(), $this->initializerc6bd3) || 1) && $this->valueHolderad906 = $valueHolderad906;

        return $this->valueHolderad906->getFilters();
    }

    public function isFiltersStateClean()
    {
        $this->initializerc6bd3 && ($this->initializerc6bd3->__invoke($valueHolderad906, $this, 'isFiltersStateClean', array(), $this->initializerc6bd3) || 1) && $this->valueHolderad906 = $valueHolderad906;

        return $this->valueHolderad906->isFiltersStateClean();
    }

    public function hasFilters()
    {
        $this->initializerc6bd3 && ($this->initializerc6bd3->__invoke($valueHolderad906, $this, 'hasFilters', array(), $this->initializerc6bd3) || 1) && $this->valueHolderad906 = $valueHolderad906;

        return $this->valueHolderad906->hasFilters();
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

        $instance->initializerc6bd3 = $initializer;

        return $instance;
    }

    protected function __construct(\Doctrine\DBAL\Connection $conn, \Doctrine\ORM\Configuration $config, \Doctrine\Common\EventManager $eventManager)
    {
        static $reflection;

        if (! $this->valueHolderad906) {
            $reflection = $reflection ?? new \ReflectionClass('Doctrine\\ORM\\EntityManager');
            $this->valueHolderad906 = $reflection->newInstanceWithoutConstructor();
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);

        }

        $this->valueHolderad906->__construct($conn, $config, $eventManager);
    }

    public function & __get($name)
    {
        $this->initializerc6bd3 && ($this->initializerc6bd3->__invoke($valueHolderad906, $this, '__get', ['name' => $name], $this->initializerc6bd3) || 1) && $this->valueHolderad906 = $valueHolderad906;

        if (isset(self::$publicPropertiesda3e4[$name])) {
            return $this->valueHolderad906->$name;
        }

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolderad906;

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

        $targetObject = $this->valueHolderad906;
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
        $this->initializerc6bd3 && ($this->initializerc6bd3->__invoke($valueHolderad906, $this, '__set', array('name' => $name, 'value' => $value), $this->initializerc6bd3) || 1) && $this->valueHolderad906 = $valueHolderad906;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolderad906;

            $targetObject->$name = $value;

            return $targetObject->$name;
        }

        $targetObject = $this->valueHolderad906;
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
        $this->initializerc6bd3 && ($this->initializerc6bd3->__invoke($valueHolderad906, $this, '__isset', array('name' => $name), $this->initializerc6bd3) || 1) && $this->valueHolderad906 = $valueHolderad906;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolderad906;

            return isset($targetObject->$name);
        }

        $targetObject = $this->valueHolderad906;
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
        $this->initializerc6bd3 && ($this->initializerc6bd3->__invoke($valueHolderad906, $this, '__unset', array('name' => $name), $this->initializerc6bd3) || 1) && $this->valueHolderad906 = $valueHolderad906;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolderad906;

            unset($targetObject->$name);

            return;
        }

        $targetObject = $this->valueHolderad906;
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
        $this->initializerc6bd3 && ($this->initializerc6bd3->__invoke($valueHolderad906, $this, '__clone', array(), $this->initializerc6bd3) || 1) && $this->valueHolderad906 = $valueHolderad906;

        $this->valueHolderad906 = clone $this->valueHolderad906;
    }

    public function __sleep()
    {
        $this->initializerc6bd3 && ($this->initializerc6bd3->__invoke($valueHolderad906, $this, '__sleep', array(), $this->initializerc6bd3) || 1) && $this->valueHolderad906 = $valueHolderad906;

        return array('valueHolderad906');
    }

    public function __wakeup()
    {
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);
    }

    public function setProxyInitializer(\Closure $initializer = null) : void
    {
        $this->initializerc6bd3 = $initializer;
    }

    public function getProxyInitializer() : ?\Closure
    {
        return $this->initializerc6bd3;
    }

    public function initializeProxy() : bool
    {
        return $this->initializerc6bd3 && ($this->initializerc6bd3->__invoke($valueHolderad906, $this, 'initializeProxy', array(), $this->initializerc6bd3) || 1) && $this->valueHolderad906 = $valueHolderad906;
    }

    public function isProxyInitialized() : bool
    {
        return null !== $this->valueHolderad906;
    }

    public function getWrappedValueHolderValue()
    {
        return $this->valueHolderad906;
    }


}

if (!\class_exists('EntityManager_9a5be93', false)) {
    \class_alias(__NAMESPACE__.'\\EntityManager_9a5be93', 'EntityManager_9a5be93', false);
}
