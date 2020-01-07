
<?php
require 'Match.php';
class Competition
{
   private $id;
   private $name;
   private $logo;
    
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
                    $bdd = new PDO('mysql:host=localhost;dbname=football_scores_v2;charset=utf8','root','');    
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
                }              return $arrMatch ;
            }              
        }      curl_close($curl);        }
}
?>