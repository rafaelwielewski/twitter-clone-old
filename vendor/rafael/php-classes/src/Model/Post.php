<?php 

namespace Rafael\Model;

use \Rafael\DB\Sql;
use \Rafael\Model;
use \Rafael\Mailer;

class Post extends Model {


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
    
    public static function checkList($list)
	{

		foreach ($list as &$row) {
			
			$p = new Post();
			$p->setData($row);
			$row = $p->getValues();

		}

		return $list;

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


}

 ?>