<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

    class Home_Controller extends CI_Controller {

        function __construct()
        {
            parent::__construct();
            $this->load->helper('url');
            $this->load->model('add_film_model');
            $this->load->model('home_model');
        }

        function getFilmDetails(){
            $id =$this->input->get('id');
            $data['film']=$this->home_model->getRequestedFilm($id);
            if ($data){
            $this->load->view('header_home');
            $this->load->view('movies_details_view.php',$data);
            $this->load->view('footer_home');
            }

        }
    }