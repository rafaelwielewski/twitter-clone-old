<?php 

namespace Rafael\Model;

use \Rafael\DB\Sql;
use \Rafael\Model;
use \Rafael\Mailer;


class User extends Model {
    
	const SESSION = "User";
	const SECRET = "HcodePhp7_Secret";
	const SECRET_IV = "HcodePhp7_Secret_IV";
	const ERROR = "UserError";
	const ERROR_REGISTER = "UserErrorRegister";
	const SUCCESS = "UserSucesss";

	public static function showPostsAll()
	{

		$sql = new Sql();

		return $sql->select("SELECT * FROM tb_tweets ORDER BY dtregister");

	}

	public static function showPosts($login)
	{

		$sql = new Sql();

		return $sql->select("SELECT * FROM tb_tweets WHERE deslogin = :LOGIN ORDER BY dtregister", array(
			":LOGIN"=>$login 
		)); 

	}

	public function savetweet()
	{

		$sql = new Sql();

		$results = $sql->select("CALL sp_tweets_save(:iduser, :desname, :deslogin, :destweet)", array(
			":iduser"=>$this->getiduser(),
			":desname"=>$this->getdesname(),
			":deslogin"=>$this->getdeslogin(),
			":destweet"=>$this->getdestweet()
		));

		$this->setData($results[0]);

	}
    public static function list3()
	{

		$sql = new Sql();

		$results = $sql->select("SELECT * FROM tb_users ORDER BY dtregister LIMIT 0, 3;");

		return $results;
	}
	public static function listAll()
	{

		$sql = new Sql();

		$results = $sql->select("SELECT * FROM tb_users ORDER BY deslogin");

		return $results;
	}

	public static function checkList($list)
	{

		foreach ($list as &$row) {
			
			$p = new User();
			$p->setData($row);
			$row = $p->getValues();

		}

		return $list;

	}

	public function get($deslogin)
	{
		$sql = new Sql();

		$results = $sql->select("SELECT * FROM tb_users WHERE deslogin = :LOGIN", array(
			":LOGIN"=>$deslogin
		));

		$data = $results[0];

		$data['deslogin'] = utf8_encode($data['deslogin']);

		$this->setData($data);

	}


	
	public static function getFromSession()
	{

		$user = new User();

		if (isset($_SESSION[User::SESSION]) && (int)$_SESSION[User::SESSION]['iduser'] > 0) {

			$user->setData($_SESSION[User::SESSION]);

		}

		return $user;

	}
   

    public static function login($login, $password)
	{

		$sql = new Sql();

		$results = $sql->select("SELECT * FROM tb_users WHERE deslogin = :LOGIN", array(
			":LOGIN"=>$login
		)); 

		if (count($results) === 0)
		{
			throw new \Exception("Usuário inexistente ou senha inválida.");
		}

		$data = $results[0];

		if (password_verify($password, $data["despassword"]) === true)
		{

			$user = new User();

			$data['deslogin'] = utf8_encode($data['deslogin']);

			$user->setData($data);

			$_SESSION[User::SESSION] = $user->getValues();

			return $user;

		} else {
			throw new \Exception("Usuário inexistente ou senha inválida.");
		}

	}

    public static function logout()
	{

		$_SESSION[User::SESSION] = NULL;

	}

    public static function verifyLogin()
	{

		if (
			!isset($_SESSION[User::SESSION])
			||
			!$_SESSION[User::SESSION]
			||
			!(int)$_SESSION[User::SESSION]["iduser"] > 0
		) {
            header("Location: /");
            exit;
	
		
		}

	}
	
	public static function verifyLoggedin()
	{

		if (
			isset($_SESSION[User::SESSION])
			||
			$_SESSION[User::SESSION]
		) {
            header("Location: /home");
            exit;
	
		
		}

	}


//MENSAGENS


public static function setError($msg)
{

    $_SESSION[User::ERROR] = $msg;//variavel error definida acima

}

public static function getError()
{

    $msg = (isset($_SESSION[User::ERROR]) && $_SESSION[User::ERROR]) ? $_SESSION[User::ERROR] : '';

    User::clearError();

    return $msg;

}

public static function clearError()
{

    $_SESSION[User::ERROR] = NULL;

}

public static function setSuccess($msg)
	{

		$_SESSION[User::SUCCESS] = $msg;

	}

