<?php

$customer_id = $_GET['cust_id'];
$loan_id = $_GET['loan_id'];

// echo $customer_id;
// echo "<br>";
// echo $loan_id;

// update the status on loan as rejected.
session_start();
if (empty($_SESSION['emp_id'])) {
    header("Location: /Loan-Management-system/auth/index.php?AccessDenied");
    exit();
}

include ("/var/www/html/access/access_loan.php");
// //connection
$con = mysqli_connect($host, $user, $passwd, $db);
unset($hostname, $username, $passwd, $db);

if(!$con){
    echo'Connection error'. mysqli_connect_errno();
}


// $SQL
$sql = "UPDATE loan_details SET loan_status=? WHERE loan_id=? AND customer_id=?";

$stmt = mysqli_stmt_init($con);
if(!mysqli_stmt_prepare($stmt, $sql)) {

    header("Location: /Loan-Management-system/auth/dashboard.php?msg=stmterror_reject_loan");
    exit();
    // replace with header soon.
}
else {
    $loan_status_upd = "Rejected";
    mysqli_stmt_bind_param($stmt, "sii", $loan_status_upd, $loan_id, $customer_id);
    mysqli_stmt_execute($stmt);
    mysqli_stmt_store_result($stmt);
    // close them
    header("Location: /Loan-Management-system/auth/dashboard.php?loan_rejection=success");
exit();

mysqli_stmt_close($stmt);
mysqli_stmt_free_result($result);
mysqli_close($con);
}
