<?php
/**
 * Created by PhpStorm.
 * User: Bastian Erler
 * Date: 20.07.2017
 * Time: 10:48
 */

    class Cache_Controller extends CI_Controller
    {
        public function index()
        {
            $this->output->cache(1);
            $this->load->view('cache_tutorial/test');
        }

        public function delete_file_cache()
        {
            $this->output->delete_cache('cachecontroller');
        }
    }