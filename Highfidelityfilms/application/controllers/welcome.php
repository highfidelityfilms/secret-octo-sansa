<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Welcome extends CI_Controller {

    function __construct()
    {
        parent::__construct();
        $this->load->helper('url');
        $this->load->model('home_model');
        $this->load->model('user_model');
    }

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -  
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in 
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see http://codeigniter.com/user_guide/general/urls.html
	 */
	public function index()
                	{
                        $loggedin = $this->user_model->is_loggedin();

                        if ($loggedin === false) {



        $films=$this->home_model->getFilms();
        $data['film'] =$films;
        $this->load->view('header_home');
        $this->load->view('home_view',$data);
        $this->load->view('footer_home');
                    }}
}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */