<?php
/**
 * Created by PhpStorm.
 * User: Bastian Erler
 * Date: 19.07.2017
 * Time: 12:32
 */
?>
<h2><?=  $title; ?></h2>

<?= validation_errors(); ?>

<?= form_open('news/create'); ?>
    <label for="title"> Title </label>
    <input type="input" name="title" /><br />

    <label for="text"> Text </label>
    <textarea name="text" rows="10" cols="80" /></textarea><br />

    <input type="submit" name="submit" value="Create news item" />

</form>
