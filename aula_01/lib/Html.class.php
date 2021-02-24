<?php

class Html {

    private $head;
    private $body;
    private $footer;

    function Html($head, $body, $footer) {        
        $this->head = $head;
        $this->body = $body;
        $this->footer = $footer;
    }

    function __toString() {
        return "<html>
                    {$this->head}
                    {$this->body}
                    {$this->footer}
                </html>";
    }

}

//new html(new head(new meta(), new title()), new body(), new footer(' &copy; Amanda Bauer Hendges 2021'))