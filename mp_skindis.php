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
        <h2>Skincare Table</h2>
        <table>
            <tr>
               <th>SkinTypeID</th>
                <th>SkinType</th>
                <td>Description</td>
                <td>RoutineIMG</td>
               
            </tr>
            <?php

            $sql = "SELECT * FROM skintype";
            $result = mysqli_query($conn, $sql);

            if ($result->num_rows > 0) {
                // Output data of each row
                while($row = $result->fetch_assoc()) {
                    echo "<tr>
                            <td>" . $row["SkinTypeID"]. "</td>
                            <td>" . $row["SkinType"]. "</td>
                            <td>" . $row["Description"]. "</td>
                            <td>" . $row["RoutineIMG"]. "</td>
                            
                          </tr>";
                }
            } else {
                echo "<tr><td colspan='3'>No results found</td></tr>";
            }
            ?>
        </table><p style="color: red; font-size: 20px;">
        <a href="mp_changeskin.php"id="l1">Change value of any row</a>
        <a href="mp_deleteskin.php"id="l1">Delete any row</a>

    </div>
</body>
</html>
