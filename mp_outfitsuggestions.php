<?php
include('mp_connect.php');
include'top_menu.php';
$bt = $_POST['bodyType'];



    $sql = "SELECT * FROM outfit WHERE bodyType='$bt'";
    $result = $conn->query($sql);

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Your Outfit Suggestions</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>
<body>
    <div class="container mt-5">
        <h2 class="text-center">Hello, ! Here are your outfit suggestions:</h2>
        <div class="row mt-4">
            <?php if ($result->num_rows > 0): ?>
                <?php while ($row = $result->fetch_assoc()): ?>
                    <div class="col-md-4">
                        <div class="card mb-4">
                            <img src="<?php echo $row['outfit_url']; ?>" class="card-img-top"  style="height: 300px; object-fit: cover;">
                            
                        </div>
                    </div>
                <?php endwhile; ?>
            <?php else: ?>
                <p class="text-center">Sorry, no outfit suggestions found for your bodytype.</p>
            <?php endif; ?>
        </div>
    </div>
</body>
</html>

    
        
        
       
