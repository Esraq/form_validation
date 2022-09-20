<?php

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "diu";


// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}






 $firstname=$_POST['firstname'];
 $lastname=$_POST['lastname'];
 $username=$_POST['username'];
 $pword=$_POST['password'];
 $email=$_POST['email'];
 $agree=$_POST['agree'];

  if($firstname==""){
  
    echo "Enter firstname";
  
  }
  else if( $lastname==""){
	  
	  
	   echo "Enter lastname";
	  
  }
   else if( $username==""){
	  
	  
	   echo "Enter usename";
	  
  }
 else if($pword=="")
 {
	 
	 echo "Enter password";
	 
 }
 else if($agree==""){
	 
	 
		 
		  echo "Click Agree";
		 
	 }	 
else{
	
	
	
	
$sql = "INSERT INTO registration (firstname,lastname,username,password,email,agree)
VALUES ('$firstname','$lastname','$username','$pword','$email','$agree')";
	
if ($conn->query($sql) === TRUE) {
  echo "New record created successfully";
} else {
  echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
	
	
	
	
}
	 

?>
