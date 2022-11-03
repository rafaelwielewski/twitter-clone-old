<?php 

use \Rafael\Page;
use \Rafael\Model\Post;
use \Rafael\Model\User;

$app->get("/", function(){

    $page = new Page([
		'header'=>false,
		'footer'=>false
	]);

	$page->setTpl("login", [
		'error'=>User::getError(),
		'errorRegister'=>User::getErrorRegister(),
		'registerValues'=>(isset($_SESSION['registerValues'])) ? $_SESSION['registerValues'] : ['name'=>'', 'email'=>'', 'phone'=>'']
	]);

});

$app->post("/", function(){

    //User::verifyLogin(false);
    
    try {

		User::login($_POST['login'], $_POST['password']);


	} catch(Exception $e) {

		User::setError($e->getMessage());

	}
	header("Location: /home");

	exit;

});

$app->get("/logout", function(){

	User::logout();

	header("Location: /");
	exit;

});

$app->get("/home", function(){
	

	$login = User::getFromSession();

    User::verifyLogin(false);
	
    $page = new Page();

	$page->setTpl("index", [
		'login'=>$login->getValues($login)
	]);


});


$app->post("/register", function(){

	$_SESSION['registerValues'] = $_POST;

	if (!isset($_POST['name']) || $_POST['name'] == '') {

		User::setErrorRegister("Preencha o seu nome.");
		header("Location: /");
		exit;

	}

	if (!isset($_POST['login']) || $_POST['login'] == '') {

		User::setErrorRegister("Preencha o seu usuario.");
		header("Location: /");
		exit;

	}

	if (!isset($_POST['password']) || $_POST['password'] == '') {

		User::setErrorRegister("Preencha a senha.");
		header("Location: /");
		exit;

	}

	if (User::checkLoginExist($_POST['login']) === true) {

		User::setErrorRegister("Este usuario já está sendo usado.");
		header("Location: /");
		exit;

	}

	$user = new User();

	$user->setData([
		'deslogin'=>$_POST['login'],
		'desname'=>$_POST['name'],
		'despassword'=>$_POST['password'],
	]);

	$user->save();

	User::login($_POST['login'], $_POST['password']);

	header('Location: /home');
	exit;

});



 ?>