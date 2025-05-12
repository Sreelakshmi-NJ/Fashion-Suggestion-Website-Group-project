<?php
include 'top_menu.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Inverted Triangle Body Shape</title>
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
            margin: 50px auto; /* Adds some space at the top */
            background: rgba(255, 255, 255, 0.7); /* Slightly transparent background */
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0px 4px 6px rgba(0, 0, 0, 0.1); /* Adds a subtle shadow for a clean look */
        }

        /* Change the color of headings to #A91F72 */
        h1, h2 {
            color: #A21210;
        }

        a {
            color: #007bff;
            text-decoration: none;
        }

        a:hover {
            text-decoration: underline;
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
    background: rgba(255, 255, 255, 0.5); /* Semi-transparent background */
    position: relative; /* So arrows are correctly aligned */
}


        .gallery-container img {
            max-width: 400px;
            width: 100%;
            border: 1px solid #ddd;
            border-radius: 10px;
        }

        /* Style for navigation arrows */
        .prev, .next {
            cursor: pointer;
            font-size: 30px;
            padding: 10px;
            background-color: rgba(0, 0, 0, 0.5);
            color: white;
            border: none;
            position: absolute;
            top: 50%;
            transform: translateY(-50%);
            z-index: 1; /* Makes sure arrows are visible above the image */
        }

        .prev {
            left: 10px;
        }

        .next {
            right: 10px;
        }

        /* 'Go back' link box style */
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
        <h1>Inverted Triangle Body Shape</h1>
        <img src="osug/Inverted triangle.jpg" alt="InvTri Body Shape" style="width:100%; max-width:400px; display:block; margin:auto;">

        <h2>About the Inverted Triangle Body Shape</h2>
        <p>The inverted triangle body shape features broader shoulders and a narrower waist and hips. Balancing the upper and lower body is key.</p>

        <!-- Side by side tips and avoid sections -->
       <div class="tips-avoid-section">
    <div class="tips-box">
        <h2>Additional Tips:</h2>
        <ul style="list-style-type:circle">
            <li>Opt for A-line skirts or wide-legged pants to add volume to your lower body and balance your silhouette.</li>
            <li>Wear V-necklines to draw attention downward and create a longer, leaner look.</li>
            <li>Choose skirts or pants with patterns, pleats, or embellishments to add interest and volume to your hips.</li>
            <li>Wear dark colors on top to minimize your shoulders, while brighter colors or prints on the bottom add balance.</li>
            <li>Use flowy skirts that flare out to create symmetry with your broader shoulders.</li>
        </ul>    
    </div>

    <div class="avoid-box">
        <h2>What to Avoid:</h2>
        <ul style="list-style-type:circle">
            <li>Stay away from tops or jackets with shoulder pads or puffed sleeves, as they will further broaden your upper body.</li>
            <li>Avoid boat neck tops and other wide necklines that make your shoulders appear broader.</li>
            <li>Skip skinny jeans or straight-leg pants that accentuate your broader shoulders without balancing the lower half.</li>
            <li>Avoid tight tops that highlight your shoulders.</li>
            <li>Avoid delicate, narrow straps like spaghetti straps that don’t provide enough balance to your figure.</li>
        </ul>
    </div>
</div>

        <div class="gallery-container">
            <h2>Inverted Triangle Body Shape</h2>
            <button class="prev" onclick="changeImage('inverted', -1)">&#10094;</button>
            <img id="invertedImage" src="osug/Inverted triangle shape - necklines.jpg" alt="Inverted Body Image">
            <button class="next" onclick="changeImage('inverted', 1)">&#10095;</button>
        </div>
<!-- 'Go back' box inside the container -->
<div class="go-back-box">
            <a href="mp_outfit.php">Go back</a>
        </div>
        <script src="script.js"></script>

    </div>
</body>
</html>
