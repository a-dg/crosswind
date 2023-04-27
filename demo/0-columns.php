<?
require __DIR__.'/../config.php';
include __DIR__.'/../incl/header.php';
?>


<div class="c c-full-width outer-padding demo-grid-setup">
	<h2>12-column grid</h2>
	
	<div class="demo-inner">
		<div class="g g-layout compact">
			<? foreach (range(1, 12) as $index): ?>
				<div class="g-item demo-guide"></div>
			<? endforeach; ?>
		</div>
	</div>
</div>


<?
include __DIR__.'/incl/footer.php';
