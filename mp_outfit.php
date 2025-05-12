<?php
include 'top_menu.php'; // Including the top menu
include 'mp_connect.php'; 

$message = '';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $bodyType = trim($_POST['bodyType']);

    $normalizedBodyType = strtolower($bodyType);
    
    // Prepare the SQL query to fetch the OutfitLink based on the body type
    $stmt = $conn->prepare("SELECT OutfitLink FROM outfit WHERE BodyType = ?");
    $stmt->bind_param("s", $normalizedBodyType); // Bind the normalized body type to the query
    $stmt->execute();
    $stmt->bind_result($outfitLink);
    $stmt->store_result();

    if (isset($_SESSION['name'])) { 
        $id = $_SESSION['userid'];
        $stmt->fetch();
        // Insert the user data into the database
        $sql = "UPDATE profile SET outfit_url='$outfitLink' WHERE id='$id'";
        $conn->query($sql);
    }

    if ($stmt->num_rows > 0) {
        $stmt->fetch(); 
        header("Location: $outfitLink"); // Redirect to the fetched link
        exit();
    } else {
        // If no match is found in the database
        $message = "Invalid body type. Please enter a valid option from: Hour Glass, Inverted Triangle, Apple, Rectangle, Pear Shaped.";
    }

    $stmt->close(); // Close the statement
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Outfit Suggestions</title>
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    
    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;600&display=swap" rel="stylesheet">
    
    <!-- Font Awesome Icons -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    
    <link rel="stylesheet" href="style.css">
    <style>
    body {
        font-family: 'Montserrat', sans-serif;
        background-image: url('WhatsAp.jpeg'); /* Background image */
        background-size: cover;
        background-repeat: no-repeat;
        background-attachment: fixed;
        color: #333;
    }

    .container {
        margin-top: 100px; /* Increased margin to move the box further down */
        max-width: 700px;
        background: rgba(255, 255, 255, 0.5); /* Adjusted transparency (0.7) for better blending */
        padding: 20px;
        border-radius: 10px;
        box-shadow: 0px 4px 6px rgba(0, 0, 0, 0.1); /* Subtle shadow for a cleaner look */
    }


    h2 {
        font-weight: 600;
        color: #007bff;
        margin-bottom: 30px;
    }

    .form-group label {
        font-weight: 500;
    }

    .form-control {
        border-radius: 8px;
        padding: 10px;
        font-size: 16px;
    }

    .btn-primary {
        background-color: #007bff;
        border: none;
        padding: 10px;
        font-size: 18px;
        transition: background-color 0.3s ease;
    }

    .btn-primary:hover {
        background-color: #0056b3;
    }

    .btn-block {
        padding: 10px;
        font-size: 18px;
        border-radius: 10px;
    }

    #back-box {
        margin-top: 20px;
        text-align: center;
        background-color: rgba(0, 123, 255, 0.1); /* Light blue background */
        padding: 10px;
        border: 1px solid #007bff;
        border-radius: 10px;
    }

    #back-box a {
        color: #007bff;
        text-decoration: none;
        font-size: 16px;
        font-weight: 500;
    }

    #back-box a:hover {
        text-decoration: underline;
    }
</style>

</head>
<body>
    
<main class="container">
    <h2>Outfit Suggestions</h2>
    <form action="" method="post">
        <div class="form-group">
            <label for="bodyType">Enter Your Body Type:</label>
            <input type="text" id="bodyType" name="bodyType" placeholder="Hour Glass, Inverted Triangle, Apple, Rectangle, Pear Shaped" required class="form-control">
        </div>
        <input type="submit" value="Submit" class="btn btn-primary btn-block">
    </form>
    <?php
    // Display the warning message if it exists
    if (!empty($message)) {
        echo "<p style='color:red;'>$message</p>";
    }
    ?>
    <div id="links">
        <p>If you do not know your body type, you can <a href="mp_bodytypecalculator.php">calculate it here</a>.</p>
    </div>
    <div id="back-box">
        <a href="index.php">Go Back</a>
    </div>
</main>

</body>
</html>