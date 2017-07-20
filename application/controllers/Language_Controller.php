<?php
/**
 * Created by PhpStorm.
 * User: Bastian Erler
 * Date: 20.07.2017
 * Time: 12:15
 */
    class Language_Controller extends CI_Controller
    {
        public function index()
        {
            $this->output->enable_profiler(TRUE);
            //load form helper
            $this->load->helper('form');

            //Get the selected language
            $language = $this->input->post('language');

            //Choose language file according to selected language

            switch($language)
            {
                case 'french':
                    $this->lang->load('french_lang', 'french');
                    break;
                case 'german':
                    $this->lang->load('german_lang', 'german');
                    break;
                default:
                    $this->lang->load('english_lang', 'english');
            }
                //Fetch the message from language file.
                $data['msg'] = $this->lang->line('msg');

                $data['language'] = $language;

                //Load the view file
                $this->load->view('languages_tutorial/lang_view', $data);

        }
    }