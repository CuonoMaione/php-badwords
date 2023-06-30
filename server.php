<?php  

$text = $_GET['text'];
$badword = $_GET['badword'];


echo $text . '  ' . strlen($text);

echo str_replace($badword,'REPLACED',$text)

?>