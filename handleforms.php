<?php 

require_once 'Dbbconfig.php'; 
require_once 'getdelup.php';

if (isset($_POST['entersbmtbtn'])) {
	$first_name = trim($_POST['first_name']);
	$last_name = trim($_POST['last_name']);
	$gender = trim($_POST['gender']);
	$age = trim($_POST['age']);
	$emailaddress = trim($_POST['emailaddress']);
	$profession = trim($_POST['profession']);

	if (!empty($first_name) && !empty($last_name) && !empty($gender) && !empty($age) && !empty($emailaddress)  && !empty($profession)) {
			$query =  getalltheuserrecords($pdo, $first_name, $last_name,
			$gender, $age, $emailaddress, $profession);

		if ($query) {
			header("Location:INPUT_TABLE.php");
		}

		else {
			echo "Insertion failed";
		}
	}

	else {
		echo "Make sure that no fields are empty";
	}
	
}


if (isset($_POST['Editstudentbtn'])) {
    $Employee_ID = trim ($_GET['Employee_ID']);
	$first_name = trim($_POST['first_name']);
	$last_name = trim($_POST['last_name']);
	$gender = trim($_POST['gender']);
	$age = trim($_POST['age']);
	$emailaddress = trim($_POST['emailaddress']);
	$profession = trim($_POST['profession']);
    
		$query = updateEmployee($pdo, $Employee_ID,  $first_name, $last_name, $gender, $age, $emailaddress, $profession);

		if ($query) {
			header("Location:INPUT_TABLE.php");
		}
		else {
			echo "Update failed";
		}

}

if (isset($_POST["Deletebtn"])){
    $query = deleteEmployee ($pdo,$_GET['Employee_ID']);
    if ($query) {
        header("Location:INPUT_TABLE.php");
    }
    else {
        echo "Delete  failed";  
}
}