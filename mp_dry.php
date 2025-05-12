<?php
include("mp_connect.php");
include 'top_menu.php';
$skinType = 'dry';

$query = "SELECT * FROM SkinType WHERE SkinType = ?";
$stmt = $conn->prepare($query);
$stmt->bind_param("s", $skinType);
$stmt->execute();
$result = $stmt->get_result();
$skinData = $result->fetch_assoc();

// Hardcoded causes and tips for dry skin
$causes = "Dry skin can be caused by genetics, dry climates or winter, long showers that strip natural oils, and reduced sebum production with age. These factors contribute to flaky and dehydrated skin.";
$tips = "To care for dry skin, moisturize after bathing, take shorter showers, pat skin dry gently, and stay hydrated. Use a humidifier, wear sunscreen, and protect hands with gloves when using harsh cleaning agents.";

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dry Skin Care</title>
    <link rel="stylesheet" href="style.css">
    <style>
        body {
        font-family: 'Montserrat', sans-serif;
        background-image: url('2148733397.jpg');
        background-size: cover;
        background-position: center;
        color: #333;
        }
        h1 {
            font-size: 40px;
            font-weight:800px;
            text-align: center;
            color: #E74C3C;
        }
        h2, h3 {
            font-size:35px;
            margin: 30px;
            color: #E74C3C; /* Heading color */
        }
        .container {
            max-width: 1100px;
            margin: 0 auto;
            padding: 20px;
            background-color: rgba(255, 255, 255, 0.8);
            border-radius: 10px;
        }
        .routine-container {
            text-align: center;
            margin-top: 20px;
        }
        .routine-img {
            max-width: 80%;
            height: 1400px;
            border-radius: 10px;
        }
        .routine-info {
            max-width: auto;
            font-size:20px;
            margin: 40px;
            text-align: left;
        }
        ul {
            line-height: 1.8;
        }
        .products-container {
            max-width: 900px;
            margin: auto;
            text-align: left;
        }
        .product-row {
            display: flex;
            justify-content: space-between;
            margin-bottom: 20px;
        }
        .product-item {
            flex-basis: 30%;
            text-align: center;
        }
        .product-item img {
            max-width: 100%;
            height: auto;
        }
        button {
            background-color: #E74C3C;
            color: white;
            border: none;
            padding: 10px 20px;
            cursor: pointer;
            border-radius: 5px;
        }
        button:hover {
            background-color: #C0392B;
        }
        p {
            font-size: 20px; /* Adjust the font size to your preference */
            margin: 30px;  /* Adjust the margin to your preference, e.g., 20px top and bottom */
        }
    </style>
</head>
<body> 
    <div class="container">
        <h1>Dry Skin Care</h1>
        <p class="p"><?php echo $skinData['Description']; ?></p>
        <h2>Causes</h2>
        <p class="p"><?php echo $causes; ?></p>
        <h2>Tips</h2>
        <p class="p"><?php echo $tips; ?></p>
        <h2>Routine</h2>
        <div class="routine-container" style="text-align: center; margin-top: 20px;">
        <img src="<?php echo $skinData['RoutineIMG']; ?>" alt="AM/PM Routine" class="routine-img">
        <div class="routine-info">
        <h3>Skincare Routine for Dry Skin</h3>
        <ul style="list-style-type:disc;"> 
            <li><strong>Cleanser:</strong> Use a gentle, hydrating cleanser that doesn't strip your skin of its natural oils. Look for ingredients like hyaluronic acid or glycerin.</li> 
        <li><strong>Exfoliating toner:</strong> Opt for a mild exfoliating toner with glycolic acid or lactic acid to gently remove dead skin cells without causing irritation. Use it sparingly, about 1-2 times a week.</li> 
        <li><strong>Vitamin C:</strong> Incorporate a vitamin C serum to boost collagen production and brighten your skin. Ensure its formulated for sensitive skin to avoid irritation.</li> 
        <li><strong>Moisturizer:</strong> Choose a rich, hydrating moisturizer with ingredients like ceramides, hyaluronic acid, and shea butter to repair the skin barrier and lock in moisture.</li> 
        <li><strong>Sunscreen:</strong> Use a broad-spectrum sunscreen with at least SPF 30. Look for formulations that include moisturizing ingredients to prevent further drying out your skin.</li> 
    </ul>
        
        <h3>Additional Tips for Healthy Skin:</h3>
        <ul style="list-style-type:disc;">
            <li>Treat your skin gently.</li>
            <li>Eat a healthy diet.</li>
            <li>Manage stress.</li>
            <li>Avoid smoking/alcohol consumption.</li>
        </ul>
