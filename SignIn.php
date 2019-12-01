<!DOCTYPE html>
<!--le code php de button SignIn fait un recherche d'un utilisateur est ce déja exist ou pas et
     vérifier les champs -->
<?php

session_start();

$bdd = new PDO('mysql:host=localhost;dbname=bd_football_scores_v2;charset=utf8', 'root', '');

if(isset($_POST['btnsignin'])) {
   $userName = htmlspecialchars($_POST['UserName']);
   $passWord = $_POST['PassWord'];
      if(!empty($userName) AND !empty($passWord)) 
      {
         $requser = $bdd->prepare("SELECT * FROM tbl_inscription  WHERE  Name= ? AND  Password= ?");
         $requser->execute(array($userName, $passWord));
         $userexist = $requser->rowCount();
         if($userexist == 1) {

            $userinfo = $requser->fetch();
            $_SESSION['Name'] = $userinfo['Name'];
            $_SESSION['Last_name'] = $userinfo['Last_name'];
            $_SESSION['Id'] = $userinfo['Id'];

            header("Location: head.php?id=".$_SESSION['Id']."&lastName=". $_SESSION['Last_name']."&name=".$_SESSION['Name']);

         } else 
         {
            $erreur = " UserName Or PassWord Incorrect !";
         }

      } else 
         {
          $erreur = "Tous les champs doivent être complétés !";
          //All fields must be completed
         }
}

?>
<html>
<head>
	<title>Sign In</title>
	<link rel="stylesheet" type="text/css" href="Css/StyleSignIn.css">
</head>
<body>
<div class="login-box">

 <form action="" method="post">
   <h1>Login :</h1>

      <div class="textbox">
	      <i class="fa fa-user fa-lg fa-fw" aria-hidden="true"></i>
	       <input type="text" name="UserName"  placeholder="UserName" >
      </div>
<br>
     <div class="textbox">
		<i class="fa fa-lock" aria-hidden="true"></i>
		<input type="password" name="PassWord"  placeholder="PassWord" >
	</div>

	<!--le code php suivant affiche l'utilisateur n'exist pas ou les champs vide
	       le variable (erreur) provient de code php précédent -->
	 	<?php
         if(isset($erreur)) 
         {
            echo '<font color="red">'.$erreur.'</font>';
         }
        ?>

	<input class="btn" type="submit" name="btnsignin" value="Sign in">
<br>
	<p> if you don't have account &ensp; <a href="Login/Inscription_Login.php" >  Sign Up </a> </p>
 </form>

</div>
</body>
</html>