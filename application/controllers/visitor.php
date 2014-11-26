<?php if(!defined('BASEPATH')) exit('No direct script access allowed');
class Visitor extends CI_Controller 
{
	public function __construct()
	{
		parent::__construct();
    validateSession();
    $this->load->model('visitormodel');
	}
  public final function index()
  {
    $v = $this->visitormodel->index();
    $count = $v->num_rows();
    $o = $v->result();
    $this->load->model('organizationmodel');
    $orgs = $this->organizationmodel->readAllFromLoggedUser()->result();
    if(!$orgs) redirect(site_url('organization'));
    $a = array
    (
      'visitors' => $o, 
      'count' => $count,
      'organizations' => $orgs
    );
    showView('visitors/index', $a);
  }
  public final function export($type = 'CSV')
  {
    $this->load->helper('csv_helper');
    $query = $this->visitormodel->export($type);
    $filename = 'Visitors' . date("YmdHis") . '.csv';
    $this->csv_helper->downloadAsCsv($query, true, $filename);
  }
  public final function create()
  {
    $this->load->model('organizationmodel');
    $orgs = $this->organizationmodel->readAllFromLoggedUser()->result();
    if($this->input->post())
    {
      if(!isset($orgs)) redirect(site_url('organization'));
      //
      //if($this->form_validation->run('visitor/create')){
        $result = $this->visitormodel->create();
        $o = $result->row();
        $b = false;
        if($o->id)
        {
          $b = strlen($this->input->post('showFormView')) > 0;
          if($b)
          {
            showView('visitors/create', array('success' => true, 'organizations' => $orgs));
          }
          else
          {
            showJsonView(array('success'=> true, 'visitor' => $result->row_array()));
          }
        }
        else
        {
          if($b)
          {
            showView('visitors/create', array('success' => false, 'organizations' => $orgs));
          }
          else
          {
            showJsonView(array('succes'=> false, 'message' => 'Error creating visitor.'));
          }
        }
        
      /*}
      else
      {
        showView('visitors/create');
      }*/
    }
    else
    {
      showView('visitors/create', array('organizations' => $orgs));
    }
  }
  public final function readByFilter()
  {
    if($this->input->post())
    {
      $v = $this->visitormodel->readByFilter()->result();
      showJsonView(array('success' => true, 'visitors' => $v));
    }
  }
	public final function read($id)
	{
		showView('visitors/read', array('visitor' => $this->visitormodel->read($id)->row()));
	}
	public final function update($id = null)
  {
    $o = $this->visitormodel->read($id)->row();
    $a = array('visitor' => $o);
    if($this->input->post())
    {
      if($this->form_validation->run())
      {
        $b = $this->visitormodel->update()->row();
        if($b)
        {
          redirect(site_url('visitor/read/' . $o->id));
        }
        else
        {
          show_error('Error updating visitor.');
        }
      }
      else
      {
        showView('visitors/update', $a);
      }
    }
    else
    {
      showView('visitors/update', $a);
    }
  }
	public final function delete($id)
  {
    showJsonView(array('visitor' => $this->visitor_model->delete($id)->row()));
  }
}