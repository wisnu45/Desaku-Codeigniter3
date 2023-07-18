<!DOCTYPE html>
<html>

<head>
    <title>ChartJS - bar</title>
    <!-- Latest CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
</head>

<body>
    <div class="chart-container">
        <div class="bar-chart-container">
            <canvas style="height:40vh; width:80vw" id="bar-chart"></canvas>
        </div>
    </div>

    <!-- javascript -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.8.0/Chart.js"></script>
    <script src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
</body>
<script>
    $(function() {
        //get the bar chart canvas
        var cData = JSON.parse('<?php echo $chart_data; ?>');
        console.log(cData);
        var ctx = $("#bar-chart");

        //bar chart data
        var data = {
            labels: cData.label,
            datasets: [{
                label: cData.label,
                data: cData.data,
                backgroundColor: [
                    "#00ff00",
                    "#ff3399",
                    "#DC143C",
                    "#F4A460",
                    "#2E8B57",
                    "#1D7A46",
                    "#CDA776",
                    "#CDA776",
                    "#989898",
                    "#CB252B",
                    "#E39371",
                ],
                borderColor: [
                    "#CDA776",
                    "#989898",
                    "#CB252B",
                    "#E39371",
                    "#1D7A46",
                    "#F4A460",
                    "#CDA776",
                    "#DEB887",
                    "#A9A9A9",
                    "#DC143C",
                    "#F4A460",
                    "#2E8B57",
                ],
                borderWidth: [1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1]
            }]
        };

        //options
        var options = {
            responsive: true,
            title: {
                display: true,
                position: "top",
                text: "Perbandingan Pendidikan Terakhir Penduduk",
                fontSize: 18,
                fontColor: "#111"
            },

            legend: {
                display: true,
                position: "bottom",
                labels: {
                    fontColor: "#333",
                    fontSize: 16
                }
            }
        };

        //create bar Chart class object
        var chart1 = new Chart(ctx, {
            type: "doughnut",
            data: data,
            options: options
        });

    });
</script>

</html>