<?php
/**
 * Created by PhpStorm.
 * User: Bastian Erler
 * Date: 20.07.2017
 * Time: 11:03
 */
    class Redirect_Controller extends CI_Controller
    {
        public function index()
        {
            //Load the URL helper
            $this->load->helper('url');

            //Redirect the user to some site
            redirect('http://www.tutorialspoint.com');
        }

        public function computer_graphics()
        {
            //Load the URL helper
            $this->load->helper('url');
            redirect('http://www.tutorialspoint.com/computer_graphics/index.htm');
        }

        public function version2()
        {
            /*Load the URL helper*/
            $this->load->helper('url');

            /*Redirect the user to some internal controller’s method*/
            redirect('redirect/computer_graphics');
        }
}