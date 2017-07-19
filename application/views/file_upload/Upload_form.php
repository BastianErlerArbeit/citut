<?php
/**
 * Created by PhpStorm.
 * User: Bastian Erler
 * Date: 19.07.2017
 * Time: 15:59
 */?>

<html>

    <head>
        <titel>Upload Form</titel>
    </head>

    <body>
        <?= $error ?>
        <?= form_open_multipart('upload/do_upload'); ?>

        <form action="" method="">
            <input type="file" name="userfile" size="20"/>
            <br /><br />
            <input type="submit" value="upload" />
        </form>

    </body>

</html>
