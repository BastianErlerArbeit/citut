<?php
/**
 * Created by PhpStorm.
 * User: Bastian Erler
 * Date: 20.07.2017
 * Time: 09:41
 */
?>

<!DOCTYPE html>
<html lang = "en">

    <head>
        <meta charset="utf-8">
        <title>Codeigniter Flashdata Example</title>
    </head>

    <body>
        Flash Date Example
        <h2><?= $this->session->flashdata('item'); ?></h2>
        <a href = 'flashdata/add' >Click Here</a> to add flash data.
    </body>

</html>
