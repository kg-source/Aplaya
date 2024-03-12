<?php

$id=$_GET['id'];
$mydb->setQuery("SELECT * FROM comments WHERE comment_id='$id'");
$cur = $mydb->loadSingleResult();

?>

<div class="panel panel-primary">
	<div class="panel-body">
		<table class="table table-hover" border="0">
			<caption><h3 align="left">DETAJET</h3></caption>
			<tr>
				<td>
			<p>
<strong>EMRI :</strong><?php echo $cur->firstname." ".$cur->lastname; ?></br>
<strong>E-Mail :</strong><?php echo $cur->email; ?></br>
<strong>Komente :</strong><?php echo $cur->comment; ?></br>
<br/>
<a href="index.php?view=list" class="btn btn-primary"><span class="glyphicon glyphicon-plus-sign"></span>  Mbrapa</a></p>
</td>
</tr>

		</table>
	
	 </div><!--End of Panel Body-->
 </div><!--End of Main Panel-->  
