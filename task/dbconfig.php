<?php

$conn=mysqli_connect("localhost","root","","studata");

if(!$conn)
{
die("Connection failed: " . mysqli_connect_error());
}else{
  // echo" connected";
}

?>