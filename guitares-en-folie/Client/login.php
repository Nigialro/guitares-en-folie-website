<?php
//Suppression des données de session
unset($_SESSION['email']);
unset($_SESSION['password']);
unset($_SESSION['connected']);
//Formulaire de connexion
echo
    "
            <form action='log.php' method='POST'>
              <div class='form_title_identify'>S’identifier</div>
              <label class='label_form_email' for='email'>Entrer adresse email</label>
              <input class='input' type='email' id='email' name='email' required>
              <label class='label_form_password' for='password'>Entrer mot de passe</label>
              <div class='flex-row'>
                <input class='input-1' type='password' id='password' name='password' required>
                <a href='password_forgotten.php'>
                  <div class='forgotten_password'>Mot de passe oublié</div>
                </a>
              </div>
              <div class='button_connexion'>
                <input class='button_connexion-1 button_text' type='submit' value='Connexion'>
              </div>
            </form>
            <a href='account_create.php'>
              <div class='button_account_creation'>
                    <div class='button_account_creation-1'><div class='button_text-1'>Créer un compte</div></div>
              </div>
            </a>
    ";
?>