<!DOCTYPE html>
<html>
<head>
  <title>Exp</title>
  <meta name="viewport" content="width=device-width, initail-scale=1.0">
  <link rel="stylesheet" type="text/css" href="packimgstyle.css">
</head>
<body>
<div class="container3">
<?php 
        require "dbh.php";
        $i = 1;
        
            $sql = "select Pa_Img,  Pa_Destination, Pa_Desc from package;";
            $result = mysqli_query($conn, $sql);
            $resultcheck = mysqli_num_rows($result);
            while ($row = mysqli_fetch_assoc($result))
            {
                ?>
  <div class="card">
    <div class="imgbx">
      <img src="<?php echo $row['Pa_Img'];?>">
      <?php $pID              = 2000 + $i;?>
      
    </div>
    <div class="content">
      <div>
        <h2><?php echo $row['Pa_Destination'];?></h2>
        <button>add</button>
      </div>
    </div>
  </div>
  <?php
                $i++;
            }
                          
            $conn->close();
        ?>
</div>
</body>
</html>