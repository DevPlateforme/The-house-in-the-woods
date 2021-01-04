

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








