<?php
if(isset($_GET["action"]) && $_GET["action"]="getMatchsInPlay")
{
    include("Controllers/getMatchsInPlay.php");
}
else
{
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
</head>
<body>
    <h1>Page d'acceuil</h1>
</body>
</html>
<?php }?>