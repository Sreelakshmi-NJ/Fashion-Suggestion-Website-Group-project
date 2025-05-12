<?php
include'top_menu.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Body Type Calculator</title>
    

    <style>
        body {background-image: url('images/body1.jpg');
            background-size: contain;  
            font-family: Arial, sans-serif;
            background-color: ;
            height: 100vh;
            margin: 0;
            
           

        }
        .calculator-form {
            margin-top: 30px;
	     margin-left: 30%;
            max-width: 600px;
            
            background: rgba(255, 255, 255, 0.2);
            padding: 30px;
            border-radius: 5px;
            box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.1);
        }
        .calculator-form h2 {
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
        .form-control input[type="number"] {
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
        .result {
            margin-top: 20px;
            padding: 10px;
            border: 1px solid #ddd;
            border-radius: 4px;
            background-color: #f9f9f9;
        }
        #special-button {
            margin-top: 20px;
            background-color:grey;
            margin-left:45%;
        }

    </style>
</head>
<body>
    <div class="calculator-form">
        <h2>Body Type Calculator</h2>
        <form action="" method="post">
            <div class="form-control">
                <label for="bust-size">Bust Size (cm)</label>
                <input type="number" id="bust-size" name="bust_size" required>
            </div>
            <div class="form-control">
                <label for="waist-size">Waist Size (cm)</label>
                <input type="number" id="waist-size" name="waist_size" required>
            </div>
            
            <div class="form-control">
                <label for="hip-size">Hip Size (cm)</label>
                <input type="number" id="hip-size" name="hip_size" required>
            </div>
            <div class="form-control">
                <label for="shoulder-size">shoulder Size (cm)</label>
                <input type="number" id="shoulder_size" name="shoulder_size" required>
            </div>
            <div class="form-control">
                <button type="submit">Calculate</button>
            </div>
        </form>
        <div id="result" class="result">
<?php
include 'mp_connect.php';

if ($_SERVER['REQUEST_METHOD']=='POST')
 {    // if Form is submitted

// Get input values
$bust = $_POST['bust_size'];
$waist = $_POST['waist_size'];
$shoulders= $_POST['shoulder_size'];
$hips = $_POST['hip_size'];



// Determine body type based on ratios
$bodyType = '';

if (abs($shoulders - $hips) <= 2 && abs($bust - $hips) <= 2 && $waist < $bust && $waist < $hips) {
    $bodyType="Hour glass";
} elseif ($hips > $bust && $hips > $shoulders) {
    $bodyType= "Pear";
} elseif ($bust > $hips && $bust > $shoulders) {
    $bodyType="Apple";
} elseif ($shoulders > $hips && $shoulders > $bust) {
    $bodyType="Inverted Triangle";
} elseif (abs($bust - $hips) <= 2 && abs($shoulders - $hips) <= 2 && abs($waist - $bust) <= 2) {
    $bodyType="Rectangle";
} else {
    $bodyType="Rectangle";
}
echo $bodyType;
if (isset($_SESSION['name'])) { 
$id=$_SESSION['userid'];
$sql = "UPDATE profile
       SET BodyType = '$bodyType'
        WHERE id = '$id'";
$result = mysqli_query($conn, $sql);
}
}




?>

</div>
    </div>
    <script>
    function goBack() {
        window.history.back();
    }
    </script>
        <button id="special-button"  onclick="goBack()">Go Back</button>
    
</body>
</html>
