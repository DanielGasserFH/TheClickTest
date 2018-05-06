<?php
/**
 * Created by PhpStorm.
 * User: Ludi
 * Date: 06.05.2018
 * Time: 08:53
 */

class Game2Model
{
    public static function saveScoreAndAttempts($playerid, $score, $attempts)
    {
        $db = new Database();

        //prevent SQL Injection:
        $playerid = $db->escapeString($playerid);
        $score = $db->escapeString($score);
        $attempts = $db->escapeString($attempts);

        $sql = "INSERT INTO game2(`playerid`,`attempts`,`score`) VALUES('".$playerid."','".$score."','".$attempts."')";
        $db->query($sql);
    }

    //... and other awesome stuff in the GameModel that we are currently not interessted in...
}