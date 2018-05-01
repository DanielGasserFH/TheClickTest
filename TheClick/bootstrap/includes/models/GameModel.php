<?php
/**
 * Created by PhpStorm.
 * User: Ludi
 * Date: 01.05.2018
 * Time: 10:01
 */

class GameModel
{
    public static function saveScoreAndAttempts($playerid, $score, $attempts)
    {
        $db = new Database();

        //prevent SQL Injection:
        $userid = $db->escapeString($playerid);
        $score = $db->escapeString($score);
        $attempts = $db->escapeString($attempts);

        $sql = "INSERT INTO game1(`playerid`,`attempts`,`score`) VALUES('".$userid."','".$score."','".$attempts."')";
        $db->query($sql);
    }

    //... and other awesome stuff in the GameModel that we are currently not interessted in...
}