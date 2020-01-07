<?php
require_once("Models/Match.php");
$result = Match::getMatchsInPlay();
require("Views/getMatchsInPlayView.php");
?>