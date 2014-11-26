<?php  
  class AuthModel extends CI_Model
  {
    public function __construct()
    {
      parent::__construct();
    }
    public final function login()
    {
      $i = $this->input;
      $email = $i->post('email');
      $pwd = $i->post('password');
      $a = array('email' => $email, 'password' => $pwd);
      $o = $this->db->get_where('users', $a);
      return $o;
    }
    public final function create()
    {
      $i = $this->input;
      //
      $a = getPostValuePair(array('role'));
      $roleId = getRoleByName($i->post('role'))->row()->id;
      $a['role_id'] = $roleId;
      $this->db->insert('users', $a);
      //
      $this->load->model('usermodel');
      return $this->usermodel->read($this->db->insert_id());
    }
  }