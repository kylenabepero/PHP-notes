<?php

require 'db.inc.php';

//$q = "select * from users order by id desc";
$q = "select concat(firstname, ' ', lastname) AS name, date_format(reg_date, '%d %m %Y') AS date from users order by id desc";
$r = mysqli_query($dbc, $q);

//while ($row = mysqli_fetch_array($r, MYSQLI_ASSOC))
//{
//    echo "<p> {$row['id']} {$row['firstname']} {$row['lastname']} {$row['reg_date']} </p>";
//}

//while ($row = mysqli_fetch_array($r, MYSQLI_NUM))
//{
//    echo "<p> {$row[0]} {$row[1]} {$row[2]} {$row[5]} </p>";
//}

//while ($row = mysqli_fetch_assoc($r))
//{
//    echo "<p> {$row['id']} {$row['firstname']} {$row['lastname']} {$row['reg_date']} </p>";
//}

//while ($row = mysqli_fetch_array($r, MYSQLI_BOTH))
//{
////    echo "<p> {$row[0]} {$row[1]} {$row[2]} {$row[5]} </p>";
//    echo "<p> {$row['id']} {$row['firstname']} {$row['lastname']} {$row['reg_date']} </p>";
//}

while ($row = mysqli_fetch_array($r, MYSQLI_ASSOC))
{
    echo "<p> {$row['name']} {$row['date']} </p>";
}