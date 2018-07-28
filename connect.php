<?php
  $servername="localhost";
  $username="root";
  $password="";
  $database="userdetail";

  //create connection

  $conn=new mysqli($servername,$username,$password,$database);

  // connection checking

  if (!$conn) 
  {
     die("Connection failed: ");
  } 
else
{
   echo "connection Successful" ;
}
?>
