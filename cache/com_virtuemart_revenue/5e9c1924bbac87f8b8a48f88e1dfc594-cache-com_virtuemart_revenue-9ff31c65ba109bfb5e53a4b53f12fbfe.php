<?php die("Access Denied"); ?>#x#a:2:{s:6:"output";s:0:"";s:6:"result";a:2:{s:6:"report";a:0:{}s:2:"js";s:1432:"
  google.load("visualization", "1", {packages:["corechart"]});
      google.setOnLoadCallback(drawChart);
      function drawChart() {
        var data = google.visualization.arrayToDataTable([
          ['Day', 'Orders', 'Total Items sold', 'Revenue net'], ['2015-05-25', 0,0,0], ['2015-05-26', 0,0,0], ['2015-05-27', 0,0,0], ['2015-05-28', 0,0,0], ['2015-05-29', 0,0,0], ['2015-05-30', 0,0,0], ['2015-05-31', 0,0,0], ['2015-06-01', 0,0,0], ['2015-06-02', 0,0,0], ['2015-06-03', 0,0,0], ['2015-06-04', 0,0,0], ['2015-06-05', 0,0,0], ['2015-06-06', 0,0,0], ['2015-06-07', 0,0,0], ['2015-06-08', 0,0,0], ['2015-06-09', 0,0,0], ['2015-06-10', 0,0,0], ['2015-06-11', 0,0,0], ['2015-06-12', 0,0,0], ['2015-06-13', 0,0,0], ['2015-06-14', 0,0,0], ['2015-06-15', 0,0,0], ['2015-06-16', 0,0,0], ['2015-06-17', 0,0,0], ['2015-06-18', 0,0,0], ['2015-06-19', 0,0,0], ['2015-06-20', 0,0,0], ['2015-06-21', 0,0,0], ['2015-06-22', 0,0,0]  ]);
        var options = {
          title: 'Report for the period from Segunda, 25 Maio 2015 to Terça, 23 Junho 2015',
            series: {0: {targetAxisIndex:0},
                   1:{targetAxisIndex:0},
                   2:{targetAxisIndex:1},
                  },
                  colors: ["#00A1DF", "#A4CA37","#E66A0A"],
        };

        var chart = new google.visualization.LineChart(document.getElementById('vm_stats_chart'));

        chart.draw(data, options);
      }
";}}