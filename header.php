<?php
/**
 * The header for our theme.
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 * 
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package krystal
 */

?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>">
<meta name="viewport" content="width=device-width, initial-scale=1">
	
<?php wp_head(); ?>
<link rel="stylesheet" type="text/css" href="//159.65.7.204/wp-content/themes/krystal/css/slick.css"/>
<script type="text/javascript" src="//159.65.7.204/wp-content/themes/krystal/js/slick.min.js"></script>
				

</head>

<body <?php body_class(); ?>>
	<?php
		if(true === get_theme_mod( 'kr_preloader_display',true )){
      		?>
		        <!-- Begin Preloader -->
		        <div class="loader-wrapper">
		            <div id="pre-loader"></div>
		        </div>
        		<!-- End Preloader -->
      		<?php
    	}
	?>

    <!-- Header Styles -->
    <?php
      /**
       * Hook - krystal_action_header.
       *
       * @hooked krystal_header_style_1 - 10
       * @hooked krystal_header_style_2 - 10
       */
      do_action( 'krystal_action_header' );
    ?>
	
    <?php if( is_front_page()) {
  		
        if("slider" != esc_attr(get_theme_mod( 'kr_slide_option1_radio' )) && "video" != esc_attr(get_theme_mod( 'kr_slide_option1_radio' ))) {
   			
            /* background selection */
            if ('color' === esc_attr(get_theme_mod( 'kr_home_bg_radio','image' ))) {
                ?>
                    <div id="home" class="elementor-menu-anchor"></div>
                        <section class="home-color-section" style="background: <?php echo sanitize_hex_color(get_theme_mod( 'kr_home_bg_color' )); ?> ">
                <?php    
            }
            else{
                ?>
                    <div id="home" class="elementor-menu-anchor"></div>
                        <section id="parallax-bg" class="<?php echo esc_attr(get_theme_mod( 'kr_header_styles','style1')) ?>">
							
                <?php
                    /* check for parallax */                            
                    if(true === get_theme_mod( 'kr_home_parallax',true)){
                ?>

    <div id="slider-inner" class="home-bg-item">
        <div id="myCarousel" class="carousel slide" data-ride="carousel">

            <!-- Indicators -->
            <ol class="carousel-indicators">
                <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
                <li data-target="#myCarousel" data-slide-to="1"></li>
                <li data-target="#myCarousel" data-slide-to="2"></li>
                <li data-target="#myCarousel" data-slide-to="3"></li>
                <li data-target="#myCarousel" data-slide-to="4"></li>
            </ol>

            <!-- Wrapper for slides -->
            <div class="carousel-inner">
                
                <div class="item active recommend0">
                    <div class="container">
                        <div class="row">
                            <div class="col-md-12">
                                <div class="slide-bg-section">
                                    <div class="slide-bg-text">
                                        <h1 class="wow fadeInDown <?php echo esc_attr(get_theme_mod( 'kr_home_text_position','center' )); ?>" data-wow-duration="2s" data-wow-delay="1s">
                                            <?php
                                                $home_heading_text=esc_attr(get_theme_mod( 'kr_home_heading_text'));
                                                if(!empty($home_heading_text)) {
                                                    echo $home_heading_text;     
                                                }
                                                else{
                                                    echo esc_attr(bloginfo( 'name' ));
                                                }
                                            ?>
                                        </h1>
                                        <p class="wow fadeInUp <?php echo esc_attr(get_theme_mod( 'kr_home_text_position','center' )); ?>" data-wow-duration="2s" data-wow-delay="1s"><?php echo esc_attr(get_theme_mod( 'kr_home_subheading_text', get_bloginfo( 'description', 'display' ))); ?></p>                                                    
                                        <div class="slide-buttons <?php echo esc_attr(get_theme_mod( 'kr_home_text_position','center' )); ?>">    
                                            <?php
                                                    $home_button_text = esc_attr(get_theme_mod( 'kr_home_button_text' ));
                                                if(!empty($home_button_text)) {
                                                    if (false !== strpos(esc_url(get_theme_mod( 'kr_home_button_url' )), 'youtube') || false !== strpos(esc_url(get_theme_mod( 'kr_home_button_url' )), 'vimeo')) {

                                                        ?>
                                                            <div class="read-more">
                                                                <a class="btn video-popup-link" href="<?php echo esc_url(get_theme_mod( 'kr_home_button_url' ));?>"><?php echo esc_attr(get_theme_mod( 'kr_home_button_text' ));?> <i class="fa fa-angle-double-right"></i>
                                                                </a>
                                                            </div>  
                                                        <?php
                                                    }
                                                    else{
                                                        ?>
                                                            <div class="read-more">
                                                                <a class="btn" href="<?php echo esc_url(get_theme_mod( 'kr_home_button_url' ));?>"><?php echo esc_attr(get_theme_mod( 'kr_home_button_text' ));?> <i class="fa fa-angle-double-right"></i>
                                                                </a>
                                                            </div>
                                                        <?php
                                                    }                                                   
                                                }
                                                $home_button2_text = esc_attr(get_theme_mod( 'kr_home_button2_text' ));
                                                if(!empty($home_button2_text)) {
                                                    if (false !== strpos(esc_url(get_theme_mod( 'kr_home_button2_url' )), 'youtube') || false !== strpos(esc_url(get_theme_mod( 'kr_home_button2_url' )), 'vimeo')) {

                                                        ?>
                                                            <div class="read-more">
                                                                <a class="btn video-popup-link" href="<?php echo esc_url(get_theme_mod( 'kr_home_button2_url' ));?>"><?php echo esc_attr(get_theme_mod( 'kr_home_button2_text' ));?> <i class="fa fa-angle-double-right"></i>
                                                                </a>
                                                            </div>  
                                                        <?php
                                                    }
                                                    else{
                                                        ?>
                                                            <div class="read-more">
                                                                <a class="btn" href="<?php echo esc_url(get_theme_mod( 'kr_home_button2_url' ));?>"><?php echo esc_attr(get_theme_mod( 'kr_home_button2_text' ));?> <i class="fa fa-angle-double-right"></i>
                                                                </a>
                                                            </div>
                                                        <?php 
                                                    }                                                   
                                                }
                                                
                                            ?>
                                        </div>                                        
                                    </div>
                                </div>
                                <?php 
                                    if(true === get_theme_mod( 'kr_home_scroll_down',true )){
                                        ?>
                                            <div class="scroll-down">
                                                <a data-scroll href="<?php echo esc_url(get_theme_mod( 'kr_scroll_button_url' )); ?>">
                                                    <span class="mouse">
                                                        <span></span>
                                                    </span>                                                                
                                                </a>
                                            </div>
                                        <?php
                                    }
                                ?>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="item recommend1">
                    <div class="container">
                        <div class="row">
                            <div class="col-md-12">
                                <div class="slide-bg-section">
                                    <div class="slide-bg-text">
                                        <h1 class="wow fadeInDown <?php echo esc_attr(get_theme_mod( 'kr_home_text_position','center' )); ?>" data-wow-duration="2s" data-wow-delay="1s">
                                            แหนมเนือง บ้านนินตรา
                                        </h1>
                                        <p class="wow fadeInUp <?php echo esc_attr(get_theme_mod( 'kr_home_text_position','center' )); ?>" data-wow-duration="2s" data-wow-delay="1s"><?php echo esc_attr(get_theme_mod( 'kr_home_subheading_text', get_bloginfo( 'description', 'display' ))); ?></p>                                                    
                                        <div class="slide-buttons <?php echo esc_attr(get_theme_mod( 'kr_home_text_position','center' )); ?>">    
                                            <?php
                                                    $home_button_text = esc_attr(get_theme_mod( 'kr_home_button_text' ));
                                                if(!empty($home_button_text)) {
                                                    if (false !== strpos(esc_url(get_theme_mod( 'kr_home_button_url' )), 'youtube') || false !== strpos(esc_url(get_theme_mod( 'kr_home_button_url' )), 'vimeo')) {

                                                        ?>
                                                            <div class="read-more">
                                                                <a class="btn video-popup-link" href="<?php echo esc_url(get_theme_mod( 'kr_home_button_url' ));?>"><?php echo esc_attr(get_theme_mod( 'kr_home_button_text' ));?> <i class="fa fa-angle-double-right"></i>
                                                                </a>
                                                            </div>  
                                                        <?php
                                                    }
                                                    else{
                                                        ?>
                                                            <div class="read-more">
                                                                <a class="btn" href="<?php echo esc_url(get_theme_mod( 'kr_home_button_url' ));?>"><?php echo esc_attr(get_theme_mod( 'kr_home_button_text' ));?> <i class="fa fa-angle-double-right"></i>
                                                                </a>
                                                            </div>
                                                        <?php
                                                    }                                                   
                                                }
                                                $home_button2_text = esc_attr(get_theme_mod( 'kr_home_button2_text' ));
                                                if(!empty($home_button2_text)) {
                                                    if (false !== strpos(esc_url(get_theme_mod( 'kr_home_button2_url' )), 'youtube') || false !== strpos(esc_url(get_theme_mod( 'kr_home_button2_url' )), 'vimeo')) {

                                                        ?>
                                                            <div class="read-more">
                                                                <a class="btn video-popup-link" href="<?php echo esc_url(get_theme_mod( 'kr_home_button2_url' ));?>"><?php echo esc_attr(get_theme_mod( 'kr_home_button2_text' ));?> <i class="fa fa-angle-double-right"></i>
                                                                </a>
                                                            </div>  
                                                        <?php
                                                    }
                                                    else{
                                                        ?>
                                                            <div class="read-more">
                                                                <a class="btn" href="<?php echo esc_url(get_theme_mod( 'kr_home_button2_url' ));?>"><?php echo esc_attr(get_theme_mod( 'kr_home_button2_text' ));?> <i class="fa fa-angle-double-right"></i>
                                                                </a>
                                                            </div>
                                                        <?php 
                                                    }                                                   
                                                }
                                                
                                            ?>
                                        </div>                                        
                                    </div>
                                </div>
                                <?php 
                                    if(true === get_theme_mod( 'kr_home_scroll_down',true )){
                                        ?>
                                            <div class="scroll-down">
                                                <a data-scroll href="<?php echo esc_url(get_theme_mod( 'kr_scroll_button_url' )); ?>">
                                                    <span class="mouse">
                                                        <span></span>
                                                    </span>                                                                
                                                </a>
                                            </div>
                                        <?php
                                    }
                                ?>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="item recommend2">
                    <div class="container">
                        <div class="row">
                            <div class="col-md-12">
                                <div class="slide-bg-section">
                                    <div class="slide-bg-text">
                                        <h1 class="wow fadeInDown <?php echo esc_attr(get_theme_mod( 'kr_home_text_position','center' )); ?>" data-wow-duration="2s" data-wow-delay="1s">
                                            ข้าวเกรียบปากหม้อ บ้านนินตรา
                                        </h1>
                                        <p class="wow fadeInUp <?php echo esc_attr(get_theme_mod( 'kr_home_text_position','center' )); ?>" data-wow-duration="2s" data-wow-delay="1s"><?php echo esc_attr(get_theme_mod( 'kr_home_subheading_text', get_bloginfo( 'description', 'display' ))); ?></p>                                                    
                                        <div class="slide-buttons <?php echo esc_attr(get_theme_mod( 'kr_home_text_position','center' )); ?>">    
                                            <?php
                                                    $home_button_text = esc_attr(get_theme_mod( 'kr_home_button_text' ));
                                                if(!empty($home_button_text)) {
                                                    if (false !== strpos(esc_url(get_theme_mod( 'kr_home_button_url' )), 'youtube') || false !== strpos(esc_url(get_theme_mod( 'kr_home_button_url' )), 'vimeo')) {

                                                        ?>
                                                            <div class="read-more">
                                                                <a class="btn video-popup-link" href="<?php echo esc_url(get_theme_mod( 'kr_home_button_url' ));?>"><?php echo esc_attr(get_theme_mod( 'kr_home_button_text' ));?> <i class="fa fa-angle-double-right"></i>
                                                                </a>
                                                            </div>  
                                                        <?php
                                                    }
                                                    else{
                                                        ?>
                                                            <div class="read-more">
                                                                <a class="btn" href="<?php echo esc_url(get_theme_mod( 'kr_home_button_url' ));?>"><?php echo esc_attr(get_theme_mod( 'kr_home_button_text' ));?> <i class="fa fa-angle-double-right"></i>
                                                                </a>
                                                            </div>
                                                        <?php
                                                    }                                                   
                                                }
                                                $home_button2_text = esc_attr(get_theme_mod( 'kr_home_button2_text' ));
                                                if(!empty($home_button2_text)) {
                                                    if (false !== strpos(esc_url(get_theme_mod( 'kr_home_button2_url' )), 'youtube') || false !== strpos(esc_url(get_theme_mod( 'kr_home_button2_url' )), 'vimeo')) {

                                                        ?>
                                                            <div class="read-more">
                                                                <a class="btn video-popup-link" href="<?php echo esc_url(get_theme_mod( 'kr_home_button2_url' ));?>"><?php echo esc_attr(get_theme_mod( 'kr_home_button2_text' ));?> <i class="fa fa-angle-double-right"></i>
                                                                </a>
                                                            </div>  
                                                        <?php
                                                    }
                                                    else{
                                                        ?>
                                                            <div class="read-more">
                                                                <a class="btn" href="<?php echo esc_url(get_theme_mod( 'kr_home_button2_url' ));?>"><?php echo esc_attr(get_theme_mod( 'kr_home_button2_text' ));?> <i class="fa fa-angle-double-right"></i>
                                                                </a>
                                                            </div>
                                                        <?php 
                                                    }                                                   
                                                }
                                                
                                            ?>
                                        </div>                                        
                                    </div>
                                </div>
                                <?php 
                                    if(true === get_theme_mod( 'kr_home_scroll_down',true )){
                                        ?>
                                            <div class="scroll-down">
                                                <a data-scroll href="<?php echo esc_url(get_theme_mod( 'kr_scroll_button_url' )); ?>">
                                                    <span class="mouse">
                                                        <span></span>
                                                    </span>                                                                
                                                </a>
                                            </div>
                                        <?php
                                    }
                                ?>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="item recommend3">
                    <div class="container">
                        <div class="row">
                            <div class="col-md-12">
                                <div class="slide-bg-section">
                                    <div class="slide-bg-text">
                                        <h1 class="wow fadeInDown <?php echo esc_attr(get_theme_mod( 'kr_home_text_position','center' )); ?>" data-wow-duration="2s" data-wow-delay="1s">
                                            กุ้งพันอ้อย บ้านนินตรา
                                        </h1>
                                        <p class="wow fadeInUp <?php echo esc_attr(get_theme_mod( 'kr_home_text_position','center' )); ?>" data-wow-duration="2s" data-wow-delay="1s"><?php echo esc_attr(get_theme_mod( 'kr_home_subheading_text', get_bloginfo( 'description', 'display' ))); ?></p>                                                    
                                        <div class="slide-buttons <?php echo esc_attr(get_theme_mod( 'kr_home_text_position','center' )); ?>">    
                                            <?php
                                                    $home_button_text = esc_attr(get_theme_mod( 'kr_home_button_text' ));
                                                if(!empty($home_button_text)) {
                                                    if (false !== strpos(esc_url(get_theme_mod( 'kr_home_button_url' )), 'youtube') || false !== strpos(esc_url(get_theme_mod( 'kr_home_button_url' )), 'vimeo')) {

                                                        ?>
                                                            <div class="read-more">
                                                                <a class="btn video-popup-link" href="<?php echo esc_url(get_theme_mod( 'kr_home_button_url' ));?>"><?php echo esc_attr(get_theme_mod( 'kr_home_button_text' ));?> <i class="fa fa-angle-double-right"></i>
                                                                </a>
                                                            </div>  
                                                        <?php
                                                    }
                                                    else{
                                                        ?>
                                                            <div class="read-more">
                                                                <a class="btn" href="<?php echo esc_url(get_theme_mod( 'kr_home_button_url' ));?>"><?php echo esc_attr(get_theme_mod( 'kr_home_button_text' ));?> <i class="fa fa-angle-double-right"></i>
                                                                </a>
                                                            </div>
                                                        <?php
                                                    }                                                   
                                                }
                                                $home_button2_text = esc_attr(get_theme_mod( 'kr_home_button2_text' ));
                                                if(!empty($home_button2_text)) {
                                                    if (false !== strpos(esc_url(get_theme_mod( 'kr_home_button2_url' )), 'youtube') || false !== strpos(esc_url(get_theme_mod( 'kr_home_button2_url' )), 'vimeo')) {

                                                        ?>
                                                            <div class="read-more">
                                                                <a class="btn video-popup-link" href="<?php echo esc_url(get_theme_mod( 'kr_home_button2_url' ));?>"><?php echo esc_attr(get_theme_mod( 'kr_home_button2_text' ));?> <i class="fa fa-angle-double-right"></i>
                                                                </a>
                                                            </div>  
                                                        <?php
                                                    }
                                                    else{
                                                        ?>
                                                            <div class="read-more">
                                                                <a class="btn" href="<?php echo esc_url(get_theme_mod( 'kr_home_button2_url' ));?>"><?php echo esc_attr(get_theme_mod( 'kr_home_button2_text' ));?> <i class="fa fa-angle-double-right"></i>
                                                                </a>
                                                            </div>
                                                        <?php 
                                                    }                                                   
                                                }
                                                
                                            ?>
                                        </div>                                        
                                    </div>
                                </div>
                                <?php 
                                    if(true === get_theme_mod( 'kr_home_scroll_down',true )){
                                        ?>
                                            <div class="scroll-down">
                                                <a data-scroll href="<?php echo esc_url(get_theme_mod( 'kr_scroll_button_url' )); ?>">
                                                    <span class="mouse">
                                                        <span></span>
                                                    </span>                                                                
                                                </a>
                                            </div>
                                        <?php
                                    }
                                ?>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="item recommend4">
                    <div class="container">
                        <div class="row">
                            <div class="col-md-12">
                                <div class="slide-bg-section">
                                    <div class="slide-bg-text">
                                        <h1 class="wow fadeInDown <?php echo esc_attr(get_theme_mod( 'kr_home_text_position','center' )); ?>" data-wow-duration="2s" data-wow-delay="1s">
                                            ขนมเบื้องญวน บ้านนินตรา
                                        </h1>
                                        <p class="wow fadeInUp <?php echo esc_attr(get_theme_mod( 'kr_home_text_position','center' )); ?>" data-wow-duration="2s" data-wow-delay="1s"><?php echo esc_attr(get_theme_mod( 'kr_home_subheading_text', get_bloginfo( 'description', 'display' ))); ?></p>                                                    
                                        <div class="slide-buttons <?php echo esc_attr(get_theme_mod( 'kr_home_text_position','center' )); ?>">    
                                            <?php
                                                    $home_button_text = esc_attr(get_theme_mod( 'kr_home_button_text' ));
                                                if(!empty($home_button_text)) {
                                                    if (false !== strpos(esc_url(get_theme_mod( 'kr_home_button_url' )), 'youtube') || false !== strpos(esc_url(get_theme_mod( 'kr_home_button_url' )), 'vimeo')) {

                                                        ?>
                                                            <div class="read-more">
                                                                <a class="btn video-popup-link" href="<?php echo esc_url(get_theme_mod( 'kr_home_button_url' ));?>"><?php echo esc_attr(get_theme_mod( 'kr_home_button_text' ));?> <i class="fa fa-angle-double-right"></i>
                                                                </a>
                                                            </div>  
                                                        <?php
                                                    }
                                                    else{
                                                        ?>
                                                            <div class="read-more">
                                                                <a class="btn" href="<?php echo esc_url(get_theme_mod( 'kr_home_button_url' ));?>"><?php echo esc_attr(get_theme_mod( 'kr_home_button_text' ));?> <i class="fa fa-angle-double-right"></i>
                                                                </a>
                                                            </div>
                                                        <?php
                                                    }                                                   
                                                }
                                                $home_button2_text = esc_attr(get_theme_mod( 'kr_home_button2_text' ));
                                                if(!empty($home_button2_text)) {
                                                    if (false !== strpos(esc_url(get_theme_mod( 'kr_home_button2_url' )), 'youtube') || false !== strpos(esc_url(get_theme_mod( 'kr_home_button2_url' )), 'vimeo')) {

                                                        ?>
                                                            <div class="read-more">
                                                                <a class="btn video-popup-link" href="<?php echo esc_url(get_theme_mod( 'kr_home_button2_url' ));?>"><?php echo esc_attr(get_theme_mod( 'kr_home_button2_text' ));?> <i class="fa fa-angle-double-right"></i>
                                                                </a>
                                                            </div>  
                                                        <?php
                                                    }
                                                    else{
                                                        ?>
                                                            <div class="read-more">
                                                                <a class="btn" href="<?php echo esc_url(get_theme_mod( 'kr_home_button2_url' ));?>"><?php echo esc_attr(get_theme_mod( 'kr_home_button2_text' ));?> <i class="fa fa-angle-double-right"></i>
                                                                </a>
                                                            </div>
                                                        <?php 
                                                    }                                                   
                                                }
                                                
                                            ?>
                                        </div>                                        
                                    </div>
                                </div>
                                <?php 
                                    if(true === get_theme_mod( 'kr_home_scroll_down',true )){
                                        ?>
                                            <div class="scroll-down">
                                                <a data-scroll href="<?php echo esc_url(get_theme_mod( 'kr_scroll_button_url' )); ?>">
                                                    <span class="mouse">
                                                        <span></span>
                                                    </span>                                                                
                                                </a>
                                            </div>
                                        <?php
                                    }
                                ?>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Left and right controls -->
            <a class="left carousel-control" href="#myCarousel" data-slide="prev">
                <span class="glyphicon glyphicon-chevron-left"></span>
                <span class="sr-only">Previous</span>
            </a>
            <a class="right carousel-control" href="#myCarousel" data-slide="next">
                <span class="glyphicon glyphicon-chevron-right"></span>
                <span class="sr-only">Next</span>
            </a>
        </div>  
    </div>

    </section>                       
<div id="slider-inner" class="home-bg-item" data-parallax="scroll" data-image-src="<?php echo esc_url(get_theme_mod( 'kr_theme_home_bg',get_template_directory_uri().'/img/start-bg.jpg' )); ?>">
    <div class="inner-overlay">   
        <?php
            }else{
        ?>
            <div id="slider-inner" class="home-bg-item" style="background:url('<?php echo esc_url(get_theme_mod( 'kr_theme_home_bg' )); ?>') no-repeat;">
                <div class="inner-overlay">
        <?php
            }                        
        ?>

        <?php
            }
        ?>           
                    
            
        </div>
    </div>                      
</div>              
<?php
    }else{
    //slider
    }
}
