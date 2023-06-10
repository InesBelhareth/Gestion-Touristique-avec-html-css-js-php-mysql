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
            <h2>RESERVER</h2>
            <div class = "card-container">
                <div class = "card-img">
                    <!-- image here -->
                </div>
                <form method="POST" onsubmit ='' action="reserver.php">

                <div class = "card-content">
                    <h3>Reservation</h3>
                        <div class = "form-row">
                        <label for="id">Quel est votre Id ?</label>
                          <div>
                              <input name="id" id="id" type="text" placeholder="Quel est votre id ?">
                              <input name="num" id="num" type="text" placeholder="Quel est votre num ?">
                          </div>

                           
                        </div>

                        <div class = "form-row">
                        <input name="nom" id="nom"  type="text" placeholder="Quel est votre nom ?">
                        <input name="prenom" id="prenom"  type="text" placeholder="Quel est votre prenom ?">
                        </div>

                        <div class = "form-row">
                            <input type = "submit" value = "Reserver">
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


$nom = $_POST["nom"];
$prenom = $_POST["prenom"];
$id = $_POST["id"];
$num= $_POST["num"];

$sql = "INSERT INTO client  VALUES ('$id', '$nom','$prenom','$num')";

if (mysqli_query($conn, $sql)) {
    echo "Enregistrement cree avec succes";
} else {
    echo "Erreur : " ;
}
mysqli_close($conn);
?>