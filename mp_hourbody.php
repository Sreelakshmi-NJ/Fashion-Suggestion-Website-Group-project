<?php
include 'top_menu.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hourglass Body Shape</title>
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
        <h1>Hourglass Body Shape</h1>
        <img src="osug/hourglass shape.jpg" alt="Hourglass Body Shape" style="width:100%; max-width:400px; display:block; margin:auto;">

        <h2>About the Hourglass Body Shape</h2>
        <p>The hourglass body shape is characterized by a well-defined waist with balanced bust and hip measurements. This shape is often considered the ideal feminine figure and can be accentuated by the right clothing choices.</p>

        <!-- Side by side tips and avoid sections -->
        <div class="tips-avoid-section">
            <div class="tips-box">
                <h2>Additional Tips:</h2>
                <ul style="list-style-type:circle">
                    <li>Emphasize your waist with belts or fitted dresses.</li>
                    <li>Choose tops that define your bust and highlight your curves.</li>
                    <li>Wear high-waisted skirts or pants to enhance your silhouette.</li>
                    <li>Opt for A-line skirts that flow from the waist down.</li>
                    <li>Choose structured blazers to enhance your shape.</li>
                </ul>
            </div>

            <div class="avoid-box">
                <h2>What to Avoid:</h2>
                <ul style="list-style-type:circle">
                    <li>Avoid oversized or baggy clothing that hides your figure.</li>
                    <li>Steer clear of straight-cut dresses that do not define the waist.</li>
                    <li>Avoid low-rise pants that can create an unflattering silhouette.</li>
                    <li>Don't wear shapeless tops that do not accentuate your curves.</li>
                    <li>Refrain from heavy fabrics that add bulk to your frame.</li>
                </ul>
            </div>
        </div>

        <div class="gallery-container">
            <h2>Hourglass Body Shape</h2>
            <button class="prev" onclick="changeImage('hourglass', -1)">&#10094;</button>
            <img id="hourglassImage" src="osug/Hourglass shape - necklines.jpg" alt="Hourglass Body Image">
            <button class="next" onclick="changeImage('hourglass', 1)">&#10095;</button>
        </div>

        <!-- 'Go back' box inside the container -->
        <div class="go-back-box">
            <a href="mp_outfit.php">Go back</a>
        </div>

        <script src="script.js"></script>
    </div>
</body>
</html>
