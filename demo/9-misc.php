<?
require __DIR__.'/../config.php';
include __DIR__.'/../incl/header.php';
?>


<div class="c c-max-width outer-padding">
	<h2>Layout with columns, rows, and order (max-width container)</h2>
	
	<div class="g g-layout crazy">
		<? foreach (range(1, 7) as $index): ?>
			<div class="g-item"><span class="i-label"><?= $index ?></span></div>
		<? endforeach; ?>
	</div>
</div>


<div class="c c-full-width outer-padding">
	<h2>4-item grid (full-width container)</h2>
	
	<div class="g g-4">
		<? foreach(range(1, 10) as $index): ?>
			<div class="g-item"><span class="i-label"><?= $index ?></span></div>
		<? endforeach; ?>
	</div>
</div>


<div class="c c-max-width outer-padding">
	<h2>4-item grid (max-width container)</h2>
	
	<div class="g g-4">
		<? foreach(range(1, 10) as $index): ?>
			<div class="g-item"><span class="i-label"><?= $index ?></span></div>
		<? endforeach; ?>
	</div>
</div>


<div class="c c-max-width outer-padding">
	<h2>Floating item outside of grid</h2>
	<div class="g g-layout col-6">
		<div class="g-item">
			<div class="g-float">
				<span class="i-label">Float</span>
			</div>
			<p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Nostrum ipsam voluptate quod. Odio expedita numquam voluptatem! Voluptatem labo riosam sequi distinctio, volu eaque et assumenda ab, nostrum, saepe voluptates quo autem? Est, in? Rerum consequatur totam veniam tempora dignissimos tempore odio earum in consequuntur dolores, ab quasi eum eligendi. Voluptatem nemo porro omnis!</p>
		</div>
	</div>
</div>


<div class="c c-full-width">
	<h2>Flush grid (full-width container)</h2>
	
	<div class="g-flush g-auto">
		<? foreach(range(1, 30) as $index): ?>
			<div class="g-item"><span class="i-label"><?= $index ?></span></div>
		<? endforeach; ?>
	</div>
</div>


<div class="c c-max-width outer-padding">
	<h2>Flush grid (max-width container)</h2>
	
	<div class="g-flush g-4">
		<? foreach(range(1, 30) as $index): ?>
			<div class="g-item"><span class="i-label"><?= $index ?></span></div>
		<? endforeach; ?>
	</div>
</div>


<div class="c c-max-width outer-padding">
	<h2>Centered 6-column item</h2>
	<div class="g g-layout col-6">
		<div class="g-item"><span class="i-label">6-column</span></div>
	</div>
	
	<div class="g g-layout">
		<? foreach (range(1, 12) as $index): ?>
			<div class="g-item g-guide"></div>
		<? endforeach; ?>
	</div>
</div>


<?
include __DIR__.'/incl/footer.php';
