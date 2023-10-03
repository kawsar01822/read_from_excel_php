<?php

    require_once('excel_reader2.php');
    $mydata = new Spreadsheet_Excel_Reader("DG.xls");
    //echo $mydata->value(2,2);
    for($i=1;$i<=3;$i++){
        for($j=0;$j<=20;$j++){
            echo $mydata->value($i,$j)." ";
        }
        echo "<br/>";
    }
    
?>