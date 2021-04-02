



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

            checkAndShoot();

          } 

  

     }



     function checkAndShoot(){

      
      if(gunLoaded == true){

        shoot();


      }


     }







    //WHY DOESNT IT WORK WITH THE FUNCTION UPTHERE?

