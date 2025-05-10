<?php
    session_start();
    include 'dbconnection/connection.php';
    require_once __DIR__ . '/vendor/autoload.php';

    if ($_SESSION['user']) {
        $name = $_SESSION['user'];

        ob_start();
?>
<!DOCTYPE html>
<html lang="en">
    <?php include 'template/headerfile.php'; ?>
    <link rel="stylesheet" href="assets/css/bootstrap-datepicker3.min.css" />
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            text-align: center;
        }
        .container {
            width: 60%;
            margin: auto;
            padding: 20px;
        }
        .image-box {
            display: flex;
            flex-direction: column;
            align-items: center;
            margin-bottom: 20px;
            page-break-inside: avoid;
        }
        .image-box h1 {
            font-size: 18px;
            font-weight: bold;
            margin-bottom: 10px;
        }
        .image-box img {
            max-width: 300px;
            height: auto;
            border: 1px solid black;
            padding: 5px;
        }
        .page-break {
            page-break-after: always;
        }
    </style>
    <body>
        <div class="container">
            <?php 
                $id = $_GET['id'];
                $res = mysqli_query($link, "SELECT * FROM emps WHERE empid='$id'") or die("Error: " . mysqli_error($link));
                $rw = mysqli_fetch_array($res) or die("Error: " . mysqli_error($link));

                $employeeId = $rw['employeeid'];

                $res1 = mysqli_query($link, "SELECT * FROM bank_nominee WHERE employeeid='$employeeId'");
                $row = mysqli_fetch_array($res1);
                
                $imageData = [
                    'Employee Image' => $rw['photo'],
                    'Spouse Image' => $rw['sphoto'],
                    'Employee Aadhaar (Front)' => $rw['adharphoto'],
                    'Employee Aadhaar (Back)' => $rw['adharphotoback'],
                    'Father Photo' => $rw['fphoto'],
                    'Mother Photo' => $rw['mophoto'],
                    'Employee PAN' => $rw['panphoto'],
                    'Employee Qualification' => $rw['qualphoto'],
                    'Employee Medical Certificate' => $rw['mphoto'],
                    // 'Employee ID Card (Front)' => $rw['empidcardfront'],
                    // 'Employee ID Card (Back)' => $rw['empidcardback'],
                    'License Photo' => $rw['licimg'],
                    // 'Employee Fingerprint' => $rw['empfingerprint'],
                    'Passbook' => $row['bphoto']
                ];

                $baseURL = 'http://localhost/BESTHRMS_LATEST/';
                $count = 0;

                foreach ($imageData as $title => $imgPath) {
                    if (!empty($imgPath)) {
                        $cleanedPath = str_replace($baseURL, '', $imgPath);
                        echo "<div class='image-box'>";
                        echo "<h1>" . htmlspecialchars($title) . "</h1>";
                        echo "<img src='" . htmlspecialchars($cleanedPath) . "' />";
                        echo "</div>";

                        $count++;
                        if ($count % 2 == 0) {
                            echo "<div class='page-break'></div>";
                        }
                    }
                }
            ?>
        </div>
    </body>
</html>

<?php
    mysqli_close($link);
    $html = ob_get_clean(); 
    
    $mpdf = new \Mpdf\Mpdf();
    $mpdf->WriteHTML($html);
    
    $filename = 'Emp_Docs/' . date('d-m-Y') . '.pdf';
    $mpdf->Output($filename, \Mpdf\Output\Destination::DOWNLOAD);

} else {
    session_destroy();
    session_unset();
    header('Location:index.php?authentication_failed');
}
?>