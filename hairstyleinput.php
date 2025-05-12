<?php 
include('mp_connect.php');
include('top_menu.php'); ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Find Your Perfect Hairstyle</title>
    
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    
    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;600&display=swap" rel="stylesheet">
    
    <!-- Font Awesome Icons -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    
    <style>
        body {
            font-family: 'Poppins', sans-serif;
            background-color: #f4f4f9;
            color: #333;
        }
        
        .container {
            margin-top: 50px;
            max-width: 700px;
        }

        h2 {
            font-weight: 600;
            color: #007bff;
            margin-bottom: 30px;
        }

        .form-group label {
            font-weight: 500;
        }

        .form-control {
            border-radius: 8px;
            padding: 10px;
            font-size: 16px;
        }

        .btn-primary {
            background-color: #007bff;
            border: none;
            padding: 10px;
            font-size: 18px;
            transition: background-color 0.3s ease;
        }

        .btn-primary:hover {
            background-color: #0056b3;
        }

        .btn-block {
            padding: 10px;
            font-size: 18px;
            border-radius: 10px;
        }

        .quiz-section {
            display: none; /* Initially hidden */
            background-color: #f9f9f9;
            padding: 20px;
            border-radius: 10px;
            margin-bottom: 20px;
        }

        .quiz-section h5 {
            margin-bottom: 15px;
            color: #555;
        }

        .quiz-section .form-group {
            margin-bottom: 15px;
        }

        #quizResult {
            display: none;
            margin-top: 20px;
            padding: 10px;
            font-size: 18px;
            background-color: #d4edda;
            border-color: #c3e6cb;
            color: #155724;
            border-radius: 8px;
        }

        /* Tooltip styling for better UX */
        .form-group label button {
            background: none;
            border: none;
            color: #007bff;
            font-size: 0.9rem;
            cursor: pointer;
        }

        .form-group label button:hover {
            text-decoration: underline;
        }

    </style>
</head>
<body>


    <div class="container mt-5">
        <h2 class="text-center">Find Your Perfect Hairstyle</h2>

        <form action="suggestion.php" method="POST" class="mt-4">
            

            <div class="form-group">
                <label for="face_shape"><i class="fas fa-user-circle"></i> Select Your Face Shape 
                    <button type="button" class="btn btn-link p-0 ml-2" id="startQuiz">Don't know? Take the quiz below!</button>
                </label>
                <select class="form-control" id="face_shape" name="face_shape" required>
                    <option value="">--Select Face Shape--</option>
                    <option value="Oval">Oval</option>
                    <option value="Round">Round</option>
                    <option value="Square">Square</option>
                    <option value="Heart">Heart</option>
                    <option value="Diamond">Diamond</option>
                    <option value="Rectangle">Rectangle</option>
                    <option value="Triangle">Triangle</option>
                </select>
            </div>

            <!-- Face Shape Quiz Section -->
            <div class="quiz-section" id="quizSection">
                <h5>Answer the questions below to determine your face shape:</h5>

                <div class="form-group">
                    <label for="jawline">What is the shape of your jawline?</label>
                    <select class="form-control" id="jawline">
                        <option value="">--Select Jawline Shape--</option>
                        <option value="Oval">Soft and rounded</option>
                        <option value="Square">Sharp and angular</option>
                        <option value="Round">Round and smooth</option>
                        <option value="Heart">Pointed chin</option>
                        <option value="Triangle">Narrow chin</option>
                    </select>
                </div>

                <div class="form-group">
                    <label for="forehead">How wide is your forehead?</label>
                    <select class="form-control" id="forehead">
                        <option value="">--Select Forehead Shape--</option>
                        <option value="Oval">Wider than the chin</option>
                        <option value="Square">Equal to the width of the jawline</option>
                        <option value="Round">Rounded</option>
                        <option value="Heart">Widest part of the face</option>
                        <option value="Rectangle">Longer than it is wide</option>
                    </select>
                </div>

                <div class="form-group">
                    <label for="cheekbones">How prominent are your cheekbones?</label>
                    <select class="form-control" id="cheekbones">
                        <option value="">--Select Cheekbone Structure--</option>
                        <option value="Oval">High and soft</option>
                        <option value="Square">Prominent and angular</option>
                        <option value="Round">Rounded and full</option>
                        <option value="Diamond">Very high and sharp</option>
                    </select>
                </div>

                <div class="form-group">
                    <label for="face_length">How would you describe the length of your face?</label>
                    <select class="form-control" id="face_length">
                        <option value="">--Select Face Length--</option>
                        <option value="Oval">Longer than it is wide</option>
                        <option value="Square">Equal length and width</option>
                        <option value="Rectangle">Long and angular</option>
                        <option value="Diamond">Wider in the middle</option>
                        <option value="Round">Almost equal length and width</option>
                    </select>
                </div>

                <button type="button" class="btn btn-primary btn-block" id="submitQuiz">Submit Quiz</button>

                <div id="quizResult" class="alert alert-success"></div>
            </div>

            <div class="form-group mt-4">
                <label for="hair_type"><i class="fas fa-cut"></i> Select Your Hair Type</label>
                <select class="form-control" id="hair_type" name="hair_type" required>
                    <option value="">--Select Hair Type--</option>
                    <option value="Straight">Straight</option>
                    <option value="Wavy">Wavy</option>
                    <option value="Curly">Curly</option>
                    <option value="Coily">Coily</option>
                </select>
            </div>

            <button type="submit" class="btn btn-primary btn-block"><i class="fas fa-search"></i> Get Hairstyle Suggestions</button>
        </form>
    </div>

    <!-- Bootstrap JS and dependencies -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.2/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

    <script>
        document.getElementById('submitQuiz').addEventListener('click', function() {
            // Get quiz answers
            const jawline = document.getElementById('jawline').value;
            const forehead = document.getElementById('forehead').value;
            const cheekbones = document.getElementById('cheekbones').value;
            const faceLength = document.getElementById('face_length').value;

            // Determine face shape based on answers
            let faceShape = '';

            if (jawline === 'Oval' && forehead === 'Oval' && cheekbones === 'Oval' && faceLength === 'Oval') {
                faceShape = 'Oval';
            } else if (jawline === 'Square' && forehead === 'Square' && cheekbones === 'Square' && faceLength === 'Square') {
                faceShape = 'Square';
            } else if (jawline === 'Round' && forehead === 'Round' && cheekbones === 'Round' && faceLength === 'Round') {
                faceShape = 'Round';
            } else if (jawline === 'Heart' && forehead === 'Heart' && cheekbones === 'Diamond' && faceLength === 'Heart') {
                faceShape = 'Heart';
            } else if (jawline === 'Triangle' && forehead === 'Rectangle' && cheekbones === 'Diamond' && faceLength === 'Rectangle') {
                faceShape = 'Triangle';
            } else {
                faceShape = 'Uncertain. You may want to consult a stylist for a more accurate determination!';
            }

            // Display the result
            const resultDiv = document.getElementById('quizResult');
            resultDiv.style.display = 'block';
            resultDiv.textContent = `Based on your answers, your face shape is likely: ${faceShape}`;
        });

        // Show quiz section when the button is clicked
        document.getElementById('startQuiz').addEventListener('click', function() {
            const quizSection = document.getElementById('quizSection');
            quizSection.style.display = quizSection.style.display === 'none' || quizSection.style.display === '' ? 'block' : 'none';
        });
    </script>
</body>
</html>
