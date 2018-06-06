<!DOCTYPE html>
<html>
<head>
	<title>BOOKS</title>
	<meta charset="UTF-8">
	<style>
   		table, tr, td { 
    	border: 1px solid black;
    	text-align: center;
   		}
 	</style>
</head>
<body>

<?php

include "config.php";

$sql='select * from books';

$res=mysqli_query ($connect, $sql);

echo "<table>";
echo "<tr>";
	echo "<td>"."name"."</td>";
	echo "<td>"."author"."</td>";
	echo "<td>"."year"."</td>";
	echo "<td>"."isbn"."</td>";
	echo "<td>"."genre"."</td>";
echo "</tr>";

while ($data=mysqli_fetch_assoc ($res)) {
	echo "<tr>";
	echo "<td>".$data['name']."</td>";
	echo "<td>".$data['author']."</td>";
	echo "<td>".$data['year']."</td>";
	echo "<td>".$data['isbn']."</td>";
	echo "<td>".$data['genre']."</td>";
	echo "</tr>";
}

echo "</table>";
?>


</body>
</html>