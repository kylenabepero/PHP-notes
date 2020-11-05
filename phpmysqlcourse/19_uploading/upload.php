<?php

// define max file size
$maxFileSize = 300000;
//$maxFileSize = 3000;

if (isset($_POST['submitted']))
{
    // define upload dir
    $uploadDir = 'uploads/';
    
    // get file name
    $fileName = str_replace(' ', '_', $_FILES['image']['name']);

    // convert max file size to kb
    $max = number_format($maxFileSize / 1024, 1) . ' kb';
    
    // define permitted file types
//    $permitted = ['image/jpeg', 'image/jpg', 'image/png'];
    $permitted = ['image/png'];
    
    // flag type and size
    $sizeOK = false;
    $typeOK = false;
    
    // check size
    if ($_FILES['image']['size'] > 0 && $_FILES['image']['size'] <= $maxFileSize)
    {
        $sizeOK = true;
    }
    
    // check type
    foreach ($permitted as $filetype)
    {
        if ($filetype == $_FILES['image']['type'])
        {
            $typeOK = true;
            break;
        }
    }
    
    // upload
    if (! $sizeOK)
    {
        $r = "The file is too big. Max file size is $max.";
    }
    elseif (! $typeOK)
    {
        $r = "Incorrect file type. Allowed file types are jpg and png.";
    }
    else
    {
        switch ($_FILES['image']['error'])
        {
            case 0:
                $success = move_uploaded_file($_FILES['image']['tmp_name'], $uploadDir.$fileName);
                if ($success)
                {
                    $r = "$fileName uploaded!";
                }
                else
                {
                    $r = "Problem. case 0";
                }
                break;
            case 3:
                $r = "File was partially uploaded.";
                break;
            default :
                $r = "System error.";
                break;
        }
    }
    
    echo $r;
    
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
            <input type="hidden" name="MAX_FILE_SIZE" value="<?= $maxFileSize; ?>">
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
