<?php
/**
 * Created by PhpStorm.
 * User: Ludi
 * Date: 01.05.2018
 * Time: 10:01
 */

class Game1Model
{
    public static function saveScoreAndAttempts($playerid, $score, $attempts)
    {
        $db = new Database();

        //prevent SQL Injection:
        $playerid = $db->escapeString($playerid);
        $score = $db->escapeString($score);
        $attempts = $db->escapeString($attempts);

        $sql = "INSERT INTO game1(`playerid`,`attempts`,`score`) VALUES('".$playerid."','".$score."','".$attempts."')";
        $db->query($sql);
    }

    //... and other awesome stuff in the Game1Model that we are currently not interessted in...
}

?>