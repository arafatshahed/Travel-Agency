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
    <link rel="stylesheet" type="text/css" href="resstyle.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.11.2/css/all.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">
    
</head>
<body>

<form method="post" action="reservation.php">
<div class="login-box">
    <h1>reservation</h1>
    <!--<div class="textbox">
    	<input type="text" placeholder="Customer ID" name="C_ID"><br><br>
    </div>
    <div class="textbox">
    	<input type="text" placeholder="Package ID" name="Pa_ID"><br><br>
    </div>-->
    <div class="textbox">
        <!--<input type="number" placeholder="Number of Adults" name="Num_Adult"><br><br>
    </div>
    <div class="textbox">
        <input type="number" placeholder="Number of Childs" name="Num_Child"><br><br>
    </div>
    <div class="textbox">
        <input type="date" placeholder="Deperture date" name="Dep_Date"><br><br>
    </div>
    <div class="textbox">
        <input type="date" placeholder="Arrival date" name="Arr_Date"><br><br>-->
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
        </div>

        </form>
        <div class="textbox">
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
        </div>
        <div class="textbox">
        <input name="Dep_Date" type="text" class="textbox" onfocus="(this.type='date')"
        onblur="(this.type='text')" placeholder="Check In">
        </div>
        <div class="textbox">
        <input name="Arr_Date" type="text" class="textbox" onfocus="(this.type='date')"
        onblur="(this.type='text')" placeholder="Check Out">
        </div>

    
        <!--<button name="pID" class="btn" type="Done" value="<?php $Pa_ID ?>">Done</button>-->
        <input class= "btn" type="submit" value="Done">
        </div>
	</form>

</body>
</html>
