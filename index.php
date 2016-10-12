<!DOCTYPE html>
<html lang="en">
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <meta charset="utf-8">
        <title>CSH Segfault</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="description" content="CSH Segfault viewer">
        <meta name="author" content="Ryan Buzzell">
        <link rel="icon" href="img/favicon.ico">

        <!-- Le styles -->
        <link href="css/bootstrap.css" rel="stylesheet">

        <!-- HTML5 shim, for IE6-8 support of HTML5 elements -->
        <!--[if lt IE 9]>
        <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
        <![endif]-->
    </head>
    <body>
        <nav class="navbar navbar-inverse">
            <div class="container-fluid">
                <!-- Brand and toggle get grouped for better mobile display -->
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <a class="navbar-brand" href="#" style="padding-left: 30px; padding-top: 10px;"><img src="img/csh_logo_white.svg"></a>
                    <a class="navbar-brand" href="#">Segfault Archive</a>
                </div>

                <!-- Collect the nav links, forms, and other content for toggling -->
                <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                    <ul class="nav navbar-nav">
                        <li><a href="index.php">Home</a></li>
                        <!--<li  class="active"><a href="#">Segfaults <span class="sr-only">(current)</span></a></li>-->
                        <!--<li><a href="coredump.php">Coredump</a></li>-->
                    </ul>
                </div><!-- /.navbar-collapse -->
            </div><!-- /.container-fluid -->
        </nav>

        <div class="container-fluid">
            <div class="row-fluid">
                <div class="col-xs-2">
                    <iframe src="content.php" frameborder="0" id="toc" width="100%"></iframe>
                </div>
                <div class="col-sm-10">
                    <iframe src="segfaults/Volume%2001,%20Issue%2001.pdf" frameborder="0" name="pdfIFrame" id="pdfIFrame" width="100%"></iframe>
                </div>
            </div>
        </div>

        <!-- Le javascript
         ================================================== -->
        <!-- Placed at the end of the document so the pages load faster -->
        <script src="js/jquery-2.1.4.min.js"></script>
        <script src="js/jquery.responsiveiframe.js"></script>
        <script src="js/bootstrap.js"></script>
        <script>
            $(window).load(function (){
                $("#pdfIFrame").height(Math.floor($(window).height() * 0.9));
                $("#toc").height(Math.floor($(window).height() * 0.9));
            });
        </script>
        <script>
            $(window).resize(function (){
                $("#pdfIFrame").height(Math.floor($(window).height() * 0.9));
                $("#toc").height(Math.floor($(window).height() * 0.9));
            });
        </script>
    </body>



</html>
