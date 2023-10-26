<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\LoL;

class ProfilLolController extends Controller
{
    public function lol(){
            $lol = new LoL();

            $name = $_GET["name"];

            //Remplace les espaces
            if(str_contains($name, " ")){
                $name = str_replace(" ", "%20", $name);
            }

            $serverId = $_GET["server"];
            $version = $lol->getVersion();

            if($serverId == "euw1"){
                $server = "europe";
            }
            if($serverId == "na1"){
                $server = "america";
            }

            //Summoner infos
            $resultName = $lol->getSummonerByName($serverId, $name);
            $resultName = json_decode($resultName);
    
            //Rank infos
            $resultRank = $lol->getRankById($serverId, $resultName->id);
            $resultRank = json_decode($resultRank);

            //Match infos
            $resultMatches = $lol->getMatches($server, $resultName->puuid);
            $resultMatches = json_decode($resultMatches);
    
            //Match history
            for($i=0;$i<count($resultMatches);$i++){
                $match = json_decode($lol->getMatchById($server, $resultMatches[$i]));
                //dd($match);
                $info = $match->info;
                for($j=0;$j<count($match->info->participants);$j++){
                    $participants[] = $match->info->participants[$j];
                }
                $matchesList[] = array("info" => $info, "participants" => $participants);
                unset($info);
                unset($participants);
            }


            //winrate
            $winrate = $resultRank[0]->wins + $resultRank[0]->losses;
            $winrate = $resultRank[0]->wins/$winrate*100;
            $winrate = round($winrate, $précision = 2, $mode = PHP_ROUND_HALF_UP);
            
    
            return view('lol', ['summoner' => $resultName, 'rank' => $resultRank, 'version' => $version, 'matches' => $matchesList, 'winrate' => $winrate]);
    }
}
