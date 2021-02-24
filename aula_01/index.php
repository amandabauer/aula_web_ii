teste<?php
require('autoload.php');

$footer = new Footer('&copy; Amanda Bauer Hendges 2021');
$h1 = new H1('Primeira atividade do semestre');

$script = new Script('https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.bundle.min.js',
                    'sha384-b5kHyXgcpbZJO/tY9Ul7kGkf1S0CWuKcCD38l8YkeH8z8QjE0GmW1gYU5S9FOnJ0', 
                    'anonymous');

$meta = new Meta('utf-8', 'viewport', 'width=device-width, initial-scale=1');

$linkCss = new LinkCss('https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css',
                       'sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl',
                       'anonymous');
$title = new Title('Primeira aula');

$body = new Body($h1, $script);
$head = new Head($meta, $linkCss, $title);
$html = new Html($head, $body, $footer);
echo $html;
?>

