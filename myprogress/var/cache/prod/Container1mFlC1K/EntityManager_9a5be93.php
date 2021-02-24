<?php

namespace Container1mFlC1K;

class EntityManager_9a5be93 extends \Doctrine\ORM\EntityManager implements \ProxyManager\Proxy\VirtualProxyInterface
{
    private $valueHolderbc71a = null;
    private $initializer7dfd5 = null;
    private static $publicPropertiesfcd43 = [
        
    ];
    public function getConnection()
    {
        $this->initializer7dfd5 && ($this->initializer7dfd5->__invoke($valueHolderbc71a, $this, 'getConnection', array(), $this->initializer7dfd5) || 1) && $this->valueHolderbc71a = $valueHolderbc71a;
        return $this->valueHolderbc71a->getConnection();
    }
    public function getMetadataFactory()
    {
        $this->initializer7dfd5 && ($this->initializer7dfd5->__invoke($valueHolderbc71a, $this, 'getMetadataFactory', array(), $this->initializer7dfd5) || 1) && $this->valueHolderbc71a = $valueHolderbc71a;
        return $this->valueHolderbc71a->getMetadataFactory();
    }
    public function getExpressionBuilder()
    {
        $this->initializer7dfd5 && ($this->initializer7dfd5->__invoke($valueHolderbc71a, $this, 'getExpressionBuilder', array(), $this->initializer7dfd5) || 1) && $this->valueHolderbc71a = $valueHolderbc71a;
        return $this->valueHolderbc71a->getExpressionBuilder();
    }
    public function beginTransaction()
    {
        $this->initializer7dfd5 && ($this->initializer7dfd5->__invoke($valueHolderbc71a, $this, 'beginTransaction', array(), $this->initializer7dfd5) || 1) && $this->valueHolderbc71a = $valueHolderbc71a;
        return $this->valueHolderbc71a->beginTransaction();
    }
    public function getCache()
    {
        $this->initializer7dfd5 && ($this->initializer7dfd5->__invoke($valueHolderbc71a, $this, 'getCache', array(), $this->initializer7dfd5) || 1) && $this->valueHolderbc71a = $valueHolderbc71a;
        return $this->valueHolderbc71a->getCache();
    }
    public function transactional($func)
    {
        $this->initializer7dfd5 && ($this->initializer7dfd5->__invoke($valueHolderbc71a, $this, 'transactional', array('func' => $func), $this->initializer7dfd5) || 1) && $this->valueHolderbc71a = $valueHolderbc71a;
        return $this->valueHolderbc71a->transactional($func);
    }
    public function commit()
    {
        $this->initializer7dfd5 && ($this->initializer7dfd5->__invoke($valueHolderbc71a, $this, 'commit', array(), $this->initializer7dfd5) || 1) && $this->valueHolderbc71a = $valueHolderbc71a;
        return $this->valueHolderbc71a->commit();
    }
    public function rollback()
    {
        $this->initializer7dfd5 && ($this->initializer7dfd5->__invoke($valueHolderbc71a, $this, 'rollback', array(), $this->initializer7dfd5) || 1) && $this->valueHolderbc71a = $valueHolderbc71a;
        return $this->valueHolderbc71a->rollback();
    }
    public function getClassMetadata($className)
    {
        $this->initializer7dfd5 && ($this->initializer7dfd5->__invoke($valueHolderbc71a, $this, 'getClassMetadata', array('className' => $className), $this->initializer7dfd5) || 1) && $this->valueHolderbc71a = $valueHolderbc71a;
        return $this->valueHolderbc71a->getClassMetadata($className);
    }
    public function createQuery($dql = '')
    {
        $this->initializer7dfd5 && ($this->initializer7dfd5->__invoke($valueHolderbc71a, $this, 'createQuery', array('dql' => $dql), $this->initializer7dfd5) || 1) && $this->valueHolderbc71a = $valueHolderbc71a;
        return $this->valueHolderbc71a->createQuery($dql);
    }
    public function createNamedQuery($name)
    {
        $this->initializer7dfd5 && ($this->initializer7dfd5->__invoke($valueHolderbc71a, $this, 'createNamedQuery', array('name' => $name), $this->initializer7dfd5) || 1) && $this->valueHolderbc71a = $valueHolderbc71a;
        return $this->valueHolderbc71a->createNamedQuery($name);
    }
    public function createNativeQuery($sql, \Doctrine\ORM\Query\ResultSetMapping $rsm)
    {
        $this->initializer7dfd5 && ($this->initializer7dfd5->__invoke($valueHolderbc71a, $this, 'createNativeQuery', array('sql' => $sql, 'rsm' => $rsm), $this->initializer7dfd5) || 1) && $this->valueHolderbc71a = $valueHolderbc71a;
        return $this->valueHolderbc71a->createNativeQuery($sql, $rsm);
    }
    public function createNamedNativeQuery($name)
    {
        $this->initializer7dfd5 && ($this->initializer7dfd5->__invoke($valueHolderbc71a, $this, 'createNamedNativeQuery', array('name' => $name), $this->initializer7dfd5) || 1) && $this->valueHolderbc71a = $valueHolderbc71a;
        return $this->valueHolderbc71a->createNamedNativeQuery($name);
    }
    public function createQueryBuilder()
    {
        $this->initializer7dfd5 && ($this->initializer7dfd5->__invoke($valueHolderbc71a, $this, 'createQueryBuilder', array(), $this->initializer7dfd5) || 1) && $this->valueHolderbc71a = $valueHolderbc71a;
        return $this->valueHolderbc71a->createQueryBuilder();
    }
    public function flush($entity = null)
    {
        $this->initializer7dfd5 && ($this->initializer7dfd5->__invoke($valueHolderbc71a, $this, 'flush', array('entity' => $entity), $this->initializer7dfd5) || 1) && $this->valueHolderbc71a = $valueHolderbc71a;
        return $this->valueHolderbc71a->flush($entity);
    }
    public function find($className, $id, $lockMode = null, $lockVersion = null)
    {
        $this->initializer7dfd5 && ($this->initializer7dfd5->__invoke($valueHolderbc71a, $this, 'find', array('className' => $className, 'id' => $id, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializer7dfd5) || 1) && $this->valueHolderbc71a = $valueHolderbc71a;
        return $this->valueHolderbc71a->find($className, $id, $lockMode, $lockVersion);
    }
    public function getReference($entityName, $id)
    {
        $this->initializer7dfd5 && ($this->initializer7dfd5->__invoke($valueHolderbc71a, $this, 'getReference', array('entityName' => $entityName, 'id' => $id), $this->initializer7dfd5) || 1) && $this->valueHolderbc71a = $valueHolderbc71a;
        return $this->valueHolderbc71a->getReference($entityName, $id);
    }
    public function getPartialReference($entityName, $identifier)
    {
        $this->initializer7dfd5 && ($this->initializer7dfd5->__invoke($valueHolderbc71a, $this, 'getPartialReference', array('entityName' => $entityName, 'identifier' => $identifier), $this->initializer7dfd5) || 1) && $this->valueHolderbc71a = $valueHolderbc71a;
        return $this->valueHolderbc71a->getPartialReference($entityName, $identifier);
    }
    public function clear($entityName = null)
    {
        $this->initializer7dfd5 && ($this->initializer7dfd5->__invoke($valueHolderbc71a, $this, 'clear', array('entityName' => $entityName), $this->initializer7dfd5) || 1) && $this->valueHolderbc71a = $valueHolderbc71a;
        return $this->valueHolderbc71a->clear($entityName);
    }
    public function close()
    {
        $this->initializer7dfd5 && ($this->initializer7dfd5->__invoke($valueHolderbc71a, $this, 'close', array(), $this->initializer7dfd5) || 1) && $this->valueHolderbc71a = $valueHolderbc71a;
        return $this->valueHolderbc71a->close();
    }
    public function persist($entity)
    {
        $this->initializer7dfd5 && ($this->initializer7dfd5->__invoke($valueHolderbc71a, $this, 'persist', array('entity' => $entity), $this->initializer7dfd5) || 1) && $this->valueHolderbc71a = $valueHolderbc71a;
        return $this->valueHolderbc71a->persist($entity);
    }
    public function remove($entity)
    {
        $this->initializer7dfd5 && ($this->initializer7dfd5->__invoke($valueHolderbc71a, $this, 'remove', array('entity' => $entity), $this->initializer7dfd5) || 1) && $this->valueHolderbc71a = $valueHolderbc71a;
        return $this->valueHolderbc71a->remove($entity);
    }
    public function refresh($entity)
    {
        $this->initializer7dfd5 && ($this->initializer7dfd5->__invoke($valueHolderbc71a, $this, 'refresh', array('entity' => $entity), $this->initializer7dfd5) || 1) && $this->valueHolderbc71a = $valueHolderbc71a;
        return $this->valueHolderbc71a->refresh($entity);
    }
    public function detach($entity)
    {
        $this->initializer7dfd5 && ($this->initializer7dfd5->__invoke($valueHolderbc71a, $this, 'detach', array('entity' => $entity), $this->initializer7dfd5) || 1) && $this->valueHolderbc71a = $valueHolderbc71a;
        return $this->valueHolderbc71a->detach($entity);
    }
    public function merge($entity)
    {
        $this->initializer7dfd5 && ($this->initializer7dfd5->__invoke($valueHolderbc71a, $this, 'merge', array('entity' => $entity), $this->initializer7dfd5) || 1) && $this->valueHolderbc71a = $valueHolderbc71a;
        return $this->valueHolderbc71a->merge($entity);
    }
    public function copy($entity, $deep = false)
    {
        $this->initializer7dfd5 && ($this->initializer7dfd5->__invoke($valueHolderbc71a, $this, 'copy', array('entity' => $entity, 'deep' => $deep), $this->initializer7dfd5) || 1) && $this->valueHolderbc71a = $valueHolderbc71a;
        return $this->valueHolderbc71a->copy($entity, $deep);
    }
    public function lock($entity, $lockMode, $lockVersion = null)
    {
        $this->initializer7dfd5 && ($this->initializer7dfd5->__invoke($valueHolderbc71a, $this, 'lock', array('entity' => $entity, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializer7dfd5) || 1) && $this->valueHolderbc71a = $valueHolderbc71a;
        return $this->valueHolderbc71a->lock($entity, $lockMode, $lockVersion);
    }
    public function getRepository($entityName)
    {
        $this->initializer7dfd5 && ($this->initializer7dfd5->__invoke($valueHolderbc71a, $this, 'getRepository', array('entityName' => $entityName), $this->initializer7dfd5) || 1) && $this->valueHolderbc71a = $valueHolderbc71a;
        return $this->valueHolderbc71a->getRepository($entityName);
    }
    public function contains($entity)
    {
        $this->initializer7dfd5 && ($this->initializer7dfd5->__invoke($valueHolderbc71a, $this, 'contains', array('entity' => $entity), $this->initializer7dfd5) || 1) && $this->valueHolderbc71a = $valueHolderbc71a;
        return $this->valueHolderbc71a->contains($entity);
    }
    public function getEventManager()
    {
        $this->initializer7dfd5 && ($this->initializer7dfd5->__invoke($valueHolderbc71a, $this, 'getEventManager', array(), $this->initializer7dfd5) || 1) && $this->valueHolderbc71a = $valueHolderbc71a;
        return $this->valueHolderbc71a->getEventManager();
    }
    public function getConfiguration()
    {
        $this->initializer7dfd5 && ($this->initializer7dfd5->__invoke($valueHolderbc71a, $this, 'getConfiguration', array(), $this->initializer7dfd5) || 1) && $this->valueHolderbc71a = $valueHolderbc71a;
        return $this->valueHolderbc71a->getConfiguration();
    }
    public function isOpen()
    {
        $this->initializer7dfd5 && ($this->initializer7dfd5->__invoke($valueHolderbc71a, $this, 'isOpen', array(), $this->initializer7dfd5) || 1) && $this->valueHolderbc71a = $valueHolderbc71a;
        return $this->valueHolderbc71a->isOpen();
    }
    public function getUnitOfWork()
    {
        $this->initializer7dfd5 && ($this->initializer7dfd5->__invoke($valueHolderbc71a, $this, 'getUnitOfWork', array(), $this->initializer7dfd5) || 1) && $this->valueHolderbc71a = $valueHolderbc71a;
        return $this->valueHolderbc71a->getUnitOfWork();
    }
    public function getHydrator($hydrationMode)
    {
        $this->initializer7dfd5 && ($this->initializer7dfd5->__invoke($valueHolderbc71a, $this, 'getHydrator', array('hydrationMode' => $hydrationMode), $this->initializer7dfd5) || 1) && $this->valueHolderbc71a = $valueHolderbc71a;
        return $this->valueHolderbc71a->getHydrator($hydrationMode);
    }
    public function newHydrator($hydrationMode)
    {
        $this->initializer7dfd5 && ($this->initializer7dfd5->__invoke($valueHolderbc71a, $this, 'newHydrator', array('hydrationMode' => $hydrationMode), $this->initializer7dfd5) || 1) && $this->valueHolderbc71a = $valueHolderbc71a;
        return $this->valueHolderbc71a->newHydrator($hydrationMode);
    }
    public function getProxyFactory()
    {
        $this->initializer7dfd5 && ($this->initializer7dfd5->__invoke($valueHolderbc71a, $this, 'getProxyFactory', array(), $this->initializer7dfd5) || 1) && $this->valueHolderbc71a = $valueHolderbc71a;
        return $this->valueHolderbc71a->getProxyFactory();
    }
    public function initializeObject($obj)
    {
        $this->initializer7dfd5 && ($this->initializer7dfd5->__invoke($valueHolderbc71a, $this, 'initializeObject', array('obj' => $obj), $this->initializer7dfd5) || 1) && $this->valueHolderbc71a = $valueHolderbc71a;
        return $this->valueHolderbc71a->initializeObject($obj);
    }
    public function getFilters()
    {
        $this->initializer7dfd5 && ($this->initializer7dfd5->__invoke($valueHolderbc71a, $this, 'getFilters', array(), $this->initializer7dfd5) || 1) && $this->valueHolderbc71a = $valueHolderbc71a;
        return $this->valueHolderbc71a->getFilters();
    }
    public function isFiltersStateClean()
    {
        $this->initializer7dfd5 && ($this->initializer7dfd5->__invoke($valueHolderbc71a, $this, 'isFiltersStateClean', array(), $this->initializer7dfd5) || 1) && $this->valueHolderbc71a = $valueHolderbc71a;
        return $this->valueHolderbc71a->isFiltersStateClean();
    }
    public function hasFilters()
    {
        $this->initializer7dfd5 && ($this->initializer7dfd5->__invoke($valueHolderbc71a, $this, 'hasFilters', array(), $this->initializer7dfd5) || 1) && $this->valueHolderbc71a = $valueHolderbc71a;
        return $this->valueHolderbc71a->hasFilters();
    }
    public static function staticProxyConstructor($initializer)
    {
        static $reflection;
        $reflection = $reflection ?? new \ReflectionClass(__CLASS__);
        $instance   = $reflection->newInstanceWithoutConstructor();
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $instance, 'Doctrine\\ORM\\EntityManager')->__invoke($instance);
        $instance->initializer7dfd5 = $initializer;
        return $instance;
    }
    protected function __construct(\Doctrine\DBAL\Connection $conn, \Doctrine\ORM\Configuration $config, \Doctrine\Common\EventManager $eventManager)
    {
        static $reflection;
        if (! $this->valueHolderbc71a) {
            $reflection = $reflection ?? new \ReflectionClass('Doctrine\\ORM\\EntityManager');
            $this->valueHolderbc71a = $reflection->newInstanceWithoutConstructor();
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);
        }
        $this->valueHolderbc71a->__construct($conn, $config, $eventManager);
    }
    public function & __get($name)
    {
        $this->initializer7dfd5 && ($this->initializer7dfd5->__invoke($valueHolderbc71a, $this, '__get', ['name' => $name], $this->initializer7dfd5) || 1) && $this->valueHolderbc71a = $valueHolderbc71a;
        if (isset(self::$publicPropertiesfcd43[$name])) {
            return $this->valueHolderbc71a->$name;
        }
        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');
        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolderbc71a;
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
        $targetObject = $this->valueHolderbc71a;
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
        $this->initializer7dfd5 && ($this->initializer7dfd5->__invoke($valueHolderbc71a, $this, '__set', array('name' => $name, 'value' => $value), $this->initializer7dfd5) || 1) && $this->valueHolderbc71a = $valueHolderbc71a;
        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');
        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolderbc71a;
            $targetObject->$name = $value;
            return $targetObject->$name;
        }
        $targetObject = $this->valueHolderbc71a;
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
        $this->initializer7dfd5 && ($this->initializer7dfd5->__invoke($valueHolderbc71a, $this, '__isset', array('name' => $name), $this->initializer7dfd5) || 1) && $this->valueHolderbc71a = $valueHolderbc71a;
        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');
        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolderbc71a;
            return isset($targetObject->$name);
        }
        $targetObject = $this->valueHolderbc71a;
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
        $this->initializer7dfd5 && ($this->initializer7dfd5->__invoke($valueHolderbc71a, $this, '__unset', array('name' => $name), $this->initializer7dfd5) || 1) && $this->valueHolderbc71a = $valueHolderbc71a;
        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');
        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolderbc71a;
            unset($targetObject->$name);
            return;
        }
        $targetObject = $this->valueHolderbc71a;
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
        $this->initializer7dfd5 && ($this->initializer7dfd5->__invoke($valueHolderbc71a, $this, '__clone', array(), $this->initializer7dfd5) || 1) && $this->valueHolderbc71a = $valueHolderbc71a;
        $this->valueHolderbc71a = clone $this->valueHolderbc71a;
    }
    public function __sleep()
    {
        $this->initializer7dfd5 && ($this->initializer7dfd5->__invoke($valueHolderbc71a, $this, '__sleep', array(), $this->initializer7dfd5) || 1) && $this->valueHolderbc71a = $valueHolderbc71a;
        return array('valueHolderbc71a');
    }
    public function __wakeup()
    {
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);
    }
    public function setProxyInitializer(\Closure $initializer = null) : void
    {
        $this->initializer7dfd5 = $initializer;
    }
    public function getProxyInitializer() : ?\Closure
    {
        return $this->initializer7dfd5;
    }
    public function initializeProxy() : bool
    {
        return $this->initializer7dfd5 && ($this->initializer7dfd5->__invoke($valueHolderbc71a, $this, 'initializeProxy', array(), $this->initializer7dfd5) || 1) && $this->valueHolderbc71a = $valueHolderbc71a;
    }
    public function isProxyInitialized() : bool
    {
        return null !== $this->valueHolderbc71a;
    }
    public function getWrappedValueHolderValue()
    {
        return $this->valueHolderbc71a;
    }
}

if (!\class_exists('EntityManager_9a5be93', false)) {
    \class_alias(__NAMESPACE__.'\\EntityManager_9a5be93', 'EntityManager_9a5be93', false);
}
