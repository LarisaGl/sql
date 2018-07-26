<?php
include "config.php";
$sql='select * from books';
$res=mysqli_query ($connect, $sql);
?>

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

<table>
  <tr>
    <td><b>name</b></td>
    <td><b>author</b></td>
    <td><b>year</b></td>
    <td><b>isbn</b></td>
    <td><b>genre</b></td>
  </tr>
  <?php while ($data=mysqli_fetch_assoc ($res)) { ?>
  <tr>
    <td><?php echo $data['name']?></td>
    <td><?php echo $data['author']?></td>
    <td><?php echo $data['year']?></td>
    <td><?php echo $data['isbn']?></td>
    <td><?php echo $data['genre']?></td>
    </tr>
  <?php } ?>
</table>

</body>
</html>