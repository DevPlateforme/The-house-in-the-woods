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

         <div id="book1" onclick='foundBook(event)'></div>
         <div id="book2" onclick='foundBook(event)'></div>
         <div id="book3" onclick='foundBook(event)' ></div>
         <div id="book4" onclick='foundBook(event)'></div>
         <div id="book5" onclick='foundBook(event)'></div>
         <div id="book6" onclick='foundBook(event)'></div>
         <div id="book7" onclick='foundBook(event)' ></div>



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

         console.log(distance);


          if(distance < maxDistance){
              

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


            }


            if(book1OnScreen == true){


                let updatedBook1Right = parseInt(window.getComputedStyle(book1).getPropertyValue('right')) + 6;


                book1.style.right = updatedBook1Right + 'px';

            } if(book2OnScreen == true){


                let updatedBook2Right = parseInt(window.getComputedStyle(book2).getPropertyValue('right')) + 6;


                book2.style.right = updatedBook2Right + 'px';
 
            } if(book3OnScreen == true){


                let updatedBook3Right = parseInt(window.getComputedStyle(book3).getPropertyValue('right')) + 6;


                book3.style.right = updatedBook3Right + 'px';

            } if(book4OnScreen == true){


                let updatedBook4Right = parseInt(window.getComputedStyle(book4).getPropertyValue('right')) + 6;


                book4.style.right = updatedBook4Right + 'px';

            } if(book5OnScreen == true){


                let updatedBook5Right = parseInt(window.getComputedStyle(book5).getPropertyValue('right')) + 6;


                book5.style.right = updatedBook5Right + 'px';

            } if(book6OnScreen == true){


                let updatedBook6Right = parseInt(window.getComputedStyle(book6).getPropertyValue('right')) + 6;


                book6.style.right = updatedBook6Right + 'px';


            } if(book7OnScreen == true){


                let updatedBook7Right = parseInt(window.getComputedStyle(book7).getPropertyValue('right')) + 6;


                book7.style.right = updatedBook7Right + 'px';

            }

        
            //



          } else {

              alert('on dirait que je ne peux pas aller plus loin');
          }


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


        

            if(book1OnScreen == true){


                let updatedBook1Right = parseInt(window.getComputedStyle(book1).getPropertyValue('right')) - 6;


                book1.style.right = updatedBook1Right + 'px';

            } if(book2OnScreen == true){


                let updatedBook2Right = parseInt(window.getComputedStyle(book2).getPropertyValue('right')) - 6;


                book2.style.right = updatedBook2Right + 'px';
 
            } if(book3OnScreen == true){


                let updatedBook3Right = parseInt(window.getComputedStyle(book3).getPropertyValue('right')) - 6;


                book3.style.right = updatedBook3Right + 'px';

            } if(book4OnScreen == true){


                let updatedBook4Right = parseInt(window.getComputedStyle(book4).getPropertyValue('right')) - 6;


                book4.style.right = updatedBook4Right + 'px';

            } if(book5OnScreen == true){


                let updatedBook5Right = parseInt(window.getComputedStyle(book5).getPropertyValue('right')) - 6;


                book5.style.right = updatedBook5Right + 'px';

            } if(book6OnScreen == true){


                let updatedBook6Right = parseInt(window.getComputedStyle(book6).getPropertyValue('right')) - 6;


                book6.style.right = updatedBook6Right + 'px';


            } if(book7OnScreen == true){


                let updatedBook7Right = parseInt(window.getComputedStyle(book7).getPropertyValue('right')) - 6;


                book7.style.right = updatedBook7Right + 'px';

            }


        }




        function nextOpponentsAppearance(){




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

                  //IF YOU PRESS Q, 

          if (event.keyCode == 113) {


              if(gunLoaded == true){

                shoot();

              }
                

                    
                 //IF YOU PRESS S, NEW WEAPON

          } else if(event.keyCode == 115){

              nextWeapon();
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

         if(currentWeapon != none){

         bullet.style.opacity = '1';

         gunLoaded = false;



        let updatedBulletPosition = parseInt(window.getComputedStyle(bullet).getPropertyValue('right'));

         if( playerDirection == forward ){

             if(currentWeapon == gun){
     
                  shotInterval = setInterval(function(){

                  updatedBulletPosition -= 60;

                  bullet.style.right = updatedBulletPosition + 'px';

                  checkBulletCollision();
            
                  }, 30);



             } else if (currentWeapon == ump45){


                 
                  shotInterval = setInterval(function(){

                  updatedBulletPosition -= 60;

                  bullet.style.right = updatedBulletPosition + 'px';

                  checkBulletCollision();
            
                  }, 10);




             }
     


         
        
           setTimeout(function(){

            bullet.style.opacity = '0';

            bullet.style.right = '60vw';

            gunLoaded = true;


            clearInterval(shotInterval);


            }, 200);



         } else {

             
             if(currentWeapon == gun){
     
                  shotInterval = setInterval(function(){

                  updatedBulletPosition += 60;

                  bullet.style.right = updatedBulletPosition + 'px';

                  checkBulletCollision();
            
                  }, 30);



             } else if (currentWeapon == ump45){


                 
                  shotInterval = setInterval(function(){

                  updatedBulletPosition += 60;

                  bullet.style.right = updatedBulletPosition + 'px';

                  checkBulletCollision();
            
                  }, 10);




             }

            
        

         
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




    function checkGun(){


        
                if(distance >= 50){

                    alert('vous avez trouvé un gun');

                    currentWeapon = gun;

                    inventory.push(gun);


                    clearInterval(checkGunInterval);

                     checkUmp45Interval = setInterval(function(){


                         checkUmp45();


                       
                   }, 2000);

                    
                }

        }



        function checkUmp45(){

            
                 if(distance >= 150){

                    alert('vous avez trouvé un ump45!!!!!!');

                    inventory.push(gun);

                    currentWeapon = ump45;

                    clearInterval(checkUmp45Interval);


                }

        }



        function nextWeapon(){

            if(inventory.length == 2){

                if(currentWeapon == gun){

                    currentWeapon = ump45;

                    alert("vous avez à présent l'UMP45!");

                } else {

                    currentWeapon = gun;

                    alert("vous avez à présent le gun");


                }

             } 


        }


        function foundBook(event){

            let bookRightPosition = window.getComputedStyle(event.target).getPropertyValue('right');


                
                alert('livre trouvé à la position: ' + bookRightPosition);

        }


       

    </script>





<?php

   require 'footer.php';

?>

