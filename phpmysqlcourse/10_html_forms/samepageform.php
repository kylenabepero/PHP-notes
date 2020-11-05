<?php

if (isset($_POST['submitted']))
{
    $title = $_POST['title'];
    $name = $_POST['name'];
    $email = $_POST['email'];
    $message = $_POST['message'];
    $favcolor = $_POST['favcolor'];

    echo $title . ' ' . $name . '<br>';

    echo $email . '<br>';

    echo $message . '<br>';

    echo 'Your favorite color is ' . $favcolor;
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
                    <option value="Mr">Mr</option>
                    <option value="Mrs">Mrs</option>
                </select>

                Name: <input type="text" name="name" placeholder="Your name" />
            </p>

            <p>
                <label for="">Your e-mail:</label>
                <input type="email" name="email" placeholder="Your email">
            </p>

            <p>
                <label for="">Your message:</label>
                <textarea name="message" cols="30" rows="3" placeholder="Your message"></textarea>
            </p>

            <p>
                <label for="">Favorite color:</label>
                <input type="radio" name="favcolor" value="red">Red
                <input type="radio" name="favcolor" value="green">Green
                <input type="radio" name="favcolor" value="blue">Blue
            </p>

            <p>
                <button>Submit</button>
            </p>

            <input type="hidden" name="submitted" value="true">
        </form>

    </body>
</html>
