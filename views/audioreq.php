<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="description" content="Responsive Bootstrap4 Shop Template, Created by Imran Hossain from https://imransdesign.com/">
        <style>
  
        small{
          color: red;
        }

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

    <body style="background: #051922;">
        <nav class="navbar navbar-expand-lg navbar-dark ftco_navbar bg-dark ftco-navbar-light" id="ftco-navbar">
            <div class="container">
            <a class="navbar-brand" href="homepage.php">PENT TV MEDIA</a>
        

            </div>
        </nav>
    <div class="login-form">

    <form action="../Actions/add_request.php" method="post" id="login-form">

        <a class="btn btn-outline-success mb-5" href="homepage.php" >Back</a>
            <h2 class="text-center">Request Conference Audio Messages</h2> 
            
            
            <div class="form-group mb-3">
                <input type="text" class="form-control " placeholder="Full Name" id="name" name="fname">
                
            </div>
            

            <div class="form-group mb-3">
                <input type="text" class="form-control " placeholder="Phone Number" id="pnumber" name="pnumber">
                
            </div>

            
            <div class="form-group mb-3">
                <input type="text" class="form-control " placeholder="Denomination" id="pnumber" name="dnation">
                
            </div>

            <hr>
            <h3 class="text-center">Media </h3>

            <div class="container fmt form-group mb-3">
                <input type="radio" id="Pendrive" name="media" value="Pendrive">
                <label for="Pendrive">Pendrive</label><br>
                <input type="radio" id="cd" name="media" value="CD">
                <label for="CD">CD</label><br>
            </div>
            

            <hr>

            <h3 class="text-center">Speakers </h3>
            

                <div class="fmt form-group mb-3">
                    <div class="form-check mb-3 text">
                        <input class="form-check-input" name = "speakers[]" type="checkbox" value="Aps Eric Nyamekye" id="flexCheckDefault">
                        <label class="form-check-label" for="flexCheckDefault">
                            Aps Eric Nyamekye
                        </label>
                    </div>
                    <div class="form-check mb-3">
                        <input class="form-check-input"  name = "speakers[]" type="checkbox" value="Aps General Sam Korankye Ankrah" id="flexCheckDefault">
                        <label class="form-check-label" for="flexCheckDefault">
                            Aps General Sam Korankye Ankrah
                        </label>
                    </div>
                    <div class="form-check mb-3">
                        <input class="form-check-input"  name = "speakers[]" type="checkbox" value="Rev Prof Frimpong Maanso" id="flexCheckDefault" >
                        <label class="form-check-label" for="flexCheckDefault">
                            Rev Prof Frimpong Maanso    
                        </label>
                    </div>
                    <div class="form-check mb-3">
                        <input class="form-check-input" name = "speakers[]" type="checkbox" value="Aps Prof Opoku Onyinah" id="flexCheckDefault">
                        <label class="form-check-label" for="flexCheckDefault">
                            Aps Prof Opoku Onyinah   
                        </label>
                    </div>
                    <div class="form-check mb-3">
                        <input class="form-check-input" name = "speakers[]" type="checkbox" value="Mrs Gifty Dansoah Appiah" id="flexCheckDefault">
                        <label class="form-check-label" for="flexCheckDefault">
                            Mrs Gifty Dansoah Appiah
                        </label>
                    </div>
                    <div class="form-check mb-3">
                        <input class="form-check-input" name = "speakers[]" type="checkbox" value="Rev Dr Joyce Aryee" id="flexCheckDefault">
                        <label class="form-check-label" for="flexCheckDefault">
                            Rev Dr Joyce Aryee
                        </label>
                    </div>
                    <div class="form-check mb-3">
                        <input class="form-check-input" name = "speakers[]" type="checkbox" value="Rev Dr Opuni Frimpong" id="flexCheckDefault">
                        <label class="form-check-label" for="flexCheckDefault">
                            Rev Dr Opuni Frimpong
                        </label>
                    </div>
                    <div class="form-check mb-5">
                        <input class="form-check-input" name = "speakers[]"type="checkbox" value="Very Rev Prof Johnson Kwabena Asamoah-Gyadu" id="flexCheckDefault">
                        <label class="form-check-label" for="flexCheckDefault">
                            Very Rev Prof Johnson Kwabena Asamoah-Gyadu
                        </label>
                    </div>
                </div>
                
            
            <div class="form-group container d-flex justify-content-center">
                <button type="submit" class="btn btn-primary btn-block" id= "submitbtn" name="add_audio_req">Submit Request</button>
            </div>
             
            
        
    </form>
    
    </div>
    <script src="../js/loginvalidation.js"></script>
    <script src="../js/jquery-1.11.3.min.js"></script>
    <script src="../assets/bootstrap/js/bootstrap.bundle.min.js"></script>
   


</body>
</html>