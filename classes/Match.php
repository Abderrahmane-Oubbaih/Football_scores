<!--
// développé par Abderrahmane Oubbaih le 23-11-2019
// class Team
-->
<?php
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
    
    
    public function __construct($homeTeam,$awayTeam,$status,$homeTeamScore,$awayTeamScore,$_date,$_time,$competition,$winner)
    {
        $this->homeTeam = $homeTeam;
        $this->awayTeam = $awayTeam;
        $this->homeTeamScore = $homeTeamScore;
        $this->awayTeamScore = $awayTeamScore;
        $this->status = $status;
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
        return $this->homTeam;
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
    
   
}
?>