
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
    c.drawImage(images[index], 0, 0, canvas.width, canvas.height);

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
        mainC.drawImage(mcImages[index2], 0 , 0 , mainCharacterCanvas.width , mainCharacterCanvas.height);

    
        index2++;
    
    
    },130);

}







//Gunshot


var gunShotCanvas = document.getElementById('gunShotCanvas');

var gunShotContext = gunShotCanvas.getContext('2d');


var gunShotImages = new Array(3);

for (var i=1; i < gunShotImages.length ; i++){

    gunShotImages[i] = new Image();

    gunShotImages[i].src = './img/gunshot(' + i.toString() + ').png';

}



var gunshotIndex = 1;

var shotInterval;

function gunShotAnimation(){

    gunShotCanvas.style.opacity = 1;

   runInterval = setInterval(function(){



    

        if( gunshotIndex >= 3){
              
            gunshotIndex = 1;
    
        }
        mainC.clearRect(0, 0, gunShotCanvas .width, gunShotCanvas .height);
        mainC.drawImage(gunShotImages[gunshotIndex], 0 , 0 , gunShotCanvas .width , gunShotCanvas .height);

    
        gunshotIndex++;
    
    
    },55);



    setTimeout(function(){

        clearInterval(runInterval);

        //gunShotCanvas.style.opacity = 0;



    },300);



}


characterRun();

