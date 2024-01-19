@extends('layouts.base-new')
@section('body')
    <div class="row">
        <div class="col-sm-12 col-md-12 col-lg-3 col-xl-2 order-lg-first order-last">
            {{-- <h1>NEWS</h1> --}}
            @include('partials.divers')
            @include('partials.news')
        </div>
        <div class="col-sm-12 col-md-12 col-lg-9 col-xl-10 ">
            @include('partials.event-central')
            {{-- @include('partials.3x3') --}}
            {{-- @include('partials.3x3artderue') --}}
            <div class="row game">
                <div class="col-sm-12 col-md-12 col-lg-12 col-xl-6">
                    @include('partials.new.game', [
                        'title' => 'MATCHS A DOMICILE',
                        'matchs' => $matchsInt,
                    ])
                </div>
                <div class="col-sm-12 col-md-12 col-lg-12 col-xl-6">
                    @include('partials.new.game', [
                        'title' => 'MATCH A L\'EXTERIEUR',
                        'matchs' => $matchsExt,
                    ])
                </div>
            </div>
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
    <script src="{{ URL('js/app.js') }}"></script>
@endsection()
