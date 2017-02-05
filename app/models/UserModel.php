<?php

namespace app\models;

use \system\models\Model;


/**
* 
*/
class UserModel extends Model
{
	public function getUserById($id)
	{
		$sql = "select * from users where user_id=:id";

		if($result = $this->pdoQuery($sql)) {
			$result->bindParam(':id', $id);

			if($result->execute()) {
				return (array) $result->fetch();
			}
		}
		return false;
	}

	public function getUsersByZip($zipcode)
	{
		$sql = "select * from users where zipcode=:zipcode";

		if($result = $this->pdoQuery($sql)) {
			$result->bindParam(':zipcode', $zipcode);

			if($result->execute()) {
				return (array) $result->fetchAll();
			}
		}
		return false;
	}

}