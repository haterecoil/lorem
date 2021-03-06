
<?php

class Project {
   var $title;
   var $url;
   var $links;
   var $description;
   var $tags;
}

$intro = new Project;
$intro->title = "Bonjour !";
$intro->url = "http://serein.lorem.ovh";
$intro->links = [
  "github" => "https://github.com/haterecoil",
  "twitter" => "https://twitter.com/morgancron",
  "linkedIn" => "https://fr.linkedin.com/in/morgan-caron-12b558100",
  "mail" => "mailto:morgan.caron@hetic.net",
];
$intro->description = <<<EOT
        <p>Thanks for visiting me! This page indexes different projects I worked on since 2013 and my arrival at Hetic.</p>
        <p>I re-discovered internet's world as a creator of content after a dozen years of content consumption. This has brought a lot of changes to my life.</p>
        <p>My goal is to combine this passion to my first field of study: urban planning.</p>
        <br/>
        <p>Oh! I would like to tell you about two friends of mine : Ronan and Axel. <a target="_blank" href="http://ronanpolin.com">Ronan Polin</a> is a movie-addict (from silent japanese movies to documentaries), and a fine UX designer. <a target="_blank" href="http://axelchalon.fr">Axel Chalon</a> is a germanophile, music-addict and loves development (both personal and web). They are awesome!</p>

EOT;
$intro->tags = [
  "Communication",
  "Development",
  "Curious",
  "Polyvalent"
];

$selection = [];

$serein = new Project;
$serein->title = "Serein";
$serein->url = "http://serein.lorem.ovh";
$serein->links = [
  "site" => "http://serein.lorem.ovh"
];
$serein->description = <<<EOT
          <p>Serein localizes syringes exchangers in France. Through a website and an SMS service.</p>
          <p>The SMS service is built with Cordova and transforms a common phone in a SMS server. If a phone running the app receieves an SMS containing "serein {some address}" it asks Serein's API for an exchanger address and finally answers the SMS.</p>
          <p>This service has got really great feedbacks from harm reduction associations and has got great perspectives of evolution. </p>
          <p>From a simple service, it could become a crowdsourced monitoring tool! Thus indexing broken machines and "honeypots" – machines attracting both consumers and policemen. </p>
EOT;
$serein->tags = [
  "PHP",
  "Cordova",
  "GoogleMaps",
  "API",
  "Foundation framework",
  "Personnal project"
];

$withlove = new Project;
$withlove->title = "Withlove";
$withlove->url = "http://withlove.lorem.ovh";
$withlove->links = [
  "site" => "http://withlove.lorem.ovh"
];
$withlove->description = <<<EOT
          <p> WithLove is a stopped project I developped with Ronan Polin.</p>
          <p>We had a really fun idea! Send postal cards, from Paris, to anywhere! The package is comosed of a well hand written letter, a custom picture and a small item. But we let time go by... with our motivation.</p>
          <p>WithLove is a good example of fast-made product. The website is a free html theme. The database is a TypeForm connected to a GoogleDrive Spreadsheet through Zappier. The video is a compilation of CC videos. Free, fast, functionnal.</p>
EOT;
$withlove->tags = [
"Typeform + Zappier + Google Drive = WIN",
          "MVP",
          "Side project"
          ];

$xoa = new Project;
$xoa->title = "XOA";
$xoa->url = "http://xoa.ovh";
$xoa->links = [
  "site" => "http://xoa.ovh"
];
$xoa->description = <<<EOT
          <p>XOA is a real-time collaboration tool. Axel Chalon and I lead this project.</p>
          <p>During our freshmen year at Hetic, we happened to share lots of text : code snippets, bits of course notes,... Classic chat applications appeared quite slow and painful to use considering the type of text we used to share and the frequency we needed it. So we gave it a shot.</p>
          <p>Interesting and functionnal, this project suffers UX problems. We were freshmen! But it is one of the funnest project I worked on!</p>

EOT;
$xoa->tags = [
"NodeJS",
          "SocketIO",
          "Innovating",
          "Side project"
          ];

$suggies = new Project;
$suggies->title = "Suggies";
$suggies->url = "http://suggies.lorem.ovh";
$suggies->links = [
  "github" => "https://github.com/Evan-Peuvergne/Suggies",
  "site" => "http://suggies.lorem.ovh"
];
$suggies->description = <<<EOT
<p>Suggies is a TV Show counceilor done in 3 days with 5 people.</p>
EOT;
$suggies->tags = [
          'PHP',
          'HomeMade Cache',
          'API TheMovieDB',
          'APC to handle API\'s limits',
          'Suggestion algorithms',
          'Stress week'
          ];

$selection[] = $serein;
$selection[] = $withlove;
$selection[] = $xoa;
$selection[] = $suggies;

// LE RESTE

$whatelse = [];


$fma = new Project;
$fma->title = "Groupe FMA";
$fma->url = "http://groupefma.fr";
$fma->links = [
  "site" => "http://groupefma.fr"
];
$fma->description = <<<EOT
<p>A corporate website for an architectural firm.</p>
EOT;
$fma->tags = [
          'Wordpress',
          'Paid project'
          ];


$leftovers = new Project;
$leftovers->title = "Leftovers";
$leftovers->url = "http://leftovers.lorem.ovh";
$leftovers->links = [
  "site" => "http://leftovers.lorem.ovh"
];
$leftovers->description = <<<EOT
<p> Recipes for your leftovers! (my first WP site)</p>
EOT;
$leftovers->tags = [
          'Wordpress',
          'ACF',
          'School project'
          ];


