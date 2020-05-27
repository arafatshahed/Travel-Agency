<?php

session_start();
require "dbh.php";
$pa_start = filter_input(INPUT_POST, 'pa_start');
$pa_destination = filter_input(INPUT_POST, 'pa_destination');
$pa_price_adult = filter_input(INPUT_POST, 'pa_price_adult');
$pa_price_child = filter_input(INPUT_POST, 'pa_price_child');
$transport_id = filter_input(INPUT_POST, 'transport_id');
if (isset($_POST['upload'])) {
    $image = $_FILES['image']['name'];
    $rand1 = substr(md5(time()),0,5);
    $imgf1 = 'images/'.$rand1;
    $img1 = $imgf1 . $image;
    $image2 = $_FILES['image2']['name'];
    $rand2 = substr(md5(time()),0,5);
    $imgf2 = 'images/'.$rand2;
    $img2 = $imgf2 . $image2;
    $image3 = $_FILES['image3']['name'];
    $rand3 = substr(md5(time()),0,5);
    $imgf3 = 'images/'.$rand3;
    $img3 = $imgf3 . $image3;
    $target = "images/".basename($rand1 . $image);
    $target2 = "images/".basename($rand2 . $image2);
    $target3 = "images/".basename($rand3 . $image3);
    
  }
  $pa_name = $pa_start .'2'. $pa_destination;
  $sql = "select Max_Seat from transport where T_ID = $transport_id;";
  $result = mysqli_query($conn, $sql);
  $row = mysqli_fetch_assoc($result);
  $seat = $row['Max_Seat'];
  $co_id = $_SESSION['compID'];
  $sql1 = "Insert into package(Pa_Name,Co_ID,Pa_Img,Pa_start,Pa_Destination,Pa_Price_Child, Pa_Price_Adult,T_ID,Seat_Left,Pa_Visibility)
            values('$pa_name','$co_id','$img1','$pa_start','$pa_destination','$pa_price_child','$pa_price_adult','$transport_id','$seat','0');";
            $result1 = mysqli_query($conn, $sql1);
            
  $sql2 = "INSERT INTO pa_image(Pa_img1,Pa_img2,Pa_img3) VALUES ('$img1','$img2','$img3')";
  mysqli_query($conn, $sql2);
  move_uploaded_file($_FILES['image']['tmp_name'], $target);
  move_uploaded_file($_FILES['image2']['tmp_name'], $target2);
  move_uploaded_file($_FILES['image3']['tmp_name'], $target3);
  echo "<script>
  alert('Package Added Successfully! Wait for admin approval.');window.location='index.php'
  </script>";
?>