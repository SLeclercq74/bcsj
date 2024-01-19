@extends('layouts.base-new')
@section('body')
    {{-- <h2>Saison 2022-2023 - Licence dématerialisée</h2>
    <div><span class="emphasys">1-</span>Compléter le bulletin d'inscription ci-joint (nouvelle inscription ou renouvellement de licence)</div>
    <div><span class="emphasys">2-A</span> Nouvelle inscription :</div>
        <ul>
            <li>Transmettre le bulletin avec le/les chèque(s) au coach ou responsable du club, ou les envoyer à l'adresse du BCSJ figurant sur le bulletin.</li>
            <li>Le/la licencié-e recevra ensuite un email lui permettant de compléter un formulaire en ligne. Il/elle devra notamment 
            préciser ses coordonnées, ajouter <b class="emphasys">une photo d'identité</b>, télécharger sa pièces d'identité.
            <br><i class="emphasys">(les licences ne sont pas validées si vous ne fournissez pas une photo conforme)</i></li>
        </ul>
    <div><span class="emphasys">2-B</span> Renouvellement de Licence :</div>
    <ul>
        <li>Transmettre le bulletin avec le/les chèque(s) au coach ou responsable du club, ou les envoyer à l'adresse du BCSJ figurant sur le bulletin.</li>
        <li>En parallèle, le/la licencié-e a dû recevoir un email de la <a href="http://www.ffbb.com/" target="blank">FFBB</a> lui proposant un lien pour
         accéder à sa page personnelle. Si tel n'est pas le cas, merci de prévenir le BCSJ par email. Un formulaire est à compléter en ligne, dans lequel le/la 
        licencié-e doit notamment préciser ses coordonnées, ajouter une photo d'identité, télécharger sa pièces d'identité.</li>
        <li>A noter, <b class="emphasys">le certificat médical n’est plus obligatoire pour les mineurs</b>. Celui-ci est remplacé par 
        un questionnaire de santé mineur en ligne. Pour les majeurs le certificat médical reste valable s'il a moins de 3 ans.</li>
    </ul>
    <div><span class="emphasys">3-</span>Le/la licencié-e reçoit sa licence par email, de façon dématérialisée.</div>
<br>
<div class="row">
    <div class="col">
        <a class="btn btn-outline-danger " download href="/assets/documents 2022-2023/Bulletin inscription - 22-23.pdf">
            <i class="fa fa-file-pdf-o" aria-hidden="true"></i> Inscription 2022-2023
        </a>
    </div>
</div> 

<br>
<p>Pour toute question, le BCSJ est à votre disposition à l'adresse <span class="emphasys">info@basket-club-st-julien.org</span>. Vous pouvez également trouver un guide d'utilisation via <a href="https://m.youtube.com/watch?v=v-CMTgoVyiw" target="blank">ce lien</a> et le FAQ de la licence <a href="http://www.ffbb.com/ffbb/e-licence" target="blank">ici</a>.</p>
<p>Sportivement,<br><span class="emphasys"> Le BCSJ</span></p>

<p>PS:</p>
<ul>
    <li>A noter que les titulaires de la carte Pass' Région bénéficiez d'une réduction de 30€ sur leur licence annuelle, à déduire du montant de l'inscription, Il est nécessaire de fournir une copie de la carte avec le bulletin d'inscription.</li>
    <li>Le club est affilié au dispositif Pass'sport, si vous y êtes éligible, les 50€ offert par le ministère sont à déduire du montant de l'inscription. Il est nécessaire de fournir une copie du courrier reçu avec le bulletin d'inscription.</li>
    
</ul>
<br>

<h3>Etre soutenu dès votre arrivée au club: voici comment...</h3>
<p>La CAF de votre région peut vous fournir une somme de 50€ déclinée en 5 Pass de 10€. Elle vous permet de financer votre inscription au club. Mais soyez prudents: <span class="emphasys">les modalités d'attribution varient d'une région à l'autre</span>.</p>

<p>Le Coupon Sport: ce coupon vous aide à financer une licence, une adhésion, des cours, un abonnement ou des stages sportifs au sein d'un club. Son montant peut prendre trois valeurs: 10, 15 ou 20€.
ces quelques paragraphes vous fourniront plus de données sur les <a href="https://www.papernest.com/etat-des-lieux/actualites/aides-pratique-sportive/" target="blank">Aides à la Pratique Sportive</a>.</p>


<br> --}}
    <h2>Inscription pour la saison 2023-2024</h2>
    <p>Bonjour à toutes et tous,</p>
    <p>Voici toutes les informations pour les inscriptions pour la prochaine saison, merci de lire attentivement les points
        suivants car la procédure change pour cette nouvelle saison.</p>

    <p>Afin de pouvoir continuer de permettre à chacun de progresser dans notre sport dans de bonnes conditions, nous
        sommes malheureusement contraints de limiter le nombre d'inscriptions par catégorie pour la saison à venir.
        Depuis le 1er septembre 2023, les inscriptions sont ouvertes à tous, anciens licenciés et nouveaux, dans la limite
        des places disponibles par catégorie.</p>

    <h2>Procédure de licence saison 2023-2024</h2>
    <p>
        Afin de moderniser notre procédure d'inscription, nous avons choisi cette année de procéder aux inscriptions en
        ligne.
    </p>
    <h3>Tarifs par catégorie</h3>
    <div class="row">
        <div class="col-sm-12 col-md-4">
            <table class="table table-hover">
                <thead>
                    <tr>
                        <th scope="col">Catégorie</th>
                        <th scope="col">Année de naissance</th>
                        <th scope="col" class="text-end">Tarifs (=licence + tombola + <br>chasuble (pour nouveau))</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>Eveil</td>
                        <td>2019-2020</td>
                        <td class="text-end">70,00 €</td>
                    </tr>
                    <tr>
                        <td>Baby basket</td>
                        <td>2017-2018</td>
                        <td class="text-end">155,00 €</td>
                    </tr>
                    <tr>
                        <td>Mini poussin-e-s</td>
                        <td>2015-2016</td>
                        <td class="text-end">165,00 €</td>
                    </tr>
                    <tr>
                        <td>U11 F/M</td>
                        <td>2013-2014</td>
                        <td class="text-end">195,00 €</td>
                    </tr>
                    <tr>
                        <td>U13 F/M</td>
                        <td>2011-2012</td>
                        <td class="text-end">205,00 €</td>
                    </tr>
                    <tr>
                        <td>U15 F/M</td>
                        <td>2009-2010</td>
                        <td class="text-end">205,00 €</td>
                    </tr>
                    <tr>
                        <td>U17 M</td>
                        <td>2007-2008</td>
                        <td class="text-end">215,00 €</td>
                    </tr>
                    <tr>
                        <td>U20 M</td>
                        <td>2004-2006</td>
                        <td class="text-end">215,00 €</td>
                    </tr>
                    <tr>
                        <td>U18 F</td>
                        <td>2006-2008</td>
                        <td class="text-end">215,00 €</td>
                    </tr>
                    <tr>
                        <td>Seniors M</td>
                        <td>2003 et avant</td>
                        <td class="text-end">225,00 €</td>
                    </tr>
                    <tr>
                        <td>Seniors F</td>
                        <td>2005 et avant</td>
                        <td class="text-end">225,00 €</td>
                    </tr>
                    <tr>
                        <td>Loisirs / 3*3</td>
                        <td>2006 et avant</td>
                        <td class="text-end">70,00 €</td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
    <h3>Etapes</h3>
    <h6><b class="emphasys">1 .</b> - Venir aux entraînements</h6>
    <h6><b class="emphasys">2 .</b> - Entraînements d'essai sont requis (pour les nouveaux comme pour les anciens), le
        planning des entraînements est disponible sur notre site et les réseaux sociaux</h6>
    <h6><span class="emphasys"> UNIQUEMENT</span> si votre place est validée par l'entraîneur, envoyer un mail à <a
            href="#">info@basket-club-st-julien.org</a> avec :</h6>

    </p>
    <div class="row">
        <div class="col-4">
            <ul class="list-group list-group-flush">
                <li class="list-group-item">Nom</li>
                <li class="list-group-item">Prénom</li>
                <li class="list-group-item">Date de naissance</li>
                <li class="list-group-item">Sexe</li>
                <li class="list-group-item">Catégorie si connue</li>
                <li class="list-group-item">Adresse mail de contact pour la fédération</li>
                <li class="list-group-item list-group-item-danger">Mentionner NON si vous n’autorisez pas votre enfant à
                    être transporté-e par d'autres parents ou par
                    un responsable du club lors des déplacements de son équipe.</li>
            </ul>
        </div>
    </div>
    <br>
    <h6><b class="emphasys">3 .</b> Au cours du mois de septembre, l'entraîneur vous indiquera si votre enfant peut intégrer
        l'équipe, en fonction des places disponibles par catégorie (les aptitudes sportives ou la date d'envoi du mail ne
        sont pas de critères prépondérants).</h6>

    <p>Dans les jours suivants vous recevrez un mail de la fédération vous invitant à saisir en ligne votre licence.
        Merci de tout sélectionner au minimum l'assurance type A, celle-ci est incluse dans le prix de la licence et ne vous
        sera pas facturée en supplément.
    Merci de tous sélectionner au minimum l'assurance type A, celle-ci est incluse dans le prix de la licence et ne vous
        sera pas facturée en supplément.</p>

    <p><b class="emphasys"> ! Ce mail peut se trouver dans vos indésirables !</b>

    <p>Si au bout de 3 jours après la validation de l'entraîneur, vous n'avez rien reçu, faites le nous savoir, la plateforme de la fédération peut rencontrer des problèmes de fonctionnement</p>
    <p>Pour les joueurs loisirs et éveils, merci de sélectionner "Vous ne souhaitez pas pratiquer le basket au sein de votre club" puis " Adhérer (sans pratique ni fonction)"</p>
    <h6><b class="emphasys">4 .</b>Compléter en ligne le formulaire de la fédération et procéder au paiement en ligne
        (obligatoire)*</h6>
    <div class="row">
        <div class="col-4">
            <ul class="list-group list-group-flush">
                <li class="list-group-item">Photo type passeport <b class="emphasys">OBLIGATOIRE</b></li>
                <li class="list-group-item">Certificat médical si demandé, à scanner en ligne</li>
            </ul>
        </div>
    </div>

    <h6><b class="emphasys">5 .</b>Une fois l'ensemble des informations correctement saisies, nous validons votre licence
    </h6>
    <h6><b class="emphasys">6 .</b>Vous recevez un mail de la fédération avec votre licence, celle-ci est activée.</h6>
    <br>
    <div class="alert alert-danger" role="alert">
        * En cas de problème de paiement (pass'sport, pass région, etc) merci de transmettre votre règlement par chèque avec
        nom du-de la licencié-e au dos, accompagné des pièces justificatives à l'adresse suivante :
        <br>
        <br>
        <div class="row">
            <div class="col-8">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title"></h5>
                        <h6 class="card-subtitle mb-2 text-body-secondary"></h6>
                        <p class="card-text">
                            Basket Club St Julien
                            c/o Emilie Benarab
                            3, lotissement les Grands Hutins
                            74160 St Julien en Genevois
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <p>Si vous n'autorisez pas que votre photo ou celle de votre enfant soit publiée par le club sur son site internet ou
        sur les réseaux sociaux, merci de nous le faire savoir par retour de mail et d'en informer votre enfant pour que
        celui-ci ne se positionne pas sur les photos de groupe.</p>
    <p>Nous vous souhaitons un bel été et au plaisir de vous retrouver sur le terrain!</p>
    <p class="emphasys">Basket Club Saint Julien en Genevois</p>
@endsection()

@section('script')
    <script>
        $(function() {
            $("#subscription").addClass('active');
        });
    </script>
@endsection()
