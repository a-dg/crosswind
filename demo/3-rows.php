<?
require __DIR__.'/../config.php';
include __DIR__.'/../incl/header.php';
?>


<div class="c c-full-width outer-padding demo-rows">
	<h2>Rows</h2>
	
	<div class="demo-inner">
		<div class="g g-layout compact guide-grid">
			<? foreach (range(1, 5) as $index): ?>
				<div class="g-item demo-guide"></div>
			<? endforeach; ?>
		</div>
		
		<div class="g g-layout compact overlay">
			<div class="g-item"><span class="i-label"></span></div>
			<div class="g-item"><span class="i-label"></span></div>
			<div class="g-item"><span class="i-label"></span></div>
			<div class="g-item"><span class="i-label"></span></div>
			<div class="g-item"><span class="i-label"></span></div>
		</div>
	</div>
</div>


<?
include __DIR__.'/incl/footer.php';
