<?php
$connection = mysqli_connect("127.0.0.1","root", "");
mysqli_select_db($connection, "biblioteca");
if($_POST){
	if ($_POST['Denumirea']!=='' AND $_POST['Anul editiei']>0 AND $_POST['Numarul_paginilor']!=='' AND $POST['Autorul']
			){
			if(!$connection){
			die('Connection error')
			};

			if(!$connection){
			die('Connection error');	
		};
		if(
			mysqli_query($connection,
			"UPDATE biblioteca SET `Denumirea` = '".$_POST['Denumirea']."',
					`Anul_editiei` = ".$_POST['Anul_editiei'].",
					`Numarul_paginilor` = ".$_POST['Numarul_paginilor']."',
					`Autorul` = ".$_POST['Anul_editiei']."'"

				)
		){
			echo 'Success.';
		}else{
			echo "Error: <br>" . mysqli_error($connection);
		}
	}
}
$result = mysqli_query($connection, "SELECT * FROM biblioteca WHERE id = ".$GET['id']"");
$Carti = mysqli_fetch_assoc($result);
?>

<form method="POST" action="update.php?id=<?=$_GET['id'] ?>">
	<input type="text" name="Denumirea" placeholder="Denumirea" value="<?=$Carti['Denumirea']?>">
	<input type="number" name="Anul_editiei" placeholder="Anul_editiei" value="?=$Carti['Anul_editiei']?>">
	<input type="number" name="Numarul_paginilor" placeholder="Numarul_paginilor" value="?=$Carti['Numarul_paginilor']?>">
	<input type="text" name="Autorul" placeholder="Autorul" value="?=$Carti['Autorul']?>">
	<input type="submit" name="Send" value="Send">
</form>