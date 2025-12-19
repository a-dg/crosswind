<?php
require __DIR__.'/config.php';
include __DIR__.'/incl/header.php';
?>


<div class="breakpoint-scale">
	<?php
	$breakpoints = [
		'zo',
		'tn',
		'sm',
		'md',
		'av',
		'ch',
		'lg',
		'xl',
		'yl',
	];
	?>
	<?php foreach ($breakpoints as $breakpoint): ?>
		<div class="<?= $breakpoint ?>"><?= $breakpoint ?></div>
	<?php endforeach; ?>
</div>

	<div class="r-grid">
		<div>
			<span>1</span>
			<div class="=o-large =ob-small">large, bottom small</div>
			<div class="=o-large">large</div>
			<hr>
		</div>
		<div>
			<span>2</span>
			<div class="=o-large">large</div>
			<div class="=o-large">large</div>
			<hr>
		</div>
		<div>
			<span>3</span>
			<div class="=o-large">large</div>
			<div class="=o-medium">medium</div>
			<hr>
		</div>
		<div>
			<span>4</span>
			<div class="=o-large">large</div>
			<div class="=o-small">small</div>
			<hr>
		</div>
		<div>
			<span>5</span>
			<div class="=o-medium">medium</div>
			<div class="=o-large">large</div>
			<hr>
		</div>
		<div>
			<span>6</span>
			<div class="=o-medium">medium</div>
			<div class="=o-medium">medium</div>
			<hr>
		</div>
		<div>
			<span>7</span>
			<div class="=o-medium">medium</div>
			<div class="=o-small">small</div>
			<hr>
		</div>
		<div>
			<span>8</span>
			<div class="=o-small">small</div>
			<div class="=o-large">large</div>
			<hr>
		</div>
		<div>
			<span>9</span>
			<div class="=o-small">small</div>
			<div class="=o-medium">medium</div>
			<hr>
		</div>
		<div>
			<span>10</span>
			<div class="=o-small">small</div>
			<div class="=o-small">small</div>
			<hr>
		</div>
		<div>
			<span>11</span>
			<div class="=o-large =o-reduce-small">large, reduce small</div>
			<div class="=o-large =o-reduce-small">large, reduce small</div>
			<hr>
		</div>
		<div>
			<span>12</span>
			<div class="=o-large =o-reduce-small">large, reduce small</div>
			<div class="=o-large =o-reduce-medium">large, reduce medium</div>
			<hr>
		</div>
		<div>
			<span>13</span>
			<div class="=o-large =o-reduce-small">large, reduce small</div>
			<div class="=o-large">large</div>
			<hr>
		</div>
		<div>
			<span>14</span>
			<div class="=o-large">large</div>
			<div class="=o-large =o-reduce-small">large, reduce small</div>
			<hr>
		</div>
		<div>
			<span>15</span>
			<div class="=o-large =o-reduce-small">large, reduce small</div>
			<div class="=o-small =o-reduce-small">small, reduce small</div>
			<hr>
		</div>
		<div>
			<span>16</span>
			<div class="=o-small =o-reduce-small">small, reduce small</div>
			<div class="=o-large =o-reduce-small">large, reduce small</div>
			<hr>
		</div>
		<div>
			<span>17</span>
			<div class="=o-small =o-reduce-bork">small, reduce (invalid value)</div>
			<div class="=o-large =o-reduce-small">large, reduce small</div>
			<hr>
		</div>
		<div>
			<span>18</span>
			<div class="=o-small =o-reduce">small, reduce (nothing)</div>
			<div class="=o-large =o-reduce-small">large, reduce small</div>
			<hr>
		</div>
		<div>
			<span>19</span>
			<div class="=o-small">small</div>
			<div class="=o-large =o-reduce-small">large, reduce small</div>
			<hr>
		</div>
	</div>
	

