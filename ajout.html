<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body style="background-image: url(image2.jpg); background-repeat: no-repeat; background-size: cover">
	<link rel="stylesheet" type="text/css" href="style.css">
	<?php
 include("menu.php");
 include"connexion.php"; 
 try {
?>
<div class="container">
	<div class="row block1">
		<div class="col-xs-12 cols1">
		<h1 style="color: navy; margin-top: 60px; margin-left: 200px">Ajouter des Notes</h1>

<form role="form", method="POST", action="", class="form-horizontal">
<p>
	<div class="form-group">
				<label for="matricule" style="color: aqua; font-size: 20px" class="col-sm-2 control-label"> matricule:</label> 
				<div class="col-sm-6">
					<input type="number" name="matricule" id="matricule" class="form-control">
				</div>
			</div>
			<div class="form-group">
			<div class="col-sm-6 col-sm-offset-2">
		<input type="submit" name="valider" value="valider">
		</div>
		</div>
</p>
		<?php 
			if (isset($_POST['valider'])) {
				$matricule = $_POST['matricule'];
				$sql="SELECT etudiant.idEtudiant, etudiant.nomEtudiant, etudiant.prenomEtudiant, etudiant.niveauEtudiant, filiere.libFiliere, filiere.idFiliere FROM etudiant 
			JOIN filiere ON etudiant.id_filiere = filiere.idFiliere WHERE etudiant.idEtudiant = $matricule ";
			$result = mysqli_query($conn, $sql);
			if (mysqli_num_rows($result) > 0) {
				while ($row = mysqli_fetch_assoc($result) ) {

		 ?>
		<p>
			<label for="etudiant" style="display: none;">id etudiant</label>
	<input type="text" name="etudiant" id="etudiant" style="display: none;" value=" <?php echo $row['idEtudiant'] ?>" >
			<label for="filiere" style="display: none;">id filiere</label>
	<input type="text" name="filiere" id="filiere" style="display: none;" value=" <?php echo $row['idFiliere'] ?>">
			<div class="form-group">
				<label style="color: aqua; font-size: 20px" for="nom" class="col-sm-2 control-label"> Nom:</label> 
				<div class="col-sm-6">
					<input type="text" name="nomEtudiant" id="nom" value=" <?php echo $row['nomEtudiant'] ?>" class="form-control" disabled>
				</div>
			</div>
			<div class="form-group">
			<label style="color: aqua; font-size: 20px" for="prenom" class="col-sm-2 control-label"> Prénoms:</label>
			<div class="col-sm-6">
			<input type="text" name="prenomEtudiant" id="prenom" value="<?php echo $row['prenomEtudiant'] ?> "  class="form-control" disabled>
			</div>
			</div>
			<div class="form-group">
			<label style="color: aqua; font-size: 20px" for="filiere" class="col-sm-2 control-label"> Filière:</label>
			<div class="col-sm-6">
			<input type="text" name="filiereEtudiant" id="filiere" value="<?php echo $row['libFiliere'] ?>" class="form-control" disabled>
			</div>
			</div>
			<div class="form-group">
				<label style="color: aqua; font-size: 20px" for="matiere"  class="col-sm-2 control-label">Matière</label>
				<div class="col-sm-6">		
		<select name="matiere" id="matier" class="form-control">
			<?php
				$query="SELECT matiere.idMatiere, matiere.libMatiere FROM  matiere
			JOIN etudiant ON matiere.id_Filiere = etudiant.id_filiere 
			AND matiere.niveau = etudiant.niveauEtudiant WHERE etudiant.idEtudiant = $matricule ";
			$res = mysqli_query($conn, $query);
			if (mysqli_num_rows($res) > 0) {
				while ($rowe = mysqli_fetch_assoc($res) ) {	
			?>
			<option value=" <?php echo $rowe['idMatiere'] ?> " > <?php echo $rowe['libMatiere']; ?> </option>
			<?php 
				}
			} 
		
			 ?>
			 </select>
			</div>
			</div>
			<div class="form-group">
				<label style="color: aqua; font-size: 20px" for="notecc" class="col-sm-2 control-label"> Note CC:</label> 
				<div class="col-sm-6">
					<input type="number" name="notecc" id="notecc" class="form-control" >
				</div>
			</div>
			<div class="form-group">
			<label style="color: aqua; font-size: 20px"for="noteex" class="col-sm-2 control-label">Note Examen:</label>
			<div class="col-sm-6">
			<input type="number" name="noteex" id="noteex" class="form-control" >
			</div>
			</div>
		<div class="form-group">
			<div class="col-sm-6 col-sm-offset-2">
		<input type="submit" name="ajouter" value="ajouter">
		</div>
		</div>
		</p>
</form>
<?php


 }
			} 
			else{
				echo "Aucun étudiant ne correspond à ce numéro matricule";
			} 

		
		   }
include 'connexion.php';
	if (isset($_POST['ajouter'])) {
		$notecc = $_POST['notecc'];
		$noteex = $_POST['noteex'];
		$matiere = $_POST['matiere'];
		$filiere = $_POST['filiere'];
		$etudiant = $_POST['etudiant'];
		$moy = ($notecc + $noteex)/2 ;

		$sql= "INSERT INTO notes (note_controle_continue, note_examen, moy, id_Filiere, id_Matiere, id_Etudiant) VALUES ('$notecc', '$noteex', '$moy', '$filiere', '$matiere', '$etudiant')";
		$result=mysqli_query($conn, $sql);
		if ($result) {
			echo "enregistrement effectué avec succès";
		}
	}
		} catch (Exception $e) {
 			echo "une erreur s'est produite: ".$e->getMessage();	
 }

  ?>



</body>
</html>