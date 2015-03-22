//Acceder webcam
var video = document.getElementById('webcam');
var canvas = document.getElementById('canvas');
var context = canvas.getContext('2d');
var w = 0;
var h = 0;

navigator.getUserMedia = (navigator.getUserMedia || navigator.webkitGetUserMedia ||
                          navigator.mozGetUserMedia || navigator.msGetUserMedia);
   if (navigator.getUserMedia) {
      navigator.getUserMedia(
         {
            video:true
         },
         function(stream) {
             video.src = window.URL.createObjectURL(stream);
             video.play();
             w = video.width;
             h = video.height;
         },
         function(error) {
             alert('Su navegador no permite acceder a la camara web o no existe una camara web');
         }
     );
   }
   else {
      alert('Su navegador no permite acceder a la camara web o no existe una camara web');
    }

//Draw feed on canvas
timer = setInterval( function() {
    context.drawImage(video, 0, 0, w, h);
}, 34);


//Set up para detectar las credenciales
var corners = [];

var cols = 32;
//var rows = num_corners;
var descriptors = new jsfeat.matrix_t(cols, rows, jsfeat.U8_t | jsfeat.C1_t);
//jsfeat.orb.describe(img_u8:matrix_t, corners:Array, num_corners, descriptors:matrix_t);
