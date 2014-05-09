<!DOCTYPE html>
<html>

	<head>
		<meta charset="utf-8"/>
		<title>TDD Data Tool</title>

		<!-- Google web fonts -->
		<link href="http://fonts.googleapis.com/css?family=PT+Sans+Narrow:400,700" rel='stylesheet' />

		<!-- The main CSS file -->
		<link href="assets/css/style.css" rel="stylesheet" />

		<h1>COPE TDD Data Tool</h1>
	</head>

	<body>


		<div id="FileList">

		<?php
		if ($handle = opendir('uploads')) {
		    /* This is the correct way to loop over the directory. */
		    while (false !== ($entry = readdir($handle))) {
		    	if ($entry != "." && $entry != "..") {
					echo "<div id='uploadedFile' class='fileLink'>
					<a href='JSDiff.html?filename=$entry'>$entry</a>
					</div>";
		        }        
		    }
		    closedir($handle);
		}
		?>
		<br><bR>
		<a href="upload.html">Upload More Json Docs</a>

		</div>


	</body>
</html>

