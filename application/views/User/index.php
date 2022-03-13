<div id="content" class="p-4 p-md-5">
	<div class="container-fluid">
		<?php if ($this->session->flashdata('success')){ ?>
		<div class="alert alert-success" role="alert">
			<?php echo $this->session->flashdata('success') ?>
		</div>
		<?php } ?>
		<?php if ($this->session->flashdata('update')){ ?>
		<div class="alert alert-primary" role="alert">
			<?php echo $this->session->flashdata('update') ?>
		</div>
		<?php } ?>
		<?php if ($this->session->flashdata('delete')){ ?>
		<div class="alert alert-danger" role="alert">
			<?php echo $this->session->flashdata('delete') ?>
		</div>
		<?php } ?>
		<table class="table">
			<thead>
			<tr class="text-center">
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
			<?php if (!empty($users)) { foreach ($users as $user){ ?>
			<tr class="text-center">
				<th scope="row"><?php echo $user->id ?></th>
				<td><?php echo anchor('user/show/'.$user->id,$user->f_name.' '.$user->l_name,array('class'=>'inactive')) ?></td>
				<td><?php echo $user->dob ?></td>
				<td><?php echo $user->contact_no ?></td>
				<td><?php echo $user->email ?></td>
				<td><?php echo $user->created_at ?></td>
				<td>
					<?php echo anchor('user/edit/'.$user->id,'Edit',array('class'=>'btn btn-primary')) ?>
					<?php echo anchor('user/delete/'.$user->id,'Delete',array('class'=>'btn btn-danger')) ?>
					<?php echo anchor('user/show/'.$user->id,'Detail',array('class'=>'btn btn-success')) ?>
<!--					--><?php //echo anchor('user/show/'.$user->id,$user->f_name.' '.$user->l_name,array('class'=>'inactive')) ?>
				</td>
			</tr>
			<?php }}else{ ?>
					<tr>
						<td colspan="7" class="text-center">Data Not found</td>
					</tr>
			<?php } ?>
			</tbody>
		</table>
	</div>
</div>

