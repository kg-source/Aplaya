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
		
	if ($_POST['DESCRIPTION'] == "") {
		$messageStats = false;
			message("Plotëso Fushën!", "error");
			redirect("index.php?view=add");
		
	}else{$setting = new Setting();
		
		$type 		= $_POST['type'];

		$res = $setting->find_all_setting($type);
		
		
		if ($res >=1) {
			message("Përshkrimi ekziston!", "error");
			redirect("index.php?view=add");
		}else{
			
			$setting->DESCRIPTION = $_POST['DESCRIPTION']; 
			$setting->TYPE = $type;
			
			 $istrue = $setting->create(); 
			 if ($istrue == 1){
			 	message("Emri i Ri [". $acc_name ."] krijuar me sukses!", "success");
			 	redirect('index.php');
			 	
			 }
		}	 

		
	}	
}
function doEdit(){
	if ($_POST['DESCRIPTION'] == "" ) {
		$messageStats = false;
			message("Të plotësohen të gjitha Fushat!", "error");
			redirect("index.php?view=edit&id=".$_SESSION['id']);
		
	}else{
		$setting = new Setting();
 

			$type 		= $_POST['type'];
			$setting->DESCRIPTION = $_POST['DESCRIPTION']; 
			$setting->TYPE = $type; 
			$setting->update($_POST['ID']); 
				
			 	message("Emri i Ri [". $type ."] u bë update me sukses!", "success");
			 	unset($_SESSION['id']);
			 	redirect('index.php');
			

		
	}	
		
}

function doDelete(){
	 @$id=$_POST['selector'];
		  $key = count($id);
		//multi delete using checkbox as a selector
		
	for($i=0;$i<$key;$i++){
	 
		$setting = new Setting();
		$setting->delete($id[$i]);
	}

		message("Përdoruesi u fshi!","info");
		redirect('index.php');

}

?>