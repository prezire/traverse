<?php 
  if(!defined('BASEPATH')) 
    exit('No direct script access allowed');

class Main extends CI_Controller 
{
  public function __construct()
  {
    parent::__construct();
  }
	public final function index()
  {
    
  }
  public final function contact()
  {
    if($this->input->post())
    {
      //Send to email.
    }
    else
    {
      showView('contact');
    }
  }
  public final function tour(){showView('tour');}
  public final function pricing(){showView('pricing');}
  public final function analytics(){showView('analytics');}
}