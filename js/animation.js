
var canvas = document.getElementById('opponentCanvas');

var c = canvas.getContext('2d');


canvas.width = window.innerWidth;

canvas.height = window.innerHeight;


var images = new Array(7);

for (i=1; i < images.length ; i++){

       images[i] = new Image();

       images[i].src = './img/Walk(' + i.toString() + ').png';

}

setInterval(function(){
    
    i++;

    if( i >= 6){
          
        i = 1;

    }
    c.clearRect(0, 0, canvas.width, canvas.height);
    c.drawImage(images[i], 100 , 100 , 100,100);


},100)