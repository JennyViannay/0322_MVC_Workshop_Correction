<?php
require __DIR__.'/../src/controllers/recipe-controller.php';

$urlPath = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);

if ('/' === $urlPath) {
    home();
} elseif ('/add' === $urlPath) {
    add();
} elseif ('/show' === $urlPath && isset($_GET['id'])) {
    show($_GET['id']);
} else {
    header('HTTP/1.1 404 Not Found');
}