
<?php
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
}
?>