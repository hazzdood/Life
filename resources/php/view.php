<?php

	function getGameView($location)
	{
		ob_start(); //captures the output
	?>

<div class="panel panel-info">
	<div style="height: 400px; background-image: url('<?php echo $location['image'] ?>'); background-size: cover;">&nbsp;</div>
	<div class="panel-heading text-center"><?php echo $location['description'] ?></div>
	<div class="panel-body text-center">
		<div>What do you want to do?</div>
		<?php foreach ($location['actions'] as $action => $destination): ?>
			<a class="btn btn-default" href="?location=<?php echo $location['name'] ?>&action=<?php echo $action ?>">
				<?php echo $action ?>
			</a>
		<?php endforeach?>
	</div>
</div>

<?php

		$output = ob_get_clean(); // pairs with ob_start to copy the output into a variable
		return $output;
	}

?>
