<?php
/**
 * Created by PhpStorm.
 * User: Bastian Erler
 * Date: 20.07.2017
 * Time: 11:28
 */
    class Profile_Controller extends CI_Controller
    {

        public function index()
        {
            //enable profiler
            $this->output->enable_profiler(TRUE);
            $this->load->view('benchmarking_tutorial/test');
        }

        public function disable()
        {
            //disable profiler
            $this->output->enable_profiler(FALSE);
            $this->load->view('benchmarking_tutorial/test');
        }
    }