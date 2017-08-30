<?php

	function renderLayout($areas)
	{

	?>

<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css"> <!-- import bootstrap css -->
</head>
<body>

	<nav class="navbar-inverse navbar-static-top">
		<div class="container">
			<div class="navbar-header">
				<a class="navbar-brand" href="#"><i class="glyphicon glyphicon-thumbs-up"></i> Dork III</a>
			</div>
		</div>
	</nav>

	<div class="container target">
		<div class="row">
			<div class="col-sm-3"></div>
			<div class="col-6-sm" contenteditable="false">
				<?php echo $areas['content'] ?>
			</div>
			<div class="col-sm-3"></div>
		</div>
	</div>

	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script> <!-- import jquery -->
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script> <!-- import bootstrap js -->
</body>
</html>


<?php

	}

?>
