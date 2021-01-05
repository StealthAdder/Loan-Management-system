<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Loan</title>
</head>
<body>
<!-- create navigation here. -->
  <nav>
    <a href="/Loan-Management-system/user_home.php">Home</a>
  </nav>
<div class="form-popup" id="myForm">
  <form action="/Loan-Management-system/loan/loan.inc.create.php" class="form-container"  method="POST">
    <h1> ENTER LOAN DETAILS :</h1>
     <label for="loan type"><b>LOAN TYPE</b></label>
    <select id="loantype" name="loantype">
      <option value="#" disabled selected>Choose</option>
      <option value="HOME LOAN">Home Loan</option>
      <option value="PERSONAL LOAN">Personal Loan</option>
      <option value="VEHICLE LOAN">Vehicle Loan</option>
    </select>
     <br>
     
     <label for="loan amount"><b>LOAN AMOUNT</b></label>
     <input type="number" maxlength = "10" placeholder="Enter loan amount" name="loanamount" required>
     <br>
     
     <label for="loan tenure"><b>LOAN TENURE</b></label>
     <!-- <input type="months" maxlength = "50" placeholder="Enter loan tenure" name="loantenure" required> -->
     <select id="loantenure" name="loantenure">
      <option value="#" disabled selected>Select</option>
      <option value="24 Months">24 Months</option>
      <option value="60 Months">60 Months</option>
      <option value="84 Months">84 Months</option>
    </select>
     <br>
     
     <label for="interest rate"><b>INTEREST RATE</b></label>
     <select id="interestrate" name="interestrate">
      <option value="#" disabled selected>Select</option>
      <option value="6%">6%</option>
      <option value="7%">7%</option>
      <option value="8%">8%</option>
      <option value="9%">9%</option>
      <option value="10%">10%</option>
      <option value="11%">11%</option>
      <option value="12%">12%</option>
    </select>
     <br>
     <br>
     
     <button type="submit" class="submitbtn" name="submit">SUBMIT</button>
<button type="reset" class="resetbtn">RESET</button>
  </form>
</div>

</body>
</html>