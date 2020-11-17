<?php
	include 'head.php';
	include 'accueil.php';
	include 'experience.php';
	include 'competence.php';
	include 'Formation.php';
	include 'Apropos.php';
	include 'contact.php';
	include 'footer.php';

  $dest = "pipallon.luc@gmail.com";
  
  
   
   if (isset($_POST['nom'])) {
    $nom = $_POST['nom'];
}
   if (isset($_POST['objet'])) {
    $objet= $_POST['objet'];
}
  if (isset($_POST['msg'])) {
    $msg = $_POST['msg'];
}
  if (isset($_POST['email'])) {
    $email = $_POST['email'];
}
  if (mail("pipallon.luc@gmail.com",$msg,$email)) {
    echo "Email envoyé avec succès à ".$dest ;
  } else {
    echo "Échec de l'envoi de l'email...";
  }
?>