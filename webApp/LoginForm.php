<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" rel="stylesheet"/>
    <link href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700&display=swap" rel="stylesheet"/>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/7.3.2/mdb.min.css" rel="stylesheet"/>
    <link rel="stylesheet" href="login.css"/>
    <title>Login Page</title>
</head>
<body>
    <section class="h-100 gradient-form" style="background-color: #eee;">
        <div class="container py-5 h-100">
            <div class="row d-flex justify-content-center align-items-center h-100">
                <div class="col-xl-10">
                    <div class="card rounded-3 text-black">
                        <div class="row g-0">
                            <div class="col-lg-6">
                                <div class="card-body p-md-5 mx-md-4">
                                    <div class="text-center">
                                        
                                        <h4 class="mt-1 mb-5 pb-1">Sign In</h4>
                                    </div>
                                    <form id="loginForm" action="login.php" method="POST">
                                        <p>Please login to your account</p>
                                        <div data-mdb-input-init class="form-outline mb-4">
                                            <input type="email" id="email" class="form-control" placeholder="Phone number or email address" name="email" />
                                            <label class="form-label" for="email">Username</label>
                                            <span id="emailError" class="error-message"></span>
                                        </div>
                                        <div data-mdb-input-init class="form-outline mb-4">
                                            <input type="password" id="password" class="form-control" name="password" />
                                            <label class="form-label" for="password">Password</label>
                                            <span id="passwordError" class="error-message"></span>
                                        </div>
                                        <div class="text-center pt-1 mb-5 pb-1">
                                            <button type="submit" class="btn btn-primary btn-block fa-lg gradient-custom-2 mb-3">Log in</button>
                                            <a class="text-muted" href="#!">Forgot password?</a>
                                        </div>
                                        <div class="d-flex align-items-center justify-content-center pb-4">
                                            <p class="mb-0 me-2">Don't have an account?</p>
                                            <button type="button" class="btn btn-outline-danger" onclick="window.location.href='registrationform.php'">Create new</button>
                                        </div>
                                    </form>
                                </div>
                            </div>
                            <div class="col-lg-6 d-flex align-items-center gradient-custom-2">
                                <div class="text-white px-3 py-4 p-md-5 mx-md-4">
                                    <h4 class="mb-4">We are more than just a company</h4>
                                    <p class="small mb-0">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                                        tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud
                                        exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/7.3.2/mdb.umd.min.js"></script>
    <script src="Login.js"></script>
</body>
</html>
