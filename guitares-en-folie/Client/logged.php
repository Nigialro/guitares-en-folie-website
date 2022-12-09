<?php
//Connexion à la base de données
include('../Include/connexion.php');

try {
    //Paramètres de la requête
    $tableauParams = [
        'emailUser' => $_SESSION['email']
    ];
    //Rédaction de la requête
    $sqlQuery = "SELECT nameUser, surnameUser FROM Utilisateur WHERE emailUser=:emailUser";
    //Préparation de la requête
    $requete = $db->prepare($sqlQuery);
    //Execution de la requête
    $requete->execute($tableauParams);
    //Récupération des résultats
    $infosUser = $requete->fetch();
?>
    <div class="form_title_name">
<?php

    //Affichage prénom et nom
    echo
    "
    <h1 class='text-center'>" . $infosUser['nameUser'] . " " . $infosUser['surnameUser'] . "</h1><br>
    ";
?>
    </div>
        <a href='account.php'>
            <div class="button_account">
              <div class="button">
                <div class="button_account-1"><div class="button_text_2">Accéder au compte</div></div>
              </div>
            </div>
        </a>
        <a href='logout.php'>
            <div class="button_disconnexion">
              <div class="button">
                <div class="button_disconnexion-1"><div class="button_text-3">Se déconnecter</div></div>
              </div>
            </div>
        </a>
<?php

} catch (Exception $e) {
    //Gestion d'erreur
    die("Erreur: " . $e->getMessage());

}

?>