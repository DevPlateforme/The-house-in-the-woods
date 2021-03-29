







 function shoot(){


          let opponentRight = parseInt(window.getComputedStyle(opponent).getPropertyValue('right'));
           let bulletRight = parseInt(window.getComputedStyle(bullet).getPropertyValue('right'));
     
  
         if(opponentOnScreen == true){
  
             
           if(playerDirection == forward){
  
              
              if(opponentDirection == rightToLeft){

            
                  alert('adversaire tué from front!!');
  
  
                   opponent.style.animation = '';
                   opponent.style.right = '5vw';

 
                   opponentOnScreen = false;
                   

 
                   nextOpponentsAppearance();
 

               }
  
  
            } else if ((opponentDirection == leftToRight)){      
                
              
  
                   alert('adversaire tué from behind!!');
  
  
                    opponent.style.animation = '';

                    opponent.style.left = '5vw';

  
                    opponentOnScreen = false;
    
                    nextOpponentsAppearance();
  
     
  
            }   
  
  
         }
  
   
  
       }
  
