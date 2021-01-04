<?php
  session_start();
?>
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
</head>
<body>

<div class="header">
  <h1>LOAN MANAGEMENT</h1>
  <h4>MY ACCOUNT</h4>
</div>
<div class="navbar">
    <center><button onclick="window.location.href='http:user_home.php';" class="backbtn">
        BACK
        </button>		</center>
      </div>
    </body>
    <body>