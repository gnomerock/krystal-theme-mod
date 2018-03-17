<?php
	if(is_front_page()) {
		printf('
		<div class="container-fluid" style="margin-top:16px;">
	<div class="jumbotron">
	  <div class="container">
	  	<div class="row">
			<div class="col-sm-4">
				<img src="http://159.65.7.204/wp-content/uploads/2018/02/main-namneung.png" class="img-responsive img-thumbnail" alt="แหนมเนือง">
			</div>
			<div class="col-sm-8">
				<h1>แหนมเนือง</h1>
				  <p>เขาเล่าว่าแต่เดิมนั้นจัดเป็นอาหารของชาววังในประเทศเวียดนาม รับประทานในกลุ่มบุคคลชั้นสูงเท่านั้น</p>
				  <p>เราคัดสรรหมูส่วนสะโพกหมูแล้วนำมาบดละเอียดกับเครื่องปรุง ปั้นเป็นลูกชิ้นแล้วย่างไฟ เสิร์ฟพร้อมน้ำจิ้มสูตรบ้านนินตราและผักปลอดสารพิษจากบ้านผักดี สสธ.เชียงใหม่</p>
				  <p><a class="btn btn-dark btn-lg" href="#" role="button">อยากลองชิม ?</a></p>
			</div>
		</div>
	  </div>
	  
	</div>
</div>
		
		');
	}
?>

<div class="content-page">
	<div class="content-inner">
		<div class="container">
			<div class="row">
				<div class="col-md-12">
					<div class="page-content-area">
						<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
							<div class="entry-content">
								<?php
									the_content();

									wp_link_pages( array(
										'before' => '<div class="page-links">' . __( 'Pages:', 'krystal' ),
										'after'  => '</div>',
									) );
								?>
							</div><!-- .entry-content -->

							<footer class="entry-footer">
								<?php
									edit_post_link(
										sprintf(
											/* translators: %s: Name of current post */
											__( 'Edit %s', 'krystal' ),
											the_title( '<span class="screen-reader-text">"', '"</span>', false )
										),
										'<span class="edit-link">',
										'</span>'
									);
								?>
							</footer><!-- .entry-footer -->
						</article><!-- #post-## -->
					</div>
				</div>
			</div>
		</div>
	</div>
</div>


