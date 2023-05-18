<?
require __DIR__.'/config.php';
include __DIR__.'/incl/header.php';
?>


<section>

	<h1>Hanging</h1>
	
	<div class="c c-max c-pad">
		<h2>.hang-* classes on nested child elements</h2>
		
		<div class="g g-layout col-8-4">
			<div class="i"><span class="i-label">Item</span></div>
			<div class="i">
				<span class="i-label hang-r v2 hang-extended">Hanging item</span>
			</div>
			<div class="i hang-l v1 hang-full">
				<div class="hang-content unhang">
					<p>Content within hung element</p>
				</div>
				<!-- <span class="i-label hang-l v2 hang-full" style="height: auto">Hanging item</span> -->
				<div>
					<p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Aspernatur odio impedit excepturi molestiae nesciunt amet sint doloribus nisi quidem. Sed possimus fugiat nobis assumenda, suscipit facere dolor. Harum, consectetur ea.</p>
				</div>
			</div>
			<div class="i"><span class="i-label">Item</span></div>
		</div>
	</div>
	
	
	<div class="c c-max c-pad">
		<h2>Positive margins on .unhang to undo hanging (.i is hung)</h2>
		
		<div class="g g-layout col-8-4">
			<div class="i"><span class="i-label">Item</span></div>
			<div class="i hang-r v1 hang-extended"><span class="i-label">Hanging item</span></div>
			<div class="i hang-l v1 hang-full">
				<span class="i-label" style="height: auto">Hanging item</span>
				<div class="unhang">
					<p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Aspernatur odio impedit excepturi molestiae nesciunt amet sint doloribus nisi quidem. Sed possimus fugiat nobis assumenda, suscipit facere dolor. Harum, consectetur ea.</p>
				</div>
			</div>
			<div class="i"><span class="i-label">Item</span></div>
		</div>
	</div>
	
	
	<div class="c c-full c-pad">
		<h2>Hanging elements in full-width container, where .hang-extended and .hang-full have no effect</h2>
		
		<div class="g g-layout col-8-4">
			<div class="i"><span class="i-label">Item</span></div>
			<div class="i hang-r v1 hang-extended">
				<span class="i-label">Hanging item</span>
				<div class="unhang">
					<p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Aspernatur odio impedit excepturi molestiae nesciunt amet sint doloribus nisi quidem. Sed possimus fugiat nobis assumenda, suscipit facere dolor. Harum, consectetur ea.</p>
				</div>
			</div>
			<div class="i hang-l v1 hang-full">
				<span class="i-label">Hanging item</span>
				<div class="unhang">
					<p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Aspernatur odio impedit excepturi molestiae nesciunt amet sint doloribus nisi quidem. Sed possimus fugiat nobis assumenda, suscipit facere dolor. Harum, consectetur ea.</p>
				</div>
			</div>
			<div class="i"><span class="i-label">Item</span></div>
		</div>
	</div>
	
	
	<div class="c c-max c-pad">
		<h2>Narrower than 12 columns, v1</h2>
		
		<div class="g g-layout">
			<? foreach (range(1, 12) as $index): ?>
				<div class="i g-guide"></div>
			<? endforeach; ?>
		</div>
		
		<div class="g g-layout col-6">
			<div class="i"><span class="i-label">Item</span></div>
			<div class="i nine-in-six">
				<span class="i-label hang-r v1 hang-full">Hanging item</span>
				<div class="unhang six-in-nine">
					<p>Set custom widths to break out of the grid item, then hang .i-label to reach the edge of the viewport, but then anything inside of .i-label will not be aligned with the grid. ... Hey wait a minute, this seems to work.</p>
				</div>
			</div>
			<div class="i nine-in-six">
				<span class="i-label">Hanging item</span>
				<div class="unhang six-in-nine">
					<p>Custom widths break out of the grid item, but cannot go outside of the grid without throwing off the content width.</p>
				</div>
			</div>
			<div class="i hang-r v1 hang-extended">
				<span class="i-label">Hanging item ext</span>
				<div class="unhang six-in-nine in-ext">
					<p>Hang the entire container, the .i-label can go out to the edge, but what's inside of it will not line up with the grid, unless you account for the outer gutter + columns and gutters. ... This is now pretty good but doesn't yet account for the extra width from hanging. However, this one is actually correct because its container is 9 wide.</p>
				</div>
			</div>
			<div class="i float-instead-of-hang">
				<div class="g-float">
					<span class="i-label">RF</span>
				</div>
				<div>
					<p>Float instead of hang, because the math can use CSS variables</p>
				</div>
			</div>
			<div class="i hang-l v1 hang-full">
				<span class="i-label">
					Hanging item
				</span>
				<div class="unhang">
					<p>If .i-label had no padding, you could put this inside of it and everything would line up.</p>
				</div>
			</div>
			<div class="i"><span class="i-label">Item</span></div>
		</div>
		
		<div class="g g-layout">
			<? foreach (range(1, 12) as $index): ?>
				<div class="i g-guide"></div>
			<? endforeach; ?>
		</div>

	</div>
	
	
	<div class="c c-max c-pad">
		<h2>Narrower than 12 columns, v2</h2>
		
		<div class="g g-layout">
			<? foreach (range(1, 12) as $index): ?>
				<div class="i g-guide"></div>
			<? endforeach; ?>
		</div>
		
		<div class="g g-layout col-6">
			<div class="i"><span class="i-label">Item</span></div>
			<div class="i">
				<span class="i-label nine-in-six hang-r v2 hang-full">Hanging 9/6 item</span>
				<div class="unhang">
					<p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Aspernatur odio impedit excepturi molestiae nesciunt amet sint doloribus nisi quidem. Sed possimus fugiat nobis assumenda, suscipit facere dolor. Harum, consectetur ea.</p>
				</div>
			</div>
			<div class="i">
				<span class="i-label">Hanging item</span>
				<div class="unhang">
					<p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Aspernatur odio impedit excepturi molestiae nesciunt amet sint doloribus nisi quidem. Sed possimus fugiat nobis assumenda, suscipit facere dolor. Harum, consectetur ea.</p>
				</div>
			</div>
			<div class="i"><span class="i-label">Item</span></div>
		</div>
	</div>
	
	
