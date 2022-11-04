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
	

	$posts = Post::showPosts();
	$page = new Page();
	$page->setTpl("index" , [
		'posts'=>Post::checkList($posts)
	]);
	
});


$app->post("/tweet", function(){
	
	$user = User::getFromSession();
	$tweet = new Post();

	$_POST['destweet'] = $_POST['tweet'];
	$_POST['iduser'] = $user->getiduser();
	$_POST['desname'] = $user->getdesname();
	$_POST['deslogin'] = $user->getdeslogin();

	$tweet->setData($_POST);

	$tweet->setData([
		'desiduser'=>$user->getiduser(),
		'desname'=>$user->getdesname(),
		'deslogin'=>$user->getdeslogin(),
		'destweet'=>$_POST['tweet'],
	]);
	$tweet->save();

	header("Location: /home");
	exit;
	
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