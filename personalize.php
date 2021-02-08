<?php 
$user = "root";  
$password = "";  
$host = "localhost";  
$dbase = "beatricefleurs";  
$table = "personalize";  
 
 if ($_SERVER["REQUEST_METHOD"] == "POST") {
$boxtype= $_POST['boxtype'];
$size= $_POST['size'];
$colorroses= $_POST['colorroses'];
$colorbox= $_POST['colorbox']; 
$card= $_POST['card'];
  
// Connection to DBase  
$dbc= mysqli_connect($host,$user,$password, $dbase)  
or die("Unable to select database"); 
 
 
$query= "INSERT INTO $table (boxtype , size , colorroses , colorbox , card) VALUES ('$boxtype' , '$size' , '$colorroses' , '$colorbox' , '$card')"; 

 
mysqli_query ($dbc, $query) 
or die ("Error querying database"); 
 
echo 'You have succesfully personalized your box!' . '<br>'; 
echo '<input type = "button" value = "Go back" onclick="window.location = \'\personalize.html\'" />';


mysqli_close($dbc); 

} 
 
?> 