</section>



<section>

	<h1>Outlier</h1>
	

<div class="c c-max c-pad">
	<h2>8/4 split layout with one outlier (max-width container)</h2>
	
	<div class="g g-layout">
		<? foreach (range(1, 12) as $index): ?>
			<div class="i g-guide"></div>
		<? endforeach; ?>
	</div>
	
	<div class="g g-layout col-8-4-custom">
		<div class="i"><span class="i-label">1</span></div>
		<div class="i hang-r v1 hang-full"><span class="i-label">2</span></div>
		<div class="i"><span class="i-label">3</span></div>
		<div class="i"><span class="i-label">4</span></div>
		<div class="i outlier"><span class="i-label">outlier</span></div>
		<div class="i hang-l v2 hang-full"><span class="i-label">5</span></div>
		<div class="i"><span class="i-label">6</span></div>
		<div class="i"><span class="i-label">7</span></div>
		<div class="i"><span class="i-label">8</span></div>
	</div>
</div>


	
</section>



<section>

	<h1>Crazy layouts</h1>
	


<div class="c c-max c-pad">
	<h2>Rows</h2>
	
	<div class="g g-layout silly">
		<? foreach (range(1, 5) as $index): ?>
			<div class="i"><span class="i-label"><?= $index ?></span></div>
		<? endforeach; ?>
	</div>
</div>


<div class="c c-max c-pad">
	<h2>Layout with columns, rows, and order (max-width container)</h2>
	
	<div class="g g-layout crazy">
		<? foreach (range(1, 7) as $index): ?>
			<div class="i"><span class="i-label"><?= $index ?></span></div>
		<? endforeach; ?>
	</div>
</div>


	
</section>



<section>

	<h1>Floating</h1>
	


<div class="c c-max c-pad">
	<h2>Floating item outside of grid</h2>
	
	<div class="g g-layout">
		<? foreach (range(1, 12) as $index): ?>
			<div class="i g-guide"></div>
		<? endforeach; ?>
	</div>
	
	<div class="g g-layout col-f">
		<div class="i">
			<div class="g-float">
				<span class="i-label">Float</span>
			</div>
			<p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Nostrum ipsam voluptate quod. Odio expedita numquam voluptatem. Voluptatem laboriosam sequi distinctio, voluptas eaque et assumenda ab, nostrum, saepe voluptates quo autem? Est, in? Rerum consequatur totam veniam tempora dignissimos tempore odio earum in consequuntur dolores, ab quasi eum eligendi. Voluptatem nemo porro omnis.</p>
		</div>
	</div>
	
	<div class="g g-layout col-6">
		<div class="i">
			<div class="g-float">
				<span class="i-label">RF</span>
			</div>
			<p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Nostrum ipsam voluptate quod. Odio expedita numquam voluptatem. Voluptatem laboriosam sequi distinctio, voluptas eaque et assumenda ab, nostrum, saepe voluptates quo autem? Est, in? Rerum consequatur totam veniam tempora dignissimos tempore odio earum in consequuntur dolores, ab quasi eum eligendi. Voluptatem nemo porro omnis.</p>
		</div>
	</div>
	
	<div class="g g-layout">
		<? foreach (range(1, 12) as $index): ?>
			<div class="i g-guide"></div>
		<? endforeach; ?>
	</div>
	
	<div class="g g-layout col-4-left">
		<div class="i">
			<div class="g-float">
				<span class="i-label">Float</span>
			</div>
			<p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Nostrum ipsam voluptate quod. Odio expedita numquam voluptatem. Voluptatem laboriosam sequi distinctio, voluptas eaque et assumenda ab, nostrum, saepe voluptates quo autem? Est, in? Rerum consequatur totam veniam tempora dignissimos tempore odio earum in consequuntur dolores, ab quasi eum eligendi. Voluptatem nemo porro omnis.</p>
		</div>
	</div>
