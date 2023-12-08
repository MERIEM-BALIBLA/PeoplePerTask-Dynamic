<?php
include('headerclient.php');

// Vérifiez si l'ID du projet est présent dans l'URL
if (isset($_GET['Project_ID'])) {
    $projectID = $_GET['Project_ID'];

    // Utilisez l'ID du projet pour récupérer les détails du projet depuis la base de données
    $sql = "SELECT * FROM `project` WHERE `Project_ID`='$projectID' LIMIT 1";
    $result = mysqli_query($conn, $sql);

    if (mysqli_num_rows($result) > 0) {
        $projectDetails = mysqli_fetch_assoc($result);

        echo '<h1>' . $projectDetails['Project_title'] . '</h1>';
        echo '<p>' . $projectDetails['Descriptions'] . '</p>';
    } else {
        echo 'Projet non trouvé.';
    }
} else {
    echo 'ID du projet non spécifié.';
}
?>
