<?php
require_once "../vendor/autoload.php";
require_once "../resources/scripts/mvc4php/globalsinviews.php";

use MVC4PHP\View;

View::render(function () {

}, [
    "title" => "",
    "js" => [""],
    "css" => [""]
]);