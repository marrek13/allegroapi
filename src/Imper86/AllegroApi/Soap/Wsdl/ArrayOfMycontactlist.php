<?php

namespace Imper86\AllegroApi\Soap\Wsdl;

class ArrayOfMycontactlist implements \ArrayAccess, \Iterator, \Countable
{

    /**
     * @var MyContactList[] $item
     */
    protected $item = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return MyContactList[]
     */
    public function getItem()
    {
      return $this->item;
    }

    /**
     * @param MyContactList[] $item
     * @return \Imper86\AllegroApi\Soap\Wsdl\ArrayOfMycontactlist
     */
    public function setItem(array $item = null)
    {
      $this->item = $item;
      return $this;
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset An offset to check for
     * @return boolean true on success or false on failure
     */
    public function offsetExists($offset)
    {
      return isset($this->item[$offset]);
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to retrieve
     * @return MyContactList
     */
    public function offsetGet($offset)
    {
      return $this->item[$offset];
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to assign the value to
     * @param MyContactList $value The value to set
     * @return void
     */
    public function offsetSet($offset, $value)
    {
      if (!isset($offset)) {
        $this->item[] = $value;
      } else {
        $this->item[$offset] = $value;
      }
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to unset
     * @return void
     */
    public function offsetUnset($offset)
    {
      unset($this->item[$offset]);
    }

    /**
     * Iterator implementation
     *
     * @return MyContactList Return the current element
     */
    public function current()
    {
      return current($this->item);
    }

    /**
     * Iterator implementation
     * Move forward to next element
     *
     * @return void
     */
    public function next()
    {
      next($this->item);
    }

    /**
     * Iterator implementation
     *
     * @return string|null Return the key of the current element or null
     */
    public function key()
    {
      return key($this->item);
    }

    /**
     * Iterator implementation
     *
     * @return boolean Return the validity of the current position
     */
    public function valid()
    {
      return $this->key() !== null;
    }

    /**
     * Iterator implementation
     * Rewind the Iterator to the first element
     *
     * @return void
     */
    public function rewind()
    {
      reset($this->item);
    }

    /**
     * Countable implementation
     *
     * @return MyContactList Return count of elements
     */
    public function count()
    {
      return count($this->item);
    }

}
