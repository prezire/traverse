<div id="organization" class="index row">
  <h4>Organizations</h4>
  <a href="<?php echo site_url('organization/create'); ?>" class="button tiny radius">Add New Organization</a>
	<table>
		<thead>
			<tr>
        <th>Name</th>
        <th>Description</th>
        <th>Address</th>
        <th>Landline</th>
        <th>Mobile</th>
        <th>Fax</th>
        <th>Options</th>
			</tr>
		</thead>
		<tbody>
      <?php foreach($organizations as $o){ ?>      
			<tr>
        <td><?php echo $o->name; ?></td>
        <td><?php echo $o->description; ?></td>
        <td><?php echo $o->address; ?></td>
        <td><?php echo $o->landline; ?></td>
        <td><?php echo $o->mobile; ?></td>
        <td><?php echo $o->fax; ?></td>
        <td>
					<a href="<?php echo site_url('organization/update/' . $o->id); ?>" class="button radius tiny">Update</a>
					<a href="<?php echo site_url('organization/delete/' . $o->id); ?>" class="button radius tiny alert">Delete</a>
				</td>
			</tr>
      <?php } ?>      
		</tbody>
	</table>
</div>