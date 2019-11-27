<?php include "head.php";
require_once 'classes/Match.php'; 
 include_once('getMatch.php');
require_once('getTodayMatches.php');
?> 
  <style>
      a:active{
          background-color: aquamarine;
      }
</style>
 <!-- Les Buutons demain hier aujourdHui -->
 <section class="banner">
       <div class="table-responsive container" id="tab">  
 
 <div>
 <div class="table-responsive container">  
 <ul class="nav nav-pills mb-3 font-weight-bold nav-justified" id="pills-tab" role="tablist">
  <li class="nav-item" id="navjour">
    <a class="nav-link" href="Index.php?matchDay=yesterday">Hier</a>
  </li>
  <li class="nav-item" id="navjour">
    <a class="nav-link" href="Index.php?matchDay=today">Ajourd'hui</a>
  </li>
  <li class="nav-item" id="navjour">
    <a class="nav-link" href="Index.php?matchDay=tomorrow">Demain</a>
  </li>
</ul>
</div>
</div>




<?php /*
if(isset($_GET['matchDay']))
{
    
    echo 'cooooooooo';
    $arrMatch = getMatch('yesterday','FINISHED');
    for($i=0;$i<count($arrMatch);$i++)
    {
        echo 'hello'; */
?>
<!-- Pour hier -->
<div class="tab-content" id="pills-tabContent">
<?php
if(isset($_GET['matchDay']))
{
    if($_GET['matchDay'] == 'yesterday')
    {
        
   
 
    $arrMatch = getMatch($_GET['matchDay'],'FINISHED');
    if($arrMatch != 'false')
    {
    for($i=0;$i<count($arrMatch);$i++)
    {
       // echo 'hello';
?>
  <br>
  <style>
      #backimg{
          
background-image:url('Images/Pictures/stade.jpg');  background-repeat: no-repeat;
          background-size: cover; 
     
      }
</style>
 <div class="container" style="border: 5px solid #1f7810;" id="backimg" >
            
             <div class="text-center">
              <p style="color:yellow ;font-size:25px;font-weight: bold;"><?php echo $arrMatch[$i]->getStatus();?></p>
           </div>
           <div class="text-center">
              <p style="color:white ;font-size:20px;font-weight: bold;"><?php echo $arrMatch[$i]->getDate(); echo ' ' ; echo $arrMatch[$i]->getTime(); ?></p>
           </div>
           <div class="text-center">
               <img width="120" height="120" src="Images/Logos/Laligue.png" alt="">
           </div>
           <div class="row align-items-center">
               <div class="col-3 text-center">
                  <img width="90" height="90" src="<?php echo $arrMatch[$i]->getHomeTeamLogo();?>" alt="">
               
               </div>
               <div class="col-6 text-center">
                   <p class="my-auto" style="color:yellow ;font-size:30px;font-weight: bold;">VS</p>
               </div>
               <div class="col-3  text-center">
               <img width="90" height="90" src="<?php echo $arrMatch[$i]->getAwayTeamLogo();?>" alt="">
           </div>
           </div>
           
           <div class="row align-items-center">
               <div class="col-3  text-center">
                   <p style="color:yellow;font-size:20px;font-weight: bold;"><?php echo $arrMatch[$i]->getHomeTeam();?></p>
               </div>
               <div class="col-6 text-center">
               
               </div>
               <div class="col-3 text-center">
                   <p style="color:yellow;font-size:20px;font-weight: bold;"><?php echo $arrMatch[$i]->getAwayTeam();?></p>
           </div>
           </div>
           
           <div class="row align-items-center">
               <div class="col-3  text-center">
                   <p style="color:yellow;font-size:40px;font-weight: bold;"><?php echo $arrMatch[$i]->getHomeTeamScore();?></p>
               </div>
               <div class="col-6 text-center">
                                      <p style="font-size:50px;font-weight: bold;color:yellow" >:</p>

               </div>
               <div class="col-3 text-center">
               <p style="color:yellow;font-size:40px;font-weight: bold;"><?php echo $arrMatch[$i]->getAwayTeamScore();?></p>
           </div>
            
           </div>
           
          
           
          </div>
          <?php
 }
}
     else
    { 
       echo '<div class="container responsive">
<h1 class="danger" 
style="text-align:center;
    font-size:30px;
    color:red;
    font-weight: bold;
    font-family: cursive;"
>Pas de matche....</i></h1>
</div>';
    }
}
   

    else if ($_GET['matchDay'] == 'today')
    {
         $arrMatch = getTodayMatch();
    if($arrMatch != 'false')
    {
    for($i=0;$i<count($arrMatch);$i++)
    {
       // echo 'hello';
?>
  <br>
  
<div class="container" style="border: 5px solid #1f7810;background-image:url('Images/Pictures/stade.jpg');  background-repeat: no-repeat;
  background-size: cover;" >
            
             <div class="text-center">
              <p style="color:yellow ;font-size:25px;font-weight: bold;"><?php echo $arrMatch[$i]->getStatus();?></p>
           </div>
           <div class="text-center">
              <p style="color:white ;font-size:20px;font-weight: bold;"><?php echo $arrMatch[$i]->getDate(); echo ' ' ; echo $arrMatch[$i]->getTime(); ?></p>
           </div>
           <div class="text-center">
               <img width="120" height="120" src="Images/Logos/Laligue.png" alt="">
           </div>
           <div class="row align-items-center">
               <div class="col-3 text-center">
                  <img width="90" height="90" src="<?php echo $arrMatch[$i]->getHomeTeamLogo();?>" alt="">
               
               </div>
               <div class="col-6 text-center">
                   <p class="my-auto" style="color:yellow ;font-size:30px;font-weight: bold;">VS</p>
               </div>
               <div class="col-3  text-center">
               <img width="90" height="90" src="<?php echo $arrMatch[$i]->getAwayTeamLogo();?>" alt="">
           </div>
           </div>
           
           <div class="row align-items-center">
               <div class="col-3  text-center">
                   <p style="color:yellow;font-size:20px;font-weight: bold;"><?php echo $arrMatch[$i]->getHomeTeam();?></p>
               </div>
               <div class="col-6 text-center">
                   
               </div>
               <div class="col-3 text-center">
                   <p style="color:yellow;font-size:20px;font-weight: bold;"><?php echo $arrMatch[$i]->getAwayTeam();?></p>
           </div>
           </div>
           
           <div class="row align-items-center">
               <div class="col-3  text-center">
                   <p style="color:yellow;font-size:40px;font-weight: bold;"><?php echo $arrMatch[$i]->getHomeTeamScore();?></p>
               </div>
               <div class="col-6 text-center">
                   
               </div>
               <div class="col-3 text-center">
               <p style="color:yellow;font-size:40px;font-weight: bold;"><?php echo $arrMatch[$i]->getAwayTeamScore();?></p>
           </div>
            
           </div>
           
          
           
          </div>
          <?php
 }
}
     else
    { 
       echo '<div class="container responsive">
<h1 class="danger" 
style="text-align:center;
    font-size:30px;
    color:red;
    font-weight: bold;
    font-family: cursive;"
>Pas de matche....</i></h1>
</div>';
    }

    }

    else if ($_GET['matchDay'] == 'tomorrow')
    {
        {
        
   
 
    $arrMatch = getMatch($_GET['matchDay'],'SCHEDULED');
    if($arrMatch != 'false')
    {
    for($i=0;$i<count($arrMatch);$i++)
    {
       // echo 'hello';
?>
  
  <br>
  <div class="container" style="border: 5px solid #1f7810;background-image:url('Images/Pictures/stade.jpg');  background-repeat: no-repeat;
  background-size: cover;" >
            
             <div class="text-center">
              <p style="color:yellow ;font-size:25px;font-weight: bold;"><?php echo $arrMatch[$i]->getStatus();?></p>
           </div>
           <div class="text-center">
              <p style="color:white ;font-size:20px;font-weight: bold;"><?php echo $arrMatch[$i]->getDate(); echo ' ' ; echo $arrMatch[$i]->getTime(); ?></p>
           </div>
           <div class="text-center">
               <img width="120" height="120" src="Images/Logos/Laligue.png" alt="">
           </div>
           <div class="row align-items-center">
               <div class="col-3 text-center">
                  <img width="90" height="90" src="<?php echo $arrMatch[$i]->getHomeTeamLogo();?>" alt="">
               
               </div>
               <div class="col-6 text-center">
                   <p class="my-auto" style="color:yellow ;font-size:30px;font-weight: bold;">VS</p>
               </div>
               <div class="col-3  text-center">
               <img width="90" height="90" src="<?php echo $arrMatch[$i]->getAwayTeamLogo();?>" alt="">
           </div>
           </div>
           
           <div class="row align-items-center">
               <div class="col-3  text-center">
                   <p style="color:yellow;font-size:20px;font-weight: bold;"><?php echo $arrMatch[$i]->getHomeTeam();?></p>
               </div>
               <div class="col-6 text-center">
                   
               </div>
               <div class="col-3 text-center">
                   <p style="color:yellow;font-size:20px;font-weight: bold;"><?php echo $arrMatch[$i]->getAwayTeam();?></p>
           </div>
           </div>
           
           <div class="row align-items-center">
               <div class="col-3  text-center">
                   <p style="color:yellow;font-size:40px;font-weight: bold;"><?php echo $arrMatch[$i]->getHomeTeamScore();?></p>
               </div>
               <div class="col-6 text-center">
                   
               </div>
               <div class="col-3 text-center">
               <p style="color:yellow;font-size:40px;font-weight: bold;"><?php echo $arrMatch[$i]->getAwayTeamScore();?></p>
           </div>
            
           </div>
           
          
           
          </div>
          <?php
 }
}
     else
    { 
        echo '<div class="container responsive">
<h1 class="danger" 
style="text-align:center;
    font-size:30px;
    color:red;
    font-weight: bold;
    font-family: cursive;"
>Pas de matche....</i></h1>
</div>';
    }
} 
    } 
  }
    else
    {
         $arrMatch = getTodayMatch();
    if($arrMatch != 'false')
    {
    for($i=0;$i<count($arrMatch);$i++)
    {
       // echo 'hello';
?>
  
  <br>
      <div class="container" style="border: 5px solid #1f7810;background-image:url('Images/Pictures/stade.jpg');  background-repeat: no-repeat;
      background-size: cover;" >
             
             <div class="text-center">
              <p style="color:yellow ;font-size:25px;font-weight: bold;"><?php echo $arrMatch[$i]->getStatus();?></p>
           </div>
           <div class="text-center">
              <p style="color:white ;font-size:20px;font-weight: bold;"><?php echo $arrMatch[$i]->getDate(); echo ' ' ; echo $arrMatch[$i]->getTime(); ?></p>
           </div>
           <div class="text-center">
               <img width="120" height="120" src="Images/Logos/Laligue.png" alt="">
           </div>
           <div class="row align-items-center">
               <div class="col-3 text-center">
                  <img width="90" height="90" src="<?php echo $arrMatch[$i]->getHomeTeamLogo();?>" alt="">
               
               </div>
               <div class="col-6 text-center">
                   <p class="my-auto" style="color:yellow ;font-size:30px;font-weight: bold;">VS</p>
               </div>
               <div class="col-3  text-center">
               <img width="90" height="90" src="<?php echo $arrMatch[$i]->getAwayTeamLogo();?>" alt="">
           </div>
           </div>
           
           <div class="row align-items-center">
               <div class="col-3  text-center">
                   <p style="color:white;font-size:20px;font-weight: bold;"><?php echo $arrMatch[$i]->getHomeTeam();?></p>
               </div>
               <div class="col-6 text-center">
                   
               </div>
               <div class="col-3 text-center">
                   <p style="color:white;font-size:20px;font-weight: bold;"><?php echo $arrMatch[$i]->getAwayTeam();?></p>
           </div>
           </div>
           
           <div class="row align-items-center">
               <div class="col-3  text-center">
                   <p style="color:yellow;font-size:40px;font-weight: bold;"><?php echo $arrMatch[$i]->getHomeTeamScore();?></p>
               </div>
               <div class="col-6 text-center">
                   
               </div>
               <div class="col-3 text-center">
               <p style="color:yellow;font-size:40px;font-weight: bold;"><?php echo $arrMatch[$i]->getAwayTeamScore();?></p>
           </div>
            
           </div>
           
          
           
          </div>
          <?php
 }
}
     else
    { 
        echo '<div class="container responsive">
<h1 class="danger" 
style="text-align:center;
    font-size:30px;
    color:red;
    font-weight: bold;
    font-family: cursive;"
>Pas de matche....</i></h1>
</div>';
    }

    }
    
?>




<?php  include "footer.php" ?> 
          
