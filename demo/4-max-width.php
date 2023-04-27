<?
require __DIR__.'/../config.php';
include __DIR__.'/../incl/header.php';
?>


<div class="c c-full-width outer-padding demo-max-width">
	<h2>Full-width container</h2>
	
	<div class="demo-inner">
		<div class="g g-layout">
			<? foreach (range(1, 12) as $index): ?>
				<div class="g-item demo-guide"></div>
			<? endforeach; ?>
		</div>
	</div>
</div>


<div class="c c-max-width outer-padding demo-max-width">
	<h2>Max-width container</h2>
	
	<div class="demo-inner">
		<div class="g g-layout">
			<? foreach (range(1, 12) as $index): ?>
				<div class="g-item demo-guide"></div>
			<? endforeach; ?>
		</div>
	</div>
</div>


<div class="c c-max-width stepped-max-width outer-padding demo-columns-gutters">
	<h2>Stepped max-width container</h2>
	<div class="g g-layout gutter-fixed">
		<? foreach (range(1, 12) as $index): ?>
			<div class="g-item demo-guide"></div>
		<? endforeach; ?>
	</div>
</div>


<?
include __DIR__.'/incl/footer.php';
