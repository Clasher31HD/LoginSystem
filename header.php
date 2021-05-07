<?php
    session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Loginsystem</title>
    <link rel="stylesheet" href="css/reset.css">
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
    <nav>
        <div class="wrapper">
            <a href="index.html"><img src="img/logo.png" alt="Logo"></a>
            <ul>
                <li><a href="index.php">Home</a></li>
                <li><a href="discover.php">Über uns</a></li>
                <li><a href="blog.php">Blog</a></li>
                <?php
                    if (isset($_SESSION["useruid"])) {
                        echo "<li><a href='profile.php'>Profil</a></li>";
                        echo "<li><a href='logout.php'>Abmelden</a></li>";
                    }
                    else {
                        echo "<li><a href='signup.php'>Registrieren</a></li>";
                        echo "<li><a href='login.php'>Anmelden</a></li>";
                    }
                ?>

            </ul>
        </div>
    </nav>