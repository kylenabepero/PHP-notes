<?php

require 'db.inc.php';

// set number of records to display
$display = 2;

// determine how many pages there are
if (isset($_GET['p']) && is_numeric($_GET['p']))
{
    $pages = $_GET['p'];
}
else
{
    // count rows
//    $q = "select count(id) from users";
    $q = "select id from users";
    $r = mysqli_query($dbc, $q);
    
    $row = mysqli_fetch_array($r, MYSQLI_NUM);
    
//    $rows = $row[0];
    $rows = mysqli_num_rows($r);
    
//    echo $rows;
    
    // calculate number of pages
    if ($rows > $display)
    {
        $pages = ceil($rows / $display);
    }
    else
    {
        $pages = 1;
    }
}

// determine where to start returning records
if (isset($_GET['s']) && is_numeric($_GET['s']))
{
    $start = $_GET['s'];
}
else
{
    $start = 0;
}

// get rows
$q = "select * from users order by id desc LIMIT $start, $display";
$r = mysqli_query($dbc, $q);

?>

<table border="0">
    <thead>
        <tr>
            <th>Id</th>
            <th>First name</th>
            <th>Last name</th>
        </tr>
    </thead>
    <tbody>
        <?php
        while ($row = mysqli_fetch_assoc($r)) : ?>
        <tr>
            <td><?php echo $row['id'] ?></td>
            <td><?php echo $row['firstname'] ?></td>
            <td><?php echo $row['lastname'] ?></td>
        </tr>
        <?php endwhile; ?>
    </tbody>
</table>

<?php

if ($pages > 1)
{
    
    // determine current page
    $currentPage = $start / $display + 1;
    
    // make previous link if necessary
    if ($currentPage != 1)
    {
        echo '<a href="pagination.php?s='.($start - $display).'&p='.$pages.'">Previous</a>';
    }
    
    // make pages
    for ($i = 1; $i <= $pages; $i++)
    {
        if ($i != $currentPage)
        {
            echo '<a href="pagination.php?s='.($display * ($i - 1)).'&p='.$pages.'">'.$i.' </a>';
        }
        else
        {
            echo ' ' .$i . ' ';
        }
    }
    
    // make next link if necessary
    if ($currentPage != $pages)
    {
        echo '<a href="pagination.php?s='.($start + $display).'&p='.$pages.'">Next</a>';
    }
    
}
