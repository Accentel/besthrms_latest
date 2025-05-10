<?php
// Include the configuration file
include_once('dbconnection/connection.php');
// Include the PhpSpreadsheet classes
require 'vendor/autoload.php';

/**
 * Generate and export a quotation list to an Excel spreadsheet.
 *
 * This script retrieves data from the 'add_tgqot' table and generates an Excel spreadsheet
 * with formatted headers and rows containing information about quotations.
 *
 * @author Syed Omer Ali
 * LinkedIn ID :https://www.linkedin.com/in/syed-omer-ali-0069801ab/
 */

// SQL query to retrieve data from the 'add_tgqot' table

$datatable="emps";
// $y="SELECT * FROM ".$datatable."    ORDER BY id desc";
$y = "SELECT e.*, b.bname, b.accno, b.ifsc, b.branch	
      FROM emps e
      LEFT JOIN bank_nominee b ON e.empid = b.employeeid
      ORDER BY e.id DESC"; 

use PhpOffice\PhpSpreadsheet\Spreadsheet;
use PhpOffice\PhpSpreadsheet\Writer\Xlsx;
use PhpOffice\PhpSpreadsheet\Style\Fill;
use PhpOffice\PhpSpreadsheet\Style\Alignment;

// Create a new Spreadsheet object
$objPHPExcel = new Spreadsheet();

// Styling and formatting for the spreadsheet
$objPHPExcel->getActiveSheet()->mergeCells('A1:O1');
$objPHPExcel->getActiveSheet()->getStyle("A1:O1")->getFill()->setFillType(Fill::FILL_SOLID)
    ->getStartColor()->setRGB('800000');
$objPHPExcel->getActiveSheet()->getStyle("A1:O1")->getFont()->setBold(true)->getColor()->setRGB('ffffff');
$objPHPExcel->getActiveSheet()->setCellValue('A1', 'KVR BEST PROPERTY MANAGEMENT PVT.LTD');
$objPHPExcel->getActiveSheet()->getStyle("A1:O1")->getAlignment()->setHorizontal(Alignment::HORIZONTAL_CENTER);
$objPHPExcel->getActiveSheet()->mergeCells('A4:O4');
$objPHPExcel->getActiveSheet()->getStyle("A4:O4")->getFill()->setFillType(Fill::FILL_SOLID)
    ->getStartColor()->setRGB('800000');
$objPHPExcel->getActiveSheet()->getStyle("A4:O4")->getFont()->setBold(true)->getColor()->setRGB('ffffff');
// $objPHPExcel->getActiveSheet()->setCellValue('A4', 'TELANGANA QUOTATION LIST');
$objPHPExcel->getActiveSheet()->getStyle("A4:O4")->getAlignment()->setHorizontal(Alignment::HORIZONTAL_CENTER);
$objPHPExcel->setActiveSheetIndex(0);
$objPHPExcel->getActiveSheet()->SetCellValue('A6', 'SNO');
$objPHPExcel->getActiveSheet()->SetCellValue('B6', 'state');
$objPHPExcel->getActiveSheet()->SetCellValue('C6', 'empid');
$objPHPExcel->getActiveSheet()->SetCellValue('D6', 'emp_name');
$objPHPExcel->getActiveSheet()->SetCellValue('E6', 'fname	');
$objPHPExcel->getActiveSheet()->SetCellValue('F6', 'DOB');
$objPHPExcel->getActiveSheet()->SetCellValue('G6', 'DOJ');
$objPHPExcel->getActiveSheet()->SetCellValue('H6', 'designation');
$objPHPExcel->getActiveSheet()->SetCellValue('I6', 'gender');
$objPHPExcel->getActiveSheet()->SetCellValue('J6', 'contactno');
$objPHPExcel->getActiveSheet()->SetCellValue('K6', 'adharcardno');
$objPHPExcel->getActiveSheet()->SetCellValue('L6', 'ESIC');
$objPHPExcel->getActiveSheet()->SetCellValue('M6', 'uan');
$objPHPExcel->getActiveSheet()->SetCellValue('N6', 'permaddress');
$objPHPExcel->getActiveSheet()->SetCellValue('O6', 'bname');
$objPHPExcel->getActiveSheet()->SetCellValue('P6', 'accno');
$objPHPExcel->getActiveSheet()->SetCellValue('Q6', 'ifsc');
$objPHPExcel->getActiveSheet()->SetCellValue('R6', 'branch');
$objPHPExcel->getActiveSheet()->SetCellValue('S6', 'mole');
$objPHPExcel->getActiveSheet()->SetCellValue('T6', 'emp_email');
$objPHPExcel->getActiveSheet()->getStyle("A6:O6")->getFill()->setFillType(Fill::FILL_SOLID)
    ->getStartColor()->setRGB('800000');
