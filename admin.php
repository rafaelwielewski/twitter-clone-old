<?php 

use \Rafael\PageAdmin;
use \Rafael\Model\User;

$app->get('/admin', function() {
    
	User::verifyLogin();//metodo estatico que verifica se esta logado

	$page = new PageAdmin();

	$page->setTpl("index");

});
//criar pagina
$app->get('/admin/login', function() { //link 

	$page = new PageAdmin([ //metodo construtor do arquivo PageAdmin
		"header"=>false,//sem header
		"footer"=>false
	]);

	$page->setTpl("login");//abre a pagina login da pasta views/admin

});

$app->post('/admin/login', function() { //recebe login e senha do formulario ao ser clicado no botao pelo metodo post

	User::login($_POST["login"], $_POST["password"]);//recebe login e senha do formulario ao ser clicado no botao pelo metodo post

	header("Location: /admin");//redireciona para pagina admin se login e senha correto
	exit;

});

$app->get('/admin/logout', function() {//botao sair redireciona para pagina logout que executa metodo para sair

	User::logout();

	header("Location: /admin/login");//redireciona para login
	exit;

});

$app->get("/admin/forgot", function() {

	$page = new PageAdmin([
		"header"=>false,
		"footer"=>false
	]);

	$page->setTpl("forgot");	

});

$app->post("/admin/forgot", function(){

	$user = User::getForgot($_POST["email"]);

	header("Location: /admin/forgot/sent");
	exit;

});

$app->get("/admin/forgot/sent", function(){

	$page = new PageAdmin([
		"header"=>false,
		"footer"=>false
	]);

	$page->setTpl("forgot-sent");	

});


$app->get("/admin/forgot/reset", function(){

	$user = User::validForgotDecrypt($_GET["code"]);

	$page = new PageAdmin([
		"header"=>false,
		"footer"=>false
	]);

	$page->setTpl("forgot-reset", array(
		"name"=>$user["desperson"],
		"code"=>$_GET["code"]
	));

});

$app->post("/admin/forgot/reset", function(){

	$forgot = User::validForgotDecrypt($_POST["code"]);	

	User::setFogotUsed($forgot["idrecovery"]);

	$user = new User();

	$user->get((int)$forgot["iduser"]);

	$password = User::getPasswordHash($_POST["password"]);

	$user->setPassword($password);

	$page = new PageAdmin([
		"header"=>false,
		"footer"=>false
	]);

	$page->setTpl("forgot-reset-success");

});

 ?>