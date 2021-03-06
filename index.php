<?php
session_start();
$host       = "localhost";
$dbusername = "root";
$dbpassword = "";
$dbname     = "Travel_Agency";
$conn       = new mysqli($host, $dbusername, $dbpassword, $dbname);

?>

<!DOCTYPE HTML>
<html lang="en-US">

<head>
    <meta charset="UTF-8">
    <title>Travel Agency</title>
    <link href="https://fonts.googleapis.com/css?family=Fjalla+One" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="style.css" media="all" />
    <link rel="stylesheet" type="text/css" href="packimstyle.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.11.2/css/all.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css"
        integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">

</head>

<body class="bak">
    <?php
    require "header.php";
    ?>
    <form method="post" action="destination.php">

        <center>
            <div class="container1">
                <div class="pagol">
                    <div class="container-img">
                        <img src="images/tumblr_ncsceqt4qx1rpuw07o1_500.jpg" alt="" />
                        <div class="wrap">
                            <div class="search">
                                <input type="text" class="searchTerm" placeholder="Where are you going?"
                                    name="destination">
                                <button type="submit" class="searchButton">
                                    <i class="fa fa-search"></i>
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </center>
    </form>

    <footer class="two">
        <div class="container">
            <div class="lorem">
                <h1>ALL PACKAGE</h1><br>
                <br>
                <p>The below packages are avilable currently.<p>

            </div>
        </div>
        <div class="container">
            <div class="row">
                <?php
                require "dbh.php";
                $i = 1;

                $sql = "select Pa_ID, Pa_Img, Pa_Start, Pa_Destination, Pa_Visibility from package;";
                $result = mysqli_query($conn, $sql);
                $resultcheck = mysqli_num_rows($result);
                while ($row = mysqli_fetch_assoc($result)) {
                    if ($row['Pa_Visibility']) {
                ?><div class="column">
                    <img src="<?php echo $row['Pa_Img']; ?>">
                    <p class="detail"><?php echo $row['Pa_Start'] . " to " . $row['Pa_Destination']; ?></p>
                    <div class="overlays"></div>
                    <?php $pID              = $row['Pa_ID'] ?>
                    <div class="btnb"><a href="bookn.php?name=<?= $pID; ?>"><button class="btn">Book</button></a></div>
                </div>

                <?php
                    }
                }

                $conn->close();
                ?>
            </div>
        </div>
        <div class="container">
            <div class="mcardr">
                <div class="mcardc">
                    <div class="cards">
                        <br>
                        <h2>For Companies</h2>
                        <br>
                        <?php
                        if (!isset($_SESSION['compID'])) {
                            echo '<a href="cosignup.php"><p>Register</p></a>';
                            echo '<br>';
                            echo '<a href="cosignin.php"><p>Sign In</p></a>';
                            echo '<br>';
                        } else {
                            echo '<a href="addpackage.php"><p>Add Package</p></a>';
                            echo '<a href="logout.php"><p>Sign Out</p></a>';
                        }
                        ?>

                    </div>
                </div>
            </div>
            <div class="container">
                <?php
                require "contractf.php";
                ?>
                <br>
                <h2> Travel Agency, copyright &copy; 2020 </h2>
                <br>
            </div>

            <?php
            if (!isset($_SESSION['admin'])) {
                echo '<a href="admin/adminsignin.php" target="_blank" >Admin Login</a><br><br><br>';
            } else {
                echo '<a href="package.php"><p>Manage Package</p></a>';
                echo '<br>';
                echo '<a href="logout.php"><p>Sign Out</p></a>';
            }
            ?>



    </footer>
</body>

</html>