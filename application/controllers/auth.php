<?php
  if(!defined('BASEPATH')) exit('No direct script access allowed');
  class Auth extends CI_Controller
  {
    public function __construct()
    {
      parent::__construct();
    }
    public final function login()
    {
      if($this->input->post())
      {
        //if($this->form_validation->run('auth/login')){
          $this->load->model('authmodel');
          $u = $this->authmodel->login()->row();
          if(!empty($u))
          {
            $this->session->set_userdata('user', $u);
            redirect(site_url('organization'));
          }
          else
          {
            showView
            (
              'login', 
              array('error' => true)
            );
          }
        /*}
        else
        {
          showView('login');
        }*/
      }
      else
      {
        showView('login');
      }
    }
    public final function register($plan = 'Small')
    {
      if($this->input->post())
      {
        //if($this->form_validation->run('auth/register')){
          $this->load->model('authmodel');
          $u = $this->authmodel->create()->row();
          if($u->id > 0)
          {
            //$this->session->set_userdata('user', $u);
            redirect(site_url('auth/registerSuccess'));
          }
          else
          {
            showView('register', array('plan' => $plan));
          }
        /*}
        else{
          
        }*/
      }
      else
      {
        showView('register', array('plan' => $plan));
      }
    }
    public final function registerSuccess(){showView('register_success');}  
    public final function logout()
    {
      $this->session->set_userdata('user', null);
      $this->session->sess_destroy();
      redirect(site_url('/'));
    }
  }