<?php
// application/controllers/Pics.php 

class Pics extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('pics_model');                   // loads model
        $this->config->set_item('banner', 'Pictures');      // site ID
    }

    public function index()
    { // view tags, search form
        $this->config->set_item('title', 'Pictures!!!');    // title tag
        $this->load->view('pics/index');                    // loads index view
    }

    public function view($tag = NULL)
    {
        if(empty($tag))
        {
            feedback('No search term entered!');
            redirect('/pics/');
        }

        $data['title'] = 'Pictures of ' . $tag;
        $data['pics'] = $this->pics_model->get_pics($tag);
        $this->load->view('pics/view', $data);

    }
}