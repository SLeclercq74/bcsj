@extends('layouts.base-new')
@section('body')
    <section class="container">
        <article>
            <p>Si vous désirez nous contacter, pour toute demande merci de nous envoyer un mail avec l'objet de votre
                requête à l'adresse mail suivante: <a
                    href="mailto:info@basket-club-st-julien.org">info@basket-club-st-julien.org</a></p>
            <p>En ce qui concerne les inscriptions (licence, stages...) merci d'envoyer tous les documents demandés à
                l'adresse suivante:</p>
            <p>Basket Club Saint-Julien - Chez Yannick Lecomte - 1281, Route de Lathoy - 74160 Saint-Julien-en-Genevois</p>
        </article>
    </section>
@endsection()
@section('script')    
<script>
        $(function() {
            $("#contact").addClass('active');
        });
</script>
@endsection()
