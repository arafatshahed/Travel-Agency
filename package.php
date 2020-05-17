<!DOCTYPE html>
<html>

<body>
<?php
session_start();
if(isset($_SESSION['admin']))
{
require "dbh.php";
$sql = "select Pa_ID, Pa_Name, Pa_Visibility ,Pa_Start,Pa_Destination,Pa_Price_Adult,Pa_Price_Child from package;";
    $result = mysqli_query($conn, $sql);
    $resultcheck = mysqli_num_rows($result);
    ?>

    <table cellpadding="10px">
    <thead>
    <tr align="left">
    <th>Starting Point</th>
    <th>Destination</th>
    <th>Cost/Adult</th>
    <th>Cost/Child</th>
    </tr>
    </thead>
    <tbody>
    <?php
    $pID;
    while ($row = mysqli_fetch_assoc($result))
    {
        error_reporting(0);
        $pID = $row[Pa_ID];
        ?>   
    <tr>
    <td><?php echo $row['Pa_Start'];?></td>
    <td><?php echo $row['Pa_Destination'];?></td>
    <td><?php echo $row['Pa_Price_Adult'];?></td>
    <td><?php echo $row['Pa_Price_Child'];?></td>
    <td>
    <?php
    if($row['Pa_Visibility'])
    {
        ?>
        <div class="btnb"><a href="packagemod.php?name=<?=$pID;?>"><button class ="btn">Invisible</button></a></div>
        <?php
    }
    else
    {

        ?>
        <div class="btnb"><a href="packagemod.php?name=<?=$pID;?>"><button class ="btn">Visible</button></a></div>
        <?php
    }
    ?>
    </td>
    <?php
    }
    $conn->close();
}
    ?>
    </tr>
    </tbody>
    </table>
<br>
<a href="index.php">Get back to Homepage</a>
</body>
</html>