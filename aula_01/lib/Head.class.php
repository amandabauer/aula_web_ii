<?php

class Head {

    private $meta;
    private $link;
    private $title;

    function Head($meta, $link, $title) {
        $this->meta = $meta;
        $this->link = $link;
        $this->title = $title;
    }

    function __toString() {
                
        return "<head>
                    {$this->meta}
                    {$this->link}
                    {$this->title}
                </head>";
    }

}
