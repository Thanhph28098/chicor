<div class="page-wrapper">
    <div class="page-breadcrumb">
<div class="row">
    
    <div
    id="myChart" style="width:100%; max-width:600px; height:500px;">
    </div>
    <div style='width:80%; margin:0 auto; padding-left: 100px;'>
    <canvas id="doanhthu"></canvas>
    </div>

    <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
    <script>

    google.charts.load('current', {'packages':['corechart']});
    google.charts.setOnLoadCallback(drawChart);

    function drawChart() {
    var data = google.visualization.arrayToDataTable([
    ['Loại', 'Số lượng sản phẩm'],
    <?php
        $tongloai=count($listthongke);
        $i=1;
        foreach ($listthongke as $thongke) {
            extract($thongke);
            if($i==$tongloai) $dauphay=""; else $dauphay=",";
            echo "['".$thongke['tenloai']."',".$thongke['countsp']."]".$dauphay;
            $i+=1;
        }
    ?>
    ]);

    var options = {
    title:'World Wide Wine Production'
    };

    var chart = new google.visualization.PieChart(document.getElementById('myChart'));
    chart.draw(data, options);
    }
    const doanhthu = document.getElementById('doanhthu')
if (doanhthu) {
    const result = doanhthu.getContext('2d');
    // const labels = Utils.months({
    //     count: 7
    // });
    

    const bieudodoanhthu = new Chart( result, {
        type: 'line',
        responsive: true,
        data: {
            labels: ['tháng 12', 'tháng 11', 'tháng 10', 'tháng 9', 'tháng 8', 'tháng 7', 'tháng 6',
                'tháng 5', 'tháng 4', 'tháng 3', 'tháng 2', 'tháng 1'
            ],
            datasets: [{
                label: 'Doanh thu hàng tháng',
                data: [<?php echo $tongtien[0]["tong_tien"]?>,<?php echo $tongtien[0]["tong_tien"]?>],
                fill: false,
                borderColor: 'rgb(75, 192, 192)',
                tension: 0.1,
            }]
        }
    })
}
    </script>

</div>
</div>
    