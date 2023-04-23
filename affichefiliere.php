<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" type="text/css" href="style.css">
	<title></title>
</head>
<body>
		<h2 style="color: blue; margin-top: 80px; margin-left: 200px">Liste des Filières</h2>
<table class="table table-striped table-bordered table-hover " style="margin-top: 20px">
	<thead> 
<tr class="success">
	<th> ID Filière</th>
	<th> Libellé Filière</th>
	
	

</tr>
	</thead>
	<tbody> <tr>

	<?php 
		include'menu.php';
		include 'connexion.php';
		$sql="SELECT* FROM filiere ";
			$result = mysqli_query($conn, $sql);
			if (mysqli_num_rows($result) > 0) {
				while ($row = mysqli_fetch_assoc($result) ) {
				echo '<tr> <td>'.$row['idFiliere'].'</td>  
					<td>'.$row['libFiliere'].'</td>
				  </tr>';					
					
				}

			} 
			else{
				echo "0 resultat";
			}
		mysqli_close($conn);
	?>
</tr></tbody>
</body>
</html>