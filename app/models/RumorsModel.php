<?php

namespace app\models;

use \system\models\Model;


/**
* 
*/
class RumorsModel extends Model
{
	public function insertRumorsData($data)
	{
		$sql = "insert into rumors (name, email, subject, zipcode, message) values (:name, :email, :subject, :zipcode, :message)";
		if($insert = $this->pdoQuery($sql)) {
			if($insert->execute($data)) {
				return true;
			}
		}
		return false;
	}

	public function getRumors()
	{
		$sql = "select * from rumors order by id DESC LIMIT 3";

		if($result = $this->pdoQuery($sql)) {

			if($result->execute()) {
				return (array) $result->fetchAll();
			}
		}
		return false;
	}

	public function getRumorById($id)
	{
		$sql = "select * from rumors where id=:id";

		if($result = $this->pdoQuery($sql)) {
			$result->bindParam(':id', $id);

			if($result->execute()) {
				return $result->fetch();
			}
		}
		return false;
	}

	public function getRumorsByZip($zipcode)
	{
		$sql = "select * from rumors where zipcode=:zipcode";

		if($result = $this->pdoQuery($sql)) {
			$result->bindParam(':zipcode', $zipcode);

			if($result->execute()) {
				return (array) $result->fetchAll();
			}
		}
		return false;
	}

	public function sendEmails()
	{
		$sql = "select * from rumors ORDER BY id DESC LIMIT 1";

		$result = $this->pdoQuery($sql);
		$result->execute();
		$rumors = $result->fetch();
		$zipcode = $rumors['zipcode'];

		$userModel = new \app\models\UserModel;

		$users = $userModel->getUsersByZip($zipcode);

		foreach ($users as $user) {
			
			mail($user['email'], $rumors['subject'], $rumors['message']);
		}
	}

}