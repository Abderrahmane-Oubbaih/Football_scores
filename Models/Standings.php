<?php 
class Standings {
    public $competition;
    public $currentMatchDay;
    public $standingArray;
    
    public function __construct($competition,$currentMatchDay,$standingArray){
        $this->competition = $competition;
        $this->currentMatchDay = $currentMatchDay;
        $this->standingArray = $standingArray;
    }
}

class Standing {
    public $team;
    public $position;
    public $playedGames;
    public $won;
    public $draw;
    public $lost;
    public $points;
    public $goalsFor;
    public $goalsAgainst;
    public $difference;
    
    public function __construct($team,$position,$playedGames,$won,$draw,$lost,$points,$goalsFor,$goalsAgainst,$difference){
        $this->team = $team;
        $this->position = $position;
        $this->palyedGames = $playedGames;
        $this->won = $won;
        $this->draw = $draw;
        $this->lost = $lost;
        $this->points = $points;
        $this->goalsFor = $goalsFor;
        $this->goalsAgainst = $goalsAgainst;
        $this->difference = $difference;
    }
}
/* unit test :

$Standing1 = new Standing("Liverpool",1,20,19,1,0,58,35,10,25);
$Standing2 = new Standing("Man City",1,20,16,2,2,58,35,10,25);
$standingArray = array($Standing1,$Standing2);
$standigs1 = new Standings("premier league",20,$standingArray);
print_r($standigs1);*/
?>