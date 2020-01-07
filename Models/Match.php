<?php
<<<<<<< HEAD

require_once("Connexion.php");


class Match

{
    private $id;
    private $homeTeam;
    private $awayTeam;
    private $homeTeamLogo;
    private $awayTeamLogo;
    private $status;
    private $homeTeamScore;
    private $awayTeamScore;
    private $_date;
    private $_time;
    private $competition;
    private $winner;
    
    
    public function __construct($homeTeam,$awayTeam,$status,$homeTeamLogo,$awayTeamLogo,$homeTeamScore,$awayTeamScore,$_date,$_time,$competition,$winner)
    {
        $this->homeTeam = $homeTeam;
        $this->awayTeam = $awayTeam;
        $this->homeTeamScore = $homeTeamScore;
        $this->awayTeamScore = $awayTeamScore;
        $this->status = $status;
        $this->homeTeamLogo = $homeTeamLogo;
        $this->awayTeamLogo = $awayTeamLogo;
        $this->_date = $_date;
        $this->_time = $_time;
        $this->competition = $competition;
        $this->winner = $winner;
    }
    
    public function getId()
    {
        return $this->id;
    }
    
    public function getHomeTeam()
    {
        return $this->homeTeam;
    }
    
    public function getAwayTeam()
    {
        return $this->awayTeam;
    }
    
    public function getHomeTeamLogo()
    {
        return $this->homeTeamLogo;
    }
    
    public function getAwayTeamLogo()
    {
        return $this->awayTeamLogo;
    }
    
    public function getHomeTeamScore()
    {
        return $this->homeTeamScore;
    }
    
    public function getAwayTeamScore()
    {
        return $this->awayTeamScore;
    }
    
    public function getStatus()
    {
        return $this->status;
    }
    
    public function getDate()
    {
        return $this->_date;
    }
    
    public function getTime()
    {
        return $this->_time;
    }
    
    public function getWinner()
    {
        return $this->winner;
    }
    
    public function getCompetition()
    {
        return $this->competition;
    }
    public function __toString()
    {
        return  $this->id . " " .$this->homeTeam." ".$this->awayTeam ." ". $this->homeTeamLogo
        ." ". $this->awayTeamLogo." ".$this->homeTeamScore." ".$this->awayTeamScore." ".$this->status." ".$this->_date." ".$this->_time." ".$this->winner." ".$this->competition;
    }

    /*
   public function getMatchForAllCompetitionAndForChosenDate($Date)
    {
            
            $Date;
            $All=[2015,2003,2015,2003,2003,2003,2003,2015];
            
                
            // la date d'aujourd'hui formaté au format accépté par le service web pour le filtre
            $api_key = '66485d1780504493a4cfc5527ac4d4c4'; // la clé de sécurité permettant de consommer le service web
            $headers = array('X-Auth-Token: '.$api_key); 
            // initialisation de la bibliothéque curl avec l'url de l'api et le query_string paramétré
            for( $i=0; $i<Count($All);$i++)
               {
            $curl = curl_init("http://api.football-data.org/v2/competitions?competitionId=".$All[$i]."/matches?dateFrom=".$matchDate."&dateTo=".$matchDate);
               
            curl_setopt($curl,CURLOPT_SSL_VERIFYPEER,false);
            curl_setopt($curl, CURLOPT_HTTPHEADER, $headers);
            curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
            $data[$i] = curl_exec($curl);}
=======
   public function getMatches()
    {
            $api_key = '66485d1780504493a4cfc5527ac4d4c4';
            $headers = array('X-Auth-Token: '.$api_key);
            $curl = curl_init("http://api.football-data.org/v2/matches");
            curl_setopt($curl,CURLOPT_SSL_VERIFYPEER,false);
            curl_setopt($curl, CURLOPT_HTTPHEADER, $headers);
            curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
            $data=curl_exec($curl);
>>>>>>> 4555a4a040dc658c14a702e5cee7ad40c7be7d19
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
<<<<<<< HEAD
                 
            }
            curl_close($curl);
        
        }
*/
// FUNTION 2
    /*
    public function getMatchForChosenCompetitionAndForChosenDate($idCompetition,$Date)
    { 
         $id= $idCompetition;
         $dt=$Date;
        // la date d'aujourd'hui formaté au format accépté par le service web pour le filtre
            $api_key = '66485d1780504493a4cfc5527ac4d4c4'; // la clé de sécurité permettant de consommer le service web
            $headers = array('X-Auth-Token: '.$api_key); 
            // initialisation de la bibliothéque curl avec l'url de l'api et le query_string paramétré
            $curl = curl_init("http://api.football-data.org/v2/competitions?competitionId=".$id."/matches?dateFrom=".$dt."?dateTo=".$dt);
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
            curl_close($curl);        }*/
    
    public static function getMatchsInPlay(){
        $api_key = '66485d1780504493a4cfc5527ac4d4c4';
        $headers = array(
       'X-Auth-Token: '.$api_key);
        $today = date('Y-m-d',time()); //."status=IN_PLAY"
        $curl = curl_init("http://api.football-data.org/v2/matches?status=SCHEDULED&dateFrom=2020-01-07&dateTo=2020-01-10");
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
                    
                    $arrMatch = array();
                    $date;
                    $time;
                    $homeTeamLogo;
                    $awayTeamLogo;
                    //echo $data;
                    
                     
                     
                     $bdd = Connexion::dbConnexion();
                     print_r($bdd);
                     for($i=0;$i<$result["count"];$i++)
                     {
                      //  echo $result["matches"][$i]["homeTeam"]["name"]; echo '</br>';
                       
                        
        
                        
                        $req = $bdd->prepare('SELECT * FROM tbl_team WHERE Name = ?');
                        $req->execute(array($result["matches"][$i]["homeTeam"]["name"]));
                        //echo $req->rowCount();
                         if($req->rowCount()>0)
                         {
                            while($d = $req->fetch())
                            {
                                $homeTeamLogo = $d["Logo"];
                            }
                            $req->closeCursor();
                         } else{$homeTeamLogo = "pas encore dans la bd";}
                       
                        //echo $result["matches"][$i]["homeTeam"]["name"];
                    
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
                        $arrMatch[$i] = new Match($result["matches"][$i]["homeTeam"]["name"],$result["matches"][$i]["awayTeam"]["name"],$result["matches"][$i]["status"],$homeTeamLogo,$awayTeamLogo,$result["matches"][$i]["score"]["fullTime"]["homeTeam"],$result["matches"][$i]["score"]["fullTime"]["awayTeam"],$date,$time,$result["matches"][$i]["competition"]["name"],$result["matches"][$i]["score"]["winner"]);
                     }
                   
                      //$result["matches"][$i]["competition"]["name"];
                 return $arrMatch ;
                }
       
    
    


                   
            }
            curl_close($curl);
}


?>
