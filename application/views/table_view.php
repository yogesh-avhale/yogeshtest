<?php
	if (isset($user_details) && !empty($user_details)) 
	{
?>
<table class="table table-bordered table-hover table-striped">
	<thead style="text-align: center;">
		<th>Sr. No.</th>
		<th>Name</th>
		<th>Sallary</th>
		<th>Action</th>
	</thead>
	<tbody>
		<?php			
			$i=1;
			foreach ($user_details as $value){									
		?>
			<tr>
				<td align="center"><?php echo $i++;?></td>
				<td><?php echo (isset($value->user_name) && !empty($value->user_name))? $value->user_name:''?></td>
				<td><?php echo (isset($value->user_sallary) && !empty($value->user_sallary))? $value->user_sallary:''?></td>
				<td width="20%" align="center">
					<i class="fa fa-trash deleterecord" style="cursor: pointer;" rev="delete" rel="<?php echo (isset($value->user_id) && !empty($value->user_id))? $value->user_id:''?>"></i> | 
					<i class="fa fa-edit editrecord" data-toggle="modal" data-target="#myModal" style="cursor: pointer;" rev="edit" rel="<?php echo (isset($value->user_id) && !empty($value->user_id))? $value->user_id:''?>"></i>
				</td>
			</tr>
		<?php } ?>
	</tbody>	
</table>
<?php } ?>