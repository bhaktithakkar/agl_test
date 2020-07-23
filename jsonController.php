<?php
include_once 'jsonModel.php';

class jsonController{

	public function getJSONData(){
		$jsonObj = new jsonModel();
		$catsList = $jsonObj->readJSONData();
		return $catsList;
	}
}
