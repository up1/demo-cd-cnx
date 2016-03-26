<?php
class CircularBuffer {
    private $writePointer;
    private $readPointer;
    private $data = array();

    function isEmpty() {
        return $this->writePointer == $this->readPointer;
    }

    function write($data) {
        $this->data[$this->writePointer ++] = $data;
    }

    function read() {
        return $this->data[$this->readPointer++];
    }

}
?>