<?php
    include('../config.php');
    session_start();
    error_reporting(0);
    $status = $_SESSION["status"];
    $msg = $_SESSION["msg"];
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login or Register</title>
    <link rel="stylesheet" href="../assets/css/styles.css">
    <link rel="stylesheet" href="../assets/bootstrap/css/bootstrap.min.css">
    <link rel="canonical" href="https://getbootstrap.com/docs/4.5/examples/carousel/">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Abhaya+Libre">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Abril+Fatface">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/Swiper/3.3.1/css/swiper.min.css">
    <link rel="stylesheet" href="../assets/css/styles.min.css">
    <link rel="stylesheet" href="../assets/css/bootstrap.css">
    <link rel="stylesheet" href="../assets/css/form.css">
    <style>
        .backbtn{
            width: 50% !important;
        }
    </style>
    <script>
        document.getElementById('button').style.border = "1px solid blue";
    </script>
</head>
<body>
  
  <!--Login and register page-->
    <div class="container mt-4">
        <div class="row">
        <div class="col-md-6">
            <div class="card">
                <div class="card-body">
                    <h2 style="text-align: center;text-shadow: 2px 2px #000000;">Register now!</h2>
                    <?php
                        if(!empty($status)) {
                    ?>
                    <?php
                        if ($status == "error") {
                    ?>
                    <div class="alert alert-danger"><?php echo $msg; ?></div>
                    <?php
                        }
                    ?>
                    <?php
                        if ($status == "success") {
                    ?>
                    <div class="alert alert-success"><?php echo $msg; ?></div>
                    <?php
                        }
                    ?>
                    <?php
                        $status = "";    
                        }
                    ?>
                    <form action="register.php" method="POST" enctype="multipart/form-data">
                        <div class="form-group">
                            <label for="name">Name</label>
                            <input type="text" id="name" name="name" placeholder="Name" class="form-control" required/>  
                        </div>
                        <div class="form-group">
                            <label for="uname">Username</label>
                            <input type="text" id="username" name="username" placeholder="User Name" class="form-control" pattern="[a-z]{1,15}" title="Username should only contain lowercase letters and numbers. e.g. john" required/>  
                        
                        </div>
                        <div class="form-group">
                            <label for="email">Email</label>
                            <input type="email" id="email" name="email" placeholder="Email" class="form-control" required/>  
                        </div>
                        <div class="form-group">
                            <label for="password">Password</label>
                            <input type="password" id="password" name="password" placeholder="Password" class="form-control" pattern=".{8,}" title="Eight or more characters" required/>  
                        </div>
                        <div class="form-group">
                            <label for="password2">Confirm Password</label>
                            <input type="password" id="password2" name="password2" placeholder="Confirm Password" class="form-control" required/>  
                        </div>
                            <button type="submit" id="button" class="mt-4">Register</button>
                    </form>
                </div>
            </div>
        </div>
        <div class="col-md-6">
            <div class="card">
                <div class="card-body">
                    <h2 style="text-align: center;text-shadow: 2px 2px #000000;">Login</h2>
                    <?php
                        if(!empty($status)){
                    ?>
                    <?php
                        if($status == "logged") {
                    ?>
                    <div class="alert alert-danger"><?php echo $msg; ?></div>
                    <?php
                        }
                    ?>
                    <?php
                        if ($status == "error2") {
                    ?>
                    <div class="alert alert-primary"><?php echo $msg; ?></div>
                    <?php
                        }
                    ?>
                    <?php
                        }
                    ?>
                    <form action="login.php" method="POST" enctype="multipart/form-data">
                        <div class="form-group">
                            <label for="username">Username</label>
                            <input type="text" id="username" name="username" class="form-control" placeholder="Your username" required>
                        </div>
                        <div class="form-group">
                            <label for="password">Password</label>
                            <input type="password" id="password" name="password" class="form-control" placeholder="Password" required>
                        </div>
                            <button type="submit" id="button" class="mt-4">Login</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
    </div><br/>

    <div style="text-align: center;">
        <button onClick="window.location.href='../index.html'" class="backbtn">Back to the home page</button>
    </div><br/>
<!--Scripts-->
<script src="../assets/js/invalid_msg.js"></script>
</body>
</html>