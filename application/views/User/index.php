<div id="content" class="p-4 p-md-5">
	<div class="container-fluid">
		<table class="table">
			<thead>
			<tr>
				<th scope="col">ID</th>
				<th scope="col">Full Name</th>
				<th scope="col">Date Of birth</th>
				<th scope="col">Contact</th>
				<th scope="col">Email</th>
				<th scope="col">Create At</th>
				<th scope="col">Action</th>

			</tr>
			</thead>
			<tbody>
			<?php foreach ($users as $user){ ?>
			<tr>
				<th scope="row"><?php echo $user['id'] ?></th>
				<td><?php echo $user['f_name'].' '.$user['l_name']  ?></td>
				<td><?php echo $user['dob'] ?></td>
				<td><?php echo $user['contact_no'] ?></td>
				<td><?php echo $user['email'] ?></td>
				<td><?php echo $user['created_at'] ?></td>
				<td>EDIT | DELETE</td>
			</tr>
			<?php } ?>
			</tbody>
		</table>
	</div>
</div>

