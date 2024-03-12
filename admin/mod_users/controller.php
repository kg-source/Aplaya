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
		
	if ($_POST['name'] == "" OR $_POST['username'] == "" OR $_POST['pass'] == "") {
		$messageStats = false;
			message("Plotëso të gjitha fushat!", "error");
			redirect("index.php?view=add");
		
	}else{$user = new User();
		$acc_name		= $_POST['name'];
		$acc_username   = $_POST['username'];
		$acc_password 	= $_POST['pass'];
		$acc_type 		= $_POST['type'];

		$res = $user->find_all_user($acc_name);
		
		
		if ($res >=1) {
			message("Emri ekziston!", "error");
			redirect("index.php?view=add");
		}else{
			
			$user->ACCOUNT_NAME = $acc_name;
			$user->ACCOUNT_USERNAME = $acc_username;
			$user->ACCOUNT_PASSWORD = sha1($acc_password);
			$user->ACCOUNT_TYPE = $acc_type;
			
			 $istrue = $user->create(); 
			 if ($istrue == 1){
			 	message("Emri i ri [". $acc_name ."] u krijua me sukses!", "success");
			 	redirect('index.php');
			 	
			 }
		}	 

		
	}	
}
function doEdit(){
	if ($_POST['name'] == "" OR $_POST['username'] == "" OR $_POST['pass'] == "") {
		$messageStats = false;
			message("Plotëso të gjitha fushat!", "error");
			redirect("index.php?view=edit&id=".$_SESSION['id']);
		
	}else{
		$user = new User();
		$acc_id			= $_POST['account_id'];
		$acc_name		= $_POST['name'];
		$acc_username   = $_POST['username'];
		$acc_password 	= $_POST['pass'];
		$acc_type 		= $_POST['type'];

			
			$user->ACCOUNT_NAME = $acc_name;
			$user->ACCOUNT_USERNAME = $acc_username;
			$user->ACCOUNT_PASSWORD = sha1($acc_password);
			$user->ACCOUNT_TYPE = $acc_type;
			
			$user->update($acc_id); 
				
			 	message("Emri i ri [". $acc_name ."] u bë update me sukses!", "success");
			 	unset($_SESSION['id']);
			 	redirect('index.php');
			

		
	}	
		
}

function doDelete(){
	 @$id=$_POST['selector'];
		  $key = count($id);
		//multi delete using checkbox as a selector
		
	for($i=0;$i<$key;$i++){
	 
		$user = new User();
		$user->delete($id[$i]);
	}

		message("Emri u fshi!","info");
		redirect('index.php');

}

?>