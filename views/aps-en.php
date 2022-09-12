<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="description" content="Responsive Bootstrap4 Shop Template, Created by Imran Hossain from https://imransdesign.com/">
        <style>

        </style>    
        <!-- title -->
        <title>AMC</title>

        
    
        <!-- favicon -->
        <!-- <link rel="shortcut icon" type="image/png" href="assets/img/favicon.png"> -->
        <!-- google font -->
        <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,700" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css?family=Poppins:400,700&display=swap" rel="stylesheet">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    
        <!-- main style -->
        <link rel="stylesheet" href="../css/main.css">
        
    
    </head>

    <body style="background-image: linear-gradient(rgba(0,0,0,0.5), rgba(0,0,0,0.5)), url(../images/apseric.jpg);  background-size: cover;  background-position: center;">
        <nav class="navbar navbar-expand-lg navbar-dark ftco_navbar bg-dark ftco-navbar-light" id="ftco-navbar">
            <div class="container">
                <a class="navbar-brand" href="homepage.php">PENT TV MEDIA</a>
            
            </div>
        </nav>
        <div class="login-form">
            <form action="../Actions/add_request.php" method="post" id="login-form">
            <a class="btn btn-outline-success mb-5" href="homepage.php" >Back</a>
                <h2 class="text-center">Request Aps Eric Nyamekye Messages</h2> 
                
                
                <div class="form-group mb-3">
                    <input type="text" class="form-control " placeholder="Full Name" id="name" name="fname">
                    
                </div>

                <div class="form-group mb-3">
                    <input type="text" class="form-control " placeholder="Denomination" id="pnumber" name="dnation">
                    
                </div>

                <div class="form-group mb-3" style="width: 7em">
                    <input type="number" class="form-control " placeholder="Phone " id="pnumber" name="pnumber">
                    
                </div>

                <hr> 
                <h3 class="text-center"> Format </h4>
                <div class="d-flex justify-content-center">

                    <div class="fmt form-group mb-3 " >
                        <input type="radio" id="Pendrive" name="format" value="Pendrive">
                        <label for="Pendrive">Video</label><br>
                        <input type="radio" id="cd" name="format" value="CD">
                        <label for="CD">Audio</label><br>
                    </div>

                    <div class="fmt form-group mb-3 " >
                        <input type="radio" id="Pendrive" name="media" value="Pendrive">
                        <label for="Pendrive">Pendrive</label><br>
                        <input type="radio" id="cd" name="media" value="CD">
                        <label for="CD">CD</label><br>
                    </div>

                </div>

                

                <hr> 

                <h3 class="text-center"> Messages </h4>
                <div class="fmt form-group mb-3 " >

                    <div class="form-check mb-3">
                        <input class="form-check-input" type="checkbox" name="messages[]" value="DECEPTION" id="flexCheckDefault">
                        <label class="form-check-label" for="flexCheckDefault">
                            Deception
                        </label>
                    </div>

                    <div class="form-check mb-3">
                        <input class="form-check-input" type="checkbox" name="messages[]" value="FEED MY SHEEP" id="flexCheckDefault">
                        <label class="form-check-label" for="flexCheckDefault">
                            Feed my sheep
                        </label>
                    </div>

                    <div class="form-check mb-3">
                        <input class="form-check-input" type="checkbox" name="messages[]"  value="Modelling" id="flexCheckDefault">
                        <label class="form-check-label" for="flexCheckDefault">
                            Modelling
                        </label>
                    </div>

                    <div class="form-check mb-3">
                        <input class="form-check-input" type="checkbox" name="messages[]"  value="The Law Of The Spirit" id="flexCheckDefault">
                        <label class="form-check-label" for="flexCheckDefault">
                            The Law Of The Spirit
                        </label>
                    </div>

                    <div class="form-check mb-3">
                        <input class="form-check-input" type="checkbox" value="Understanding Worship" id="flexCheckDefault">
                        <label class="form-check-label" for="flexCheckDefault">
                            Understanding Worship
                        </label>
                    </div>

                    <div class="form-check mb-3">
                        <input class="form-check-input" type="checkbox" name="messages[]"  value="The Three Righteous Men" id="flexCheckDefault">
                        <label class="form-check-label" for="flexCheckDefault">
                            The Three Righteous Men
                        </label>
                    </div>

                </div>

            

                
                <div class="form-group container d-flex justify-content-center mt-5">
                    <button type="submit" class="btn btn-primary btn-block" id= "submitbtn" name="aps_en_add">Submit Request</button>
                </div>
                
                
            
            </form>
        
        </div>
    <script src="../js/loginvalidation.js"></script>
    <script src="../js/jquery-1.11.3.min.js"></script>
    <script src="../assets/bootstrap/js/bootstrap.bundle.min.js"></script>
   


</body>
</html>