$objPHPExcel->getActiveSheet()->getColumnDimension('B')->setWidth(22);
$objPHPExcel->getActiveSheet()->getColumnDimension('C')->setWidth(12);
$objPHPExcel->getActiveSheet()->getColumnDimension('D')->setWidth(25);
$objPHPExcel->getActiveSheet()->getColumnDimension('E')->setWidth(20);
$objPHPExcel->getActiveSheet()->getColumnDimension('F')->setWidth(20);
$objPHPExcel->getActiveSheet()->getColumnDimension('G')->setWidth(16);
$objPHPExcel->getActiveSheet()->getColumnDimension('H')->setWidth(13);
$objPHPExcel->getActiveSheet()->getColumnDimension('I')->setWidth(12);
$objPHPExcel->getActiveSheet()->getColumnDimension('J')->setWidth(14);
$objPHPExcel->getActiveSheet()->getColumnDimension('K')->setWidth(13);
$objPHPExcel->getActiveSheet()->getColumnDimension('L')->setWidth(13);
$objPHPExcel->getActiveSheet()->getColumnDimension('M')->setWidth(22);
$objPHPExcel->getActiveSheet()->getColumnDimension('N')->setWidth(20);
$objPHPExcel->getActiveSheet()->getColumnDimension('O')->setWidth(20);
$objPHPExcel->getActiveSheet()->getColumnDimension('P')->setWidth(20);
$objPHPExcel->getActiveSheet()->getColumnDimension('Q')->setWidth(20);
$objPHPExcel->getActiveSheet()->getColumnDimension('R')->setWidth(20);
$objPHPExcel->getActiveSheet()->getColumnDimension('S')->setWidth(20);
$objPHPExcel->getActiveSheet()->getColumnDimension('T')->setWidth(20);

$objPHPExcel->getActiveSheet()->getStyle("A6:O6")->getFont()->setBold(true)->getColor()->setRGB('ffffff');

// Adding data from the database
$result			=	$db->query($y) or die(mysqli_error($link));
$i=1;
$rowCount	=	7;
while($row	=	$result->fetch_assoc()){
       // Populate spreadsheet with quotation data
	$objPHPExcel->getActiveSheet()->SetCellValue('A'.$rowCount, mb_strtoupper($i,'UTF-8'));
	$objPHPExcel->getActiveSheet()->SetCellValue('B'.$rowCount, mb_strtoupper($row['state'],'UTF-8'));
       $objPHPExcel->getActiveSheet()->SetCellValue('G'.$rowCount, mb_strtoupper(date('d-m-Y',strtotime($row['DOJ'])),'UTF-8'));
	$objPHPExcel->getActiveSheet()->SetCellValue('C'.$rowCount, mb_strtoupper($scode=$row['empid'],'UTF-8'));
	// Fetch additional data from related 'dpr' table
	$ds="select * from emps where empid='$id'";
	$result1=$db->query($ds) or die(mysqli_error($link));
	$row1=$result1->fetch_assoc();
	$objPHPExcel->getActiveSheet()->SetCellValue('D'.$rowCount, mb_strtoupper($row1['emp_name'],'UTF-8'));
	$objPHPExcel->getActiveSheet()->SetCellValue('E'.$rowCount, mb_strtoupper($row1['fname'],'UTF-8'));
	$objPHPExcel->getActiveSheet()->SetCellValue('F'.$rowCount, mb_strtoupper(date('d-m-Y',strtotime($row['DOB'])),'UTF-8'));
	$objPHPExcel->getActiveSheet()->SetCellValue('H'.$rowCount, mb_strtoupper($row1['designation'],'UTF-8'));
	$objPHPExcel->getActiveSheet()->SetCellValue('I'.$rowCount, mb_strtoupper($row1['gender'],'UTF-8'));
	$objPHPExcel->getActiveSheet()->SetCellValue('J'.$rowCount, mb_strtoupper($row1['contactno'],'UTF-8'));
	$objPHPExcel->getActiveSheet()->SetCellValue('K'.$rowCount, mb_strtoupper($row1['adharcardno'],'UTF-8'));
	$objPHPExcel->getActiveSheet()->SetCellValue('L'.$rowCount, mb_strtoupper($row1['ESIC'],'UTF-8'));
	$objPHPExcel->getActiveSheet()->SetCellValue('M'.$rowCount, mb_strtoupper($row1['uan'],'UTF-8'));
	$objPHPExcel->getActiveSheet()->SetCellValue('N'.$rowCount, mb_strtoupper($row1['permaddress'],'UTF-8'));
	$objPHPExcel->getActiveSheet()->SetCellValue('O'.$rowCount, mb_strtoupper($row1['bname'],'UTF-8'));
	$objPHPExcel->getActiveSheet()->SetCellValue('P'.$rowCount, mb_strtoupper($row1['accno'],'UTF-8'));
	$objPHPExcel->getActiveSheet()->SetCellValue('Q'.$rowCount, mb_strtoupper($row1['ifsc'],'UTF-8'));
	$objPHPExcel->getActiveSheet()->SetCellValue('R'.$rowCount, mb_strtoupper($row1['branch'],'UTF-8'));
	$objPHPExcel->getActiveSheet()->SetCellValue('S'.$rowCount, mb_strtoupper($row1['mole'],'UTF-8'));
	$objPHPExcel->getActiveSheet()->SetCellValue('T'.$rowCount, mb_strtoupper($row1['emp_email'],'UTF-8'));
	// Increment counters
       $rowCount++;
       $i++;
 }
// Create a new worksheet
$sheet = $objPHPExcel->getActiveSheet();

// Create a new Xlsx Writer
$writer = new Xlsx($objPHPExcel);

// Set the appropriate headers for file download
header('Content-Type: application/vnd.openxmlformats-officedocument.spreadsheetml.sheet');
header('Content-Disposition: attachment;filename="Data_Export.xlsx"');
header('Cache-Control: max-age=0');

// Save the spreadsheet to the output
$writer->save('php://output');
?>
