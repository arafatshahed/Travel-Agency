<?php
session_start();
$pids = $_GET["name"];
$_SESSION['packID'] = $pids;
?>
<!DOCTYPE html>
<html>

<head>
    <title>Reservation</title>
    <meta name="viewport" content="width = device-width">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.11.2/css/all.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css"
        integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.0/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
</head>

<body>

    <form method="post" action="reservation.php">
        <h1>reservation</h1>

        <select name="Num_Adult" class="textbox">
            <option value="">Adult</option>
            <option value="0">0</option>
            <option value="1">1</option>
            <option value="2">2</option>
            <option value="3">3</option>
            <option value="4">4</option>
            <option value="5">5</option>
            <option value="6">6</option>
            <option value="7">7</option>
            <option value="8">8</option>
            <option value="9">9</option>
            <option value="10">10</option>
        </select>


        <select name="Num_Child" class="textbox">
            <option value="">Children</option>
            <option value="0">0</option>
            <option value="1">1</option>
            <option value="2">2</option>
            <option value="3">3</option>
            <option value="4">4</option>
            <option value="5">5</option>
            <option value="6">6</option>
            <option value="7">7</option>
            <option value="8">8</option>
            <option value="9">9</option>
            <option value="10">10</option>
        </select>

        <input name="Dep_Date" type="text" class="textbox" onfocus="(this.type='date')" onblur="(this.type='text')"
            placeholder="Check In">

        <input name="Arr_Date" type="text" class="textbox" onfocus="(this.type='date')" onblur="(this.type='text')"
            placeholder="Check Out">

        <input class="btn" type="submit" value="Done">

    </form>

</body>

</html>