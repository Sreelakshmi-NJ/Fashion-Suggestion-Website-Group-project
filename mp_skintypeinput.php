<?php
include 'top_menu.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Skincare Input</title>
    <link rel="stylesheet" href="styleoutfit.css">
    <style>
        body {
            background-image: url('skinmainbg.jpeg');
            background-size: cover;
            background-position: center;
        }

        .container {
            background-color: rgba(255, 255, 255, 0.5); /* 50% transparency */
            padding: 30px;
            border-radius: 10px;
            margin-top: 50px; /* Push the box down */
            width: 600px;
            margin-left: auto;
            margin-right: auto;
        }

        h1 {
    text-align: center;
    color: #EC7063; /* Heading color */
    font-size: 45px; /* Increased font size */
}


        label {
            font-size: 16px;
            display: block;
            margin-bottom: 10px;
        }

        input[type="submit"] {
            display: block;
            width: 100%;
            padding: 10px;
            background-color: #EC7063;
            border: none;
            color: white;
            font-size: 16px;
            cursor: pointer;
        }

        input[type="radio"] {
            margin-right: 10px;
            margin-left: 30px; /* Shift radio options to the right */
        }

        p a {
            color: #F1948A;
        }
    </style>
</head>
<body>
    <div class="container">
        <h1>What's Your Skin Type?</h1>
        <form action="mp_skinguidelead.php" method="post">
            <label>
                <input type="radio" name="skinType" value="normal" required> Normal Skin
            </label>
            <label>
                <input type="radio" name="skinType" value="dry"> Dry Skin
            </label>
            <label>
                <input type="radio" name="skinType" value="oily"> Oily Skin
            </label>
            <label>
                <input type="radio" name="skinType" value="combination"> Combination Skin
            </label>
            <label>
                <input type="radio" name="skinType" value="sensitive"> Sensitive Skin
            </label><br>

            <input type="submit" value="Submit">
        </form>
        <p>If unsure, <a href="skinguide.php">click here</a> to identify your skin type.</p>
    </div>
</body>
</html>
