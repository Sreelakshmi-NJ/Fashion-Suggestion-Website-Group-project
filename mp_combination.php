<?php
include("mp_connect.php");
include 'top_menu.php';
$skinType = 'combination';
$query = "SELECT * FROM SkinType WHERE SkinType = ?";
$stmt = $conn->prepare($query);
$stmt->bind_param("s", $skinType);
$stmt->execute();
$result = $stmt->get_result();
$skinData = $result->fetch_assoc();

// Hardcoded causes and tips for combination skin
$causes = "Combination skin can be caused by genetics, harsh skincare products that increase sebum production in the T-zone, and climate changes that affect oiliness in summer and dryness in winter. These factors can lead to varying skin conditions in different areas.";
$tips = "For combination skin, use a gentle cleanser to avoid clogging T-zone pores, exfoliate gently and infrequently, and always wear oil-free sunscreen. Maintain two separate skincare routines: a heavier moisturizer for dry areas and a lightweight one for the T-zone. Choose oil-free and fragrance-free products to minimize irritation and prevent clogged pores.";

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Combination Skin Care</title>
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
        <h1>Combination Skin Care</h1>
        <p class="p"><?php echo $skinData['Description']; ?></p>
        <h2>Causes</h2>
        <p class="p"><?php echo $causes; ?></p>
        <h2>Tips</h2>
        <p class="p"><?php echo $tips; ?></p>
        <h2>Routine</h2>
        <div class="routine-container" style="text-align: center; margin-top: 20px;">
        <img src="<?php echo $skinData['RoutineIMG']; ?>" alt="AM/PM Routine" class="routine-img">
        <div class="routine-info">        
        <h3>Skincare Routine for Combination Skin</h3>
<ul style="list-style-type:disc;">
    <li><strong>Cleanser:</strong> Use a gentle, balancing cleanser that removes dirt and excess oil without over-drying. Look for ingredients like green tea or aloe vera to calm the skin while addressing both oily and dry areas.</li>
    <li><strong>Toner:</strong> Choose a hydrating toner with ingredients like hyaluronic acid for dry areas, and astringent ingredients like witch hazel or niacinamide for oily zones. Focus on applying to specific areas as needed.</li>
    <li><strong>Serum:</strong> Use a light serum with both hydrating and oil-controlling properties, such as niacinamide for the oily T-zone and hyaluronic acid for dry patches. This helps balance moisture while controlling oil production.</li>
    <li><strong>Moisturizer:</strong> Opt for a lightweight, oil-free moisturizer for the T-zone and a richer cream for dry areas like the cheeks. You may also choose a gel-cream hybrid to balance hydration without heaviness.</li>
    <li><strong>Sunscreen:</strong> Use a broad-spectrum sunscreen with at least SPF 30. Choose a non-comedogenic, lightweight formula that provides moisture for dry areas while keeping oily areas matte.</li>
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
            <img src="skpt/cleanser1_cs.jpg" alt="Cleanser Brand 1" style="max-width: 100%; height: 300px;">
        </div>
        <!-- Product 2 -->
        <div class="product-item" style="flex-basis: 30%; text-align: center;">
            <img src="skpt/cleanser2_cs.jpg" alt="Cleanser Brand 2" style="max-width: 100%; height: 300px;">
        </div>
    </div>
    
    <h2>Moisturizer</h2>
    <div class="product-row" style="display: flex; justify-content: space-between; margin-bottom: 20px;">
        <!-- Product 1 -->
        <div class="product-item" style="flex-basis: 30%; text-align: center;">
            <img src="skpt/moisturizer1_cs.jpg" alt="Moisturizer Brand 1" style="max-width: 100%; height: 300px;">
        </div>
        <!-- Product 2 -->
        <div class="product-item" style="flex-basis: 30%; text-align: center;">
            <img src="skpt/moisturizer2_cs.jpg" alt="Moisturizer Brand 2" style="max-width: 100%; height: 300px;">
        </div>
        <!-- Product 3 -->
        <div class="product-item" style="flex-basis: 30%; text-align: center;">
            <img src="skpt/moisturizer3_cs.jpg" alt="Moisturizer Brand 3" style="max-width: 100%; height: 300px;">
        </div>
    </div>

    <h2>Sunscreen</h2>
    <div class="product-row" style="display: flex; justify-content: space-between; margin-bottom: 20px;">
        <!-- Product 1 -->
        <div class="product-item" style="flex-basis: 30%; text-align: center;">
            <img src="skpt/sunscreen1_cs.jpg" alt="Sunscreen Brand 1" style="max-width: 100%; height: 300px;">
        </div>
        <!-- Product 2 -->
        <div class="product-item" style="flex-basis: 30%; text-align: center;">
            <img src="skpt/sunscreen2_cs.jpg" alt="Sunscreen Brand 2" style="max-width: 100%; height: 300px;">
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