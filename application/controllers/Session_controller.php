<?php
/**
 * Created by PhpStorm.
 * User: Bastian Erler
 * Date: 19.07.2017
 * Time: 17:36
 */
    class Session_controller extends CI_Controller
    {
        public function __construct()
        {
            parent::__construct();
            $this->load->helper('url_helper');
        }

        public function index()
        {
            //loading session library
            $this->load->library('session');

            //adding data to session
            $this->session->set_userdata('name', 'virat');

            $this->load->view('session_tutorial/session_view');
        }

        public function unset_session_data()
        {
            //loading session library
            $this->load->library('session');


            //removing session data
            $this->session->unset_userdata('name');
            $this->load->view('session_view');
        }
    }