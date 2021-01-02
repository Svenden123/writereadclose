<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<?php
$myFile = fopen("uploads/bla.txt", "w");
$txt="24";
fwrite($myFile, $txt);
$txt="59";
fwrite($myFile, $txt);
fclose($myFile);
echo $myFile;
?>

</body>
</html>

