<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <style>
        @font-face {
            font-family: Playball ;
            src: url(./font/Playball/Playball-Regular.ttf);
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
    border-radius: 5px;
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
    <?php
    include "header.php";
    ?>
    <div class="container-fluid vw-100 m-0 p-0">
        <section id="lunch">
            <!-- Lunch -->
            <div class="w-100">
            
                <div class="w-100 d-flex flex-wrap justify-content-center align-items-center">
                <!-- Lunch text -->
                    <div class="col-md-4 text-center py-4">
                        <h1 class="ln-text" style="color: rgb(195, 40, 40);">Lunch Specials</h1>
      
                        <h2>Lorem ipsum dolor sit amet.</h2>
                        <h2>Lorem ipsum dolor sit amet.</h2>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing.</p>
      
                        <h2>Lorem ipsum dolor sit amet.</h2>
                        <h2>Lorem ipsum dolor sit amet.</h2>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing.</p>
      
                        <h2>Lorem ipsum dolor sit amet.</h2>
                        <h2>Lorem ipsum dolor sit amet.</h2>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing.</p>
      
                        <div class="text py-3 fl-text" style="font-size: 50px; color: rgb(195, 40, 40);">Limited Offers</div>
      
                        <div>
                            <button button class="btn btn-outline-danger mb-2">See offers</button>
                        </div>
                    </div>
                    <!-- Lunch text end -->
      
                <!-- Lunch img -->
                    <div class="col-md-4 align-items-center">
                        <img src="pizza.jpg" class="img-fluid rounded-circle shadow">
                    </div>
                    <!-- Lunch img end -->
                </div>
                <!-- Lunch end -->
            </div>
        </section>

        <section id="about">
            <!-- About -->
            <div class="w-100 abt-us">
                <div class="w-100 my-5 abt-background d-flex flex-wrap justify-content-center text-white hero-color">
                    <div class="col-md-8">
                        <h1 class="mt-5 text-center ab-text fl-text ">About Us</h1>             
                        <p class="text-center pt-5">Lorem ipsum dolor sit amet consectetur adipisicing elit. Corrupti qui velit sapiente, quo molestiae laborum optio assumenda animi. Explicabo asperiores unde laborum tempore eveniet iusto cumque facilis. Atque voluptatum, tempore quisquam explicabo aut, consequatur et velit beatae, exercitationem nemo ipsa! Repellendus illo dicta, autem ducimus ipsam reprehenderit hic dignissimos ad.</p>
                        <center><button class="btn btn-outline-light mb-2">See more</button></center>
                    </div>
                </div>
            </div>
            <!-- About end -->
        </section>

        <section id="hours">
            <!-- Hours --> 
            <h1 class="hr-text text-center ln-text" style="color: rgb(195, 40, 40);">Hours</h1>
        
            <div class="w-100 pb-5 d-flex flex-wrap justify-content-center text-center hr-text2">
        
                <!-- Hr text -->
                <div class="col-md-2 d-flex flex-wrap justify-content-center align-items-center py-5">
                  Monday - Sunday<br>
                  11AM - 9PM
                </div>
        
                <div class="col-md-2 d-flex flex-wrap justify-content-center align-items-center py-5">
                  Monday - Sunday<br>
                  11AM - 9PM
                </div>
        
                <div class="col-md-2 d-flex flex-wrap justify-content-center align-items-center py-5">
                  Monday - Sunday<br>
                  11AM - 9PM
                </div>
                <!-- Hr text end-->
        
            </div>
            <!-- Hours end -->
        </section>
    </div>
    <?php
    include "footer.php";
    ?>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</body>
</html>