<div id="organizationMember" class="index row">
  <h5>Organization Members</h5>
  <a href="<?php echo site_url('organizationmember/createByOrganizationId/' . $organizationId); ?>" class="button radius tiny">Add Member</a>
  <table>
		<thead>
			<tr>
      <th>Email</th>
      <th>Title</th>
      <th>Full Name</th>
      <th>Landline</th>
      <th>Mobile</th>
      <th>Address</th>
      <th>Options</th>
			</tr>
		</thead>
		<tbody>
      <?php foreach($organizationMembers as $u){ ?>      
			<tr>
          <td><?php echo $u->email; ?></td>
          <td><?php echo $u->title; ?></td>
          <td><?php echo $u->full_name; ?></td>
          <td><?php echo $u->landline; ?></td>
          <td><?php echo $u->mobile; ?></td>
          <td><?php echo $u->address; ?></td>
        <?php if($u->user_id != getLoggedUser()->id){ ?>
        <td>
					<a href="<?php echo site_url('organizationmember/update/' . $u->organization_member_id); ?>" class="button radius tiny">Update</a> 
					<a href="<?php echo site_url('organizationmember/delete/' . $u->organization_member_id); ?>" class="button radius tiny alert">Delete</a>
				</td>
        <?php } ?>
			</tr>
      <?php } ?>
		</tbody>
	</table>
</div>