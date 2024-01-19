@inject('carbon', 'Carbon\Carbon')

<h3>{{ $title }}</h3>
@foreach ( $matchs as $match )
  <div class="d-flex flex-row justify-content-start match">
    <div class=" align-self-start p-2"><img src="/assets/logo-club/{{$match->hostingLogo}}" style="width:70px"></div>
    <div class=" align-self-center p-2"><img src="/assets/logo-club/vs.png" style="width:30px"></div>
    <div class=" align-self-end p-2"><img src="/assets/logo-club/{{$match->receivingLogo}}" style="width:70px"></div>
    <div class=" align-self-start p-2 d-none d-md-block">
      <h5>{{$match->categoryName}} - {{$match->hostingName}} - {{$match->receivingName}}</h5>
      <h6>{{ $carbon::parse($match->date)->translatedFormat('l d F') }} {{$carbon::parse($match->time)->translatedFormat('H:i')}}</h6>
      <h6>{{$match->location}}</h6>
    </div>
    <div class=" align-self-center p-2 d-md-none">
      <h5>{{$match->categoryName}}</h5>
      <h6>{{ $carbon::parse($match->date)->translatedFormat('l d F') }} {{$carbon::parse($match->time)->translatedFormat('H:i')}}</h6>
      <h6>{{$match->location}}</h6>
    </div>
  </div>
  @endforeach

