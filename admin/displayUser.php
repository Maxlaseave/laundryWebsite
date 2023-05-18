<?php
	include 'dbconn.php';
	$query = "SELECT * FROM employees";
	$result = mysqli_query($conn, $query);

	if(mysqli_num_rows($result) > 0) {
		?>
	
		<div class="container-md">
		<h2>List of Employees</h2>
		<div class="col">
			<table class="table table-hover table-striped">
				<thead>
					<tr>
						<th>ID</th>
						<th>Name</th>
						<th>Email</th>
						<th>contactNo</th>
						<th>Role</th>
					</tr>
				</thead>
				<tbody>
					<?php while($row = mysqli_fetch_assoc($result)) { ?>
						<tr>
							<td><?php echo $row['userId']; ?></td>
							<td><?php echo $row['name']; ?></td>
							<td><?php echo $row['email']; ?></td>
							<td><?php echo $row['contactNo']; ?></td>
							<td><?php echo $row['role']; ?></td>
						</tr>
					<?php } ?>
				</tbody>
			</table>
		</div>
		<?php
		} else {
		?>


<?php }
?>