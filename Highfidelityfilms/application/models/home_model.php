<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Home_model extends CI_Model {

    function __construct()
    {
        parent::__construct();
        $this->load->database();

    }

    function getFilms(){


        $query = $this->db->get('film');
        $data = $query->result_array();
//print_r($data);
        return $data;

    }

    function getRequestedFilm($id){
        $this->db->where('film_id',$id);
        $query = $this->db->get('film');
        $data = $query->result_array();
        return $data;

    }

}