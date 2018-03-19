function drawBasic() {

      var data = google.visualization.arrayToDataTable([
        ['Dias', 'Experencia',],
        ['New York City, NY', 1],
        ['Los Angeles, CA', 2],
        ['Chicago, IL', 3],
        ['Houston, TX', 4],
        ['Philadelphia, PA', 5]
      ]);

      var options = {
        
        chartArea: {width: '50%'},
        hAxis: {
          title: 'Experencia conseguida en los ultimos 5 dias',
          minValue: 0
        },
        
      };

      var chart = new google.visualization.BarChart(document.getElementById('chartdiv'));

      chart.draw(data, options);
    }