<?php
session_start();
// Error reporting and exception handling
error_reporting(E_ALL);
ini_set('display_errors', 1);
include('dbconnection/connection.php');

if ($_SESSION['user']) {
    $name = $_SESSION['user'];

    // Retrieving the data from the POST request
    $id = $_POST['id'];
    $address_to = $_POST['address'];
    $designation = $_POST['desig'];
    $date = $_POST['apdate'];
    $location = $_POST['loc'];
    $emp_name = $_POST['name'];
    $joiningdate = $_POST['join_date'];
    $state = $_POST['state'];
    $apdate = $_POST['apdate'];
    $subject = $_POST['sub'];
    $location_company = $_POST['location'];
    $working_company_name = $_POST['wcname'];

    // Check if the record exists
    $query_check = "SELECT id FROM deployment_records WHERE id = '$id'";
    $result_check = mysqli_query($link, $query_check);

    if (mysqli_num_rows($result_check) > 0) {
        // Update query for existing record
     echo    $query_update = "UPDATE deployment_records SET 
          date = '$apdate',
                            to_company = '$designation',
                            to_address = '$address_to',
                            location_company = '$location_company',
                            location_address = '$location',
                            person_name = '$emp_name',
                            joindate='$joiningdate',
                            deployment_date = '$date',
                            position = '$designation',
                            notes = '$subject',
                            authorized_by = '$name',
                            position_of_authorizer = 'NULL' 
                        WHERE id = '$id'";

        // Execute the update query
        if (mysqli_query($link, $query_update)) {
            print "<script>";
        print "alert('Data Updated');";
        print "self.location='dp_list.php?state=$state';";
        print "</script>";
        } else {
            echo "Error updating record: " . mysqli_error($link);
        }
    } else {
        // Insert query for new record
     echo    $query_insert = "INSERT INTO deployment_records (
                            id,date, to_company, to_address, location_company, location_address,
                            person_name, joindate, deployment_date, position, notes, authorized_by, 
                            position_of_authorizer
                        ) VALUES (
                            '$id', '$apdate','$designation', '$address_to', '$location_company', '$location',
                            '$emp_name', '$join_date','$date', '$designation', '$subject', '$name', 
                            'NULL'
                        )";

        // Execute the insert query
        if (mysqli_query($link, $query_insert)) {
            print "<script>";
        print "alert('Data Updated');";
        print "self.location='dp_list.php?state=$state';";
        print "</script>";
           
        } else {
            echo "Error creating record: " . mysqli_error($link);
        }
    }
}
?>
