<?php
// Header
require DIR_PATH . '/template-parts/header.php';


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


// echo '<pre>';
// print_r($csv);
// echo '</pre>';


// $json = json_encode($csv);
// echo '<pre>';
// print_r($json);
// echo '</pre>';

?>
<div class="container">
    <div class="row">
        <div class="col">
            <h1 class="d-flex justify-content-center">PHP Code Challenge with Highcharts</h1>
            <div id="chart"></div>
        </div>
    </div>
</div>
<?php
// Footer
require DIR_PATH . '/template-parts/footer.php';
?>
