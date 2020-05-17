<?php
session_start();
$username = filter_input(INPUT_POST, 'username');
$password = filter_input(INPUT_POST, 'password');
$c_id = filter_input(INPUT_POST, 'c_id');
$c_ph = filter_input(INPUT_POST, 'c_ph');
$email = filter_input(INPUT_POST, 'email');
$address = filter_input(INPUT_POST, 'address');
$r_password = filter_input(INPUT_POST, 'rpassword');
if(!empty($username))
{
    if(!empty($address))
    {
        if(!empty($c_ph))
        {
            if(!empty($email))
            {
                    if(!empty($password))
                    {
                        if($password==$r_password)
                        {
                            require "dbh.php";
                            
                            $hashedpwd = password_hash($password,PASSWORD_DEFAULT);
                            $sql = "Insert into company(Co_Name,Co_Address,Co_Ph_Number,Co_Email,Co_Pass)
                                   values('$username','$address','$c_ph','$email','$hashedpwd')";

                            if($conn->query($sql))
                            {
                                echo "Sign Up successfull.";
                                header("Location: index.php");
                            }
                            else
                            {
                                echo "Error".$sql."<br>".$conn->error;
                            }
                            $conn->close();
                            
                        }
                        else
                        {
                            echo "<script>alert('Password deos not match!');window.location='cosignup.php'</script>";
                            
                        }
                        
                        
                    }
                    else
                    {
                        echo "Password should not be empty";
                    }

            }
            else
            {
                echo "Email should not be empty";
            }
        }
        else
        {
            echo "Phone Number should not be empty";
        }
    }
    else
    {
        echo "Address should not be empty";
    }
}
else
{
    echo "Username should not be empty";
}

?>
