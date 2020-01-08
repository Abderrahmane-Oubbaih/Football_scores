
  <?php ob_start();?>
   <h1>FOTSCOR</h1>
   <h1>Les matchs D'aujourd'hui en cours :</h1>
    <table style="">
        <tr><th>HM</th><th>HTS</th><th>AWS</th><th>AT</th><th>S</th><th>D</th><th>T</th><th>C</th><th>W</th><th>HTL</th><th>ATL</th></tr>
    <?php
    
    for($i=0;$i<count($result);$i++)
    {
    ?>
   
        <tr>
            <td><?php echo $result[$i]->getHomeTeam(); ?></td>
            <td><?php echo $result[$i]->getHomeTeamScore(); ?></td>
            <td><?php echo $result[$i]->getHomeTeamScore(); ?></td>
            <td><?php echo $result[$i]->getHomeTeamScore(); ?></td>
            <td><?php echo $result[$i]->getAwayTeam(); ?></td>
            <td><?php echo $result[$i]->getStatus(); ?></td>
            <td><?php echo $result[$i]->getDate(); ?></td>
            <td><?php echo $result[$i]->getTime(); ?></td>
            <td><?php echo $result[$i]->getCompetition(); ?></td>
            <td><?php echo $result[$i]->getHomeTeamLogo(); ?></td>
            <td><?php echo $result[$i]->getHomeTeamLogo(); ?></td>
        </tr>
    
    <?php } 
        $title = "Les matchs D'aujourd'hui en cours";
        $content = ob_get_clean();
        
        require_once("template.php");
    //echo count($result);
    //echo $result[0]->getHomeTeam();
    ?>
    </table>
    <style>
        table,td,th{
            border-width:1px;border-style:solid;border-color:black;
            border-collapse: collapse;
        }
    </style>
