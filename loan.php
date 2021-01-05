<!DOCTYPE html>
<html lang="en">
<head>
<title>Page Title</title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
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
.header h4 {
  font-size: 20px;
}
 

/* Style the top navigation bar */
.navbar {
  overflow: hidden;
  background-color: #333;
}

/* Style the navigation bar links */
.viewbtn {
  background-color: #555;
  color: rgb(241, 234, 234);
  padding: 16px 20px;
  border: none;
  cursor: pointer;
  opacity: 0.8;
  bottom: 23px;
  left: 28px;
  width: 280px;
}

 
/* Footer */
.footer {
  padding: 20px;
  text-align: center;
  background: #ddd;
}

/* Responsive layout - when the screen is less than 700px wide, make the two columns stack on top of each other instead of next to each other */
@media screen and (max-width: 700px) {
  .row {   
    flex-direction: column;
  }
}

/* Responsive layout - when the screen is less than 400px wide, make the navigation links stack on top of each other instead of next to each other */
@media screen and (max-width: 400px) {
  .view details {
    float: none;
    width: 100%;
  }
}
</style>
</head>
<body>

<div class="header">
  <h1>LOAN MANAGEMENT</h1>
  <p><h4>LOAN :</h4></p>
 
</div>

<div class="navbar">

<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>
body {font-family: Arial, Helvetica, sans-serif;}
* {box-sizing: border-box;}

/* Button used to open the contact form - fixed at the bottom of the page */
.open-button {
  background-color: #555;
  color: white;
  padding: 16px 20px;
  border: none;
  cursor: pointer;
  opacity: 0.8;
  position:center;
  bottom: 23px;
  left: 28px;
  width: 280px;
}
/* The popup form - hidden by default */
.form-popup {
  width : px ;
  height: 500px;
  display: none;
  position: absolute;
  bottom:0;
  left: 15px;
  border: 3px solid #f1f1f1;
  z-index: 9;
}

/* Add styles to the form container */
.form-container {
  max-width: 100px 300px;
  padding: 50px;
  background-color: white;
}

/* Full-width input fields */
.form-container input[type=text], .form-container input[type=number],.form-container input[type=months] {
    width: 100%;
  padding: 12px 20px;
  margin: 8px 0;
  display: inline-block;
  border: 1px solid #ccc;
  box-sizing: border-box;
}

/* When the inputs get focus, do something */
.form-container input[type=text]:focus, .form-container input[type=password]:focus {
  background-color: #ddd;
  outline: none;
}

/* Set a style for the submit/login button */
.form-container .btn {
  background-color: #4CAF50;
  color: white;
  padding: 16px 20px;
  border: none;
  cursor: pointer;
  width: 100%;
  margin-bottom:10px;
  opacity: 0.8;
}

/* Add a red background color to the cancel button */
.form-container .cancel {
  background-color: red;
}

/* Add some hover effects to buttons */
.form-container .btn:hover, .open-button:hover, .submitbtn:hover ,.resetbtn:hover ,.viewbtn:hover , .backbtn:hover {
  opacity: 1;
}
.submitbtn {
    background-color: #601c8d;
  color: white;
  padding: 16px 20px;
  border: none;
  cursor: pointer;
  width: 100%;
  margin-bottom:10px;
  opacity: 0.8;
}
button:hover {
  opacity: 0.8;
}
.resetbtn {
    background-color: #0c0c0c;
  color: white;
  padding: 16px 20px;
  border: none;
  cursor: pointer;
  width: 100%;
  margin-bottom:10px;
  opacity: 0.8;
  
}
.backbtn {
  background-color: #555;
  color: rgb(241, 234, 234);
  padding: 16px 20px;
  border: none;
  cursor: pointer;
  opacity: 0.8;
  bottom: 23px;
  left: 28px;
  width: 280px;
  }
</style>
</head>
<body>

<button class="open-button" onclick="openForm()">APPLY FOR LOAN</button>

