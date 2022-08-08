<?php
include_once("config.php");


$result = mysqli_query($mysqli, "SELECT * FROM users ORDER BY id DESC");

?>

<html>
<head>	
	<title>Homepage</title>
</head>

<body>
<a href="add.html">Add New Data</a><br/><br/>

	<table width='80%'>

	<tr>
		<td>nombre</td>
		<td>apellido</td>
		<td>edad</td>
		<td>ciudad</td>
		<td>fruta_favorita</td>
		<td>verdura_favorita</td>
		<td>n_personas_viven</td>
		<td>Update</td>
	</tr>
	<?php 
	while ($res = mysqli_fetch_array($result)) { 		
		echo "<tr>";
		echo "<td>".$res['nombre']."</td>";
		echo "<td>".$res['apellido']."</td>";
		echo "<td>".$res['edad']."</td>";	
		echo "<td>".$res['ciudad']."</td>";
		echo "<td>".$res['fruta_favorita']."</td>";
		echo "<td>".$res['verdura_favorita']."</td>";	
		echo "<td>".$res['n_personas_viven']."</td>";	
		echo "<td><a href=\"edit.php?id=$res[id]\">Edit</a> | <a href=\"delete.php?id=$res[id]\" onClick=\"return confirm('Are you sure you want to delete?')\">Delete</a></td>";	
		echo "</tr>";	
	}
	?>
	</table>
</body>
</html>
