
<?php

class Project {
   var $title;
   var $url;
   var $description;
   var $tags;
}

$selection = [];

$serein = new Project;
$serein->title = "Serein";
$serein->url = "http://serein.lorem.ovh";
$serein->description = <<<EOT
          <p>Serein permet de localiser les échangeurs/distributeurs de seringues en France. Via un site web, mais aussi par SMS.</p>
          <p>Le service par SMS est rendu possible grâce à une application Cordova qui transforme un téléphone lamba en "centrale SMS". Si ce téléphone reçoit "serein {une adresse}", il transmet l'adresse à l'API Serein et répond celle du distributeur le plus proche.</p>
          <p>Ce projet bien accueilli par les associations de Réduction des Risques a cependant un problème majeur : la cible n'en a pas vraiment besoin. Les toxicomanes sédentaires connaissent ces automates, et les toxicomanes plus "nomades" sont moins nombreux et souvent en situation très précaire. </p>
          <p>Une perspective d'évolution est d'en faire un outil de monitoring de ces échangeurs distributeurs. Si l'occasion se présente j'adorerais améliorer ce projet avec l'aide de Safe ou Médecins du Monde ou autre organisme œuvrant pour la réduction des risques.</p>
EOT;
$serein->tags = [
  "PHP",
  "Cordova",
  "GoogleMaps",
  "API",
  "Foundation framework",
  "Projet perso"
];

$withlove = new Project;
$withlove->title = "Withlove";
$withlove->url = "http://withlove.lorem.ovh";
$withlove->description = <<<EOT
<p>WithLove est un projet, aujourd'hui au point mort, réalisé avec Ronan Polin.</p>
          <p>Nous avions une idée vraiment fun ! Envoyer des cartes postales, depuis Paris, vers le monde entier !</p>
          <p>Finalement, nous avons commis LA grosse erreur : laisser le temps filer... avec notre motivation. Cependant c'est un bel exemple de MVP, réalisé en un temps record. La base de données des commandes est constituée d'un formulaire TypeForm connecté à Google Drive avec IFTTT, le site est un template amélioré, et la vidéo une compilation de contenus creative commons.</p>
EOT;
$withlove->tags = [
"Typeform + IFTTT + Google Drive = WIN",
          "MVP",
          "Side project"
          ];

$xoa = new Project;
$xoa->title = "XOA";
$xoa->url = "http://xoa.ovh";
$xoa->description = <<<EOT
<p>XOA est un outil de collaboration en temps réel. Un projet mené avec <a hrf="http://axelchalon.fr" target="_blank" title="portfolio d'Axel Chalon">Axel Chalon</a>.</p>
          <p>Au cours de notre première année, nous avons souvent eu à nous échanger des petits bouts de texte ou de code. Les applications de messagerie traditionelle étant peu adaptées à ces formats, nous nous sommes dits que ce serait un bon entrainement de créer notre propre solution.</p>
          <p>Faibles perspectives d'évolution pour ce projet, si il est intéressant et fonctionnel, il faudrait un certain travail d'UX pour l'améliorer. Et le type de nos projets et travaux ayant changé, Git et <a href="http://textup.fr" title="Text Up hébergeur de texte" target="_blank">TextUp</a> sont devenus nos deux outils principaux d'échange de code.</p>
EOT;
$xoa->tags = [
"NodeJS",
          "SocketIO",
          "UX... particulière",
          "Side project"
          ];

