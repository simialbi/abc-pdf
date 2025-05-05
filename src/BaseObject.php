<?php

namespace ABCPdf;

class BaseObject
{
    private mixed $_object;

    private array $_wrappedObjects = [];

    /**
     * Constructor for initializing the object or creating a new instance of \DOTNET.
     *
     * @param mixed $objectOrAssemblyName An object or the assembly name string to initialize. Defaults to an empty
     *     string.
     * @param string|null $datatype_name The name of the data type, if creating a new \DOTNET instance. Defaults to
     *     null.
     * @param string|null $codepage The codepage, if required when creating a new \DOTNET instance. Defaults to null.
     *
     * @return void
     */
    public function __construct(mixed $objectOrAssemblyName = '', ?string $datatype_name = null, ?string $codepage = null)
    {
        if (!is_string($objectOrAssemblyName)) {
            $this->_object = $objectOrAssemblyName;
        } else {
            $this->_object = new \DOTNET($objectOrAssemblyName, $datatype_name, $codepage);
        }
    }

    /**
     * Magic getter to retrieve the value of a property.
     *
     * @param string $name The name of the property to retrieve.
     *
     * @return mixed The value of the requested property. Returns the wrapped object value if it exists, or the value
     *     of the property from the primary object.
     */
    public function __get(string $name): mixed
    {
        if (isset($this->_wrappedObjects[$name])) {
            return $this->_wrappedObjects[$name];
        }

        return $this->_object->$name;
    }

    /**
     * Magic method to set a property value on the wrapped object or directly on the main object.
     *
     * @param string $name The name of the property to set.
     * @param mixed $value The value to assign to the property. Must be an instance of BaseObject when updating a
     *     wrapped object.
     *
     * @return void
     *
     * @throws \Exception If the value is not an instance of BaseObject when updating a wrapped object.
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

    /**
     * Magic method to handle dynamic method calls on the object.
     *
     * @param string $name The name of the method being called.
     * @param array $arguments An array of arguments passed to the method.
     *
     * @return mixed The result of the dynamically called method.
     */
    public function __call(string $name, array $arguments): mixed
    {
        foreach ($arguments as $key => $argument) {
            if ($argument instanceof BaseObject) {
                $arguments[$key] = $argument->getObject();
            }
        }
        return $this->getObject()->$name(...$arguments);
    }

    /**
     * Retrieves the stored object.
     *
     * @return mixed The object that has been stored.
     */
    public function getObject(): mixed
    {
        return $this->_object;
    }

    /**
     * Registers a wrapped object with the specified name.
     *
     * @param string $name The name to associate with the wrapped object.
     * @param BaseObject $object The object to be registered.
     *
     * @return void
     */
    protected function registerWrappedObject(string $name, BaseObject $object): void
    {
        $this->_wrappedObjects[$name] = $object;
    }
}
