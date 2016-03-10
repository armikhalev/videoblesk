/*
* Author: Arseny Mikhalev
* Descripton: Script for videoblesk.com
*/


(function( $ ) {
    "use strict";

    $(function() {

        $(document).ready(function(){

            // run check on page load
            checkSize();

            // run check on resize of the window
            $(window).resize(checkSize);

            // Flying up effect of text on page load
            $("#header_text").addClass("upper");
            $("#header_text2").addClass("upper");
            $("#btn").addClass("upper");

            // hide poster and button that appears after pause
            $(".poster").hide();
            $(".pause").hide();
            $("#seek-bar").hide();
            $("#volume-bar").hide();
            $("#mute").hide();

            // declare variables
            var video = $("#intro_video").get(0);

            // play/pause video
            $(".play").click(function(){

                if(video.paused){

                    $("#header_text").hide().animate({
      opacity: 0
  });
                    $("#header_text2").hide().animate({
      opacity: 0
  });
                    $("#btn").hide().animate({
      opacity: 0
  });

                    $(".poster").hide();
                    $("nav").hide();
                    $(".pause").show();
                    $("#seek-bar").fadeIn();
                    $("#volume-bar").fadeIn();
                    $("#mute").fadeIn();

                    video.play();

                }
                else {

                      $("#header_text").show().removeClass("header_text").addClass("parent_header_text").animate({
        opacity: 1.0
    }, 1500);
                      $("#header_text2").show().removeClass("header_text2").addClass("parent_header_text").animate({
        opacity: 1.0
    }, 1500);
                      $("#btn").show().removeClass("btn").addClass("parent_btn").animate({
        opacity: 1.0
    }, 1500);
                      $(".poster").show();
                      $("nav").fadeIn();
                      $(".pause").hide();
                      $("#seek-bar").hide();
                      $("#volume-bar").hide();
                      $("#mute").hide();
                      
                      video.pause();

                }

            }); // end of   $(".play").click

              // custom video controls

              // Buttons
              var muteButton = document.getElementById("mute");

              // Sliders
              var seekBar = document.getElementById("seek-bar");
              var volumeBar = document.getElementById("volume-bar");
              var volumeIcon = document.getElementById("volumeIcon");

              // Event listener for the mute button
              muteButton.addEventListener("click", function() {
                // toggle glyphicon of volume mute/sound
                $(this).find('span').toggleClass('glyphicon-volume-up').toggleClass('glyphicon-volume-off');

                if (video.muted == false) {
                  // Mute the video
                  video.muted = true;

                } else {
                  // Unmute the video
                  video.muted = false;

                }
              });

              // Event listener for the volume bar
              volumeBar.addEventListener("change", function() {
                // Update the video volume
                video.volume = volumeBar.value;
              });

              // Event listener for the seek bar
              seekBar.addEventListener("change", function() {
                // Calculate the new time
                var time = video.duration * (seekBar.value / 100);

                // Update the video time
                video.currentTime = time;
              });

              // Update the seek bar as the video plays
              video.addEventListener("timeupdate", function() {
                // Calculate the slider value
                var value = (100 / video.duration) * video.currentTime;

                // Update the slider value
                seekBar.value = value;
              });


              // Pause the video when the slider handle is being dragged
              seekBar.addEventListener("mousedown", function() {
                video.pause();
              });

              // Play the video when the slider handle is dropped
              seekBar.addEventListener("mouseup", function() {
                video.play();
              });

        }); // end of $(document).ready

        //Function to the css media query rules
        function checkSize(){
            if ($(".fullscreen-bg__video").css("display") == "none" ){
                $("#container").removeClass("play");
            }
          }


      }); // end of $(function()

}(jQuery));
