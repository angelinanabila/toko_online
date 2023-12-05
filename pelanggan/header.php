<?php 
session_start();
if($_SESSION['level']==""){
    header("location:index.php?pesan=gagal");
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
    <style>
        @font-face {
    font-family: Playball ;
    src: url(./font/Playball/Playball-Regular.ttf);
}

.menu:hover{
    border-color: white;
    border-style: solid;
    border-width: 2px;
    border-radius: 5px;
} 

.menu{
    color: white;
}
.hero-color{
    background-color: rgba(0, 0, 0, 0.5);
    height: 100%;
}

.hero{
    background-image: 
    url(./pizza.jpg);

    height: 500px;

    background-position: center;
    background-size: cover;    
}

.hero-text{
    font-family: Playball;

    width: 100%;
    height: 100%;

    display: flex;

    align-items: center;
    justify-content: center;
}

.rounded-circle{
    border-color: white;
    border-style: solid;
    border-width: 2px;
    border-radius: 5px;
}

.abt-us{
    background-image: 
    url(./image/about-us.jpeg);

    height: 500px;

    background-position: center;
    background-size: cover;
}
.ln-text{
    font-size: 85px;
    font-family: Playball;
    font-weight: bold
}
.hr-text2{
    font-size: 25px;
    font-weight: bold;
}

.fl-bg{
    background-image:
    url(./image/follow-us.jpeg);
    background: linear-gradient(rgba(0,0,0,0.60),
    rgba(0,0,0,0.60)),
    url(./image/about-us.jpeg)
    no-repeat;

    height: 100%;
}

.fl-text{
    font-size: 80px;
    font-family: Playball;
    font-weight: bold;
}

.ft-bg{
    background-color: maroon;
}

    </style>
</head>
<body>
    <div class="container-fluid vw-100 m-0 p-0">
        
        <div class="hero justify-content-center">
            <div class="hero-color">
                <div class="row ">

                    <!-- Logo -->
                    <div class="col-md-1 justify-content-center align-items-center py-3 px-4">
                        <img src="logo.png" class="img-fluid rounded-circle" width="100px" height="100px">    
                    </div>
                    <!-- Logo end -->
                
  
                <!-- Menu -->
                    <div class="col-md-6 d-flex flex-wrap justify-content-center align-items-center p-3">
                        <span class="p-4 text-uppercase menu"><a href="home.php" style="color: #FFFF">Home</a></span>
                        <span class="p-4 text-uppercase menu"><a href="#about" style="color: #FFFF">About Us</a></span>
                        <span class="p-4 text-uppercase menu"><a href="menuu.php" style="color: #FFFF">Menu & Ordering</a></span>                 
                        <span class="p-4 text-uppercase menu"><a href="logout.php" style="color: #FFFF">Logout</a></span>
                    </div>
                    
                    <div class="col-md-4 d-flex flex-wrap justify-content-end align-items-center nick">
                        <span class="p-4 text-uppercase menu"><?=$_SESSION['username']?></span>
                    </div>
                <!-- Menu end -->  
                
                
  
                <div class="col-md-12 d-flex flex-wrap hero-text text-white text-uppercase justify-content-center align-items-center pb-5" style="height: 400px;">
                    <h1 class="text-center">PIZZA<br>DONE RIGHT</h1>
                </div>
            </div>
        </div>      
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous"></script>
</body>
</html>