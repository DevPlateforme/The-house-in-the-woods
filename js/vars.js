
         var background1 = document.getElementById('forrest');

         var background2 = document.getElementById('forrest2');

         var tree = document.getElementById('tree');


         var background1Right = 0;

         var background2Right = -99;

         var treeRight = -50;



         var darkDiv = document.getElementById('darkDiv');


         var distance = 0; 

         var maxDistanceBackward = - 1500;
          

         var maxDistanceForward = 1500;        
            
         var shotInterval;

         var none = 'none';

         //DIRECTIONS


         var forward = 'forward';

         var backward = 'backward';
           

         //PLAYER DIRECTION
      
         var playerDirection = forward;


         //OPPONENT DIRECTION

         var opponentDirection;


         //OPPONENT DIRECTION TYPES

         var rightToLeft = 'rightToLeft';

         var leftToRight = 'leftToRight';


         var deathCount;


         var gunShotSpark = document.getElementById("gunshotSpark");

         var backGunShotSpark = document.getElementById("gunshotSpark2");


         var lady = document.getElementById('lady');

         var characterDiv = document.getElementById('characterDiv');

         var character = document.getElementById('character');


         var bullet = document.getElementById('bullet');



         var gunLoaded = true;


         var book1 = document.getElementById("book1");
         var book2 = document.getElementById("book2");
         var book3 = document.getElementById("book3");
         var book4 = document.getElementById("book4");
         var book5 = document.getElementById("book5");
         var book6 = document.getElementById("book6");
         var book7 = document.getElementById("book7");


         var book1Object = {name: 'book1' , bookInterval: setInterval(function(){

            if( parseInt(window.getComputedStyle(book1).getPropertyValue('left')) >= (window.innerWidth/3.5)){

                bookFound(book1Object);
            }


         },500) };

         var book2Object = {name: 'book2' , bookInterval: setInterval(function(){

            if(parseInt(window.getComputedStyle(book2).getPropertyValue('left'))  >= (window.innerWidth/3.5)){

                bookFound(book2Object);
            }


         },500)};

         var book3Object = {name: 'book3' , bookInterval: setInterval(function(){

            if(parseInt(window.getComputedStyle(book3).getPropertyValue('left'))  >= (window.innerWidth/3.5)){

                bookFound(book3Object);
            }


         },500)};


         var book4Object = {name: 'book4' , bookInterval: setInterval(function(){

            if(parseInt(window.getComputedStyle(book4).getPropertyValue('left'))  <= (window.innerWidth/2)){

                bookFound(book4Object);
            }


         },500)};

         var book5Object = {name: 'book5' , bookInterval: setInterval(function(){

            if(parseInt(window.getComputedStyle(book5).getPropertyValue('left')) <= (window.innerWidth/2)){

                bookFound(book5Object);
            }


         },500)};

         


         var book6Object = {name: 'book6' , bookInterval: setInterval(function(){

            if(parseInt(window.getComputedStyle(book6).getPropertyValue('left')) <= (window.innerWidth/2)){

                bookFound(book6Object);
            }


         },500)};


         var book7Object = {name: 'book7' , bookInterval: setInterval(function(){

            if(parseInt(window.getComputedStyle(book7).getPropertyValue('left')) <= (window.innerWidth/2)){

                bookFound(book7Object);
            }


         },500)};



         
       var booksCount = 7;





         var booksInBag = 0;
      

         var opponentOnScreen = false;

         var ladyOnScreen = true;

         var book1OnScreen = true;
         var book2OnScreen = true;
         var book3OnScreen = true;
         var book4OnScreen = true;
         var book5OnScreen = true;
         var book6OnScreen = true;
         var book7OnScreen = true;


         var ladySeesThePlayer = false;




         var carefulMessage = document.getElementById('carefulDiv');


         





         //WEAPONS 


         var gun = 'gun';

         var ump45 = 'ump45';


         var inventory = [];


         var currentWeapon = none;

        


         //INTERVAL
        


    
         window.onload = function(){
            document.onkeydown = checkKey;
           
            setInterval(function(){checkPlayerCollision()}, 400);

            setTimeout(function() { nextOpponentsAppearance()}, 5000);

            


            //LAUNCH AN INTERVAL TO CHECK IF THE PLAYER FIND A GUN (INTERVAL CLEARED WHEN THE PLAYER DOES)





            //OPPONENTS APPARENCE

         }




         //POSITIONS




         var ladyRight = window.getComputedStyle(lady).getPropertyValue('right');

         var ladyWidth = window.getComputedStyle(lady).getPropertyValue('width');

         var flashLightRight = window.getComputedStyle(characterDiv).getPropertyValue('right');




         //LADY APPEARANCE




        