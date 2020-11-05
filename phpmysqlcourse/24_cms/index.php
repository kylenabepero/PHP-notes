<?php require 'templates/header.inc.php'; ?>

<?php

// determine page id
$pageId = (isset($_GET['page'])) ? $_GET['page'] : 1;

$q = "select content from pages where id='$pageId'";
$r = mysqli_query($dbc, $q);

$row = mysqli_fetch_assoc($r);

if (!$row)
{
    header('Location: index.php');
    exit();
}
else 
{
    echo $row['content'];    
}

?>

<?php require 'templates/footer.inc.php'; ?>
      

    
