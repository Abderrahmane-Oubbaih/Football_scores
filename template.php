<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title><?php echo $title ?></title>
    <style>
    table,td,th{
        border: 2px solid black;
        border-collapse: collapse;
     }
</style>
</head>
<body>
    <h1 style="witdh:100%;background-color:grey;">Head</h1>
    
    <?php echo $content ?>
    
    <p style="witdh:100%;background-color:grey;">Footer<p>
</body>
</html>