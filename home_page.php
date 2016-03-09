<?php /* Template Name: home_page */ ?>

<?php get_header(); ?>

<div class="container play">
<div class="row">
	<div class="box">

         <div class="col-lg-12 text-center">


							<div id="header_text" class="header_text">

								 	<h1>Andrei Shaikouski</h1>

							</div>



							<div id="header_text2" class="header_text2">

									<h3>Saving your dreams on a hard copy!</h3>
									<h4>Making your memories to come back beautifully!</h4>

							</div>

				 		<button type="button" id="btn" class="btn">Play video</button>

				 <div class="poster">
							<img src="http://localhost/videoblesk/wp-content/uploads/photo/camera.jpg" alt="camera photo">
				 </div>

				 <div class="fullscreen-bg">
					     <video poster="http://localhost/videoblesk/wp-content/uploads/photo/cameraFront.jpg" id="intro_video" class="fullscreen-bg__video">

					         <source src="http://localhost/videoblesk/wp-content/uploads/video/Andrei_Video.mp4" type="video/mp4">

					     </video>
				  </div>


        </div>

    </div><!---- .box --->
</div><!-- .row -->
</div>

<?php get_footer(); ?>
