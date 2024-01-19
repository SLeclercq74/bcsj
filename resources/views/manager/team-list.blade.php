<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Liste des équipes') }}
        </h2>
    </x-slot>


    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8 space-y-6">
            <table class="table" >
                <thead>
                    <tr>
                        <td>Logo</td>
                        <td>nom du club</td>
                        <td></td>
                    <tr>
                </thead>
                <tbody>  
                    @foreach ( $teams as $team )
                    <tr >
                        <td class="align-middle"><img src="/assets/logo-club/{{$team->logo}}"></td>
                        <td class="align-middle">{{$team->name}}</td>
                        <td class="align-middle"><button type="button" class="btn btn-outline-danger">Modifier</button></td>
                    </tr>
                        {{-- <div class="p-4 sm:p-8 bg-white shadow sm:rounded-lg">
                        <div class="max-w-xl">
                            <div class="flex flex-row">
                                <div class="basis-1/4"><img src="/assets/logo-club/{{$team->logo}}"></div>
                                <div class="basis-1/4">{{$team->name}}</div>
                                <div class="basis-1/2">03</div>
                            </div>
                        </div>
                    </div> --}}
                    @endforeach
                </tbody>
            </table>
           
{{-- 
            <div class="p-4 sm:p-8 bg-white shadow sm:rounded-lg">
                <div class="max-w-xl">
                    @include('profile.partials.update-password-form')
                </div>
            </div>

            <div class="p-4 sm:p-8 bg-white shadow sm:rounded-lg">
                <div class="max-w-xl">
                    @include('profile.partials.delete-user-form')
                </div>
            </div> --}}
        </div>
    </div>
</x-app-layout>
