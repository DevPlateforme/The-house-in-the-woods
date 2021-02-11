
         var background1 = document.getElementById('forrest');

         var background2 = document.getElementById('forrest2');

         var tree = document.getElementById('tree');


         var background1Right = 0;

         var background2Right = -99;

         var treeRight = -50;



         var darkDiv = document.getElementById('darkDiv');


         var distance = 0; 
          

         var maxDistance = 1500;        
            
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

         
         var checkGunInterval;

         var checkUmp45Interval;




         //INTERVAL
        


    
         window.onload = function(){
            document.onkeydown = checkKey;
           
            setInterval(function(){checkPlayerCollision()}, 100);

            setTimeout(function() { nextOpponentsAppearance()}, 5000);


            //LAUNCH AN INTERVAL TO CHECK IF THE PLAYER FIND A GUN (INTERVAL CLEARED WHEN THE PLAYER DOES)


            checkGunInterval = setInterval( function(){ checkGun()}, 2000);







            //OPPONENTS APPARENCE

         }




         //POSITIONS




         var ladyRight = window.getComputedStyle(lady).getPropertyValue('right');

         var ladyWidth = window.getComputedStyle(lady).getPropertyValue('width');

         var flashLightRight = window.getComputedStyle(characterDiv).getPropertyValue('right');




         //LADY APPEARANCE




        function foundBook(event){

            let bookRightPosition = window.getComputedStyle(event.target).getPropertyValue('right');


            booksInBag += 1;
            
            
            event.target.style.display = 'none';


            alert('vous avez trouvé un livre! Vous le rangez dans votre sac => nombre de livres => ' + booksInBag);

            if(booksInBag == 3){

                alert("vous avez réussi!!");


            }


                
        }


       