<?
require __DIR__.'/../config.php';
include __DIR__.'/../incl/header.php';
?>


<div class="c c-full-width outer-padding demo-into-gutter">
	<h2>Crossing into gutters</h2>
	
	<div class="demo-inner">
		<div class="g g-layout compact">
			<? foreach (range(1, 12) as $index): ?>
				<div class="g-item demo-guide"></div>
			<? endforeach; ?>
		</div>
		
		<div class="g g-layout overlay">
			<div class="g-item"><span class="i-label"></span></div>
			<div class="g-item"><span class="i-label"></span></div>
		</div>
	</div>
</div>

	
<div class="c c-full-width outer-padding demo-into-gutter">
	<h2>Border in gutter</h2>
	
	<div class="demo-inner">
		<div class="g g-layout compact">
			<? foreach (range(1, 12) as $index): ?>
				<div class="g-item demo-guide"></div>
			<? endforeach; ?>
		</div>
		
		<div class="g g-layout overlay divider">
			<div class="g-item"><span class="i-label"></span></div>
			<div class="g-item"><span class="i-label"></span></div>
		</div>
	</div>
</div>


<?
include __DIR__.'/incl/footer.php';
