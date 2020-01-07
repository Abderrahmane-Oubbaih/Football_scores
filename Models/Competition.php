
<?php
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
    
    public static function getMatchsInPlay($code){
        $api_key = '66485d1780504493a4cfc5527ac4d4c4';
        $headers = array(
       'X-Auth-Token: '.$api_key);
        $today = date('Y-m-d',time()); //."status=IN_PLAY"
        $curl = curl_init("http://api.football-data.org/v2/competitions/".$code."/matches?status=IN_PLAY");
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
    
    public static function getStandings($code){
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


       return $result;
    }
}
?>