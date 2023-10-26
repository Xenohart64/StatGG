<!-- Match History -->
<div class='uk-container uk-background-muted'>
@foreach($matches as $match)
    <ul uk-accordion>
        <li class='uk-close'>
                @for($j=0;$j<count($match["participants"]);$j++)
                    @if($match["participants"][$j]->summonerName == $summoner->name)
                        @switch($match["participants"][$j]->summoner1Id)
                            @case(21)
                                @php
                                    $summonerSpell1 = "SummonerBarrier"
                                @endphp
                                @break
                            @case(1)
                                @php
                                    $summonerSpell1 = "SummonerBoost";
                                    @endphp
                                @break
                            @case(14)
                                @php
                                    $summonerSpell1 = "SummonerDot";
                                    @endphp
                                @break
                            @case(3)
                                @php
                                    $summonerSpell1 = "SummonerExhaust";
                                    @endphp
                                @break
                            @case(4)
                                @php
                                    $summonerSpell1 = "SummonerFlash";
                                    @endphp
                                @break
                            @case(6)
                                @php
                                    $summonerSpell1 = "SummonerHaste";
                                    @endphp
                                @break
                            @case(7)
                                @php
                                    $summonerSpell1 = "SummonerHeal";
                                    @endphp
                                @break
                            @case(13)
                                @php
                                    $summonerSpell1 = "SummonerMana";
                                    @endphp
                                @break
                            @case(30)
                                @php
                                    $summonerSpell1 = "SummonerPoroRecall";
                                    @endphp
                                @break
                            @case(31)
                                @php
                                    $summonerSpell1 = "SummonerPoroThrow";
                                    @endphp
                                @break
                            @case(11)
                                @php
                                    $summonerSpell1 = "SummonerSmite";
                                    @endphp
                                @break
                            @case(39)
                                @php
                                    $summonerSpell1 = "SummonerSnowURFSnowball_Mark";
                                    @endphp
                                @break
                            @case(32)
                                @php
                                    $summonerSpell1 = "SummonerSnowball";
                                    @endphp
                                @break
                            @case(12)
                                @php
                                    $summonerSpell1 = "SummonerTeleport";
                                    @endphp
                                @break
                            @case(2202)
                                @php
                                    $summonerSpell1 = "SummonerCherryFlash";
                                    @endphp
                                @break
                            @case(2201)
                                @php
                                    $summonerSpell1 = "SummonerCherryHold";
                                    @endphp
                                @break
                        @endswitch
                        
                        @switch($match["participants"][$j]->summoner2Id)
                            @case(21)
                                @php
                                    $summonerSpell2 = "SummonerBarrier";
                                    @endphp
                                @break
                            @case(1)
                                @php
                                    $summonerSpell2 = "SummonerBoost";
                                    @endphp
                                @break
                            @case(14)
                                @php
                                    $summonerSpell2 = "SummonerDot";
                                    @endphp
                                @break
                            @case(3)
                                @php
                                    $summonerSpell2 = "SummonerExhaust";
                                    @endphp
                                @break
                            @case(4)
                            @php
                                $summonerSpell2 = "SummonerFlash";
                                @endphp
                                @break
                            @case(6)
                            @php
                                $summonerSpell2 = "SummonerHaste";
                                @endphp
                                @break;
                            @case(7)
                            @php
                                $summonerSpell2 = "SummonerHeal";
                                @endphp
                                @break
                            @case(13)
                            @php
                                $summonerSpell2 = "SummonerMana";
                                @endphp
                                @break
                            @case(30)
                            @php
                                $summonerSpell2 = "SummonerPoroRecall";
                                @endphp
                                @break
                            @case(31)
                            @php
                                $summonerSpell2 = "SummonerPoroThrow";
                                @endphp
                                @break
                            @case(11)
                            @php
                                $summonerSpell2 = "SummonerSmite";
                                @endphp
                                @break
                            @case(39)
                            @php
                                $summonerSpell2 = "SummonerSnowURFSnowball_Mark";
                                @endphp
                                @break
                            @case(32)
                            @php
                                $summonerSpell2 = "SummonerSnowball";
                                @endphp
                                @break
                            @case(12)
                            @php
                                $summonerSpell2 = "SummonerTeleport";
                                @endphp
                                @break
                            @case(2202)
                            @php
                                $summonerSpell2 = "SummonerCherryFlash";
                                @endphp
                                @break
                            @case(2201)
                            @php
                                $summonerSpell2 = "SummonerCherryHold";
                                @endphp
                                @break
                        @endswitch

                        
                        @if($match["participants"][$j]->win == true)
                            <a class='uk-accordion-title' href='#' style='background-color: #AED6F1'>
                        @else
                            <a class='uk-accordion-title' href='#' style='background-color: #F5B7B1'>
                        @endif
                            {{$match["gameType"]}}<br/>
                            {{$match["participants"][$j]->championName}}
                            <img style='width:50px;' src='http://ddragon.leagueoflegends.com/cdn/{{json_decode($version)[0]}}/img/champion/{{$match["participants"][$j]->championName}}.png'>
                            {{$match["participants"][$j]->champLevel}} 
                            <img style='width:25px;' src='http://ddragon.leagueoflegends.com/cdn/{{json_decode($version)[0]}}/img/spell/{{$summonerSpell1}}.png'>
                            <img style='width:25px;' src='http://ddragon.leagueoflegends.com/cdn/{{json_decode($version)[0]}}/img/spell/{{$summonerSpell2}}.png'>  
                            {{$match["participants"][$j]->kills}}/
                            {{$match["participants"][$j]->deaths}}/
                            {{$match["participants"][$j]->assists}}

                            @if($match["participants"][$j]->item0 != 0)
                                <img style='width:25px;' src='http://ddragon.leagueoflegends.com/cdn/{{json_decode($version)[0]}}/img/item/{{$match["participants"][$j]->item0}}.png'>
                            @endif
                            @if($match["participants"][$j]->item1 != 0)
                                <img style='width:25px;' src='http://ddragon.leagueoflegends.com/cdn/{{json_decode($version)[0]}}/img/item/{{$match["participants"][$j]->item1}}.png'>
                            @endif
                            @if($match["participants"][$j]->item2 != 0)
                                <img style='width:25px;' src='http://ddragon.leagueoflegends.com/cdn/{{json_decode($version)[0]}}/img/item/{{$match["participants"][$j]->item2}}.png'>
                            @endif
                            @if($match["participants"][$j]->item3 != 0)
                                <img style='width:25px;' src='http://ddragon.leagueoflegends.com/cdn/{{json_decode($version)[0]}}/img/item/{{$match["participants"][$j]->item3}}.png'>
                            @endif
                            @if($match["participants"][$j]->item4 != 0)
                                <img style='width:25px;' src='http://ddragon.leagueoflegends.com/cdn/{{json_decode($version)[0]}}/img/item/{{$match["participants"][$j]->item4}}.png'>
                            @endif
                            @if($match["participants"][$j]->item5 != 0)
                                <img style='width:25px;' src='http://ddragon.leagueoflegends.com/cdn/{{json_decode($version)[0]}}/img/item/{{$match["participants"][$j]->item5}}.png'>
                            @endif
                            </a>
                    @endif
                @endfor

                    
                

            <div class="uk-accordion-content">
                <table class="uk-table uk-table-divider uk-table-justify uk-table-middle">
                    <thead>
                        <tr>
                            <th scope="col" class="">Summoner</th>                                
                            <th scope="col" class=''>Champ</th>
                            <th scope="col" class=''>Items</th>
                            <th scope="col" class=''>Level</th>
                            <th scope="col" class=''>KDA</th>
                        </tr>
                    </thead>
                    <tbody>
                    

    @for($j=0;$j<count($match["participants"]);$j++)
        @switch($match["participants"][$j]->summoner1Id)
            @case(21)
                @php
                    $summonerSpell1 = "SummonerBarrier"
                @endphp
                @break
            @case(1)
                @php
                    $summonerSpell1 = "SummonerBoost";
                    @endphp
                @break
            @case(14)
                @php
                    $summonerSpell1 = "SummonerDot";
                    @endphp
                @break
            @case(3)
                @php
                    $summonerSpell1 = "SummonerExhaust";
                    @endphp
                @break
            @case(4)
                @php
                    $summonerSpell1 = "SummonerFlash";
                    @endphp
                @break
            @case(6)
                @php
                    $summonerSpell1 = "SummonerHaste";
                    @endphp
                @break
            @case(7)
                @php
                    $summonerSpell1 = "SummonerHeal";
                    @endphp
                @break
            @case(13)
                @php
                    $summonerSpell1 = "SummonerMana";
                    @endphp
                @break
            @case(30)
                @php
                    $summonerSpell1 = "SummonerPoroRecall";
                    @endphp
                @break
            @case(31)
                @php
                    $summonerSpell1 = "SummonerPoroThrow";
                    @endphp
                @break
            @case(11)
                @php
                    $summonerSpell1 = "SummonerSmite";
                    @endphp
                @break
            @case(39)
                @php
                    $summonerSpell1 = "SummonerSnowURFSnowball_Mark";
                    @endphp
                @break
            @case(32)
                @php
                    $summonerSpell1 = "SummonerSnowball";
                    @endphp
                @break
            @case(12)
                @php
                    $summonerSpell1 = "SummonerTeleport";
                    @endphp
                @break
            @case(2202)
                @php
                    $summonerSpell1 = "SummonerCherryFlash";
                    @endphp
                @break
            @case(2201)
                @php
                    $summonerSpell1 = "SummonerCherryHold";
                    @endphp
                @break
        @endswitch
                        
        @switch($match["participants"][$j]->summoner2Id)
            @case(21)
                @php
                    $summonerSpell2 = "SummonerBarrier";
                    @endphp
                @break
            @case(1)
                @php
                    $summonerSpell2 = "SummonerBoost";
                    @endphp
                @break
            @case(14)
                @php
                    $summonerSpell2 = "SummonerDot";
                    @endphp
                @break
            @case(3)
                @php
                    $summonerSpell2 = "SummonerExhaust";
                    @endphp
                @break
            @case(4)
            @php
                $summonerSpell2 = "SummonerFlash";
                @endphp
                @break
            @case(6)
            @php
                $summonerSpell2 = "SummonerHaste";
                @endphp
                @break
            @case(7)
            @php
                $summonerSpell2 = "SummonerHeal";
                @endphp
                @break
            @case(13)
            @php
                $summonerSpell2 = "SummonerMana";
                @endphp
                @break
            @case(30)
            @php
                $summonerSpell2 = "SummonerPoroRecall";
                @endphp
                @break
            @case(31)
            @php
                $summonerSpell2 = "SummonerPoroThrow";
                @endphp
                @break
            @case(11)
            @php
                $summonerSpell2 = "SummonerSmite";
                @endphp
                @break
            @case(39)
            @php
                $summonerSpell2 = "SummonerSnowURFSnowball_Mark";
                @endphp
                @break
            @case(32)
            @php
                $summonerSpell2 = "SummonerSnowball";
                @endphp
                @break
            @case(12)
            @php
                $summonerSpell2 = "SummonerTeleport";
                @endphp
                @break
            @case(2202)
            @php
                $summonerSpell2 = "SummonerCherryFlash";
                @endphp
                @break
            @case(2201)
            @php
                $summonerSpell2 = "SummonerCherryHold";
                @endphp
                @break
        @endswitch
        @if($j < 5)
            <tr style='background-color: #AED6F1'> <th scope='row'> 
        @else
            <tr style='background-color: #F5B7B1'> <th scope='' class='uk-text-emphasis'>
        @endif
            {{$match["participants"][$j]->summonerName}}
            </th> <td class='uk-text-emphasis'>
            {{$match["participants"][$j]->championName}} <img style='width:50px;' src='http://ddragon.leagueoflegends.com/cdn/{{json_decode($version)[0]}}/img/champion/{{$match["participants"][$j]->championName}}.png'>
            <img style='width:25px;' src='http://ddragon.leagueoflegends.com/cdn/{{json_decode($version)[0]}}/img/spell/{{$summonerSpell1}}.png'>
            <img style='width:25px;' src='http://ddragon.leagueoflegends.com/cdn/{{json_decode($version)[0]}}/img/spell/{{$summonerSpell2}}.png'>    
            </td>
            <td class='uk-text-emphasis'>
            @if($match["participants"][$j]->item0 != 0)
                <img style='width:25px;' src='http://ddragon.leagueoflegends.com/cdn/{{json_decode($version)[0]}}/img/item/{{$match["participants"][$j]->item0}}.png'>
            @endif
            @if($match["participants"][$j]->item1 != 0)
                <img style='width:25px;' src='http://ddragon.leagueoflegends.com/cdn/{{json_decode($version)[0]}}/img/item/{{$match["participants"][$j]->item1}}.png'>
            @endif
            @if($match["participants"][$j]->item2 != 0)
                <img style='width:25px;' src='http://ddragon.leagueoflegends.com/cdn/{{json_decode($version)[0]}}/img/item/{{$match["participants"][$j]->item2}}.png'>
            @endif
            @if($match["participants"][$j]->item3 != 0)
                <img style='width:25px;' src='http://ddragon.leagueoflegends.com/cdn/{{json_decode($version)[0]}}/img/item/{{$match["participants"][$j]->item3}}.png'>
            @endif
            @if($match["participants"][$j]->item4 != 0)
                <img style='width:25px;' src='http://ddragon.leagueoflegends.com/cdn/{{json_decode($version)[0]}}/img/item/{{$match["participants"][$j]->item4}}.png'>
            @endif
            @if($match["participants"][$j]->item5 != 0)
                <img style='width:25px;' src='http://ddragon.leagueoflegends.com/cdn/{{json_decode($version)[0]}}/img/item/{{$match["participants"][$j]->item5}}.png'>
            @endif
            </td>
            <td class='uk-text-emphasis'> 
            {{$match["participants"][$j]->champLevel}}
            </td> <td class='uk-text-emphasis'>
            {{$match["participants"][$j]->kills}}/
            {{$match["participants"][$j]->deaths}}/
            {{$match["participants"][$j]->assists}}</td> </tr>
        
    @endfor
                    </tbody>
                </table>
            </div>
            </li>
            <hr class='uk-divider-icon'>
            </ul>
@endforeach
    </div>
