<?php
/**
 * Created by PhpStorm.
 * User: Bastian Erler
 * Date: 20.07.2017
 * Time: 09:58
 */
    class Tempdata_controller extends CI_Controller
    {
        public function index()
        {
            $this->load->library('session');
            $this->load->view('tempdata_tutorial/tempdata_view');
        }

        public function add()
        {
            $this->load->library('session');
            $this->load->helper('url');

            //tempdata will be removed after 5 seconds
            $this->session->set_tempdata('item','item-value',5);

            redirect('tempdata');
        }
    }