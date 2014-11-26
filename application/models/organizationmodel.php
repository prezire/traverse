<?php	class OrganizationModel extends CI_Model
	{
		public function __construct()
		{
			parent::__construct();
		}
		public final function index()
		{
			$this->db->select('o.*');
			$this->db->from('organizations o');
			return $this->db->get();
		}
		public final function create()
		{
			$a = getPostValuePair();
      $this->db->insert('organizations', $a);
      $org = $this->read($this->db->insert_id());
      //
      //Automatically include current logged user as member.
      $a = array('organization_id' => $org->row()->id, 'user_id' => getLoggedUser()->id);
      $this->db->insert('organization_members', $a);
      return $org;
		}
    public final function readAllFromLoggedUser()
    {
      $userId = getLoggedUser()->id;
      $this->db->select('o.name');
      $this->db->from('organizations o');
      $this->db->join('organization_members om', 'om.organization_id = o.id');
      $this->db->join('users u', 'om.user_id = u.id');
      $this->db->group_by('o.name');
      $this->db->order_by('o.name', 'DESC');
      return $this->db->get();
    }
		public final function read($id)
		{
      return $this->db->get_where
      (
        'organizations', 
        array('id' => $id)
      );
		}
    public final function readByName($name)
		{
      return $this->db->get_where
      (
        'organizations', 
        array('name' => $name)
      );
		}
		public final function update()
		{
			$i = $this->input;
			$id = $i->post('id');
			$this->db->where('id', $id);
			$this->db->update
      (
        'organizations', 
        getPostValuePair()
      );
		}
		public final function delete($id)
    {
      $this->db->where('organization.id', $id);
			return $this->db->delete();
    }
	}