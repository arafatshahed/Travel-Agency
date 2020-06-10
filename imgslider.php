<!DOCTYPE html>
<html lang="en">

<head>
    <title>Bootstrap Example</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>

</head>

<body>


    <div class="card">
        <div class="top-section">


            <?php
      session_start();
      $host = "localhost";
      $dbusername = "root";
      $dbpassword = "";
      $dbname = "Travel_Agency";
      $conn = new mysqli($host, $dbusername, $dbpassword, $dbname);
      $paID = 2001;
      $P_start;
      $P_Destination;
      $P_Price_Adult;
      $P_Price_Child;
      $Tr_Type;
      $img1;
      $img2;
      $img3;
      $r;
      $sql2;
      $sql = "select Pa_Start, Pa_Destination, Pa_Price_Adult, Pa_Price_Child,T_Type
 	from package p, transport t
 	where Pa_ID = $paID and p.T_ID = t.T_ID;";
      $result = mysqli_query($conn, $sql);
      $resultcheck = mysqli_num_rows($result);
      if ($resultcheck > 0) {
        while ($row = mysqli_fetch_assoc($result)) {
          $P_start = $row['Pa_Start'];
          $P_Destination = $row['Pa_Destination'];
          $P_Price_Adult = $row['Pa_Price_Adult'];
          $P_Price_Child = $row['Pa_Price_Child'];
          $Tr_Type = $row['T_Type'];
        }
      }
      if ($conn->query($sql)) {
      } else {
        echo "Error" . $sql . "<br />" . $conn->error;
      }


      $sql2 = "select Pa_ID,Pa_img1, Pa_img2, Pa_img3
			from pa_image where Pa_ID = $paID;";
      $r =  mysqli_query($conn, $sql2);
      $rcheck = mysqli_num_rows($r);
      if ($rcheck > 0) {
        while ($row2 = mysqli_fetch_assoc($r)) {
          $img1 = $row2['Pa_img1'];
          $img2 = $row2['Pa_img2'];
          $img3 = $row2['Pa_img3'];
        }
      }
      $conn->close();


      ?>



            <div class="container">
                <h2>Carousel Example</h2>
                <div id="myCarousel" class="carousel slide" data-ride="carousel">
                    <!-- Indicators -->
                    <ol class="carousel-indicators">
                        <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
                        <li data-target="#myCarousel" data-slide-to="1"></li>
                        <li data-target="#myCarousel" data-slide-to="2"></li>
                    </ol>

                    <!-- Wrapper for slides -->
                    <div class="carousel-inner">
                        <div class="item active">
                            <img src="<?php echo $img1; ?>" alt="Los Angeles" style="width:40%;">
                        </div>

                        <div class="item">
                            <img src="<?php echo $img2; ?>" alt="Chicago" style="width:100%;">
                        </div>

                        <div class="item">
                            <img src="<?php echo $img3; ?>" alt="New york" style="width:100%;">
                        </div>
                    </div>

                    <!-- Left and right controls -->
                    <a class="left carousel-control" href="#myCarousel" data-slide="prev">
                        <span class="glyphicon glyphicon-chevron-left"></span>
                        <span class="sr-only">Previous</span>
                    </a>
                    <a class="right carousel-control" href="#myCarousel" data-slide="next">
                        <span class="glyphicon glyphicon-chevron-right"></span>
                        <span class="sr-only">Next</span>
                    </a>
                </div>
            </div>

</body>

</html>