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
    <title>Face Verification</title>
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
            width: 300px;
            border: 1px solid rgba(255, 255, 255, 0.2);
        }

        .verification-container h2 {
            margin-bottom: 20px;
            font-size: 1.5em;
            color: #e0e0ff;
        }

        .verification-container img {
            margin-bottom: 20px;
            width: 80px;
            /* Adjust image size */
            height: auto;
        }

        .verification-container p {
            margin-bottom: 30px;
            color: #bbb;
            font-size: 0.9em;
        }

        .verification-container button {
            width: 120px;
            padding: 10px;
            margin: 5px;
            border: none;
            border-radius: 20px;
            font-size: 1em;
            cursor: pointer;
            transition: background 0.3s;
        }

        .proceed-btn {
            background: #6a5acd;
            color: white;
        }

        .proceed-btn:hover {
            background: #5a4abc;
        }

        .cancel-btn {
            background: #444;
            color: white;
        }

        .cancel-btn:hover {
            background: #333;
        }
    </style>
    <script>
        function cancelVerification() {
            window.location.href = 'login.php'; // Redirect to the login page
        }
    </script>
</head>

<body>
    <div class="verification-container">
        <h2>Verify Your Face</h2>
        <!-- Dynamically display user profile picture (if available) -->
        <img src="<?php echo isset($_SESSION['user_image']) ? $_SESSION['user_image'] : 'image/profil.png'; ?>" alt="Face Icon">
        <p>Please position your face in the camera frame.</p>

        <!-- Form to submit verification -->
        <form action="http://192.168.100.16:5000/proceed" method="post">
            <button type="submit" class="proceed-btn">Proceed</button>
        </form>

        <!-- Cancel Button -->
        <button class="cancel-btn" onclick="cancelVerification()">Cancel</button>
    </div>
</body>

</html>
