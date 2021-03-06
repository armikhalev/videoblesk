<?php /* Template Name: home_page */ ?>
<!-- image that appears after pause , it is not the same source as poster in video  but the same image -->

<?php get_header(); ?>

<div id="container" class="container play">
<div class="row">

         <div class="col-sm-12 text-center">


							<div id="header_text" class="header_text">

								 	<h1>Andrei Shaikouski</h1>

							</div>

							<div id="header_text2" class="header_text2">

									<h3>Saving your dreams on a hard copy!</h3>
									<h4>Making your memories to come back beautifully!</h4>

							</div>

						<!-- button that appears when video paused and on page load -->
				 		<button type="button" id="btn" class="btn">Play video</button>

            <div class="poster">
                 <img alt="camera photo">
            </div>

				 <!-- make video fullscreen -->
				 <div class="fullscreen-bg">
					     <video preload="none" id="intro_video" class="fullscreen-bg__video">

					         <source src="http://localhost/wordpress/wp-content/uploads/video/Andrei_Video.mp4" type="video/mp4">
										 <p>
								       Your browser doesn't support HTML5 video.
								     </p>
					     </video>

				  </div>

        </div><!-- col-lg-12 text-center -->

</div><!-- .row -->

		 <!-- button that appears with all the controls when video played.
		 Separated from video controls because doesn't do anything,
		 only uses play class to toggle play/pause as well as the whole container.
	   It is needed as an indicator that video can be paused -->
		 <button class='pause'>II</button>

</div><!-- div class="container play" -->

<!-- Video Controls -->
<div class="videoControls">

		 <input type="range" id="seek-bar" value="0">
		 <button type="button" id="mute"><span id="volumeIcon" class="glyphicon glyphicon-volume-up"></span></button>
		 <input type="range" id="volume-bar" min="0" max="1" step="0.1" value="1">

</div><!-- div class="videoControls" -->

</div><!-- container play -->

<?php get_footer(); ?>
