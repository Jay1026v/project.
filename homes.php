<?php

include 'configs.php';
session_start();
$user_id = $_SESSION['user_id'];

if(!isset($user_id)){
   header('location:logins.php');
};

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="navigations.css">
    <title>Navigation Bar</title>
</head>
<body>
    <nav>
        <ul class="nav-list">
            <li><a href="#">🆕New Updates</a></li>
            <li><a href="achivements.html">🏅Achievements</a></li>
            <li><a href="activities.html">🅰Activities</a></li>
            <li><a href="timtable.html">📅Timetable</a></li>
            <li><a href="fees.html">🏦Fees</a></li>
            <li><a href="profile.php">Profile</a></li>
            <li><a href="logins.php"> 😓logout</a></li>
        </ul>
    </nav>
<div id="quote-container">
        <blockquote id="quote">This is the initial quote.</blockquote>
    </div>
    <script src="script.js"></script>


    <div class="image-container">
        <img src="download.png" alt="image">
    </div>

    


    <h1 align="center">Courses</h1>
    <h2 align="center">
        <a href="http://www.rcti.cteguj.in/programs/detail/258">• Computer Engg</a>
        </h2>

    <h2 align="center">
        <a href="http://www.rcti.cteguj.in/programs/detail/260">• Mechanical Engg</a>
        </h2>

    <h2 align="center">
        <a href="http://www.rcti.cteguj.in/programs/detail/256">• Civil Engg</a>
        </h2>

        <h2 align="center">
            <a href="http://www.rcti.cteguj.in/programs/detail/263">• Textile Engg</a>
            </h2>

            <h2 align="center">
                <a href="http://www.rcti.cteguj.in/programs/detail/257">• printing Engg</a>
                </h2>

                <h2 align="center">
                    <a href="http://www.rcti.cteguj.in/programs/detail/259">• IT Engg</a>
                    </h2>

                    <footer>
        <img src="jd_consultancy_logo.png" alt="RCTI Logo">
        <p>RCTI</p>
    </footer>

</body>
</html>
 