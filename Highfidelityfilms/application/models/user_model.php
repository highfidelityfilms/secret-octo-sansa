<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class User_model extends CI_Model {
function __construct()
{
parent::__construct();
$this->load->database();
}

function register($firstname,$lastname,$email,$password,$conf_password)
{
// is username unique?
$res = $this->db->get_where('users',array('email' => $email));
if ($res->num_rows() > 0) {
return 'Email already exists';
}
// username is unique
$hashpwd = sha1($password);
$data = array('first_name' => $firstname,'last_name' => $lastname,
'password' => $hashpwd,'email' => $email, );
$this->db->insert('users',$data);
return null; // no error message because all is ok
}


    function login($email,$pwd)
    {
        $this->db->where(array('email' => $email,'password' => sha1($pwd)));
        $res = $this->db->get('users',array('first_name'));
        if ($res->num_rows() != 1) { // should be only ONE matching row!!
            return false;
        }
            // remember login
            $session_id = $this->session->userdata('session_id');
            // remember current login
            $row = $res->row_array();
            $this->db->insert('logins',array('first_name' => $row['first_name'],'session_id' => $session_id));

            return $res->row_array();
    }



    function is_loggedin()
    {
      $session_id = $this->session->userdata('session_id');
        $res = $this->db->get_where('logins',array('session_id' => $session_id));
        if ($res->num_rows() == 1) {
            $row = $res->row_array();
            return $row['first_name'];
            return false;
        }
        else {
            return false;
        }
        return false;
    }
}