	public static function getSuccess()
	{

		$msg = (isset($_SESSION[User::SUCCESS]) && $_SESSION[User::SUCCESS]) ? $_SESSION[User::SUCCESS] : '';

		User::clearSuccess();

		return $msg;

	}

	public static function clearSuccess()
	{

		$_SESSION[User::SUCCESS] = NULL;

	}

	public static function setErrorRegister($msg)
	{

		$_SESSION[User::ERROR_REGISTER] = $msg;

	}

	public static function getErrorRegister()
	{

		$msg = (isset($_SESSION[User::ERROR_REGISTER]) && $_SESSION[User::ERROR_REGISTER]) ? $_SESSION[User::ERROR_REGISTER] : '';

		User::clearErrorRegister();

		return $msg;

	}

	public static function clearErrorRegister()
	{

		$_SESSION[User::ERROR_REGISTER] = NULL;

	}

///////////////

public static function getPasswordHash($password)
	{

		return password_hash($password, PASSWORD_DEFAULT, [
			'cost'=>12
		]);

	}


public static function checkLoginExist($login)
	{

		$sql = new Sql();

		$results = $sql->select("SELECT * FROM tb_users WHERE deslogin = :deslogin", [
			':deslogin'=>$login
		]);

		return (count($results) > 0);

	}

public function save()
	{

		$sql = new Sql();

		$results = $sql->select("CALL sp_users_save(:desname, :deslogin, :despassword)", array(
			":desname"=>utf8_decode($this->getdesname()),
			":deslogin"=>$this->getdeslogin(),
			":despassword"=>User::getPasswordHash($this->getdespassword()),
		));

		$this->setData($results[0]);

}


public function checkPhoto()
{

	if (file_exists(
		$_SERVER['DOCUMENT_ROOT'] . DIRECTORY_SEPARATOR . 
		"res" . DIRECTORY_SEPARATOR . 
		"site" . DIRECTORY_SEPARATOR . 
		"img" . DIRECTORY_SEPARATOR . 
		"profile" . DIRECTORY_SEPARATOR . 
		$this->getdeslogin() . ".jpg"
		)) {

		$url = "/res/site/img/profile/" . $this->getdeslogin() . ".jpg";

	} else {

		$url = "/res/site/img/profile.jpg";

	}

	return $this->setdesphoto($url);//seta dentro do objeto

}

public function getValues()//reescreve o getvalues para incluer foto
{

	$this->checkPhoto();

	$values = parent::getValues();

	return $values;

}

public function setPhoto($file)
{
	$extension = explode('.', $file['name']);//explode para procura nome do arquivo com um ponto antes e fazer um array
	$extension = end($extension);//pega somente a extensão do arquivo
	switch ($extension) {

		case "jpg":
		case "jpeg":
		$image = imagecreatefromjpeg($file["tmp_name"]);//converte de jpeg o arquivo temporario no servidor
		break;

		case "gif":
		$image = imagecreatefromgif($file["tmp_name"]);
		break;

		case "png":
		$image = imagecreatefrompng($file["tmp_name"]);
		break;

	}

	$dist = $_SERVER['DOCUMENT_ROOT'] . DIRECTORY_SEPARATOR . 
		"res" . DIRECTORY_SEPARATOR . 
		"site" . DIRECTORY_SEPARATOR . 
		"img" . DIRECTORY_SEPARATOR . 
		"profile" . DIRECTORY_SEPARATOR . 
		$this->getdeslogin() . ".jpg";//salva imagem do arquivo temporario no destino

	
	imagepng($image, $dist);//converte $image para jpeg

	imagedestroy($image);

	$this->checkPhoto();//salva foto na memoria

}


}
 ?>