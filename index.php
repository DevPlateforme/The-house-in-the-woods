<?php

   require 'header.php';

?>


<h3> Vous naviguez dans les bois....votre téléphone est coupé, vous recevez un message "un étrange virus aurait attaqué Manhattan, veuillez rester chez vous, et verrouiller votre cerrure à double tours"</h3>


    <div id='game'>
        
        <div id='characterDiv'>
              <div id='character'></div>
              <div id='light'></div>
        </div>

        <div id='woman'></div>
        
    </div>

    <div id='forrest2'>
        
         
        
    </div>



     <script>

         var background1 = document.getElementById('game');

         var background2 = document.getElementById('forrest2');

         var background1Right = 0;

         var background2Right = -99;


         setInterval( moveBackground , 50);


       function moveBackground(){


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
           
           console.log(background2Right);

           
       }


       

    </script>





<?php

   require 'footer.php';

?>

