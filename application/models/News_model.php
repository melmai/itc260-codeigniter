<?php
// application/models/News_model.php 

class News_model extends CI_Model {

    public function __construct()
    {
        $this->load->database();
    }

    public function get_news($slug = FALSE)
    {
        if ($slug === FALSE)
        {
            $query = $this->db->get('news');
            return $query->result_array();
        }

        $query = $this->db->get_where('news', array('slug' => $slug));
        return $query->row_array();
    } // end get_news()

    public function set_news()
    {
        $this->load->helper('url');

        // replaces spaces with dashes in URL
        $slug = url_title($this->input->post('title'), 'dash', TRUE);

        // sets user input to database fields
        $data = array(
            'title' => $this->input->post('title'),     // user input
            'slug' => $slug,                            // modified user input
            'text' => $this->input->post('text')        // user input
        );

        // inserts data into db
        if($this->db->insert('news', $data))
        { // if successful, return slug
            return $slug;
        } 
        else 
        { // else return false
            return false;
        }
    } // end set_news()
}