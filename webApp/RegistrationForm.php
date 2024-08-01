<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" rel="stylesheet"/>
    <link href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700&display=swap" rel="stylesheet"/>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/7.3.2/mdb.min.css" rel="stylesheet"/>
    <link rel="stylesheet" href="Registration.css"/>
    <title>Sign Up Page</title>
    <style>
        .gradient-custom-signup {
            background: linear-gradient(to right, #ec008c, #fc6767);
            border: none;
        }
        .error-message {
            color: red;
            font-size: 0.875rem;
        }
    </style>
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
                                        <h4 class="mt-1 mb-5 pb-1">Sign Up</h4>
                                    </div>
                                    <form id="signupForm" action="registration.php" method="POST">
                                        <p>Create your account</p>
                                        <div data-mdb-input-init class="form-outline mb-4">
                                            <input type="text" id="firstName" class="form-control" name="first_name" required />
                                            <label class="form-label" for="firstName">First Name</label>
                                            <span id="firstNameError" class="error-message"></span>
                                        </div>
                                        <div data-mdb-input-init class="form-outline mb-4">
                                            <input type="text" id="lastName" class="form-control" name="last_name" required />
                                            <label class="form-label" for="lastName">Last Name</label>
                                            <span id="lastNameError" class="error-message"></span>
                                        </div>
                                        <div data-mdb-input-init class="form-outline mb-4">
                                            <input type="email" id="email" class="form-control" placeholder="Email address" name="email" required />
                                            <label class="form-label" for="email">Email</label>
                                            <span id="emailError" class="error-message"></span>
                                        </div>
                                        <div data-mdb-input-init class="form-outline mb-4">
                                            <input type="password" id="password" class="form-control" name="password" required />
                                            <label class="form-label" for="password">Password</label>
                                            <span id="passwordError" class="error-message"></span>
                                        </div>
                                        <div data-mdb-input-init class="form-outline mb-4">
                                            <input type="password" id="confirmPassword" class="form-control" name="confirm_password" required />
                                            <label class="form-label" for="confirmPassword">Confirm Password</label>
                                            <span id="confirmPasswordError" class="error-message"></span>
                                        </div>
                                        <div class="text-center pt-1 mb-5 pb-1">
                                            <button type="submit" class="btn btn-primary btn-block fa-lg gradient-custom-signup mb-3">Sign Up</button>
                                        </div>
                                        <div class="d-flex align-items-center justify-content-center pb-4">
                                            <p class="mb-0 me-2">Already have an account?</p>
                                            <button type="button" class="btn btn-outline-danger" onclick="window.location.href='loginForm.php'">Log in</button>
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
</body>
</html>
