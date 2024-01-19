@extends('layouts.base-new')
@section('body')
<h3>Les équipes</h3>
@include('partials.teams')
<h3>Ouverture d'une équipe loisirs au BCSJ</h3>
    <p>Une nouveauté pour cette nouvelle saison, le BCSJ met en place une équipe loisirs MIXTE!</p>
    <p>Que vous ayez pratiqué ou que vous voulez débouter le basket venez nombreux à partir du vendredi 10 septembre de 20h30 à 22h00 à la salle des Burgondes pour partager un moment sportif et convivial!</p>
    <p>Cette équipe s'adresse aux personnes majeures, le Pass sanitaire est nécessaire pour accéder à la salle.</p>
    <p>NOUS VOUS SOUHAITONS UNE BONNE RENTREE SPORTIVE!</p>
<h3>Eveil basket</h3>
    <p>Depuis mes 9 ans je pratique le basket, j'ai même commencé dans ce club.</p>
    <p>Lorsque je suis devenue maman il y a 6 ans, j'ai proposé de faire de l'éveil basket a la fois pour partager ma passion pour ce sport, mais également faire véhiculer des valeurs qui me sont importantes comme le respect, l'esprit d'équipe, le partage, la tolérance, la discipline et la solidarité.</p>
    <p>L'éveil basket est proposé tous les samedis, de 10h à 11h, au Gymnase des Burgondes à Saint-Julien-en-Genevois pour les enfants de 3 à 5 ans, afin de pratiquer une activité physique et sportive, de partager des moments avec les autres enfants et leurs parents et de s'amuser avec la balle orange.</p>
    <p>Alors je vous donne rdv à partir du Samedi 12 Septembre 2020 avec vos baskets et votre gourde sur le terrain.</p>
    <p class="coach">"Coach Jess"</p>
@endsection()
@section('script')    
<script>
        $(function() {
            $("#teams").addClass('active');
        });
</script>
@endsection()