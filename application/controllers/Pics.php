<?php
// application/controllers/Pics.php 

class Pics extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('pics_model');
        $this->config->set_item('banner', 'Pictures');
    }

    public function index()
    { // view tags, search form
        $this->config->set_item('title', 'Pictures!!!');
        $this->load->view('pics/index');
    }

    public function view($tag = NULL)
    {
        if(!$tag)
        {
            // show form
        }

        $data['title'] = 'Pictures of ' . $tag;
        $this->load->view('pics/view', $data);
    }
}