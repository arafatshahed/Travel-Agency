<!DOCTYPE html>
<html>
<head>
  <title>Exp</title>
  <meta name="viewport" content="width=device-width, initail-scale=1.0">
  <link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
<div class="container">
<?php 
        require "dbh.php";
        $i = 1;
        
            $sql = "select Pa_Img from package;";
            $result = mysqli_query($conn, $sql);
            $resultcheck = mysqli_num_rows($result);
            while ($row = mysqli_fetch_assoc($result))
            {
                
                ?><div class="card">
                  <div class="imgbx">
                    <img src="<?php echo $row['Pa_Img'];?>">
                    <?php $pID              = 2000 + $i;?>

                  </div>
                  <div class="content">
                    <div>
                      <h2>Packdghvsdds dcd</h2>
                      <p>
                        gsdvfgjsd djb vdb sd sbvdsdd,sdhvsdbvz hdhcsjdjddssdh
                      </p>
                    </div>
                  </div>
                </div>
                <div class="btnb"><a href="book1.php?name=<?=$pID;?>"><button class ="btn">Book</button></a></div>
                </div>
        <?php
        $i++;
          }
           $conn->close();
?>
</div>
</body>
</html>