<?php require 'templates/adminheader.inc.php'; ?>

<?php

$id = $_GET['id'];

$q = "select * from pages where id='$id'";
$r = mysqli_query($dbc, $q);

$row = mysqli_fetch_assoc($r);

if (!$row)
{
    header('Location: admin.php');
    exit();
}

$title = $row['title'];
$content = $row['content'];

if (isset($_POST['submitted']))
{
    $errors = [];
    
    $title = mysqli_real_escape_string($dbc, trim($_POST['title']));
    $content = mysqli_real_escape_string($dbc, trim($_POST['content']));
    
    if (strlen($title) < 3)
    {
        $errors[] = 'The title must be at least 3 characters long.';
    }
    
    if (strlen($content) < 10)
    {
        $errors[] = 'The content must be at least 10 characters long.';
    }
    
    if (empty($errors))
    {
        // update
        $q = "update pages set title='$title', content='$content' where id='$id'";
        $r = mysqli_query($dbc, $q);

        if ($r)
        {
            echo '<div class="alert alert-info" style="margin-top:30px;">The page has been edited.</div>';
        }
        else
        {
            echo 'update failed: ' . mysqli_error($dbc);
        }
   
    }
    else
    {
        echo '<ul style="margin-top:30px;color:red;">';
        foreach ($errors as $v)
        {
            echo '<li>'.$v.'</li>';
        }
        echo '</ul>';
    }
}

?>

<h1>Admin Area</h1>
<br>
<h3>Edit page</h3>
<br>
<p><a class="btn btn-info" href="admin.php">Back to all pages</a></p>

<form action="" method="post">
    
    <div class="form-group">
        <label for="">Title:</label>
        <input type="text" name="title" value="<?php if (isset($title)) echo $title; ?>" class="form-control">
    </div>
    
    <div class="form-group">
        <label for="">Content:</label>
        <textarea name="content" id="ta" cols="30" rows="10" class="form-control"><?php if (isset($content)) echo $content; ?></textarea>
    </div>
    
    <button class="btn btn-default">Submit</button>
    <input type="hidden" name="submitted" value="true">
</form>


<?php require 'templates/adminfooter.inc.php'; ?>