<div class="form-popup" id="myForm">
  <form action="test.php" class="form-container"  method="post">
    <h1> ENTER LOAN DETAILS :</h1>
     <label for="loan type"><b>LOAN TYPE</b></label>
    <select id="loantype" name="loantype">
      <option value="#" disabled selected>Choose</option>
      <option value="home_loan">Home Loan</option>
      <option value="personal_loan">Personal Loan</option>
      <option value="vehicle_loan">Vehicle Loan</option>
    </select>
     <br>
     
     <label for="loan amount"><b>LOAN AMOUNT</b></label>
     <input type="number" maxlength = "10" placeholder="Enter loan amount" name="loanamount" required>
     <br>
     
     <label for="loan tenure"><b>LOAN TENURE</b></label>
     <!-- <input type="months" maxlength = "50" placeholder="Enter loan tenure" name="loantenure" required> -->
     <select id="loantenure" name="loantenure">
      <option value="#" disabled selected>Select</option>
      <option value="24">24 Months</option>
      <option value="60">60 Months</option>
      <option value="84">84 Months</option>
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
    <button type="button" class="btn cancel" onclick="closeForm()">CLOSE</button>
  </form>
</div>

<script>
function openForm() {
  document.getElementById("myForm").style.display = "block";
}

function closeForm() {
  document.getElementById("myForm").style.display = "none";
}
</script>

</body>
<button class="open-button" onclick="openForm1()">TYPES OF LOAN</button>

<div class="form-popup" id="myForm1">
  <form action="/action_page.php" class="form-container"  method="post">
    <h1>LOANS  INFORMATION</h1>
<P>
<u> 1.HOME LOAN:</u>
<BR>
   Home loans are a secured mode of finance, that give you the funds to  buy or build the home of your choice. The following are the type of home loans available in India:
   <br>
<u>LAND PURCHASE LOAN</u>: Purchase land for your new home
<br>
<u>Home construction loan</u>: Build a new home
<br>
<u>Home loan balance transfer</u>:Transfer the balance of your existing home loan at a lower interest rate
<br>
<u>Top up loan</u>: Can be used to renovate an existing home or have the latest interiors for your new home
<br>
<br>

Note that while buying a new property/home, the lender requires you make a down payment of at least 10-20% of the property’s value. The rest is financed. The loan amount disbursed depends on your income, its stability and current liabilities among others.
   
<br>
<br>
2.<u> PERSONAL LOAN</u>:
<br>
Offering an instant flush of liquidity, a personal loan is one of the most popular types of unsecured loans. However, since a personal loan is an unsecured mode of finance, the interest rates are higher compared to secured loans. A good credit score along with high and stable income ensures you can avail this loan at a competitive rate of interest. Personal loans can be used for the following purposes-<br>

- Manage all expenses of a family wedding<br>
- Pay for a vacation or an international trip<br>
- Finance your home renovation project<br>
- Fund the cost of your child’s higher education<br>
- Consolidate all your debts into a single loan<br>
- Meet unexpected/ unplanned/ urgent expenses<br>

<br>
<br>
3.<u>VEHICAL LOAN</u>:
<br>
<u>PURPOSE</u>:<br>
Loan can be availed by individuals for personal use:<br>
* Purchase of New 4-Wheeler<br>
* Purchase of Old 4-Wheeler, not older than 3 years<br>
* Purchase of a New 2-Wheeler<br>

Loan can also be availed by Companies / Firms for professional use i.e. purchase of vehicle for usage by their Directors / employees.
Takeover of four-wheeler loan from other Bank/FI for existing Corporate / Retail Borrower.**
<br><br>
<u>ELIGIBILITY</u>:<br>
Resident Indian citizen and Non-Resident Indians (NRIs).<br>
Minimum age - 18 years and maximum age - 75 years.<br>
Individual, either singly or jointly with family members viz. father, mother, son, spouse or daughter (unmarried) as co-applicants.<br>
Companies / Firms for purchase of vehicle for usage by their Directors/employees**<br><br>
<u>QUANTUM OF LOAN</u>
<br><br>
Minimum – No ceiling<br>
Maximum - as under:<br>
New 4-wheeler - No ceiling<br>
Old 4-wheelers (not older than 3 years) - Rs.20 Lakh<br>
New 2-wheeler - Rs.10 Lakh<br>
MARGIN, I.E. YOUR SHARE<br>
15% of on-road price of new 4 wheeler<br>
25% of on road price of 2 wheeler<br>
40% of valuation cost of old 4 wheeler<br>
<br>
Note: 5% concession in margin (for purchase of new vehicle only) applicable for salaried individuals having salary account with us.<br><br>

