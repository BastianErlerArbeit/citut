<?php
/**
 * Created by PhpStorm.
 * User: Bastian Erler
 * Date: 20.07.2017
 * Time: 10:33
 */
    class CommonFun_Controller extends CI_Controller
    {
        public function index()
        {
            set_status_header(200);
            echo 'is_php <br>';
            echo is_php('7.0')."<br><br>";

            var_dump(is_really_writable("./Form.php"));

            echo '<br><br>config_item <br>';
            echo config_item('language')."<br><br>";

            echo 'remove_invisible_characters <br>';
            echo remove_invisible_characters('This is a test', 'UTF8')."<br><br>";

            $str = '< This > is \' a " test & string';
            echo html_escape($str)."<br><br>";
            echo "is_https():".var_dump(is_https())."<br><br>";
            echo "is_cli():".var_dump(is_cli())."<br><br>";

            var_dump(function_usable('test'))."<br><br>";
            echo "get_mimes():".print_r(get_mimes())."<br><br>";
        }

        public function test()
        {
            echo "Test function";
        }
    }