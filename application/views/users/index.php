<div id="user" class="index">
	<table>
		<thead>
			<tr>
      <th>Email</th>
      <th>Password</th>
      <th>Title</th>
      <th>Full Name</th>
      <th>Enabled</th>
      <th>Landline</th>
      <th>Mobile</th>
      <th>Address</th>
      <th>Nationality</th>
      <th>Alternate Email</th>
      <th>Image Path</th>
      <th>Options</th>
			</tr>
		</thead>
		<tbody>
      <?php foreach($user as $u){ ?>      
			<tr>
          <td><?php echo $u->email; ?></td>
          <td><?php echo $u->password; ?></td>
          <td><?php echo $u->title; ?></td>
          <td><?php echo $u->full_name; ?></td>
          <td><?php echo $u->enabled; ?></td>
          <td><?php echo $u->landline; ?></td>
          <td><?php echo $u->mobile; ?></td>
          <td><?php echo $u->address; ?></td>
          <td><?php echo $u->nationality; ?></td>
          <td><?php echo $u->alternate_email; ?></td>
          <td><?php echo $u->image_path; ?></td>
        <td>
					<a href="<?php echo site_url('u/update/' . $u->id); ?>">Update</a> | 
					<a href="<?php echo site_url('u/delete/' . $u->id); ?>">Delete</a>
				</td>
			</tr>
      <?php } ?>
		</tbody>
	</table>
</div>