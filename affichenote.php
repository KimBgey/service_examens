<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" type="text/css" href="style.css">
	<title></title>
</head>
<body>
	<?php 
	include 'menu.php';
	include 'connexion.php';

	 ?>
<div class="container">
	<div class="row block1">
		<div class="col-xs-12 cols1">
			<form role="form", style="margin-top: 60px" method="POST", action="", class="form-horizontal">
<p>
	<div class="form-group">
			<label for="niveau" class="col-sm-2 control-label"> Niveau: </label>
			<div class="col-sm-6">
			<select name="niveau" id="niveau"  class="form-control">
				<option value="Licence1">Licence 1</option>
				<option value="Licence2">Licence 2</option>
				<option value="Licence3">Licence 3</option>
			</select>
			</div>
			</div>
			
			<div class="form-group">
			<div class="col-sm-6 col-sm-offset-2">
		<input type="submit" name="valider" value="valider"> 
		</div>
		</div> <br><br>
</p>
</form>
		<?php 
		include 'connexion.php';
		if (isset($_POST['valider'])) {
			$niveau = $_POST['niveau'];

			if (isset($niveau)) {
	$query=" SELECT libFiliere, idFiliere FROM filiere ";
			$res= mysqli_query($conn, $query);
			while ($row= $res->fetch_array()) { ?>
				<form method="POST" action="affichepropre.php">
			
	<input type="text" style="display: none" name="idfil" value=" <?php echo $row['idFiliere'] ?>" >
	<input type="text" style="display: none" name="niv" value="<?php echo $niveau ?>" >
	<input type="submit" name="voir" value=" <?php echo 'Notes '.$row['libFiliere'] ?> ">
				</form> <br>

			

		<?php	 }






				
			}

		}

		 ?>




		 </div>
	</div>
</div>		 	
</body>
</html>