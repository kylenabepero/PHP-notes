<?php

require 'db.inc.php';

// update

$q = "update users set firstname='john2' where id=1";
$r = mysqli_query($dbc, $q);

if (mysqli_affected_rows($dbc) == 1)
{
    echo '<h3>Row updated</h3>';
}

// delete

$q = "delete from users where id=7";
$r = mysqli_query($dbc, $q);

if (mysqli_affected_rows($dbc) == 1)
{
    echo '<h3>Row deleted</h3>';
}
