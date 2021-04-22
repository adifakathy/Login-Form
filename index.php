<?php

include("connect.php");

$username =$_POST['username'];
$password =$_POST['password'];



echo "<h2>Login Information:</h2>";
echo "Username :". $username;
echo "<br>";
echo "Password :******";
echo "<br>";




 $sql ="insert into  login values('','$username' ,  '$password')";
 
 if (mysqli_query($conn, $sql)) {
  echo "New record created successfully";
} else {
  echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}


mysqli_close($conn);
?>