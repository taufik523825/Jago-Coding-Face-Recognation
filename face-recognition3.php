<?php
// Start the session (optional if you want to manage user sessions)
session_start();

// Optional: You can check if the user is authenticated or not before showing the page
// if (!isset($_SESSION['user'])) {
//     header('Location: login.php');
//     exit;
// }
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Face Recognition Setup</title>
    <style>
        body {
            margin: 0;
            font-family: Arial, sans-serif;
            background: radial-gradient(circle at top left, #1c1c3c, #000);
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            color: white;
        }

        .verification-container {
            background: #1e1e3f;
            padding: 40px;
            border-radius: 15px;
            box-shadow: 0 4px 30px rgba(255, 255, 255, 0.1), 0 0 15px rgba(106, 90, 205, 0.5);
            text-align: center;
            width: 320px;
            border: 1px solid rgba(255, 255, 255, 0.2);
        }

        .verification-container h2 {
            margin-bottom: 20px;
            font-size: 1.5em;
            color: #e0e0ff;
        }

        .face-icon {
            margin-bottom: 20px;
            font-size: 3em;
            color: #bbb;
        }

        .verification-container p {
            margin-bottom: 30px;
            color: #bbb;
            font-size: 0.9em;
        }

        .verification-container button {
            width: 120px;
            padding: 10px;
            border: none;
            border-radius: 20px;
            font-size: 1em;
            cursor: pointer;
            transition: background 0.3s;
        }

        .activate-btn {
            background: #6a5acd;
            color: white;
        }

        .activate-btn:hover {
            background: #5a4abc;
        }

        .verification-container img {
            margin-bottom: 20px;
            width: 80px;
            /* Sesuaikan ukuran gambar */
            height: auto;
        }
    </style>
</head>

<body>
    <div class="verification-container">
        <h2>Set Up Face Recognition</h2>
        <!-- Dynamically display user profile picture (if available) -->
        <img src="<?php echo isset($_SESSION['user_image']) ? $_SESSION['user_image'] : 'image/profil.png'; ?>" alt="Face Icon">
        <p>Please position your face in the camera frame for setup.</p>
        <button class="activate-btn" onclick="activateFaceRecognition()">Activate</button>
    </div>

    <script>
        // Example function to simulate face recognition setup
        function activateFaceRecognition() {
            alert('Face recognition setup activated!');
            // Implement face recognition functionality here
        }
    </script>
</body>

</html>
