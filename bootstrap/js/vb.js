(function( $ ) {
    "use strict";

    $(function() {

        $(document).ready(function(){

            $("#header_text").addClass("upper");
            $("#header_text2").addClass("upper");
            $("#btn").addClass("upper");

            $(".poster").hide();

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
                    $(".poster").hide();
                    $("#btn").hide().animate({
      opacity: 0
  });
                    video.play();


                }
                else {

                      $("#header_text").show().removeClass("header_text").addClass("parent_header_text").animate({
        opacity: 1.0
    }, 1500);
                      $("#header_text2").show().removeClass("header_text2").addClass("parent_header_text").animate({
        opacity: 1.0
    }, 1500);
                      $(".poster").show();
                      $("#btn").show().removeClass("btn").addClass("parent_btn").animate({
        opacity: 1.0
    }, 1500);
                      video.pause();

                }

            });

        });

      });

}(jQuery));
