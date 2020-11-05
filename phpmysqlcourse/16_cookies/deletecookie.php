<?php

setcookie('color', '', time() - 3600);
header("Location: getcookie.php");
exit();

