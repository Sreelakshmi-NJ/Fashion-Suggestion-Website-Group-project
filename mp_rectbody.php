<?php
include 'top_menu.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Rectangle Body Shape</title>
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
        <h1>Rectangle Body Shape</h1>
        <img src="osug/Rectangle shape.jpg" alt="Rectangle Body Shape" style="width:100%; max-width:400px; display:block; margin:auto;">

        <h2>About the Rectangle Body Shape</h2>
        <p>The rectangular body shape is characterized by a straight silhouette with minimal waist definition. Creating curves with clothing is key.</p>

        <!-- Side by side tips and avoid sections -->
        <div class="tips-avoid-section">
    <div class="tips-box">
        <h2>Additional Tips:</h2>
        <ul style="list-style-type:circle">
            <li>Use belts or waist-cinching styles to add definition to your waistline.</li>
            <li>Wear peplum tops and dresses that add volume to your hips.</li>
            <li>Use layers, such as a fitted jacket over a dress, to break up your straight silhouette.</li>
            <li>Opt for structured blazers or tops that create a more contoured look.</li>
            <li>Wear tops with ruffles, patterns, or embellishments to add interest and volume to the bust or hips.</li>
        </ul>    
    </div>

    <div class="avoid-box">
        <h2>What to Avoid:</h2>
        <ul style="list-style-type:circle">
            <li>Avoid shapeless or boxy clothing that can make you appear more rectangular.</li>
            <li>Stay away from straight-cut dresses or skirts that do not add curves.</li>
            <li>Skip fabrics that are too stiff or thick, as they can make your frame appear bulky.</li>
            <li>Avoid low-waisted pants that can elongate your torso and reduce the illusion of curves.</li>
            <li>Avoid high-neck tops that minimize your bust and emphasize a rectangular shape.</li>
        </ul>
    </div>
</div>
        <div class="gallery-container">
            <h2>Rectangle Body Shape</h2>
            <button class="prev" onclick="changeImage('rectangle', -1)">&#10094;</button>
            <img id="rectangleImage" src="osug/Rectangle shape - necklines.jpg" alt="Rectangle Body Image">
            <button class="next" onclick="changeImage('rectangle', 1)">&#10095;</button>
        </div>
<!-- 'Go back' box inside the container -->
<div class="go-back-box">
            <a href="mp_outfit.php">Go back</a>
        </div>
        <script src="script.js"></script>

    </div>
</body>
</html>