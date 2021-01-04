


       function moveBackgroundForWard(){


        distance += 0.1;


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
        
        
    }

    

    function moveBackgroundBackWard(){


        if(background1Right <= -99){

            background1Right = 99;
        }

        if(background2Right <= -99){

              background2Right = 99;
         }


        background1.style.right = background1Right + 'vw';

        background2.style.right= background2Right + 'vw';


        background1Right -= 0.6;
        
        background2Right -= 0.6;
        
        
    }


   




