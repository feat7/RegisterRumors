<?php

namespace app\models;

use \system\models\Model;


/**
* 
*/
class CountModel extends Model
{
	public function insertCountData($data)
	{
		$sql = "insert into count (rumor_id, user_id, submission) values (:rumor_id, :user_id, :submission)";
		if($insert = $this->pdoQuery($sql)) {
			if($insert->execute($data)) {
				return true;
			}
		}
		return false;
	}

	public function getCountYesById($id)
	{
		$sql = "select count(*) from rumors where submission=2 AND id=:id";

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