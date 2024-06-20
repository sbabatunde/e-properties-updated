//Dashboard Charts Scripts Begins

// Profile Visits Chart Begins

google.charts.load('current', {'packages':['bar']});
google.charts.setOnLoadCallback(drawChart);

function drawChart() {
  var data = google.visualization.arrayToDataTable([
    ['Month', 'Visits'],
    ['Jan', 10],
    ['Feb', 70],
    ['Mar', 60],
    ['Apr', 30],
    ['May', 10],
    ['Jun', 17],
    ['Jul', 16],
    ['Aug', 15],
    ['Sep', 20],
    ['Oct', 17],
    ['Nov', 63],
    ['Dec', 15],
  ]);

  var options = {
    chart: {
      title: 'Profile Visits',
      subtitle: '',
    },
    titleTextStyle: { color: 'black',fontSize:'32px',bold: true},
    legend: { position: "none" },
    bars: 'vertical',
    vAxis: {format: 'decimal'},
    height: 400,
    colors: ['#b4baf0']
  };

  var chart = new google.charts.Bar(document.getElementById('chart_div'));

  chart.draw(data, google.charts.Bar.convertOptions(options));

  var btns = document.getElementById('btn-group');

  btns.onclick = function (e) {

    if (e.target.tagName === 'BUTTON') {
      options.vAxis.format = e.target.id === 'none' ? '' : e.target.id;
      chart.draw(data, google.charts.Bar.convertOptions(options));
    }
  }
}

// Profile Visits Chart Ends

