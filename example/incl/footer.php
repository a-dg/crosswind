<div class="breakpoint-detector">
	<!-- <div class="progress"></div> -->
	<?php
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
	<?php foreach ($breakpoints as $breakpoint): ?>
		<span class="<?= $breakpoint ?>"><?= $breakpoint ?></span>
	<?php endforeach; ?>
</div>


</body>
</html>
