<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Register</title>
    <link href="/FP_PWL/admin/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="/FP_PWL/admin/css/login.css">
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700&family=Poppins:wght@300;400;600&display=swap');
    </style>
</head>

<body>
    <div class="container">
        <div class="logo">
            <img src="/FP_PWL/admin/img/logo2.svg" alt="" width="40%">
        </div>
        <div class="row g-0">
            <div class="col-md-4 login-img">
                <img src="/FP_PWL/admin/img/montir.png" class="img-fluid rounded-start" alt="mhs">
            </div>
            <div class="col-md-8">
                <div class="card-body">
                    <h2 class="mb-5">Create an account</h2>
                    <div>
                        <form action="register_action.php" method="post">
                            <!-- Add your registration form fields here -->
                            <div class="mb-3">
                                <label for="name" class="form-label">Username :</label>
                                <input type="text" class="form-control" id="username" name="txtName" placeholder="Enter your full name" required>
                            </div>
                            <div class="mb-3">
                                <label for="email" class="form-label">Email :</label>
                                <input type="email" class="form-control" id="email" name="txtEmail" placeholder="Enter your email" required>
                            </div>
                            <div>
                                <label for="password" class="form-label">Password :</label>
                                <div class="position-relative">
                                    <input type="password" id="password" name="txtPassword" class="form-control" placeholder="Enter your password" required>
                                    <span class="toggle-password" onclick="togglePasswordVisibility()"><img class="position-absolute" src="/FP_PWL/admin/img/eye.svg" alt="Toggle Password"></span>
                                </div>
                            </div>
                            <!-- Add any other registration form fields as needed -->

                            <button type="submit" class="btn">Register</button>
                            <div class="afterreg">
                                <p>Already have an account? <a href="login.php" class="no-underline">Login here</a></p>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script src="/FP_PWL/admin/js/bootstrap.min.js"></script>
    <script src="/FP_PWL/admin/js/main.js"></script>
</body>

</html>
