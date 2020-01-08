<?php

$link = mysqli_connect("localhost", "root", "", "bd_football_scores");
 $nOm =$_POST['name'];
$lAstName = $_POST['lastname'];
$eQuipe = $_POST['equipe'];
$eMail =$_POST['email'];
$pAssword =$_POST['password'];
// Check connection
if($link === false){
    die("ERROR: Could not connect. " . mysqli_connect_error());
}
 
// Attempt insert query execution
$sql = "INSERT INTO `tbl_users`(`Id`, `Name`, `Last_name`, `Equipe`, `Email`, `Password`)  VALUES (NULL, '$nOm', '$lAstName', '$eQuipe', '$eMail', '$pAssword')";
if(mysqli_query($link, $sql)){

	// la redirection vers la page login !!!!
    header('Location: http://www.Le_lien de_la_page_login.com');
  exit();
} else{
    echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);
}
 
// Close connection
mysqli_close($link);
?>