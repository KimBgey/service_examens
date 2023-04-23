<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" type="text/css" href="style.css">
	<title></title>
</head>
<body>
	<h2 style="color: blue; margin-top: 60px; margin-left: 200px">Liste des Matières</h2>
<table class="table table-striped table-bordered table-hover " style="margin-top: 5px">
	<thead> 
<tr class="success">
	<th> Libellé Matière</th>
	<th> Niveau </th>
	<th> Filière</th>
	

</tr>
	</thead>
	<tbody> <tr>

	<?php 
		include'menu.php';
		include 'connexion.php';
		$sql="SELECT matiere.libMatiere, matiere.niveau, matiere.semestre, filiere.libFiliere FROM matiere 
			JOIN filiere ON matiere.id_Filiere = filiere.idFiliere ";
			$result = mysqli_query($conn, $sql);
			if (mysqli_num_rows($result) > 0) {
				while ($row = mysqli_fetch_assoc($result) ) {
				echo '<tr> <td>'.$row['libMatiere'].'</td>  
					<td>'.$row['niveau'].'</td>
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