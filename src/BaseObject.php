<?php

namespace ABCPdf;

abstract class BaseObject
{
    private \DOTNET $_object;

    private array $_wrappedObjects = [];

    /**
     * @param string|\DOTNET $objectOrAssemblyName
     * @param string|null $datatype_name
     * @param string|null $codepage
     */
    public function __construct(string|\DOTNET $objectOrAssemblyName = '', ?string $datatype_name = null, ?string $codepage = null)
    {
        if ($objectOrAssemblyName instanceof BaseObject) {
            $this->_object = $objectOrAssemblyName;
        } else {
            $this->_object = new \DOTNET($objectOrAssemblyName, $datatype_name, $codepage);
        }
    }

    public function __get(string $name): mixed
    {
        if (isset($this->_wrappedObjects[$name])) {
            return $this->_wrappedObjects[$name];
        }

        return $this->_object->$name;
    }

    /**
     * @throws \Exception
     */
    public function __set(string $name, mixed $value): void
    {
        if (isset($this->_wrappedObjects[$name])) {
            if (!($value instanceof BaseObject)) {
                if ($value instanceof \DOTNET && class_exists("\\ABCPdf\\$name")) {
                    $value = new $name($value);
                } else {
                    throw new \Exception('Value must be an instance of BaseObject');
                }
            }

            $this->registerWrappedObject($name, $value);

            return;
        }

        $this->_object->$name = $value;
    }

    public function __call(string $name, array $arguments): mixed
    {
        return $this->getObject()->$name(...$arguments);
    }

    public function getObject(): \DOTNET
    {
        return $this->_object;
    }

    protected function registerWrappedObject(string $name, BaseObject $object): void
    {
        $this->_wrappedObjects[$name] = $object;
    }
}
