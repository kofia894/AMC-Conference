<?php

require ('../Settings/db_class.php');

// inherit the methods from Connection
class Request extends Connection{


	function add_request($name, $dnation,$pnumber,$req_type, $media,$speakers){
		// return true or false
		return $this->query("INSERT INTO `requests`(`name`, `denomination`, `phone_number`, `request_type`, `media`, `speakers`) 
										values('$name','$dnation','$pnumber', '$req_type', '$media', '$speakers')");

								
	}

	function add_aps_en($name,$dnation,$pnumber,$media,$format,$messages){
		// return true or false
		return $this->query("INSERT INTO `aps_en`(`name`, `denomination`, `phone_number`, `media`, `format`, `messages`) 
										values('$name','$dnation','$pnumber', '$media', '$format', '$messages')");

								
	}

	

	

}

?>