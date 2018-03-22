<?php 
ob_start();

//auth check
require_once('auth.php');

?>

<!DOCTYPE html>
<html>

<head>
<meta content="text/html; charset=utf-8" http-equiv="Content-Type">
<title>Delete Dash Markers</title>
</head>

<body>

<?php
$id = $_GET['id'];

require_once('db.php');

$sql = "DELETE FROM markers WHERE id = $id";
$conn->exec($sql);


$conn = null;

header('location:dashboard.php');
echo $sql;
?>

</body>

</html>

<?php ob_flush(); ?>