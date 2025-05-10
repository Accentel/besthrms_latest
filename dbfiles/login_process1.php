<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);
require_once 'dbconnection/connection.php';
session_start(); // Move session_start() to the top of the file

if($_SERVER["REQUEST_METHOD"] == "POST")
{
    // username and password sent from Form
    $myusername = addslashes($_POST['uname']);
    $mypassword = addslashes($_POST['pwd']);
    $password = md5($mypassword);

    // First, check in hrms_login table
    $sql = "SELECT user, pwd FROM hrms_login WHERE user='$myusername' and pwd='$password'";
    $result = mysqli_query($link, $sql) or die(mysqli_error($link));
    $row = mysqli_fetch_array($result);
    $count = mysqli_num_rows($result);
    $user = $row['user'];

    if($count == 1)
    {
        $_SESSION['user'] = $user; // Store 'user' in session

        // Redirect to dashboard.php
        header('Location: dashboard.php');
        exit; // Ensure that script execution stops after redirection
    }
    else
    {
        // If credentials not found in hrms_login, check in emp table
        $sql_emp = "SELECT username, password FROM emp WHERE username='$myusername' and password='$password'";
        $result_emp = mysqli_query($link, $sql_emp) or die(mysqli_error($link));
        $row_emp = mysqli_fetch_array($result_emp);
        $count_emp = mysqli_num_rows($result_emp);
        $user_emp = $row_emp['username']; // Use 'username' instead of 'uname'

        if($count_emp == 1)
        {
            $_SESSION['username'] = $user_emp; // Store 'username' in session

            // Alert message using JavaScript
            echo "<script>alert('You are In');</script>";

            // Redirect to dashboard.php
            header('Location: dashboard.php');
            exit; // Ensure that script execution stops after redirection
        }
        else
        {
            // Redirect back to index.php with an error message
            $_SESSION['login_error'] = "Invalid username or password";
            header('Location: index.php');
            exit; // Ensure that script execution stops after redirection
        }
    }
}
?>
