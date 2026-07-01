<html>
  <head>
    <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
    <script type="text/javascript">
      google.charts.load('current', {'packages':['corechart']});
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
          title: 'Company Performance',
          curveType: 'function',
          legend: { position: 'bottom' }
        };

        var chart = new google.visualization.LineChart(document.getElementById('curve_chart'));

        chart.draw(data, options);
      }
    </script>
  </head>
  <body>
    <div id="curve_chart" style="width: 900px; height: 500px"></div>
  </body>
</html>
