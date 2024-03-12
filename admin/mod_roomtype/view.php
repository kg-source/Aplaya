
<?php

$_SESSION['id']=$_GET['id'];
$rm = new Roomtype();
$result = $rm->single_roomtype($_SESSION['id']);

?>
<div class="panel panel-primary">
	<div class="panel-body">
		<table class="table table-hover">
			<caption><h3 align="left">Detajet e Llojeve të Dhomave</h3></caption>

		<td width="30"><strong>Emri </strong></td>
		<td><?php echo ': '.$result->typename; ?></td>
		</tr>
		<tr>
		<td width="30"><strong>Përshkrimi </strong></td>
		<td><?php echo ': '.$result->Desp; ?></td>
		</tr>
		<tr>
		<td> <input type="button" value="&laquo Back" class="btn btn-primary" onclick="window.location.href='index.php'" ></td>
		</tr>
		</table>
	
	 </div><!--End of Panel Body-->
 </div><!--End of Main Panel-->  