<section>
	
	<h1>Hanging</h1>
	
	<div class="c c-max c-pad">
		<h2>.hang-* classes on nested child elements</h2>
		
		<div class="g g-layout col-8-4">
			<div><span class="i-label">Item</span></div>
			<div>
				<span class="i-label hang-right v2 hang-extended">Hanging item v2</span>
			</div>
			<div class="hang-left v1 hang-full" style="outline: 3px dotted #ccc;">
				<div class="hang-content unhang">
					<p>Content within v1 hung element</p>
				</div>
				<!-- <span class="i-label hang-left v2 hang-full" style="height: auto">Hanging item v2</span> -->
				<div>
					<p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Aspernatur odio impedit excepturi molestiae nesciunt amet sint doloribus nisi quidem. Sed possimus fugiat nobis assumenda, suscipit facere dolor. Harum, consectetur ea.</p>
				</div>
			</div>
			<div class="av:tw-col-span-3"><span class="i-label">Item</span></div>
		</div>
	</div>
	
	
	<div class="c c-max c-pad">
		<h2>Positive margins on .unhang to undo hanging (grid item is hung)</h2>
		
		<div class="g g-layout col-8-4">
			<div><span class="i-label">Item</span></div>
			<div class="hang-right v1 hang-extended"><span class="i-label">Hanging item v1</span></div>
			<div class="hang-left v1 hang-full">
				<span class="i-label" style="height: auto">Hanging item v1</span>
				<div class="unhang">
					<p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Aspernatur odio impedit excepturi molestiae nesciunt amet sint doloribus nisi quidem. Sed possimus fugiat nobis assumenda, suscipit facere dolor. Harum, consectetur ea.</p>
				</div>
			</div>
			<div><span class="i-label">Item</span></div>
		</div>
	</div>
	
	
	<div class="c c-full c-pad">
		<h2>Hanging elements in full-width container, where .hang-extended and .hang-full have no effect</h2>
		
		<div class="g g-layout col-8-4">
			<div><span class="i-label">Item</span></div>
			<div class="hang-right v1 hang-extended">
				<span class="i-label">Hanging item v1</span>
				<div class="unhang">
					<p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Aspernatur odio impedit excepturi molestiae nesciunt amet sint doloribus nisi quidem. Sed possimus fugiat nobis assumenda, suscipit facere dolor. Harum, consectetur ea.</p>
				</div>
			</div>
			<div class="hang-left v1 hang-full">
				<span class="i-label">Hanging item v1</span>
				<div class="unhang">
					<p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Aspernatur odio impedit excepturi molestiae nesciunt amet sint doloribus nisi quidem. Sed possimus fugiat nobis assumenda, suscipit facere dolor. Harum, consectetur ea.</p>
				</div>
			</div>
			<div><span class="i-label">Item</span></div>
		</div>
	</div>
	
	
	<div class="c c-max c-pad">
		<h2>Narrower than 12 columns, v1</h2>
		
		
		<div class="g g-layout">
			<?php foreach (range(1, 12) as $index): ?>
				<div class="g-guide"></div>
			<?php endforeach; ?>
		</div>
			
		<div class="g g-layout col-6">
			<div class="cross-right">
				<span class="i-label">Item</span>
				<div class="unhang">
					<p>This uses all CSS variables!</p>
				</div>
			</div>
			<div class="cross-right-2">
				<span class="i-label">Item2</span>
				<div class="unhang">
					<p>This uses all CSS variables</p>
				</div>
			</div>
			<div class="nine-in-six">
				<span class="i-label hang-right v1 hang-full">Hanging item v1</span>
				<div class="unhang six-in-nine">
					<p>Set custom widths to break out of the grid item, then hang .i-label to reach the edge of the viewport, but then anything inside of .i-label will not be aligned with the grid. ... Hey wait a minute, this seems to work.</p>
				</div>
			</div>
			<div class="nine-in-six">
				<span class="i-label">Hanging item</span>
				<div class="unhang six-in-nine">
					<p>Custom widths break out of the grid item, but cannot go outside of the grid without throwing off the content width.</p>
				</div>
			</div>
			<div class="hang-right v1 hang-extended">
				<span class="i-label">Hanging item ext v1</span>
				<div class="unhang six-in-nine in-ext">
					<p>Hang the entire container, the .i-label can go out to the edge, but what's inside of it will not line up with the grid, unless you account for the outer gutter + columns and gutters. ... This is now pretty good but doesn't yet account for the extra width from hanging. However, this one is actually correct because its container is 9 wide.</p>
				</div>
			</div>
			<div class="teeter-instead-of-hang">
				<div class="teeter">
					<span class="i-label">RT1</span>
				</div>
				<div>
					<p>Teeter instead of hang, because the math can use CSS variables ... however it doesn't work when the window width is approaching $content_max_width</p>
				</div>
			</div>
			<div class="hang-left v1 hang-full">
				<span class="i-label">
					Hanging item v1
				</span>
				<div class="unhang">
					<p>If .i-label had no padding, you could put this inside of it and everything would line up.</p>
				</div>
			</div>
			<div><span class="i-label">Item</span></div>
		</div>
		
		<div class="g g-layout">
			<?php foreach (range(1, 12) as $index): ?>
				<div class="g-guide"></div>
			<?php endforeach; ?>
		</div>
	
	</div>
	
	
	<div class="c c-max c-pad">
		<h2>Narrower than 12 columns, v2</h2>
		
		<div class="g g-layout">
			<?php foreach (range(1, 12) as $index): ?>
				<div class="g-guide"></div>
			<?php endforeach; ?>
		</div>
			
		<div class="g g-layout col-6">
			<div><span class="i-label">Item</span></div>
			<div>
				<span class="i-label nine-in-six hang-right v2 hang-full">Hanging 9/6 item v2</span>
				<div class="unhang">
					<p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Aspernatur odio impedit excepturi molestiae nesciunt amet sint doloribus nisi quidem. Sed possimus fugiat nobis assumenda, suscipit facere dolor. Harum, consectetur ea.</p>
				</div>
			</div>
			<div>
				<span class="i-label">Hanging item</span>
				<div class="unhang">
					<p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Aspernatur odio impedit excepturi molestiae nesciunt amet sint doloribus nisi quidem. Sed possimus fugiat nobis assumenda, suscipit facere dolor. Harum, consectetur ea.</p>
				</div>
			</div>
			<div><span class="i-label">Item</span></div>
		</div>
	</div>
	
