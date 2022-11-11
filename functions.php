<?php 

use \Rafael\Model\User;

function getUserName()
{

	$user = User::getFromSession();

	return $user->getdeslogin();

}

function getTweetId()
{

	$user = User::listAll();
	var_dump($user);

	return $user->getdeslogin();

}
 ?>