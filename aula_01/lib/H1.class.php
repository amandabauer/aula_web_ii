<?php

class H1 {

    private $h1;

    function H1($h1) {
        $this->h1 = $h1;
    }

    function __toString() {
        return "<h1>{$this->h1}</h1>";
    }

}
