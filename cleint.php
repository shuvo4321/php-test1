<?php
include "connect.php";

$tablename="SELECT * FROM list"; 
$queryconnect = mysqli_query($connection, $tablename);


?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>PHP Test</title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
</head>
<body>
<section>
	<div class="container">
		<div class="row">
			<div class="col-md-12 col-md-offsset-">

				<table class="table table-condensed">
					<tr>
						<th>name</th>
						<th>email</th>
						<th>phone</th>
						<th>problem</th>
					    <th>Message</th>
					    <th>Action</th>
				    </tr>
                         <?php while($row= mysqli_fetch_assoc($queryconnect)){?>
                    <tr>
						<td><?php echo $row['id'];?></td>
						<td><?php echo $row['name'];?></td>
                        <td><?php echo $row['email'];?></td>
                        <td><?php echo $row['phone'];?></td>
                        <td><?php echo $row['problem'];?></td>
                        <td><?php echo $row['msg'];?></td>
                        <td><a href="update.php?id=<?php echo $row ['id'];?>" class="btn btn-info">Edit</a></td>
				   </tr>
                         <?php }?>
				</table>
	
                        </div>
		</div>
	</div>
</section>
</body>
</html>