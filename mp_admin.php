<html>
<head>
 <link rel="stylesheet" href="style2.css">
 <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css"> 
    <link rel="stylesheet" href="../assets/css/styles.css"> 
<style>
         body { background-image: url('images/adminbg2.jpg');
            background-size: contain; 
           
         }
         .container {
            width: 80%;
            margin: 0 auto;
            padding: 20px;
             background-color: rgba(255, 255, 255, 0.2);
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            border-radius: 8px;
            margin-top: 50px;
            margin-right:30%
        }
        .card{
                background-color: rgba(255, 255, 255, 0.2);
                box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);     
        }
        .btn{   background-color:grey
                
        }
        .btn:hover {
         background-color: dimgrey; 
           }
           .btn:active {
            background-color: darkgrey;
        } 

</style>

</head>
<body>

<?php
include 'mp_atopmenu.php';
?>

 

<main>
<div class="container mt-5"> 
        <h1 class="mb-4">Admin Dashboard</h1>
        <div class="row">
            <div class="col-md-6 mb-4"> 
                <div class="card h-100"> 
                    <div class="card-body">
                        <h5 class="card-title">Manage Users</h5>
                        <a href="mp_diplaysignup.php" class="btn btn-primary">To Manage Users</a>
                    </div>
                </div>
            </div>
            <div class="col-md-6 mb-4"> 
                <div class="card h-100">
                    <div class="card-body">
                        <h5 class="card-title">Manage Outfits</h5>
                        <a href="mp_outfitdis.php" class="btn btn-primary">To Manage Outfits</a>
                    </div>
                </div>
            </div>
            <div class="col-md-6 mb-4"> 
                <div class="card h-100">
                    <div class="card-body">
                        <h5 class="card-title">Manage Hairstyles</h5>
                        <a href="mp_hairst.php" class="btn btn-primary">To Manage Hairstyles</a>
                    </div>
                </div>
            </div>
            <div class="col-md-6 mb-4"> 
                <div class="card h-100">
                    <div class="card-body">
                        <h5 class="card-title">Manage Skincare</h5>
                        <a href="mp_skindis.php" class="btn btn-primary">To Manage Skincare</a>
                    </div>
                </div>
            </div>
        </div>
    </div>

</main>



</body>
</html>