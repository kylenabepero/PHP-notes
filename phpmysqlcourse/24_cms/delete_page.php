<?php
require 'db.inc.php';

$id = $_GET['id'];

$q = "delete from pages where id='$id'";
$r = mysqli_query($dbc, $q);

header('Location: admin.php');
exit();
