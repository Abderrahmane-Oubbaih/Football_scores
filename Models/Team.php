
<?php
class Team
{
    private $id;
    private $name;
    private $logo;
    
    public function __construct($id,$name,$logo)
    {
        $this->id = $id;
        $this->name = $name;
        $this->logo = $logo;
    }
    
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
}

//$barca = new Team(1,"Barca","Barca");
//echo $barca->__toString();
?>