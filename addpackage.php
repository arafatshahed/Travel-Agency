<!DOCTYPE html>
<html lang="en">

<head>
    <title>Add Package</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!--===============================================================================================-->
    <link rel="icon" type="image/png" href="images/icons/favicon.ico" />
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="vendor/bootstrap/css/bootstrap.min.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="fonts/font-awesome-4.7.0/css/font-awesome.min.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="fonts/Linearicons-Free-v1.0.0/icon-font.min.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="vendor/animate/animate.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="vendor/css-hamburgers/hamburgers.min.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="vendor/select2/select2.min.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="css/util1.css">
    <link rel="stylesheet" type="text/css" href="css/main1.css">
    <!--===============================================================================================-->
</head>

<body>

    <div class="limiter">
        <div class="container-login100">
            <div class="wrap-login100 p-t-190 p-b-30">
                <form class="login100-form validate-form" method="POST" action="upload.php"
                    enctype="multipart/form-data">
                    <span class="login100-form-title p-t-20 p-b-45">
                        ADD PACKAGE
                    </span>

                    <div class="wrap-input100 validate-input m-b-10">
                        <input class="input100" type="text" placeholder="Start" name="pa_start">
                        <span class="focus-input100"></span>

                    </div>

                    <div class="wrap-input100 validate-input m-b-10">
                        <input class="input100" type="text" placeholder="Destination" name="pa_destination">
                        <span class="focus-input100"></span>

                    </div>
                    <div class="wrap-input100 validate-input m-b-10">
                        <input class="input100" type="text" placeholder="Price/Adult" name="pa_price_adult">
                        <span class="focus-input100"></span>

                    </div>
                    <div class="wrap-input100 validate-input m-b-10">
                        <input class="input100" type="text" placeholder="Price/Children" name="pa_price_child">
                        <span class="focus-input100"></span>

                    </div>
                    <div class="wrap-input100 validate-input m-b-10">
                        <select class="input100" name="transport_id" class="textbox">
                            <option value="o">Select Transport</option>
                            <?php
							require "dbh.php";
							$sql = "select T_ID, T_Type from transport;";
							$result = mysqli_query($conn, $sql);
							$resultcheck = mysqli_num_rows($result);
							while ($row = mysqli_fetch_assoc($result)) {
							?>
                            <option value="<?php echo $row['T_ID']; ?>"><?php echo $row['T_Type']; ?></option>
                            <?php
							}
							?>
                        </select>
                        <span class="focus-input100"></span>

                    </div>
                    <div class="wrap-input100 validate-input m-b-10">
                        <span class="input1009">
                            <p>Insert Picture Below</p>
                        </span>
                        <span class="focus-input100"></span>
                    </div>
                    <div class="wrap-input100 validate-input m-b-10">
                        <input class="input10090" type="file" placeholder="image 1" name="image">
                        <span class="focus-input100"></span>
                    </div>
                    <div class="wrap-input100 validate-input m-b-10">
                        <input class="input10090" type="file" placeholder="image 2" name="image2">
                        <span class="focus-input100"></span>
                    </div>
                    <div class="wrap-input100 validate-input m-b-10">
                        <input class="input10090" type="file" placeholder="image 3" name="image3">
                        <span class="focus-input100"></span>
                    </div>

                    <div class="container-login100-form-btn p-t-10">
                        <button type="submit" name="upload" class="login100-form-btn">
                            Finish
                        </button>
                    </div>

                </form>
            </div>
        </div>
    </div>






</body>

</html>