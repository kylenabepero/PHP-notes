<?php

if (isset($_POST['submitted']))
{
    
    $uploadDir = 'uploads/';
    
    $fileName = str_replace(' ', '_', $_FILES['image']['name']);
    
    move_uploaded_file($_FILES['image']['tmp_name'], $uploadDir.$fileName);
    
}

?>

<!DOCTYPE html>

<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        
        <form action="" method="post" enctype="multipart/form-data">
            
            <p>
                <label for="">Upload image:</label>
                <input type="file" name="image" />
            </p>
            
            <p>
                <button>Upload</button>
            </p>
            
            <input type="hidden" name="submitted" value="true">
        </form>
        
    </body>
</html>
