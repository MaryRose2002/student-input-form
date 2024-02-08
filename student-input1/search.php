<?php
	require 'conn.php';
	if(ISSET($_POST['search'])){
?>
	<table class="table table-bordered">
		<thead class="alert-info">
			<tr>
				<th>First Name</th>
			</tr>
		</thead>
		<tbody>
			<?php
				$keyword = $_POST['NameSearch'];
				$query = $conn->prepare("SELECT * FROM `users` WHERE `first_name` LIKE '%$keyword%' or `last_name` LIKE '%$keyword%'");
				$query->execute();
				while($row = $query->fetch()){
			?>
			<tr>
				<td><?php echo $row['first_name']?></td>
				<td><?php echo $row['last_name']?></td>
			</tr>
 
 
			<?php
				}
			?>
		</tbody>
	</table>
<?php		
	}
?>