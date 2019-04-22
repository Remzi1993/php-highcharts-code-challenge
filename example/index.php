<?php
function process_csv($file) {

    $file = fopen($file, 'r');
    $data = array();

    while (!feof($file)) {
        $data[] = fgetcsv($file,null,';');
    }

    fclose($file);
    return $data;
}

// Set path to CSV file
$csv_file = DIR_PATH . '/data/sales2.csv';
$csv = process_csv($csv_file);



// echo $csv[1][1];
// echo count($csv);
//
// for ($row = 0; $row < 8; $row++) {
//   echo "<p><b>Row number $row</b></p>";
//   echo "<ul>";
//   for ($col = 0; $col < 4; $col++) {
//     echo "<li>".$csv[$row][$col]."</li>";
//   }
//   echo "</ul>";
// }

// array_shift($csv);





echo '<pre>';
print_r($csv);
echo '</pre>';






// $json = json_encode($csv);
// echo '<pre>';
// print_r($json);
// echo '</pre>';
exit;
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <meta name="Description" content="PHP Code Challenge with Highcharts">
        <title>PHP Code Challenge</title>

        <script src="https://code.highcharts.com/highcharts.js"></script>
        <script src="https://code.highcharts.com/modules/series-label.js"></script>
        <script src="https://code.highcharts.com/modules/exporting.js"></script>
        <script src="https://code.highcharts.com/modules/export-data.js"></script>
</head>
<body>
    <div id="container" style="width:100%; height:400px;"></div>
    <script src="/test/chart.js"></script>
</body>
</html>
