
//Previous Month's Performance Charts Begins
google.charts.load("current", {packages:["corechart"]});
google.charts.setOnLoadCallback(drawChart);
function drawChart() {
  var data = google.visualization.arrayToDataTable([
    ['Task', 'Hours per Day'],
    ['Likes',     20],
    ['Views',      45],
    ['Shares',  10],
    ['Reviews', 25],
  ]);

  var options = {
    title: "Previous Month's Performance",
    titleTextStyle:{ color: '#727ff7',
      fontSize: '16px',
      bold: true,
      },
    pieHole: 0.4,
  };

  var chart = new google.visualization.PieChart(document.getElementById('donutchart'));
  chart.draw(data, options);
}

//Previous Month's Performance Charts Ends
