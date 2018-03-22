<?php
//connect to db
$conn = new PDO('mysql:host=sql.computerstudi.es;dbname=gc200299028', 'gc200299028', 'xC87DwW*');

// trap any PDO errors when working with the database
$conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
?>