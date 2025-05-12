
<?php
include 'mp_connect.php';

include 'top_menu.php';

 
$selected_eye = isset($_POST['q1']) ? $_POST['q1'] : null;
$selected_hair = isset($_POST['q2']) ? $_POST['q2'] : null;
$selected_undertone = isset($_POST['q3']) ? $_POST['q3'] : null;
$selected_skin = isset($_POST['skin-tone']) ? $_POST['skin-tone'] : null;

if (isset($_SESSION['name'])) { 
    $id=$_SESSION['userid'];
    
    // Insert the user data into the database
    $sql = "UPDATE profile
           SET  EyeColour='$selected_eye', HairColour='$selected_hair', UnderTone='$selected_undertone', SkinTone='$selected_skin' where id='$id'" ;
    $conn->query($sql);}

if (!$selected_eye && !$selected_hair && !$selected_undertone && !$selected_skin) {
   
    $name = "No Match Found";
    $recommendation = "";
    $best_colors = "";
    $avoid_colors = "";
    $image = "no_image_available.jpg";
    
} else {
   
    $query = "SELECT subseasons.subseason_name, subseasons.recommendation, subseasons.best_colors, 
                     subseasons.avoid_colors, subseasons.images,
                     combinations.eye_colors, 
                     combinations.hair_colors, 
                     combinations.skin_tones, 
                     combinations.undertones
              FROM combinations
              INNER JOIN subseasons ON combinations.subseason_id = subseasons.subseason_id";

    $stmt = $conn->prepare($query);
    $stmt->execute();
    $result = $stmt->get_result();

    
    $highest_match_score = 0;
    $best_subseason = null;

    while ($row = $result->fetch_assoc()) {
        $eye_colors = array_map('trim', explode(',', $row['eye_colors']));
        $hair_colors = array_map('trim', explode(',', $row['hair_colors']));
        $skin_tones = array_map('trim', explode(',', $row['skin_tones']));
        $undertones = array_map('trim', explode(',', $row['undertones'])); 
        $match_score = 0;

        // Priority system for fuzzy matching
        if (in_array($selected_skin, $skin_tones)) {
            $match_score += 0.4; 
        }
        
        // Refine undertone matching for specific requirements
        if (in_array($selected_undertone, $undertones)) {
            // Add specific check to ensure "neutral warm" does not match with cool subseasons
            if ($selected_undertone === 'Neutral-Warm' && in_array('Neutral-Cool', $undertones)) {
                $match_score -= 0.2; // Penalize the score, or use `continue` to skip
            } 
            else {
                $match_score += 0.3;
            }
        }
        
        if (in_array($selected_hair, $hair_colors)) {
            $match_score += 0.2; 
        }
        if (in_array($selected_eye, $eye_colors)) {
            $match_score += 0.1; 
        }
        
        if ($match_score > $highest_match_score) {
            $highest_match_score = $match_score;
            $best_subseason = $row;
        }
        
        $threshold = 0.7; 
        
        // Display results with the refined matching process
        if ($highest_match_score >= $threshold && $best_subseason) {
            $name = $best_subseason['subseason_name'];
            $recommendation = $best_subseason['recommendation'];
            $best_colors = $best_subseason['best_colors'];
            $avoid_colors = $best_subseason['avoid_colors'];
            $image = $best_subseason['images'];
            $long_text = $recommendation;
        }
         elseif ($highest_match_score > 0 && $best_subseason) {
            $name = $best_subseason['subseason_name'];
            $recommendation = $best_subseason['recommendation'];
            $best_colors = $best_subseason['best_colors'];
            $avoid_colors = $best_subseason['avoid_colors'];
            $image = $best_subseason['images'];
            $long_text = $recommendation;
        }
         else {
            $name = "No Match Found";
            $recommendation = "No matching subseason found for your selected options.";
            $best_colors = "";
            $avoid_colors = "";
            $image = "no_image_available.jpg"; 
            $long_text = $recommendation;
        }
    }  

    $stmt->close();
}

