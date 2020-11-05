<?php 
session_start();
require 'db.inc.php'; 
require 'paypal_items.php'; 

// if adding a product
if (isset($_GET['add']))
{
    $_SESSION['cart_'.$_GET['add']]++;
    
    header('Location: index.php');
    exit();
}

// if removing a product
if (isset($_GET['remove']))
{
    if ($_SESSION['cart_'.$_GET['remove']] != 0)
    {
        $_SESSION['cart_'.$_GET['remove']]--;
    }
    
    header('Location: index.php');
    exit();
}

// if clearing a product
if (isset($_GET['clear']))
{
    if ($_SESSION['cart_'.$_GET['clear']] != 0)
    {
        $_SESSION['cart_'.$_GET['clear']] = 0;;
    }
    
    header('Location: index.php');
    exit();
}

//var_dump($_SESSION);

?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Shopping Cart</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
  </head>

  <body>

    <div class="container">
        
        <h1 class="text-center">Shopping Cart</h1>
        
        <?php

        $q = "select * from products";
        $r = mysqli_query($dbc, $q);
        
        while ($row = mysqli_fetch_assoc($r)) :
        ?>
            <p>
                <span style="display: inline-block;width:80px;font-size: 18px;"><?= $row['name'] ?></span>
                <span style="display: inline-block;width:55px;font-size: 18px;">$<?= number_format($row['price'], 2) ?></span>
                <a class="btn btn-info" href="index.php?add=<?= $row['id'] ?>">Add</a>
                <a class="btn btn-default" href="index.php?remove=<?= $row['id'] ?>">Remove</a>
                <a class="btn btn-danger" href="index.php?clear=<?= $row['id'] ?>">Clear</a>
            </p>
        <?php endwhile; ?>

    </div><!-- /.container -->
    
    <hr>
    
    <div class="container">
        
        <h1 class="text-center">My Cart</h1>

        <?php

        $total = 0;
        
        foreach ($_SESSION as $key => $value)
        {
            if ($value > 0)
            {
                if (substr($key, 0, 5) == 'cart_')
                {
                    $id = substr($key, 5, strlen($key) - 5);
                    
                    $q = "select * from products where id ='$id'";
                    $r = mysqli_query($dbc, $q);
                    
                    $row = mysqli_fetch_assoc($r);
                    
                    $sub = number_format($row['price'] * $value, 2);
                    
                    echo '<p>'.$row['name'].' x ' . $value .' = $'.$sub.'</p>';
                }
                
                $total += $sub;
            }
        }
        
        if ($total == 0)
        {
            echo '<h2>Your cart is empty.</h2>';
        }
        else
        {
            echo '<p><b>Total: </b>$'.$total.'</p>';
        }

        ?>
        
        <?php if ($total != 0) : ?>
        <form action="https://www.sandbox.paypal.com/cgi-bin/webscr" method="post">
        <input type="hidden" name="cmd" value="_cart">
        <input type="hidden" name="upload" value="1">
        <input type="hidden" name="business" value="jultranet-facilitator@gmail.com">
        <?php paypal_items(); ?>
        <input type="hidden" name="currency_code" value="USD">
        <input type="hidden" name="amount" value="<?php echo $total; ?>">
        <input type="image" src="http://www.paypal.com/en_US/i/btn/x-click-but01.gif" name="submit" alt="Make payments with PayPal - it's fast, free and secure!">
        </form>
        <?php endif; ?>
    </div>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
  </body>
</html>