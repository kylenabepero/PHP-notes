<?php 
session_start();
if (!isset($_SESSION['admin']))
{
    header('Location: login.php');
    exit();
}
require 'db.inc.php'; ?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Admin Area</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
  </head>
  <style>
    
      a.logout {
          position: absolute;
          top: 10px;
          right: 10px;
          display: inline-block;
          padding: 10px;
          background: green;
          color: white; 
      }
      
  </style>
  <body>
    <?php if (isset($_SESSION['admin'])) echo '<a class="logout" href="logout.php">Log out</a>'; ?>
    <div class="container">


