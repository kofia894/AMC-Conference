<head>
  <script src="jquery-3.3.1.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/2.1.2/sweetalert.min.js"></script>
</head>
<?php 

require('../Controllers/request_controller.php');


// check if theres a POST variable with the name 'add_user'
if(isset($_POST['add_audio_req'])){
    // retrieve the name, description and quantity from the form submission
    $name = $_POST['fname'];
    $dnation = $_POST['dnation'];
    $pnumber = $_POST['pnumber'];
    $media = $_POST['media'];
    $speakers = $_POST['speakers'];
    $req_type = "audio";
   


    
   
    // var_dump( implode(", " , $speakers)) ;
    
    // call the add_product_controller function: return true or false
    $result = add_request_controller($name,$dnation,$pnumber,$req_type, $media, implode(", " , $speakers));
    
    echo $result;
    if($result === true){
        echo '<script type="text/javascript">';
        echo 'setTimeout(function () { swal(" Request Sent","Your request has been made","success").then(function() {window.location.href = "../views/homepage.php";})';
        echo '}, 1000);</script>';
        
     
        // header('Location: Add_brand.php');
        // header('Location: ');
    } 
    else {
        
        
        echo '<script type="text/javascript">';
        echo 'setTimeout(function () { swal(" Unable to Make request","Something went wrong","error").then(function() {window.location.href = "../views/homepage.php";})';
        echo '}, 1000);</script>';
        
        
    }

}


if(isset($_POST['add_video_req'])){
    // retrieve the name, description and quantity from the form submission
    $name = $_POST['fname'];
    $dnation = $_POST['dnation'];
    $pnumber = $_POST['pnumber'];
    $media = $_POST['media'];
    $speakers = $_POST['speakers'];
    $req_type = "video";

    
    // call the add_product_controller function: return true or false
    $result = add_request_controller($name,$dnation,$pnumber,$req_type, $media, implode(", " , $speakers));
    
    echo $result;
    if($result === true){
        echo '<script type="text/javascript">';
        echo 'setTimeout(function () { swal(" Request Sent","Your request has been made","success").then(function() {window.location.href = "../views/homepage.php";})';
        echo '}, 1000);</script>';
        
     
        // header('Location: Add_brand.php');
        // header('Location: ');
    } 
    else {
        
        
        echo '<script type="text/javascript">';
        echo 'setTimeout(function () { swal(" Unable to Make request","Something went wrong","error").then(function() {window.location.href = "../views/homepage.php";})';
        echo '}, 1000);</script>';
        
        
    }

}









?>