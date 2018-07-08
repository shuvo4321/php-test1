<?php
include "connect.php";

$id=$_GET['id'];
echo $id;

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
				<h1 class="text-center text-danger">Update Data</h1>
				<form action="data.php" class="well" method="post">
					<div class="form-group">
						<label for="name">Your Name</label>
						<input type="text" value="shuvo" id="name" class="form-control" name="name" placeholder="Your Name">
					</div>

					<div class="form-group">
						<label for="email">Your Email</label>
						<input type="email" value="shuvo" id="emailemailemail" class="form-control" name="email" placeholder="Your Email">
					</div>

					

					<div class="form-group">
						<label for="phone">Your Number</label>
						<input type="text" value="shuvo" id="phone" class="form-control" name="phone" placeholder="Your Number">
					</div>

					<div class="form-group">
						<select name="problem" class="form-control" id="">
							<option value="Jhor">Jhor</option>
							<option value="Matha Betha">Matha Betha</option>
						</select>
					</div>

                    <div class="form-group">

                    <label for="msg">Your Message</label>
					<textarea name="msg" id="msg" class="form-control" cols="30" placeholder="Your Message" rows="10">shuvo
					</textarea>

				    </div>
                     <div class="form-group">
					<input type="submit"  value="Update" class="btn btn-info">

                     </div>
				</form>
			</div>
		</div>
	</div>
</section>
</body>
</html>