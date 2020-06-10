<?php
$paID = $_GET["name"];
require "dbh.php";
echo $paID;
$visibility = 0;
$sql2 = "select Pa_Visibility from package where Pa_ID = $paID;";
$result = mysqli_query($conn, $sql2);
$row = mysqli_fetch_assoc($result);
$visibility = $row['Pa_Visibility'];
if ($conn->query($sql2)) {
} else {
    echo "Error1" . $sql . "<br />" . $conn->error;
}

if ($visibility) {
    $sql = "update package set Pa_Visibility = 0 where Pa_ID = $paID;";
    mysqli_query($conn, $sql);
    if ($conn->query($sql)) {
    } else {
        echo "Error2" . $sql . "<br />" . $conn->error;
    }
} else {
    $sql = "update package set Pa_Visibility = 1 where Pa_ID = $paID;";
    mysqli_query($conn, $sql);
    if ($conn->query($sql)) {
    } else {
        echo "Error2" . $sql . "<br />" . $conn->error;
    }
}
echo $visibility;

echo "<script>alert('Updated!');window.location='package.php'</script>";

$conn->close();