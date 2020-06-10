<?php
$username = filter_input(INPUT_POST, 'username');
$password = filter_input(INPUT_POST, 'password');
if (!empty($username)) {
    if (!empty($password)) {
        require "dbh.php";
        $sql = "select C_Name, Email, C_Pass,C_ID from customer;";
        $result = mysqli_query($conn, $sql);
        $resultcheck = mysqli_num_rows($result);
        if ($resultcheck > 0) {
            while ($row = mysqli_fetch_assoc($result)) {

                $pswCheck = password_verify($password, $row['C_Pass']);
                if ($row['Email'] == $username && $row['C_Pass'] == $pswCheck) {
                    session_start();
                    $_SESSION['user'] = $row['C_Name'];
                    $_SESSION['userID'] = $row['C_ID'];

                    echo "Log in succesful. Redirecting to Home page";
                    header("Location: timeout.html");
                } else {
                    echo "<script>
                             var mail = Math.floor(Math.random() * 10000) + 10000;
                             alert('You entered This Joe Smith\'s password, maybe your mail Address is joesmith'+mail+'@gmail.com?');window.location='signin1.php'</script>";
                    echo "<script>alert('Wrong Username or password!');window.location='signin1.php'</script>";
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
        echo "<script>alert('Password was empty!');window.location='signin1.php'</script>";
    }
} else {
    echo "<script>alert('Username was empty!');window.location='signin1.php'</script>";
}