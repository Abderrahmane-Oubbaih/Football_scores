<?php
require_once("Models/Competition.php");

function getCompetitionStandings ($code)
{
    $standings = Competition::getStandings($code);
    require_once("Views/getCompetitionStandingsView.php");
}


//print_r($standings);
?>