</section>



<section>

	<h1>Outlier</h1>
	

<div class="c c-max c-pad">
	<h2>8/4 split layout with one outlier (max-width container)</h2>
	
	<div class="g g-layout">
		<?php foreach (range(1, 12) as $index): ?>
			<div class="g-guide"></div>
		<?php endforeach; ?>
	</div>
	
	<div class="g g-layout col-8-4-custom">
		<div><span class="i-label">1</span></div>
		<div class="hang-right v1 hang-full"><span class="i-label">2 v1</span></div>
		<div><span class="i-label">3</span></div>
		<div><span class="i-label">4</span></div>
		<div class="outlier"><span class="i-label">outlier</span></div>
		<div class="hang-left v2 hang-full"><span class="i-label">5 v2 grid item</span></div>
		<div><span class="i-label">6</span></div>
		<div><span class="i-label">7</span></div>
		<div><span class="i-label">8</span></div>
	</div>
</div>


	
</section>



<section>

	<h1>Crazy layouts</h1>
	


<div class="c c-max c-pad">
	<h2>Rows</h2>
	
	<div class="g g-layout silly">
			<div><span class="i-label">1</span></div>
			<div><span class="i-label">2</span></div>
			<div><span class="i-label">3</span></div>
			<div><span class="i-label">4</span></div>
			<div><span class="i-label">5</span></div>
	</div>
</div>


