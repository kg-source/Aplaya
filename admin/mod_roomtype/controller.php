<?php 
require_once("../../includes/initialize.php");
$action = (isset($_GET['action']) && $_GET['action'] != '') ? $_GET['action'] : '';

switch ($action) {
	case 'add' :
	doInsert();
	break;
	
	case 'edit' :
	doEdit();
	break;
	
	case 'delete' :
	doDelete();
	break;


	}
function doInsert(){
		
	if ($_POST['name'] == "" OR $_POST['description'] == "") {
			message("Plotëso të gjitha fushat!", "error");
			redirect("index.php?view=add");
		
	}else{

		$rm = new Roomtype();
		$rm_name	= $_POST['name'];
		$rm_desc    = $_POST['description'];
	
		$res = $rm->find_all_roomtype($rm_name);
		
		
		if ($res >=1) {
			message("Emri për këte lloj dhomash ekziston!", "error");
			redirect("index.php?view=add");
		}else{
			
			$rm->typename = $rm_name;
			$rm->Desp = $rm_desc;
			
			
			 $istrue = $rm->create(); 
			 if ($istrue == 1){
			 	message("Lloji i Ri [". $rm_name ."] krijuar me sukses!", "success");
			 	redirect('index.php');
			 	
			 }
		}	 

		
	}	
}
function doEdit(){
	if ($_POST['name'] == "" OR $_POST['description'] == "") {
			message("Plotëso të gjitha Fushat!", "error");
			redirect("index.php?view=add");
		
	}else{

		$rm = new Roomtype();
		$rm_id		= $_POST['rmtype_id'];
		$rm_name	= $_POST['name'];
		$rm_desc    = $_POST['description'];
	
		$res = $rm->find_all_roomtype($rm_name);
		
		
		
			$rm->typename = $rm_name;
			$rm->Desp = $rm_desc;
			
			
			$rm->update($rm_id); 
			
		 	message("Lloji i Ri [". $rm_name ."] u bë update me sukses!", "success");
		 	redirect('index.php');
			 	
	
		
	}	
		
}

function doDelete(){
	 @$id=$_POST['selector'];
		  $key = count($id);
		//multi delete using checkbox as a selector
		
	for($i=0;$i<$key;$i++){
	 
		$rm = new Roomtype();
		$rm->delete($id[$i]);
	}

		message("Lloji i dhomës u fshi!","info");
		redirect('index.php');

}

?>