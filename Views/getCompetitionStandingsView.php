
<?php
require_once("Controllers/getCompetitionStandings.php");
ob_start();
?>

  
  <!DOCTYPE html>
  <html lang="en">
  <head>
      <meta charset="UTF-8">
      <title>Document</title>
  </head>
  <body>
      <h1><?php echo $standings->competition; ?> Standings</h1>
   <h2>Matchday : <?php echo $standings->currentMatchDay; ?></h2>
    <table>
    <tr><th>team</th><th>position</th><th>played Games</th><th>won</th><th>draw</th><th>lost</th><th>points</th><th>gols for</th><th>goals against</th><th>goal difference</th></tr>
    <?php
    for($i=0;$i<count($standings->standingArray);$i++){
    ?>
    <tr>
        <td><?php echo $standings->standingArray[$i]->team; ?></td>
        <td><?php echo $standings->standingArray[$i]->position; ?></td>
        <td><?php echo $standings->standingArray[$i]->playedGames; ?></td>
        <td><?php echo $standings->standingArray[$i]->won; ?></td>
        <td><?php echo $standings->standingArray[$i]->draw; ?></td>
        <td><?php echo $standings->standingArray[$i]->lost; ?></td>
        <td><?php echo $standings->standingArray[$i]->points; ?></td>
        <td><?php echo $standings->standingArray[$i]->goalsFor; ?></td>
        <td><?php echo $standings->standingArray[$i]->goalsAgainst; ?></td>
        <td><?php echo $standings->standingArray[$i]->difference; ?></td>
    </tr>
    
    
</table>
<style>
    table,td,th{
        border: 2px solid black;
        border-collapse: collapse;
     }
</style>
  </body>
  </html>
  
  <?php  
        $title = "Classement de la".$standings->competition;
        $content = ob_get_clean();
        
        require_once("template.php");
    }
    ?>
   




