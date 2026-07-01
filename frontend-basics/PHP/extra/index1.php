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
    </body>
</html>


<h1><?php //program 1
echo "welcome";
?></h1><br><br>

<?php //program 2
$a=10;
$b=20;
$c=$a+$b;
echo "sum " .$c;
?><br><br>

<?php //program 3
for($i=0;$i<=10;$i++)
{ ?>
    <h1 class="text-col"><?php echo $i;?> </h1>
    <?php
}
?><br><br>

<?php //program 4
$x=15; 
if ($x%2 == 0)
{
    ?>
    <h2 class="text-green"><?php echo "Even"?></h2>
    <?php
}
else 
{
?>
<h2 class="text-red"><?php echo "odd"?></h2>
<?php
}
?> //*theend