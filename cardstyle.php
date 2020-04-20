
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link href="https://fonts.googleapis.com/css?family=Fjalla+One" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="style.css" media="all" />
    <link
      rel="stylesheet"
      href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css"
      integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh"
      crossorigin="anonymous"
    />
    
    <title>Document</title>
    <style>
        .col-md-4{
            padding: 10px;
        }
    </style>
  </head>
  <body>
    <div class="container" id ="123">
        <div class="row justify-content-center" id ="124">
            <?php 
            require "dbh.php";
            $i = 1;
            $sql = "select Pa_Img, Pa_Start, Pa_Destination from package;";
            $result = mysqli_query($conn, $sql);
            $resultcheck = mysqli_num_rows($result);
            while ($row = mysqli_fetch_assoc($result))
            {
                ?>
                <div class="col-md-4" id ="125" >
                    <div class="card shadow" id ="126" style="width: 18rem;">
                        <img src="<?php echo $row['Pa_Img'];?>" class="card-img-top" alt="..." />
                        <?php $pID              = 2000 + $i;?>
                            <div class="card-body">
                                <h5 class="card-title">Card title</h5>
                                <p class="card-text">
                                <?php echo $row['Pa_Start'] . " to " . $row['Pa_Destination'];?>
                                </p>
                                <a href="bookn.php?name=<?=$pID;?>" class="btn btn-primary">Book</a>
                            </div>
                    </div>
                </div>
                <?php
                $i++;
            }
                            
            $conn->close();
            ?> 
        </div>
    </div>
  </body>
</html>
