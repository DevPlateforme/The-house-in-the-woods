

var canvas = document.getElementById('opponentCanvas');

var c = canvas.getContext('2d');


canvas.width = window.innerWidth;

canvas.height = window.innerHeight;


var images = new Array(7);

for (i=1; i < images.length ; i++){

       images[i] = new Image();

       images[i].src = './img/Walk(' + i.toString() + ').png';

}


var index = 1;

setInterval(function(){

    if( index >= 7){
          
        index = 1;

    }
    c.clearRect(0, 0, canvas.width, canvas.height);
    c.drawImage(images[index], 100 , 100 , 100 , 100);

    index++;
},100)





//Main character

var mainCharacterCanvas = document.getElementById('mainCharacterCanvas');

var mainC = mainCharacterCanvas.getContext('2d');


var mcImages = new Array(7);

for (var i=1; i < mcImages.length ; i++){

     mcImages[i] = new Image();

     mcImages[i].src = './img/char' + i.toString() + '.png';

}



var index2 = 1;

var runInterval;

function characterRun(){

   runInterval = setInterval(function(){
    

        if( index2 >= 7){
              
            index2 = 1;
    
        }
        mainC.clearRect(0, 0, mainCharacterCanvas.width, mainCharacterCanvas.height);
        mainC.drawImage(mcImages[index2], 50 , 50 , 100 , 100);
    
        index2++;
    
    
    },130);

}



characterRun();