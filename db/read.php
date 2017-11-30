<?php

/**
 * Function to query information based on 
 * a parameter: in this case, School.
 *
 */

if (isset($_POST['submit'])) 
{
	
	try 
	{	
		require "config.php";
		require "common.php";

		$connection = new PDO($dsn, $username, $password, $options);

		$sql = "SELECT * 
						FROM Customer
						WHERE School_name = :School_name";

		$school = $_POST['School_name'];

		$statement = $connection->prepare($sql);
		$statement->bindParam(':School_name', $school, PDO::PARAM_STR);
		$statement->execute();

		$result = $statement->fetchAll();
	}
	
	catch(PDOException $error) 
	{
		echo $sql . "<br>" . $error->getMessage();
	}
}
?>
<?php require "templates/header.php"; ?>
		
<?php  
if (isset($_POST['submit'])) 
{
	if ($result && $statement->rowCount() > 0) 
	{ ?>
		<h2>Results</h2>

		<table>
			<thead>
				<tr>
					<th>#</th>
					<th>First Name</th>
					<th>Last Name</th>
					<th>Email Address</th>
					<th>Age</th>
					<th>School Name</th>
					<th>Date</th>
				</tr>
			</thead>
			<tbody>
	<?php 
		foreach ($result as $row) 
		{ ?>
			<tr>
				<td><?php echo escape($row["id"]); ?></td>
				<td><?php echo escape($row["firstname"]); ?></td>
				<td><?php echo escape($row["lastname"]); ?></td>
				<td><?php echo escape($row["email"]); ?></td>
				<td><?php echo escape($row["age"]); ?></td>
				<td><?php echo escape($row["School_name"]); ?></td>
				<td><?php echo escape($row["date"]); ?> </td>
			</tr>
		<?php 
		} ?>
		</tbody>
	</table>
	<?php 
	} 
	else 
	{ ?>
		<blockquote>No results found for <?php echo escape($_POST['School_name']); ?>.</blockquote>
	<?php
	} 
}?> 

<h2>Find user based on School</h2>

<form method="post">
	<label for="School_name">School</label>
	<input type="text" id="School_name" name="School">
	<input type="submit" name="submit" value="View Results">
</form>

<a href="index.php">Back to home</a>

<?php require "templates/footer.php"; ?>
