<?php 

/* Template Name: About */
get_header();

?>

<?php $about = get_field('about_landing');?>

<body id="home" class="aboutme">

  <!--Header-->
 <header id="bg" class="hero">

  <!-- Navigation Template --> 
  <?php get_template_part('includes/section','navigation');?>  
  
  <main>
  <section class="aboutheader">
      <div class="aboutme02">
       <div class="circle"></div>
         <h3><?php echo $about['headline'];?></h3>
         <h1><?php echo $about['small_headline'];?></h1>
         <?php echo $about['about_info'];?>
       </div>
      <div id="about-img">
     <img src="<?php echo $about['about_img'];?>" alt="">
    </div>
  </section>
 </header>

<!-- Follow Me Template-->
<?php get_template_part('includes/section','social');?>

</main>
   


<?php get_footer();?>