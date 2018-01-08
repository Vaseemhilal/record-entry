
<?php
include_once("db_connect.php"); 
include_once("functions.php"); 
ini_set("display_errors",0);
$SERVER_PATH="http://127.0.0.1/wildadventures.com/";
?>

<html>
<head>
  <title>
    PHP Marathon project
  </title>
  <!--I deleted some fundamental and basic starting tags -->
  <link href="../plugins/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <script src="../js/jquery/jquery.min.js"></script>
  <script src="../plugins/bootstrap/js/bootstrap.min.js"></script>
  <script src="../js/js/bootstrapValidator.min.js"></script>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <script src="js/validation.js" type="text/javascript"></script>
  <style type="text/css">
  nav {
    list-style-type: none;
    margin: 0;
    padding: 0;
    overflow: hidden;
    background-color: #555555;
  }

  nav a {
    float: left;
  }

  nav a {
    display: block;
    color: white;
    text-align: center;
    padding: 16px;
    text-decoration: none;
    border-bottom: 3px solid #555555;
  }

  nav a:hover {
    background-color: #111111;
    border-bottom: 3px solid red;
    text-decoration: none;

  }
  .menuContainer{
    position: sticky;
    width: 100%;
    height: 65px;
    background-color: none;
    top: 0px;
    /*top: 10;*/
  }
  .menuContainer:after {
    content: "";
    display: table;
    clear: both;
  }
  .menuContainer:before {
    content: "";
    display: table;
    clear: both;
  }
  .menuNav:after {
    content: "";
    display: table;
    clear: both;
  }
  .menuNav:before {
    content: "";
    display: table;
    clear: both;
  }
  a:active {
    background-color: #4CAF50;
    border-bottom: 3px solid red;
  }
  @media screen and (max-width: 600px){
    nav a{
      width: 100%;
      height: auto;
      position: relative;
      float: none;
      padding-right: 15px;
      
    }
  }

</style>
</head>



<body style="background-color: lightblue">
  <br><br>
  <div class="menuContainer">
   <nav class="menuNav">
     <a href="student_view.php">Student</a>
     <a href="https://facebook.com/login">Staff</a>
     <a href="https://facebook.com/messenger">Salary</a>
     <a href="https://facebook.com/about">Fee</a>
     <a href="https://facebook.com/about">Logout</a>
     <a href="student_add.php" style="float: right">Add Student</a>
     <a href="#about" style="float: right">About</a>

   </nav>
 </div>
</body>
</html>

<!-- <table width="75%" border="0" align="center">
  <tr>
    <td><div align="center"><a href="student_view.php">Student</a></div></td>
    <td><div align="center">Staff</div></td>
    <td><div align="center">Salary</div></td>
    <td><div align="center">Fee</div></td>
    <td><div align="center">Logout</div></td>
  </tr>
</table> -->

<!--  <nav>
 <a href="student_view.php">Student</a>
 <a href="https://facebook.com/login">Staff</a>
 <a href="https://facebook.com/messenger">Salary</a>
 <a href="https://facebook.com/about">Fee</a>
 <a href="https://facebook.com/about">Logout</a>
</nav> -->




