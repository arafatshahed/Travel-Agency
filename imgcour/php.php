<?php
      require "dbh.php";
      $i = 1;
      $sql = "select Pa_Img, Pa_Start, Pa_Destination from package;";
            $result = mysqli_query($conn, $sql);
            $resultcheck = mysqli_num_rows($result);
            while ($row = mysqli_fetch_assoc($result))
            {
                ?>

      <div class="imgbox">
        <div class="imgBx">
          <img src="<?php echo $row['Pa_Img'];?>" />
        </div>
        <?php $pID              = 2000 + $i;?>
        <div class="imgcontent">
          <h2>Title</h2>
          <p>
            Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do
            eiusmod tempor incididunt ut labore et dolore magna aliqua.
          </p>
          <a href="bookn.php?name=<?=$pID;?>">Book</a>
        </div>
      </div>
  		
  		<?php
          $i++;
          }
          $conn->close();
  		
  		?>
    </div>  