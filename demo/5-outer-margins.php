<?
require __DIR__.'/../config.php';
include __DIR__.'/../incl/header.php';
?>


<div class="demo-outer-margins">

	<div class="c c-full-width empty outer-padding">
		<h2>Full-width background</h2>
		<div class="bg"></div>
	</div>

	<div class="c c-full-width empty">
		<h2>Full-width background without outer margins</h2>
		<div class="bg"></div>
	</div>

	<div class="c c-full-width">
		<h2>Full-width background, full-width content</h2>
		<div class="bg">
			<div class="c c-full-width outer-padding">
				<div class="g g-layout g-basic">
					<div class="g-item"><span class="i-label"></span></div>
					<div class="g-item"><span class="i-label"></span></div>
					<div class="g-item"><span class="i-label"></span></div>
				</div>
			</div>
		</div>
	</div>

	<div class="c c-full-width">
		<h2>Full-width background, max-width content</h2>
		<div class="bg">
			<div class="c c-max-width outer-padding">
				<div class="g g-layout g-basic">
					<div class="g-item"><span class="i-label"></span></div>
					<div class="g-item"><span class="i-label"></span></div>
					<div class="g-item"><span class="i-label"></span></div>
				</div>
			</div>
		</div>
	</div>
	
	
	<div class="c c-max-width outer-padding">
		<div class="g g-layout">
			<? foreach (range(1, 12) as $index): ?>
				<div class="g-item demo-guide"></div>
			<? endforeach; ?>
		</div>
	</div>

</div>


<div class="c c-full-width outer-padding demo-outer-margins gutter-outer-fixed">
	
	<h2>Outer margins</h2>
	<div class="g g-layout gutter-fixed">
		<? foreach (range(1, 12) as $index): ?>
			<div class="g-item demo-guide"></div>
		<? endforeach; ?>
	</div>
	
</div>


<?
include __DIR__.'/incl/footer.php';