<div class="c c-max c-pad">
	<h2>Layout with columns, rows, and order (max-width container)</h2>
	
	<div class="g g-layout crazy">
		<div><span class="i-label">1</span></div>
		<div><span class="i-label">2</span></div>
		<div><span class="i-label">3</span></div>
		<div><span class="i-label">4</span></div>
		<div><span class="i-label">5</span></div>
		<div><span class="i-label">6</span></div>
		<div><span class="i-label">7</span></div>
	</div>
</div>


	
</section>



<section>

	<h1>Teetering</h1>
	


<div class="c c-max c-pad">
	<h2>Teetering item outside of grid</h2>
	
	<div class="g g-layout">
		<?php foreach (range(1, 12) as $index): ?>
			<div class="g-guide"></div>
		<?php endforeach; ?>
	</div>
	
	<div class="g g-layout col-f">
		<div>
			<div class="teeter">
				<span class="i-label">Teeter</span>
			</div>
			<p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Nostrum ipsam voluptate quod. Odio expedita numquam voluptatem. Voluptatem laboriosam sequi distinctio, voluptas eaque et assumenda ab, nostrum, saepe voluptates quo autem? Est, in? Rerum consequatur totam veniam tempora dignissimos tempore odio earum in consequuntur dolores, ab quasi eum eligendi. Voluptatem nemo porro omnis.</p>
		</div>
	</div>
	
	<div class="g g-layout col-6">
		<div>
			<div class="teeter">
				<span class="i-label">RT2</span>
			</div>
			<p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Nostrum ipsam voluptate quod. Odio expedita numquam voluptatem. Voluptatem laboriosam sequi distinctio, voluptas eaque et assumenda ab, nostrum, saepe voluptates quo autem? Est, in? Rerum consequatur totam veniam tempora dignissimos tempore odio earum in consequuntur dolores, ab quasi eum eligendi. Voluptatem nemo porro omnis.</p>
		</div>
	</div>
	
	<div class="g g-layout col-6 auto">
		<div>
			<div class="teeter">
				<span class="i-label">auto</span>
			</div>
			<p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Nostrum ipsam voluptate quod. Odio expedita numquam voluptatem. Voluptatem laboriosam sequi distinctio, voluptas eaque et assumenda ab, nostrum, saepe voluptates quo autem? Est, in? Rerum consequatur totam veniam tempora dignissimos tempore odio earum in consequuntur dolores, ab quasi eum eligendi. Voluptatem nemo porro omnis.</p>
		</div>
	</div>
	
	<div class="g g-layout col-6 not-responsive">
		<div>
			<div class="teeter">
				<span class="i-label">RT3</span>
			</div>
			<p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Nostrum ipsam voluptate quod. Odio expedita numquam voluptatem. Voluptatem laboriosam sequi distinctio, voluptas eaque et assumenda ab, nostrum, saepe voluptates quo autem? Est, in? Rerum consequatur totam veniam tempora dignissimos tempore odio earum in consequuntur dolores, ab quasi eum eligendi. Voluptatem nemo porro omnis.</p>
		</div>
	</div>
	
	<div class="g g-layout">
		<?php foreach (range(1, 12) as $index): ?>
			<div class="g-guide"></div>
		<?php endforeach; ?>
	</div>
	
	<div class="g g-layout col-4-left">
		<div>
			<div class="teeter">
				<span class="i-label">Teeter</span>
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
		<div><span class="i-label">1</span></div>
		<div><span class="i-label">2</span></div>
		<div><span class="i-label">3</span></div>
		<div><span class="i-label">4</span></div>
		<div><span class="i-label">5</span></div>
		<div><span class="i-label">6</span></div>
		<div><span class="i-label">7</span></div>
		<div><span class="i-label">8</span></div>
		<div><span class="i-label">9</span></div>
		<div><span class="i-label">10</span></div>
	</div>
</div>


