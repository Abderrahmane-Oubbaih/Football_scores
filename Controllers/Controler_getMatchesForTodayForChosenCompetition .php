<?php
require ('..\Models\Competition.php');
if(isset($_GET['$idCompetition']) && isset($_GET['$Date']))
 {
  $post=getMatches($_GET['$idCompetition'],$_GET['$Date']);

  require('..\Views\View_getMatchesForTodayForChosenCompetition.php');

 }
 else
 {
     echo 'Erreur :aucun identifiant ou aucune date !'

 }
?>