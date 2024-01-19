@extends('layouts.base')
@section('body')
    <div class="row">
        <div class="col-sm-3 order-sm-first order-last">
            @include('partials.event')
        </div>
        <div class="col-sm">
            @include('partials.game',[
                'title' => 'Matchs à domicile',
                'matchs' => $matchsInt
                ] )
            @include('partials.game',[
            'title' => 'Matchs à l\'extérieur',
            'matchs' => $matchsExt
            ] )
        </div>
    </div>
    <aside class="d-none d-sm-block">
        @include('partials.sponsor')
    </aside>
@endsection()
@section('script')
    <script>
        $(function() {
            $("#home").addClass('active');
        });
    </script>
@endsection()
