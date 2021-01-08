<?php

session_start();

// $con=mysqli_connect('localhost','root','','loan management system');
include ("/var/www/html/access/access_loan.php");
  // //connection
  $db = "loan_management_system";
  $con = mysqli_connect($host, $user, $passwd, $db);
  unset($hostname, $username, $passwd, $db);
if(!$con){
    echo'Connection error'. mysqli_connect_errno();

}

if(isset($_POST['submit']))
{
    $customer_name = $_SESSION['name'];
    $customer_id = $_SESSION['customer_id'];

    $loan_type=$_POST["loantype"];
    $loan_amount=$_POST["loanamount"];
    $loan_tenure=$_POST["loantenure"];
    $interest_rate = $_POST['interestrate'];

    echo $customer_id;
    echo "<br>";
    echo $customer_name;
    echo "<br>";
    echo $loan_type;
    echo "<br>";
    echo $loan_amount;
    echo "<br>";
    echo $loan_tenure;
    echo "<br>";

    function EMI($loan_amount, $interest_rate, $n) {
            
        $r = $interest_rate / 100 / 12;
        echo "interest r = ".$r;
        echo "<br>";
        (float) $x = (float) pow((1+$r), $n);
        echo "x = ".$x;
        echo "<br>";
        (int) $E = (int) $loan_amount * $r * (($x) / ($x - 1));
        echo "E = ".$E;
        echo "<br>";
        setlocale(LC_MONETARY, 'en_IN');
        $EMI = money_format('%!.0n', $E);
        echo "EMI: ".$EMI;
        echo "<br>";
        // total repayable amount.
        $PAYABLE = money_format('%!.0n', round($E * $n));
        echo "PAYABLE: ".$PAYABLE;
        echo "<br>";
    }

    if ($loan_type === "HOME LOAN") {
    
        // check if amount is > then 5L
        if ($loan_amount >= 500000) {

            // calculate interest rate.
            // if loan is more less than 10L and more than great than 5L
            if ($loan_amount >= 500000 && $loan_amount < 1000000) {
                echo "SCHEME 1";
                // check for tenuare and set the interest rate for year.
                if ($loan_tenure === "24") {
                    $n = $loan_tenure;
                    // interest for 24 months
                    $interest_rate = 6.75;
                    echo "I = ".$interest_rate;
                    echo "<br>";
                    EMI($loan_amount, $interest_rate, $n);
                }
                elseif ($loan_tenure === "60") {                  
                    $n = $loan_tenure;
                    // interest for 60 months
                    $interest_rate = 10.75;
                    echo "I = ".$interest_rate;
                    echo "<br>";
                    EMI($loan_amount, $interest_rate, $n);
                }
                elseif ($loan_tenure === "84") {
                    // interest for 84 months
                    $interest_rate = 13.5;
                    echo "I = ".$interest_rate;
                    echo "<br>";
                    $n = $loan_tenure;
                    EMI($loan_amount, $interest_rate, $n);
                }
                else {
                    echo "Something wrong.";
                }
            }
            elseif ($loan_amount >= 1000000 && $loan_amount < 5000000) {
                echo "SCHEME 2";
                if ($loan_tenure === "24") {
                    $n = $loan_tenure;
                    // interest for 24 months
                    $interest_rate = 7.5;
                    echo "I = ".$interest_rate;
                    echo "<br>";
                    EMI($loan_amount, $interest_rate, $n);
                }
                elseif ($loan_tenure === "60") {                 
                    $n = $loan_tenure;
                    // interest for 60 months
                    $interest_rate = 11.75;
                    echo "I = ".$interest_rate;
                    echo "<br>";
                    EMI($loan_amount, $interest_rate, $n);
                }
                elseif ($loan_tenure === "84") {
                    // interest for 84 months
                    $interest_rate = 14.5;
                    $n = $loan_tenure;
                    echo "I = ".$interest_rate;
                    echo "<br>";
                    EMI($loan_amount, $interest_rate, $n);
                }
                else {
                    echo "Something wrong.";
                }
            }
            elseif ($loan_amount >=5000000) {
                echo "SCHEME 3";
                if ($loan_tenure === "24") {
                    $n = $loan_tenure;
                    // interest for 24 months
                    $interest_rate = 7.8;
                    echo "I = ".$interest_rate;
                    echo "<br>";
                    EMI($loan_amount, $interest_rate, $n);
                }
                elseif ($loan_tenure === "60") {                 
                    $n = $loan_tenure;
                    // interest for 60 months
                    $interest_rate = 11.90;
                    echo "I = ".$interest_rate;
                    echo "<br>";
                    EMI($loan_amount, $interest_rate, $n);
                }
                elseif ($loan_tenure === "84") {
                    // interest for 84 months
                    $interest_rate = 14.8;
                    $n = $loan_tenure;
                    echo "I = ".$interest_rate;
                    echo "<br>";
                    EMI($loan_amount, $interest_rate, $n);
                }
                else {
                    echo "Something wrong.";
                }
            }   
        }
        else {
            echo "Not eligible loan amount should be more than 5L to 2CR";
            echo '<a href="../user_home.php">Home</a>';
        }
    }

    // SQL

}

?>