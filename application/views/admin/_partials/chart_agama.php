<div class="chart-container">
    <div class="bar-chart-container">
        <canvas style="height:40vh; width:80vw" id="bar-chart3"></canvas>
    </div>
</div>

<!-- javascript -->


<script>
    $(function() {
        //get the bar chart canvas
        var cData = JSON.parse('<?php echo $chart_data3; ?>');
        console.log(cData);
        var ctx = $("#bar-chart3");

        //bar chart data
        var data = {
            labels: cData.label3,
            datasets: [{
                label: cData.label3,
                data: cData.data3,
                backgroundColor: [
                    "#00ff00",
                    "#ff3399",
                    "#DC143C",
                    "#F4A460",
                    "#16dbf6",
                    "#e2f616",
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
                    "#16dbf6",
                    "#e2f616",
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
                text: "Perbandingan Agama Penduduk",
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

</div>