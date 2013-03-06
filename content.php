<!DOCTYPE html>
<!-- saved from url=(0072)http://twitter.github.com/bootstrap/examples/starter-template.html#about -->
<html lang="en" height="100%"><head><meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<meta charset="utf-8">
<title>PHP generated link bar</title>
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta name="description" content="Content sidebar of the CSH Segfault Archive">
<meta name="author" content="Ryan Buzzell w/Bootstrap template">

	<!-- Le styles -->
		<link href="css/bootstrap.css" rel="stylesheet">

			<link href="css/bootstrap-responsive.css" rel="stylesheet">

			<!-- HTML5 shim, for IE6-8 support of HTML5 elements -->
			<!--[if lt IE 9]>
			<script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
			<![endif]-->
</head>
<body>


<?php
	$dir = "segfaults/*.pdf"; //Directory where the Segfaults are stored
	$num = 0; // I forget
	$file; // Holds all filenames as an array
	$issue; //Varable for the regex function. This hold the issue number.
	$segfault = array($volumeTwo, $issueTwo); //Multi dim. array that holds all volumes and issues.
	$volume; // Variable for the regex function. Holds the volume number
	$one = 0; //Total number of segfaults
	$foo = 0; //I forget
	$bar; //Array that later hold the volumes
	echo "</br>"; //Spits a new line. I think this was was from testing and never removed. 
	foreach (glob($dir) as $filename){ //Scans the directory specified by $dir for files matching the regex.
		$file[$one] =  $filename;  //Assigns the filename to an array
		$one++;
	}
	for ($i = 0; $i <= $one; $i++){ //Scan the $file array to pull the $volume and $ issue variables 
		sscanf($file[$i],"segfaults/Volume %d, Issue %d.pdf",$volume,$issue);
		$bar[$i] = $volume;
		$segfault[$volume][$issue] = $issue;
		$foo++;
	}
	$bar = array_unique($bar); //removes duplicates from the $bar array
	$bar = array_values($bar); //removes null variables from the array

	$bar = array_reverse($bar);//reverses the array
	for ($a = 0; $a < count($bar); $a++){ //generate some mother fuckin' bootstrap
		$boo = $bar[$a];
		echo "<div class=\"accordion\" id=accordion$a\"> \n";
		echo "<div class=\"accordion-group\"> \n";
		echo "<div class=\"accordion-heading\"> \n";
		echo "<a class=\"accordion-toggle\" data-toggle=\"collapse\" data-parent=\"#accordion$a\" href=\"#collapse$a\"> \n";
		echo "<h6>Volume $boo</h6>";
		echo "</a>";
		echo "</div>";
		echo "<div id=\"collapse$a\" class=\"accordion-body collapse\">";
		echo "<div class=\"accordion-inner\">";
		for ($i = 0; $i <= 500; $i++){ //builds the issue listing. Has a hard cap of 500 issues. Should never be met in a real situation.
			$fizz = $segfault[$bar[$a]][$i]; //assigns the value at the specified array locatoin to $fizz
			if (!(!(is_int($fizz)))){ //Verifies that the value of $fizz is an integer
				if ($bar[$a] < 10){ 
					if ($fizz < 10){
						echo "<a href=\"segfaults\Volume%200$bar[$a],%20Issue%200$fizz.pdf\" target=\"iframePdf\">Issue $fizz</a> </br>";
					}
					else{
						echo "<a href=\"segfaults\Volume%200$bar[$a],%20Issue%20$fizz.pdf\" target=\"iframePdf\">Issue $fizz</a> </br>";
					}
				}
				else{
					if ($fizz < 10){
						echo "<a href=\"segfaults\Volume%20$bar[$a],%20Issue%200$fizz.pdf\" target=\"iframePdf\">Issue $fizz</a> </br>";
					}
					else{
						echo "<a href=\"segfaults\Volume%20$bar[$a],%20Issue%20$fizz.pdf\" target=\"iframePdf\">Issue $fizz</a> </br>";
					}
				}
				echo "</a> \n";
			}
		}
		echo "</div>";
		echo "</div>";
		echo "</div>";
		echo "</div>";
	}
?>

 	<!-- Le javascript
	 ================================================== -->
	<!-- Placed at the end of the document so the pages load faster -->
	<script src="./Bootstrap, from Twitter_files/jquery.js"></script>
	<script src="./Bootstrap, from Twitter_files/bootstrap-transition.js"></script>
	<script src="./Bootstrap, from Twitter_files/bootstrap-alert.js"></script>
	<script src="./Bootstrap, from Twitter_files/bootstrap-modal.js"></script>
	<script src="./Bootstrap, from Twitter_files/bootstrap-dropdown.js"></script>
	<script src="./Bootstrap, from Twitter_files/bootstrap-scrollspy.js"></script>
	<script src="./Bootstrap, from Twitter_files/bootstrap-tab.js"></script>
	<script src="./Bootstrap, from Twitter_files/bootstrap-tooltip.js"></script>
	<script src="./Bootstrap, from Twitter_files/bootstrap-popover.js"></script>
	<script src="./Bootstrap, from Twitter_files/bootstrap-button.js"></script>
	<script src="./Bootstrap, from Twitter_files/bootstrap-collapse.js"></script>
	<script src="./Bootstrap, from Twitter_files/bootstrap-carousel.js"></script>
	<script src="./Bootstrap, from Twitter_files/bootstrap-typeahead.js"></script>

	</body><style type="text/css"></style></html>
