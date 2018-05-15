<?php
/**
 * Created by PhpStorm.
 * User: Ludi
 * Date: 01.05.2018
 * Time: 10:01
 */

class GameModel
{
    public static function saveScoreAndAttempts($playerid, $score, $gametype)
    {
        $db = new Database();

        //prevent SQL Injection:
        $playerid = $db->escapeString($playerid);
        $score = $db->escapeString($score);
        $gametype = $db->escapeString($gametype);

        $sql = "INSERT INTO game(`playerid`,`overallPoints`,`gametype`) VALUES('".$playerid."','".$score."','".$gametype."')";
        $db->query($sql);
    }


    public static function getScoreBoardForGame($gametype)
    {
        $db = new Database();
        $gametype = $db->escapeString($gametype);
        $sql = "SELECT p.username,g.overallPoints FROM game g LEFT JOIN players p ON g.playerid=p.playerid WHERE g.gametype='".$gametype."' ORDER BY g.overallPoints DESC "; //LIMIT pos, anzahl -> besten 10 LIMIT 0, 10
        $result = $db->query($sql);

        $scores = array();

        while($row = $db->fetchObject($result))
        {
            $scores[] = $row;
        }

        return $scores;

    }

    //... and other awesome stuff in the Game1Model that we are currently not interessted in...
}

?>