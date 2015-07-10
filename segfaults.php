<!DOCTYPE html>
<html lang="en">
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <meta charset="utf-8">
        <title>CSH Segfault Viewer</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="description" content="CSH Segfault viewer">
        <meta name="author" content="Ryan Buzzell">

        <!-- Le styles -->
        <link href="css/bootstrap.css" rel="stylesheet">

        <!-- HTML5 shim, for IE6-8 support of HTML5 elements -->
        <!--[if lt IE 9]>
        <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
        <![endif]-->
    </head>
    <body>
        <nav class="navbar navbar-inverse">
            <div class="row body">
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
            <div class="row">
                <div class="col-md-2">
                    <iframe src="content.php" frameborder="0" name="scroll" width="100%" id="toc">
                </div>
                <div class="col-md-3">
                    <iframe src="segfaults/Volume%2001,%20Issue%2001.pdf" frameborder="0" id="pdfIFrame"></iframe>
                </div>
            </div>
        </div>
    </body>

    <!-- Le javascript
     ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="js/jquery-2.1.4.min.js"></script>
    <script src="js/jquery.responsiveiframe.js"></script>
    <script src="js/bootstrap.js"></script>
    <script>
        var ri = responsiveIframe();
        ri.allowResponsiveEmbedding();
    </script>
    <script>
        ;(function($){
            $(function(){
                $('#pdfIFrame').responsiveIframe({ xdomain: '*'});
                $('#toc').responsiveIframe({ xdomain: '*'});
            });
        })(jQuery);
    </script>

</html>
