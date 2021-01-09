<!-- not used may be discarded soon -->
<?php
include ("/var/www/html/access/access_loan.php");
// //connection
$con = mysqli_connect($host, $user, $passwd, $db);
unset($hostname, $username, $passwd, $db);

if(!$con){
    echo'Connection error'. mysqli_connect_errno();
}

// We are getting the customer_id and loan_id
$loan_id = $_GET['loan_id'];
$customer_id = $_GET['cust_id'];
echo $loan_id;
echo "<br>";
echo $customer_id;

// we should get the information of emi and others

$sql = "SELECT * FROM loan_details WHERE loan_id=? AND customer_id=?";

$stmt = mysqli_stmt_init($con);

if(!mysqli_stmt_prepare($stmt, $sql)) {
    // checking
  header("Location: /Loan-Management-system/auth/detail_temp.php?error=sqlerrorstmt");
}
else {
mysqli_stmt_bind_param($stmt, "ss", $loan_id, $customer_id);
mysqli_stmt_execute($stmt);

$result = mysqli_stmt_get_result($stmt);
}

// finally the accountant will approve or reject and same should update in db.


// store the information;

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Details about the loan</title>
</head>
<body>
    Verification Page
    <a href="/Loan-Management-system/auth/dashboard.php">Back</a>


    <table>
      <tr>
        <td><b>LOAN ID</b></td><br>
        <td><b>CUSTOMER_ID</b></td>
        <td><b>NAME</b></td>
        <td><b>LOAN TYPE</b></td>
        <td><b>LOAN AMOUNT</b></td>
        <td><b>LOAN TENURE</b></td>
        <td><b>INTEREST RATE</b></td>
        <td><b>EMI</b></td>
        <td><b>STATUS</b></td>
        <td><b>ACTIONS</b></td>
      </tr>
      <?php
      setlocale(LC_MONETARY, 'en_IN');
        while($row = mysqli_fetch_assoc($result)) {

            
            // customer_id and loan_id exists
            $loan_amount = $row['loan_amount'];
            $interest_rate = $row['interest_rate'];
            // loan_type = n;
            $n = $row['loan_tenure'];
            $customer_name = $row['customer_name'];
            $no_of_emi = $n;


            // EMI($loan_amount, $interest_rate, $n);
            $loan_type = $row['loan_type'];
            $r = $interest_rate / 100 / 12;
            (float) $x = (float) pow((1+$r), $n);
            (int) $E = (int) $loan_amount * $r * (($x) / ($x - 1));
            setlocale(LC_MONETARY, 'en_IN');
            // $EMI = money_format('%!.0n', $E);
            $monthly_installment = round($E);
            $emis_left = $n;
            $total_loan_amount_paid = "";
            $total_due_amount = $E * $n;


            echo "<tr>";
            echo "<td>" . $row['loan_id'] . "</td>";
            echo "<td>" . $row['customer_id'] . "</td>";
            echo "<td>" . $row['customer_name'] . "</td>";
            echo "<td>" . $row['loan_type'] . "</td>";
            // using money_format to put the comma in digits
            echo "<td>₹ " .money_format('%!.0n', $loan_amount)."</td>";
            echo "<td>" . $row['loan_tenure'] . " Months</td>";
            echo "<td>" . $row['interest_rate'] . "</td>";
            echo "<td>" .money_format('%!.0n',$E). "</td>";
            echo "<td>" . $row['loan_status'] . "</td>";
            echo "<td>Approve</td>";
            echo "<td>Reject</td>";
            echo "</tr>";
        }

        if (isset($_POST['approve'])) {
            $SQL = "INSERT INTO `emi` (loan_id, customer_name, loan_type, loan_amount, no_of_emi, loan_tenure, interest_rate, monthly_installment, emis_left, total_loan_amount_paid, total_due_amount) VALUES (?,?,?,?,?,?,?,?,?,?,?)";

        $stmt = mysqli_stmt_init($con);
        if(!mysqli_stmt_prepare($stmt, $SQL)) {
  
            header("Location: /Loan-Management-system/auth/detail_temp.php?msg=stmterror");
            exit();
            // replace with header soon.
        }
        else {
            mysqli_stmt_bind_param($stmt, "isssssisiss", $loan_id, $customer_name, $loan_type, $loan_amount, $no_of_emi, $n, $interest_rate, $monthly_installment, $emis_left, $total_loan_amount_paid, $total_due_amount);
            mysqli_stmt_execute($stmt);
            mysqli_stmt_store_result($stmt);
            header("Location: /Loan-Management-system/auth/detail_temp.php?msg=success");
            exit();
        }
        }  
        // echo $r;
        // mysqli_stmt_close($stmt);
        // mysqli_stmt_free_result($result);
        // mysqli_close($con);
      ?>
    </table>

</body>
</html>
