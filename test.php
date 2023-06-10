<?php
$conn = mysqli_connect('localhost', 'root', 'root', 'gestion_touristique');
$req = "SELECT * FROM chambre WHERE code =2 ";
$resultat = mysqli_query($conn, $req);
$donnees = mysqli_fetch_assoc($resultat);
?>
