<?php
session_start();
$destination = filter_input(INPUT_POST, 'destination');
$av = 0;
$ppid;
if (!empty($destination)) {
    $host = "localhost";
    $dbusername = "root";
    $dbpassword = "";
    $dbname = "Travel_Agency";
    $conn = new mysqli($host, $dbusername, $dbpassword, $dbname);
    if (mysqli_connect_error()) {
        die('Connect Error (' . mysqli_connect_errno() . ')'
            . mysqli_connect_error());
    } else {
        $sql = "select Pa_ID, Pa_Destination from package where Pa_Destination like '%$destination%';";
        $result = mysqli_query($conn, $sql);
        $resultcheck = mysqli_num_rows($result);
        $rc = $resultcheck;
        if ($resultcheck > 0) {
            while ($row = mysqli_fetch_assoc($result)) {
                if ($resultcheck > 0) {
                    $av = 1;
                    $ppid = $row['Pa_ID'];
                } else {
                    if ($av != 1) {
                        $av = 0;
                    }
                }
                /*echo $row['Pa_Destination'];
                        echo "<br>";*/
            }
            if ($av == 1) {
                echo "This package is available";
                echo "<br>";
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link href="https://fonts.googleapis.com/css?family=Fjalla+One" rel="stylesheet">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css"
        integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous" />

    <title>Document</title>
    <style>
    .col-md-4 {
        padding: 10px;
    }
    </style>
</head>

<body>
    <div class="container" id="123">
        <div class="row justify-content-center" id="124">
            <?php
                            require "dbh.php";
                            $i = 1;
                            $sql = "select Pa_Img, Pa_Start, Pa_Destination from package where Pa_Destination like '%$destination%';";
                            $result = mysqli_query($conn, $sql);
                            $resultcheck = mysqli_num_rows($result);
                            while ($row = mysqli_fetch_assoc($result)) {
                                if ($resultcheck > 0) {
                            ?>
            <div class="col-md-4" id="125">
                <div class="card shadow" id="126" style="width: 18rem;">
                    <img src="<?php echo $row['Pa_Img']; ?>" class="card-img-top" alt="..." />
                    <?php $pID              = 2000 + $i; ?>
                    <div class="card-body">
                        <h5 class="card-title">Card title</h5>
                        <p class="card-text">
                            <?php echo $row['Pa_Start'] . " to " . $row['Pa_Destination']; ?>
                        </p>
                        <a href="bookn.php?name=<?= $pID; ?>" class="btn btn-primary">Book</a>
                    </div>
                </div>
            </div>
            <?php

                                }
                                $i++;
                            }

                            $conn->close();
                            ?>
        </div>
    </div>
</body>

</html>


<?php

            } else {
                echo "This package is not available yet.";
                echo "<br>";
            }
        }
    }
} else {
    echo "Destination should not be empty";
}

?>
<html>

<body>
    <p>You will be redirected to homepage in 15 seconds</p>
    <script>
    var timer = setTimeout(function() {
        window.location = 'index.php'
    }, 15000);
    </script>
</body>

</html>