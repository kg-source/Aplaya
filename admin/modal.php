<!--Modal Log-out --> 

  <div class="modal fade" id="logout" tabindex="-1">
	<div class="modal-dialog">
		<div class="modal-content">
		  <div class="modal-header">
		  </div>
		  <div class="modal-body">
		  <div class="alert alert-info">A je i sigurt që doni të bëni <strong>Logout</strong>?</div>
		  </div>
		  <div class="modal-footer">
		      <button class="btn" data-dismiss="modal" aria-hidden="true"><i class="icon-remove"></i> Hiqe</button>
		      <a href="<?php echo WEB_ROOT; ?>admin/logout.php" class="btn btn-info"><i class="icon-off"></i> Logout</a>
		  </div>
		</div> 
    </div>
</div>      
                            
<!--Logout end -->       

<!--Modal Reservation --> 

  <div class="modal fade"  id="reservation" tabindex="-1">

	<div class="modal-dialog">
		<div class="modal-content">
		  <div class="modal-header">
		  </div>
		  <div class="modal-body">
		  <div class="alert alert-info">Detajet e Rezervimeve</div>
		  <form  method="post" action="processreservation.php?action=delete">

<?php
//$mydb->setQuery("SELECT *,roomName,firstname, lastname FROM reservation re,room ro,guest gu  WHERE re.roomNo = ro.roomNo AND re.guest_id=gu.guest_id");
/*$mydb->setQuery("SELECT * , roomName, firstname, lastname
FROM reservation re, room ro, guest gu, roomtype rt
WHERE re.roomNo = ro.roomNo
AND ro.`typeID` = rt.`typeID` 
AND re.guest_id = gu.guest_id AND reservation_id=".$_GET['res_id']);
$cur = $mydb->loadSingleResult();
*/				  			
echo $resid;
 //echo $_GET['res_id'];


?>
<p>	
<strong>Konfirmimi</strong>:<br/>
<strong>Emri</strong><br/>
<strong>Mbërritja</strong><br/>
<strong>Nisja</strong><br/>
<strong>Dhoma</strong><br/>
<strong>Lloji i dhomës</strong><br/>
<strong>Netët gjithësej</strong><br/>
<strong>Statusi</strong><br/>
<strong>Optione</strong><br/>
</p>



</form>


		  </div>
		  <div class="modal-footer">
		      <button class="btn" data-dismiss="modal" aria-hidden="true"><i class="icon-remove"></i> Hiqe</button>
		      <a href="<?php echo WEB_ROOT; ?>admin/logout.php" class="btn btn-info"><i class="icon-off"></i> Logout</a>
		  </div>
		</div> 
    </div>
</div>      
                            
<!--reseionrvat end -->   

</tbody>
</table>

</form>
