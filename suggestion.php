<?php
include('mp_connect.php');
include'top_menu.php';

// Collect data from form
$face_shape = $_POST['face_shape'];
$hair_type = $_POST['hair_type'];
if (isset($_SESSION['name'])) { 
$id=$_SESSION['userid'];
$sql = "UPDATE profile
       SET  FaceShape='$face_shape', hair_type='$hair_type'where id='$id'" ;
$conn->query($sql);}



// Fetch suitable hairstyles based on face shape and hair type
$sql = "SELECT * FROM hairstyles 
        WHERE face_shape='$face_shape' AND hair_type='$hair_type'";
$result = $conn->query($sql);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Your Hairstyle Suggestions</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <style>
        /* Container background */
        body {
            background: url('images/bg.jpg') no-repeat center center fixed;
            background-size: cover;
            font-family: Arial, sans-serif;
        }
        
        .container {
            background-color: rgba(255, 255, 255, 0.8);
            padding: 40px;
            border-radius: 15px;
            margin-top: 30px;
            box-shadow: 0 8px 16px rgba(0, 0, 0, 0.2);
        }

        /* Styling the card */
        .card {
            border: none;
            transition: transform 0.2s, box-shadow 0.2s;
        }
        .card:hover {
            transform: translateY(-10px);
            box-shadow: 0 10px 20px rgba(0, 0, 0, 0.3);
        }

        /* Styling card images with fixed size */
        .card-img-top {
            width: 100%;
            height: 300px; /* Set desired height */
            object-fit: cover; /* Ensures the image covers the area without stretching */
            object-position: top; /* Keeps the upper part of the image visible */
            border-radius: 10px;
            transition: transform 0.3s ease;
        }
        .card-img-top:hover {
            transform: scale(1.05);
            box-shadow: 0 6px 12px rgba(0, 0, 0, 0.2);
        }

        /* Show More/Show Less button styles */
        .show-more-btn {
            display: inline-block;
            padding: 10px 15px;
            background-color: #007bff;
            color: white;
            border-radius: 8px;
            cursor: pointer;
            text-decoration: none;
            font-weight: bold;
            margin-top: 10px;
            transition: background-color 0.3s ease;
        }

        .show-more-btn:hover {
            background-color: #0056b3;
        }

        .show-more-btn.active {
            background-color: #28a745;
        }

        /* Hidden section for hairstyle details */
        .toggle-details {
            display: none;
            padding-top: 10px;
        }

        .toggle-details.show {
            display: block;
        }

        /* Heading styles */
        h2 {
            font-size: 2.5rem;
            color: #333;
        }

        /* Other styling */
        .card-title {
            font-size: 1.25rem;
            color: #333;
        }

        .card-body {
            padding: 20px;
        }
    </style>
</head>
<body>
    <div class="container">
        <h2 class="text-center">Here are your hairstyle suggestions:</h2>
        <div class="row mt-4">
            <?php if ($result->num_rows > 0): ?>
                <?php while ($row = $result->fetch_assoc()): ?>
                    <div class="col-md-4">
                        <div class="card mb-4">
                            <img src="<?php echo $row['image_url']; ?>" class="card-img-top" alt="<?php echo htmlspecialchars($row['hairstyle_name']); ?>">
                            <div class="card-body text-center">
                                <h5 class="card-title"><?php echo htmlspecialchars($row['hairstyle_name']); ?></h5>
                                <a class="show-more-btn" id="btn-<?php echo $row['id']; ?>" onclick="toggleDetails(<?php echo $row['id']; ?>)">Show More</a>
                                <div id="details-<?php echo $row['id']; ?>" class="toggle-details">
                                    <p><strong>Description:</strong> <?php echo nl2br(htmlspecialchars($row['description'])); ?></p>
                                    <p><strong>Steps:</strong> <?php echo nl2br(htmlspecialchars($row['steps'])); ?></p>
                                </div>
                            </div>
                        </div>
                    </div>
                <?php endwhile; ?>
            <?php else: ?>
                <p class="text-center">Sorry, no hairstyle suggestions found for your combination of face shape and hair type.</p>
            <?php endif; ?>
        </div>
   <br>
            <a href="hairstyleinput.php">Previous page</a>
    </div>

    <!-- JavaScript to toggle hairstyle details -->
    <script>
        function toggleDetails(id) {
            // Get the clicked detail section and button
            var detailsDiv = document.getElementById('details-' + id);
            var clickedButton = document.getElementById('btn-' + id);

            // Toggle 'show' class on the details div
            detailsDiv.classList.toggle('show');

            // Change button text and class depending on visibility
            if (detailsDiv.classList.contains('show')) {
                clickedButton.innerHTML = "Show Less";
                clickedButton.classList.add('active');
            } else {
                clickedButton.innerHTML = "Show More";
                clickedButton.classList.remove('active');
            }
        }
    </script>
</body>
</html>
