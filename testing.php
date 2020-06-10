<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="test.css">
</head>

<body>
    <div class="container">
        <div class="row">
            <?php
            require "dbh.php";
            $sql = "select Pa_ID, Pa_Img, Pa_Start, Pa_Destination, Pa_Visibility from package;";
            $result = mysqli_query($conn, $sql);
            $resultcheck = mysqli_num_rows($result);
            while ($row = mysqli_fetch_assoc($result)) {
                if ($row['Pa_Visibility']) {
            ?><div class="column">
                <img src="<?php echo $row['Pa_Img']; ?>" alt="Snow" style="width:97%; height:97%">
                <p class="detail"><?php echo $row['Pa_Start'] . " to " . $row['Pa_Destination']; ?></p>
                <div class="overlays"></div>
                <?php $pID              = $row['Pa_ID'] ?>
                <div class="btnb"><a href="bookn.php?name=<?= $pID; ?>"><button class="btn">Book</button></a></div>
            </div>

            <?php
                }
            }

            $conn->close();

            ?>
        </div>
    </div>
</body>

</html>