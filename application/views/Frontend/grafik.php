<header id="header" class="ex-header">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <h1>GRAFIK PERTUMBUHAN</h1>
            </div> </div> </div> </header> <div class="ex-basic-1">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="breadcrumbs">
                    <a href="<?php echo base_url() . 'index.php/Frontend' ?>">Home</a><i
                        class="fa fa-angle-double-right"></i><span>Grafik Pertumbuhan <?php echo $tbl_balita['nm_balita']?></span>
                </div> </div> </div> </div> </div> <div class="container my-5">

    <div class="row">

        <div class="col-xl col-lg-7">

            <div class="card shadow mb-4">
                <div class="card-header py-3">
                    <h6 class="m-0 font-weight-bold text-primary">Grafik Pertumbuhan <?php echo $tbl_balita['nm_balita']?></h6>
                </div>
                <div class="card-body">
                    <div class="chart-area">
                        <canvas id="myAreaChart"></canvas>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<script src="<?php echo base_url(); ?>assets/backend/backend/vendor/chart.js/Chart.min.js"></script>

<script src="<?php echo base_url(); ?>assets/backend/backend/js/demo/chart-area-demo.js"></script>
<script>
    <?php
    $labele = "";
    $data_berat_badan = "";
    $data_tinggi_badan = "";
    $data_lingkar_kepala = "";
    $data_lingkar_lengan = "";

    foreach ($labelnya as $key => $value) {
        $labele .= '"' . $value['tgl_cek'] . '",';
        $data_berat_badan .= "" . $value['berat_badan'] . ",";
        $data_tinggi_badan .= "" . $value['tinggi_badan'] . ",";
        $data_lingkar_kepala .= "" . $value['lingkar_kepala'] . ",";
        $data_lingkar_lengan .= "" . $value['lingkar_lengan'] . ",";
    }

    $labele = rtrim($labele, ",");
    $data_berat_badan = rtrim($data_berat_badan, ",");
    $data_tinggi_badan = rtrim($data_tinggi_badan, ",");
    $data_lingkar_kepala = rtrim($data_lingkar_kepala, ",");
    $data_lingkar_lengan = rtrim($data_lingkar_lengan, ",");

    echo "var labele = [$labele];\n";
    echo "var dataBeratBadan = [$data_berat_badan];\n";
    echo "var dataTinggiBadan = [$data_tinggi_badan];\n";
    echo "var dataLingkarKepala = [$data_lingkar_kepala];\n";
    echo "var dataLingkarLengan = [$data_lingkar_lengan];\n";
    ?>

    // Set new default font family and font color to mimic Bootstrap's default styling
    Chart.defaults.global.defaultFontFamily = 'Nunito', '-apple-system,system-ui,BlinkMacSystemFont,"Segoe UI",Roboto,"Helvetica Neue",Arial,sans-serif';
    Chart.defaults.global.defaultFontColor = '#858796';

    function number_format(number, decimals, dec_point, thousands_sep) {
        // * example: number_format(1234.56, 2, ',', ' ');
        // * return: '1 234,56'
        number = (number + '').replace(',', '').replace(' ', '');
        var n = !isFinite(+number) ? 0 : +number,
            prec = !isFinite(+decimals) ? 0 : Math.abs(decimals),
            sep = (typeof thousands_sep === 'undefined') ? ',' : thousands_sep,
            dec = (typeof dec_point === 'undefined') ? '.' : dec_point,
            s = '',
            toFixedFix = function(n, prec) {
                var k = Math.pow(10, prec);
                return '' + Math.round(n * k) / k;
            };
        s = (prec ? toFixedFix(n, prec) : '' + Math.round(n)).split('.');
        if (s[0].length > 3) {
            s[0] = s[0].replace(/\B(?=(?:\d{3})+(?!\d))/g, sep);
        }
        if ((s[1] || '').length < prec) {
            s[1] = s[1] || '';
            s[1] += new Array(prec - s[1].length + 1).join('0');
        }
        return s.join(dec);
    }

    // Area Chart Example
    var ctx = document.getElementById("myAreaChart");
    var myLineChart = new Chart(ctx, {
        type: 'line',
        data: {
            labels: labele,
            datasets: [{
                label: "Berat Badan",
                lineTension: 0.3,
                backgroundColor: "rgba(78, 115, 223, 0.05)",
                borderColor: "rgba(78, 115, 223, 1)",
                pointRadius: 3,
                pointBackgroundColor: "rgba(78, 115, 223, 1)",
                pointBorderColor: "rgba(78, 115, 223, 1)",
                pointHoverRadius: 3,
                pointHoverBackgroundColor: "rgba(78, 115, 223, 1)",
                pointHoverBorderColor: "rgba(78, 115, 223, 1)",
                pointHitRadius: 10,
                pointBorderWidth: 2,
                data: dataBeratBadan,
            },
            {
                label: "Tinggi Badan",
                lineTension: 0.3,
                backgroundColor: "rgba(28, 200, 138, 0.05)", // Example color for Tinggi Badan (Green)
                borderColor: "rgba(28, 200, 138, 1)",
                pointRadius: 3,
                pointBackgroundColor: "rgba(28, 200, 138, 1)",
                pointBorderColor: "rgba(28, 200, 138, 1)",
                pointHoverRadius: 3,
                pointHoverBackgroundColor: "rgba(28, 200, 138, 1)",
                pointHoverBorderColor: "rgba(28, 200, 138, 1)",
                pointHitRadius: 10,
                pointBorderWidth: 2,
                data: dataTinggiBadan,
            },
            {
                label: "Lingkar Kepala",
                lineTension: 0.3,
                backgroundColor: "rgba(255, 193, 7, 0.05)", // Example color for Lingkar Kepala (Yellow)
                borderColor: "rgba(255, 193, 7, 1)",
                pointRadius: 3,
                pointBackgroundColor: "rgba(255, 193, 7, 1)",
                pointBorderColor: "rgba(255, 193, 7, 1)",
                pointHoverRadius: 3,
                pointHoverBackgroundColor: "rgba(255, 193, 7, 1)",
                pointHoverBorderColor: "rgba(255, 193, 7, 1)",
                pointHitRadius: 10,
                pointBorderWidth: 2,
                data: dataLingkarKepala,
            },
            {
                label: "Lingkar Lengan",
                lineTension: 0.3,
                backgroundColor: "rgba(220, 53, 69, 0.05)", // Example color for Lingkar Lengan (Red)
                borderColor: "rgba(220, 53, 69, 1)",
                pointRadius: 3,
                pointBackgroundColor: "rgba(220, 53, 69, 1)",
                pointBorderColor: "rgba(220, 53, 69, 1)",
                pointHoverRadius: 3,
                pointHoverBackgroundColor: "rgba(220, 53, 69, 1)",
                pointHoverBorderColor: "rgba(220, 53, 69, 1)",
                pointHitRadius: 10,
                pointBorderWidth: 2,
                data: dataLingkarLengan,
            }],
        },
        options: {
            maintainAspectRatio: false,
            layout: {
                padding: {
                    left: 10,
                    right: 25,
                    top: 25,
                    bottom: 0
                }
            },
            scales: {
                xAxes: [{
                    time: {
                        unit: 'date'
                    },
                    gridLines: {
                        display: false,
                        drawBorder: false
                    },
                    ticks: {
                        maxTicksLimit: 7
                    }
                }],
                yAxes: [{
                    ticks: {
                        maxTicksLimit: 5,
                        padding: 10,
                        callback: function(value, index, values) {
                            return '' + number_format(value);
                        }
                    },
                    gridLines: {
                        color: "rgb(234, 236, 244)",
                        zeroLineColor: "rgb(234, 236, 244)",
                        drawBorder: false,
                        borderDash: [2],
                        zeroLineBorderDash: [2]
                    }
                }],
            },
            legend: {
                display: true // Set to true to display the legend for multiple datasets
            },
            tooltips: {
                backgroundColor: "rgb(255,255,255)",
                bodyFontColor: "#858796",
                titleMarginBottom: 10,
                titleFontColor: '#6e707e',
                titleFontSize: 14,
                borderColor: '#dddfeb',
                borderWidth: 1,
                xPadding: 15,
                yPadding: 15,
                displayColors: false,
                intersect: false,
                mode: 'index',
                caretPadding: 10,
                callbacks: {
                    label: function(tooltipItem, chart) {
                        var datasetLabel = chart.datasets[tooltipItem.datasetIndex].label || '';
                        return datasetLabel + ': ' + number_format(tooltipItem.yLabel);
                    }
                }
            }
        }
    });
</script>