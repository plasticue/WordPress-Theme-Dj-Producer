<?php get_header();?>


<?php $hero = get_field('hero');?>
<body id="home">

  <!--Header-->
  <header id="bg" class="hero">    
    
  <div id="navbar" class="navbar top">
     <h1 class="logo">
          <a href="<?php echo home_url(); ?>">
          <span class="text-primary"> Plasti</span>.cue</a>
     </h1>
     <nav>
         <ul>
            <li> <a href="#home">Home</a></li>
            <li> <a href="#about">About</a></li>
            <li> <a href="#galery">Gallery</a></li>
            <li> <a href="#services">Services</a></li>
            <li> <a href="#contact">Contact</a></li>
         </ul>
      </nav>
</div>


    <div class="content">
      <div class="container">
        <img class="glitch-img" src="<?php echo $hero['hero_image'];?>" alt="">      
        <h1 class="index"> <?php echo $hero['headline'];?> </h1>
        <h3 class="index"><?php echo $hero['sub_headline'];?></h3>    
        <h2 class="data index"><?php echo $hero['title'];?></h2>      
        <a href="<?php echo $hero['page_link'];?>" class="btn btn-main" class="index">
          Discography</a>
      </div>    
    </div>   
  </header>

<?php $body = get_field('body');?>


<!- About Me Section -->
<main>
    <section id="about" class="solutions flex-columns section-padding">
      <div class="row">
         <div class="column">
            <div class="column-1">
              <img src="<?php echo $body['about_image'];?>" alt="" >
            </div>
         </div>
         <div class="column">
            <div class="column-2 bg-secondary">
                 <h4><?php echo $body['about_h2'];?></h4>
                 <h2><?php echo $body['about_h1'];?></h2>
                 <?php echo $body['about_text'];?>
                 <a href="<?php echo $body['about_link'];?>" class="btn btn-outline">
                   Read More
                 </a>
            </div>
         </div>
      </div>
   </section>

 <?php $gallery = get_field('gallery');?>
    
 <!--Galery flex-->
 <section id="galery" class="galery flex-grid section-padding">  
   <div class="row"> 
      <div class="column"> 
        <a href="<?php echo $gallery['gallery_image_1'];?>" data-lightbox="cases">  
        <img src="<?php echo $gallery['gallery_image_1'];?>" alt="">
        </a> 
        <a href="<?php echo $gallery['gallery_image_2'];?>" data-lightbox="cases">    
        <img src="<?php echo $gallery['gallery_image_2'];?>" alt="">
        </a>
      </div>
      <div class="column">
        <a href="<?php echo $gallery['gallery_image_3'];?>" data-lightbox="cases">   
        <img src="<?php echo $gallery['gallery_image_3'];?>" alt="">
        </a>
        <a href="<?php echo $gallery['gallery_image_4'];?>" data-lightbox="cases">  
        <img src="<?php echo $gallery['gallery_image_4'];?>" alt="">
        </a>
     </div>
     <div class="column">
       <a href="<?php echo $gallery['gallery_image_5'];?>" data-lightbox="cases">  
       <img src="<?php echo $gallery['gallery_image_5'];?>" alt="">
       </a>
       <a href="<?php echo $gallery['gallery_image_6'];?>" data-lightbox="cases"> 
       <img src="<?php echo $gallery['gallery_image_6'];?>" alt="">
       </a>
     </div>
     <div class="column"> 
       <a href="<?php echo $gallery['gallery_image_7'];?>" data-lightbox="cases">     
       <img src="<?php echo $gallery['gallery_image_7'];?>" alt="" >
       </a>
    </div>
  </div>
</section>

<!-- Services -->
<section id="services" class="services flex-columns02 section-padding">
  <div class="row">
     <div class="column">
      <div class="column-2">
        <h4><?php echo $body['services_h2'];?></h4>
        <h2><?php echo $body['services_h1'];?></h2> 
        <?php echo $body['services_text'];?>
        <a href="<?php echo $body['services_link'];?>" class="btn btn-outline">Read More</a>
      </div>
     </div>
     <div class="column">
      <div class="column-1">
        <img src="<?php echo $body['services_image'];?>" alt="">
      </div>      
   </div>
  </div>
</section>

<!-- Follow Me Template-->
<?php get_template_part('includes/section','social');?>

<!-- Form -->
<section id="contact" class="contact flex-columns section-padding">
  <div class="row">
     <div class="column">
        <div id="slika" class="column-1">
          <img src="<?php echo $body['contact_image'];?>"alt="">
        </div>
     </div>
     <div class="column">
        <div id="clb-form" class="column-2">
          <div class="glitch-cont">
            <h2 class="glitch-txt">RequestCallback</h2>
          </div>
          
          <form class="callback-form">
            <div class="form-control">
              <label for="name"></label>
              <input type="text" name="name" id="name"
              placeholder="Enter name">
            </div>
            <div class="form-control">
              <label for="email"></label>
              <input type="email" name="email" id="email"
              placeholder="Enter email">
            </div>
            <div class="form-control">
              <label for="phone"></label>
              <input type="text" name="phone" id="phone"
              placeholder="Enter phone">
            </div>
            <div class="form-control">
              <label for="message"></label>
              <textarea name="message" id="message"
              placeholder="Enter message"></textarea>              
            </div>
            <input type="submit" value="Send" id="submit"
            class="btn"> 
          </form>         
        </div>
     </div>
  </div>
</section>
</main>


<?php get_footer();?>