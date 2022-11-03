<?php
session_start();
if(isset($_POST['submit_form']))
{

$con = mysqli_connect("localhost","ias2020","ecell123","SUCWS");
if ($con->connect_error){
    die("Connection failed: " . $con->connect_error);
}	 

$name=mysqli_real_escape_string($con, $_POST['name']);
$email=mysqli_real_escape_string($con, $_POST['email']);
$city = mysqli_real_escape_string($con, $_POST['city']);
$contact = mysqli_real_escape_string($con, $_POST['contact']);

$_SESSION['name'] = $name;
$checkUser = "SELECT * FROM sucws_data where email = '$email'";
$result = mysqli_query($con, $checkUser);
$count = mysqli_num_rows($result);
if($count>0){
    header('LOCATION:thanksmsg.php');   
}
else{
  $sql = "INSERT INTO sucws_data (name, email, city, contact) VALUES ('$name', '$email', '$city','$contact')";
  if ($con->query($sql) === TRUE) {
   header('LOCATION:thanks.php');
 } else {
   echo "Error: " . $sql . "<br>" . $con->error;
 } 
}
}
?>
