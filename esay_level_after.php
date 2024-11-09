<?php
session_start();
if (!isset($_SESSION['user_id'])) {
  header("Location: login.php");
  exit;
}

?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>JagoeCoding - Settings</title>
  <style>
    /* General reset */
    * {
      margin: 0;
      padding: 0;
      box-sizing: border-box;
      font-family: 'Arial', sans-serif;
    }

    body {
      background-color: #0F0A2C;
      display: flex;
      height: 100vh;
      color: #FFFFFF;
    }

    /* Sidebar Styles */
    .sidebar {
      width: 250px;
      background-color: #161030;
      padding: 20px;
      display: flex;
      flex-direction: column;
      justify-content: space-between;
    }

    .sidebar h1 {
      font-size: 24px;
      font-weight: bold;
      margin-bottom: 30px;
      color: #FFFFFF;
    }

    .sidebar ul {
      list-style: none;
    }

    .sidebar li {
      margin: 15px 0;
    }

    .sidebar li a {
      text-decoration: none;
      color: #C2C2C2;
      font-size: 16px;
      display: flex;
      align-items: center;
      padding: 8px 0;
      transition: color 0.3s;
    }

    .sidebar li a img {
      margin-right: 10px;
      /* Space between image and text */
      width: 24px;
      height: 24px;
    }

    .sidebar li a:hover {
      color: #928EFF;
    }

    .sidebar .settings {
      margin-top: 20px;
      border-top: 1px solid #282048;
      padding-top: 15px;
    }

    /* Main Content Styles */
    .main-content {
      flex: 1;
      padding: 30px;
    }

    .main-content h1 {
      font-size: 30px;
      margin-bottom: 10px;
      color: #FFFFFF;
    }

    .main-content p {
      margin-bottom: 20px;
      color: #C2C2C2;
    }

    .section-title {
      font-size: 18px;
      font-weight: bold;
      margin: 0 auto 20px;
      /* Centers the element horizontally */
      padding: 10px 15px;
      background-color: #5B47E0;
      color: #FFFFFF;
      border-radius: 10px;
      display: inline-block;
      text-align: center;
    }

    .card-container {
      display: flex;
      justify-content: center;
      flex-wrap: wrap;
      gap: 55px;
    }

    .card {
      background-color: #8872e9;
      border-radius: 30px;
      padding: 30px;
      /* Removed padding to fit the image perfectly */
      margin: 10px;
      width: calc(30% - 80px);
      /* Adjust card width to fit three in a row */
      display: flex;
      flex-direction: column;
      align-items: center;
      text-align: center;
      box-shadow: 10px 10px 10px rgba(0, 0, 0, 0.5);
      overflow: hidden;
      /* Prevent overflow of content */
      transition: transform 0.3s;
      /* Add a transition effect */
    }

    .card:hover {
      transform: scale(1.05);
    }

    .card img {
      width: 70px;
      height: 70px;
      object-fit: cover;
    }

    .next-arrow {
      font-size: 24px;
      color: #FFFFFF;
      position: absolute;
      top: 50%;
      right: 20px;
      cursor: pointer;
      transform: translateY(-50%);
    }

    .next-arrow:hover {
      color: #928EFF;
    }
  </style>
</head>

<body>
  <!-- Sidebar -->
  <div class="sidebar">
    <div>
      <h1>JagoeCoding</h1>
      <ul>
        <!-- Dashboard with Image -->
        <li>
          <a href="<?php echo isset($_SESSION['user']) ? 'dashboard.php' : 'login.php'; ?>">
            <img src="element-icon/dashboard.png" alt="Dashboard Icon"> <!-- Replace with your image URL -->
            Dashboard
          </a>
        </li>
        <!-- Course with Image -->
        <li>
          <a href="course.php">
            <img src="element-icon/course.png" alt="Course Icon"> <!-- Replace with your image URL -->
            Course
          </a>
        </li>
        <!-- Leaderboard with Image -->
        <li>
          <a href="leaderboard.php">
            <img src="element-icon/leaderboard.png" alt="Leaderboard Icon"> <!-- Replace with your image URL -->
            Leaderboard
          </a>
        </li>
        <!-- Profile with Image -->
        <li>
          <a href="profile.php">
            <img src="element-icon/profil.png" alt="Profile Image"> <!-- Replace with your image URL -->
            Profile
          </a>
        </li>
      </ul>
    </div>
    <div class="settings">
      <ul>
        <!-- Settings with Image -->
        <li>
          <a href="settings.php">
            <img src="element-icon/setting.png" alt="Settings Icon"> <!-- Replace with your image URL -->
            Settings
          </a>
        </li>
        <!-- Help with Image -->
        <li>
          <a href="help.php">
            <img src="element-icon/help.png" alt="Help Icon"> <!-- Replace with your image URL -->
            Help
          </a>
        </li>
        <!-- Log Out with Image -->
        <li>
          <a href="logout.php">
            <img src="element-icon/logout.png" alt="Log Out Icon"> <!-- Replace with your image URL -->
            Log Out
          </a>
        </li>
      </ul>
    </div>
  </div>

  <!-- Main Content -->
  <div class="main-content">
    <h1>Easy level - Yuk Mulai!</h1>
    <p>Belajar dasar coding dengan cara asik. Siap?</p>
    <div class="section-title">Bagian 1: Pengenalan Python</div>
    <div class="card-container">
      <!-- Six Cards -->
      <div class="card" style="background-color: #FFFFFF;">
        <img src="element-icon/approved.png" alt="Icon 1">
      </div>
      <div class="card">
        <img src="element-icon/game-code.png" alt="Icon 2">
      </div>
      <div class="card">
        <img src="element-icon/game-code.png" alt="Icon 3">
      </div>
      <div class="card">
        <img src="element-icon/game-code.png" alt="Icon 4">
      </div>
      <div class="card">
        <img src="element-icon/game-code.png" alt="Icon 5">
      </div>
      <div class="card">
        <img src="element-icon/game-code.png" alt="Icon 6">
      </div>
    </div>
    <div class="next-arrow">&#8250;</div>
  </div>
</body>

</html>