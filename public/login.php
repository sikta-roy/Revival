<!DOCTYPE html>
<html>
<head>
  <link rel="icon" href="favicon0.ico" type="image/x-icon">
    <title>Patient Login</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="patient_login.css">
</head>
<body>
    <div class="container mt-5">
        <form method="post" action="login_action.php">
        <h1 class="text-center">Patient Login</h1>
        <div class="row justify-content-center">
            <div class="col-md-4">
               <div class="form-container">
                <form id="doc" action="process_patient_login.php" method="post">

                    <div class="form-group">
                        <label for="email">Email:</label>
                        <input type="email" class="form-control" id="email" name="email" required>
                    </div>

                    <div class="form-group">
                        <label for="password">Password:</label>
                        <input type="password" class="form-control" id="password" name="password" required>
                    </div>
                    
                    <button type="submit" value="LOGIN" class="btn btn-success btn-block">Login</button>
                </form>
                <p class="text-center mt-3">Don't have an account? <a href="patient_signup.html">Sign Up</a></p>
            </div>
        </div>
    </div>
    </div>
</body>
</html>