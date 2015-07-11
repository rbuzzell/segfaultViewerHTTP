<!DOCTYPE html>
<html lang="en">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta charset="utf-8">
    <title>PHP generated link bar</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Content sidebar of the CSH Segfault Archive">
    <meta name="author" content="Ryan Buzzell">

    <!-- CSS -->
    <link href="css/bootstrap.css" rel="stylesheet">

        <!-- HTML5 shim, for IE6-8 support of HTML5 elements -->
        <!--[if lt IE 9]>
        <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
        <![endif]-->
</head>
<body>


    <?php
        $dir = "segfaults/*.pdf"; //Directory where the Segfaults are stored
        $file; // Holds all filenames as an array
        $issue; //Variable for the regex function. This hold the issue number.
        $segfault = array($volumeTwo, $issueTwo); //Multi dim. array that holds all volumes and issues.
        $volume; // Variable for the regex for-loop. Holds the volume number
        $totalNum = 0; //Total number of segfaults
        $foo = 0; //I forget
        $volumeNum; //Array that later holds the volumes
        echo "</br>"; //Spits a new line. I think this was was from testing and never removed.
        foreach (glob($dir) as $filename){ //Scans the directory specified by $dir for files matching the regex.
            $file[$totalNum] =  $filename;  //Assigns the filename to an array
            $totalNum++;
        }
        for ($i = 0; $i <= $totalNum; $i++){ //Scan the $file array to pull the $volume and $ issue variables
            sscanf($file[$i],"segfaults/Volume %d, Issue %d.pdf",$volume,$issue);
            $volumeNum[$i] = $volume;
            $segfault[$volume][$issue] = $issue;
            $foo++;
        }
        echo "\n <div class=\"panel-group\" id=\"accordion\" role=\"tablist\" aria-multiselectable=\"true\"> \n";
        $volumeNum = array_unique($volumeNum); //removes duplicates from the $bar array
        $volumeNum = array_values($volumeNum); //removes null variables from the array
        $volumeNum = array_reverse($volumeNum); //reverses the array
        for ($a = 0; $a < count($volumeNum); $a++){ //generate accordions
            $boo = $volumeNum[$a];
            echo "\n\n<div class=\"panel panel-default\"> \n";
            echo "\t<div class=\"panel-heading\" role=\"tab\" id=\"heading$a\"> \n";
            echo "\t\t<h6 class=\"panel-title\"> \n";
            echo "\t\t\t<a class=\"collapsed\" role=\"button\" data-toggle=\"collapse\" data-parent=\"#accordion\" href=\"collapse$a\" aria-expanded=\"true\" aria-controls=\"collapse$a\">Volume $boo</a>\n";
            echo "\t\t</h6>\n";
            echo "\t</div>\n";
            echo "\t<div id=\"collapse$a\" class=\"panel-collapse collapse in\" role=\"tabpanel\" aria-labelledby=\"heading$a\">\n";
            echo "\t\t<div class=\"list-group\">\n";
            for ($i = 0; $i <= 500; $i++){ //builds the issue listing. Has a hard cap of 500 issues per volume. Should never be met in a real situation.
                $issueNum = $segfault[$volumeNum[$a]][$i]; //assigns the value at the specified array location to issueNum

                if (!(!(is_int($issueNum)))){ //Verifies that the value of $fizz is an integer
                    if ($volumeNum[$a] < 10){
                        if ($issueNum < 10){
                            echo "\t\t\t<a href=\"segfaults/Volume%200$volumeNum[$a],%20Issue%200$issueNum.pdf\" target=\"pdfIFrame\">Issue $issueNum</a> </br>";
                        }
                        else{
                            echo "\t\t\t<a href=\"segfaults/Volume%200$volumeNum[$a],%20Issue%20$issueNum.pdf\" target=\"pdfIFrame\">Issue $issueNum</a> </br>";
                        }
                    }
                    else{
                        if ($issueNum < 10){
                            echo "\t\t\t<a href=\"segfaults/Volume%20$volumeNum[$a],%20Issue%200$issueNum.pdf\" target=\"pdfIFrame\">Issue $issueNum</a> </br>";
                        }
                        else{
                            echo "\t\t\t<a href=\"segfaults/Volume%20$volumeNum[$a],%20Issue%20$issueNum.pdf\" target=\"pdfIFrame\">Issue $issueNum</a> </br>";
                        }
                    }
                    echo "</a> \n";
                }
            }
            echo "\t\t</div>\n";
            echo "\t</div>\n";
            echo "</div>\n";
            // echo "</div>\n";
        }
    ?>

    <!-- Le javascript
     ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="js/jquery-2.1.4.min.js"></script>
    <script src="js/bootstrap.js"></script>


    </body>
</html>
