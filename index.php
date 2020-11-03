<?php

   require 'header.php';

?>


<h3> Vous naviguez dans les bois....votre téléphone est coupé, vous recevez un message "un étrange virus aurait attaqué Manhattan, veuillez rester chez vous, et verrouiller votre cerrure à double tours"</h3>
    
    
        
       <div id='characterDiv' class='forwardLightDirection'>
              <div id='character'></div>
        </div>

        <div id='bullet'></div>

        <div id='machineGun'></div>

         <div id='gun'></div>


        <div id='opponent'></div>

         <div id='lady'></div>

         <div id='key'></div>

         <div id='forrest'>
         </div>

       <div id='forrest2'>

         
        
    </div>






     <script>

         var background1 = document.getElementById('forrest');

         var background2 = document.getElementById('forrest2');

         var background1Right = 0;

         var background2Right = -99;

         var currentWeapon = gun;

         var distance = 0;


         //DIRECTIONS


         var forward = 'forward';

         var backward = 'backward';


         var direction = forward;

         var deathCount;


         var lady = document.getElementById('lady');

         var characterDiv = document.getElementById('characterDiv');

         var character = document.getElementById('character');


         var bullet = document.getElementById('bullet');


         



         var ladyOnScreen = true;

         var ladySeesThePlayer = false;






         //WEAPONS 


         gun = 'gun';

         machineGun = 'machineGun';

        


    
         window.onload = function(){
            document.onkeydown = checkKey;
           
            setInterval(function(){checkPlayerCollision()}, 100);

         }




         //POSITIONS




         var ladyRight = window.getComputedStyle(lady).getPropertyValue('right');

         var ladyWidth = window.getComputedStyle(lady).getPropertyValue('width');

         var flashLightRight = window.getComputedStyle(characterDiv).getPropertyValue('right');




         //LADY APPEARANCE


         //AT ANY MOMENT, THE LADY CAN APPEAR ANYWHERE ON THE SCREEN, AFTER THE PLAYERS POSITION.
           


        

         //HOUSE1


         //HOUSE2
          


         //MOVE


       function moveBackgroundForWard(){


           distance += 0.1;

           console.log('distance : ' + distance);


           if(background1Right >= 98){

               background1Right = -99;
           }

           if(background2Right >= 98){

                 background2Right = -99;
            }


           background1.style.right = background1Right + 'vw';

           background2.style.right= background2Right + 'vw';


           background1Right += 0.6;
           
           background2Right += 0.6;
           
           console.log(background2Right);

           
       }

       

       function moveBackgroundBackWard(){


           if(background1Right <= -99){

               background1Right = 99;
           }

           if(background2Right <= -99){

                 background2Right = 99;
            }


           background1.style.right = background1Right + 'vw';

           background2.style.right= background2Right + 'vw';


           background1Right -= 0.6;
           
           background2Right -= 0.6;
           
           
       }


      

       



       function checkPlayerCollision(){



           let flashLightRight = parseInt(window.getComputedStyle(characterDiv).getPropertyValue('right'));

           let flashLightWidth = parseInt(window.getComputedStyle(characterDiv).getPropertyValue('width')); 
            

           let characterLeftEdge = (flashLightRight + flashLightWidth);


           let ladyRight = parseInt(window.getComputedStyle(lady).getPropertyValue('right'));

           let ladyWidth = parseInt(window.getComputedStyle(lady).getPropertyValue('width'));

           let ladyLeftEdge = (ladyRight + ladyWidth);

           

           let opponentRight = parseInt(window.getComputedStyle(opponent).getPropertyValue('right'));

           let opponentWidth = parseInt(window.getComputedStyle(opponent).getPropertyValue('width'));


           let opponentLeftEdge = (opponentRight + opponentWidth);





                 //CHECK A MADMAN HIT THE PLAYER

                 console.log('lady right + width : ' + (ladyRight + ladyWidth));

                 console.log('light right + width : ' + (flashLightRight + flashLightWidth));



                 if(ladyLeftEdge >= characterLeftEdge ){

                    console.log('la lady vous a tué');


                 }

                 
                 if(opponentLeftEdge >= characterLeftEdge ){

                    console.log('un fou vous a tué');


                 }

     

         
                 //CHECK IF THE LADY HIT THE PLAYER



           }




           


        
        function checkOpponentDeath(){


            var bulletLeft = window.getComputedStyle(bullet).getPropertyValue('left');
            var bulletOpacity = window.getComputedStyle(bullet).getPropertyValue('opacity');


            var opponentLeft = window.getComputedStyle(opponent).getPropertyValue('left');

            //IF THE OPPONENT LEFT IS SMALLER THAN BULLETLEFT AND THAT BULLETLEFT OPACITY = 0
            
            if( parseInt(opponentLeft) <= bulletLeft && parseInt(bulletOpacity) == 0){

                console.log('opponent death');

            }

        }



        function forwardPlayerMove(){

                
         if (direction == backward){

              direction = forward;

              characterDiv.classList.remove('backWardLightDirection');

              characterDiv.classList.add('forwardLightDirection');
        }


            
            moveBackgroundForWard();

            if(ladyOnScreen == true){
                
                let updatedRight = parseInt(window.getComputedStyle(lady).getPropertyValue('right')) + 6;

                lady.style.right = updatedRight + 'px';


                if(ladySeesThePlayer == false){

                    if( (parseInt(window.getComputedStyle(lady).getPropertyValue('right')) + parseInt(ladyWidth) - parseInt(flashLightRight)) > parseInt(ladyWidth)){

                        ladySeesThePlayer = true;

                        launchDeathCount();

                        console.log("she sees you!!!!!");
                    }
                }

            }


        }


        function backPlayerMove(){  



            //MOVE LIGHT

            
         if (direction == forward){

              direction = backward;

              characterDiv.classList.remove('forwardLightDirection');

              characterDiv.classList.add('backWardLightDirection');
 
        }



            
            moveBackgroundBackWard();
           

           if(ladyOnScreen == true){

              if(ladySeesThePlayer == true){

                
                let updatedRight = parseInt(window.getComputedStyle(lady).getPropertyValue('right')) - 6;

                lady.style.right = updatedRight + 'px';


                   if( (parseInt(ladyRight) + parseInt(ladyWidth) ) < parseInt(flashLightRight) ) {

                       ladyDisappear();
                     }

                }
            

            }



        }




      function checkKey(e) {

        if (e.keyCode == '37') {
         // left arrow

         backPlayerMove();



         }
         else if (e.keyCode == '39') {
         // right arrow

         forwardPlayerMove();

          }

  

     }


    //WHY DOESNT IT WORK WITH THE FUNCTION UPTHERE?

     
    document.addEventListener("keypress", function(event) {

                  //IF YOU PRESS Q, JUMP

          if (event.keyCode == 113) {
                

            shoot();
                    
                 //IF YOU PRESS S, LONG TERM SHOT

          } 
     });





     function ladyDisappear(){
        
         
        clearInterval(deathCount);

        ladySeesThePlayer = false;

        ladyOnScreen = false;

        lady.style.opacity = '0';

        lady.style.right = '0.5vw';


        randomApparationTime = Math.floor((Math.random()*3000)+2000);
 
        setInterval(function(){ ladyOnScreen = true ; lady.style.opacity = '1' },randomApparationTime);

     }



     function launchDeathCount(){


        deathCount = setInterval(function(){

            console.log("gameOver");

        }, 5000);

     }





     function shoot(){

        bullet.style.opacity = '1';

        let updatedBulletPosition = parseInt(window.getComputedStyle(bullet).getPropertyValue('left'));



        let shotInterval = setInterval(function(){

            updatedBulletPosition += 20;

            bullet.style.left = updatedBulletPosition + 'px';

            
        }, 10);


        setTimeout(function(){

            bullet.style.opacity = '0';

            bullet.style.left = '40vw';

            clearInterval(shotInterval);

        }, 500);


     }



       

    </script>





<?php

   require 'footer.php';

?>

