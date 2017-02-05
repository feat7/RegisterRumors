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

		// $this->db->setAttribute(\PDO::ATTR_ERRMODE, \PDO::ERRMODE_EXCEPTION);

$id=(int)$id;
$sql = "SELECT COUNT(*) FROM `count` WHERE `submission`=2 AND rumor_id=$id";
$result = $this->db->query($sql); 
return $result->fetchColumn();

		// return $number_of_rows;
		// $sql = "select count(*) from rumors WHERE rumor_id=:id";

		// if($result = $this->pdoQuery($sql)) {
		// 	$result->bindParam(':id', $id);

		// 	if($result->execute()) {
		// 		return (!$result->fetchColumn()) ? $result->fetchColumn() : 0;
		// 	}
		// }
		// return false;
	}

	public function getCountNoById($id)
	{

		$id=(int)$id;
$sql = "SELECT COUNT(*) FROM `count` WHERE `submission`=1 AND rumor_id=$id";
$result = $this->db->query($sql); 
return $result->fetchColumn();
		// $sql = "select count(*) from rumors where submission=1 AND id=:id";

		// if($result = $this->pdoQuery($sql)) {
		// 	$result->bindParam(':id', $id);

		// 	if($result->execute()) {
		// 		return $result->rowCount();
		// 	}
		// }
		// return false;
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