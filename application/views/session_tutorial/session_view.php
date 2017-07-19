<?php
/**
 * Created by PhpStorm.
 * User: Bastian Erler
 * Date: 19.07.2017
 * Time: 17:40
 */
?>
<!DOCTYPE html>
<html lang = "en">

    <head>
        <meta charset = "utf-8">
        <title>CodeIgniter Session Example</title>
    </head>

    <body>
        Welcome <?php echo $this->session->userdata('name'); ?>
        <br>
        <p><a href="<?php echo site_url('sessionex/unset_session_data'); ?>">Click Here</a> to unset session data.</p>
    </body>

</html>
