<?php
// The function header by sending raw excel
header("Content-type: application/vnd-ms-excel");
 
// Defines the name of the export file "codelution-export.xls"
header("Content-Disposition: attachment; filename=Bohol-".date("Y-m-d")."-sunshine.csv");
 
// Add data table
include 'export_bohol_excel_data_sunshine.php';
?>