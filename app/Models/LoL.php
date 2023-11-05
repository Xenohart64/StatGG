<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class LoL extends Model
{ 
    const API = "";
    
    //////////////////////////////////////
    /////////////Summoner/////////////////
    //////////////////////////////////////
    
    public function getSummonerByName($server, $name){
        $url = "https://$server.api.riotgames.com/lol/summoner/v4/summoners/by-name/$name?api_key=".$this::API;
        //open connection
        $ch = curl_init();

        //set the url, number of POST vars, POST data
        curl_setopt($ch, CURLOPT_URL, $url);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
        curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
        
        /*$headers = array(
           "X-Riot-Token: RGAPI-a56be06f-2d11-498e-9574-c7bb482ba5a4",
        );
        
        curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);*/

        //execute post
        $result = curl_exec($ch);

        //close connection
        curl_close($ch);

        return $result;
    }
    
    public function getSummonerByPUUID($server, $puuid){
        $url = "https://$server.api.riotgames.com/lol/summoner/v4/summoners/by-puuid/$puuid?api_key=".$this::API;
        //open connection
        $ch = curl_init();

        //set the url, number of POST vars, POST data
        curl_setopt($ch, CURLOPT_URL, $url);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
        curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
        
        /*$headers = array(
           "X-Riot-Token: RGAPI-a56be06f-2d11-498e-9574-c7bb482ba5a4",
        );
        
        curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);*/

        //execute post
        $result = curl_exec($ch);

        //close connection
        curl_close($ch);

        return $result;
    }
    
    public function getRankById($server, $id){
        $url = "https://$server.api.riotgames.com/lol/league/v4/entries/by-summoner/$id?api_key=".$this::API;
        
        $ch = curl_init();

        //set the url, number of POST vars, POST data
        curl_setopt($ch, CURLOPT_URL, $url);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
        curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
        
        /*$headers = array(
           "X-Riot-Token: RGAPI-a56be06f-2d11-498e-9574-c7bb482ba5a4",
        );
        
        curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);*/

        //execute post
        $result = curl_exec($ch);

        //close connection
        curl_close($ch);

        return $result;
    }
    
    //////////////////////////////////////
    ////////////////Match/////////////////
    //////////////////////////////////////
    
    public function getMatches($server, $puuid){
        $url = "https://$server.api.riotgames.com/lol/match/v5/matches/by-puuid/$puuid/ids?start=0&count=5&api_key=".$this::API;
        
        $ch = curl_init();

        //set the url, number of POST vars, POST data
        curl_setopt($ch, CURLOPT_URL, $url);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
        curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
        
        /*$headers = array(
           "X-Riot-Token: RGAPI-a56be06f-2d11-498e-9574-c7bb482ba5a4",
        );
        
        curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);*/

        //execute post
        $result = curl_exec($ch);

        //close connection
        curl_close($ch);

        return $result;
    }
    
    public function getMatchById($server,$matchId){
        $url = "https://$server.api.riotgames.com/lol/match/v5/matches/$matchId?api_key=".$this::API;
        
        $ch = curl_init();

        //set the url, number of POST vars, POST data
        curl_setopt($ch, CURLOPT_URL, $url);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
        curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
        
        /*$headers = array(
           "X-Riot-Token: RGAPI-a56be06f-2d11-498e-9574-c7bb482ba5a4",
        );
        
        curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);*/

        //execute post
        $result = curl_exec($ch);

        //close connection
        curl_close($ch);

        return $result;
    }
    
    
    //////////////////////////////////////
    /////////////Game_Constant////////////
    //////////////////////////////////////
            
    public function getVersion(){
        $url = "https://ddragon.leagueoflegends.com/api/versions.json";
        
        $ch = curl_init();

        //set the url, number of POST vars, POST data
        curl_setopt($ch, CURLOPT_URL, $url);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
        curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
        
        /*$headers = array(
           "X-Riot-Token: RGAPI-a56be06f-2d11-498e-9574-c7bb482ba5a4",
        );
        
        curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);*/

        //execute post
        $result = curl_exec($ch);

        //close connection
        curl_close($ch);

        return $result;
    }
    
    public function getLanguage(){
        $url = "https://ddragon.leagueoflegends.com/cdn/languages.json";
        
        $ch = curl_init();

        //set the url, number of POST vars, POST data
        curl_setopt($ch, CURLOPT_URL, $url);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
        curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
        
        /*$headers = array(
           "X-Riot-Token: RGAPI-a56be06f-2d11-498e-9574-c7bb482ba5a4",
        );
        
        curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);*/

        //execute post
        $result = curl_exec($ch);

        //close connection
        curl_close($ch);

        return $result;
    }
    
    //////////////////////////////////////
    /////////////Champion/////////////////
    //////////////////////////////////////
    
    public function getChampions(){
        $version = $this->getVersion();
        $version = json_decode($version);
        $url = "http://ddragon.leagueoflegends.com/cdn/".$version[0]."/data/en_US/champion.json";
        
        $ch = curl_init();

        //set the url, number of POST vars, POST data
        curl_setopt($ch, CURLOPT_URL, $url);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
        curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
        
        /*$headers = array(
           "X-Riot-Token: RGAPI-a56be06f-2d11-498e-9574-c7bb482ba5a4",
        );
        
        curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);*/

        //execute post
        $result = curl_exec($ch);

        //close connection
        curl_close($ch);

        return $result;
    }
    
    public function getChampion($champion){
        $version = $this->getVersion();
        $version = $json_decode($version);
        $url = "http://ddragon.leagueoflegends.com/cdn/".$version[0]."/data/en_US/$champion.json";
        
        $ch = curl_init();

        //set the url, number of POST vars, POST data
        curl_setopt($ch, CURLOPT_URL, $url);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
        curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
        
        /*$headers = array(
           "X-Riot-Token: RGAPI-a56be06f-2d11-498e-9574-c7bb482ba5a4",
        );
        
        curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);*/

        //execute post
        $result = curl_exec($ch);

        //close connection
        curl_close($ch);

        return $result;
    }
    
    public function getChampionAsset($champion){
        $version = $this->getVersion();
        $version = json_decode($version);
        $url = "http://ddragon.leagueoflegends.com/cdn/".$version[0]."/img/champion/$champion.png";
        
        /*$ch = curl_init();

        //set the url, number of POST vars, POST data
        curl_setopt($ch, CURLOPT_URL, $url);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
        curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
        
        /*$headers = array(
           "X-Riot-Token: RGAPI-a56be06f-2d11-498e-9574-c7bb482ba5a4",
        );
        
        curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);

        //execute post
        $result = curl_exec($ch);

        //close connection
        curl_close($ch);*/
        
        $result = imagecreatefrompng($url);

        return $result;
    }
    
    //////////////////////////////////////
    /////////////Item/////////////////////
    //////////////////////////////////////
    
    public function getItems(){
        $version = $this->getVersion();
        $version = json_decode($version);
        $url = "http://ddragon.leagueoflegends.com/cdn/".$version[0]."/data/en_US/item.json";
        
        $ch = curl_init();

        //set the url, number of POST vars, POST data
        curl_setopt($ch, CURLOPT_URL, $url);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
        curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
        
        /*$headers = array(
           "X-Riot-Token: RGAPI-a56be06f-2d11-498e-9574-c7bb482ba5a4",
        );
        
        curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);*/

        //execute post
        $result = curl_exec($ch);

        //close connection
        curl_close($ch);

        return $result;
    }
    
    public function getItemAsset($item){
        $version = $this->getVersion();
        $version = json_decode($version);
        $url = "http://ddragon.leagueoflegends.com/cdn/".$version[0]."/img/item/$item.png";
        
        $ch = curl_init();

        //set the url, number of POST vars, POST data
        curl_setopt($ch, CURLOPT_URL, $url);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
        curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
        
        /*$headers = array(
           "X-Riot-Token: RGAPI-a56be06f-2d11-498e-9574-c7bb482ba5a4",
        );
        
        curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);*/

        //execute post
        $result = curl_exec($ch);

        //close connection
        curl_close($ch);

        return $result;
    }
    
    //////////////////////////////////////
    //////////Summoner_Spell//////////////
    //////////////////////////////////////
    
    public function getSummonerSpells(){
        $version = $this->getVersion();
        $version = json_decode($version);
        $url = "http://ddragon.leagueoflegends.com/cdn/".$version[0]."/data/en_US/summoner.json";
        
        $ch = curl_init();

        //set the url, number of POST vars, POST data
        curl_setopt($ch, CURLOPT_URL, $url);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
        curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
        
        /*$headers = array(
           "X-Riot-Token: RGAPI-a56be06f-2d11-498e-9574-c7bb482ba5a4",
        );
        
        curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);*/

        //execute post
        $result = curl_exec($ch);

        //close connection
        curl_close($ch);

        return $result;
    }
    
    public function getSummonerSpellAsset($summonerSpell){
        $version = $this->getVersion();
        $version = json_decode($version);
        $url = "http://ddragon.leagueoflegends.com/cdn/".$version[0]."/img/item/$summonerSpell.png";
        
        $ch = curl_init();

        //set the url, number of POST vars, POST data
        curl_setopt($ch, CURLOPT_URL, $url);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
        curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
        
        /*$headers = array(
           "X-Riot-Token: RGAPI-a56be06f-2d11-498e-9574-c7bb482ba5a4",
        );
        
        curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);*/

        //execute post
        $result = curl_exec($ch);

        //close connection
        curl_close($ch);

        return $result;
    }
    
    //////////////////////////////////////
    ///////////////Icon///////////////////
    //////////////////////////////////////
    
    public function getProfileIcons(){
        $version = $this->getVersion();
        $version = json_decode($version);
        $url = "http://ddragon.leagueoflegends.com/cdn/".$version[0]."/data/en_US/profileicon.json";
        
        $ch = curl_init();

        //set the url, number of POST vars, POST data
        curl_setopt($ch, CURLOPT_URL, $url);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
        curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
        
        /*$headers = array(
           "X-Riot-Token: RGAPI-a56be06f-2d11-498e-9574-c7bb482ba5a4",
        );
        
        curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);*/

        //execute post
        $result = curl_exec($ch);

        //close connection
        curl_close($ch);

        return $result;
    }
    
    public function getProfileIconAsset($profileIcon){
        $version = $this->getVersion();
        $version = json_decode($version);
        $url = "http://ddragon.leagueoflegends.com/cdn/".$version[0]."/img/item/$profileIcon.png";
        
        $ch = curl_init();

        //set the url, number of POST vars, POST data
        curl_setopt($ch, CURLOPT_URL, $url);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
        curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
        
        /*$headers = array(
           "X-Riot-Token: RGAPI-a56be06f-2d11-498e-9574-c7bb482ba5a4",
        );
        
        curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);*/

        //execute post
        $result = curl_exec($ch);

        //close connection
        curl_close($ch);

        return $result;
    }

    //////////////////////////////////////
    ///////////////Rune///////////////////
    //////////////////////////////////////

    public function getRunes(){
        $version = $this->getVersion();
        $version = json_decode($version);
        $url = "http://ddragon.leagueoflegends.com/cdn/".$version[0]."/data/en_US/runesReforged.json";
        
        $ch = curl_init();

        //set the url, number of POST vars, POST data
        curl_setopt($ch, CURLOPT_URL, $url);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
        curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
        
        /*$headers = array(
           "X-Riot-Token: RGAPI-a56be06f-2d11-498e-9574-c7bb482ba5a4",
        );
        
        curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);*/

        //execute post
        $result = curl_exec($ch);

        //close connection
        curl_close($ch);

        return $result;
    }
}
