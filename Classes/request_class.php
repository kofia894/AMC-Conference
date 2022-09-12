<?php

require ('../Settings/db_class.php');

// inherit the methods from Connection
class Request extends Connection{


	function add_request($name, $dnation,$pnumber,$req_type, $media,$speakers){
		// return true or false
		return $this->query("INSERT INTO `requests`(`req_id`, `Name`, `Denomination`, `Phone Number`, `Request_type`, `Media`, `Speakers`) 
										values('$name','$dnation','$pnumber', '$req_type', '$media', '$speakers')");

								
	}

	

	

}

?>