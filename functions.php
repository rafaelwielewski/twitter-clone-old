<?php 

use \Rafael\Model\User;

function getUserName()
{

	$user = User::getFromSession();

	return $user->getdeslogin();

}
 ?>