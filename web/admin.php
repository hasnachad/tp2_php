<?php
use Core\Auth\DBAuth;

define('ROOT', dirname(__DIR__));
require ROOT.'/app/App.php';
App::load();

if (isset($_GET['p'])) {
	$page = $_GET['p'];
}else{
	$page = "home";
}

$app = App::getInstance();
$auth = new DBAuth($app->getDb());

//connexion utilisateur via login.php
if ($_POST) {
	if (isset($_POST['username'], $_POST['password'])) {
		if ($auth->login($_POST['username'], $_POST['password'])) {
			//prevoir un message flash
		}else{
			header('location: index.php?p=login');
			exit();
		}
	}
}
//fin connexion utilisateur via login.php

if (!$auth->logged()) {
	$app->forbidden();
}

$connect = "Disconnect";

ob_start();
if ($page==='home') {
	require ROOT.'/pages/admin/index.php';
//suite clients
}elseif($page==='clients'){
	require ROOT.'/pages/admin/clients/index.php'; //affichage

}elseif($page==='clients.add'){
	require ROOT.'/pages/admin/clients/add.php'; //ajout d'un client

//suite service
}elseif($page==='credits'){
	require ROOT.'/pages/admin/credit/index.php';

}elseif($page==='credit.add'){
	require ROOT.'/pages/admin/credit/add.php';
/////suite pour post
}else{
	require ROOT.'/pages/errors/404.php';
}
$content = ob_get_clean();
require ROOT.'/pages/templates/default.php'; 