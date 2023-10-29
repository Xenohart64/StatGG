<div class="uk-container uk-background-muted">
    Name:
    {{$summoner->name}}<br/>
    
    <!-- Profil Icon -->
    <img style='width:100px;' src='http://ddragon.leagueoflegends.com/cdn/{{json_decode($version)[0]}}/img/profileicon/{{$summoner->profileIconId}}.png'><br/>
    
    Level:
    {{$summoner->summonerLevel}}<br/>

    @foreach($ranks as $rank)
        @if($rank->queueType == "RANKED_SOLO_5x5")
            Rank Solo:
        @elseif ($rank->queueType == "RANKED_FLEX_SR")
            Rank Flex:
        @endif
        {{$rank->tier}} {{$rank->rank}} {{$rank->leaguePoints}}lp<br/>
        <img style="width:100px;" src="/resources/images/ranked/emblems/Emblem_{{$rank->tier}}.png"><br/>

        @php
            $winrate = $rank->wins + $rank->losses;
            $winrate = $rank->wins/$winrate*100;
            $winrate = round($winrate, $précision = 2, $mode = PHP_ROUND_HALF_UP);
        @endphp

        Winrate:
        {{$rank->wins}}/{{$rank->losses}} {{$winrate}}%
        
        <br/>
        <div class="progress">
            <div class="progress-bar" role="progressbar" style="width:<?=round($winrate, $précision = 0, $mode = PHP_ROUND_HALF_UP);?>%;" aria-valuemin="0" aria-valuemax="100">{{$rank->wins}}</div>
            <div class="progress-bar bg-danger" role="progressbar" style="width:<?=round(100-$winrate, $précision = 0, $mode = PHP_ROUND_HALF_UP);?>%;" aria-valuemin="0" aria-valuemax="100">{{$rank->losses}}</div>
        </div><br/>
            
    @endforeach
</div><br/>
