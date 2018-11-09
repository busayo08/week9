<?php
 define ("DB_HOST", "localhost"); // set database host

 define ("DB_USER", "root"); // set database user

 define ("DB_PASS",""); // set database password

 define ("DB_NAME","sign_up_dufuna"); // set database name

 $link = mysqli_connect(DB_HOST, DB_USER, DB_PASS,DB_NAME) or die("Couldn't make connection.");

 if(isset($_POST['submit'])){
$firstname = $_POST['firstname']; 
$lastname = $_POST['lastname'];
$email = $_POST['email'];
$pass = $_POST['pass'];
$phone = $_POST['phone'];
$gender = $_POST['gender'];
$country = $_POST['country'];
$sql = "INSERT INTO user (firstname, lastname, email, pass, phone, gender, country)       
VALUES ('$firstname', '$lastname', '$email', '$pass', '$phone', '$gender', '$country')";   
 $result60 = mysqli_query($link, $sql) or die ("Couldn't execute sql");
 if ($result60) {     echo "Registeration Successful"; } 
}
 
?>