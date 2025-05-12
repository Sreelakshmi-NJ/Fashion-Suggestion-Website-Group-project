<?php
include 'top_menu.php';

include 'mp_connect.php';


// Get the selected skin type from the POST request (radio button selection)
$skinType = $_POST['skinType'];
if (isset($_SESSION['name'])) { 
    $id=$_SESSION['userid'];
    
    // Insert the user data into the database
    $sql = "UPDATE profile
           SET  SkinType='$skinType', where id='$id'" ;
    $conn->query($sql);}

// Prepare the query to check if the skin type exists in the database
$query = "SELECT * FROM SkinType WHERE skinType = ?";
$stmt = $conn->prepare($query);
$stmt->bind_param("s", $skinType);
$stmt->execute();
$result = $stmt->get_result();

// Check if the skin type exists
if ($result->num_rows > 0) {
    $skinData = $result->fetch_assoc();
    $skin=$skinData['skintype_url'];
    header("Location: $skin");

    
} else {
    echo "No data found for this skin type.";
}

$stmt->close();
$conn->close();
?>
