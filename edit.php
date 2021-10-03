<?php
require_once("dbcontroller.php");
$db_handle=new DBController();
if(!empty($_POST["submit"])){
	$result=mysql_query("UPDATE booking set BookingDate='".$_POST["BookingDate"]."', FromDate='".$_POST["FromDate"]."',ToDate='".$_POST["GuestName"]."',Days='".$_POST["Days"]."',RoomType='".$_POST["RoomType"]."',PhNo='".$_POST["PhNo"]."',Remark='".$_POST["Remark"]."' WHERE RegNo=".$_GET["RegNo"]);
	if(!$result){
		$message="Problem in Editing";
	}else{
		header("Location:index.php");
	}
}
$result=$db_handle->runQuery("SELECT * from booking WHERE RegNo='" .$_GET["RegNo"]."'");

?>
<link rel="stylesheet" type="text/css" href="style.css">
<form name="fBooking"  method="post" action="" id="fBooking">
	<div>
		<label style="padding-top: 20px;">Booking Date</label>
		<span id="bookingdate-info" class="info"></span><br>
		<input type="Date" name="bookingdate" id="bookingdate" class="demoInputBox" value="<?php echo $result[0]["BookingDate"]; ?>">
	</div>
	<div>
		<label>From Date</label>
		<span id="fromdate-info" class="info"></span><br>
		<input type="Date" name="fromdate" id="fromdate" class="demoInputBox" value="<?php echo $result[0]["FromDate"]; ?>">
	</div>
	<div>
		<label>TO Date</label>
		<span id="todate-info" class="info"></span><br>
		<input type="Date" name="todate" id="todate" class="demoInputBox" value="<?php echo $result[0]["ToDate"]; ?>">
	</div>
	<div>
		<label>Guest Name</label>
		<span id="guestname-info" class="info"></span><br>
		<input type="Date" name="guestname" id="guestname" class="demoInputBox" value="<?php echo $result[0]["GuestName"]; ?>">
	</div>
	<div>
		<label>Days</label>
		<span id="days-info" class="info"></span><br>
		<input type="text" name="days" id="days" class="demoInputBox" value="<?php echo $result[0]["Days"]; ?>">
	</div>
	<div>
		<label>Room Type</label>
		<span id="roomtype-info" class="info"></span><br>
		<input type="text" name="roomtype" id="roomtype" class="demoInputBox" value="<?php echo $result[0]["RoomType"]; ?>">
	</div>
	<div>
		<label>Phone Number</label>
		<span id="phno-info" class="info"></span><br>
		<input type="text" name="phno" id="phno" class="demoInputBox" value="<?php echo $result[0]["PhNo"]; ?>">
	</div>
	<div>
		<label>Remark</label>
		<span id="remark-info" class="info"></span><br>
		<input type="text" name="remark" id="remark" class="demoInputBox" value="<?php echo $result[0]["Remark"]; ?>">
	</div>
	<div>
		<input type="submit" name="submit" id="btnAddAction" value="Save">
	</div>

</form>