<?php

?>
<!DOCTYPE html>
<html>
  <head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta charset="utf-8" />
    <title>Clip-Path Hover Effects</title>
    <link rel="stylesheet" href="imggridstyle.css" />
  </head>
  <body>
  	<div class="imgcontainer">
  	<?php
  	for($i=0;$i<15;$i++)
  	{
    ?>
      <div class="imgbox">
        <div class="imgBx">
          <img src="img1.jpg" />
        </div>
        <div class="imgcontent">
          <h2>Title</h2>
          <p>
            Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do
            eiusmod tempor incididunt ut labore et dolore magna aliqua.
          </p>
          <a href="#">Read More</a>
        </div>
      </div>
  		
  		<?php
  		}
  		
  		?>
    </div>
  </body>
</html>
