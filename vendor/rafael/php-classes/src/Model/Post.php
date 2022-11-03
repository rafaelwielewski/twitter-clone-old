<?php 

namespace Rafael\Model;

use \Rafael\DB\Sql;
use \Rafael\Model;
use \Rafael\Mailer;

class Post extends Model {


    public static function showPosts()
	{

		$sql = new Sql();

		return $sql->select("SELECT * FROM tb_tweets ORDER BY dtregister");

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


}

 ?>