<?php 
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

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Employee System - Loan Management System</title>
</head>
<body>
<!-- STYLE -->

<style>
* {
  box-sizing: border-box;
}

/* Style the body */
body {
  font-family: Arial, Helvetica, sans-serif;
  margin: 0;
}

/* Header/logo Title */
.header {
  padding: 20px;
  text-align: center;
  background: #ADEFD1FF ;
  color: #00203FFF;
}

/* Increase the font size of the heading */
.header h1 {
  font-size: 40px;
}

.header p {
  font-size: 30px;
}
.navbar {
  overflow: hidden;
  background-color: #333;
}
.backbtn {
  background-color: #555;
  color: rgb(252, 244, 244);
  padding: 16px 20px;
  border: none;
  cursor: pointer;
  position:middle;
  opacity: 0.8;
  bottom: 23px;
  left: 28px;
  width: 280px;
  }
  backbtn:hover {
  opacity: 0.8;
}
table {
    font-family: arial, sans-serif;
    border-collapse: collapse;
    width: 100%;
}

td, th {
    border: 1px solid #dddddd;
    text-align: left;
    padding: 8px;

}

tr:nth-child(even) {
    background-color: white;
}
tr:nth-child(odd) {
    background-color:grey;
}
</style>

    <h2>Dashboard</h2>
    <?php
    if (isset($_SESSION['emp_id'])) {
        echo "<a href='/Loan-Management-system/auth/logout.php'>Logout</a>";
    }
    ?>

    <!-- Create a nav bar -->
    <br>
    <table>
      <tr>
        <td><b>LOAN ID</b></td><br>
        <td><b>CUSTOMER_ID</b></td>
        <td><b>NAME</b></td>
        <td><b>LOAN TYPE</b></td>
        <td><b>LOAN AMOUNT</b></td>
        <td><b>LOAN TENURE</b></td>
        <td><b>INTEREST RATE</b></td>
        <td><b>STATUS</b></td>
        <td><b>ACTIONS</b></td>
      </tr>
      <?php
        $sql = "SELECT * FROM loan_details";

        $stmt = mysqli_stmt_init($con);

        // connection verify
        if(!mysqli_stmt_prepare($stmt, $sql)) {
            // checking
        header("Location: /Loan-Management-system/auth/dashboard.php?error=sqlerrorstmt");
        }
        else {
            mysqli_stmt_bind_param($stmt);
            mysqli_stmt_execute($stmt);

            $result = mysqli_stmt_get_result($stmt); 
        }

      setlocale(LC_MONETARY, 'en_IN');
        while($row = mysqli_fetch_assoc($result)) {
            echo "<tr>";
            echo "<td>" . $row['loan_id'] . "</td>";
            echo "<td>" . $row['customer_id'] . "</td>";
            echo "<td>" . $row['customer_name'] . "</td>";
            echo "<td>" . $row['loan_type'] . "</td>";
            // using money_format to put the comma in digits
            echo "<td>₹ " .money_format('%!.0n', $row['loan_amount'])."</td>";
            echo "<td>" . $row['loan_tenure'] . " Months</td>";
            echo "<td>" . $row['interest_rate'] . "</td>";
            echo "<td>" . $row['loan_status'] . "</td>";
            echo "<td><a href='/Loan-Management-system/auth/detail_temp.php?loan_id=".$row['loan_id']."&cust_id=".$row['customer_id']."'>View</a></td>";
            echo "</tr>";
        }



        mysqli_stmt_close($stmt);
        mysqli_stmt_free_result($result);
        mysqli_close($con);
      ?>
      
    </table>

</body>
</html>