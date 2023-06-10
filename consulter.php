<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>Reservation Form</title>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="res.css">
    </head>
    <body>
        <section class = "banner">
            <h2>CONSULTER </h2>
            <div class = "card-container">
                <div class = "card-img">
                    <!-- image here -->
                </div>
                <form method="POST" onsubmit ='' action="consulter.php" >

                <div class = "card-content">
                    <h3>CONSULTER</h3>
                        <div class = "form-row">
                       
             
                      
             <div>
               <input name="debut" id="debut" type="date" placeholder="la date de debut">
             </div>
             
             <div>
               <input name="fin" id="fin"  type="date" placeholder="la date de fin">
             </div>
                           
                        </div>

                        <div class = "form-row">

                        
             <div>
               <input name="nbr_lits" id="nbr_lits" type="number" placeholder=" nombre des lits">
             </div>
             </div>
                        <div class = "form-row">
                            <input type = "submit" value = "Consulter">
                        </div>

                        
                    </form>
                </div>
            </div>
            </form>
        </section>


    </body>
</html>




<?php




$conn = mysqli_connect("localhost", "root", "root", "gestion_touristique");

// Check for connection errors
if (!$conn) {
  die("Connection failed: " . mysqli_connect_error());
}

// Get the user input
$debut1= $_POST["debut"];
$fin1= $_POST["fin"];
$nbr_lits= $_POST["nbr_lits"];


$req = " SELECT count(*)
FROM hotel h
 inner JOIN chambre c ON  h.code = c.code inner join reservation as r on r.nom_chambre=c.nom_chambre
    where 
    c.nbr_lits ='$nbr_lits' and r.debut = '$debut1' and r.fin= '$fin1'";


$result = mysqli_query($conn, $req);
$nbReservations = mysqli_fetch_array($result)[0];

// Check if the room is available
if($nbReservations > 0) {
  echo "The room is already reserved for the specified dates. <br> " ;
} else 
  echo "The room is available for the specified dates. <br> "; 

  $req = ("SELECT e.nom_endroit as nom, c.nom_chambre as chambre from endroit as e
  inner join  hotel as h on h.code=e.code  inner join  chambre AS c on h.code = c.code AND 
  c.nbr_lits='$nbr_lits' AND c.nom_chambre NOT IN (SELECT r.nom_chambre FROM reservation AS r
   WHERE r.debut = '$debut1' AND r.fin = '$fin1')");
$result = mysqli_query($conn, $req);


     echo "<div class='resultats'>";
      while ($row = mysqli_fetch_assoc($result)) {
          echo "<div class='resultat'>";
          echo "<h2> Nom de lhotel " . $row["nom"] . "</h2>";
          echo "<p>Nom du chambre". $row["chambre"] . "</p>";
          echo "</div>";
      }
      echo "</div>";



// Close the database connection
mysqli_close($conn);
?>

