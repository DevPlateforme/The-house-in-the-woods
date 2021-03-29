function backPlayerMove(){  



            
    if (playerDirection == forward){

         playerDirection = backward;

         characterDiv.classList.remove('forwardLightDirection');
         darkDiv.classList.remove('rightLight');


         characterDiv.classList.add('backWardLightDirection');
         darkDiv.classList.add('leftLight');


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








           


 


function forwardPlayerMove(){

      //console.log(distance);


     if(distance < maxDistance){
         

       distance += 1;

           
    if (playerDirection == backward){

         playerDirection = forward;

         characterDiv.classList.remove('backWardLightDirection');
         darkDiv.classList.remove('leftLight');


         characterDiv.classList.add('forwardLightDirection');
         darkDiv.classList.add('rightLight');

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

         //alert('on dirait que je ne peux pas aller plus loin');
     }


   }










   