<div class="carousel slide" id="main-slide" data-ride="carousel">
         <!-- Indicators-->
         <ol class="carousel-indicators visible-lg visible-md">
            <li class="active" data-target="#main-slide" data-slide-to="0"></li>
            <li data-target="#main-slide" data-slide-to="1"></li>
            <li data-target="#main-slide" data-slide-to="2"></li>
         </ol>
         <!-- Indicators end-->
         <!-- Carousel inner-->
         <div class="carousel-inner">
            <div class="carousel-item active" style="background-image:url(<?php echo get_theme_mod('first_slide');?>");>
               <div class="container">
                  <div class="slider-content text-left">
                     <div class="col-md-12">
                        <h2 class="slide-title title-light"><?php echo get_theme_mod('first_slide_top_heading')?></h2>
                        <h3 class="slide-sub-title"><?php echo get_theme_mod('first_slide_middle_heading')?></h3>
                        <p class="slider-description lead"><?php echo get_theme_mod('first_slide_bottom_heading')?></p>
                        <p><a class="slider btn btn-primary" href="#">View Services</a></p>
                     </div>
                     <!-- Col end-->
                  </div>
                  <!-- Slider content end-->
               </div>
               <!-- Container end-->
            </div>
            <!-- Carousel item 1 end-->
            <div class="carousel-item" style="background-image:url(<?php echo get_theme_mod('second_slide');?>);">
               <div class="container">
                  <div class="slider-content text-center">
                     <div class="col-md-12">
                        <h2 class="slide-title title-light"><?php echo get_theme_mod('second_slide_top_heading');?></h2>
                        <h3 class="slide-sub-title"><?php echo get_theme_mod('second_slide_middle_heading');?></h3>
                        <p class="slider-description lead"><?php echo get_theme_mod('second_slide_bottom_heading');?> </p>
                        <p><a class="slider btn btn-primary" href="#">Our Services</a></p>
                     </div>
                     <!-- Col end-->
                  </div>
                  <!-- Slider content end-->
               </div>
               <!-- Container end-->
            </div>
            <!-- Carousel item 2 end-->
            <div class="carousel-item" style="background-image:url(<?php echo get_theme_mod('third_slide')?>);">
               <div class="container">
                  <div class="slider-content text-right">
                     <div class="col-md-12">
                        <h2 class="slide-title title-light"><?php echo get_theme_mod('third_slide_top_heading');?></h2>
                        <h3 class="slide-sub-title"><?php echo get_theme_mod('third_slide_middle_heading');?></h3>
                        <p><a class="slider btn btn-primary" href="#">View Services</a></p>
                     </div>
                     <!-- Col end-->
                  </div>
                  <!-- Slider content end-->
               </div>
               <!-- Container end-->
            </div>
            <!-- Carousel item 3 end-->
         </div>
         <!-- Carousel inner end-->
         <!-- Controllers--><a class="left carousel-control carousel-control-prev" href="#main-slide" data-slide="prev"><span><i class="fa fa-angle-left"></i></span></a>
         <a class="right carousel-control carousel-control-next" href="#main-slide" data-slide="next"><span><i class="fa fa-angle-right"></i></span></a>
      </div>