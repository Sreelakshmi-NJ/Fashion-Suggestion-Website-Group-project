<?php

include 'mp_connect.php';
include 'top_menu.php';


$id=$_SESSION['userid'];
$sql = "SELECT  * FROM profile,signup WHERE profile.id = '$id' AND profile.id=signup.id";
$result = mysqli_query($conn, $sql);
$row = $result->fetch_assoc();
$link=($row['outfit_url']);

if ($_SERVER['REQUEST_METHOD'] == 'POST') { // if Form is submitted

    
    $body_type = $_POST["body_type"];
    $eye_color = $_POST["eye_color"];
    $hair_color = $_POST["hair_color"];
    $undertone = $_POST["undertone"];
    $skin_tone = $_POST["skin_tone"];
    $face_shape = $_POST["face_shape"];

    // Prepare and execute the SQL statement to insert data into the profile table
    $sql = "UPDATE profile SET BodyType='$body_type', EyeColour='$eye_color', HairColour='$hair_color', UnderTone='$undertone', SkinTone='$skin_tone', FaceShape='$face_shape' WHERE id='$id'";
    $result = mysqli_query($conn, $sql);
    if($result)
    {echo "updated succesfully";}
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>User Profile</title>
    <style>
        body { background-image: url('images/fashion.jpg');
            background-size: contain; 
            font-family: Arial, sans-serif;
            background-color: #f4f4f9;
            color: #333;
            margin: 0;
            padding: 0;
        }
        .container {
            width: 80%;
            margin: 0 auto;
            padding: 20px;
             background-color: rgba(255, 255, 255, 0.2);
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            border-radius: 8px;
            margin-top: 50px;
        }
        h2 {
            
            color: Black;
        }
        p {
            font-size: 18px;
            line-height: 1.6;
        }
        .profile-item {
            margin-bottom: 15px;
        }
        .profile-item strong {
            color: #4CAF50;
        }
        input[type="text"] {
    background-color: rgba(255, 255, 255, 0.2); /* Set background color to transparent */
    border: none; /* Remove border */
    color: #000; /* Set text color */
    padding: 5px; /* Add padding for readability */
}
button{
    background-color: rgba(255, 255, 255, 0.3); /* Set background color to transparent */
    border: none; /* Remove border */
    color: #000; /* Set text color */
    padding: 5px; /* Add padding for readability */

}
    </style>
</head>
<body>
    <div class="container">
    <h2>Profile</h2>

    <form method="post" action="">
    <div class="profile-item">
        <strong>Username:</strong> <?php echo htmlspecialchars($row['Username']); ?>
    </div>

    <div class="profile-item">
        <strong>Body Type:</strong>
        <input type="text" name="body_type" value="<?php echo htmlspecialchars($row['BodyType']); ?>" placeholder="Enter your body type">
        <a href="mp_bodytypecalculator.php">To Find Your Body Type</a>
    </div>

    <div class="profile-item">
        <strong>Eye Color:</strong>
        <input type="text" name="eye_color" value="<?php echo htmlspecialchars($row['EyeColour']); ?>" placeholder="Enter your eye color">
        <a href="newquiz.php">Take the survey</a>
    </div>

    <div class="profile-item">
        <strong>Hair Color:</strong>
        <input type="text" name="hair_color" value="<?php echo htmlspecialchars($row['HairColour']); ?>" placeholder="Enter your hair color">
        <a href="newquiz.php">Take the survey</a>
    </div>

    <div class="profile-item">
        <strong>Undertone:</strong>
        <input type="text" name="undertone" value="<?php echo htmlspecialchars($row['UnderTone']); ?>" placeholder="Enter your undertone">
        <a href="newquiz.php">Take the survey</a>
    </div>

    <div class="profile-item">
        <strong>Skin Tone:</strong>
        <input type="text" name="skin_tone" value="<?php echo htmlspecialchars($row['SkinTone']); ?>" placeholder="Enter your skin tone">
        <a href="newquiz.php">Take the survey</a>
    </div>

    <div class="profile-item">
        <strong>Face Shape:</strong>
        <input type="text" name="face_shape" value="<?php echo htmlspecialchars($row['FaceShape']); ?>" placeholder="Enter your face shape">
        <a href="hairstyleinput.php">To set Your FaceShape</a>
    </div>

    <button type="submit">Update Profile</button>
</form>
    <script>
    function goBack() {
        window.history.back();
    }
</script>
        <button onclick="goBack()">Go Back</button>
</body>
</html>

