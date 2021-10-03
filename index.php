<?php 

require_once("perpage.php");
require_once("dbcontroller.php");
$db_handale=new DBController();



 ?>
<table cellpadding="10" cellspacing="1">
	<thead>
		<tr>
		<th><strong>Booking Date</strong></th>
		<th><strong>From Date</strong></th>
		<th><strong>To Date</strong></th>
		<th><strong>Guest Name</strong></th>
		<th><strong>Room Type</strong></th>
		<th><strong>Phnone Number</strong></th>
		<th><strong>Remark</strong></th>
	</tr></thead>
		<tbody>
			<?php
			foreach ($result as $k => $v) {
				if(is_numeric($k)){
			
			?>
			<tr>
				<td><?php echo $result[$k]["BookingDate"]; ?></td>
				<td><?php echo $result[$k]["FromDate"]; ?></td>
				<td><?php echo $result[$k]["ToDate"]; ?></td>
				<td><?php echo $result[$k]["GuestName"]; ?></td>
				<td><?php echo $result[$k]["RoomType"]; ?></td>
				<td><?php echo $result[$k]["PhNo"]; ?></td>
				<td><?php echo $result[$k]["Remark"]; ?></td>
			</tr>
			<?php
		}
	}
	if(isset($result["perpage"])){
		?>
		<tr>
			<td colspan="6" align="right"><?php echo $result["perpage"];</td>
		</tr>
		<?php }?>
		</tbody>
	</table></form>
</div>
</body>
</html>
		
