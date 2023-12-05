<html>
    <head>
        <title></title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    </head>
    <body>
        <section class="vh-100">
            <div class="container py-5 h-100">
              <div class="row d-flex align-items-center justify-content-center h-100">
                <div class="col-md-8 col-lg-7 col-xl-6">
                  <img src="pictlogin.svg"
                    class="img-fluid" alt="Phone image">
                </div>
                <div class="col-md-7 col-lg-5 col-xl-5 offset-xl-1">
                  <form action="proses_login.php" method="POST">
                    <!-- Email input -->
                    <h2>Log In Toko Nabila</h2>
                    <div class="form-outline mb-4">
                      <input type="text" id="username" name='username' class="form-control form-control-lg" />
                      <label class="form-label" for="username">Username</label>
                    </div>
          
                    <!-- Password input -->
                    <div class="form-outline mb-4">
                      <input type="password" id="password" name='password' class="form-control form-control-lg" />
                      <label class="form-label" for="password">Password</label>
                    </div>
          
                    <!-- Submit button -->
                    <button type="submit" class="btn btn-primary btn-lg btn-block">Log in</button>
                  </form>
                </div>
              </div>
            </div>
          </section>
    </body>
</html>