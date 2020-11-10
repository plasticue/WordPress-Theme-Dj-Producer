<?php 

/* Template Name: Services */
get_header();

?>


<body id="home" class="services-inr">

<!--Header-->
<header class="new-srv-hd">

<!-- Navigation Template -->
<?php get_template_part('includes/section','navigation');?>  
           
 </header>
  <section id="srv-sec">
    <div id="header-services">
      <h2><span class="srv-span"> Services</span></h2>
      <p>Providing high-quality mix and mastering services, you can send me a request for a track or remix.</p>
      
    </div>
  <div class="grid-src">
    <div class="row-src">
      <h3>Mixing</h3>
      <h4>40€</h4>
      <p>Crystalizing and clearing sound.Preparing hight professional premasters</p>
      <a href="mailto:kicaroker@live.com" class="btn-src">
        Buy Now
      </a>
    </div>
    <div class="row-src">
      <h3>Mastering</h3>
      <h4>30€</h4>
      <p>Providing high-quality analog mastering services. Working with both steams and with whole tracks.</p>
        <a href="mailto:kicaroker@live.com" class="btn-src">
        Buy Now
      </a>
    </div>
    <div class="row-src">
      <h3>Remix</h3>
      <h4>80€</h4>
      <p>Remixing your track on request.Before sending please be sure to that your style matches mine.</p>
      <a href="mailto:kicaroker@live.com" class="btn-src">
        Buy Now
      </a>
    </div>
  </div>
  </section>


  
<!-- Follow Me Template -->  
<?php get_template_part('includes/section','social');?>


<?php get_footer();?>