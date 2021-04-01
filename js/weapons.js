







 function shoot(){


          let opponentRight = parseInt(window.getComputedStyle(opponent).getPropertyValue('right'));
           let bulletRight = parseInt(window.getComputedStyle(bullet).getPropertyValue('right'));
     
  
         if(opponentOnScreen == true){
  
             
           if(playerDirection == forward){
  
              
              if(opponentDirection == rightToLeft){

            
                  alert('adversaire tué from front!!');
  
  
                   opponent.style.animation = '';
                   opponent.style.left = '95vw';


 
                   opponentOnScreen = false;
                   

 
                   nextOpponentsAppearance();
 

               }
  
  
            } else if ((opponentDirection == leftToRight)){      
                
              
  
                   alert('adversaire tué from behind!!');
  
  
                    opponent.style.animation = '';

                    opponent.style.left = '0vw';

  
                    opponentOnScreen = false;
    
                    nextOpponentsAppearance();
  
     
  
            }   
  
  
         }
  
   
  
       }
  



  
       function bookFound(book){

         clearInterval(book.bookInterval);
         booksCount--;
         displayFoundBookPopup();
         document.getElementById(book.name).style.display = 'none';

         alert('bk=>' + book.name);

       }



       function displayFoundBookPopup(){

        alert('you found a book ! there are ' + booksCount + ' left to find!');

       }