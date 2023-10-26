<div class="uk-container uk-background-muted">
    Name:
    {{$summoner->name}}<br/>
    
    <!-- Profil Icon -->
    <img style='width:100px;' src='http://ddragon.leagueoflegends.com/cdn/{{json_decode($version)[0]}}/img/profileicon/{{$summoner->profileIconId}}.png'><br/>
    
    Level:
    {{$summoner->summonerLevel}}<br/>

    Rank:
    {{$rank[0]->tier}} {{$rank[0]->rank}} {{$rank[0]->leaguePoints}}lp<br/>
    <img style="width:100px;" src="/resources/images/ranked/emblems/Emblem_{{$rank[0]->tier}}.png"><br/>


    Winrate:
    {{$rank[0]->wins}}/{{$rank[0]->losses}} {{$winrate}}%
    <br/>
    <div class="progress">
        <div class="progress-bar" role="progressbar" style="width:<?=round($winrate, $précision = 0, $mode = PHP_ROUND_HALF_UP);?>%;" aria-valuemin="0" aria-valuemax="100">{{$rank[0]->wins}}</div>
        <div class="progress-bar bg-danger" role="progressbar" style="width:<?=round(100-$winrate, $précision = 0, $mode = PHP_ROUND_HALF_UP);?>%;" aria-valuemin="0" aria-valuemax="100">{{$rank[0]->losses}}</div>
    </div><br/>
</div><br/>
