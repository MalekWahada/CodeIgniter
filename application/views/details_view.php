<html>
<head>
	<title>OneTool</title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" />
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>
</head>
<body>
<div class="container">
	<br /><br /><br />
	<h3 align="center">Welcome </h3>
	<a id="logout" name="logout" value="logout"
	   class="btn btn-danger pull-right" href="<?php echo base_url();?>Main/index">Log out</a>
	<br />
	<div class="table-responsive">
	<table class="table table table-bordered">
		<tr>
			<th>ID</th>
			<th>Username</th>
			<th>Email</th>
		</tr>

			<?php
			if($data_details->num_rows() > 0)
			{
				foreach ($data_details->result() as $row)
				{
					?>
					<tr>
					<td><?php echo $row->id_user; ?></td>
					<td><?php echo $row->username; ?></td>
					<td><?php echo $row->email; ?></td>
					</tr>
					<?php
				}

			}
			else{
				?>
				<td colspan="3">No Data Found</td>
			<?php
			}
			?>

	</table>
	</div>
</div>
</body>
</html>
