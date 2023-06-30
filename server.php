<?php  

$text = $_GET['text'];
$badword = $_GET['badword'];

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1><?php echo $text . '  ' . strlen($text); ?></h1>

    <h2><?php echo str_replace ($badword,'REPLACED',$text); ?></h2>
</body>
</html>





