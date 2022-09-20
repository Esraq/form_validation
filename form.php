<?php

 $firstname=$_POST['firstname'];
 $lastname=$_POST['lastname'];
 $username=$_POST['username'];
 $password=$_POST['password'];
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
 else if($password=="")
 {
	 
	 echo "Enter password";
	 
 }
 else if($agree==""){
	 
	 
		 
		  echo "Click Agree";
		 
	 }	 
else{
	
	
	echo $firstname."<br>";
	echo $lastname."<br>";
	echo $username."<br>";
	echo $password."<br>";
	echo  $agree;
}
	 

?>