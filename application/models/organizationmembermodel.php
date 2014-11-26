<?php	class OrganizationMemberModel extends CI_Model
	{
		public function __construct()
		{
			parent::__construct();
		}
		public final function index()
		{
			$this->db->select('o.*');
			$this->db->from('organization_members o');
			return $this->db->get();
		}
		public final function create()
		{
			$i = $this->input;
      //Create users.
      $a = getPostValuePair(array('organization_id'));
      $a['role_id'] = getRoleByName('Admin')->row()->id;
      $this->db->insert('users', $a);
      //
      //Members.
      $a = getPostValuePair
      (
        array
        (
          'title', 
          'full_name', 
          'email', 
          'password', 
          'alternate_email', 
          'landline', 
          'mobile', 
          'nationality', 
          'address'
        )
      );
      $a['user_id'] = $this->db->insert_id();
      $this->db->insert('organization_members', $a);
      $omId = $this->db->insert_id();
      return $this->read($omId);
		}
		public final function read($id)
		{
      $this->db->select('u.*, u.id user_id, 
      om.id organization_member_id, 
      o.id organization_id,
      o.name organization_name');
      $this->db->from('users u');
      $this->db->join('organization_members om', 'u.id = om.user_id');
      $this->db->join('organizations o', 'o.id = om.organization_id');
      $this->db->where('om.id', $id);
      $o = $this->db->get();
      return $o;
		} 
    public final function readAllByOrganizationId($organizationId)
    {
      $this->db->select('*, u.id user_id, om.id organization_member_id, o.id organization_id');
      $this->db->from('users u');
      $this->db->join('organization_members om', 'u.id = om.user_id');
      $this->db->join('organizations o', 'o.id = om.organization_id');
      $this->db->where('o.id', $organizationId);
      return $this->db->get();
    }
		public final function update()
		{
			$i = $this->input;
      //
      //Update users.
      $a = getPostValuePair(array('id'));
      $tmp = array('id' => $i->post('id'));
      $userId = $this->db->get_where('organization_members', $tmp)->row()->user_id;
      $this->db->where('id', $userId);
      $this->db->update('users', $a);
      //
      //Members.
			$id = $i->post('id');
      return $this->read($id);
		}
		public final function delete($id)
    {
      $this->db->where('organization_member.id', $id);
			return $this->db->delete();
    }
	}