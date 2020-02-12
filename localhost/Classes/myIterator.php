<?php
/**
 * Created by PhpStorm.
 * User: КалиаскарР
 * Date: 12.02.2020
 * Time: 16:48
 */
class myIterator implements ArrayAccess, Iterator {

    private $data;
    private $position;

    public function __construct(array $data = []) {
        $this->data = $data;
        $this->rewind();
    }

    public function offsetSet($offset, $value) {
        if (is_null($offset)) {
            $this->data[] = $value;
        } else {
            $this->data[$offset] = $value;
        }
    }

    public function offsetExists($offset) {
        return isset($this->data[$offset]);
    }

    public function offsetUnset($offset) {
        unset($this->data[$offset]);
    }

    public function offsetGet($offset) {
        return isset($this->data[$offset]) ? $this->data[$offset] : null;
    }

    public function rewind() {
        var_dump(__METHOD__);
        $this->position = 0;
    }

    public function current() {
        var_dump(__METHOD__);
        return $this->offsetGet($this->key());
    }

    public function key() {
        var_dump(__METHOD__);
        $keys = array_keys($this->data);
        return $keys[$this->position];
    }

    public function next() {
        var_dump(__METHOD__);
        ++$this->position;
    }

    public function valid() {
        var_dump(__METHOD__);
        $key = $this->key;
        return $this->offsetExists($key);
    }
}

?>