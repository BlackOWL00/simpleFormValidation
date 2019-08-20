<?php
session_start();
$name = $_SESSION['name'];
$email = $_SESSION['email'];
$username = $_SESSION['username'];
$password = $_SESSION['password'];
$comment = $_SESSION['comment'];
$gender = $_SESSION['gender'];
?>

<!DOCTYPE html>
<html>
<head>
	<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
	<title>Registered!</title>
	<style type="text/css">
	.jumbotron{
		padding: 50px;
	}
</style>
</head>
<body>
<div class = "jumbotron jumbotron-fluid">
	<h1>Welcome <?php echo $username?>!</h1>
	<h5>Name: <?php echo $name?></h5>
	<h5>Email: <?php echo $email?></h5>
	<h5>Gender: <?php echo $gender?></h5>
	<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">
		Click Me!
	</button><br>
	<a href="index.php">Go back to Index</a>
</div>
<div class="modal fade in" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
	<div class="modal-dialog" role="document">
		<div class="modal-content">
			<div class="modal-header">
				<h5 class="modal-title" id="exampleModalLabel">Congratulations!</h5>
				<button type="button" class="close" data-dismiss="modal" aria-label="Close">
					<span aria-hidden="true">&times;</span>
				</button>
			</div>
			<div class="modal-body">
				<h3>You have successfully registered</h3>
			</div>
			<div class="modal-footer">
				<button type="button" class="btn btn-primary" data-dismiss="modal">Close</button>
			</div>
		</div>
	</div>
</div>
<script src = 'confetti/confetti.min.js'>
	startConfetti();
</script>
</body>
</html>