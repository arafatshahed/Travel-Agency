<?php
session_start();
$C_ID = $_SESSION['userID'];
$Pa_ID = $_SESSION['packID'];
$Num_Adult = filter_input(INPUT_POST, 'Num_Adult');
$Num_Child = filter_input(INPUT_POST, 'Num_Child');
$Dep_Date = filter_input(INPUT_POST, 'Dep_Date');
$Arr_Date = filter_input(INPUT_POST, 'Arr_Date');
$tc = 0;
$R_ID = 4000;
$sl = 0;
if (!empty($C_ID))
    {
        if (!empty($Num_Adult))
            {
            $host = "localhost";
            $dbusername = "root";
            $dbpassword = "";
            $dbname = "Travel_Agency";
            $conn = new mysqli($host, $dbusername, $dbpassword, $dbname);
            if (mysqli_connect_error())
                {
                die('Connect Error (' . mysqli_connect_errno() . ')' . mysqli_connect_error());
                }
              else
                {
                /*$sql1 = "select R_ID from reservation;";
                $result = mysqli_query($conn, $sql1);
                $resultcheck = mysqli_num_rows($result);
                while ($row = mysqli_fetch_assoc($result))
                    {
                    $R_ID = $row['R_ID'];
                    }

                $R_ID+= 1;*/
                date_default_timezone_set('Asia/Dhaka');
                $date = date('Y-m-d');
                $date = strtotime($Arr_Date);
                $start_date = strtotime($date);
                $end_date = strtotime($Dep_Date);
                $tmp = ($start_date - $end_date)/60/60/24;
                $tmp2 = ($end_date - $date)/60/60/24;
                $sql = "select Pa_ID,Pa_Price_Adult,Pa_Price_Child,Seat_Left from package;";
                $result = mysqli_query($conn,$sql);
                $resultcheck = mysqli_num_rows($result);
                if($resultcheck>0)
                {
                while ($row = mysqli_fetch_assoc($result)) {
                    if($row['Pa_ID']==$Pa_ID)
                         {
                            $sl = $row['Seat_Left'];
                            $tc = $Num_Adult*$row['Pa_Price_Adult']
                            + $Num_Child*$row['Pa_Price_Child'];
                            break;
                         }
                     }
                     if(($sl>= $Num_Adult + $Num_Child) && $tmp>0 && $tmp2>=0)
                     {
                      
                      $sql1 = "Insert into reservation(C_ID,Pa_ID,Num_Adult,Num_Child,Dep_Date,Arr_Date,Total_Cost)
                      values('$C_ID','$Pa_ID','$Num_Adult','$Num_Child','$Dep_Date','$Arr_Date','$tc');";
     
                     $sql = "update package set Seat_Left = $sl-$Num_Adult-$Num_Child where Pa_ID = $Pa_ID;";
                     if ($conn->query($sql))
                         {
                         
     
                         }
                       else
                         {
                         echo "Error" . $sql . "<br />" . $conn->error;
                         }
                         if ($conn->query($sql1))
                         {
                           /*
                         echo "reservation successfull.";
                         echo "<br>The total cost of is $tc Taka";
                          */
                          echo "<script>alert('reservation successfull. The total cost of is $tc Taka');window.location='index.php'</script>";
                         }
                       else
                         {
                         echo "Error" . $sql . "<br />" . $conn->error;
                         }
                     }
                     else
                     {
                      echo "<script>alert('Seat Full./Invalid date.');window.location='reservation1.php?name=$Pa_ID'</script>";
                     }

                
                    
                $conn->close();
                }
            }
        }
          else
            {
            echo "At least an adult should go.";
            }
    }
  else
    {
      header("location: redirect2signin.php");
    }

?>