<u>REPAYMENT</u><br><br>
New 4 Wheeler - 84 months<br>
New 2 Wheeler - 36 months<br>
Old 4 Wheeler - 60 months<br><br>
<u>MORATORIUM</u><br><br>
No moratorium permitted under the scheme.<br>
<u>RATE OF INTEREST</u><br><br>
Please click here to know our latest interest rates
<u>PREPAYMENT PENALTY</u><br><br>
There is NO prepayment penalty if loan adjusted from own verifiable source.
<u>SECURITY</u><br><br>
Hypothecation of vehicle purchased out of Bank's finance
Bank's lien to be noted with the Road Transport authorities<br>
<u>GUARANTEE</u><br>
No guarantee required for individual borrowers with CIBIL score of 700 and above.<br>
Guarantee of a local resident Indian having means equivalent to loan amount, is to be provided by the NRI applicant.<br>
In case of companies guarantee of the promoter/director is required.<br>
In case of partnership firm, guarantee of all the partners is required.<br><br>
**Conditions apply.<br>
**Contact our nearest branch for further details**   
<br>
</P>
    <button type="button" class="btn cancel" onclick="closeForm1()">CLOSE</button>
  </form>
</div>

<script>
function openForm1() {
  document.getElementById("myForm1").style.display = "block";
}

function closeForm1() {
  document.getElementById("myForm1").style.display = "none";
}
</script>

    <button onclick="window.location.href='http:view_loan_details.php';" class="viewbtn">VIEW LOAN DETAILS</button>
    <button onclick="window.location.href='http:user_home.php';" class="backbtn">
      BACK
      </button>
</div>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>
* {box-sizing: border-box;}
body {font-family: Verdana, sans-serif;}
.mySlides {display: none;}
img {vertical-align: middle;}

/* Slideshow container */
.slideshow-container {
  max-width: 1000px;
  position: relative;
  margin: auto;
}

/* Caption text */
.text {
  color: #f2f2f2;
  font-size: 15px;
  padding: 8px 12px;
  position: absolute;
  bottom: 8px;
  width: 100%;
  text-align: center;
}

/* Number text (1/3 etc) */
.numbertext {
  color: #f2f2f2;
  font-size: 12px;
  padding: 8px 12px;
  position: absolute;
  top: 0;
}

/* The dots/bullets/indicators */
.dot {
  height: 15px;
  width: 15px;
  margin: 0 2px;
  background-color: #bbb;
  border-radius: 50%;
  display: inline-block;
  transition: background-color 0.6s ease;
}

.active {
  background-color: #717171;
}

/* Fading animation */
.fade {
  -webkit-animation-name: fade;
  -webkit-animation-duration: 1.5s;
  animation-name: fade;
  animation-duration: 1.5s;
}

@-webkit-keyframes fade {
  from {opacity: .4} 
  to {opacity: 1}
}

@keyframes fade {
  from {opacity: .4} 
  to {opacity: 1}
}

/* On smaller screens, decrease text size */
@media only screen and (max-width: 300px) {
  .text {font-size: 11px}
}
</style>
</head>
<body>

<div class="slideshow-container">

<div class="mySlides fade">
  <div class="numbertext">1 / 3</div>
  <img src="image/L1.png" style="width:100%">
  <div class="text">Caption Text</div>
</div>

<div class="mySlides fade">
  <div class="numbertext">2 / 3</div>
  <img src="image/L2.jpg" style="width:100%">
  <div class="text">Caption Two</div>
</div>

<div class="mySlides fade">
  <div class="numbertext">3 / 3</div>
  <img src="image/L3.jpg" style="width:100%">
  <div class="text">Caption Three</div>
</div>

</div>
<br>

<div style="text-align:center">
  <span class="dot"></span> 
  <span class="dot"></span> 
  <span class="dot"></span> 
</div>

<script>
var slideIndex = 0;
showSlides();

function showSlides() {
  var i;
  var slides = document.getElementsByClassName("mySlides");
  var dots = document.getElementsByClassName("dot");
  for (i = 0; i < slides.length; i++) {
    slides[i].style.display = "none";  
  }
  slideIndex++;
  if (slideIndex > slides.length) {slideIndex = 1}    
  for (i = 0; i < dots.length; i++) {
    dots[i].className = dots[i].className.replace(" active", "");
  }
  slides[slideIndex-1].style.display = "block";  
  dots[slideIndex-1].className += " active";
  setTimeout(showSlides, 2000); // Change image every 2 seconds
}
</script>

</body>
</html> 

<body>
<div class="footer">
  <h2>Footer</h2>
</div>


</body>
</html>
