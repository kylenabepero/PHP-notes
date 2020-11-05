<?php
require 'db.inc.php';

$q = "insert into users (firstname, lastname, email, pass, reg_date) values ('john', 'doe', 'johnd@gmail.com', sha1('pass'), now())";
$r = mysqli_query($dbc, $q);

if ($r)
{
    echo '<h3>A row inserted.</h3>';
}