<!doctype html>
<html>
<head>
    <meta charset="utf-8">
    <title>Báo Cáo</title>
    <link href="style.css" rel="stylesheet">
	<script src="jquery.js"></script>
	<script src="highcharts.js"></script>
</head>
<body>
<?php
include 'db.php';

$sql ="SELECT * FROM `sửa_Tên_Bảng_đi` LIMIT 10";

$list = db_q($sql);

//var_dump($list);

// Lấy ra một mảng các chuỗi: tên sinh viên
$names = array();
foreach($list as $row)
{
	$names[] = $row['sửa_Cột_Tên_SV_đi'];
}

// Lấy ra một mảng các số: điểm thi
$ielts = array();
foreach($list as $row)
{
	$ielts[] = (int)$row['ielts']; // chuyển sang dữ liệu số để khi json_encode() cho nó đúng.
}

// Dữ liệu thống kê cho biểu đồ bánh
$sql = "
    SELECT `sửa_Năm_Sinh_đi`, 
        COUNT(*) AS 'count'
    FROM `sửa_Tên_Bảng_đi` 
    GROUP BY `sửa_Năm_Sinh_đi`
";

$count_data = db_q($sql);

?>

<div id="chart-line">Biểu Đồ Đường Điểm</div>

<script type="text/javascript">
    $(function () {
        $('#chart-line').highcharts({
            title: {
                text: 'Điểm Thi Sinh Viên',
                x: -20 //center
            },
            subtitle: {
                text: 'Nguồn: leminhhoa.com',
                x: -20
            },
            xAxis: {
                //categories: ['Jan', 'Feb', 'Mar', 'Apr', 'May', 'Jun', 'Jul', 'Aug', 'Sep', 'Oct', 'Nov', 'Dec']
                categories: <?php echo json_encode($names);?>
            },
            yAxis: {
                title: {
                    text: 'Thang Điểm'
                },
                plotLines: [{
                    value: 0,
                    width: 1,
                    color: '#808080'
                }],
                min: 0,
                max: 10,
                tickInterval: 1
            },
            tooltip: {
                valueSuffix: ' Điểm'
            },
            legend: {
                layout: 'vertical',
                align: 'right',
                verticalAlign: 'middle',
                borderWidth: 0
            },
            series: [{
                name: 'sửa_Tên_Môn_đi',
                //data: [7.0, 6.9, 9.5, 14.5, 18.2, 21.5, 25.2, 26.5, 23.3, 18.3, 13.9, 9.6]
                data: <?php echo json_encode($ielts);?>
            }]
        });
    });
</script>


<div id="chart-pie">Biểu Đồ Hình Bánh</div>
<script type="text/javascript">
    $(function () {
        $('#chart-pie').highcharts({
            chart: {
                plotBackgroundColor: null,
                plotBorderWidth: null,
                plotShadow: false,
                type: 'pie'
            },
            title: {
                text: 'Thống Kê Sinh Viên Theo Năm Sinh'
            },
            tooltip: {
                pointFormat: '{series.name}: <b>{point.percentage:.1f}%</b>'
            },
            plotOptions: {
                pie: {
                    allowPointSelect: true,
                    cursor: 'pointer',
                    dataLabels: {
                        enabled: true,
                        format: '<b>{point.name}</b>: {point.percentage:.1f} %',
                        style: {
                            color: (Highcharts.theme && Highcharts.theme.contrastTextColor) || 'black'
                        }
                    }
                }
            },
            series: [{
                name: 'Brands',
                colorByPoint: true,
                data: [
                    
                    <?php foreach($count_data as $row){ ?>
                    {
                        name: '<?php echo $row["sửa_Năm_Sinh_đi"]; ?>',
                        y: <?php echo $row["count"]; ?>
                    },
                    <?php } // end foreach ?>

                ]
            }]
        });
    });
</script>

</body>
</html>