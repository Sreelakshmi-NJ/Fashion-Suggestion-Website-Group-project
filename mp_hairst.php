<?php
include 'mp_atopmenu.php';

include 'mp_connect.php'; // Include your database connection file


?>

<!DOCTYPE html>
<html lang="en">
<head>

    <title>Display Table Data</title>
    <style>
        
        .container {
            background-color: #fff;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            width: 80%;
            max-width: 1000px;
            justify-content: center;
            align-items: center;
             margin-left: 22%;
           


            
            
           
            
        }
        h2 {
            text-align: center;
            color: #333;
            margin-bottom: 20px;
        }
        table {
            border-collapse: collapse;
            width: 100%;
            margin-bottom: 20px;
            
            
        }
        th, td {
            padding: 12px;
            text-align: left;
            border-bottom: 1px solid #ddd;
        }
        th {
            background-color: #f2f2f2;
        }
        tr:hover {
            background-color: #f1f1f1;
        }
        #l1{display: block;
            text-align: center;
            margin-top: 20px;
            color: #007bff;
            text-decoration: none;

         }
         
        #l1:hover {
            text-decoration: underline;
        }
    </style>
</head>
<body>
    <div class="container">
        <h2>Hairstyle Table</h2>
        <table>
            <tr>
               <th>id</th>
                <th>face_shape</th>
                <td>hair_type</td>
                <th>hairstyle_name</th>
                <th>image_url</th>
            </tr>
            <?php

            $sql = "SELECT * FROM hairstyles";
            $result = mysqli_query($conn, $sql);

            if ($result->num_rows > 0) {
                // Output data of each row
                while($row = $result->fetch_assoc()) {
                    echo "<tr>
                            <td>" . $row["id"]. "</td>
                            <td>" . $row["face_shape"]. "</td>
                            <td>" . $row["hair_type"]. "</td>
                            <td>" . $row["hairstyle_name"]. "</td>
                            <td>" . $row["image_url"]. "</td>
                          </tr>";
                }
            } else {
                echo "<tr><td colspan='4'>No results found</td></tr>";
            }
            ?>
        </table><p style="color: red; font-size: 20px;">
        <a href="mp_inserthair.php"id="l1">Insert row</a>
        <a href="mp_changehair.php"id="l1">Change value of any row</a>
        <a href="mp_deletehair.php"id="l1">Delete any row</a>
        
    </div>
</body>
</html>
