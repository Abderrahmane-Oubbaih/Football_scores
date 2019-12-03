<!--
// développé par Abderrahmane Oubbaih le 23-11-2019
// Fonction getTodaysMatchInPlay qui renvoie un tableau des match d'aujourd'hui en cours s'il exist au moins un match en cours et false dans le cas      contraire 
-->
<?php

require_once 'classes/Match.php'; // importation de la classe Match
function getMatch($matchDay,$status)
{
    
    $matchDate;
    $matchStatus;
    if($matchDay == "yesterday")
    {
        $matchDate = date("Y-m-d", strtotime("-4 days", date(time())) );
    }
    else if($matchDay == "today")
    {
        $matchDate = date('Y-m-d',time());
    }
    else if($matchDay == "tomorrow")
    {
        $matchDate = date("Y-m-d", strtotime("+3 days", date(time())) );
    }
    
    if($status == "SCHEDULED")
    {
        $matchStatus = "SCHEDULED";
    }
    else if($status == "IN_PLAY")
    {
        $matchStatus = "IN_PLAY";
    }
    else if($status == "FINISHED")
    {
        $matchStatus = "FINISHED";
    }
    else if($status == "PAUSED")
    {
        $matchStatus = "PAUSED";
    }
        
    // la date d'aujourd'hui formaté au format accépté par le service web pour le filtre
    $api_key = '66485d1780504493a4cfc5527ac4d4c4'; // la clé de sécurité permettant de consommer le service web
    $headers = array('X-Auth-Token: '.$api_key); 
    // initialisation de la bibliothéque curl avec l'url de l'api et le query_string paramétré
    $curl = curl_init("http://api.football-data.org/v2/competitions/2015/matches?dateFrom=".$matchDate."&dateTo=".$matchDate."&status=".$matchStatus);
    curl_setopt($curl,CURLOPT_SSL_VERIFYPEER,false);
    curl_setopt($curl, CURLOPT_HTTPHEADER, $headers);
    curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
    $data = curl_exec($curl);
    if($data === false)
    {
        var_dump(curl_error($curl));
    }
    else
    {
        $result = json_decode($data,true);
        
        if($result["count"] == 0)
        {
            //echo 'false';
            return 'false';
        }
        else
        {
            $arrMatch = array();
            $date;
            $time;
            $homeTeamLogo;
            $awayTeamLogo;
            //echo $data;
            
            
            
            for($i=0;$i<$result["count"];$i++)
             {
              //  echo $result["matches"][$i]["homeTeam"]["name"]; echo '</br>';
               
                try
            {
                $bdd = new PDO('mysql:host=localhost;dbname=bd_football_scores_v2;charset=utf8','root','');    
            }
            catch(Exception $e)
            {
                    die('Erreur : '.$e->getMessage());
            }

                
                $req = $bdd->prepare('SELECT * FROM tbl_team WHERE Name = ?');
                $req->execute(array($result["matches"][$i]["homeTeam"]["name"]));
                
                while($d = $req->fetch())
                {
                    $homeTeamLogo = $d["Logo"];

                }
               $req->closeCursor();
                //echo $result["matches"][$i]["homeTeam"]["name"];
            
               $req = $bdd->prepare('SELECT * from tbl_team where Name = ?');
               $req->execute(array($result["matches"][$i]["awayTeam"]["name"]));
                while($d = $req->fetch())
                {
                    $awayTeamLogo = $d["Logo"];

                }
               $req->closeCursor();
                $utcSeconds = strtotime($result["matches"][$i]["utcDate"]);
                $time = date('H:i',$utcSeconds);
                $date = date('d-m-Y',$utcSeconds);
                $arrMatch[$i] = new Match($result["matches"][$i]["homeTeam"]["name"],$result["matches"][$i]["awayTeam"]["name"],$result["matches"][$i]["status"],$homeTeamLogo,$awayTeamLogo,$result["matches"][$i]["score"]["fullTime"]["homeTeam"],$result["matches"][$i]["score"]["fullTime"]["awayTeam"],$date,$time,$result["competition"]["name"],$result["matches"][$i]["score"]["winner"]);
             }

        return $arrMatch ;
        }
         
    }
    curl_close($curl);

}
// test de la fonction

//$arrayObject = array();
//$arrayObject = getMatch("today","FINISHED");


/*
if($arrayObject != null)
{
    for($i=0;$i<count($arrayObject);$i++)
     {
        echo $arrayObject[$i]->__toString();
        echo '</br>';
     }
}else
{
    echo "pas de résultat";
}

*/

?>
