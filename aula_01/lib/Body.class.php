<?php

class Body {

    private $h1;
    private $script;

    function Body($h1, $script) {
        $this->h1 = $h1;
        $this->script = $script;
    }

    function __toString() {
          return "<body>
                    {$this->h1}
                    {$this->script}
                </body>";
    }

}