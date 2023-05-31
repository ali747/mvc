<?php
session_start();
require "../app/core/init.php";
//require_once  'controller/Product.php';


$app = new App();
$app->loadcontroller();
