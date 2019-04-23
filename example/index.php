<?php
$data=[
    ["Product","Price","Quantity","Date"],
    ["Teddybear",3789.33,2,"2018-08-14"],
    ["Teddybear",2702.17,1,"2018-02-17"],
    ["Table",2932.29,5,"2018-10-09"],
    ["Lamp",671.70,3,"2018-12-11"],
    ["Teddybear",481.21,3,"2018-03-24"],
    ["Table",45.52,3,"2018-05-14"],
    ["Chair",2960.20,2,"2018-06-20"]
];


function WhereFromColum($data,$colum,$equal){
    $ret=[];
    array_push($ret,$data[0]);  // *
    $colum = is_numeric($colum)?$colum:array_search($colum,$data[0]);
    for($i=1/* 0 if you remove the header to data*/;$i!=count($data);$i++)
        if ($data[$i][$colum]==$equal)
            array_push($ret,$data[$i]);
    return $ret;
}

function CountFromColum($data,$colum){
    $ret=0;
    $colum = is_numeric($colum)?$colum:array_search($colum,$data[0]);
    for($i=1/* 0 if you remove the header to data*/;$i!=count($data);$i++)
        $ret+=$data[$i][$colum];
    return $ret;
}

function WhereFromColumData($data,$colum,$min,$max){
    $contractDateBegin = new DateTime($min);
    $contractDateEnd  = new DateTime($max);
    $ret=[];
    array_push($ret,$data[0]);  // *
    $colum = is_numeric($colum)?$colum:array_search($colum,$data[0]);
    for($i=1/* 0 if you remove the header to data*/;$i!=count($data);$i++){
        $paymentDate = new DateTime($data[$i][$colum]);
        if ($paymentDate->getTimestamp() > $contractDateBegin->getTimestamp() &&
            $paymentDate->getTimestamp() < $contractDateEnd->getTimestamp())
            array_push($ret,$data[$i]);
    }
    return $ret;
}


var_dump(WhereFromColum($data,"Product","Teddybear")); // get all Teddybear's Product
var_dump(CountFromColum($data,"Quantity")); // get all Quantity
var_dump(CountFromColum(WhereFromColum($data,"Product","Teddybear"),"Quantity"));  // get all Quantity of Teddybear's Product
var_dump(WhereFromColumData($data,"Date","2018-08-01","2018-12-01")); // get all between 2018-08-01 and 2018-12-01
var_dump(WhereFromColumData(WhereFromColum($data,"Product","Teddybear"),"Date","2018-08-01","2018-12-01")); // get all Teddybear's Product between 2018-08-01 and 2018-12-01
exit;






















// function process_csv($file) {
//
//     $file = fopen($file, 'r');
//     $data = array();
//
//     while (!feof($file)) {
//         $data[] = fgetcsv($file,null,';');
//     }
//
//     fclose($file);
//     return $data;
// }
//
// // Set path to CSV file
// $csv_file = DIR_PATH . '/data/sales2.csv';
// $csv = process_csv($csv_file);



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
