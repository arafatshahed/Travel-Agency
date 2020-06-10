<?php
$username = filter_input(INPUT_POST, 'username');
$password = filter_input(INPUT_POST, 'password');
if (!empty($username)) {
    if (!empty($password)) {
        require "dbh.php";
        $sql = "select Co_Email, Co_Pass,Co_ID from company;";
        $result = mysqli_query($conn, $sql);
        $resultcheck = mysqli_num_rows($result);
        if ($resultcheck > 0) {
            while ($row = mysqli_fetch_assoc($result)) {
                echo "<script>alert('$username');</script>";
                $pswCheck = password_verify($password, $row['Co_Pass']);
                if ($row['Co_Email'] == $username && $row['Co_Pass'] == $pswCheck) {
                    session_start();
                    /*$_SESSION['company'] = $row['Co_Name'];*/
                    $_SESSION['compID'] = $row['Co_ID'];

                    echo "Log in succesful. Redirecting to Home page";
                    header("Location: timeout.html");
                } else {
                    echo "<script>
                             var mail = Math.floor(Math.random() * 10000) + 10000;
                             alert('You entered This Not Travel Agency\'s password, maybe your mail Address is nottravel'+mail+'@gmail.com?');window.location='cosignin.php'</script>";
                    echo "<script>alert('Wrong Username or password!');window.location='cosignin.php'</script>";
                }
            }
        }
        if ($conn->query($sql)) {
            /*echo "New Record is inserted succesfully";*/
        } else {
            echo "Error" . $sql . "<br>" . $conn->error;
        }
        $conn->close();
    } else {
        echo "<script>alert('Password was empty!');window.location='cosignin.php'</script>";
    }
} else {
    echo "<script>alert('Username was empty!');window.location='cosignin.php'</script>";
}