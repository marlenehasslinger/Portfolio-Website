<?php
  $navigation = array(
    "#team" => "About",
    "#services" => "Interests",
    "#portfolio" => "Portfolio",
    "#resume" => "Resume",
    "#contact" => "Contact"
  );
?>

<nav class="mobile-nav list-group">
  <?php foreach($navigation AS $key => $value): ?>
    <a class="mobile-nav-link list-group-item list-group-item-action" href="<?php echo e($key);?>">
      <?php echo e($value);?>
      <?php if($key=="#team"): ?>
        <span class="sr-only">(current)</span>
      <?php endif;?>
    </a>
  <?php endforeach;?>
</nav>
    <header class="page-header">
      <div class="container">
        <nav class="navbar navbar-expand-lg navbar-dark">
        <a class="navbar-brand" href="#">Golden</a>
          <a class="navbar-brand navbar-icon" href="#">
            <!--<img class="navbar-logo" src="images/mhwebsitelogoblack.png">-->
          </a>
          <button id="toggle-mobile-nav" class="navbar-toggler" type="button" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse justify-content-end" id="navbarNavAltMarkup">
            <div class="navbar-nav">
              <?php foreach($navigation AS $key => $value): ?>
                <a class="nav-item nav-link" href="<?php echo e($key);?>">
                  <?php echo e($value);?>
                  <?php if($key=="#team"): ?>
                    <span class="sr-only">(current)</span>
                  <?php endif;?>
                </a>
              <?php endforeach;?>
            </div>
          </div>
        </nav>
        <div class="jumbotron header-jumbotron text-center d-flex flex-column justify-content-center align-items-center">
          <h1 class="display-5">Marlene C. Hasslinger</h1>
          <p class="lead">
            <!--<a class="btn btn-primary" href="#" role="button">Learn more</a>-->
          </p>
        </div>
      </div>
    </header>