
var canvas = document.getElementById('opponentCanvas');

var c = canvas.getContext('2d');

var none = 'none';

var currentInterval = none;

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


function characterRun(){

   currentInterval = setInterval(function(){
    

        if( index2 >= 7){
              
            index2 = 1;
    
        }
        mainC.clearRect(0, 0, mainCharacterCanvas.width, mainCharacterCanvas.height);
        mainC.drawImage(mcImages[index2], 0 , 0 , mainCharacterCanvas.width , mainCharacterCanvas.height);

    
        index2++;
    
    
    },130);

}







//back run



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







//Main character



var mcBackImages = new Array(7);

for (var i=1; i <  mcBackImages .length ; i++){

    mcBackImages[i] = new Image();

    mcBackImages[i].src = './img/charBack(' + i.toString() + ').png';

}



var indexBack = 1;


function backCharacterRun(){

    currentInterval = setInterval(function(){
    

        if( indexBack >= 7){
              
            indexBack = 1;
    
        }
        mainC.clearRect(0, 0, mainCharacterCanvas.width, mainCharacterCanvas.height);
        mainC.drawImage( mcBackImages[indexBack], 0 , 0 , mainCharacterCanvas.width , mainCharacterCanvas.height);

    
        indexBack++;
    
    
    },130);

}







function clearCurrentRunInterval(){

    
      if(currentInterval != none){


        clearInterval(currentInterval);
        


      }


}






characterRun();

