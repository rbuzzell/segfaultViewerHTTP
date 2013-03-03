<!DOCTYPE html>
<!-- saved from url=(0072)http://twitter.github.com/bootstrap/examples/starter-template.html#about -->
<html lang="en"><head><meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
		<meta charset="utf-8">
		<title>CSH Segfault Viewer</title>
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<meta name="description" content="Viewer for the CSH Segfault History">
		<meta name="author" content="Ryan Buzzell w/Bootstrap template">

		<!-- Le styles -->
		<link href="css/bootstrap.css" rel="stylesheet">
		<style>
			body {
				padding-top: 60px; /* 60px to make the container go all the way to the bottom of the topbar */
			}
		</style>
		<link href="css/bootstrap-responsive.css" rel="stylesheet">

		<!-- HTML5 shim, for IE6-8 support of HTML5 elements -->
		<!--[if lt IE 9]>
			<script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
		<![endif]-->

	</head>

	<body>

		<div class="navbar navbar-inverse navbar-fixed-top">
	<div class="navbar-inner">
		<div class="container">
 
 
			<!-- Be sure to leave the brand out there if you want it shown -->
			<a class="brand" href="#">Segfault Archive</a>
			<a href="volume1-5.html" class="btn btn-mini btn-inverse">Vol. 1 - 5</a>
			<a href="volume6-10.html" class="btn btn-mini btn-inverse">Vol. 6 - 10</a>
			<a href="volume11-15.html" class="btn btn-mini btn-inverse">Vol. 11 - 15</a>
			<a href="volume16-20.html" class="btn btn-mini btn-inverse">Vol. 16 - 20</a>
			<a href="volume21-25.html" class="btn btn-mini btn-inverse">Vol. 21 - 25</a>
			<a href="volume26-30.html" class="btn btn-mini btn-inverse">Vol. 26 - 30</a>
			<a href="volume31-35.html" class="btn btn-mini btn-inverse">Vol. 31 - 35</a>
			<a href="volume36-40.html" class="btn btn-mini btn-inverse">Vol. 36 - 40</a>
			<a href="volume41-45.html" class="btn btn-mini btn-inverse">Vol. 41 - 45</a>
		 <!--	<a href="uploadNew.html" class="btn btn-mini btn-danger">Upload</a>-->
		
 


			</div>
 
		</div>
	</div>
</div>

<h1 style="text-align:center">Welcome to the CSH @ RIT Segfault Archive</h1>
	
<div class="row">
	<div class="span11 offset1">

	<p style="text-align:left">If you have navigated to this page in error, you will not be able to accces any content without an active login to members.</br> As a note: all avilable content has been added. Unadded content is missing content. If you have access to any of the missing content, please email it to <a href="mailto:segfault@csh.rit.edu">segfault@csh.rit.edu</a></br>
<?php
	$dir = "segfaults/*.pdf";
	$num = 0;
	$file;
	$issue;
	$segfault = array($volumeTwo, $issueTwo);
	$volume;
	$one = 0;
	$foo = 0;
	$bar;
	echo "</br>";
	foreach (glob($dir) as $filename){
		$file[$one] =  $filename;
		$one++;
	}
	for ($i = 0; $i <= $one; $i++){
		sscanf($file[$i],"segfaults/Volume %d, Issue %d.pdf",$volume,$issue);
		$bar[$i] = $volume;
		$segfault[$volume][$issue] = $issue;
		$foo++;
		}
//		$bar[$i] = $volume;
	//	if (!(in_array($volume, $segfault))){
	$bar = array_unique($bar);
	$bar = array_values($bar);

	for ($a = 0; $a <= count($bar); $a++){				
		echo "<div class=\"accordion\" id=accoridion$a\"> \n";
		echo "<div class=\"accordion-group\"> \n";
		echo "<div class=\"accordion-heading\"> \n";
		echo "<a class=\"accordion-toggle\" data-toggle=\"collapse\" data-parent=\"#accordion$a\" href=\"#accordion$a\"> \n";
		echo "Volume $a";
		echo "</a>";
		echo "</div>";
		for ($i = 0; $i <= 500; $i++){
			$fizz = $segfault[$bar[$a]][$i];
			if (!(!(is_int($fizz)))){
				if ($bar[$a] < 10){
				if ($fizz < 10){
						echo "<a href=\"segfaults\Volume%200$bar[$a],%20Issue%200$fizz.pdf\">Issue $fizz</a> </br>";		
					}
					else{
						echo "<a href=\"segfaults\Volume%200$bar[$a],%20Issue%20$fizz.pdf\">Issue $fizz</a> </br>";
					}
				}
				else{
					if ($fizz < 10){
						echo "<a href=\"segfaults\Volume%20$bar[$a],%20Issue%200$fizz.pdf\">Issue $fizz</a> </br>";
					}
					else{
						echo "<a href=\"segfaults\Volume%20$bar[$a],%20Issue%20$fizz.pdf\">Issue $fizz</a> </br>";
					}
				}
	
			echo "</a> \n";
				}
		}
		echo "</div> \n";
		echo "</div> \n";
		echo "</div> \n";
}	
?>

    </div>
</div>
			</p>

		</div> <!-- /container -->

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
