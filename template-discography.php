<?php 

/* Template Name: Discography */
get_header();

?>

<?php $discography = get_field('discography_landing');?>

<body id="home" class="disco">
  
  <!--Header-->
  <header id="bg" class="hero">  
    
  <!-- Navigation Template -->
  <?php get_template_part('includes/section','navigation');?>  

  <!-- Main Content -->
  <main>
  <section>
    <div class="proba">
    <div >
      <h1 id="secondh1">Popular releases</h1>
    </div>   
    <div class="grid">
      <div class="grid-row bg-secondary left01"> 
        <img src="<?php echo $discography['disco_img_1'];?>" alt="">
        <div>
        <h4><?php echo $discography['disco_name_1'];?></h4>
        <p><?php echo $discography['disco_text_1'];?></p>
        </div>
      </div>
      <div class="grid-row bg-secondary left02">
        <img src="<?php echo $discography['disco_img_2'];?>" alt="">
        <div>
        <h4><?php echo $discography['disco_name_2'];?></h4>
        <p><?php echo $discography['disco_text_2'];?></p>
        </div>
      </div>
      <div class="grid-row bg-secondary right02">
        <img src="<?php echo $discography['disco_img_3'];?>" alt="">
        <div>
        <h4><?php echo $discography['disco_name_3'];?></h4>
        <p><?php echo $discography['disco_text_3'];?></p>
         </div>
      </div>
      <div class="grid-row bg-secondary right01">
         <img src="<?php echo $discography['disco_img_4'];?>" alt="">
         <div>
         <h4><?php echo $discography['disco_name_4'];?></h4>
         <p><?php echo $discography['disco_text_4'];?></p>
         </div>
      </div>
       <div class="grid-row bg-secondary left01">
        <img src="<?php echo $discography['disco_img_5'];?>" alt="">
         <div>
         <h4><?php echo $discography['disco_name_5'];?></h4>
         <p><?php echo $discography['disco_text_5'];?></p>
         </div>
      </div>
      <div class="grid-row bg-secondary top01">
         <img src="<?php echo $discography['disco_img_6'];?>" alt="">
        <div>
         <h4><?php echo $discography['disco_name_6'];?></h4>
         <p><?php echo $discography['disco_text_6'];?></p>
         </div>
      </div>
      <div class="grid-row bg-secondary top01">
        <img src="<?php echo $discography['disco_img_7'];?>" alt="">
         <div>
           <h4><?php echo $discography['disco_name_7'];?></h4>
           <p><?php echo $discography['disco_text_7'];?></p>
         </div>
       </div>
      <div class="grid-row bg-secondary right01">
         <img src="<?php echo $discography['disco_img_8'];?>" alt="">
         <div>
           <h4><?php echo $discography['disco_name_8'];?></h4>
           <p><?php echo $discography['disco_text_8'];?></p>
         </div>
      </div>
    </div>
  </div>
  </section> 
</header>
  
<!-- Follow Me Template -->  
<?php get_template_part('includes/section','social');?>

</main>




<?php get_footer();?>