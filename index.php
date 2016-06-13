<?php

$ctrl = isset($_GET['ctrl']) ? $_GET['ctrl'] : 'News';
$act = isset($_GET['act']) ? $_GET['act'] : 'All';

$controllerClassName = $ctrl . 'Controller';
$method = 'action' . $act;

require_once __DIR__ . '/Controllers/' . $controllerClassName . '.php';

$controller = new $controllerClassName;
$controller->$method();


