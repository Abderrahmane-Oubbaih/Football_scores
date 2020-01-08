<?php
require_once("Match.php");
require_once("Competition.php");

//$result = Match::getMatchsInPlay();
//echo $result["count"];
/*$result2 = Competition::getMatchsInPlay("SA");
echo $result2["count"];
for($i=0;$i<$result2["count"];$i++)
{
        echo ($result2["matches"][$i]["homeTeam"]["name"]); echo ' ';
        echo ($result2["matches"][$i]["score"]["fullTime"]["homeTeam"]);
        echo '--';
    
        echo($result2["matches"][$i]["score"]["fullTime"]["awayTeam"]); echo ' ';
        echo ($result2["matches"][$i]["awayTeam"]["name"]); echo '    '.$i;
        echo '</br>';
}*/
$result3 = Competition::getStandings("PL");
print_r($result3);

//for($i=0;$i<count($result3["standings"][0]["table"]);$i++){
  //  echo $result3["standings"][0]["table"][$i]["team"]["name"].'<br>';
//}
/*$result = Match::getMatchsInPlay();
if( $result == "false")
        echo false ;
else
       print_r($result) ;*/

//$result = Competition::getMatchsInPlay('SA');
//echo count($result);


?>