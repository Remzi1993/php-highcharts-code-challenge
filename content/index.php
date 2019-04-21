<?php
// Header
require DIR_PATH . '/template-parts/header.php';

// $file = DIR_PATH . '/data/sales2.csv';
// $csv = file_get_contents($file);
// $array = array_map( "str_getcsv", explode("\n", $csv) );
// $json = json_encode($array);
// print_r($json);


// $csv = array_map('str_getcsv', file( DIR_PATH . '/data/sales2.csv' ));
// print_r($csv);


// $myObj->name = "John";
// $myObj->age = 30;
// $myObj->city = "New York";
//
// $myJSON = json_encode($myObj);
//
// echo $myJSON;
// exit;


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
