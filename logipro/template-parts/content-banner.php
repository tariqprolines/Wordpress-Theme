<?php 
$image = get_field('page_header_banner');
if(!empty($image)){
   $imgUrl = esc_url($image['url']);
}
else{
   $imgUrl = get_template_directory_uri().'/assets/images/banner/banner4.jpg';
}
?>
  <div class="banner-area" id="banner-area" style="background-image:url(<?php echo $imgUrl;?>);">
         <div class="container">
            <div class="row justify-content-center">
               <div class="col">
                  <div class="banner-heading">
                     <h1 class="banner-title"><?php the_title();?></h1>
                     <ol class="breadcrumb">
                        <li><a href="<?php echo site_url();?>">Home</a></li>
                        <li><?php the_title();?></li>
                     </ol>
                  </div>
               </div>
               <!-- Col end-->
            </div>
            <!-- Row end-->
         </div>
         <!-- Container end-->
      </div>
      <!-- Banner area end-->