<?php

function paypal_items()
{
    global $dbc;
    $num = 0;
    
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

                $num++;
                
                echo '<input type="hidden" name="item_name_'.$num.'" value="'.$row['name'].'">';
                echo '<input type="hidden" name="item_number_'.$num.'" value="'.$id.'">';
                echo '<input type="hidden" name="amount_'.$num.'" value="'.$row['price'].'">';
                echo '<input type="hidden" name="quantity_'.$num.'" value="'.$value.'">';
                
            }

        }
    }
}