$webaudiosurf = new Project;
$webaudiosurf->title = "WebAudioSurf";
$webaudiosurf->url = "http://projets.lorem.ovh/surf/";
$webaudiosurf->links = [
  "github" => "https://github.com/haterecoil/WebAudioSurf",
  "site" => "http://projets.lorem.ovh/surf/"
];
$webaudiosurf->description = <<<EOT
<p>An HTML5/Canvas video game based on AudioSurf : each game depends of the music you throw in! Advanced sound analysis are implemented. More information in the source.</p>
<p> Too bad, Soundcloud changed its API so it doesnt really functions.</p>
EOT;
$webaudiosurf->tags = [
          'Soundcloud API',
          'Advanced use of Audio API',
          'solo 1 week project'
          ];


$sinj = new Project;
$sinj->title = "3/4 de Singe";
$sinj->url = "http://sinj.lorem.ovh/";
$sinj->links = [
  "github" => "https://github.com/haterecoil/sinj",
  "site" => "http://sinj.lorem.ovh"
];
$sinj->description = <<<EOT
<p>A real-time vocabulary game.</p>
EOT;
$sinj->tags = [
          'NodeJS',
          'SocketIO',
          'Video game',
          'School project'
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
$zerowing->links = [
  "github" => "http://github.com/haterecoil/zerowing"
];
$zerowing->description = <<<EOT
<p>A Symfony2 pentesting API. Tries basic SQL injection, URL fuzzing, bruteforce of common default paswords, and spots XSS vulnerabilities.</p>
<p>On this project I am both lead developper and teacher, as I took three code beginners in my team. They seemed motivated enough so we gave it a shot and scored the best grade together!</p>
<p>This is my first Symfony2 project, a nice framework but it was a not-so-easy task.</p>
EOT;
$zerowing->tags = [
          'Symfony2',
          'PHP',
          'Pentesting',
          'School project'
          ];


$wintegreat = new Project;
$wintegreat->title = "Wintegreat";
$wintegreat->url = "#";
$wintegreat->links = [
];
$wintegreat->description = <<<EOT
<p><a href="https://www.facebook.com/wintegreat/" target="_blank">Wintegreat</a> is an association helping refugees in France. I work with them on a webapp.</p>
<p>This webapp connects ex-student refugees to fitting formations in France.</p>
<p>As lead developper I chosed to discover a new framework and a new language : Ruby on Rails. Sorry but the repo is not public yet!</p>
EOT;
$wintegreat->tags = [
          'Rails',
          'Ruby',
          'Volunteering'
          ];


$yhanbl = new Project;
$yhanbl->title = "YHANBL";
$yhanbl->url = "#";
$yhanbl->links = [
];
$yhanbl->description = <<<EOT
<p>You Have A New Beautiful Letter ! lets you exchange letters with strangers. First through an app, then with real mails.</p>
<p>I am backend developper there. The application is not really complex but we try to write it well.</p>
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
    <p><a href="/">french version</a></p>
    <h1>>morgan</h1>
    <p>student @<a href="http://hetic.net">HETIC</a></p>
    <p>welcome to my lab</p>
    <ul class="header__links">
      <li class="header__links__item"><a class="header__link" target="_blank"  href="https://github.com/haterecoil">github</a></li>
      <li class="header__links__item"><a class="header__link" target="_blank"  href="https://fr.linkedin.com/in/morgan-caron-12b558100">linkedin</a></li>
      <li class="header__links__item"><a class="header__link" target="_blank"  href="mailto:morgan.caron@hetic.net">mail </a></li>
    </ul>
  </header>
  <section>
  <ul class="cards">
 <h3 class="separator">Le quotidien</h3>
  <br><br><br>
      <li class="card shadow">
          <div class="card__title">
            <span class="card__name"><?= $intro->title ?></span>
            <ul class="card__links">
              <?php if (count($intro->links) > 0):?>
              <li>Links :</li>
            <?php endif ?>
              <?php foreach ($intro->links as $name => $link): ?>
                <li><a class="card__link" target="_blank" href="<?= $link ?>"> <?= $name ?> </a></li>
              <?php endforeach ?>
            </ul>
            <div class="card__tags-container">
              <ul class="card__tags">
                <?php foreach($intro->tags as $tag): ?>
                  <li><?= $tag ?></li>
                <?php endforeach ?>
              </ul>
            </div>
          </div>
          <div class="card__content">
            <?= $intro->description ?>
          </div>
        </li>

  </ul>
    <ul class="cards">
      <h3 class="separator">La sélection</h3>
      <br><br><br>

      <?php foreach ($selection as $project): ?>
        <li class="card shadow">
          <div class="card__title">
            <span class="card__name"><?= $project->title ?></span>
            <ul class="card__links">
              <?php if (count($project->links) > 0):?>
              <li>Links :</li>
            <?php endif ?>
              <?php foreach ($project->links as $name => $link): ?>
                <li><a class="card__link" target="_blank" href="<?= $link ?>"> <?= $name ?> </a></li>
              <?php endforeach ?>
            </ul>
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
            <span class="card__name"><?= $project->title ?></span>
            <ul class="card__links">
              <?php if (count($project->links) > 0):?>
              <li>Links :</li>
            <?php endif ?>
              <?php foreach ($project->links as $name => $link): ?>
                <li><a class="card__link" target="_blank" href="<?= $link ?>"> <?= $name ?> </a></li>
              <?php endforeach ?>
            </ul>
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
            <span class="card__name"><?= $project->title ?></span>
            <ul class="card__links">
              <?php if (count($project->links) > 0):?>
              <li>Links :</li>
            <?php endif ?>
              <?php foreach ($project->links as $name => $link): ?>
                <li><a class="card__link" target="_blank" href="<?= $link ?>"> <?= $name ?> </a></li>
              <?php endforeach ?>
            </ul>
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
