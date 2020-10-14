<?php
error_reporting(0);
$connection = mysql_connect("127.0.0.1","root","");
mysqli_select_db($connection,"biblioteca");
$result = mysqli_query($connection, "SELECT id FROM Carti");
while ($carti = mysqli_fetch_array($result)) {
	print("id : " . $Carti['id'] . "<br>");
};
echo "<br>";
$result = mysqli_query($connection,"SELECT Denumirea,id FROM Carti");
while ($carti = mysqli_fetch_array($result)) {
	print("Denumirea : " . $Carti['Denumirea'] . "<br>");
	?>
	<a href="update.php?id=<$Carti['id']?>">Update</a>
	<?
}
?>