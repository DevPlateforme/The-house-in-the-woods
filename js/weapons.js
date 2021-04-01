







 function shoot(){



  if(playerDirection == forward){


    setTimeout(function(){
      gunShotSpark.style.opacity = 0;

    },100)

    gunShotSpark.style.opacity = 1;

    } else {

     setTimeout(function(){
        backGunShotSpark.style.opacity = 0;

      },100);


      backGunShotSpark.style.opacity = 1;

  



    }
  
         if(opponentOnScreen == true){
  
             
           if(playerDirection == forward){
            setTimeout(function(){
              gunShotSpark.style.opacity = 0;

            },100);
  

            gunShotSpark.style.opacity = 1;

           
              
              if(opponentDirection == rightToLeft){

            
                  alert('adversaire tué from front!!');
  
  
                   opponent.style.animation = '';
                   opponent.style.left = '95vw';


 
                   opponentOnScreen = false;
                   

 
                   nextOpponentsAppearance();
 

               }
  
  
            } else {

              
       

              if ((opponentDirection == leftToRight)){      
                
              
  
                   alert('adversaire tué from behind!!');
  
  
                    opponent.style.animation = '';

                    opponent.style.left = '0vw';

  
                    opponentOnScreen = false;
    
                    nextOpponentsAppearance();
  
     
  
            }
            
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