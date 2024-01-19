@inject('carbon', 'Carbon\Carbon')
<h1>{{ $title }}</h1>
<div class="stm-upcoming-events_list">
<ul>
    @foreach ( $matchs as $match )
    <li class="clearfix stm-event-item">
        <div class="event_date heading-font">
            <div class="date">
                <div class="stm-top"><span>{{$carbon::parse($match->date)->translatedFormat('d')}}</span><figure class="stm-red">/</figure>{{$carbon::parse($match->date)->translatedFormat('m')}}
                </div>
                <div class="stm-middle stm-red">{{$carbon::parse($match->date)->translatedFormat('l')}}</div>
                <div class="stm-bottom stm-italic">{{$carbon::parse($match->time)->translatedFormat('H:i')}} - {{$match->location}}</div>
            </div>
        </div>
        <div class="clearfix">
            <div class="commands">
                <h3> 
                    <div class="row d-flex align-items-center justify-content-center">
                        <div class="col text-center">
                            <img src="/assets/logo-club/{{$match->receivingLogo}}">
                            <div>{{$match->receivingName}}</div>
                        </div>
                        <div class="col d-flex align-items-center justify-content-center flex-column ">
                            <div class="stm-red">{{$match->categoryName}}</div>
                        </div>
                        <div class="col text-center">
                            <img src="/assets/logo-club/{{$match->visitorLogo}}">
                            <div>{{$match->visitorName}}</div>
                        </div>
                    </div>
                </h3>
            </div>
        </div>
    </li>
    @endforeach
</ul>
</div>
