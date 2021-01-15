<?php
// $con=mysqli_connect('localhost','root','','loan management system');
include ("/var/www/html/access/access_loan.php");
// //connection
$con = mysqli_connect($host, $user, $passwd, $db);
unset($hostname, $username, $passwd, $db);

if(!$con){
    echo'Connection error'. mysqli_connect_errno();
}

$customer_id = $_GET['cust_id'];
$loan_id = $_GET['loan_id'];

// echo "Customer ID: ".$customer_id;
// echo "Loan ID: ".$loan_id;

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Payment for loan_id: <?php echo $loan_id?></title>
</head>
<body>
    <h2>Payment Page</h2>
    <form action="#" method="POST">
        <label for="">Loan ID: </label>
        <input type="text" disabled value=<?php echo $loan_id?> name="loan_id">
        <label for="">Customer ID: </label>
        <input type="text" disabled value=<?php echo $customer_id?> name="customer_id">
        <br>
        <br>
        <input type="text" name="card_no" placeholder="CARD NO.">
        <input type="text" name="" placeholder="Name on Card">
        <label for="valid_upto">
        <select name="month">
            <option value="12">12</option>
            <option value="11">11</option>
            <option value="10">10</option>
            <option value="09">09</option>
            <option value="08">08</option>
            <option value="07">07</option>
            <option value="06">06</option>
            <option value="05">05</option>
            <option value="04">04</option>
            <option value="03">03</option>
            <option value="02">02</option>
            <option value="01">01</option>
        </select>
        <select name="year">
            <option value="2036">2036</option>
            <option value="2035">2035</option>
            <option value="2034">2034</option>
            <option value="2033">2033</option>
            <option value="2032">2032</option>
            <option value="2031">2031</option>
            <option value="2030">2030</option>
            <option value="2029">2029</option>
            <option value="2028">2028</option>
            <option value="2027">2027</option>
            <option value="2026">2026</option>
            <option value="2025">2025</option>
            <option value="2024">2024</option>
            <option value="2023">2023</option>
            <option value="2022">2022</option>
            <option value="2021">2021</option>
        </select>
        </label>
        <br><br>
        <button type="submit" name=pay_emi>Pay Now</button>
    </form>
</body>
</html>
