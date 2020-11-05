<?php
session_start();

// remove session data
//unset($_SESSION['fruit']);

session_destroy();

header('Location: getsession.php');
exit();

