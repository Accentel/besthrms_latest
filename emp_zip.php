<?php
session_start();
include 'dbconnection/connection.php';

if ($_SESSION['user']) {
    $name = $_SESSION['user'];

    $id = $_GET['id'];
    $res = mysqli_query($link, "SELECT * FROM emps WHERE empid='$id'") or die("Error: " . mysqli_error($link));
    $rw = mysqli_fetch_array($res) or die("Error: " . mysqli_error($link));
$employeeid=$rw['employeeid'];
$bankRes = mysqli_query($link, "SELECT bphoto FROM bank_nominee WHERE employeeid='$employeeid'") or die("Error: " . mysqli_error($link));
$bankRow = mysqli_fetch_array($bankRes);
    $imageData = [
        'Employee_Image' => $rw['photo'],
        'Employee_Aadhaar_Front' => $rw['adharphoto'],
        'Employee_Aadhaar_Back' => $rw['adharphotoback'],
        'Employee_PAN' => $rw['panphoto'],
        'Employee_ID_Card_Front' => $rw['empidcardfront'],
        'Employee_ID_Card_Back' => $rw['empidcardback'],
        'License_Photo' => $rw['licimg'],
        'Employee_Fingerprint' => $rw['empfingerprint'],
        'Passbook' => $bankRow['bphoto']
    ];

    $baseURL = 'http://actlhms.com/kvrhrms/';
    $zip = new ZipArchive();
    $zipDir = 'Emp_Docs';

    if (!file_exists($zipDir)) {
        mkdir($zipDir, 0777, true);
    }

    $zipFilename = $zipDir . '/' . date('d-m-Y_H-i-s') . '.zip';

    if ($zip->open($zipFilename, ZipArchive::CREATE) !== TRUE) {
        die("Could not open archive");
    }

    foreach ($imageData as $name => $imgPath) {
        if (!empty($imgPath)) {
            $cleanedPath = str_replace($baseURL, '', $imgPath);
            $filePath = __DIR__ . '/' . $cleanedPath;

            if (file_exists($filePath)) {
                $zip->addFile($filePath, $name . '_' . basename($filePath) . '.jpg');
            }
        }
    }

    $zip->close();
    mysqli_close($link);

    // Send ZIP file to user
    header('Content-Type: application/zip');
    header('Content-disposition: attachment; filename=' . basename($zipFilename));
    header('Content-Length: ' . filesize($zipFilename));
    readfile($zipFilename);

    // Optional: delete ZIP after download
    unlink($zipFilename);
    exit;

} else {
    session_destroy();
    session_unset();
    header('Location:index.php?authentication_failed');
}
?>
