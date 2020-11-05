<?php 
session_start();
require 'db.inc.php'; ?>

<?php

if (isset($_POST['submitted']))
{
    $username = trim($_POST['username']);
    $password = trim($_POST['password']);
    
    $q = "select * from users where username='$username' and pass=sha1('$password')";
    $r = mysqli_query($dbc, $q);
    
    if (mysqli_num_rows($r) == 1)
    {
        $_SESSION['admin'] = $username;
        header('Location: admin.php');
        exit();
    }
    else
    {
        echo '<p style="color:red;">Invalid login.</p>';
    }
}

?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Admin Login</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
  </head>

  <body>

    <div class="container">

        <br>
        <h1>Admin Login</h1>
        <br>
        
        <form action="" method="post">
    
            <div class="form-group">
                <label for="">Username:</label>
                <input type="text" name="username" value="" class="form-control">
            </div>

            <div class="form-group">
                <label for="">Password:</label>
                <input type="password" name="password" value="" class="form-control">
            </div>

            <button class="btn btn-default">Submit</button>
            <input type="hidden" name="submitted" value="true">
        </form>


    </div><!-- /.container -->


    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
    <script src="//cdn.ckeditor.com/4.7.1/standard/ckeditor.js"></script>
    <script>CKEDITOR.replace('ta');</script>
  </body>
</html>

