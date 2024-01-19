@extends('layouts.base-new')
@section('body')
    <article>
        <h2>S'investir pleinement dans la vie associative</h2>
        <p>Notre équipe dynamique de bénévoles s’investit au quotidien pour animer la vie du club.</p>
        <p>Ils s'efforcent d'organiser tout au long de l’année des manifestations autour du basket, avec un esprit de
            convivialité : Stages durant les vacances scolaires, repas et soirée basket en famille, tombola, fête de noël...
        </p>
        <br>
        <h3>Le Comité est composé des personnes suivantes:</h3>
        <ul>
            <li>Présidence: Manuel Bossu</li>
            <li>Vice-Présidence: Christophe Veau</li>
            <li>Président d'honneur: Patrice Ettori</li>
            <li>Trésorière: Émilie Benarab</li>
            <li>Secrétaire: Lysiane Rambosson</li>
        </ul>
        <br>
        <h3>Commission sportive</h3>
        <ul>
            <li>Responsable: Yannick Lecomte</li>
            <li>Membres: Patrice Ettori, Sofiane Benarab</li>
        </ul>
        <br>
        <h3>Commission communications</h3>
        <ul>
            <li>Responsable: Christophe Veau</li>
            <li>Membres: Katerina Chmielova, Patrick Desfond, Jennifer Trinquesse, Sandra Masseron, Stéphanie Estienne,
                Lilou & Anna</li>
        </ul>
        <br>
        <h3>Commission évènements</h3>
        <ul>
            <li>Responsable: Killian Steiner, Stéphane Humblot</li>
            <li>Membres :Stéphane Humblot, Stéphanie Estienne, Anne-Claire Fereisen</li>
        </ul>
        <br>
        <h3>Historique et Fonctionnement du club</h3>
        <p>Créé en 1978, le Basket Club de Saint-Julien-en Genevois recensait pour la saison 2020-2021 plus de 200
            licenciés.
            Fortement investie dans la formation des jeunes basketteurs, l'école de baby et mini basket permet de prendre en
            charge les jeunes enfants dès 5 ans afin de leur apprendre à mieux connaître ce sport et à leur inculquer les
            bases de ce dernier. Lors de la saison 2020/2021 le club ouvre une nouvelle catégorie: l'éveil basket pour les
            enfants de 3 et 4 ans.
            Le club est composé de 16 équipes organisées par catégorie d'âge, de l'éveil basket aux Séniors, dont 10 d'entre
            elles sont engagées en championnat.
            Nous disposons également d'une école d'arbitrage avec l'obtention en 2008 de la labellisation départementale.
            L’organisation des entraînements est réalisée sur trois centres d’entraînement (Saint-Julien-en-Genevois,
            Valleiry et Collonges-sous-Salève) permettant ainsi de couvrir l’ensemble de l’agglomération et de donner
            l’opportunité à tous de nous rejoindre.</p>
    </article>
    </section>
@endsection()
@section('script')    
<script>
        $(function() {
            $("#club").addClass('active');
        });
</script>
@endsection()