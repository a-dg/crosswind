<?
require __DIR__.'/config.php';
include __DIR__.'/incl/header.php';
?>


<div class="c c-full-width outer-padding">
	<h2>8/4 split layout with one outlier (max-width container)</h2>
	
	<div class="g g-layout">
		<? foreach (range(1, 12) as $index): ?>
			<div class="g-item g-guide"></div>
		<? endforeach; ?>
	</div>
	
	<div class="g g-layout col-8-4-custom">
		<div class="g-item"><span class="i-label">1</span></div>
		<div class="g-item"><span class="i-label">2</span></div>
		<div class="g-item"><span class="i-label">3</span></div>
		<div class="g-item"><span class="i-label">4</span></div>
		<div class="g-item outlier"><span class="i-label">outlier</span></div>
		<div class="g-item"><span class="i-label">5</span></div>
		<div class="g-item"><span class="i-label">6</span></div>
		<div class="g-item"><span class="i-label">7</span></div>
		<div class="g-item"><span class="i-label">8</span></div>
	</div>
</div>


<div class="c c-max-width outer-padding">
	<h2>Rows</h2>
	
	<div class="g g-layout silly">
		<? foreach (range(1, 5) as $index): ?>
			<div class="g-item"><span class="i-label"><?= $index ?></span></div>
		<? endforeach; ?>
	</div>
</div>


<div class="c c-max-width outer-padding">
	<h2>Layout with columns, rows, and order (max-width container)</h2>
	
	<div class="g g-layout crazy">
		<? foreach (range(1, 7) as $index): ?>
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
			<p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Nostrum ipsam voluptate quod. Odio expedita numquam voluptatem! Voluptatem laboriosam sequi distinctio, voluptas eaque et assumenda ab, nostrum, saepe voluptates quo autem? Est, in? Rerum consequatur totam veniam tempora dignissimos tempore odio earum in consequuntur dolores, ab quasi eum eligendi. Voluptatem nemo porro omnis!</p>
		</div>
	</div>
</div>


<div class="c c-full-width">
	<h2>Full-width container</h2>
</div>


<div class="c c-max-width">
	<h2>Container with max-width applied</h2>
</div>


<div class="c c-max-width outer-padding">
	<h2>Container with max-width and outer margins applied</h2>
</div>


<div class="c c-max-width outer-padding">
	<h2>3-up explicit grid (max-width container)</h2>
	
	<div class="g g-3">
		<? foreach(range(1, 10) as $index): ?>
			<div class="g-item"><span class="i-label"><?= $index ?></span></div>
		<? endforeach; ?>
	</div>
</div>


<div class="c c-max-width outer-padding">
	<h2>4-up explicit grid (max-width container)</h2>
	
	<div class="g g-4">
		<? foreach(range(1, 10) as $index): ?>
			<div class="g-item"><span class="i-label"><?= $index ?></span></div>
		<? endforeach; ?>
	</div>
</div>


<div class="c c-full-width outer-padding">
	<h2>Auto grid (full-width container)</h2>
	
	<div class="g g-auto">
		<? foreach(range(1, 10) as $index): ?>
			<div class="g-item"><span class="i-label"><?= $index ?></span></div>
		<? endforeach; ?>
	</div>
</div>


<div class="c c-max-width outer-padding">
	<h2>Auto grid (max-width container)</h2>
	
	<div class="g g-auto">
		<? foreach(range(1, 10) as $index): ?>
			<div class="g-item"><span class="i-label"><?= $index ?></span></div>
		<? endforeach; ?>
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
	<h2>Wire grid (max-width container)</h2>
	
	<div class="g g-wire g-6">
		<? foreach(range(1, 13) as $index): ?>
			<div class="g-item"><span class="i-label"><?= $index ?></span></div>
		<? endforeach; ?>
	</div>
</div>


<div class="c c-max-width outer-padding">
	<h2>8/4 split layout (max-width container)</h2>
	
	<div class="g g-layout">
		<? foreach (range(1, 12) as $index): ?>
			<div class="g-item g-guide"></div>
		<? endforeach; ?>
	</div>
	
	<div class="g g-layout col-8-4">
		<div class="g-item"><span class="i-label">1</span></div>
		<div class="g-item"><span class="i-label">2</span></div>
	</div>
</div>


<div class="c c-max-width outer-padding">
	<h2>8/4 split layout with hanging elements (max-width container)</h2>
	
	<div class="g g-layout col-8-4">
		<div class="g-item"><span class="i-label">Item</span></div>
		<div class="g-item hang-r hang-extended"><span class="i-label">Hanging item</span></div>
		<div class="g-item hang-l hang-full"><span class="i-label">Hanging item</span></div>
		<div class="g-item"><span class="i-label">Item</span></div>
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


<div class="c c-full-width">
	<h2>Clinging to edges (full-width container)</h2>
	<div class="bg">
		<div class="c c-full-width outer-padding">
			<div class="f">
				<div class="f-item"><span class="i-label">1</span></div>
				<div class="f-item"><span class="i-label">2</span></div>
			</div>
		</div>
	</div>
</div>


<div class="c c-full-width">
	<h2>Clinging to edges (max-width container)</h2>
	<div class="bg">
		<div class="c c-max-width outer-padding">
			<div class="f">
				<div class="f-item"><span class="i-label">1</span></div>
				<div class="f-item"><span class="i-label">2</span></div>
			</div>
		</div>
	</div>
</div>


<div class="c c-max-width outer-padding">
	<div class="g g-layout">
		<? foreach (range(1, 12) as $index): ?>
			<div class="g-item g-guide"></div>
		<? endforeach; ?>
	</div>
</div>


<?
include __DIR__.'/incl/footer.php';
