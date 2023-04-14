<?
require __DIR__.'/config.php';
include __DIR__.'/incl/header.php';
?>

<div class="c c-max-fwidth">
	<p>Full-width container with grid</p>
	
	<div class="g-flush-c">
		<div class="g-flush g-auto">
			<? foreach(range(1, 30) as $index): ?>
				<div class="g-item"><p><?= $index ?></p></div>
			<? endforeach; ?>
		</div>
	</div>
</div>


<div class="c c-max-width outer-padding">
	<p>Full-width container with grid</p>
	
	<div class="g g-wire g-6">
		<? foreach(range(1, 13) as $index): ?>
			<div class="g-item"><p><?= $index ?></p></div>
		<? endforeach; ?>
	</div>
</div>



<div class="c c-full-width">
	<p>Full-width container</p>
</div>

<div class="c c-max-width">
	<p>Container with max-width applied</p>
</div>

<div class="c c-max-width outer-padding">
	<p>Container with max-width and outer margins applied</p>
	
	<div class="g g-4">
		<? foreach(range(1, 10) as $index): ?>
			<div class="g-item"><p><?= $index ?></p></div>
		<? endforeach; ?>
	</div>
</div>

<div class="c c-max-width outer-padding">
	<p>Container with max-width and outer margins applied</p>
	
	<div class="g g-auto">
		<? foreach(range(1, 10) as $index): ?>
			<div class="g-item"><p><?= $index ?></p></div>
		<? endforeach; ?>
	</div>
</div>

<div class="c c-max-width outer-padding">
	<p>Container with max-width and outer margins applied</p>
	
	<div class="g g-layout">
		<? foreach (range(1, 12) as $index): ?>
			<div class="g-item g-guide"></div>
		<? endforeach; ?>
	</div>
	
	<div class="g g-layout col-8-4">
		<div class="g-item"><p>1</p></div>
		<div class="g-item"><p>2</p></div>
	</div>
</div>

<div class="c c-max-width outer-padding">
	<p>Container with max-width and outer margins applied</p>
	
	<div class="g g-layout col-8-4">
		<div class="g-item"><p>Item</p></div>
		<div class="g-item hang-r hang-extended"><p>Hanging item</p></div>
		<div class="g-item hang-l hang-full"><p>Hanging item</p></div>
		<div class="g-item"><p>Item</p></div>
	</div>
</div>

<div class="c c-max-width outer-padding">
	<div class="g g-layout col-6">
		<div class="g-item"><p>Item</p></div>
	</div>
	
	<div class="g g-layout">
		<? foreach (range(1, 12) as $index): ?>
			<div class="g-item g-guide"></div>
		<? endforeach; ?>
	</div>
</div>


<div class="bg c c-full-width">
	<p>Full-width container with elements at edges</p>
	<div class="content-at-edges c c-max-width outer-padding">
		<div class="g-item"><p>1</p></div>
		<div class="g-item"><p>2</p></div>
	</div>
</div>


<!-- 
<hr>

<div class="tm-grid pb-0">
	<div class="tm-center-6">
		<div class="tm-statistic-float">
			<h2>10,000%</h2>
			<p>Praesent commodo cursus magna, vel scelerisque nisl consectetur et</p>
		</div>
		<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Eu sem integer vitae justo eget magna fermentum iaculis. Mi Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh Fusce dapibus, tellus ac cursus sed posuere consectetur est at condimentum nibh Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo.</p>
		<ol>
			<li>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt pellentesque ornare sem lacinia.</li>
			<li>Labore et dolore magna aliqua. Eu sem integer vitae justo eget magna fermentum iaculis pellentesque ornare sem lacinia quam venenatis vestibulum.</li>
		</ol>
	</div>
</div>
 -->


<?
include __DIR__.'/incl/footer.php';
