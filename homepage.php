<a?php
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
        <a href="#" class="logo">TutorSpot</a>
        <form>
            <div class="search">
                <span class="srch-icon material-symbols-outlined">search</span>
                <input class="srch" type="search" placeholder="Search" />
            </div>
        </form>
        <ul>
            <li><a href="#home">Home</a></li>
            <li>
                <a href="#account">My Account</a>
                <ul class="dropdown">
                    <li><a href="#">Bookings</a></li>
                    <li><a href="#">Message</a></li>
                    <li><a href="#">Profile</a></li>
                    <li><a href="#">History</a></li>
                </ul>
            </li>
            <li><a href="#tutors">For Tutors</a></li>
            <button class="out"><a href="logout.php">Logout</a></button>
        </ul>
    </header>

    <script src="script.js"></script>
    <script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>
</body>
</html>
