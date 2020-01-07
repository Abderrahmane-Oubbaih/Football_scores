<?php
require ('..\Models\Match.php');
$req=array();
$req->getMatches();
require('..\Views\View_getMatchesForAllCompetitionsForToday.php');

?>