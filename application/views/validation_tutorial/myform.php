<?php
/**
 * Created by PhpStorm.
 * User: Bastian Erler
 * Date: 19.07.2017
 * Time: 16:58
 */
?>
<html>

    <head>
        <title>My Form</title>
    </head>

    <body>
        <form action = "" method = "">
            <?= var_dump($_POST) ?>
            <?= validation_errors(); ?>
            <?= form_open('form'); ?>
            <h5>Name</h5>
            <input type = "text" name = "name" value = "" size = "50" />
            <div><input type = "submit" value = "Submit" /></div>
        </form>
    </body>

</html>
