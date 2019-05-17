$(document).ready(function(){
    json();
    
    setInterval(json, 600000); //10 minutos
});

function json(){
  $.getJSON("https://api.apixu.com/v1/current.json?key=dc7e74a64ee74a2094d110153191705&q=guanajuato", function(data){
    console.log(data);
    
    let icon = data.current.condition.icon;
    console.log(icon);
    $("#icon").attr("src",icon);
    
    let temperature_c = data.current.temp_c;
    let temperature_f = data.current.temp_f;
    $("#temperature").html(temperature_c+" Grados Celsius / "+temperature_f+" Grados Fahrenheit");
    
    let updated = data.location.localtime;
    $("#updated").html(updated);
    
    let humidity = data.current.humidity;
    $("#humidity").html(humidity+"%");
  });  
} 
//tomado de https://developers.google.com/youtube/iframe_api_reference
var tag = document.createElement('script');

tag.src = "https://www.youtube.com/iframe_api";
var firstScriptTag = document.getElementsByTagName('script')[0];
firstScriptTag.parentNode.insertBefore(tag, firstScriptTag);

// 3. This function creates an <iframe> (and YouTube player)
//    after the API code downloads.
var player;
function onYouTubeIframeAPIReady() {
  player = new YT.Player('player', {
    height: '400',
    width: '700',
    videoId: 'mw8nJL9VSAI',
    events: {
      'onReady': onPlayerReady,
      'onStateChange': onPlayerStateChange
    }
  });
}

// 4. The API will call this function when the video player is ready.
function onPlayerReady(event) {
  event.target.playVideo();
}

// 5. The API calls this function when the player's state changes.
//    The function indicates that when playing a video (state=1),
//    the player should play for six seconds and then stop.
var done = false;
function onPlayerStateChange(event) {
  if (event.data == YT.PlayerState.PLAYING && !done) {
    setTimeout(stopVideo, 6000);
    done = true;
  }
}
function stopVideo() {
  player.stopVideo();
}
