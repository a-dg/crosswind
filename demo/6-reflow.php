<?
require __DIR__.'/../config.php';
include __DIR__.'/../incl/header.php';
?>

	
<div class="c c-full-width outer-padding demo-flex">
	<h2>Arbitrary widths</h2>
	
	<div class="f">
		<? foreach(range(1, 25) as $index): ?>
			<div class="f-item"><span class="i-label"></span></div>
		<? endforeach; ?>
	</div>
</div>


<div class="demo-reflow">
	
	<div class="c c-full-width outer-padding">
		<h2>Odd-item grid</h2>
		
		<div class="g g-11">
			<? foreach(range(1, 15) as $index): ?>
				<div class="g-item"><span class="i-label"><?= $index ?></span></div>
			<? endforeach; ?>
		</div>
		
		<div class="g g-layout">
			<? foreach (range(1, 12) as $index): ?>
				<div class="g-item demo-guide"></div>
			<? endforeach; ?>
		</div>

	</div>


	<div class="c c-full-width outer-padding">
		<h2>Reflowing grid, full-width container</h2>
		
		<div class="g g-auto">
			<? foreach(range(1, 10) as $index): ?>
				<div class="g-item"><span class="i-label"><?= $index ?></span></div>
			<? endforeach; ?>
		</div>
	</div>
	
	<div class="c c-max-width outer-padding">
		<h2>Reflowing grid, max-width container</h2>
		
		<div class="g g-auto">
			<? foreach(range(1, 10) as $index): ?>
				<div class="g-item"><span class="i-label"><?= $index ?></span></div>
			<? endforeach; ?>
		</div>
	</div>
	
</div>


<?
include __DIR__.'/incl/footer.php';
