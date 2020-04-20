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
    <link rel="stylesheet" href="contract_style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.11.2/css/all.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">
    
</head>
<body class="bak">
<header>
            <img class="logo" src="images/1a.png" alt="logo">
            <nav>
                <ul class="nav__links">
                    <li><a href="">
                    
                    
                    <?php
                    if(isset($_SESSION['userID']))
                    {
                        echo $_SESSION['user'];
                    }
                    else
                    {
                        echo "USER";
                    }
                    ?>
                    <span class="arrow-down"></span></a>
                <ul class="dropdown">
                    <?php
                    if(isset($_SESSION['userID']))
                    {
                        echo '<li><a href="logout.php">LOG OUT</a></li>';
                    }
                    else
                    {
                        echo '<li><a href="signin1.php">SIGN IN</a></li>
                        <li><a href="signup.html">SIGN UP</a></li> ';
                        date_default_timezone_set('Asia/Dhaka');
                        $date = date('Y-m-d H:i:s');
                        echo $date;
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
                if(isset($_SESSION['userID']))
                    {
                        echo '<a href="logout.php">LOG OUT</a>';
                    }
                    else
                    {
                        echo '<a href="signin1.php">SIGN IN</a>
                        <a href="signup.html">SIGN UP</a>';
                    }
                    ?>
                    <a href="">ABOUT</a>
                    <a href="">Contact</a>

            </div>
        </div>
        <script type="text/javascript" src="mobile.js"/>
    </script>
    <form method="post" action="destination.php">
        
    <center >
        <div class="container1">
        <div class="pagol">
        
        <div class="container-img">
            <img src="images/tumblr_ncsceqt4qx1rpuw07o1_500.jpg" alt="" />
                
                <div class="wrap">
                    <div class="search">
                        <input type="text" class="searchTerm" placeholder="Where are you going?" name="destination">
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
        </div>
        </div>
    </section >
    
    <footer class="two">
        <div class="container">
        <div class="lorem"> <h1>ALL PACKAGE</h1><br>
            
                <ul>
                    <li><a href="package.php">All package info</a></li>
                </ul>
                <br><p>The below packages are avilable currently.<p>
                
        </div>
        
        <div class="row">
        <?php 
        require "dbh.php";
        $i = 1;
        
            $sql = "select Pa_Img, Pa_Start, Pa_Destination from package;";
            $result = mysqli_query($conn, $sql);
            $resultcheck = mysqli_num_rows($result);
            while ($row = mysqli_fetch_assoc($result))
            {
                ?><div class="column">
                    <img src="<?php echo $row['Pa_Img'];?>" alt="Snow" style="width:97%; height:97%">
                    <div class="overlays"></div>
                    <?php $pID              = 2000 + $i;?>
                    <p class="title"><?php echo $row['Pa_Start'] . " to " . $row['Pa_Destination'];?></p>
                <div class="btnb"><a href="bookn.php?name=<?=$pID;?>"><button class ="btn">Book</button></a></div>
                </div>
                
                <?php
                $i++;
            }
                          
            $conn->close();
        ?>
        </div>
   
    <footer class="three">
<br><br>
    <div class="contact-info">
      <div class="card">
        <i class="card-icon far fa-envelope"></i>
        <p>email@domain.com</p>
      </div>

      <div class="card">
        <i class="card-icon fas fa-phone"></i>
        <p>+000000000000</p>
      </div>

      <div class="card">
        <i class="card-icon fas fa-map-marker-alt"></i>
        <p>New York, USA</p>
      </div>
    </div>

        <div class="container">
        <br>
        <h2> Travel Agency, copyright &copy; 2020 </h2>
        <br>
    </div>
    </footer>
    </html>