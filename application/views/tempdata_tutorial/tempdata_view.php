<?php
/**
 * Created by PhpStorm.
 * User: Bastian Erler
 * Date: 20.07.2017
 * Time: 10:02
 */
?>

<!DOCTYPE html>
<html lang = "en">

    <head>
        <meta charset = "utf-8">
        <title>CodeIgniter Tempdata Example</title>
    </head>

    <body>
        Temp Data Example
        <h2><?= $this->session->tempdata('item'); ?></h2>
        <a href = 'tempdata/add' >Click Here</a> to add temp data.
    </body>

</html>
