<?php 
$conn= mysqli_connect('localhost', 'root', '', 'service_examen');
if ($conn===false) {
die ('Erreur de connexion à la base de données'.mysqli_connect_error());
}
//else 
//echo "connexion a la base de donnes reussie";
?>

