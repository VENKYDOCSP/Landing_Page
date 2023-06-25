<?php

 

// if (isset($_POST['submit'])) {

// print_r($_POST);
//   exit();

    
$fname = $_POST['fname'];
$lname = $_POST['lname'];
   
  $servername = "localhost";
  $username = "root";
  $password = "";
  $dbname = "test";

  // Create connection
  $conn = new mysqli($servername, $username, $password, $dbname);

  $sql = "INSERT INTO leads (fname,lname) 
             VALUES('$fname','$lname')";

  // Check connection
  if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
  }


  if (mysqli_query($conn, $sql)) {
    
    echo '<script type ="text/JavaScript">';  
    echo 'alert("Sucessfully inserted")';  
    echo '</script>';  
     
  } else {
   
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
    
  }

mysqli_close($conn);
// }