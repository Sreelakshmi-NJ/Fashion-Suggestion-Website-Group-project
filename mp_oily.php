<?php
include("mp_connect.php");
include 'top_menu.php';
$skinType = 'oily';

$query = "SELECT * FROM SkinType WHERE SkinType = ?";
$stmt = $conn->prepare($query);
$stmt->bind_param("s", $skinType);
$stmt->execute();
$result = $stmt->get_result();
$skinData = $result->fetch_assoc();

// Hardcoded causes and tips for oily skin
$causes = "Hormonal changes, genetics, humidity, and certain products can contribute to oily skin.";
$tips = "Keep your skin clean, use non-comedogenic products, and consider a gentle exfoliation routine.";
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Oily Skin Care</title>
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
        <h1>Oily Skin Care</h1>
        <p class="p"><?php echo $skinData['Description']; ?></p>
        <h2>Causes</h2>
        <p class="p"><?php echo $causes; ?></p>
        <h2>Tips</h2>
        <p class="p"><?php echo $tips; ?></p>
        <h2>Routine</h2>
        <div class="routine-container" style="text-align: center; margin-top: 20px;">
        <img src="<?php echo $skinData['RoutineIMG']; ?>" alt="AM/PM Routine" class="routine-img">
        <div class="routine-info">
        <h3>Skincare Routine for Oily Skin</h3>
        <ul style="list-style-type:disc">
            <li><strong>Cleanser:</strong> Use a gentle, foaming cleanser that helps control excess oil. Look for ingredients like salicylic acid or benzoyl peroxide to prevent breakouts.</li>
            <li><strong>Exfoliating toner:</strong> Opt for a toner with salicylic acid or witch hazel to help unclog pores and control oil production. Use it regularly, but avoid over-exfoliating.</li>
            <li><strong>Niacinamide:</strong> Incorporate a niacinamide serum to reduce oil production and minimize the appearance of pores. It also helps calm inflammation.</li>
            <li><strong>Moisturizer:</strong> Choose a lightweight, oil-free moisturizer with hydrating ingredients like hyaluronic acid. Look for products labeled "non-comedogenic" to prevent clogging pores.</li>
            <li><strong>Sunscreen:</strong> Use a broad-spectrum, oil-free sunscreen with at least SPF 30. Opt for a matte finish or gel-based formula to control shine throughout the day.</li>
        </ul>
        <h3>Additional Tips for Healthy Skin:</h3>
        <ul style="list-style-type:disc;">
            <li>Treat your skin gently.</li>
            <li>Eat a healthy diet.</li>
            <li>Manage stress.</li>
            <li>Avoid smoking/alcohol consumption.</li>
        </ul>
        <h2>Recommended Products</h2>
        
        <div class="products-container" style="max-width: 900px; margin: auto; text-align: left;">

        <h2>Cleanser</h2>
        <div class="product-row" style="display: flex; justify-content: space-around; margin-bottom: 20px;">
            <!-- Product 1 -->
            <div class="product-item" style="flex-basis: 30%; text-align: center; margin-bottom: 10px;">
                <img src="skpt/cleanser1_os.jpg" alt="Cleanser Brand 1" style="max-width: 100%; height: auto;">
            </div>
            <!-- Product 2 -->
            <div class="product-item" style="flex-basis: 30%; text-align: center; margin-bottom: 10px;">
                <img src="skpt/cleanser2_os.jpg" alt="Cleanser Brand 2" style="max-width: 100%; height: auto;">
            </div>
        </div>
        
        <h2>Scrub</h2>
        <div class="product-row" style="display: flex; justify-content: space-around; margin-bottom: 20px;">
            <!-- Product 1 -->
            <div class="product-item" style="flex-basis: 30%; text-align: center; margin-bottom: 10px;">
                <img src="skpt/scrub1_os.jpg" alt="scrub Brand 1" style="max-width: 100%; height: 300px;">
            </div>
            <!-- Product 2 -->
            <div class="product-item" style="flex-basis: 30%; text-align: center; margin-bottom: 10px;">
                <img src="skpt/scrub2_os.jpg" alt="scrub Brand 2" style="max-width: 100%; height: 300px;">
            </div>
            <!-- Product 3 -->
            <div class="product-item" style="flex-basis: 30%; text-align: center; margin-bottom: 10px;">
                <img src="skpt/scrub3_os.jpg" alt="scrub Brand 3" style="max-width: 100%; height: 300px;">
            </div>
        </div>
        
        <h2>Toner</h2>
        <div class="product-row" style="display: flex; justify-content: space-around; margin-bottom: 20px;">
            <!-- Product 1 -->
            <div class="product-item" style="flex-basis: 30%; text-align: center; margin-bottom: 10px;">
                <img src="skpt/toner1_os.jpg" alt="Toner Brand 1" style="max-width: 100%; height: auto;">
            </div>
            <!-- Product 2 -->
            <div class="product-item" style="flex-basis: 30%; text-align: center; margin-bottom: 10px;">
                <img src="skpt/toner2_os.jpg" alt="Toner Brand 2" style="max-width: 100%; height: auto;">
            </div>
        </div>
        
        <h2>Sunscreen</h2>
        <div class="product-row" style="display: flex; justify-content: space-around; margin-bottom: 20px;">
            <!-- Product 1 -->
            <div class="product-item" style="flex-basis: 30%; text-align: center; margin-bottom: 10px;">
                <img src="skpt/sunscreen1_os.jpg" alt="Sunscreen Brand 1" style="max-width: 100%; height: auto;">
            </div>
            <!-- Product 2 -->
            <div class="product-item" style="flex-basis: 30%; text-align: center; margin-bottom: 10px;">
                <img src="skpt/sunscreen2_os.jpg" alt="Sunscreen Brand 2" style="max-width: 100%; height: 300px;">
            </div>
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