$suggies = new Project;
$suggies->title = "Suggies";
$suggies->url = "http://suggies.lorem.ovh";
$suggies->description = <<<EOT
<p>Suggies est un site de conseil de séries réalisé durant une semaine intensive (c'est à dire en 3 jours et demi).</p>
EOT;
$suggies->tags = [
          'PHP',
          'Cache "fait maison"',
          'API TheMovieDB',
          'APC pour limiter les requêtes à l\'API',
          'Algorithmes de suggestion',
          'Semaine intensive'
          ];

$selection[] = $serein;
$selection[] = $withlove;
$selection[] = $xoa;
$selection[] = $suggies;



$whatelse = [];


$fma = new Project;
$fma->title = "Groupe FMA";
$fma->url = "http://groupefma.fr";
$fma->description = <<<EOT
<p>Un site corporate pour un cabinet d'architecture.</p>
EOT;
$fma->tags = [
          'Wordpress',
          'Projet pro'
          ];


$leftovers = new Project;
$leftovers->title = "Leftovers";
$leftovers->url = "http://leftovers.lorem.ovh";
$leftovers->description = <<<EOT
<p>Enfin des recettes pour vos restes ! Mon premier site wordpress</p>
EOT;
$leftovers->tags = [
          'Wordpress',
          'Projet Hétic'
          ];


$webaudiosurf = new Project;
$webaudiosurf->title = "WebAudioSurf";
$webaudiosurf->url = "http://projets.lorem.ovh/surf/";
$webaudiosurf->description = <<<EOT
<p>Un jeu vidéo basé sur AudioSurf : le jeu est dynamique et unique pour chaque morceau de musique ! Des algorithmes avancés de traitement audio sont implémentés.</p>
EOT;
$webaudiosurf->tags = [
          'Soundcloud API',
          'Utilisation avancée de l\'Audio API',
          'Projet perso'
          ];


$sinj = new Project;
$sinj->title = "3/4 de Singe";
$sinj->url = "http://sinj.lorem.ovh/";
$sinj->description = <<<EOT
<p>Lien à venir. Un jeu vidéo basé sur le quart de singe : qui possède le meilleur vocabulaire ?</p>
EOT;
$sinj->tags = [
          'NodeJS',
          'SocketIO',
          'Jeu vidéo',
          'Projet Hétic'
          ];

$whatelse[] = $fma;
$whatelse[] = $leftovers;
$whatelse[] = $webaudiosurf;
$whatelse[] = $sinj;

// PROJETS EN COURS

$notyet = [];

$zerowing = new Project;
$zerowing->title = "Zerowing";
$zerowing->url = "http://github.com/haterecoil/zerowing";
$zerowing->description = <<<EOT

<p>Une API de pentesting en Symfony2 pour tester son site contre différentes vunérabilités. Teste de l'injection SQL basique, de l'URL fuzzing, du bruteforce de mots de passe par défaut et cherche les failles XSS.</p>
<p>Sur ce projet je suis à la fois lead developer et professeur car j'ai pris trois débutants dans mon équipe. Ils semblaient motiés et l'ont prouvé : nous avons eu la meilleure note sur ce devoir.</p>
<p>C'est mon premier projet Symfony2, un superbe framework mais un projet un peu 'coton' !</p>
EOT;
$zerowing->tags = [
          'Symfony2',
          'PHP',
          'Pentesting',
          'School project'
          ];


$wintegreat = new Project;
$wintegreat->title = "Wintegreat";
$wintegreat->url = false;
$wintegreat->description = <<<EOT
<p><a href="https://www.facebook.com/wintegreat/" target="_blank">Wintegreat</a> est une association qui aide les réfugiés en France. Leur application servira à connecter des anciens étudiants réfugiés avec des formations qui leur sont detinées en France.</p>
<p>Comme lead developer j'ai choisi de partir sur un langage et une techno que je ne connaissais pas : Ruby on Rails. Le 'convention over configuration' c'est une courbe d'apprentissage un peu ardue mais qui se termine très vite... et le ruby, c'est joli !</p>
EOT;
$wintegreat->tags = [
          'Rails',
          'Ruby',
          'Volunteering'
          ];


$yhanbl = new Project;
$yhanbl->title = "YHANBL";
$yhanbl->url = false;
$yhanbl->description = <<<EOT
<p>You Have A New Beautiful Letter ! vous laisse échanger des lettres avec des inconnus. D'abord par messagerie puis avec de vraies lettres !.</p>
<p>Backend developer, je construis une REST API pour faciliter la création d'applications mobile. Je m'occupe auss ide la strcture Ionic (peut-petre React finalement).</p>
EOT;
$yhanbl->tags = [
          'Angular',
          'Ionic',
          'Rails',
          'School project'
          ];

$notyet[] = $zerowing;
$notyet[] = $wintegreat;
$notyet[] = $yhanbl;

?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>LABORATOIRE</title>
  <meta name="viewport" content="width=device-width, user-scalable=no">
  <link href='http://fonts.googleapis.com/css?family=Roboto+Slab:400,100' rel='stylesheet' type='text/css'>
  <link rel="stylesheet" href="./src/css/reset.css">
  <link rel="stylesheet" href="./src/css/style.css">
  <link rel="icon" href="./src/images/yinyang.gif" type="image/gif">
</head>

<body>

<!-- Google Tag Manager -->
<noscript><iframe src="//www.googletagmanager.com/ns.html?id=GTM-MC8JCT"
height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
<script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
'//www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
})(window,document,'script','dataLayer','GTM-MC8JCT');</script>
<!-- End Google Tag Manager -->
<script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

  ga('create', 'UA-72116972-1', 'auto');
  ga('send', 'pageview');

