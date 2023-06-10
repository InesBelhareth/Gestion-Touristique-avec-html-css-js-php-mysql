<?php


/*
$date_d=$_POST["date_d"];
$date_f=$_POST["date_f"];
$nbr=$_POST["nbr_lits"];

$req="select debut,fin,code,nom_endroit,nom_chambre from hotel as h,reservation as r ,chambre as c where c.nbr_lit=$nbr and h.code=c.code
and r.debut !=$date_d and r.fin!=$date_f";
if (mysqli_query($conn, $sql)) {
    echo " execute";
} else {
    echo "Erreur : " ;
}


$res=mysqli_query($conn,$req);
if( mysqli_num_rows($res)==0)
	echo("pas de chambre");
else 
{
	
	$res1=mysqli_query($conn,$req);
echo("effectuee");}


/*
echo '<table>';
echo '<tr> <th>code</th><th>nom_endroit</th><th>nom_chambre</th></tr>';
while ($row = $res1->fetch()) {
    echo '<tr>';
    echo '<td>' . $row['code'] . '</td>';
    echo '<td>' . $row['non_endroit'] . '</td>';
    echo '<td>' . $row['non_chambre'] . '</td>';
    echo '</tr>';
}
echo '</table>';*/
//





$conn = mysqli_connect("localhost", "root", "root", "gestion_touristique");

// Check for connection errors
if (!$conn) {
  die("Connection failed: " . mysqli_connect_error());
}






  $req = ("SELECT e.nom_endroit as nom, c.nom_chambre as chambre from endroit as e
  inner join  hotel as h on h.code=e.code  inner join  chambre AS c on h.code = c.code AND 
  c.nbr_lits='3' AND c.nom_chambre NOT IN (SELECT r.nom_chambre FROM reservation AS r
   WHERE r.debut = '23-04-2023' AND r.fin = '29-04-2023')");
$result = mysqli_query($conn, $req);
  // Affichage des données
  while ($row = $result->fetch_assoc()) {
      echo "nom : " . $row["nom"] . "<br>";
      echo "chambre : " . $row["chambre"] . "<br>";}
      


// Close the database connection
mysqli_close($conn);
?>