<?php

   require 'header.php';

?>
       

       <div id='lossMessage'>
       
           you were killed...
       
       
       </div>


       <div id='pivotDiv'>Please, pivot your screen :)</div>


       <div id='controlMessage'>
        
        Press "Q" to shoot , move with the keyboard arrows

       </div>


       <div id='mobilePad'>


          <div id='mobilePadLeft'>
             <button id='mobileMoveLeftBtn' class='mobileBtn' onclick='mobileBackPlayerMove()'><-</button>
          </div>

          
          <div id='mobilePadRight'>
             <button id='mobileShootBtn' class='mobileBtn' onclick='checkAndShoot()'>X</button>
             <button id='mobileMoveRightBtn' class='mobileBtn' onclick='mobileForwardPlayerMove()'>-></button>
           </div>

       </div>


       <div id='booksCount'>

         classified files : 0
       
       </div>




       <div id='darkDiv' class='rightLight'>




       </div>


       <div id=''></div>
      

       <div id='gunshotSpark'>
                 <img src="./img/frontSpark.png" alt="" class="sparkImg">
       
       </div>

       <div id='gunshotSpark2'>
           <img src="./img/backSpark.png" alt="" class="sparkImg">
       </div>


    
        
       <div id='characterDiv' class='forwardLightDirection'>
            <div id='character'><canvas id='mainCharacterCanvas'></canvas></div>
        </div> 


        <div id='carefulDiv'>careful!!</div>


        <div id='bullet'></div>

        <div id='machineGun'></div>

         <div id='gun'></div>

         <div id="book1" onclick='foundBook(event)'><img class='secretImgPng' src='./img/secret.png'></div>
         <div id="book2" onclick='foundBook(event)'><img class='secretImgPng' src='./img/secret.png'></div>
         <div id="book3" onclick='foundBook(event)' ><img class='secretImgPng' src='./img/secret.png'></div>
         <div id="book4" onclick='foundBook(event)'><img class='secretImgPng' src='./img/secret.png'></div>
         <div id="book5" onclick='foundBook(event)'><img class='secretImgPng' src='./img/secret.png'></div>
         <div id="book6" onclick='foundBook(event)'><img class='secretImgPng' src='./img/secret.png'></div>
         <div id="book7" onclick='foundBook(event)' ><img class='secretImgPng' src='./img/secret.png'></div>



        <div id='opponent'>        
        
             <canvas id='opponentCanvas'></canvas>
      
        </div>


         <div id='lady'></div>

         <div id='key'></div>

         <div id='forrest'>

         </div>


         <div id='tree'>

            <img src="img/tree.png" alt="">
         
         </div>

       <div id='forrest2'>

    </div>








<?php

   require 'footer.php';

?>

