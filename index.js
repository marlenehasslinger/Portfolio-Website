jQuery(document).ready(function($) {
    $("#toggle-mobile-nav").click(function() {
        $("#page").toggleClass("mobile-nav-opened");
    });

    /* activate jquery isotope */
  var $container = $('#posts').isotope({
    itemSelector : '.item',
    isFitWidth: true
  });

  $(window).smartresize(function(){
    $container.isotope({
      columnWidth: '.col-sm-3'
    });
  });
  
  $container.isotope({ filter: '*' });

    /* filter items on button click */
  $('#filters').on( 'click', 'button', function() {
    var filterValue = $(this).attr('data-filter');
    $container.isotope({ filter: filterValue });
  });
});

$("#page").click(function(e) {
    var target = e.target;

    var isMobileNavButtonClicked = (
        $(target).hasClass("navbar-toggler")
        || $(target).parent().hasClass("navbar-toggler")
    );

    if(isMobileNavButtonClicked){
        return;
    }

    $("#page").removeClass("mobile-nav-opened")
});


    /* links for portfolio */
$("#portfolio_nickileach").click(function () {
    window.open("https://nickileach.org");
    return false;
});

$("#portfolio_prism").click(function () {
    window.open("https://prismguitars.com");
    return false;
});

$("#portfolio_hero").click(function () {
    window.open("https://hero-skulpturen.com");
    return false;
});

$("#portfolio_chinatown").click(function () {
    window.open("http://chinatown.nyc");
    return false;
});