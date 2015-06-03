<?php
// The function header by sending raw excel
header("Content-type: application/vnd-ms-excel");
 
// Defines the name of the export file "codelution-export.xls"
header("Content-Disposition: attachment; filename=Elsalv-".date("Y-m-d")."-solar.csv");
 
// Add data table
include 'al_export_elsal_excel_data_solar.php';
?>