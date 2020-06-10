<?php

$host       = "localhost";
$dbusername = "root";
$dbpassword = "";
$dbname     = "Travel_Agency";
$conn       = new mysqli($host, $dbusername, $dbpassword, $dbname);

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <header>
        <a class="logo" href="index.php"><img src="images/1a.png" alt="logo"></a>

        <nav>
            <ul class="nav__links">
                <li><a href="">

                        <?php
                        if (isset($_SESSION['userID'])) {
                            echo $_SESSION['user'];
                        } else {
                            echo "USER";
                        }
                        ?>
                        <span class="arrow-down"></span></a>
                    <ul class="dropdown">
                        <?php
                        if (isset($_SESSION['userID'])) {
                            echo '<li><a href="logout.php">LOG OUT</a></li>';
                        } else {
                            echo '<li><a href="signin1.php">SIGN IN</a></li>
                    <li><a href="signup.php">SIGN UP</a></li> ';
                            /*
                    date_default_timezone_set('Asia/Dhaka');
                    $date = date('Y-m-d H:i:s');
                    echo $date;*/
                        }
                        ?>
                    </ul>
                <li><a href="">ABOUT</a></li>
            </ul>
        </nav>
        <a class="cta" href="#">Contact</a>
        <p onclick="openNav()" class="menu cta">Menu</p>
    </header>
    <div id="mobile__menu" class="overlay">
        <a class="close" onclick="closeNav()">&times;</a>
        <div class="overlay__content">
            <?php
            if (isset($_SESSION['userID'])) {
                echo '<a href="logout.php">LOG OUT</a>';
            } else {
                echo '<a href="signin1.php">SIGN IN</a>
                    <a href="signup.php">SIGN UP</a>';
            }
            ?>
            <a href="">ABOUT</a>
            <a href="">Contact</a>

        </div>
    </div>
    <script type="text/javascript" src="mobile.js" />
    </script>
</body>

</html>