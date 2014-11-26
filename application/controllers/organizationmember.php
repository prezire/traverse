<?php if(!defined('BASEPATH')) exit('No direct script access allowed');
class OrganizationMember extends CI_Controller 
{
	public function __construct()
	{
		parent::__construct();
    validateSession();
    $this->load->model('organizationmembermodel');
	}
  public final function index()
  {
    $o = $this->organizationmembermodel->index()->result();
    showView('organization_members/index', array('organizationMembers' => $o));
  }
  public final function create()
  {
    if($this->input->post())
    {
      //if($this->form_validation->run('organizationmember/create')){
        $o = $this->organizationmembermodel->create()->row();
        if($o->id)
        {
          redirect(site_url('organizationmember/update/' . $o->organization_member_id));
        }
        else
        {
          show_error('Error creating organization_member.');
        }
      /*}
      else
      {
        showView('organization_members/create');
      }*/
    }
    else
    {
      showView('organization_members/create');
    }
  }
  public final function createByOrganizationId($organizationId)
  {
    $this->load->model('organizationmodel');
    if($this->input->post())
    {
      if($this->form_validation->run('organizationmember/create'))
      {
        $o = $this->organizationmembermodel->create()->row();
        if($o->id)
        {
          redirect(site_url('organizationmember/update/' . $o->id));
        }
        else
        {
          show_error('Error creating organization_member.');
        }
      }
      else
      {
        $org = $this->organizationmodel->read($this->input->post('organization_id'))->row();
        showView('organization_members/create', array('organization' => $org));
      }
    }
    else
    {
      $org = $this->organizationmodel->read($organizationId)->row();
      showView('organization_members/create', array('organization' => $org));
    }
  }
	public final function read($id)
	{
		showView('organization_members/read', array('organizationMember' => $this->organizationmembermodel->read($id)->row()));
	}
	public final function update($id = null)
  {
    $o = $this->organizationmembermodel->read($id)->row();
    $a = array('organizationMember' => $o);
    if($this->input->post())
    {
      //if($this->form_validation->run('organizationmember/update')){
        $b = $this->organizationmembermodel->update()->row();
        if($b->id > 0)
        {
          redirect(site_url('organizationmember/update/' . $b->organization_member_id));
        }
        else
        {
          show_error('Error updating organization member.');
        }
      /*}
      else
      {
        showView('organization_members/update', $a);
      }*/
    }
    else
    {
      showView('organization_members/update', $a);
    }
  }
	public final function delete($id)
  {
    showJsonView(array('organizationMember' => $this->organizationMember_model->delete($id)->row()));
  }
}