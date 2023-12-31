<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>singUP</title>
    <link rel="stylesheet" href="./css/bootstrap-5.3.2-dist/css/bootstrap.min.css" />
    <link rel="stylesheet" href="./css/singup.css" />
    <meta http-equiv="Content-Security-Policy"
        content="default-src 'self'; script-src 'self' https://code.jquery.com https://cdn.jsdelivr.net; style-src 'self' https://cdn.jsdelivr.net" />
</head>

<body>
    <div class="container row d-flex justify-content-center align-items-center h-100 mt-3">
        <div class="card bg-dark text-white bRadius col-12 col-md-8 col-lg-6 col-xl-5">
            <div class="card-body p-5 text-center">
                <div class="mb-md-5 mt-md-4 pb-1">
                    <h2 class="fw-bold mb-5 text-uppercase">SING UP</h2>
                    <form action="./singupAdd.php" method="POST">
                        <div class="form-floating form-white mb-4">
                            <input type="text" id="name" name="name" class="form-control form-control-lg" />
                            <label class="form-label" for="name">full name</label>
                        </div>
                        <div class="form-floating form-white mb-4">
                            <input type="text" id="username" name="username" class="form-control form-control-lg" />
                            <label class="form-label" for="username">Username</label>
                        </div>
                        <div class="form-floating form-white mb-4">
                            <input type="text" id="email" name="email" class="form-control form-control-lg" />
                            <label class="form-label" for="email">email</label>
                        </div>
                        <div class="form-floating form-white mb-4">
                            <input type="password" id="password" name="password" class="form-control form-control-lg" />
                            <label for="password">Password</label>
                        </div>

                        <div class="form-floating form-white">
                            <input type="password" id="password2" name="rePassword"
                                class="form-control form-control-lg" />
                            <label for="password2">Retype the password</label>
                        </div>

                        <button class="btn btn-outline-light btn-lg px-5 mt-5" type="submit" name="submit">
                            Sign Up
                        </button>
                    </form>
                </div>

                <div>
                    <a href="./login.php" class="text-white-50 fw-bold">login</a>
                </div>
            </div>
        </div>
    </div>
    <script src="./css/bootstrap-5.3.2-dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>