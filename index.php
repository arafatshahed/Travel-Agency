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
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">
    
</head>
<body class="bak">
    <?php
    require "header.php";
    ?>
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
     
    <footer class="two">
        <div class="container">
            <div class="lorem"> <h1>ALL PACKAGE</h1><br>
                
                    <ul>
                        <li><a href="package.php">All package info</a></li>
                    </ul>
                    <br><p>The below packages are avilable currently.<p>
                    
            </div>
        </div>
        <div class="container">
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
                    <p class="detail"><?php echo $row['Pa_Start'] . " to " . $row['Pa_Destination'];?></p>
                    <div class="overlays"></div>
                    <?php $pID              = 2000 + $i;?>
                <div class="btnb"><a href="bookn.php?name=<?=$pID;?>"><button class ="btn">Book</button></a></div>
                </div>
                
                <?php
                $i++;
            }
                          
            $conn->close();
        ?>
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
    </footer>
</body>
</html>