</div> </div>
        <h2>Recommended Products</h2>
        <div class="products-container" style="max-width: 900px; margin: auto; text-align: left;">

    <h2>Cleanser</h2>
    <div class="product-row" style="display: flex; justify-content: space-between; margin-bottom: 20px;">
        <!-- Product 1 -->
        <div class="product-item" style="flex-basis: 30%; text-align: center;">
            <img src="skpt/cleanser1_ds.jpg" alt="Cleanser Brand 1" style="max-width: 100%; height: 300px;">
        </div>
        <!-- Product 2 -->
        <div class="product-item" style="flex-basis: 30%; text-align: center;">
            <img src="skpt/cleanser2_ds.jpg" alt="Cleanser Brand 2" style="max-width: 120%; height: 300px;">
        </div>
    </div>
    
    <h2>Moisturizer</h2>
    <div class="product-row" style="display: flex; justify-content: space-between; margin-bottom: 20px;">
        <!-- Product 1 -->
        <div class="product-item" style="flex-basis: 30%; text-align: center;">
            <img src="skpt/moisturizer1_ds.jpg" alt="Moisturizer Brand 1" style="max-width: 100%; height: 300px;">
        </div>
        <!-- Product 2 -->
        <div class="product-item" style="flex-basis: 30%; text-align: center;">
            <img src="skpt/moisturizer2_ds.jpg" alt="Moisturizer Brand 2" style="max-width: 100%; height: 300px;">
        </div>
        <!-- Product 3 -->
        <div class="product-item" style="flex-basis: 30%; text-align: center;">
            <img src="skpt/moisturizer3_ds.jpg" alt="Moisturizer Brand 3" style="max-width: 100%; height: 300px;">
        </div>
    </div>
    
    <h2>Lip Balm </h2>
    <div class="product-row" style="display: flex; justify-content: space-between; margin-bottom: 20px;">
        <!-- Product 1 -->
        <div class="product-item" style="flex-basis: 30%; text-align: center;">
            <img src="skpt/lipbalm1_ds.jpg" alt="Lip Balm Brand 1" style="max-width: 100%; height: 300px;">
        </div>
        <!-- Product 2 -->
        <div class="product-item" style="flex-basis: 30%; text-align: center;">
            <img src="skpt/lipbalm2_ds.jpg" alt="Lip Balm Brand 2" style="max-width: 100%; height: 300px;">
        </div>
        <!-- Product 3 -->
        <div class="product-item" style="flex-basis: 30%; text-align: center;">
            <img src="skpt/lipbalm3_ds.jpg" alt="Lip Balm Brand 3" style="max-width: 100%; height: 300px;">
        </div>
    </div>

    <h2>Sunscreen</h2>
    <div class="product-row" style="display: flex; justify-content: space-between; margin-bottom: 20px;">
        <!-- Product 1 -->
        <div class="product-item" style="flex-basis: 30%; text-align: center;">
            <img src="skpt/sunscreen1_ds.jpg" alt="Sunscreen Brand 1" style="max-width: 100%; height: 300px;">
        </div>
        <!-- Product 2 -->
        <div class="product-item" style="flex-basis: 30%; text-align: center;">
            <img src="skpt/sunscreen2_ds.jpg" alt="Sunscreen Brand 2" style="max-width: 100%; height: 300px;">
        </div>
        <!-- Product 3 -->
        <div class="product-item" style="flex-basis: 30%; text-align: center;">
            <img src="skpt/sunscreen3_ds.jpg" alt="Sunscreen Brand 3" style="max-width: 100%; height: 300px;">
        </div>
 
</div>
<script>
    function goBack() {
        window.history.back();
    }
</script>
        <button onclick="goBack()">Go Back</button>
    </div>
    <script src="script.js"></script>
</body>
</html>