
/*Iniciliza los componentes a utilizar*/
$(document).ready(function(){
    M.AutoInit();
    
});

$(window).on('load',function() {
    $('#preloader').fadeOut('slow');
});

// Get the video
var video = document.getElementById("myVideo");

// Get the button
var btn = document.getElementById("myBtn");

// Pause and play the video, and change the button text
function myFunction() {
  if (video.paused) {
    video.play();
    btn.innerHTML = "Pause";
  } else {
    video.pause();
    btn.innerHTML = "Play";
  }
}
$(document).ready(function(){
  $('.carousel').carousel();
});

var winWidth = $(window).width();
$('#videoContainer').mousemove(function(event)
{
  var moveX = ($(window).width()/2 - event.pageX)*0.2;
  var moveY = ($(window).height()/2 - event.pageY)*0.2;
  $('#myVideo').css('margin-left',moveX + 'px');
  $('#myVideo').css('margin-top',moveY + 'px');
});
