<table>
	<tr> 
		<thead>
				<th rowspan="2" align="center"> Nom </th>
				<th  rowspan="2" align="center"> Prenom </th>
</tr>
</thead>
<tbody>
	<?php  
	$pdo = new PDO('mysql:host=localhost; dbname=serviceexamen;charset=utf8', 'root', '');
$repon = $pdo->query("SELECT * FROM etudiant ");
	while ($donnee = $repon->fetch()) {
			?>
	<tr>
			<td> <?php echo $donnee['nomEtudiant'] ?></td>
				<td align="center"> <?php echo $donnee['prenomEtudiant'] ?></td>
			
	</tr>

</tbody>
</table>