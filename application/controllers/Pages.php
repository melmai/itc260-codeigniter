<?php
// application/controllers/Pages.php

defined('BASEPATH') OR exit('No direct script access allowed');

class Pages extends CI_Controller {
    public function view($page = 'home')
    {
        // if file does not exist, show 404
        if ( !file_exists(APPPATH.'views/pages/'.$page.'.php'))
        {
            // Whoops, we don't have a page for that!
            show_404();
        }

        $data['title'] = ucfirst($page); // Capitalize the first letter

        $this->load->view('templates/header', $data);   // show header
        $this->load->view('pages/'.$page, $data);       // show body
        $this->load->view('templates/footer', $data);   // show footer
    }

}