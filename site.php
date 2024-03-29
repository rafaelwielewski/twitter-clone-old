<?php 

use \Rafael\Page;
use \Rafael\Model\User;

$app->get("/teste", function(){
	
		
	$page = new Page([
		'header'=>false,
		'footer'=>false
	]);

	$page->setTpl("teste");

});


$app->get("/", function(){
	
	User::verifyLoggedin();
		
	$page = new Page([
		'header'=>false,
		'footer'=>false
	]);

	$page->setTpl("login", [
		'error'=>User::getError(),
		'errorRegister'=>User::getErrorRegister(),
		'registerValues'=>(isset($_SESSION['registerValues'])) ? $_SESSION['registerValues'] : ['name'=>'']
	]);

});


$app->post("/", function(){

    
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
	
	User::verifyLogin();
	$user = User::list3();
	$postsall = User::showPostsAll();
	$page = new Page();
	$page->setTpl("index" , [
		'postsall'=>User::checkList($postsall),
		'user'=>User::checkList($user)
	]);
	
});



$app->get("/connect_people", function(){
	
	User::verifyLogin();
	$user2 = User::listAll();
	$user = User::list3();
	$page = new Page();
	$page->setTpl("connect_people" , [
		'user2'=>User::checkList($user2),
		'user'=>User::checkList($user)
	]);
	
});


$app->post("/tweet", function(){
	
	$user = User::getFromSession();
	$tweet = new User();

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
	$tweet->savetweet();

	header("Location: /home");
	exit;
	
});

$app->get("/tweet/:idtweet", function($idtweet){
	
	User::verifyLogin();
	$post = User::showPost($idtweet);
	$replies = User::showReplies($idtweet);
	$page = new Page();
	$page->setTpl("tweet" , [
		'post'=>User::checkList($post),
		'replies'=>User::checkList($replies)
	]);
	
});


$app->post("/tweet/:idtweet/reply", function($idtweet){
	
	$user = User::getFromSession();
	$tweet = new User();

	$_POST['desreply'] = $_POST['reply'];
	$_POST['idtweet'] = $idtweet;
	$_POST['iduser'] = $user->getiduser();
	$_POST['desname'] = $user->getdesname();
	$_POST['deslogin'] = $user->getdeslogin();

	$tweet->setData($_POST);
	var_dump ($tweet);
	$tweet->savereply();

	header("Location: /tweet/$idtweet");
	exit;
	
});

$app->get("/like/:idtweet", function($idtweet){
	$user = User::getFromSession();
	$tweet = new User();
	$tweet->setData([
		'iduser'=>$user->getiduser(),
	]);
	if ($tweet->checkLikeExist($idtweet) === true) {
		$tweet->liketweet($idtweet);
		header("Location: /home");
		exit;
		var_dump ($tweet);
	}else {
		$tweet->removelike($idtweet);
		header("Location: /home");
		exit;
	}
	
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

$app->get("/profile/:deslogin", function($deslogin){

	User::verifyLogin();
	$user = new User();
	$user->get($deslogin);
	$posts = User::showPosts($deslogin);
	$page = new Page();
	$page->setTpl("profile" ,[
		'posts'=>user::checkList($posts),
		'user'=>$user->getValues(),
	]);
});

$app->get("/profile/update/:deslogin", function($deslogin){

	User::verifyLogin();
	$user = new User();
	$user->get($deslogin);
	$page = new Page();
	$page->setTpl("profile-update" ,[
		'user'=>$user->getValues(),
	]);
});

$app->post("/profile/update/:deslogin", function($deslogin){

	User::verifyLogin(); 
	$user = new User();
	$user->get($deslogin);
	//$user->setData($_POST);
	//$user->save();
	$user->setPhoto($_FILES["file"]);
	header('Location: /profile/:deslogin');
	exit;

	
});
//object(Rafael\Model\User)#29 (1) { ["values":"Rafael\Model":private]=> array(5) { ["iduser"]=> int(5) ["desname"]=> string(8) "batmano2" ["deslogin"]=> string(8) "batmano2" ["despassword"]=> string(60) "$2y$12$75clK7yeSMgOR9oOWT.Ww.dfVz/xQFUK2qak0EqUihn6qeRnN2BMC" ["dtregister"]=> string(19) "2022-11-08 15:13:46" } } string(8) "batmano2"
//string(8) "batmano2" object(Rafael\Model\User)#30 (1) { ["values":"Rafael\Model":private]=> array(5) { ["iduser"]=> int(5) ["desname"]=> string(8) "batmano2" ["deslogin"]=> string(8) "batmano2" ["despassword"]=> string(60) "$2y$12$75clK7yeSMgOR9oOWT.Ww.dfVz/xQFUK2qak0EqUihn6qeRnN2BMC" ["dtregister"]=> string(19) "2022-11-08 15:13:46" } }
 ?>