$conn->close();
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo $name; ?></title>
    <link href="https://fonts.googleapis.com/css2?family=Lora:wght@600&family=Montserrat:wght@400&display=swap" rel="stylesheet">
    <style>
        body {
            font-family: 'Montserrat', sans-serif;
            margin: 0;
            padding: 0;
            background-image: url('whitebg.jpg');
            background-size: cover; 
            background-position: center; 
            background-repeat: no-repeat;
            color: #333;
            display: flex;
            flex-direction: column; 
            min-height: 100vh; 
        }

        .content {
            flex: 1;
            display: flex;
            justify-content: center;
            align-items: flex-start;
            padding: 20px;
        }

        .container {
            background: rgba(255, 255, 255, 0.6);
            padding: 40px;
            border-radius: 15px;
            box-shadow: 0px 8px 20px rgba(0, 0, 0, 0.4);
            max-width: 800px;
            width: 100%;
            text-align: left;
        }

        h1 {
            font-family: 'Lora', serif;
            font-size: 3rem;
            color: #333;
            margin-bottom: 20px;
        }
     /* .image-wrapper {
            text-align: center;
        } */

        .recommendation, .best-colors, .avoid-colors , .image-wrapper {
            font-family: 'Times New Roman', serif;
            margin-bottom: 20px;
            font-size: 1.2rem;
            line-height: 1.8;
        }

        .best-colors span, .avoid-colors span {
            display: inline-block;
            padding: 8px 12px;
            margin: 5px;
            background-color: #eae7e4 ;
            border-radius: 10px;
            font-weight: bold;
        }

        .image-wrapper img {
            max-width: 100%;
            height: auto;
            border-radius: 10px;
            box-shadow: 0px 4px 15px rgba(0, 0, 0, 0.1);
            margin-bottom: 30px;
        }

        .long-text {
            white-space: normal;
            word-wrap: break-word;
            overflow-wrap: break-word;
            max-width: 100%;
            overflow: visible;
            margin-bottom: 30px; /* Add margin for spacing */
        }

        a.back-btn {
            display: inline-block;
            margin-top: 30px;
            padding: 12px 25px;
            background-color: #A67B5B; 
            color: white;
            text-decoration: none;
            border-radius: 50px;
            transition: background-color 0.3s ease;
        }

        a.back-btn:hover {
            background-color: #8E5B3A;
        }

        footer {
            font-size: 0.9rem;
            margin: 20px; /* Add margin for spacing */
            text-align: center; /* Center the footer text */
        }
    </style>
</head>
<body>
    <div class="content">
        <div class="container">
            <h1 style='text-shadow: 2px 2px 5px rgba(0, 0, 0, 0.3);'><?php echo $name; ?></h1>
            <?php if ($name == "No Match Found") { ?>
                <p>Please select the appropriate options to get your shades.</p>
                <a href="newquiz.html" class="back-btn">Go Back</a>
            <?php } else { ?>

                <p class="recommendation"><?php echo $recommendation; ?></p>
                <p class="best-colors"><strong><b><i>Best Colors:</b><br></strong>
                    <?php
                    $best_colors_array = explode(',', $best_colors);
                    foreach ($best_colors_array as $color) {
                        echo '<span>' . trim($color) . '</span>';
                    }
                    ?></i>
                </p>
                <p class="avoid-colors"><strong><b><i>Colors to Avoid:</b><br></strong>
                    <?php
                    $avoid_colors_array = explode(',', $avoid_colors);
                    foreach ($avoid_colors_array as $color) {
                        echo '<span>' . trim($color) . '</span>';
                    }
                    ?> </i>
                </p><br>
<div class="image-wrapper">
    <?php
   echo "<h2 style='color: #3E2723; text-shadow: 2px 2px 5px rgba(0, 0, 0, 0.5);'><i>Your Ideal Shades:</i></h2>";

    // Check if there are multiple image paths and handle them
    $image_paths = isset($image) ? array_map('trim', explode(',', $image)) : ["no_image_available.jpg"];
    
    // Loop through each image path and display it
    foreach ($image_paths as $path) {
        $full_image_path = htmlspecialchars($path);
        echo '<img src="' . $full_image_path . '" alt="' . htmlspecialchars($name) . '">';
    }
    ?>
</div>

                <a href="index.php" class="back-btn">Go Back</a>
            <?php } ?>
        </div>
    </div>
    <footer>© 2024 Ember Elle</footer>
</body>
</html>
