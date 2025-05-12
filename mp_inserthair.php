<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>insert hairstyle </title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
            margin: 0;
            padding: 0;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
        }
        .container {
            background-color: rgba(255, 255, 255, 0.2);
            padding: 40px;
            border-radius: 10px;
            box-shadow: 0 0 20px rgba(0, 0, 0, 0.1);
            max-width: 500px;
            width: 100%;
        }
        h2 {
            text-align: center;
            color: #333;
            margin-bottom: 20px;
        }
        form {
            display: flex;
            flex-direction: column;
        }
        label {
            margin-bottom: 5px;
            color: #555;
        }
        input[type="text"] {
            padding: 10px;
            margin-bottom: 20px;
            border: 1px solid #ccc;
            border-radius: 5px;
        }
        input[type="submit"] {
            padding: 10px;
            background-color: #28a745;
            color: #fff;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            font-size: 16px;
        }
        input[type="submit"]:hover {
            background-color: #218838;
        }
        a {
            display: block;
            text-align: center;
            margin-top: 20px;
            color: #007bff;
            text-decoration: none;
        }
        a:hover {
            text-decoration: underline;
        }
    </style>
</head>
<body>
    <div class="container">
        <h2>Insert Row </h2>
        <form action="" method="post">
            <label for="name">Face_shape:</label>
            <input type="text" id="name" name="name" required>
            <label for="ht">Hair_type</label>
            <input type="text" id="ht" name="ht" required>
            <label for="hname">Hairstyle_name:</label>
            <input type="text" id="hname" name="hname" required>
            <label for="url">Image_url:</label>
            <input type="text" id="url" name="url" required>
            <input type="submit" value="Insert Row">
        </form>
        <?php
        include 'mp_connect.php'; // Include your database connection file

        if ($_SERVER['REQUEST_METHOD'] == 'POST') { // if Form is submitted
            $p1 = $_POST['name'];
            $p2 = $_POST['ht'];
            $p3 = $_POST['hname'];
            $p4 = $_POST['url'];
            $query = "INSERT INTO hairstyles VALUES ('','$p1', '$p2', '$p3','$p4')";
            $result = mysqli_query($conn, $query);
           
            if($result){ echo 'row inserted succesfully';}
        }
        ?>
        <a href="mp_hairst.php">Previous page</a>
    </div>
</body>
</html>

