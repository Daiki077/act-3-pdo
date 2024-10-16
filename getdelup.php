<?php require_once "Dbbconfig.php";

function getalltheuserrecords ($pdo, $first_name,$last_name,$gender, $age, $emailaddress
,$profession ){
    $sql = "INSERT INTO employee (first_name,last_name,gender, age, emailaddress
,profession) VALUES (?,?,?,?,?,?)";

        $stmt = $pdo->prepare($sql);
        $executeQuery = $stmt->execute([$first_name, $last_name, $gender, $age, 
                        $emailaddress, $profession]);

        if ($executeQuery){
        return true;
        }
        
}
function seeallusersrecord ($pdo){
    $sql = "SELECT * FROM employee";
    $stmt = $pdo->prepare($sql);
	$executeQuery = $stmt->execute();
	if ($executeQuery) {
		return $stmt->fetchAll();
	}
}
function getuserid($pdo,$Employee_ID){
    $sql = "SELECT * FROM employee WHERE Employee_ID = ?";
	$stmt = $pdo->prepare($sql);
	if ($stmt->execute([$Employee_ID])) {
		return $stmt->fetch();
	}
}

function deleteuser($pdo,$Employee_ID){
    $sql = "DELETE FROM employee WHERE Employee_ID = ?";
    $stmt = $pdo->prepare($sql);

    $executeQuery = $stmt->execut([$Employee_ID]);

    if ($executeQuery){
        true;
    }
}

function updateEmployee ($pdo,$Employee_ID, $first_name , $last_name, $gender, $age,$emailaddress
,$profession) {
    $sql = "UPDATE employee
                SET first_name =?,
                last_name = ?,
                gender = ?,
                age =?,
                emailaddress = ?,
                profession =?
            Where Employee_ID =?";
    $stmt = $pdo->prepare($sql);
    $executeQuery = $stmt -> execute ([$first_name,$last_name,$gender,$age,$emailaddress,$profession,$Employee_ID]);
    if ($executeQuery){
        return true;
    }
}
function deleteEmployee ($pdo,$Employee_ID){
    $sql = "DELETE FROM employee WHERE Employee_ID =?";
    $stmt = $pdo = $pdo->prepare($sql);

    $executeQuery = $stmt ->execute([$Employee_ID]);
    if ($executeQuery){
        return true;
    }

}

?>