</script>

  <header>
    <p><a href="/en.php">english version</a></p>
    <h1>>morgan</h1>
    <p>étudiant @<a href="http://hetic.net">HETIC</a></p>
    <p>bienvenue dans mon laboratoire</p>
    <ul class="social">
      <li><a target="_blank" href="https://github.com/haterecoil">Git</a><span> |</span></li>
      <li><a target="_blank" href="https://twitter.com/morgancron">Twit</a><span> |</span></li>
      <li><a target="_blank" href="https://fr.linkedin.com/in/morgan-caron-12b558100">LkIn</a><span> |</span></li>
      <li><a target="_blank" href="mailto:morgan.caron@hetic.net">Mail</a></li>
    </ul>
  </header>
  <section>
  <ul class="cards">
  <h3 class="separator">Le quotidien</h3>
  <br><br><br>

    <li class="card shadow">
        <div class="card__title"><span>Bonjour =) </span>
        <div class="card__tags-container">
          <ul class="card__tags">
            <li>Communication</li>
            <li>Développement</li>
            <li>Curiosité</li>
            <li>Polyvalence</li>
          </ul>
        </div>
        </div>

        <div class="card__content">
          <p>Merci de votre visite ! Cette page montre les différents projets auquels j'ai participé depuis 2013 et donc mon entrée à Hétic. </p>
          <p>Re-découvrir le monde des internets par la porte de <em>ceux qui créent</em> après avoir été <em>celui qui consomme</em> fut une révélation. </p>
          <p>Dorénavant je souhaite conjuguer cette passion à mon premier parcours scolaire : l'aménagement urbain.</p>
          <br/>
          <p> Ah et je voulais vous parler de deux potes à moi !  <a target="_blank" href="http://ronanpolin.com">Ronan Polin</a> est un
mordu de cinéma, mais aussi ergonome et professionel de la critique constructive. <a target="_blank" href="http://axelchalon.fr">Axel Chalon</a> pour sa part est un germanophile
mordu de musique mais aussi de développement . Et ils sont super !

        </div>

      </li>

  </ul>
    <ul class="cards">
      <h3 class="separator">La sélection</h3>
      <br><br><br>

      <?php foreach ($selection as $project): ?>
        <li class="card shadow">
          <div class="card__title">
            <a href="<?= $project->url ?>" target="_blank" title="<?= $project->title ?>" class="overlay"><?= $project->title ?></a>
            <div class="card__tags-container">
              <ul class="card__tags">
                <?php foreach($project->tags as $tag): ?>
                  <li><?= $tag ?></li>
                <?php endforeach ?>
              </ul>
            </div>
          </div>
          <div class="card__content">
            <?= $project->description ?>
          </div>
        </li>
      <?php endforeach ?>

      <h3 class="separator">Le travail en cours</h3>
      <br><br><br>

      <?php foreach ($notyet as $project): ?>
        <li class="card shadow">
          <div class="card__title">
          <?php if (isset($project_url)): ?>
            <a href="<?= $project->url ?>" target="_blank" title="<?= $project->title ?>" class="overlay"><?= $project->title ?></a>
          <?php else: ?>
            <span class="overlay"><?= $project->title ?></span>
          <?php endif; ?>
            <div class="card__tags-container">
              <ul class="card__tags">
                <?php foreach($project->tags as $tag): ?>
                  <li><?= $tag ?></li>
                <?php endforeach ?>
              </ul>
            </div>
          </div>
          <div class="card__content">
            <?= $project->description ?>
          </div>
        </li>
      <?php endforeach ?>


      <h3 class="separator">Le reste</h3>
      <br><br><br>

      <?php foreach ($whatelse as $project): ?>
        <li class="card shadow">
          <div class="card__title">
            <a href="<?= $project->url ?>" target="_blank" title="<?= $project->title ?>" class="overlay"><?= $project->title ?></a>
            <div class="card__tags-container">
              <ul class="card__tags">
                <?php foreach($project->tags as $tag): ?>
                  <li><?= $tag ?></li>
                <?php endforeach ?>
              </ul>
            </div>
          </div>
          <div class="card__content">
            <?= $project->description ?>
          </div>
        </li>
      <?php endforeach ?>

    </ul>

  </section>

  <script src="./src/js/script.js"></script>
</body>
</html>
