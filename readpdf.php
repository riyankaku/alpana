<?php

if($_SERVER["REQUEST_METHOD"] === "POST")
{
    $pdfname= trim($_POST["extra_submit_param"]);
//}
//echo $pdfname;

echo "<iframe src='".$pdfname."' width= '100%' style='height:100%'></iframe>";

}
?>