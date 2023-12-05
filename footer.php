<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
</head>
<body>
<style>
        @font-face {
    font-family: Playball ;
    src: url(./font/Playball/Playball-Regular.ttf);
}

/* .menu:hover{
    border-color: white;
    border-style: solid;
    border-width: 2px;
    border-radius: 5px;
} */

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
            <section id="Follow">
            <!-- Follow us -->
                <div class="w-100">
                    <div class="w-100 pt-5 text-white text-center fl-bg justify-content-center align-items-center hero-color" style="height: 300px;">
                  
                        <!-- Text Start -->
                        <h1 class="fl-text">Follow Us</h1>
                        <p style="font-size:x-large; font-weight: bold;">#Nabila&DanniarPizzaWeb</p>
                        <!-- Text end -->
        
                        <!-- Icon -->
                        <div class="d-flex justify-content-center align-items-center">
                            <div class="rounded-circle d-flex justify-content-center align-items-center bg-secondary mx-2 btn" style="width: 50px; height: 50px">
                                <span class="text-white fw-bold">F</span>
                            </div>

                            <div class="rounded-circle d-flex justify-content-center align-items-center bg-secondary mx-2 btn" style="width: 50px; height: 50px">
                            <span class="text-white fw-bold">IG</span>
                            </div>

                            <div class="rounded-circle d-flex justify-content-center align-items-center bg-secondary mx-2 btn" style="width: 50px; height: 50px">
                                <span class="text-white fw-bold">X</span>
                            </div>
                        </div>
                  <!-- Icon end-->
                    </div>
                </div>
            <!-- Follow us end -->
             </section>
        
             <section id="footer">
            <!-- Footer -->
            <div class="w-100 ">
              <div class="w-100 ft-bg d-flex flex-column justify-content-center align-items-center text-white pt-5">
        
                <p class="text-center">4037 SOUTH BLYD CHARLOTTE, NC &#10242; 704-554-6601 704-554-6602</p>
        
                <div
                    class="col-md-6 d-flex flex-wrap justify-content-center align-items-center p-3">
                    <span class="p-4 text-uppercase menu">Home</span>
                    <span class="p-4 text-uppercase menu">Catering Menu</span>
                    <span class="p-4 text-uppercase menu">Contact</span>
                    <span class="p-4 text-uppercase menu">Hiring</span>
                  </div>
        
                  <p class="text-center">&#169; 500degreespizzeria &#10242;  All rights reserved &#10242; Design by Nabila </p>
              </div>
            </div>
        
            <!-- Footer end -->
            </section>
        <div>
    


<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</body>
</html>