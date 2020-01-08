
<?php

require_once('Match.php');
require_once('Standings.php');

class Competition
{
   private $id;
   private $name;
   private $code;
   private $logo;
   private $onHoverLogo;
   
    
   public function getId()
    {
        return $this->id;
    }
    
     public function getName()
    {
        return $this->name;
    }
    
    public function getLogo()
    {
        return $this->logo;
    }
    
    public function __toString()
    {
        return  $this->id . " " .$this->name." ".$this->logo ;
    }
    
    public static function getMatchsInPlay($code)
    {
        $api_key = '66485d1780504493a4cfc5527ac4d4c4';
        $headers = array(
       'X-Auth-Token: '.$api_key);
        $today = date('Y-m-d',time()); //."status=IN_PLAY"
        $curl = curl_init("http://api.football-data.org/v2/competitions/".$code."/matches?status=SCHEDULED&dateFrom=2020-01-08&dateTo=2020-01-15");
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
            }
       curl_close($curl);
       if($result["count"] == 0)
                {  
                    return 'false';
                }
                else
                {
                            echo $data;
                            $arrMatch = array();
                            $date;
                            $time;
                            $homeTeamLogo;
                            $awayTeamLogo;
                            $bdd = Connexion::dbConnexion();
                             
                            for($i=0;$i<$result["count"];$i++)
                            {
                                $req = $bdd->prepare('SELECT * FROM tbl_team WHERE Name = ?');
                                $req->execute(array($result["matches"][$i]["homeTeam"]["name"]));
                                 if($req->rowCount()>0)
                                 {
                                    while($d = $req->fetch())
                                    {
                                        $homeTeamLogo = $d["Logo"];
                                    }
                                    $req->closeCursor();
                                 } else{$homeTeamLogo = "pas encore dans la bd";}

                               $req = $bdd->prepare('SELECT * from tbl_team where Name = ?');
                               $req->execute(array($result["matches"][$i]["awayTeam"]["name"]));
                                 if($req->rowCount()>0)
                                 {
                                      while($d = $req->fetch())
                                      {
                                        $awayTeamLogo = $d["Logo"];
                                      }
                                      $req->closeCursor();
                                 }else{$awayTeamLogo = "pas encore dans la bd";}

                                $utcSeconds = strtotime($result["matches"][$i]["utcDate"]);
                                $time = date('H:i',$utcSeconds);
                                $date = date('d-m-Y',$utcSeconds);
                                $arrMatch[$i] = new Match($result["matches"][$i]["homeTeam"]["name"],$result["matches"][$i]["awayTeam"]["name"],$result["matches"][$i]["status"],$homeTeamLogo,$awayTeamLogo,$result["matches"][$i]["score"]["fullTime"]["homeTeam"],$result["matches"][$i]["score"]["fullTime"]["awayTeam"],$date,$time,$result["competition"]["name"],$result["matches"][$i]["score"]["winner"]);
                             }
                }
                         return $arrMatch ;
 
    } 

    public function getMatches($idCompetition,$Date)
    { 
        $dt=$Date.date_format('Y-m-d');
        $api_key = '66485d1780504493a4cfc5527ac4d4c4'; // la clé de sécurité permettant de consommer le service web
        $headers = array('X-Auth-Token: '.$api_key); 
        $curl = curl_init("http://api.football-data.org/v2/competitions?competitionId=".$idCompetition."/matches?dateFrom=".$dt);
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
            }
       curl_close($curl);


       return $result;
    
    } 
    
    public static function getStandings($code)
    {
        $api_key = '66485d1780504493a4cfc5527ac4d4c4';
        $headers = array(
       'X-Auth-Token: '.$api_key);
        $today = date('Y-m-d',time()); //."status=IN_PLAY"
        $curl = curl_init("http://api.football-data.org/v2/competitions/".$code."/standings");
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
            }
       curl_close($curl);
        $standingArray = array();
        for($i=0;$i<count($result["standings"][0]["table"]);$i++){
            $standingArray[$i] = new Standing(
                $result["standings"][0]["table"][$i]["team"]["name"],
                $result["standings"][0]["table"][$i]["position"],
                $result["standings"][0]["table"][$i]["playedGames"],
                $result["standings"][0]["table"][$i]["won"],
                $result["standings"][0]["table"][$i]["draw"],
                $result["standings"][0]["table"][$i]["lost"],
                $result["standings"][0]["table"][$i]["points"],
                $result["standings"][0]["table"][$i]["goalsFor"],
                $result["standings"][0]["table"][$i]["goalsAgainst"],
                $result["standings"][0]["table"][$i]["goalDifference"]
            );
        }
        $standingsIncetance = new Standings(
        $result["competition"]["name"],
        $result["season"]["currentMatchday"],
        $standingArray
        );
        return $standingsIncetance;
       //return $result;
    }
     
}


?>