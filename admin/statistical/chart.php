<!DOCTYPE html>
<html>
  <head>
    <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
    <script type="text/javascript">
      google.charts.load("current", {packages:["corechart"]});
      google.charts.setOnLoadCallback(drawChart);
      function drawChart() {
        var data = google.visualization.arrayToDataTable([
          ['Task', 'Hours per Day'],
          <?php
            foreach($items as $item){
                echo "['$item[ten_loai]', $item[so_luong] ],";
            }
          ?>
        ]);

        var options = {
          title: 'Biểu đồ hàng hóa',
          is3D: true,
        };

        var chart = new google.visualization.PieChart(document.getElementById('piechart_3d'));
        chart.draw(data, options);
      }
    </script>
  </head>
  <body>
    <div class="alert alert-success mt-3">
        <h4>Biểu đồ hàng hóa</h4>
    </div>
    <div id="piechart_3d" style="width: 900px; height: 500px;"></div>
    <a href="index.php" class="btn btn-primary border mb-3">Danh sách thống kê</a>
  </body>
</html>
