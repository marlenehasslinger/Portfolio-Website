<!DOCTYPE html>
<html lang="de">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Marlene Hasslinger | Portfolio</title>
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr"
    crossorigin="anonymous">
  <link rel="stylesheet" type="text/css" href="css/index.css" />
</head>
<body>
  <div id="page">
  <?php require("./parts/header.php");?>
  <?php require("./parts/team.php");?>
  <?php require("./parts/service.php");?>
  <?php require("./parts/resume.php");?>
  <section id="portfolio" class="portfolio">
    <div class="container">
      <h3 class="text-center">Portfolio</h3>
      <p class="text-center text-muted font-italic mb-5">Take a look at my projects</p>
      <div class="row">
        <div class="col-md-12 text-center">
          <div id="filters" class="btn-group mb-5" role="group" aria-label="Basic example">
            <button type="button" class="btn button-item btn-primary mr-2" data-filter="*">All</button>
            <button type="button" class="btn button-item btn-primary mr-2" data-filter=".web">Web</button>
            <button type="button" class="btn button-item btn-primary mr-2" data-filter=".mobile">Mobile</button>
            <button type="button" class="btn button-item btn-primary" data-filter=".ux">UX</button>
          </div>
        </div>
      </div>
      <div class="container-fluid no-gutter">
        <div id="posts" class="row">
          <div class="item mobile ux col-12 col-sm-6 col-md-4">
            <div class="card mb-4" data-toggle="modal" data-target="#foreignBuddyModal">
              <img class="card-img-top" src="images/worksamples/LanguageSharing_thumbnail" alt="Card image cap">
              <div class="card-body text-center">
                <h5 class="card-title">Language Buddy</h5>
                <h6 class="card-subtitle text-muted font-italic mb-2">Android & iOS App</h6>
              </div>
            </div>
          </div>
          <div class="item web col-12 col-sm-6 col-md-4">
            <div id="portfolio_nickileach" class="card mb-4">
              <img class="card-img-top" src="images/worksamples/nickileachfoundation.png" alt="Card image cap">
              <div class="card-body text-center">
                <h5 class="card-title">Nicki Leach Foundation</h5>
                <h6 class="card-subtitle text-muted font-italic mb-2">Website for Cancer Foundation</h6>
              </div>
            </div>
          </div>
          <div class="item web col-12 col-sm-6 col-md-4">
            <div id="portfolio_prism" class="card mb-4">
              <img class="card-img-top" src="images/worksamples/prismguitars.png" alt="Card image cap">
              <div class="card-body text-center">
                <h5 class="card-title">Prism Guitars</h5>
                <h6 class="card-subtitle text-muted font-italic mb-2">Website for Guitar Luthier</h6>
              </div>
            </div>
          </div>
          <div class="item web col-12 col-sm-6 col-md-4">
            <div id="portfolio_hero" class="card mb-4">
              <img class="card-img-top" src="images/worksamples/herologo.png" alt="Card image cap">
              <div class="card-body text-center">
                <h5 class="card-title">HeRo</h5>
                <h6 class="card-subtitle text-muted font-italic mb-2">Website for wood sculpturer</h6>
              </div>
            </div>
          </div>
          <div class="item web col-12 col-sm-6 col-md-4">
            <div id="portfolio_chinatown" class="card mb-4">
              <img class="card-img-top" src="images/worksamples/Chinatown.png" alt="Card image cap">
              <div class="card-body text-center">
                <h5 class="card-title">Chinatown</h5>
                <h6 class="card-subtitle text-muted font-italic mb-2">Website for Chinatown in NYC</h6>
              </div>
            </div>
          </div>
          <div class="item ux col-12 col-sm-6 col-md-4">
            <div class="card mb-4" data-toggle="modal" data-target="#usabilityModal">
              <img class="card-img-top" src="images/worksamples/usabilityproject.png" alt="Card image cap">
              <div class="card-body text-center">
                <h5 class="card-title">Usability Study</h5>
                <h6 class="card-subtitle text-muted font-italic mb-2">Comparison of two screen capture applications</h6>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <?php require("./parts/contact.php");?>
  <?php require("./parts/footer.php");?>
  </div>
  <!-- Modals for Portfolio -->
  <div id="foreignBuddyModal" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel"
    aria-hidden="true">
    <div class="modal-dialog modal-lg">
      <div class="modal-content">
        <button type="button" class="close col-1 offset-11" data-dismiss="modal">&times;</button>
        <img class="img-fluid" src="images/worksamples/LanguageSharing_StoryBoard.png">
        <div>
          <ul class="list-group list-group-flush">
            <li class="list-group-item">
              <p class="text-center">Mit Hilfe der Mobilen App „ForeignBuddy“ können im Umkreis passende
                Sprachtandems für Language Exchanges gefunden werden. Auf Basis von Nutzerangaben (z.B. gewünschte
                Sprache, Muttersprache, Alter, Geschlecht, Location und Interessen) werden dem Benutzer optimale
                „Matches“ in der Umgebung vorgeschlagen. //ToDo UX</p>
            </li>
            <li class="list-group-item">
              <i class="fa fa-user mr-2"></i>Marlene Hasslinger, Marc Julian Fleck</li>
            <li class="list-group-item">
              <i class="fa fa-globe mr-2"></i>
              <a href="https://www.hdm-stuttgart.de/stage/projekt_detail/projekt_details?projekt_ID=2432" target="_blank">Project
                Page - Media University, Stuttgart</a>
            </li>
            <li class="list-group-item">
              <i class="fas fa-wrench mr-2"></i>
              <span class="badge badge-primary">Java</span>
              <span class="badge badge-primary">Android Studio</span>
              <span class="badge badge-primary">Firebase</span>
              <span class="badge badge-primary">Cloud Functions</span>
              <span class="badge badge-primary">Real Time NoSQL-Datenbank</span>
              <span class="badge badge-primary">UI / UX Design</span>
            </li>
          </ul>
        </div>
      </div>
    </div>
  </div>
  <div id="usabilityModal" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel"
    aria-hidden="true">
    <div class="modal-dialog modal-lg">
      <div class="modal-content">
        <button type="button" class="close col-1 offset-11" data-dismiss="modal">&times;</button>
        <div class="embed-responsive embed-responsive-16by9">
          <iframe class="embed-responsive-item" src="https://www.youtube.com/embed/tzjn5wCTgUo" allowfullscreen></iframe>
        </div>
        <div>
          <ul class="list-group list-group-flush">
            <li class="list-group-item">
              <p>We compared to applications that are commonly used for screen capturing. //ToDo</p>
            </li>
            <li class="list-group-item">
              <i class="fa fa-user mr-2"></i>Marlene Hasslinger, Marc Julian Fleck</li>
            <li class="list-group-item">
              <i class="fas fa-wrench mr-2"></i>
              <span class="badge badge-primary">User Testing</span>
            </li>
          </ul>
        </div>
      </div>
    </div>
  </div>
  <!-- Javsscript imports -->
  <script type="text/javascript" src="lib/jquery/jquery-3.3.1.min.js"></script>
  <script type="text/javascript" src="lib/bootstrap/dist/js/bootstrap.bundle.js"></script>
  <script type="text/javascript" src="lib/isotope/isotope.min.js"></script>
  <script type="text/javascript" src="js/index.js"></script>
</body>
</html>