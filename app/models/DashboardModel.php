<?php

namespace app\models;

use \system\models\Model;


/**
* 
*/
class DashboardModel extends Model
{
	public function addProjectData($data)
	{
		$sql = "insert into projects (name, description, image) values (:name, :description, :image)";
		if($insert = $this->pdoQuery($sql)) {
			if($insert->execute($data)) {
				return true;
			}
		}
		return false;
	}

	public function getProjectsList($limit = 1)
	{	
		$this->db->setAttribute(\PDO::ATTR_EMULATE_PREPARES, FALSE); //solves problem of LIMIT prepared statement
		$sql = "select projects.project_id, projects.name, projects.description, projects.image from projects LIMIT :limit";
		if($insert = $this->pdoQuery($sql)) {
			$insert->bindParam('limit', $limit);
			if($insert->execute()) {
				return $insert->fetchAll(\PDO::FETCH_OBJ);
			}
		}
		return false;
	}

}