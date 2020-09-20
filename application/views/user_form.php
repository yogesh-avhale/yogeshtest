<!DOCTYPE html>
<html>
<head>
	<title>User information</title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
	<link rel="stylesheet" href="<?php echo base_url();?>css/font-awesome.css">
	<link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
</head>
<body>
	<div class="container">
		<div class="row" style="margin-top: 20px;">
			<div class="col-sm-offset-2 col-sm-4">
				<button class="btn btn-info btn-small" data-toggle="modal" data-target="#myModal">ADD USER HERE</button>
			</div>
		</div>
		<div class="row" style="margin-top: 20px;">
			<div class="col-sm-offset-2 col-sm-8">
				<div id="tabledata">
					<?php $this->load->view('table_view');?>
				</div>
			</div>
		</div>		
	</div>

	<div id="myModal" class="modal fade" role="dialog">
	  <div class="modal-dialog">
	    <!-- Modal content-->
	    <div class="modal-content">
	      <div class="modal-header">
	        <button type="button" class="close" data-dismiss="modal">&times;</button>
	        <h4 class="modal-title">Git User form</h4>
	      </div>
	      	<div class="modal-body">
	      		<form action="<?php echo base_url();?>save/userinfo" class="form" id="user_data">
		      		<table class="table table-condenced">
						<tr>
								<input type="hidden" name="id"  id="uid" value="" class="form-control">
							<td>								
								<input type="text" name="username"  id="uname" value="" class="form-control" placeholder="Please enter name" required>
							</td>
						</tr>
						<tr>
							<!-- <td>Name</td> -->
							<td>
								<input type="text" name="sallary" id="usall" class="form-control" placeholder="Please sallary" required>
							</td>
						</tr>
						<tr>
							<td><input type="button" name="sub" value="Submit" data-dismiss="modal" class="btn btn-info btn-small commonsave getdata"></td>
						</tr>		
					</table>
				</form>
	      	</div>
	      <div class="modal-footer">
	        <!-- <button type="button" class="btn btn-default" data-dismiss="modal">Close</button> -->
	      </div>
	    </div>

	  </div>
	</div>
<!-- jQuery library -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<!-- <script src="<?php echo base_url();?>js/jquery.validate.js"></script> -->
<!-- <script src="<?php echo base_url();?>js/jquery.validate.min.js"></script> -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/bootbox.js/4.4.0/bootbox.min.js"></script>
<!-- Latest compiled JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
<!-- <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"></script> -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.form/4.2.2/jquery.form.js"></script>

<script src="<?php echo base_url();?>js/common.js"></script>
</body>
</html>
