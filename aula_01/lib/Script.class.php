<?php

class Script {

    private $src;
    private $integrity;
    private $crossorigin;

    function Script($src, $integrity, $crossorigin) {
        $this->src = $src;
        $this->integrity = $integrity;
        $this->crossorigin = $crossorigin;
    }

    function __toString() {
        return "<script src=\"{$this->src}\" integrity=\"{$this->integrity}\" crossorigin=\"{$this->crossorigin}\"></script>";
    }

}