</div>



	
</section>



<section>

	<h1>Grids of equally-sized items</h1>
	


<div class="c c-max c-pad">
	<h2>3-up explicit grid (max-width container)</h2>
	
	<div class="g g-3">
		<? foreach(range(1, 10) as $index): ?>
			<div class="i"><span class="i-label"><?= $index ?></span></div>
		<? endforeach; ?>
	</div>
</div>


<div class="c c-max c-pad">
	<h2>4-up explicit grid (max-width container)</h2>
	
	<div class="g g-4">
		<? foreach(range(1, 10) as $index): ?>
			<div class="i"><span class="i-label"><?= $index ?></span></div>
		<? endforeach; ?>
	</div>
</div>


<div class="c c-full c-pad">
	<h2>Auto grid (full-width container)</h2>
	
	<div class="g g-auto">
		<? foreach(range(1, 10) as $index): ?>
			<div class="i"><span class="i-label"><?= $index ?></span></div>
		<? endforeach; ?>
	</div>
</div>


<div class="c c-max c-pad">
	<h2>Auto grid (max-width container)</h2>
	
	<div class="g g-auto">
		<? foreach(range(1, 10) as $index): ?>
			<div class="i"><span class="i-label"><?= $index ?></span></div>
		<? endforeach; ?>
	</div>
</div>


<div class="c c-full">
	<h2>Flush grid (full-width container)</h2>
	
	<div class="g-flush g-auto">
		<? foreach(range(1, 30) as $index): ?>
			<div class="i"><span class="i-label"><?= $index ?></span></div>
		<? endforeach; ?>
	</div>
</div>


<div class="c c-max c-pad">
	<h2>Flush grid (max-width container)</h2>
	
	<div class="g-flush g-4">
		<? foreach(range(1, 30) as $index): ?>
			<div class="i"><span class="i-label"><?= $index ?></span></div>
		<? endforeach; ?>
	</div>
</div>


<div class="c c-max c-pad">
	<h2>Wire grid (max-width container)</h2>
	
	<div class="g g-wire g-6">
		<? foreach(range(1, 13) as $index): ?>
			<div class="i"><span class="i-label"><?= $index ?></span></div>
		<? endforeach; ?>
	</div>
</div>

<div class="c c-full c-pad">
	<h2>Wire grid (full-width container)</h2>
	
	<div class="g g-wire g-6">
		<? foreach(range(1, 13) as $index): ?>
			<div class="i"><span class="i-label"><?= $index ?></span></div>
		<? endforeach; ?>
	</div>
</div>


	
</section>



<section>

	<h1>Grid item width and offset</h1>
	


<div class="c c-max c-pad">
	<h2>6/2/4 layout with offset (max-width container)</h2>
	
	<div class="g g-layout">
		<? foreach (range(1, 12) as $index): ?>
			<div class="i g-guide"></div>
		<? endforeach; ?>
	</div>
	
	<div class="g g-layout col-6-2-4">
		<div class="i"><span class="i-label">1</span></div>
		<div class="i"><span class="i-label">2</span></div>
		<div class="i"><span class="i-label">3</span></div>
	</div>
</div>


<div class="c c-max c-pad">
	<h2>8/4 split layout (max-width container)</h2>
	
	<div class="g g-layout">
		<? foreach (range(1, 12) as $index): ?>
			<div class="i g-guide"></div>
		<? endforeach; ?>
	</div>
	
	<div class="g g-layout col-8-4">
		<div class="i"><span class="i-label">1</span></div>
		<div class="i"><span class="i-label">2</span></div>
	</div>
</div>


<div class="c c-max c-pad">
	<h2>Centered 6-column item</h2>
	<div class="g g-layout col-6">
		<div class="i"><span class="i-label">6-column</span></div>
	</div>
	
	<div class="g g-layout">
		<? foreach (range(1, 12) as $index): ?>
			<div class="i g-guide"></div>
		<? endforeach; ?>
	</div>
</div>



	
</section>



<section>

	<h1>Flex</h1>
	


<div class="c c-full">
	<h2>Clinging to edges (full-width container)</h2>
	<div class="bg">
		<div class="c c-full c-pad">
			<div class="f">
				<div class="f-item"><span class="i-label">1</span></div>
				<div class="f-item"><span class="i-label">2</span></div>
			</div>
		</div>
	</div>
</div>


<div class="c c-full">
	<h2>Clinging to edges (max-width container)</h2>
	<div class="bg">
		<div class="c c-max c-pad">
			<div class="f">
				<div class="f-item"><span class="i-label">1</span></div>
				<div class="f-item"><span class="i-label">2</span></div>
			</div>
		</div>
	</div>
</div>



	
</section>


<div class="c c-max c-pad">
	<div class="g g-layout">
		<? foreach (range(1, 12) as $index): ?>
			<div class="i g-guide"></div>
		<? endforeach; ?>
	</div>
</div>


<?
include __DIR__.'/incl/footer.php';
