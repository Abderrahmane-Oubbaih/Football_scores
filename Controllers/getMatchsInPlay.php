<?php
require_once("Models/Match.php");
$result = Match::getMatchsInPlay();
require_once("Views/getMatchsInPlayView.php");
?>