<div class="c c-max c-pad">
	<h2>4-up explicit grid (max-width container)</h2>
	
	<div class="g g-4">
		<div><span class="i-label">1</span></div>
		<div><span class="i-label">2</span></div>
		<div><span class="i-label">3</span></div>
		<div><span class="i-label">4</span></div>
		<div><span class="i-label">5</span></div>
		<div><span class="i-label">6</span></div>
		<div><span class="i-label">7</span></div>
		<div><span class="i-label">8</span></div>
		<div><span class="i-label">9</span></div>
		<div><span class="i-label">10</span></div>
	</div>
</div>


<div class="c c-full c-pad">
	<h2>Auto grid (full-width container)</h2>
	
	<div class="g g-auto">
		<div><span class="i-label">1</span></div>
		<div><span class="i-label">2</span></div>
		<div><span class="i-label">3</span></div>
		<div><span class="i-label">4</span></div>
		<div><span class="i-label">5</span></div>
		<div><span class="i-label">6</span></div>
		<div><span class="i-label">7</span></div>
		<div><span class="i-label">8</span></div>
		<div><span class="i-label">9</span></div>
		<div><span class="i-label">10</span></div>
	</div>
</div>


<div class="c c-max c-pad">
	<h2>Auto grid (max-width container)</h2>
	
	<div class="g g-auto">
		<div><span class="i-label">1</span></div>
		<div><span class="i-label">2</span></div>
		<div><span class="i-label">3</span></div>
		<div><span class="i-label">4</span></div>
		<div><span class="i-label">5</span></div>
		<div><span class="i-label">6</span></div>
		<div><span class="i-label">7</span></div>
		<div><span class="i-label">8</span></div>
		<div><span class="i-label">9</span></div>
		<div><span class="i-label">10</span></div>
	</div>
</div>


<div class="c c-full">
	<h2>Flush grid (full-width container)</h2>
	
	<div class="g-flush g-auto">
		<div><span class="i-label">1</span></div>
		<div><span class="i-label">2</span></div>
		<div><span class="i-label">3</span></div>
		<div><span class="i-label">4</span></div>
		<div><span class="i-label">5</span></div>
		<div><span class="i-label">6</span></div>
		<div><span class="i-label">7</span></div>
		<div><span class="i-label">8</span></div>
		<div><span class="i-label">9</span></div>
		<div><span class="i-label">10</span></div>
		<div><span class="i-label">1</span></div>
		<div><span class="i-label">2</span></div>
		<div><span class="i-label">3</span></div>
		<div><span class="i-label">4</span></div>
		<div><span class="i-label">5</span></div>
		<div><span class="i-label">6</span></div>
		<div><span class="i-label">7</span></div>
		<div><span class="i-label">8</span></div>
		<div><span class="i-label">9</span></div>
		<div><span class="i-label">10</span></div>
		<div><span class="i-label">1</span></div>
		<div><span class="i-label">2</span></div>
		<div><span class="i-label">3</span></div>
		<div><span class="i-label">4</span></div>
		<div><span class="i-label">5</span></div>
		<div><span class="i-label">6</span></div>
		<div><span class="i-label">7</span></div>
		<div><span class="i-label">8</span></div>
		<div><span class="i-label">9</span></div>
		<div><span class="i-label">10</span></div>
	</div>
</div>


