<?php ob_start(); 

//auth check
require_once('auth.php');
?>

<!DOCTYPE html>
<html>

<head>
<meta content="text/html; charset=utf-8" http-equiv="Content-Type">
<title>Saving...</title>
</head>

<body>

<?php

$name = $_POST['name'];
$date = $_POST['date'];
$city = $_POST['city'];
$address = $_POST['address'];
$id = $_POST['id'];

try {

	require_once('db.php');
	
	if (empty($id)) { 
		$sql = "INSERT INTO markers (name, date, city, address) VALUES (:name, :date, :city, :address)";	
	}
	else { 
		$sql = "UPDATE markers SET name = :name, date = :date, city = :city, address = :address	WHERE id = :id";
		
	}
	
	$cmd = $conn->prepare($sql);
	$cmd->bindParam(':name', $name, PDO::PARAM_STR, 50);
	$cmd->bindParam(':date', $date, PDO::PARAM_STR, 50);
	$cmd->bindParam(':city', $city, PDO::PARAM_STR, 50);
    $cmd->bindParam(':address', $address, PDO::PARAM_STR, 50);
	
	if (!empty($id)) {
		$cmd->bindParam(':id', $id, PDO::PARAM_INT);
	}
	
	$cmd->execute();
	
	
	$conn = null;
}
catch (Exception $e) {
	mail('pampsolutions@outlook.com', 'App Error', $e, 'From:pampsolutions@outlook.com');
	
	header('location:error.php');
	
	exit();
}

header('location:markers.php');
?>

</body>

</html>
<?php ob_flush(); ?>
