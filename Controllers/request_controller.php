<?php


require('../Classes/request_class.php');

function add_request_controller($name,$dnation,$pnumber,$req_type, $media,$speakers){
   
    $request_instance = new Request();
    
    return $request_instance->add_request($name,$dnation,$pnumber,$req_type,$media,$speakers);

}

function add_aps_en_controller($name,$dnation,$pnumber,$media, $format,$messages){
   
    $request_instance = new Request();
    
    return $request_instance->add_aps_en($name,$dnation,$pnumber,$media, $format,$messages);

}




?>