<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Auth extends CI_Controller {

    function __construct()
{
    parent::__construct();
    $this->load->library('form_validation');
    $this->load->helper(array('url', 'form'));
    $this->load->model('user_model');
    $this->_salt = "15145875695486695247";
}

    public function index()
    {
        redirect('/auth/login'); // url helper function
    }

    public function register()
    {
        $this->load->view('header_home');
        $this->load->view('register_view',array('errmsg' => ''));
        $this->load->view('footer_home');

    }

    public function login()
    {
        $data['errmsg'] = '';

        $this->load->view('header_home');
        $this->load->view('login_view',$data);
        $this->load->view('footer_home');

    }

    function authenticate()
    {

        $username = $this->input->post('email');
        $password = $this->input->post('pword');
        $query = $this->user_model->login($username,$password);


        if($query) // if the user's credentials validated...
        {
            $data = array(
                'username' => $this->input->post('username'),
                'is_logged_in' => true
            );
            $this->session->set_userdata($data);
            $this->load->view('header_home_logged.php');
            $this->load->view('logged');
            $this->load->view('footer_home');
        }
               else {
            $data['errmsg'] = 'Unable to login - please try again';
                   redirect('/auth/login');
        }

    }


    public function createaccount()
    {
        $firstname = $this->input->post('firstname');
        $lastname = $this->input->post('lastname');
        $email = $this->input->post('email');
        $password = $this->input->post('pword');
        $conf_password = $this->input->post('conf_pword');


        if (!($errmsg = $this->user_model->register($firstname,$lastname,$email,$password,$conf_password))) {
            redirect('/auth/login');
        }
        else {
            $data['errmsg'] = $errmsg;
            $this->load->view('register_view',$data);
        }

    }


    function logout()
    {
        $this->session->sess_destroy();
        redirect('/auth/login');
    }
}
