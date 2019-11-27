<?php
try
            {
                $bdd = new PDO('mysql:host=localhost;dbname=football_scores;charset=utf8','root','');    
            }
            catch(Exception $e)
            {
                    die('Erreur : '.$e->getMessage());
            }
?>