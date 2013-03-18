<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Add_films extends CI_Controller {

    function __construct()
    {
        parent::__construct();
        $this->load->helper('url');
        $this->load->model('add_film_model');
    }

    public function index()
    {
        $this->load->view('/admin/add_films_view', array('errmsg'));
    }

    public function test(){
        $film_id =$this->input->get('film_id');
        $errmsg = $this->add_film_model->add_film_details($film_id);
        $data['errmsg'] = $errmsg;
        $this->load->view('/admin/add_films_view', $data);


    }


}

