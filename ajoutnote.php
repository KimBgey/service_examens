<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
		<?php 
		if (isset($_POST['voir'])) {
			echo "Bonjour je suis là";
			$idfil= $_POST['idfil'];
			$niv= $_POST['niv'];
			echo "$idfil";
			echo "$niv";


			
				// Connexion à la base de données
$pdo = new PDO('mysql:host=localhost;dbname=service_examen', 'root', '');

// Requête avec jointure de trois tables
$sql = "SELECT  etudiant.nomEtudiant, etudiant.prenomEtudiant, notes.note_controle_continue, notes.note_examen, matiere.libMatiere
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
    if (isset($row['nomEtudiant'])) {
        $etudiant_data[] = $row;
    } elseif (isset($row['note_examen'])) {
        $notes_data[] = $row;
    } elseif (isset($row['libMatiere'])) {
        $matiere_data[] = $row;
    }
} ?>

<table border="2">
            <thead>
			<tr>
				<?php
				$reponse = $pdo->query("SELECT libFiliere FROM filiere WHERE idFiliere = '$idfil' ");
			while ($donnees = $reponse->fetch()) { 

				 ?>
				<th colspan="11" align="center"> <?php echo $donnees['libFiliere']; ?> </th>
			<?php  } ?>
			</tr>
			<tr>
				<th rowspan="2" align="center"> Nom </th>
				<th  rowspan="2" align="center"> Prenom </th>
				<?php foreach ($matiere_data as $row) { ?>
				<th colspan="3"  align="center"> 
					<?php  var_dump($row);
    				echo "<br>"; ?>
				 </th>
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
		</thead>
	</table>
<?php 
// Affichage des données de chaque tableau associatif
echo "Contenu du tableau associatif pour etudiant :<br>";
foreach ($etudiant_data as $row) {
    var_dump($row);
    echo "<br>";
}

echo "Contenu du tableau associatif pour notes :<br>";
foreach ($notes_data as $rowe) {
    var_dump($rowe);
    echo "<br>";
}

echo "Contenu du tableau associatif pour matiere :<br>";
foreach ($matiere_data as $row) {
    var_dump($row);
    echo "<br>";
}



		}
		?>


</body>
</html>