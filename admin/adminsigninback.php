<?php
$username = filter_input(INPUT_POST, 'username');
$password = filter_input(INPUT_POST, 'password');
if(!empty($username))
{
    if(!empty($password))
    {
        require "../dbh.php";
            $sql = "select A_Name, A_Pass from admin;";
            $result = mysqli_query($conn,$sql);
            $resultcheck = mysqli_num_rows($result);
            if($resultcheck>0)
            {
                while ($row = mysqli_fetch_assoc($result)) {

                    
                    if($row['A_Name']==$username && $row['A_Pass']==$password)
                         {
                            session_start();
                            $_SESSION['admin'] = $row['A_Name'];

                            echo "Log in succesful. Redirecting to Home page";
                            header("Location: ../timeout.html");
                         }
                         else
                         {
                             echo "<script>
                             var mail = Math.floor(Math.random() * 10000) + 10000;
                             alert('You entered This Joe Smith\'s password, maybe your mail Address is joesmith'+mail+'@gmail.com?');window.location='adminsignin.php'</script>";
                             echo "<script>alert('Wrong Username or password!');window.location='adminsignin.php'</script>";
                                
                         }
                }
            }
            if($conn->query($sql))
            {
                /*echo "New Record is inserted succesfully";*/
            }
            else
            {
                echo "Error".$sql."<br>".$conn->error;
            }
            $conn->close();
    }
    else
    {
        echo "<script>alert('Password was empty!');window.location='signin1.php'</script>";
    }
}
else
{
    echo "<script>alert('Username was empty!');window.location='signin1.php'</script>";
}

?>
