<?php
/**
 * Created by PhpStorm.
 * User: Bastian Erler
 * Date: 20.07.2017
 * Time: 12:01
 */
    class Test_Controller extends CI_Controller
    {
        public function index()
        {
            $this->output->enable_profiler(TRUE);
            $this->load->helper('url');
            $this->load->view('test');
        }
    }