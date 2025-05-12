<?php
include'top_menu.php';
?>
<html>
<head>
<link rel="stylesheet" href="style2.css">

    <title>Login Page</title>
    <style>
        body {background-image: url('images/bg1.jpg');
 		
            background-size: contain; 
            font-family: Arial, sans-serif;
            background-color: #f0f0f0;
            

            
            height: 100vh;
            margin: 0;
        }
        .login-container {
            background-color:rgba(255, 255, 255, 0.2) ;
            margin-top: 5%;
            margin-left: 35%;
            padding: 20px;
            border-radius: 5px;
            box-shadow: 0px 0px 10px 0px rgba(0,0,0,0.1);
            width: 300px;
            text-align: center;
        }
        .login-container h2 {
            margin-bottom: 20px;
        }
        .form-group {display: flex;
            margin-bottom: 15px;
             
        }
        .form-group input {
            width: calc(100% - 20px);
            padding: 10px;
            border: 1px solid #ccc;
            border-radius: 3px;
            font-size: 14px;
        }
        .form-group input:focus {
            outline: none;
            border-color: #007bff;
        }
        .form-group .form-control {
            width: 100%;
        }
        .form-group .btn {
            width: 100%;
            padding: 10px;
            background-color: #007bff;
            border: none;
            color: #ffffff;
            cursor: pointer;
            border-radius: 3px;
            font-size: 14px;
        }
        .form-group .btn:hover {
            background-color: #0056b3;
        }
        .signup-link {
            margin-top: 10px;
        }
        .signup-link a {
            color: #007bff;
            text-decoration: none;
        }
        .signup-link a:hover {
            text-decoration: underline;
        }
    </style>
</head>
<body>





<main>
    <div class="login-container">
        <h2>Login</h2>
        <form  method="POST" action="">
      

              <div class="form-group">
                <input type="text" class="form-control" name="username" autocomplete="off" placeholder="Name" required>
              </div>
            <div class="form-group">
                <input type="email" class="form-control" name="email" placeholder="Email" required>
            </div>

            <div class="form-group">
                <input type="password" class="form-control" name="password" autocomplete="off" placeholder="Password" required>
            </div>
            <div class="form-group">
                <button type="submit" class="btn">Login</button>
            </div>
        </form>
        
        <?php

include 'mp_connect.php';

if ($_SERVER['REQUEST_METHOD'] == 'POST') { // if Form is submitted

    $p_name = $_POST['username'];
    $p_password = $_POST['password'];
    $p_email = $_POST['email'];

    $query = "SELECT * FROM signup WHERE Email = '$p_email' AND Username='$p_name'";
    $result = mysqli_query($conn, $query);

    if (mysqli_num_rows($result) > 0) {
        $row = $result->fetch_assoc();
        $stored_password = $row['Password'];

        // Verify the hashed password
        if (password_verify($p_password, $stored_password)) {
            $_SESSION['name'] = $row['Username'];
            $_SESSION['userid'] = $row['id'];

            if ($row['role'] == 'user') {
                header('Location: index.php');
            } else {
                header('Location: mp_admin.php');
            }
        } else {
            echo "Invalid credentials";
        }
    } else {
        echo "Invalid credentials";
    }
}
?>




<div class="signup-link">
<p>Don't have an account? <a href="mp_register.php">Sign Up</a></p>
</div></main>
 <!-- JAVASCRIPT FILES -->
        <script src="js/jquery.min.js"></script>
        <script src="js/bootstrap.bundle.min.js"></script>
        <script src="js/jquery.sticky.js"></script>
        <script src="js/custom.js"></script>



</body>
</html>
