@extends('layouts.base-new')
@section('body')
    <p>Le club évolue dans quatre gymnases pour permettre de couvrir les entraînements de chaque équipe.</p>
    Cliquez sur le nom du gymnase pour accéder à l'adresse depuis Google Maps.
    <ol>
        <li><a href="https://www.google.fr/maps/dir/46.1421997,6.07182//@46.1413579,6.0710797,386m/data=!3m1!1e3">Lycée
                Madame De Staël</a> - 13, Route de Thairy - 74160 Saint-Julien-en-Genevois</li>
        <li><a href="https://www.google.fr/maps/dir/46.1424696,6.1465733//@46.1414976,6.1463051,386m/data=!3m1!1e3">Gymnase
                Du Salève</a> - 209, Route de Bossey - 74160 Collonges-sous-Salève</li>
        <li><a href="https://www.google.fr/maps/dir/46.1094914,5.9710308//@46.1091669,5.9703629,193m/data=!3m1!1e3">Espace
                Albert Fol</a> - 181, Route de Saint-Julien-en-Genevois - 74520 Valleiry</li>
        <li><a href="https://www.google.fr/maps/dir/46.146558,6.0896273//@46.1463777,6.0894664,386m/data=!3m1!1e3">Gymnase
                Des Burgondes</a> - 1, Rue Jean Verne - 74160 Saint-Julien-en-Genevois</li>
    </ol>
    <p class="emphasys">Le gymnase principal où sont joués les matchs du week-end est celui du Lycée Madame De Staël.</p>
@endsection()
@section('script')    
<script>
        $(function() {
            $("#training-room").addClass('active');
        });
</script>
@endsection()