<?php 
function checkmdp($mdp){
 if (strlen($mdp) < 6 || strlen($mdp) > 10) {
    return "Erreur! le mot de passe saisis doit etre compris entre 6 et 10 character.";
  }
      $salt = sha1('gh198%.#');

      $saltmdp = $mdp . $salt;
 
      $mdpchiffrer = hash('sha256', $saltmdp);

      $mdppourtest = "qwerty";

    if ($mdpchiffrer === hash('sha256', $saltmdp, $mdppourtest . $salt)) {
       return "Mot de passe correct, Bienvenue.  salt : $salt, Mot de passe chiffré : $mdpchiffrer";
   }else {
       return "Mot de passe incorrect. Ressayer de nouveau.";
  }
}
$mdp = "AZERTY123";
$resultat = checkmdp($mdp);
echo $resultat;
?>