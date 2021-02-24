<?php

class Footer {

    private $texto;

    function Footer($texto) {
        $this->texto = $texto;
    }

    function __toString() {
        return "<footer><p>{$this->texto}</p></footer>";
    }

}