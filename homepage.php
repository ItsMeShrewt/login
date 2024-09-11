<?php
session_start();
include("connect.php");
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="style.css" />
    <link
        rel="stylesheet"
        href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200"
    />
    <title>Homepage</title>
</head>
<body>
    <header>
        <a href="homepage.php" class="logo">TutorSpot</a>
        <form>
            <div class="search">
                <span class="srch-icon material-symbols-outlined">search</span>
                <input class="srch" type="search" placeholder="Search" />
            </div>
        </form>
        <ul>
            <li><a href="homepage.php">Home</a></li>
            <li>
                <a href="account.html">My Account</a>
                <ul class="dropdown">
                    <li><a href="booking.html">Bookings</a></li>
                    <li><a href="message.html">Message</a></li>
                    <li><a href="profile.html">Profile</a></li>
                    <li><a href="history.html">History</a></li>
                </ul>
            </li>
            <li><a href="tutors.html">For Tutors</a></li>
            <button class="out"><a href="logout.php">Logout</a></button>
        </ul>
    </header>

    <section id="#home">
        <h1>Welcome to TutorSpot</h1>
        <p style="color: #333333;">
            <b style="color: cadetblue;">TutorSpot</b> is your go-to platform for connecting with qualified tutors who can help enhance your child's learning experience.<br>Whether you're looking for assistance in a specific subject or need a tutor<br>who matches your child's learning style, TutorSpot makes it easy to find and book the right tutor.
        </p>
    </section>

    <script src="script.js"></script>
    <script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>
</body>
</html>