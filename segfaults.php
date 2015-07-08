<!DOCTYPE html>
<!-- saved from url=(0072)http://twitter.github.com/bootstrap/examples/starter-template.html#about -->
<html lang="en"><head><meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<meta charset="utf-8">
<title>CSH Segfault Viewer</title>
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta name="description" content="CSH Segfault viewer">
<meta name="author" content="Ryan Buzzell">

	<!-- Le styles -->
		<link href="css/bootstrap.css" rel="stylesheet">
			<style>
				body {
				padding-top: 60px; /* 60px to make the container go all the way to the bottom of the topbar */
				}
			</style>
			<link href="css/bootstrap.css" rel="stylesheet">

			<!-- HTML5 shim, for IE6-8 support of HTML5 elements -->
			<!--[if lt IE 9]>
			<script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
			<![endif]-->
</head>
<body>
<nav class="navbar navbar-default">
    <div class="container-fluid">
        <!-- Brand and toggle get grouped for better mobile display -->
        <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="#">CSH SVG HERE</a>
        </div>

        <!-- Collect the nav links, forms, and other content for toggling -->
        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
            <ul class="nav navbar-nav">
                <li><a href="index.php">Home</a></li>
                <li  class="active"><a href="#">Segfaults <span class="sr-only">(current)</span></a></li>
                <!--<li><a href="coredump.php">Coredump</a></li>-->
            </ul>
        </div><!-- /.navbar-collapse -->
    </div><!-- /.container-fluid -->
</nav>

<div class="container-fluid">
<div class="row-fluid">
<div class="span2" style="overflow: auto;">
<iframe src="content.php" frameborder="0" name"scroll" width="100%"></iframe>
</div>

<div class="span10">
	<!--Body content-->
	<iframe src="segfaults/Volume%2001,%20Issue%2001.pdf" frameborder="0" name="iframePdf" width="100%"></iframe>
 	<!-- Le javascript
	 ================================================== -->
	<!-- Placed at the end of the document so the pages load faster -->
	<script src="./js/jquery.js"></script>
	<script src="./js/bootstrap.js"></script>
	<script>
	$(window).load(function (){
		console.log("test, bitches");
		$("iframe").height($(window).height() - 85);
		$("scroll").height($(window).height() - 85);
	});
	$(document).ready(function () {
	console.log("testicles");
	});
	</script>
	</body><style type="text/css"></style></html>
