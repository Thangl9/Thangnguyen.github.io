<?php
    $filename = "../week 9/processing.php";
    $line = file($filename);
    echo "<ol>";
    $linesOrBigString = '';
    foreach($line as $i => $line){
        $linesOrBigString .= $line;
        echo"<li> $line </li>";
    }

    $filename = "text.txt";
    $fp = fopen($filename,"w");\
    flock($fp, LOCK_EX);

    fwrite($fp, "Here is the first line\n");
    fwrite($fp, "Here is the second line\n");
    flock($fp, LOCK_UN);
    fclose($fp);





?>