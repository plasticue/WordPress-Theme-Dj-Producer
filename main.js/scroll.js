$(function() {
  $('.glitch-img').mgGlitch({
    // set 'true' to stop the plugin
    destroy : false, 
    // set 'false' to stop glitching
    glitch: true, 
    // set 'false' to stop scaling
    scale: true, 
    // set 'false' to stop glitch blending
    blend : true, 
    // select blend mode type
    blendModeType : 'hue',
    // set min time for glitch 1 elem
    glitch1TimeMin : 300, 
    // set max time for glitch 1 elem
    glitch1TimeMax : 500,
    // set min time for glitch 2 elem
    glitch2TimeMin : 10, 
    // set max time for glitch 2 elem
    glitch2TimeMax : 200, 
    zIndexStart: 4,
  
  });
  });


// Smooth Scrolling
$('#navbar a, .btn').on('click', function (e) {
  if (this.hash !== '') {
    e.preventDefault();

    const hash = this.hash;

    $('html, body').animate(
      {
        scrollTop: $(hash).offset().top - 70,
      },
      800
    );
  }
});




  $(window).scroll(function() {
    var scroll = $(window).scrollTop();
    $('.img-blur').css({
      filter: "blur(" + (scroll/2000) + "px)"
    }) 
  }) 