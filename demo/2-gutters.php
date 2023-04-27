<?
require __DIR__.'/../config.php';
include __DIR__.'/../incl/header.php';
?>


<div class="c c-full-width outer-padding demo-columns-gutters">
	
	<h2>Fixed gutter width</h2>
	<div class="g g-layout gutter-fixed">
		<? foreach (range(1, 12) as $index): ?>
			<div class="g-item demo-guide"></div>
		<? endforeach; ?>
	</div>
	
	<h2>Stepped gutter width</h2>
	<div class="g g-layout gutter-stepped">
		<? foreach (range(1, 12) as $index): ?>
			<div class="g-item demo-guide"></div>
		<? endforeach; ?>
	</div>
	
	<h2>Flexible gutter width</h2>
	<div class="g g-layout gutter-flexible">
		<? foreach (range(1, 12) as $index): ?>
			<div class="g-item demo-guide"></div>
		<? endforeach; ?>
	</div>
	
</div>


<div class="c c-max-width stepped-max-width outer-padding demo-columns-gutters">
	<h2>Stepped column width</h2>
	<div class="g g-layout gutter-fixed">
		<? foreach (range(1, 12) as $index): ?>
			<div class="g-item demo-guide"></div>
		<? endforeach; ?>
	</div>
</div>


<?
include __DIR__.'/incl/footer.php';
