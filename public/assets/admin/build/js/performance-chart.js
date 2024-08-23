
        // Load Google Charts
        google.charts.load('current', { packages: ['corechart'] });
        google.charts.setOnLoadCallback(drawChart);

        function drawChart() {
            var data = google.visualization.arrayToDataTable([
                ['Task', 'Hours per Day'],
                ['Likes', 20],
                ['Views', 45],
                ['Shares', 10],
                ['Reviews', 25],
            ]);

            var options = {
                title: "Previous Month's Performance",
                titleTextStyle: {
                    color: '#1823b4',
                    fontSize: '32px',
                    bold: true
                },
                pieHole: 0.6,
                pieSliceText: 'label', // Show percentage outside
                pieSliceTextStyle: {
                    fontSize: 14,
                    color: 'white'
                },
                legend: 'none', // Hide default legend
                annotations: {
                    alwaysOutside: true // Ensure annotations are always outside
                },
                colors: ['#22df45', '#5368df', '#911212', '#1823b4'], // Custom colors for each slice
                chartArea: { width: '80%', height: '80%' } // Adjust the chart area
            };

            var chart = new google.visualization.PieChart(document.getElementById('donutchart'));
            chart.draw(data, options);

            addCustomLabels(data);
        }

        function addCustomLabels(data) {
            var dataDict = {};
            data.getDataTable().getRows().forEach(function(row) {
                var label = data.getDataTable().getValue(row, 0);
                var value = data.getDataTable().getValue(row, 1);
                var percentage = Math.round((value / data.getDataTable().getTotal()) * 100);
                dataDict[label] = percentage;
            });

            var container = document.getElementById('labels-container');
            container.innerHTML = ''; // Clear previous content
            Object.keys(dataDict).forEach(function(label) {
                var iconClass = getIconClass(label);
                var item = document.createElement('div');
                item.className = 'label-item';
                item.innerHTML = `<i class="${iconClass} icon"></i> ${label} - ${dataDict[label]}%`;
                container.appendChild(item);
            });
        }

        function getIconClass(label) {
            switch (label) {
                case 'Likes':
                    return 'fa fa-heart'; // Replace with your desired icon
                case 'Views':
                    return 'fa fa-eye'; // Replace with your desired icon
                case 'Shares':
                    return 'fa fa-share-alt'; // Replace with your desired icon
                case 'Reviews':
                    return 'fa fa-star'; // Replace with your desired icon
                default:
                    return 'fas fa-question'; // Default icon
            }
        }