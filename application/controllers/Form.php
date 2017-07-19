<?php
/**
 * Created by PhpStorm.
 * User: Bastian Erler
 * Date: 19.07.2017
 * Time: 17:01
 */

    class Form extends CI_Controller
    {
        public function index()
        {
            //Load form helper
            $this->load->helper(array('form'));

            //Load form validation library
            $this->load->library('form_validation');

            //Set validation rule for name field in the form
            $config = array(
                array(
                    'field'   => 'name',
                    'label'   => 'Name',
                    'rules'   => 'required',
                )
            );
            $this->form_validation->set_rules($config);

            if ($this->form_validation->run() === false )
            {
                $this->load->view('validation_tutorial/myform');
            }
            else
            {
                $this->load->view('validation_tutorial/formsuccess');
            }
        }
    }
