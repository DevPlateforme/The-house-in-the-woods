







 function shoot(){






  if(playerDirection == forward || playerDirection == none){


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

            
  
  
                   opponent.style.animation = '';
                   opponent.style.left = '102vw';


 
                   opponentOnScreen = false;
                   

 
                   nextOpponentsAppearance();
 

               }
  
  
            } else {

       

              if ((opponentDirection == leftToRight)){      
                
  
                    opponent.style.animation = '';

                    opponent.style.left = '-10vw';
  
                    opponentOnScreen = false;
    
                    nextOpponentsAppearance();
  
     
  
            }
            
          }
  
         }
  
    
       }
  



  
       function bookFound(book){

         clearInterval(book.bookInterval);
         booksCount++;
         updateGuiCount();
         document.getElementById(book.name).style.display = 'none';

         if(booksCount == 7){

          alert('congratulations!! You found all the files and manage to release this place alive !!');

         }


       }



       function updateGuiCount(){

        document.getElementById('booksCount').innerHTML = 'classified files : ' + booksCount;
       }