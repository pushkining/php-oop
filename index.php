<?php 
include './Router.php';
include './interface/InterfaceController.php';

$Router = new Router();
$Router->executeController();
