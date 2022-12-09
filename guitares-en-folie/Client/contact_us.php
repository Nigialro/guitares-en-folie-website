<?php session_start(); ?>
<!DOCTYPE.html>
<html lang="fr">
<head>
<meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0" />
    <link href="img/logo-guitares-en-folie-1@1x.png" rel="shortcut icon" type="image/png" />
    <meta name="og:type" content="website" />
    <meta name="twitter:card" content="photo" />
    <link rel="stylesheet" type="text/css" href="../css/contact.css" />
    <link rel="stylesheet" type="text/css" href="../css/styleguide.css" />
    <link rel="stylesheet" type="text/css" href="../css/globals.css" />
     <!--Google Font-->
     <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=IM+Fell+DW+Pica+SC&family=Source+Sans+Pro:ital,wght@0,400;0,600;0,700;1,400;1,600;1,700&display=swap" rel="stylesheet">

    <title>Nous contacter</title>
</head>
<body style="margin: 0">
    <!--<input type="hidden" id="anPageName" name="page" value="contact" />-->
    <div class="container-center-horizontal">
      <div class="contact screen">
        <div class="overlap-group">
          <!-- Formulaire utilisateur -->
          <form action='contact_us_send.php' method='POST'>
            <div class="form_title_contact imfelldwpicasc-regular-normal-mine-shaft-32px">Nous contacter</div>
            <div class="flex-row">
              <div class="contact_label_-container">
                <label class="contact_label_name" for='name'>Nom :</label>
                <label class="contact_label_email" for='email'>Email :</label>
              </div>
              <div class="contact_input_-container">
                <input class="contact_input" type='name' id='name' name='name' required>
                <input class="contact_input" type='email' id='email' name='email' required>
              </div>
            </div>
            <textarea class="overlap-group1" type="text" name="message" required placeholder="Message..."></textarea>
            <div class="button_send">
              <div class="button_send-1">
                <input class="button_send-2 button_send_text sourcesanspro-bold-gallery-20px" type='submit' value="Envoyer">
              </div>
            </div>
          </form>
        </div>
      </div>
    </div>
  </body>
</html>