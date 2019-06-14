<!DOCTYPE HTML>
<html>
<head>
</head>
<body>
  <h2> Task 1 - Hello World use GET method </h2>
  <form method="get"  onsubmit=" return myFunction() " action="Week8Lab_Task1_MarconiFonseca.php">
    First Name: <input type="text" name="firstName" >
    <br><br>
    Last Name: <input type="text" name="lastName" >
    <br><br>
    <input type="submit" name="submit" >
    <br><br>
  </form>

  <?php

  $firstName = isset( $_GET["firstName"]) ? $_GET["firstName"] : "";
  $lastName = isset( $_GET["lastName"]) ? $_GET["lastName"] :"" ;

  echo  "Welcome to this page " . $firstName . " " . $lastName . "" ;

  if(isset($_GET['submit'])){
    if( empty($firstName) and empty($lastName) )  {
      echo "Stranger";
    }
    else if ( $firstName and empty($lastName) )  {
      echo " No last name";
    }
    else if ( $lastName and empty($firstName) )  {
      echo " No first name";
    }
    else {
      return true;
    }
  }

  ?>
  

</body>
</html>
