<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <link rel="stylesheet" href="test.css" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Booikng</title>
</head>

<body>
    <?php
  session_start();
  $host = "localhost";
  $dbusername = "root";
  $dbpassword = "";
  $dbname = "Travel_Agency";
  $conn = new mysqli($host, $dbusername, $dbpassword, $dbname);
  $paID = $_GET["name"];
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
  $sql = "select Pa_Start, Pa_Destination,Co_ID, Pa_Price_Adult, Pa_Price_Child,T_Type
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
      $Com_ID = $row['Co_ID'];
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
  $sql3 = "select Co_Name from company where Co_ID = $Com_ID;";
  $rr =  mysqli_query($conn, $sql3);
  $rrcheck = mysqli_num_rows($rr);
  if ($rcheck > 0) {
    while ($row3 = mysqli_fetch_assoc($rr)) {
      $coname = $row3['Co_Name'];
    }
  }
  $conn->close();


  ?>
    <style>
    .conatainer {
        background-image: url(<?php echo $img1; ?>);
    }
    </style>
    <div class="container">
        <div class="mycard">
            <div class="headinfo">
                <h1><?php echo $P_Destination; ?></h1>
                <p><?php echo $P_start . " to " . $P_Destination; ?></p>
            </div>
            <div class="mimg">
                <img id="mainimg" src="<?php echo $img1 ?>" alt="" />
            </div>
            <div class="imgbtn">
                <img id="img1" onclick="imgchange(this.id)" src="<?php echo $img1 ?>" alt="" />
                <img id="img2" onclick="imgchange(this.id)" src="<?php echo $img2 ?>" alt="" />
                <img id="img3" onclick="imgchange(this.id)" src="<?php echo $img3 ?>" alt="" />
            </div>
            <?php
      if (isset($_SESSION['userID'])) {
      ?>

            <a class="mybtnb" href="reservation1.php?name=<?= $paID; ?>">Book This Package</a>
            <?php
      } else {
        echo '<a class="mybtnb" href="signin1.php">Sign in to Book!</a>';
      }
      ?>
            <div class="info">
                <br>
                <p>The starting location is <b><?php echo $P_start; ?></b>.</p>
                <p>The Destination location is <b><?php echo $P_Destination; ?></b>.</p>
                <p>Price per adult is <b><?php echo $P_Price_Adult; ?></b> taka.</p>
                <p>Price per child is <b><?php echo $P_Price_Child; ?></b> taka.</p>
                <p>The transport of choice is <b><?php echo $Tr_Type; ?></b>.</p>
                <p>The Company is <b><?php echo $coname; ?></b>.</p>
            </div>
        </div>
    </div>
    <script>
    function imgchange(timg) {
        if (timg == "img1") {
            var img1 = "<?php echo $img1 ?>";
            document.getElementById("mainimg").src = img1;
        }
        if (timg == "img2") {
            var img2 = "<?php echo $img2 ?>";
            document.getElementById("mainimg").src = img2;
        }
        if (timg == "img3") {
            var img3 = "<?php echo $img3 ?>";
            document.getElementById("mainimg").src = img3;
        }

        console.log(img1);
        console.log(img2);
        console.log(img3);
        /*var thisimg = "$"+"./images"
        document.getElementById("mainimg").src = ;*/
    }
    </script>
</body>

</html>