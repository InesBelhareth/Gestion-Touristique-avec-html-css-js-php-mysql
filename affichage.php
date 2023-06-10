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
