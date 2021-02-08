<?php 
$user = "root";  
$password = "";  
$host = "localhost";  
$dbase = "beatricefleurs";  
$table = "contact";  
 
 if ($_SERVER["REQUEST_METHOD"] == "POST") {
$fname= $_POST['fname'];
$lname= $_POST['lname'];
$email= $_POST['email'];
$subject= $_POST['subject']; 
$message= $_POST['message'];
  
// Connection to DBase  
$dbc= mysqli_connect($host,$user,$password, $dbase)  
or die("Unable to select database"); 
 
 
$query= "INSERT INTO $table (fname, lname, email, subject, message) VALUES ('$fname' , '$lname' , '$email' , '$subject' , '$message')"; 

 
mysqli_query ($dbc, $query) 
or die ("Error querying database"); 
 
echo 'Your message was send.' . '<br>'; 
echo '<input type = "button" value = "Go back" onclick="window.location = \'\contact.html\'" />';


mysqli_close($dbc); 

} 
 
?> 