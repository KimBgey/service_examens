<!DOCTYPE html>
<html>
<head>
	<title></title>
		<link rel="stylesheet" type="text/css" href="dist/css/bootstrap.css">
</head>
<body>
	<?php 
$pdo = new PDO('mysql:host=localhost; dbname=serviceexamen;charset=utf8', 'root', '');
	 ?>
		
		<?php 
		
		if (isset($_POST['voir'])) {
			echo "Bonjour je suis là";
			$idfil= $_POST['idfil'];
			$niv= $_POST['niv'];
			echo "$idfil";
			echo "$niv"; ?>

			<table  class="table table-striped table-bordered table-hover " style="margin-top: 60px">
            <thead>
			<tr>
				<?php 		
				$reponse = $pdo->query("SELECT libFiliere FROM filiere WHERE idFiliere = '$idfil' ");
			while ($donnees = $reponse->fetch()) {
				
			 ?>
				<th colspan="11" align="center"> <?php echo $donnees['libFiliere']; ?> </th>
			<?php } ?>
			</tr>
			<tr>
				<th rowspan="2" align="center"> Nom </th>
				<th  rowspan="2" align="center"> Prenom </th>
				<?php 
			$reponse = $pdo->query("SELECT libMatiere FROM matiere WHERE id_Filiere = '$idfil' AND niveau = '$niv' ");
			while ($donnees = $reponse->fetch()) {
				
			 ?>
				<th colspan="3"  align="center"> <?php echo $donnees['libMatiere']; ?> </th>
				<?php } ?>
				
			</tr>
			<tr>
				<td> Controle  </td>
				<td colspan="2" align="center">Examen</td>
				<td align="center">Controle</td>
				<td colspan="2" align="center">Examen</td>
				<td colspan="2" align="center">Controle</td>
                <td align="center">Examen</td>
			</tr>
			<?php  
			$repon = $pdo->query("SELECT * FROM etudiant WHERE  id_filiere = '$idfil' AND niveauEtudiant = '$niv' ");
			while ($donnee = $repon->fetch()) {
			?>
			<?php
				$sql = "SELECT *
        FROM etudiant
        INNER JOIN notes ON etudiant.idEtudiant = notes.id_Etudiant
        INNER JOIN matiere ON notes.id_Matiere = matiere.idMatiere 
        WHERE etudiant.id_filiere = '$idfil' AND etudiant.niveauEtudiant = '$niv' ";
 		$stmt = $pdo->query($sql);
 		$etudiant_data = array();
$notes_data = array();
$matiere_data = array();
while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
    // Stockage des données dans le tableau associatif correspondant à la table
    if (isset($row['idEtudiant'])) {
        $etudiant_data[] = $row;
    } 
} ?>
			<tr>
				<td> <?php echo $donnee['nomEtudiant'] ?></td>
				<td align="center"> <?php echo $donnee['prenomEtudiant'] ?></td>
<?php  				
foreach ($etudiant_data as $row) {

				 ?>
				<td colspan="1" align="center"> <?php echo $row['note_controle_continue'] ?></td>
				<td colspan="2" align="center"><?php echo $row['note_examen'] ?></td>
				<?php  } ?>
			</tr>
			<?php } ?>
		</thead>
	</table>	<?php  

			// Connexion à la base de données


// Requête avec jointure de trois tables
$sql = "SELECT *
        FROM etudiant
        LEFT JOIN notes ON etudiant.idEtudiant = notes.id_Etudiant
        LEFT JOIN matiere ON notes.id_Matiere = matiere.idMatiere 
        WHERE etudiant.id_filiere = '$idfil' AND etudiant.niveauEtudiant = '$niv' ";

// Exécution de la requête
$stmt = $pdo->query($sql);

// Initialisation des tableaux associatifs
$etudiant_data = array();
$notes_data = array();
$matiere_data = array();

// Boucle sur les résultats de la requête
while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
    // Stockage des données dans le tableau associatif correspondant à la table
    if (isset($row['idEtudiant'])) {
        $etudiant_data[] = $row;
    } 
}
?>
// Affichage des données de chaque tableau associatif dans un tableau HTML

 <?php  
foreach ($etudiant_data as $row) { ?>
    
   <?php  
    echo $row['note_controle_continue'];
}
?>
  <?php  


}



		
		?>


</body>
</html>