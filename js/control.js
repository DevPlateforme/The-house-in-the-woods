



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
