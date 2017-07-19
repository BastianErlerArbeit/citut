<?php
/**
 * Created by PhpStorm.
 * User: Bastian Erler
 * Date: 19.07.2017
 * Time: 16:38
 */
?>

<!DOCTYPE html>
<html lang = "en">

    <head>
        <meta charset = "utf-8">
        <title>CodeIgniter Email Example</title>
    </head>

    <body>
        <?= $this->session->flashdata('email_sent'); ?>
        <?= form_open('/Email_controller/send_mail'); ?>

        <input type = "email" name = "email" required />
        <input type = "submit" value = "SEND MAIL">

        <?= form_close(); ?>
    </body>

</html>
