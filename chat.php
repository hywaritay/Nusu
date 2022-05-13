<html>
  <head>
    <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
          <script type="text/javascript">
            google.charts.load("current", {packages:["corechart"]});
            google.charts.setOnLoadCallback(drawChart);
            function drawChart() {
              var search = document.getElementById("search").value;
              var data = google.visualization.arrayToDataTable([
              
                                        ['partyName','total_votes'],
                                        <?php 
                            //index.php
                            require("includes/db.php");
                            $select = "select * from candidates_tbl where elections_name = '<script> document.write(x)</script>' ";
                            $result = $conn->query($select);

                            while($row = mysqli_fetch_array($result))
                            {
                              echo "['".$row['partyName']."',".$row['total_votes']."],";
                              
                            }

                            ?>

              ]);

              var options = {
                title: 'My Daily Activities',
                is3D: true,
              };

              var chart = new google.visualization.PieChart(document.getElementById('piechart_3d'));
              chart.draw(data, options);
            }
    </script>
  </head>
  <body>

  <div class="col-sm-4">
      <div id="piechart_3d" style="width: 400px; height: 200px;"></div>
  </div>

    
  </body>
</html>
