<?php
class jsonModel{
	
	/*
	* Function to read web service data and get only cats for each person from the json data
	*/
	public function readJSONData(){
  		
		$jsonData = file_get_contents("http://agl-developer-test.azurewebsites.net/people.json");
		$data = json_decode($jsonData,true);
		
		$catsList = array();
		
		//Loop through each person and find their pets
		foreach($data as $person){
			//Check if pets array exists for that person
			if(isset($person['pets'])){
				foreach($person['pets'] as $pet){
					//Check if the pet type is Cat then assign to catsList gender associative array
					if($pet['type'] == 'Cat'){
						$catsList[$person['gender']][] = $pet['name'];
					}
				}
			}
		}
		return $catsList;
	}
}
