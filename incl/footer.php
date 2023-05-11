<div class="breakpoint-detector">
	<!-- <div class="progress"></div> -->
	<?
	$breakpoints = [
		'zo',
		'tn',
		'sm',
		'md',
		'av',
		'ch',
		'lg',
		'xl',
		'yl',
	];
	?>
	<? foreach ($breakpoints as $breakpoint): ?>
		<span class="<?= $breakpoint ?>"><?= $breakpoint ?></span>
	<? endforeach; ?>
</div>


</body>
</html>
