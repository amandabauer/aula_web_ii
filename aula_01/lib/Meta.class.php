<?php

class Meta {

    private $charset;
    private $name;
    private $content;

    function Meta($charset, $name, $content) {
        $this->charset = $charset;
        $this->name = $name;
        $this->content = $content;
    }

    function __toString() {
        return "<meta charset=\"{$this->charset}\">
                <meta name=\"{$this->name}\" content=\"{$this->content}\">";
    }

}