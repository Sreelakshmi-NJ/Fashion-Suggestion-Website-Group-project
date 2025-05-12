<?php
include 'top_menu.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pear Body Shape</title>
    <link rel="stylesheet" href="styleoutfit.css">
    <style>
        body {
            font-family: 'Montserrat', sans-serif;
            background-image: url('2149033906.jpg'); /* Background image */
            background-size: cover; /* Ensures image covers entire background */
            background-repeat: no-repeat; /* Prevents tiling of the image */
            background-attachment: fixed; /* Fixes the image while scrolling */
            color: #333; /* Text color for better readability */
            margin: 0;
            padding: 0;
        }
        .container {
            max-width: 900px;
            margin: auto;
            background: rgba(255, 255, 255, 0.7); /* Slightly transparent background */
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0px 4px 6px rgba(0, 0, 0, 0.1); /* Subtle shadow */
        }
        
        h1, h2 {
            color: #A21210; /* Adjusted heading color */
        }

        .tips-avoid-section {
            display: flex;
            justify-content: space-between;
        }

        .tips-box, .avoid-box {
            width: 48%;
            padding: 10px;
            border: 1px solid #ddd;
            background-color: #f9f9f9;
            border-radius: 10px;
        }

        .tips-box ul, .avoid-box ul {
    font-size: 16px; 
    line-height: 1.5;
    margin-left: 20px;  /* Default left margin */
    padding-left: 15px; /* Increase indentation of list items */
}

        .gallery-container {
            text-align: center;
            margin: 20px 0;
            position: relative; /* Ensures the arrows are placed inside this container */
        }

        .gallery-container img {
            max-width: 400px;
            width: 100%;
            border: 1px solid #ddd;
            border-radius: 10px;
        }

        .prev, .next {
            cursor: pointer;
            font-size: 30px; /* Increased the size of arrows for better visibility */
            padding: 10px;
            background-color: rgba(0, 0, 0, 0.5);
            color: white;
            border: none;
            position: absolute;
            top: 50%;
            transform: translateY(-50%);
            z-index: 10; /* Ensures the arrows stay on top of the image */
        }

        .prev {
            left: 10px;
        }

        .next {
            right: 10px;
        }

        .description {
            margin-top: 10px;
            font-size: 18px;
        }

        .go-back-box {
            background-color: #A21210;
            color: white;
            padding: 10px;
            width: fit-content;
            margin-top: 20px;
            text-align: left;
            border-radius: 5px;
        }

        .go-back-box a {
            color: white;
        }

        .go-back-box a:hover {
            text-decoration: underline;
        }
    </style>
</head>
<body>
    <div class="container">
        <h1>Pear Body Shape</h1>
        <img src="osug/Pear shape.jpg" alt="Pear Body Shape" style="width:100%; max-width:400px; display:block; margin:auto; border-radius: 10px; border: 1px solid #ddd;">

        <h2>About the Pear Body Shape</h2>
        <p>The pear body shape has a smaller upper body and wider hips. Drawing attention to the upper body can help balance the silhouette.</p>

        <!-- Side by side tips and avoid sections -->
        <div class="tips-avoid-section">
            <div class="tips-box">
                <h2>Additional Tips:</h2>
                <ul style="list-style-type:circle">
                    <li>Draw attention to your shoulders and bust with boat necklines, off-the-shoulder tops, or bold patterns on top.</li>
                    <li>Wear dark, solid colors on the lower half to minimize the appearance of wider hips.</li>
                    <li>Choose A-line or flared skirts that skim over your hips and balance your proportions.</li>
                    <li>Opt for structured tops with a bit of volume around the shoulders to enhance your upper body.</li>
                    <li>Use bold accessories like statement necklaces or earrings to draw the eye upward.</li>
                </ul>    
            </div>

            <div class="avoid-box">
                <h2>What to Avoid:</h2>
                <ul style="list-style-type:circle">
                    <li>Avoid overly loose or baggy pants and skirts that add unnecessary bulk to your lower half.</li>
                    <li>Avoid low-rise jeans or pants, which can make your hips look wider and shorten your legs.</li>
                    <li>Steer clear of clingy or tight fabrics on your hips and thighs.</li>
                    <li>Avoid bottoms with bold prints, horizontal stripes, or bright colors that draw attention to your lower half.</li>
                    <li>Skip fabrics like corduroy or heavy denim that can make your hips and thighs appear larger.</li>
                </ul>
            </div>
        </div>

        <div class="gallery-container">
            <h2>Pear Body Shape</h2>
            <button class="prev" onclick="changeImage('pear', -1)">&#10094;</button>
            <img id="pearImage" src="osug/Pear shape - necklines.jpg" alt="Pear Body Image">
            <button class="next" onclick="changeImage('pear', 1)">&#10095;</button>
        </div>

        <div class="go-back-box">
            <a href="mp_outfit.php">Go back</a>
        </div>

        <script src="script.js"></script>

    </div>
</body>
</html>
