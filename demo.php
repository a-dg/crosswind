<?
require __DIR__.'/config.php';
include __DIR__.'/incl/header.php';
?>



<div class="c c-full-width outer-padding demo-grid-setup">
	<h2>12-column grid</h2>
	
	<div class="demo-inner">
		<div class="g g-layout compact">
			<? foreach (range(1, 12) as $index): ?>
				<div class="g-item demo-guide"></div>
			<? endforeach; ?>
		</div>
		
		<div class="g g-layout overlay">
			<div class="g-item"><span class="i-label"></span></div>
		</div>
	</div>
</div>


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

	
	
	
<div class="c c-max-width outer-padding demo-hang">
	<h2>Extending beyond max-width container</h2>
	
	<div class="g g-layout col-8-4">
		<div class="g-item"><span class="i-label"></span></div>
		<div class="g-item hang-r hang-extended"><span class="i-label"></span></div>
		<div class="g-item hang-l hang-full"><span class="i-label"></span></div>
		<div class="g-item"><span class="i-label"></span></div>
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





<!-- ============================================================= -->


<div class="c c-max-width outer-padding">
	<div class="g g-layout">
		<? foreach (range(1, 12) as $index): ?>
			<div class="g-item g-guide"></div>
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
