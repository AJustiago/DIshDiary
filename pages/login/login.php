    <!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Dish Diary</title>
        <link rel="stylesheet" href="login.css">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" media="all">
    </head>
    <body>
        <div class="row">
            <div class="col-6 pt-5 pb-3">
                <form action="" class="form-container pt-5">
                    <h1 class="text-center"><b>DishDiary</b></h1>

                    <?php $isRegister = true; ?>
                    <div class="row mt-5 pt-5" id="form-login" <?php echo $isRegister ? 'style="display: none;"' : 'style="display: block;"'; ?>>
                        <div class="col-12">
                            <h2><span class="color-primary">LOGIN</span> NOW</h2>
                            <input type="text" class="form-control mb-4 mt-4" placeholder="Enter your email or username"/>
                            <input type="password" class="form-control mt-1" placeholder="Enter your password"/>
                        </div>

                        <div class="col-12 mt-4 d-flex align-items-center justify-content-between">
                            <span>don't have an account? &nbsp &nbsp  <a href="">Register here!</a></span>
                            <div class="btn btn-danger btn-login float-right">Log in</div>
                        </div>
                    </div>

                    <div class="row mt-5 pt-3" id="form-register" <?php echo $isRegister ? 'style="display: block;"' : 'style="display: none;"'; ?>>
                        <div class="col-12">
                            <h2><span class="color-primary">REGISTER</span></h2>
                            <input type="text" class="form-control mb-4 mt-4" placeholder="Enter username"/>
                            <input type="text" class="form-control mb-4 mt-4" placeholder="Enter your email"/>
                            <input type="password" class="form-control mt-1" placeholder="Enter your password"/>
                        </div>

                        <div class="col-12 mt-4 d-flex align-items-center justify-content-between">
                            <span>Already have an account? &nbsp &nbsp  <a href="">Log in!</a></span>
                            <div class="btn btn-danger btn-login float-right">Register</div>
                        </div>
                    </div>
                </form>
            </div>
            <div class="col-6 bg-img">

            </div>
        </div>


    </body>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    </html>