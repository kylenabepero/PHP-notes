<?php
require 'db.inc.php';

mysqli_begin_transaction($dbc);

$q = "insert into users (firstname, lastname, email, pass, reg_date) values ('john', 'doe', 'johnd@gmail.com', sha1('pass'), now())";
$r = mysqli_query($dbc, $q);

mysqli_commit($dbc);
//mysqli_rollback($dbc);
mysqli_close($dbc);