<!--
// développé par Abderrahmane Oubbaih le 23-11-2019
// Fonction getTodaysMatchInPlay qui renvoie un tableau des match d'aujourd'hui en cours s'il exist au moins un match en cours et false dans le cas      contraire 
-->
<?php
require_once 'classes/Match.php'; // importation de la classe Match
function getTodaysMatchInPlay()
{
    $today = date('Y-m-d',time()); // la date d'aujourd'hui formaté au format accépté par le service web pour le filtre
    $api_key = '66485d1780504493a4cfc5527ac4d4c4'; // la clé de sécurité permettant de consommer le service web
    $headers = array('X-Auth-Token: '.$api_key); 
    // initialisation de la bibliothéque curl avec l'url de l'api et le query_string paramétré
    $curl = curl_init("http://api.football-data.org/v2/competitions/2015/matches?dateFrom=".$today."&dateTo=".$today."&status=IN_PLAY");
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
            return false;
        }
        else
        {
            $arrMatch = array();
            $date;
            $time;
            for($i=0;$i<$result["count"];$i++)
             {
                $utcSeconds = strtotime($result["matches"][$i]["utcDate"]);
                $time = date('H:i',$utcSeconds);
                $date = date('d-m-Y',$utcSeconds);
                $arrMatch[$i] = new Match($result["matches"][$i]["homeTeam"]["name"],$result["matches"][$i]["awayTeam"]["name"],$result["matches"][$i]["status"],$result["matches"][$i]["score"]["fullTime"]["homeTeam"],$result["matches"][$i]["score"]["fullTime"]["awayTeam"],$date,$time,$result["competition"]["name"],$result["matches"][$i]["score"]["winner"]);
             }

        return $arrMatch ;
        }
         
    }
    curl_close($curl);

}
$arrayObject = getTodaysMatchInPlay();

// test de la fonction

/*
for($i=0;$i<count($arrayObject);$i++)
{
    echo $arrayObject[0]->__toString();
    echo '</br>';
}
*/

?>
