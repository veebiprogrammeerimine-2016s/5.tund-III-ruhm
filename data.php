<?php 
	// et saada ligi sessioonile
	require("functions.php");
	
	//ei ole sisseloginud, suunan login lehele
	if(!isset ($_SESSION["userId"])) {
		header("Location: login.php");
	}
	
	
	//kas kasutaja tahab välja logida
	// kas aadressireal on logout olemas
	if (isset($_GET["logout"])) {
		
		session_destroy();
		
		header("Location: login.php");
		
	}
	
	

?>

<h1>Data</h1>
<p>
	Tere tulemast <?=$_SESSION["userEmail"];?>!
	<a href="?logout=1">Logi välja</a>
</p>
<h2>Märkmed</h2>
<form method="POST">
			
	<label>Märkus</label><br>
	<input name="note" type="text">
	
	<br><br>
	
	<label>Värv</label><br>
	<input name="color" type="color">
				
	<br><br>
	
	<input type="submit">

</form>
