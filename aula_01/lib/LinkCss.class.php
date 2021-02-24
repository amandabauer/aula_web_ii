<?php

class LinkCss {

    private $href;
    private $integrity;
    private $crossorigin;

    function LinkCss($href, $integrity, $crossorigin) {
        $this->href = $href;
        $this->integrity = $integrity;
        $this->crossorigin = $crossorigin;
    }

    function __toString() {
        return "<link href=\"{$this->href}\" rel=\"stylesheet\" integrity=\"{$this->integrity}\" crossorigin=\"{$this->crossorigin}\">";
    }

}
