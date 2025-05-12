<?php
include'top_menu.php';
?>

<html >
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Sign Up</title>
<style>
    body {
      background-image: url('images/bg4.jpg');
      background-size: contain;

        font-family: Arial, sans-serif;
        background-color: #f0f0f0;
        height: 100vh;
            margin: 0;

        
    }
    .signup-form {
        background:rgba(255, 255, 255, 0.2) ;
        max-width: 400px;
        margin-top:70px;
        margin-left:35% ;
        
        padding: 30px;
        border-radius: 5px;
        box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.1);
    }
    .signup-form h2 {
        text-align: center;
        margin-bottom: 30px;
    }
    .form-control {
        margin-bottom: 20px;
    }
    .form-control label {
        display: block;
        font-weight: bold;
        margin-bottom: 5px;
    }
    .form-control input {
        width: 100%;
        padding: 8px;
        border: 1px solid #ddd;
        border-radius: 4px;
    }
    .form-control button {
        width: 100%;
        padding: 10px;
        border: none;
        background-color: #4CAF50;
        color: white;
        cursor: pointer;
        border-radius: 4px;
    }
    .form-control button:hover {
        background-color: #45a049;
    }
</style>
</head>
<body background="logbg.jpg" >
    <div class="signup-form">
        <h2>Sign Up</h2>
        <form  method="POST" action="">
            <div class="form-control">
                <label for="username">Username</label>
                <input type="text" id="username" name="username" required>
            </div>
            <div class="form-control">
                <label for="password">Password</label>
                <input type="password" id="password" name="password" required>
            </div>
            <div class="form-control">
                <label for="email">Email Address</label>
                <input type="email" id="email" name="email" required>
            </div>
            <div class="form-control">
                <button type="submit">Sign Up</button>
            </div>
<?php
require("mp_connect.php");  
if ($_SERVER['REQUEST_METHOD']=='POST') 
{    

    $name = $_POST['username'];
    $password = $_POST['password'];
    $email = $_POST['email'];

    $sql="Select * from signup where Email='$email'";
    $result=mysqli_query($conn,$sql);
    if (mysqli_num_rows($result)>0)
    {  
       echo"Already registered mailid";
    }
       
    
    
    else
    { 
      $hashed_password = password_hash($password, PASSWORD_DEFAULT);

      // Insert user data
      $query = "INSERT INTO signup (id,Username, Password, Email) VALUES ('','$name', '$hashed_password', '$email')";
      $result1 = mysqli_query($conn, $query);
      $sql="Select * from signup where Email='$email'";
      $result=mysqli_query($conn,$sql);
      $row = $result->fetch_assoc();
      $id=$row['id'];
      echo $id;

      if ($result)
      {   
          $query2 = "INSERT INTO profile VALUES (NULL, '$id', '', '', '', '', '', '', '','','','','')";
          $result2 = mysqli_query($conn, $query2);
          
          
          header('Location: mp_login.php');
      } else 
      {
          echo 'Sign up Error';
      }
    }  
}

?>


        </form>
    </div>

</body>
</html>