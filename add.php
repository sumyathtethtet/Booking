<?php
require_once("dbcontroller.php");
$db_handle=new DBController();
if(!empty($_POST["submit"])){
	$result=mysql_query("INSERT INTO booking(BookingDate,GuestName,FromDate,ToDate,Days,RoomType,PhNo,Remark)VALUES('".$_POST["BookingDate"]."','".$_POST["GuestName"]."','".$_POST["GuestName"]."','".$_POST["FromDate"]."','".$_POST["ToDate"]."','".$_POST["Days"]."','".$_POST["RoomType"]."','".$_POST["PhNo"]."','".$_POST["Remark"]."')");
	if(!result){
		$message="Problem in adding database";
	}
	else
	{
		header("Location:index.php");
	}
}

?>
<link rel="stylesheet" type="text/css" href="style.css">
<form name="fBooking"  method="post" action="" id="fBooking">
	<div>
		<label style="padding-top: 20px;">Booking Date</label>
		<span id="bookingdate-info" class="info"></span><br>
		<input type="Date" name="bookingdate" id="bookingdate" class="demoInputBox">
	</div>
	<div>
		<label>From Date</label>
		<span id="fromdate-info" class="info"></span><br>
		<input type="Date" name="fromdate" id="fromdate" class="demoInputBox">
	</div>
	<div>
		<label>TO Date</label>
		<span id="todate-info" class="info"></span><br>
		<input type="Date" name="todate" id="todate" class="demoInputBox">
	</div>
	<div>
		<label>Guest Name</label>
		<span id="guestname-info" class="info"></span><br>
		<input type="Date" name="guestname" id="guestname" class="demoInputBox">
	</div>
	<div>
		<label>Days</label>
		<span id="days-info" class="info"></span><br>
		<input type="text" name="days" id="days" class="demoInputBox">
	</div>
	<div>
		<label>Room Type</label>
		<span id="roomtype-info" class="info"></span><br>
		<input type="text" name="roomtype" id="roomtype" class="demoInputBox">
	</div>
	<div>
		<label>Phone Number</label>
		<span id="phno-info" class="info"></span><br>
		<input type="text" name="phno" id="phno" class="demoInputBox">
	</div>
	<div>
		<label>Remark</label>
		<span id="remark-info" class="info"></span><br>
		<input type="text" name="remark" id="remark" class="demoInputBox">
	</div>
	<div>
		<input type="submit" name="submit" id="btnAddAction" value="Add">
	</div>

</form>