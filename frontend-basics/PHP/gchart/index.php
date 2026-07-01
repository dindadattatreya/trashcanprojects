
<html>
  <head>
    <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
    <script type="text/javascript">
      google.charts.load('current', {'packages':['bar']});
      google.charts.setOnLoadCallback(drawChart);

      function drawChart() {
        var data = google.visualization.arrayToDataTable([
          ['Year', 'Sales', 'Expenses', 'Profit'],
          
          
          <?php
include ('connect.php');

$sql= "select * from chart";
$res=mysqli_query($conn,$sql);

while($row=mysqli_fetch_assoc($res))
{
   $yr= $row['year'];
   $sa= $row['sales'];
   $ex= $row['expense'];
   $pr= $row['profit'];
    
?>
["<?php echo $yr;?>",<?php echo $sa;?>,<?php echo $ex;?>,<?php echo $pr;?>],
<?php
}
?>

        ]);

        var options = {
          chart: {
            title: 'Company Performance',
            subtitle: 'Sales, Expenses, and Profit: 2017-2020',
          }
        };

        var chart = new google.charts.Bar(document.getElementById('columnchart_material'));

        chart.draw(data, google.charts.Bar.convertOptions(options));
      }
    </script>
  </head>
  <body>
    <div id="columnchart_material" style="width: 800px; height: 500px;"></div>
  </body>
</html>
