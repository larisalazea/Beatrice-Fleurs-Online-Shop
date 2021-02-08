<?php 
$user = "root";  
$password = "";  
$host = "localhost";  
$dbase = "beatricefleurs";  
$table = "newsletter";  
 
 if ($_SERVER["REQUEST_METHOD"] == "POST") {
$email= $_POST['email']; 
  
  
// Connection to DBase  
$dbc= mysqli_connect($host,$user,$password, $dbase)  
or die("Unable to select database"); 
 
 
$query= "INSERT INTO $table (email) VALUES ('$email')"; 

 
mysqli_query ($dbc, $query) 
or die ("Error querying database"); 
 
echo 'You have been successfully added.' . '<br>'; 
echo '<input type = "button" value = "Go back" onclick="window.location = \'\index.html\'" />';


mysqli_close($dbc); 

} 
 
?> 