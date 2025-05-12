<?php
include("mp_connect.php");
include 'top_menu.php';
$skinType = 'sensitive';

$query = "SELECT * FROM SkinType WHERE SkinType = ?";
$stmt = $conn->prepare($query);
$stmt->bind_param("s", $skinType);
$stmt->execute();
$result = $stmt->get_result();
$skinData = $result->fetch_assoc();

// Hardcoded causes and tips for sensitive skin
$causes = "Sensitive skin can result from genetic predisposition, which makes the skin more reactive to environmental factors and products. It can also be triggered by external elements like harsh weather, allergens, or irritants in skincare products.";
$tips = "For sensitive skin, always conduct a patch test before using new products to avoid reactions, and keep your skincare routine simple with a mild cleanser, moisturizer, and sunscreen. Be cautious of hypoallergenic labels and test those products as well. Additionally, avoid long, hot showers that can strip essential oils and irritate your skin.";
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sensitive Skin Care</title>
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
        <h1 class="h1">Sensitive Skin Care</h1>
        <p class="p"><?php echo $skinData['Description']; ?></p>
        <h2>Causes</h2>
        <p class="p"><?php echo $causes; ?></p>
        <h2>Tips</h2> 
        <p class="p"><?php echo $tips; ?></p>
        <h2>Routine</h2>
        <div class="routine-container">
            <img src="<?php echo $skinData['RoutineIMG']; ?>" alt="AM/PM Routine" class="routine-img">
            <div class="routine-info">
                <h3>Skincare Routine for Sensitive Skin</h3>
                <ul>
                    <li><strong>Cleanser:</strong> Use a gentle, fragrance-free cleanser that won't irritate or strip the skin. Look for calming ingredients like chamomile, aloe vera, or oatmeal.</li>
                    <li><strong>Toner:</strong> Opt for a soothing, alcohol-free toner with ingredients like rose water or calendula. Avoid toners with harsh chemicals or astringents that may cause irritation.</li>
                    <li><strong>Serum:</strong> Choose a calming serum with ingredients like niacinamide, which helps reduce redness and inflammation, or a serum with centella asiatica for soothing effects.</li>
                    <li><strong>Moisturizer:</strong> Use a fragrance-free, hypoallergenic moisturizer with ceramides and glycerin to reinforce the skin barrier and prevent moisture loss. Avoid potential irritants like lanolin or alcohol.</li>
                    <li><strong>Sunscreen:</strong> Use a mineral-based sunscreen with zinc oxide or titanium dioxide. These physical blockers are less likely to irritate sensitive skin than chemical sunscreens.</li>
                </ul>
                <h3>Additional Tips for Healthy Skin:</h3>
                <ul>
                    <li>Treat your skin gently.</li>
                    <li>Eat a healthy diet.</li>
                    <li>Manage stress.</li>
                    <li>Avoid smoking/alcohol consumption.</li>
                </ul>
            </div>
        </div>
        <h2>Recommended Products</h2>
        <div class="products-container">
            <h2>Facewash</h2>
            <div class="product-row">
                <div class="product-item">
                    <img src="skpt/facewash1_ses.jpg" alt="Facewash Brand 1" style="max-width: 100%; height: 300px;">
                </div>
                <div class="product-item">
                    <img src="skpt/facewash2_ses.jpg" alt="Facewash Brand 2" style="max-width: 100%; height: 300px;">
                </div>
            </div>
            <h2>Serum</h2>
            <div class="product-row">
                <div class="product-item">
                    <img src="skpt/serum1_ses.jpg" alt="Serum Brand 1" style="max-width: 100%; height: 300px;">
                </div>
                <div class="product-item">
                    <img src="skpt/serum2_ses.jpg" alt="Serum Brand 2" style="max-width: 100%; height: 300px;">
                </div>
                <div class="product-item">
                    <img src="skpt/serum3_ses.jpg" alt="Serum Brand 3" style="max-width: 100%; height: 300px;">
                </div>
            </div>
            <h2>Sunscreen</h2>
            <div class="product-row">
                <div class="product-item">
                    <img src="skpt/sunscreen1_ses.jpg" alt="Sunscreen Brand 1" style="max-width: 100%; height: 300px;">
                </div>
                <div class="product-item">
                    <img src="skpt/sunscreen2_ses.jpg" alt="Sunscreen Brand 2" style="max-width: 100%; height: 300px;">
                </div>
                <div class="product-item">
                    <img src="skpt/sunscreen3_ses.jpg" alt="Sunscreen Brand 3" style="max-width: 100%; height: 300px;">
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
