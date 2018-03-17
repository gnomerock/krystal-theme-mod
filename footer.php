<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package krystal
 */

?>
<!--
	<div class="container-fluid" style="background-color: #f0f0f0 !important; padding: 30px;">
		<div class="container">
			<div class="row">
				<div class="col-sm-4" style="padding: 20px;">
					<div class="media">
					  <div class="media-left">
						<a href="https://www.facebook.com/BaanNintra/">
						  <img class="media-object" src="http://nittayakaiyang.com/th/img/ico_fb.png" alt="facebook-icon">
						</a>
					  </div>
					  <div class="media-body" style="padding-left: 100px !important;">
						<h4 class="media-heading" style="padding-top: 0px !important;">Facebook</h4>
						BaanNintra
					  </div>
					</div>
				</div>
				<div class="col-sm-4" style="padding: 20px;">
					<div class="media">
					  <div class="media-left">
						<img class="media-object" src="http://nittayakaiyang.com/th/img/ico_line.png" alt="facebook-icon">
					  </div>
					  <div class="media-body" style="padding-left: 100px !important;">
						<h4 class="media-heading" style="padding-top: 0px !important;">LINE@</h4>
						noitienjit
					  </div>
					</div>
				</div>
				<div class="col-sm-4" style="padding: 20px;">
					<div class="media">
					  <div class="media-left">
						<a href="https://www.instagram.com/baannintra/">
						  <img class="media-object" src="http://nittayakaiyang.com/th/img/ico_instagram.png" alt="facebook-icon">
						</a>
					  </div>
					  <div class="media-body" style="padding-left: 100px !important;">
						<h4 class="media-heading" style="padding-top: 0px !important;">Instagram</h4>
						BaanNintra
					  </div>
					</div>
				</div>
			</div>
		</div>
	</div>-->
	<!-- Begin Footer Section -->
	<footer id="footer">
        <div class="container">
            <div class="row">
                <?php
                    if(is_active_sidebar('footer-column1') || is_active_sidebar('footer-column2') || is_active_sidebar('footer-column3') || is_active_sidebar('footer-column4')){
                        ?>
                            <div class="footer-widgets-wrapper">
                                <?php
                                    if('3'===esc_attr(get_theme_mod( 'kr_footer_widgets' ))) {
                                        ?>
                                            <div class="col-md-4">
                                                <?php
                                                    if(is_active_sidebar('footer-column1')){
                                                        dynamic_sidebar( 'footer-column1' );
                                                    }
                                                ?>                    
                                            </div>
                                            <div class="col-md-4">
                                                <?php
                                                    if(is_active_sidebar('footer-column2')){
                                                        dynamic_sidebar( 'footer-column2' );
                                                    }
                                                ?>                    
                                            </div>
                                            <div class="col-md-4">
                                                <?php
                                                    if(is_active_sidebar('footer-column3')){
                                                        dynamic_sidebar( 'footer-column3' );
                                                    }
                                                ?>                    
                                            </div>            
                                        <?php
                                    }
                                    else{
                                        ?>
                                            <div class="col-md-3">
                                                <?php
                                                    if(is_active_sidebar('footer-column1')){
                                                        dynamic_sidebar( 'footer-column1' );
                                                    }
                                                ?>                    
                                            </div>
                                            <div class="col-md-3">
                                                <?php
                                                    if(is_active_sidebar('footer-column2')){
                                                        dynamic_sidebar( 'footer-column2' );
                                                    }
                                                ?>                    
                                            </div>
                                            <div class="col-md-3">
                                                <?php
                                                    if(is_active_sidebar('footer-column3')){
                                                        dynamic_sidebar( 'footer-column3' );
                                                    }
                                                ?>                    
                                            </div>
                                            <div class="col-md-3">
                                                <?php
                                                    if(is_active_sidebar('footer-column4')){
                                                        dynamic_sidebar( 'footer-column4' );
                                                    }
                                                ?>                    
                                            </div>            
                                        <?php
                                    }            
                                ?>
                            </div>
                        <?php                        
                    }
                ?>
            </div>
			
			<div class="row" style="margin-top:15px;">
				<div class="col-sm-6" style="margin: 15px;">
					332/22 ต.หนองจ๊อม อ.สันทราย <br>
					San Sai, Chiang Mai, Thailand<br>
					091 853 1023
					<div>
						<iframe
						  width="auto"
						  height="400"
						  frameborder="0" style="border:0"
						  src="https://www.google.com/maps/embed/v1/place?key=AIzaSyDpSclSBpo99nA3ip45-8hqF393T7ssJHQ
							&q=BaanNintra+Vietnamese+restaurant" allowfullscreen>
						</iframe>
					</div>
				</div>
				<div class="col-sm-6" style="margin: 15">
					<iframe src="https://www.facebook.com/plugins/page.php?href=https%3A%2F%2Fwww.facebook.com%2Fbaannintra&tabs=timeline&width=340&height=500&small_header=false&adapt_container_width=true&hide_cover=false&show_facepile=true&appId" width="auto" height="400" style="border:none;overflow:hidden" scrolling="no" frameborder="0" allowTransparency="true"></iframe>
				</div>
			</div>
			
			<div class="row text-center" style="margin: 20px;">
				<img src="http://159.65.7.204/wp-content/uploads/2018/02/cropped-brand-1-1.png" alt="nintra brand" height="70"><br>
				Copyright 2018 BaanNintra Vietnamese Restaurant
			</div>

            
        </div>
    </footer>
<?php wp_footer(); ?>

</body>
</html>