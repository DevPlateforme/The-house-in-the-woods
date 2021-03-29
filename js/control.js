



      function checkKey(e) {

        if (e.keyCode == '37') {
         // left arrow

         backPlayerMove();



         }
         else if (e.keyCode == '39') {
         // right arrow

         forwardPlayerMove();

          }

          else if(e.key == 'q'){

             if(gunLoaded == true){

               shoot();

               alert('shoot!!')


             }
            

          } 

  

     }


    //WHY DOESNT IT WORK WITH THE FUNCTION UPTHERE?

