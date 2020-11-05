<?php
session_start();

if (isset($_SESSION['name']))
{
    echo $_SESSION['name'];
}

echo '<br>';

if (isset($_SESSION['fruit']))
{
    echo $_SESSION['fruit'];
}


