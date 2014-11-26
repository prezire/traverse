<?php	class VisitorModel extends CI_Model
	{
		public function __construct()
		{
			parent::__construct();
		}
		public final function index()
		{
      //Fetch one organization.
      $this->load->model('organizationmodel');
      $orgId = $this->organizationmodel->index()->row()->id;
      //
			$this->db->select('*');
			$this->db->from('visitors v');
      $this->db->join('users u', 'u.id = v.user_id');
      $this->db->where('v.organization_id', $orgId);
			return $this->db->get();
		}
    public final function export($type)
    {
      //
    }
		public final function create()
		{
			$i = $this->input;
			if($i->post())
			{
        $roleId = $this->db->get_where('roles', array('name' => 'Visitor'))->row()->id;
        //
        $a = array
        (
          'full_name' => $i->post('full_name'),
          'role_id' => $roleId
        );
        $this->db->insert('users', $a);
        $userId = $this->db->insert_id();
        //
        $a = getPostValuePair(array('full_name', 'showFormView', 'organization'));
        $a['user_id'] = $userId;
        $this->load->model('organizationmodel');
        $orgId = $this->organizationmodel->readByName($i->post('organization'))->row()->id;
        $a['organization_id'] = $orgId;
				$this->db->insert('visitors', $a);
        //
        $this->db->select('*');
        $this->db->from('users u');
        $this->db->join('visitors v', 'v.user_id = u.id');
        $this->db->where('u.id', $userId);
        return $this->db->get();
			}
		}
    public final function readByFilter()
    {
      $i = $this->input;
      $in = $i->post('date_time_in');
      $out = $i->post('date_time_out');
      //
      $this->load->model('organizationmodel');
      $orgId = $this->organizationmodel->readByName($i->post('organization'))->row()->id;
      //
      $this->db->select('*');
			$this->db->from('visitors v');
      $this->db->join('users u', 'u.id = v.user_id');
      //
      $this->db->where('organization_id', $orgId);
      if(!empty($in) && !empty($out))
      {
        $this->db->where('date_time_in >', $in);
        $this->db->where('date_time_in <', $out);
      }
      return $this->db->get();
    }
		public final function read($id)
		{
      return $this->db->get_where
      (
        'visitors', 
        array('id' => $id)
      );
		}
		public final function update()
		{
			$i = $this->input;
			$id = $i->post('id');
			$this->db->where('id', $id);
			$this->db->update
      (
        'visitors', 
        getPostValuePair()
      );
		}
		public final function delete($id)
    {
      $this->db->where('visitor.id', $id);
			return $this->db->delete();
    }
	}