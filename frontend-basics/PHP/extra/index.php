<!DOCTYPE html>

<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title></title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="style.css">
    </head>
    <body>
        <?php
        $name=array("Raja","Rani","Barsha","Jiban");

        for($i=0;$i<count($name);$i++)
        { echo "<br> $name[$i]"; }

echo "<br>while <br>";
$i=0;
while ($i <count($name)) {
    echo"<br> $name[$i]";
    $i++;
}
echo "<br>do while<br>";
$i=0;
do{
    echo"<br>";
    ?>
    <span id="name_style">
        <?php 
        echo $name[$i];
        ?></span><?php
   // echo "<br> $name[$i]";
    $i++;
} while($i <count($name));

$str="I love India is kkkkk";
echo str_word_count($str);
$str1 = str_replace("is","are",$str);
echo $str1;
$str1=strrev($str);;
echo "<br> $str1";

foreach ($name as $x) 
    echo "<br> $x";
 
?>
    </body>
    
</html>