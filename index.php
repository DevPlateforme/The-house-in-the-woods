<?php

   require 'header.php';

?>


<h3> Vous naviguez dans les bois....votre téléphone est coupé, vous recevez un message "un étrange virus aurait attaqué Manhattan, veuillez rester chez vous, et verrouiller votre cerrure à double tours"</h3>
    
    
        
       <div id='characterDiv' class='forwardLightDirection'>
              <div id='character'></div>
        </div>

        <div id='carefulDiv'>careful!!</div>


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
            
         var shotInterval;

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


         



         var ladyOnScreen = true;

         var ladySeesThePlayer = false;


         var opponentOnScreen = false;




         var carefulMessage = document.getElementById('carefulDiv');





         //WEAPONS 


         gun = 'none';

         machineGun = 'machineGun';

        


    
         window.onload = function(){
            document.onkeydown = checkKey;
           
            setInterval(function(){checkPlayerCollision()}, 100);

            setTimeout(function() { nextOpponentsAppearance()}, 5000);







            //OPPONENTS APPARENCE

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





                 //CHECK IF AN OPPONENT HIT THE PLAYER

                 if(ladyOnScreen == true){
                     
                      if(ladyLeftEdge >= characterLeftEdge ){

                            alert('vous avez été tué par la lady');



                      }

                 }



                     
               

                //IF OPPONENT GOES FROM RIGHT TO LEFT

                if(opponentDirection == rightToLeft){
                    
                     if(opponentLeftEdge >= characterLeftEdge ){
                    


                     }

                 } else if(opponentDirection == leftToRight){

                       
                    if(opponentLeftEdge <= characterLeftEdge ){
                    


                }

                     
                 }
                 
         
     }




           


        
        function checkOpponentDeath(){


            var bulletLeft = window.getComputedStyle(bullet).getPropertyValue('left');
            var bulletOpacity = window.getComputedStyle(bullet).getPropertyValue('opacity');


            var opponentLeft = window.getComputedStyle(opponent).getPropertyValue('left');

            //IF THE OPPONENT LEFT IS SMALLER THAN BULLETLEFT AND THAT BULLETLEFT OPACITY = 0
            
            if( parseInt(opponentLeft) <= bulletLeft && parseInt(bulletOpacity) == 0){


            }

        }



        function forwardPlayerMove(){


            distance += 1;

                
         if (playerDirection == backward){

              playerDirection = forward;

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

                    }
                }



                if(distance >= 50 && gun == 'none'){

                    gunAppearance();

                    alert('vous avez trouvé un ump45!!');

                    gun = 'ump45';




                }

            }
        

        function gunAppearance(){

            //APPEND gun div at the end.

            document.getElementB

            let gun = document.createElement('div');

            gun.setAttribute('id', 'gunPackDiv');


        
        }





            //display 


        }


        function backPlayerMove(){  



            
            if (playerDirection == forward){
   
                 playerDirection = backward;
   
                 characterDiv.classList.remove('forwardLightDirection');
   
                 characterDiv.classList.add('backWardLightDirection');
    
             }
   

            if(distance > 0){

                distance -= 1;
            

            //MOVE LIGHT

            
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





        }




        function nextOpponentsAppearance(){


            alert('a new ennemy will arrive soon')




            //between 5seconds and 30 seconds, an opponent will arrive, either background or forward.
             
             //1 OR 2
            let randomDirectionNum = Math.floor(Math.random()*2) + 1;


            //BETWEEN 10s AND 30s

            let randomTimeNum = Math.floor((Math.random()*5000));

    


            //MAX NUM 30s

             setTimeout(function(){


                opponent.style.opacity = '1';

                opponentOnScreen = true;


                if( randomDirectionNum == 1){

                    opponentDirection = rightToLeft;

                    opponent.style.animation = 'opponentRunFromRight 3s linear';

                } else {
                    opponentDirection = leftToRight;

                    opponent.style.animation = 'opponentRunFromLeft 3s linear';

                }


                if(opponentComingFromTheBack() == true){


                    carefulMessage.style.opacity = '1';



                    setTimeout(function(){

                        carefulMessage.style.opacity = '0';


                    }, 1000)
                }




             }, randomTimeNum );




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


              if(gunLoaded == true){

                shoot();

              }
                

                    
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


        }, 5000);

     }





     function shoot(){

         if(gun != 'none'){

         bullet.style.opacity = '1';

         gunLoaded = false;



        let updatedBulletPosition = parseInt(window.getComputedStyle(bullet).getPropertyValue('right'));

         if( playerDirection == forward ){
     

        shotInterval = setInterval(function(){

            updatedBulletPosition -= 30;

            bullet.style.right = updatedBulletPosition + 'px';

            checkBulletCollision();

            
         }, 10);

         
        
           setTimeout(function(){

            bullet.style.opacity = '0';

            bullet.style.right = '60vw';

            gunLoaded = true;


            clearInterval(shotInterval);


            }, 200);



         } else {

            
        shotInterval = setInterval(function(){

            updatedBulletPosition += 30;

            bullet.style.right = updatedBulletPosition + 'px';


            checkBulletCollision();
            
         }, 10);

         
           setTimeout(function(){

            bullet.style.opacity = '0';

            bullet.style.right = '60vw';

            gunLoaded = true;


            clearInterval(shotInterval);

            }, 200);

         }          
      } else {

          alert ("vous n'avez pas encore d'arme!");
      }
  }




     function checkBulletCollision(){


        let opponentRight = parseInt(window.getComputedStyle(opponent).getPropertyValue('right'));
         let bulletRight = parseInt(window.getComputedStyle(bullet).getPropertyValue('right'));
    
       

       if(opponentOnScreen == true){

           
         if(playerDirection == forward){

            
            if(opponentDirection == rightToLeft){

                  if(opponentRight > bulletRight){

                    
                    alert('adversaire tué!!');

                   opponent.style.opacity = '0';
   
                   opponent.style.animation = '';

                   opponentOnScreen = false;

                   clearInterval(shotInterval);

                   nextOpponentsAppearance();


                }

           }


          } else if ((opponentDirection == leftToRight)){      
              
            
              if(opponentRight < bulletRight){

                 alert('adversaire tué!!');

                  opponent.style.opacity = '0';

                  opponent.style.animation = '';

                  opponentOnScreen = false;

                  clearInterval(shotInterval);

                  nextOpponentsAppearance();


            }

          }   




       }

 

     }



     function opponentComingFromTheBack(){


       if( opponentDirection == leftToRight && playerDirection == forward || opponentDirection == rightToLeft && playerDirection == backward ){

           return true;

        } else {

              return false;
        }

    }


       

    </script>





<?php

   require 'footer.php';

?>

