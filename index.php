<?php require("shared/inc/functions.inc.php"); ?>
<!DOCTYPE html>
<html lang="de">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Marlene Hasslinger | Portfolio</title>
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr"
    crossorigin="anonymous">
  <link href="https://fonts.googleapis.com/css?family=Raleway&display=swap" rel="stylesheet">
  <link rel="stylesheet" type="text/css" href="css/index.css" />
</head>
<body>
  <div id="page">
  <?php require("./parts/header.php");?>
  <?php require("./parts/team.php");?>
  <?php require("./parts/service.php");?>
  <section id="portfolio" class="portfolio">
    <div class="container">
      <h3 class="text-center">Portfolio</h3>
      <p class="text-center text-muted mb-5">Take a look at some of the projects I've worked on</p>
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
                <h6 class="card-subtitle text-muted  mb-2">Android & iOS App</h6>
              </div>
            </div>
          </div>
          <div class="item web col-12 col-sm-6 col-md-4">
            <div id="portfolio_hero" class="card mb-4" data-toggle="modal" data-target="#thesisModal">
              <img class="card-img-top" src="images/worksamples/bachelorthesis.png" alt="Card image cap">
              <div class="card-body text-center">
                <h5 class="card-title">Comparison of Angular, React & Vue</h5>
                <h6 class="card-subtitle text-muted  mb-2">Bachelor Thesis</h6>
              </div>
            </div>
          </div>
          <div class="item web col-12 col-sm-6 col-md-4">
            <div id="portfolio_nickileach" class="card mb-4" data-toggle="modal" data-target="#nickiModal">
              <img class="card-img-top" src="images/worksamples/nickileachfoundation.png" alt="Card image cap">
              <div class="card-body text-center">
                <h5 class="card-title">Nicki Leach Foundation</h5>
                <h6 class="card-subtitle text-muted  mb-2">Website for Cancer Foundation</h6>
              </div>
            </div>
          </div>
          <div class="item ux col-12 col-sm-6 col-md-4">
            <div class="card mb-4" data-toggle="modal" data-target="#usabilityModal">
              <img class="card-img-top" src="images/worksamples/usabilityproject.png" alt="Card image cap">
              <div class="card-body text-center">
                <h5 class="card-title">Usability Study</h5>
                <h6 class="card-subtitle text-muted  mb-2">Comparison of two screen capture applications</h6>
              </div>
            </div>
          </div>
          <div class="item web col-12 col-sm-6 col-md-4">
            <div id="portfolio_chinatown" class="card mb-4" data-toggle="modal" data-target="#chinaTownModal">
              <img class="card-img-top" src="images/worksamples/Chinatown.png" alt="Card image cap">
              <div class="card-body text-center">
                <h5 class="card-title">Chinatown BID</h5>
                <h6 class="card-subtitle text-muted  mb-2">Website for Chinatown (NYC) BID</h6>
              </div>
            </div>
          </div>
          <div class="item mobile ux col-12 col-sm-6 col-md-4">
            <div class="card mb-4" data-toggle="modal" data-target="#laparModal">
              <img class="card-img-top" src="images/worksamples/laparApp.png" alt="Card image cap">
              <div class="card-body text-center">
                <h5 class="card-title">Lapar</h5>
                <h6 class="card-subtitle text-muted  mb-2">Mobile App Prototype</h6>
              </div>
            </div>
          </div>
          <div class="item web col-12 col-sm-6 col-md-4">
            <div id="portfolio_prism" class="card mb-4" data-toggle="modal" data-target="#prismGuitarModals">
              <img class="card-img-top" src="images/worksamples/prismguitars.png" alt="Card image cap">
              <div class="card-body text-center">
                <h5 class="card-title">Prism Guitars</h5>
                <h6 class="card-subtitle text-muted  mb-2">Website for Guitar Luthier</h6>
              </div>
            </div>
          </div>
          <div class="item web col-12 col-sm-6 col-md-4">
            <div class="card mb-4" data-toggle="modal" data-target="#bunnyModal">
              <img class="card-img-top" src="images/worksamples/bunnyleach.png" alt="Card image cap">
              <div class="card-body text-center">
                <h5 class="card-title">Bunny Leach</h5>
                <h6 class="card-subtitle text-muted  mb-2">Website for Book Author</h6>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <?php require("./parts/achievements.php");?>
  <?php require("./parts/resume.php");?>
  <?php require("./parts/contact.php");?>
  <?php require("./parts/footer.php");?>
  </div>
  <!-- Modals for Portfolio -->
  <div id="foreignBuddyModal" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel"
    aria-hidden="true">
    <div class="modal-dialog modal-lg">
      <div class="modal-content">
        <button type="button" class="close col-1 offset-11" data-dismiss="modal">&times;</button>
        <h5 class="text-center">Language Buddy Mobile App</h5>
        <img class="img-fluid" src="images/worksamples/LanguageSharing_StoryBoard.png">
        <div>
          <ul class="list-group list-group-flush">
            <li class="list-group-item">
              <p>The mobile app "ForeignBuddy" helps students to find suitable language partnerships in a defined area. User inputs such as a desired language a user wants to learn, native language, age, gender, location and interests are used to find a perfect match.</p>
            </li>
            <li class="list-group-item">
              <p>We designed the user interface with Proto.io and developed the application native for Android in Java and for iOS in Swift. For the Backend Firebase, a back-end service by Google was used.</p>
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
              <span class="badge badge-primary">Xcode</span>
              <span class="badge badge-primary">Swift</span>
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
        <h5 class="text-center">Usability Comparison of Screenium and Camtasia</h5>
        <div class="embed-responsive embed-responsive-16by9">
          <iframe class="embed-responsive-item" src="https://www.youtube.com/embed/tzjn5wCTgUo" allowfullscreen></iframe>
        </div>
        <div>
          <ul class="list-group list-group-flush">
            <li class="list-group-item">
              <p>Two applications, Screenium and Camtasia, that are commonly used for screen capturing were compared in this study. Five use cases were tested on sixteen students. The results were evaluated under consideration of the aspects efficiency and effectivity. Also, our test users filled out a System Usability Scale (SUS) form to provide us with a better idea about how the users felt while going through the different use cases. For more information watch our information video.</p>
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
  <div id="nickiModal" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel"
    aria-hidden="true">
    <div class="modal-dialog modal-lg">
      <div class="modal-content">
        <button type="button" class="close col-1 offset-11" data-dismiss="modal">&times;</button>
        <h5 class="text-center">Nicki Leach Foundation</h5>
        <img class="img-fluid" src="images/worksamples/nickimaterials.jpeg">
        <div>
          <ul class="list-group list-group-flush">
            <li class="list-group-item">
              <p>I set up a WordPress website for the Nicki Leach Foundation (see link below) that supports young adults with cancer financially to archieve their education goals and allows donors to get involved. Additionally, I designed a logo and created marketing materials (business cards, flyers, and bookmarks) with Adobe Photoshop for the foundations appearing at national medical conventions such as the <a href="https://meetings.asco.org/am/save-date">ASCO Annual Meeting.</a></p>
            </li>
            <li class="list-group-item">
              <i class="fa fa-globe mr-2"></i>
              <a href="https://nickileach.org" target="_blank">Nickileach.org</a>
            </li>
            <li class="list-group-item">
              <i class="fas fa-wrench mr-2"></i>
              <span class="badge badge-primary">WordPress</span>
              <span class="badge badge-primary">Adobe Photoshop</span>
            </li>
          </ul>
        </div>
      </div>
    </div>
  </div>
  <div id="thesisModal" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel"
    aria-hidden="true">
    <div class="modal-dialog modal-lg">
      <div class="modal-content">
        <button type="button" class="close col-1 offset-11" data-dismiss="modal">&times;</button>
        <h5 class="text-center">Comparison of Three JavaScript Frameworks: Angular, React and Vue.js</h5>
        <img class="img-fluid" src="images/worksamples/bachelorthesisModal.png">
        <div>
          <ul class="list-group list-group-flush">
            <li class="list-group-item">
              <p>In the past years, JavaScript has become the most used programming language and the number of software frameworks around it has grown. The goal of this paper is to support decisions between JavaScript frameworks that are used in front-end development. Therefore, Angular, React and Vue.js, three popular JavaScript frameworks are compared. First, background information about JavaScript, software frameworks and web applications is provided to contribute to a fundamental understanding of the topic. Then, six criteria are defined to evaluate each framework and to com- pare them with each other later on. The information and data used to evaluate the frameworks are collected from a literature review and performance measurements. The result of the investigation shows that none of the frameworks scores best in all criteria and that the selection of a framework depends crucially on the individual requirements of a project. This paper is interesting for anyone who is interested in front-end development and has some experience with HyperText Markup Language (HTML), Cascading Style Sheets (CSS) and JavaScript. Especially readers who are deciding which of the above-mentioned JavaScript frameworks to learn or to use for a project can benefit from this work.</p>
            </li>
            <li class="list-group-item">
              <i class="fa fa-globe mr-2"></i>
              <a href="images/ComparisonOfPopularJavaScriptFrameworks.pdf" target="_blank">Full Text here</a>
            </li>
            <li class="list-group-item">
              <i class="fas fa-wrench mr-2"></i>
              <span class="badge badge-primary">Literature Research</span>
              <span class="badge badge-primary">Performance Benchmarking</span>
            </li>
          </ul>
        </div>
      </div>
    </div>
  </div>
  <div id="laparModal" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel"
    aria-hidden="true">
    <div class="modal-dialog modal-lg">
      <div class="modal-content">
        <button type="button" class="close col-1 offset-11" data-dismiss="modal">&times;</button>
        <h5 class="text-center">LAPAR</h5>
        <div id="laparprotoimage">
        <a id="laparprotoimage" href="http://webpage.pace.edu/mh52474n/lapar/frame.html" target="_blank"><img class="img-fluid" src="images/worksamples/lapar.png"></a>
        </div>
        <div>
          <ul class="list-group list-group-flush">
            <li class="list-group-item">
            <p>This project was a part of my participation in the <a href="https://until.un.org/reboottheearth" target="_blank">Reboot the Earth Hackathon</a> in 2019 organized by the United Nations, SAP and Deloitte. The goal of the event was to improve upon or build a new software program that addresses the current climate crisis.</p>
            <p>LAPAR (Learn about PLASTIC and Reduce Recycle) is a crowdsourced cross platform which helps educate people and learn about different types of plastic, how the earth is impacted, how to reduce its use and recycle properly. It also show a users footprint and recommendations from people around the world.</p>
            <li class="list-group-item">
            <p>I was responsible for creating a clickable prototype for the mobile application with Proto.io. Click on the Link below to check it out. </p>
            </li>
            <li class="list-group-item">
              <i class="fa fa-globe mr-2"></i>
              <a href="https://ideas.unite.un.org/plasticwaste/Page/ViewIdea?ideaid=3170" target="_blank">Project Page</a>, <a href="http://webpage.pace.edu/mh52474n/lapar/frame.html" target="_blank">Clickable Prototype</a>
            </li>
            <li class="list-group-item">
              <i class="fas fa-wrench mr-2"></i>
              <span class="badge badge-primary">Prototyping</span>
              <span class="badge badge-primary">Design Thinking</span>
              <span class="badge badge-primary">Innovation</span>
              <span class="badge badge-primary">Proto.io</span>
            </li>
          </ul>
        </div>
      </div>
    </div>
  </div>
  <div id="chinaTownModal" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel"
    aria-hidden="true">
    <div class="modal-dialog modal-lg">
      <div class="modal-content">
        <button type="button" class="close col-1 offset-11" data-dismiss="modal">&times;</button>
        <h5 class="text-center">Chinatown BID website</h5>
        <img class="img-fluid col-sm-6 mx-auto" src="images/worksamples/Chinatown.png">
        <div>
          <ul class="list-group list-group-flush">
            <li class="list-group-item">
              <p>I helped developing a website in WordPress for the BID in Chinatown to help attract tourists and promote information about the local district.</p>
            </li>
            <li class="list-group-item">
              <i class="fa fa-globe mr-2"></i>
              <a href="http://chinatown.nyc" target="_blank">Chinatown.nyc</a>
            </li>
            <li class="list-group-item">
              <i class="fas fa-wrench mr-2"></i>
              <span class="badge badge-primary">WordPress</span>
              <span class="badge badge-primary">Web Design</span>
            </li>
          </ul>
        </div>
      </div>
    </div>
  </div>
  <div id="bunnyModal" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel"
    aria-hidden="true">
    <div class="modal-dialog modal-lg">
      <div class="modal-content">
        <button type="button" class="close col-1 offset-11" data-dismiss="modal">&times;</button>
        <h5 class="text-center">Book Author Website</h5>
        <img class="img-fluid col-sm-6 mx-auto" src="images/worksamples/bunnyleach.png">
        <div>
          <ul class="list-group list-group-flush">
            <li class="list-group-item">
              <p>I've created a website in WordPress for a book author to promote new book releases and inform readers about upcoming book signing events.</p>
            </li>
            <li class="list-group-item">
              <i class="fa fa-globe mr-2"></i>
              <a href="https://bunnyleach.com/" target="_blank">BunnyLeach.com</a>
            </li>
            <li class="list-group-item">
              <i class="fas fa-wrench mr-2"></i>
              <span class="badge badge-primary">WordPress</span>
              <span class="badge badge-primary">Web Design</span>
            </li>
          </ul>
        </div>
      </div>
    </div>
  </div>
  <div id="prismGuitarModals" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel"
    aria-hidden="true">
    <div class="modal-dialog modal-lg">
      <div class="modal-content">
        <button type="button" class="close col-1 offset-11" data-dismiss="modal">&times;</button>
        <h5 class="text-center">Guitar Luthier Website</h5>
        <img class="img-fluid col-sm-6 mx-auto" src="images/worksamples/prismguitars.png">
        <div>
          <ul class="list-group list-group-flush">
            <li class="list-group-item">
              <p>I've created a logo and developed website in WordPress for a guitar luthier to create a show room for unique guitar pieces and help increase guitar sales.</p>
            </li>
            <li class="list-group-item">
              <i class="fa fa-globe mr-2"></i>
              <a href="https://prismguitars.com/" target="_blank">prismguitars.com</a>
            </li>
            <li class="list-group-item">
              <i class="fas fa-wrench mr-2"></i>
              <span class="badge badge-primary">WordPress</span>
              <span class="badge badge-primary">Web Design</span>
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