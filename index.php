<?php
if(isset($_GET["action"]))
{
    if($_GET["action"]=="getMatchsInPlay")
    {
        include("Controllers/getMatchsInPlay.php");
    }
    else if($_GET["action"]=="getCompetitionStandings"){
        if(isset($_GET["competitionCode"]))
        {
            $competition = $_GET["competitionCode"];
            include('Controllers/getCompetitionStandings.php');
            getCompetitionStandings($competition);
        }
    }
    
}
else
{
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
</head>
<body>
    <h1>Page d'acceuil</h1>
</body>
</html>
<?php }?>