<?php 
// Code from:                                                                                     
// http://stackoverflow.com/questions/5471392/display-images-from-a-folder-in-a-specific-order/5471427#5471427
                                                                                                  
// Find all files in that folder                                                                  
$files = glob('*');                                                                               
                                                                                                  
// Do a natural case insensitive sort, usually 1.jpg and 10.jpg would come next                   
// to each other with a regular sort                                                              
natcasesort($files);                                                                              
                                                                                                  
// Opening HTML
echo "<html>\n";
echo "<head>\n";
echo "<meta http-equiv=\"cache-control\" content=\"max-age=0\" />\n";
echo "<meta http-equiv=\"cache-control\" content=\"no-cache\" />\n";
echo "<meta http-equiv=\"expires\" content=\"0\" />\n";
echo "<meta http-equiv=\"expires\" content=\"Tue, 01 Jan 1980 1:00:00 GMT\" />\n";
echo "<meta http-equiv=\"pragma\" content=\"no-cache\" />\n";
echo "<meta name=\"robots\" content=\"noindex\">\n <!-- Prevent indexing -->\n";
echo "<meta http-equiv=\"Content-Type\" content=\"text/html; charset=utf-8\" />\n";
echo "</head>\n";
echo "<body>\n";
echo "<div class=\"content\">\n";

// Display images 
foreach($files as $file) {
        $ext = end(explode('.', $file));
        if($ext == "jpg" || $ext == "png") {
            echo "<hr><br>\n";
            echo "<h1>$file</h1><br>\n";
            echo "<img src=\"$file\" alt=\"Image\" /><br>\n";
        }
}

// Final line and closing HTML
echo "<hr>\n";
echo "</div>\n";
echo "</body>\n";
echo "</html>\n";
?>