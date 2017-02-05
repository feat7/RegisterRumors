<?php

namespace app\models;

use \system\models\Model;


/**
* 
*/
class AuthModel extends Model
{
	public function insertRegistrationData($data)
	{
		$sql = "insert into users (name, reg_id, zipcode, email, password) values (:name, :reg_id, :zipcode, :email, :password)";
		if($insert = $this->pdoQuery($sql)) {
			if($insert->execute($data)) {
				return true;
			}
		}
		return false;
	}

	public function getHash($email)
	{
		$sql = "select users.password from users where email=:email";
		if($result = $this->pdoQuery($sql)) {
			$result->bindParam('email', $email);
			if($result->execute()) {
				return $result->fetch()['password'];
			}
		}
	}

	public function insertLoginData($email)
	{
		$sql = "select users.user_id, users.name, users.password, users.verify from users where email=:email";
		if($result = $this->pdoQuery($sql)) {
			$result->bindParam('email', $email);
			if($result->execute()) {
				$_SESSION['userdata'] = $result->fetch(\PDO::FETCH_OBJ)->user_id;
			}
		}
	}

	public function getHashById($id)
	{
		$sql = "select users.password from users where user_id=:user_id";
		if($result = $this->pdoQuery($sql)) {
			$result->bindParam('user_id', $id);
			if($result->execute()) {
				return $result->fetch()['password'];
			}
		}
	}

	public function getUserLevelById($id)
	{
		$sql = "select users.user_level from users where user_id=:user_id";
		if($result = $this->pdoQuery($sql)) {
			$result->bindParam('user_id', $id);
			if($result->execute()) {
				return $result->fetch()['user_level'];
			}
		}
	}
}