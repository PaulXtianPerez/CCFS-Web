<?php
$input = filter_input_array(INPUT_POST);
if (isset($input['rep'])) {
    header("Content-type: text/csv; charset=utf-8 ");       
    header("Content-Disposition: attachment; filename=RegistrarReport.csv");       
    $output = fopen("php://output", "w");       
    $header = array('SECTION','BOYS','GIRLS','TOTAL');       
    fputcsv($output, $header);       
    foreach($input['rep'] as $row)       
    {  
        fputcsv($output, $row);  
    }       
    fclose($output);
}
?>