<div class="c c-max c-pad">
	<h2>Flush grid (max-width container)</h2>
	
	<div class="g-flush g-4">
		<div><span class="i-label">1</span></div>
		<div><span class="i-label">2</span></div>
		<div><span class="i-label">3</span></div>
		<div><span class="i-label">4</span></div>
		<div><span class="i-label">5</span></div>
		<div><span class="i-label">6</span></div>
		<div><span class="i-label">7</span></div>
		<div><span class="i-label">8</span></div>
		<div><span class="i-label">9</span></div>
		<div><span class="i-label">10</span></div>
		<div><span class="i-label">1</span></div>
		<div><span class="i-label">2</span></div>
		<div><span class="i-label">3</span></div>
		<div><span class="i-label">4</span></div>
		<div><span class="i-label">5</span></div>
		<div><span class="i-label">6</span></div>
		<div><span class="i-label">7</span></div>
		<div><span class="i-label">8</span></div>
		<div><span class="i-label">9</span></div>
		<div><span class="i-label">10</span></div>
		<div><span class="i-label">1</span></div>
		<div><span class="i-label">2</span></div>
		<div><span class="i-label">3</span></div>
		<div><span class="i-label">4</span></div>
		<div><span class="i-label">5</span></div>
		<div><span class="i-label">6</span></div>
		<div><span class="i-label">7</span></div>
		<div><span class="i-label">8</span></div>
		<div><span class="i-label">9</span></div>
		<div><span class="i-label">10</span></div>
	</div>
</div>


<div class="c c-max c-pad">
	<h2>Wire grid (max-width container)</h2>
	
	<div class="g g-wire g-6">
		<div><span class="i-label">1</span></div>
		<div><span class="i-label">2</span></div>
		<div><span class="i-label">3</span></div>
		<div><span class="i-label">4</span></div>
		<div><span class="i-label">5</span></div>
		<div><span class="i-label">6</span></div>
		<div><span class="i-label">7</span></div>
		<div><span class="i-label">8</span></div>
		<div><span class="i-label">9</span></div>
		<div><span class="i-label">10</span></div>
		<div><span class="i-label">11</span></div>
		<div><span class="i-label">12</span></div>
		<div><span class="i-label">13</span></div>
	</div>
</div>

<div class="c c-full c-pad">
	<h2>Wire grid (full-width container)</h2>
	
	<div class="g g-wire g-6">
		<div><span class="i-label">1</span></div>
		<div><span class="i-label">2</span></div>
		<div><span class="i-label">3</span></div>
		<div><span class="i-label">4</span></div>
		<div><span class="i-label">5</span></div>
		<div><span class="i-label">6</span></div>
		<div><span class="i-label">7</span></div>
		<div><span class="i-label">8</span></div>
		<div><span class="i-label">9</span></div>
		<div><span class="i-label">10</span></div>
		<div><span class="i-label">11</span></div>
		<div><span class="i-label">12</span></div>
		<div><span class="i-label">13</span></div>
	</div>
</div>


	
</section>



<section>

	<h1>Grid item width and offset</h1>
	


<div class="c c-max c-pad">
	<h2>6/2/4 layout with offset (max-width container)</h2>
	
	<div class="g g-layout">
		<?php foreach (range(1, 12) as $index): ?>
			<div class="g-guide"></div>
		<?php endforeach; ?>
	</div>
	
	<div class="g g-layout col-6-2-4">
		<div><span class="i-label">1</span></div>
		<div><span class="i-label">2</span></div>
		<div><span class="i-label">3</span></div>
	</div>
</div>


<div class="c c-max c-pad">
	<h2>8/4 split layout (max-width container)</h2>
	
	<div class="g g-layout">
		<?php foreach (range(1, 12) as $index): ?>
			<div class="g-guide"></div>
		<?php endforeach; ?>
	</div>
	
	<div class="g g-layout col-8-4">
		<div><span class="i-label">1</span></div>
		<div><span class="i-label">2</span></div>
	</div>
</div>


<div class="c c-max c-pad">
	<h2>Centered 6-column item</h2>
	<div class="g g-layout col-6">
		<div><span class="i-label">6-column</span></div>
	</div>
	
	<div class="g g-layout">
		<?php foreach (range(1, 12) as $index): ?>
			<div class="g-guide"></div>
		<?php endforeach; ?>
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
		<?php foreach (range(1, 12) as $index): ?>
			<div class="g-guide"></div>
		<?php endforeach; ?>
	</div>
</div>

<?php
include __DIR__.'/incl/footer.php';
