<?php

use CRUD\Controller\PersonController;

include ("loader.php");
include ("index.html");

$controller = new PersonController();
$controller->switcher($_SERVER['REQUEST_URI'],$_REQUEST);
