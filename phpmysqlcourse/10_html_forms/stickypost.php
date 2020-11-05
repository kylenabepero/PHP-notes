<?php
if (isset($_POST['submitted']))
{
    $title = $_POST['title'];
    $name = $_POST['name'];
    $email = $_POST['email'];
    $message = $_POST['message'];
    $favcolor = isset($_POST['favcolor']) ? $_POST['favcolor'] : '' ;

    if (!empty($name) && !empty($email) && !empty($message) && !empty($favcolor))
    {
        echo $title . ' ' . $name . '<br>';

        echo $email . '<br>';

        echo $message . '<br>';

        echo 'Your favorite color is ' . $favcolor;
    } else
    {
        echo '<p>You must fill out all the fields.</p>';
//        var_dump($name);
//        var_dump($favcolor);
    }
}
?>

<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>

        <form method="post" action="">

            <p>
                <select name="title">
                    <option <?php if (isset($title) && $title == 'Mr') echo 'selected="selected"'; ?> value="Mr">Mr</option>
                    <option <?php if (isset($title) && $title == 'Mrs') echo 'selected="selected"'; ?> value="Mrs">Mrs</option>
                </select>

                Name: <input type="text" value="<?php if (isset($name)) echo $name; ?>" name="name" placeholder="Your name" />
            </p>

            <p>
                <label for="">Your e-mail:</label>
                <input type="email" value="<?php if (isset($email)) echo $email; ?>" name="email" placeholder="Your email">
            </p>

            <p>
                <label for="">Your message:</label>
                <textarea name="message" cols="30" rows="3" placeholder="Your message"><?php if (isset($message)) echo $message; ?></textarea>
            </p>

            <p>
                <label for="">Favorite color:</label>
                <input type="radio" <?php if (isset($favcolor) && $favcolor == 'red') echo 'checked="checked"'; ?> name="favcolor" value="red">Red
                <input type="radio" <?php if (isset($favcolor) && $favcolor == 'green') echo 'checked="checked"'; ?> name="favcolor" value="green">Green
                <input type="radio" <?php if (isset($favcolor) && $favcolor == 'blue') echo 'checked="checked"'; ?> name="favcolor" value="blue">Blue
            </p>

            <p>
                <button>Submit</button>
            </p>

            <input type="hidden" name="submitted" value="true">
        </form>

    </body>
</html>
