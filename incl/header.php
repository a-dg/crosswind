<?php
$all_files = [];
$iterator = new FilesystemIterator(__DIR__.'/../demo');
foreach ($iterator as $file) {
	$all_files[] = $file->getFilename();
}
sort($all_files);

$current_file = basename($_SERVER['SCRIPT_FILENAME']);
$current_index = array_search($current_file, $all_files);
$previous_index = max(0, $current_index - 1);
$next_index = min($current_index + 1, count($all_files));
?>

<!doctype html>
<html>
<head>
<title>Grid demo</title>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0, minimum-scale=1.0, maximum-scale=1.0, user-scalable=no">
<link rel="stylesheet" type="text/css" media="all" href="/css/crosswind.css">
</head>

<body>


<div class="c c-full-width outer-padding">
	<div class="demo-nav">
		<a href="<?= $all_files[$previous_index] ?>">Previous</a>
		<a href="<?= $all_files[$next_index] ?>">Next</a>
	</div>
</div>
