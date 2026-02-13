<!-- Tambahkan Highcharts -->
<script src="https://code.highcharts.com/highcharts.js"></script>

<header id="header" class="ex-header">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <h1>GRAFIK PERTUMBUHAN</h1>
            </div>
        </div>
    </div>
</header>

<div class="ex-basic-1">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="breadcrumbs">
                    <a href="<?php echo base_url() . 'index.php/Frontend' ?>">Home</a>
                    <i class="fa fa-angle-double-right"></i>
                    <span>Grafik Pertumbuhan <?php echo $tbl_balita['nm_balita']?></span>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="container my-5">
    <div class="row">
        <div class="col-xl col-lg-12">
            <div class="card shadow mb-4">
                <div class="card-header py-3">
                    <h6 class="m-0 font-weight-bold text-primary">
                        Grafik Pertumbuhan <?php echo $tbl_balita['nm_balita']?>
                    </h6>
                </div>
                <div class="card-body">
                    <div id="grafikPertumbuhan" style="height:400px;"></div>
                </div>
            </div>
        </div>
    </div>
</div>

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

Highcharts.chart('grafikPertumbuhan', {
    chart: {
        type: 'line'
    },
    title: {
        text: 'Grafik Pertumbuhan <?php echo $tbl_balita['nm_balita']?>'
    },
    xAxis: {
        categories: labele,
        title: { text: 'Tanggal Cek' }
    },
    yAxis: {
        title: { text: 'Nilai Pengukuran' }
    },
    tooltip: {
        shared: true,
        valueSuffix: ''
    },
    legend: {
        layout: 'horizontal',
        align: 'center',
        verticalAlign: 'bottom'
    },
    series: [{
        name: 'Berat Badan',
        data: dataBeratBadan,
        color: 'rgba(78, 115, 223, 1)'
    }, {
        name: 'Tinggi Badan',
        data: dataTinggiBadan,
        color: 'rgba(28, 200, 138, 1)'
    }, {
        name: 'Lingkar Kepala',
        data: dataLingkarKepala,
        color: 'rgba(255, 193, 7, 1)'
    }, {
        name: 'Lingkar Lengan',
        data: dataLingkarLengan,
        color: 'rgba(220, 53, 69, 1)'
    }]
});
</script>