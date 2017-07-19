<?php
/**
 * Created by PhpStorm.
 * User: Bastian Erler
 * Date: 19.07.2017
 * Time: 09:59
 */
    class Test extends CI_Controller {

        public function index() {
            $this->load->view('test');
        }

        public function hello() {
            echo 'This is hello function.';
            //$this->load->model('User_model');
            //$this->User_Model->method();
        }
    }