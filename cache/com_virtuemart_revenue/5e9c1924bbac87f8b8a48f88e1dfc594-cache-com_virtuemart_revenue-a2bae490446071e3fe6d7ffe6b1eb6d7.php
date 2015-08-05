<?php die("Access Denied"); ?>#x#a:2:{s:6:"output";s:0:"";s:6:"result";a:2:{s:6:"report";a:0:{}s:2:"js";s:1451:"
  google.load("visualization", "1", {packages:["corechart"]});
      google.setOnLoadCallback(drawChart);
      function drawChart() {
        var data = google.visualization.arrayToDataTable([
          ['Dia', 'Pedidos', 'Total de Itens vendidos', 'Receita líquida'], ['2015-07-07', 0,0,0], ['2015-07-08', 0,0,0], ['2015-07-09', 0,0,0], ['2015-07-10', 0,0,0], ['2015-07-11', 0,0,0], ['2015-07-12', 0,0,0], ['2015-07-13', 0,0,0], ['2015-07-14', 0,0,0], ['2015-07-15', 0,0,0], ['2015-07-16', 0,0,0], ['2015-07-17', 0,0,0], ['2015-07-18', 0,0,0], ['2015-07-19', 0,0,0], ['2015-07-20', 0,0,0], ['2015-07-21', 0,0,0], ['2015-07-22', 0,0,0], ['2015-07-23', 0,0,0], ['2015-07-24', 0,0,0], ['2015-07-25', 0,0,0], ['2015-07-26', 0,0,0], ['2015-07-27', 0,0,0], ['2015-07-28', 0,0,0], ['2015-07-29', 0,0,0], ['2015-07-30', 0,0,0], ['2015-07-31', 0,0,0], ['2015-08-01', 0,0,0], ['2015-08-02', 0,0,0], ['2015-08-03', 0,0,0], ['2015-08-04', 0,0,0]  ]);
        var options = {
          title: 'Relatório para o período de Terça, 07 Julho 2015 até Quarta, 05 Agosto 2015',
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