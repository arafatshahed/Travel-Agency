<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
    <link rel="stylesheet" href="prdctstyle.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.min.js" charset="utf-8"></script>
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
 	$result = mysqli_query($conn,$sql);
                $resultcheck = mysqli_num_rows($result);
                if($resultcheck>0)
                {
                	while ($row = mysqli_fetch_assoc($result)) {
                    $P_start = $row['Pa_Start'];
                    $P_Destination = $row['Pa_Destination'];
                    $P_Price_Adult = $row['Pa_Price_Adult'];
                    $P_Price_Child = $row['Pa_Price_Child'];
                    $Tr_Type = $row['T_Type'];
                    $Com_ID = $row['Co_ID'];
                }
                }
            if ($conn->query($sql))
            {
                            

            }
            else
            {
            echo "Error" . $sql . "<br />" . $conn->error;
            }
		                    
			
			$sql2 = "select Pa_ID,Pa_img1, Pa_img2, Pa_img3
			from pa_image where Pa_ID = $paID;"; 
			$r =  mysqli_query($conn,$sql2);
			$rcheck = mysqli_num_rows($r);
			if($rcheck>0)
                {
                	while ($row2 = mysqli_fetch_assoc($r)) {
                    $img1 = $row2['Pa_img1'];
                    $img2 = $row2['Pa_img2'];
                    $img3 = $row2['Pa_img3'];
                }
      }
      $sql3 = "select Co_Name from company where Co_ID = $Com_ID;";
			$rr =  mysqli_query($conn,$sql3);
			$rrcheck = mysqli_num_rows($rr);
			if($rcheck>0)
                {
                	while ($row3 = mysqli_fetch_assoc($rr)) {
                    $coname = $row3['Co_Name'];
                }
			}
			$conn->close();

			
?>





    <div class="product-card">
      <h1><?php  echo $P_Destination;?></h1>
      <p><?php echo $P_start . " to " . $P_Destination;?></p>
      <div class="product-pic"></div>
      <div class="product-colors">
        <span class="blue active" data-color="#7ed6df" data-pic="url(<?php echo $img1;?>)"></span>
        <span class="green" data-color="#badc58" data-pic="url(<?php echo $img2;?>)"></span>
        <span class="yellow" data-color="#f9ca24" data-pic="url(<?php echo $img3;?>)"></span>
      </div>
      <div class="product-info">

			<?php
		if(isset($_SESSION['userID']))
		{
			?>

			<a class="product-button" href="reservation1.php?name=<?=$paID;?>">Book This Package</a>
			<?php
		}
		else
		{
			echo '<a class="product-button" href="signin1.php">Sign in to Book!</a>';
		}
		?>

        
      </div>
      <br>
      <div class="dis">
		The starting location is     <b><?php  echo $P_start;?></b>.<br>
		The Destination location is     <b><?php  echo $P_Destination;?></b>.<br>
		Price per adult is     <b><?php echo $P_Price_Adult;?></b> taka.<br>
		Price per child is     <b><?php echo $P_Price_Child;?></b> taka.<br>
		The transport of choice is     <b><?php  echo $Tr_Type;?></b>.<br>
    The Company  is     <b><?php  echo $coname;?></b>.<br>

		</div>
    </div>

    <script>
      $(".product-colors span").click(function(){
        $(".product-colors span").removeClass("active");
        $(this).addClass("active");
        $("body").css("background",$(this).attr("data-color"));
        $(".product-price").css("color",$(this).attr("data-color"));
        $(".product-button").css("color",$(this).attr("data-color"));
        $(".product-pic").css("background-image",$(this).attr("data-pic"));
      });
    </script>
  </body>
</html>
