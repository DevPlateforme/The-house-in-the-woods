


       function moveBackgroundForWard(){


        distance += 0.1;


        if(background1Right >= 98){

            background1Right = -99;

            treeRight = -50;

        }

        if(background2Right >= 98){

              background2Right = -99;

              treeRight = -50;

         }


         
        background1Right += 0.6;
        
        background2Right += 0.6;

        treeRight += 0.6;
        


        background1.style.right = background1Right + 'vw';

        background2.style.right = background2Right + 'vw';
        
        tree.style.right = treeRight + 'vw';


        
    }

    

    function moveBackgroundBackWard(){


        if(background1Right <= -99){

            background1Right = 99;

            treeRight = 90;
        }

        if(background2Right <= -99){

              background2Right = 99;

              treeRight = 90;

         }

         
        
        background1Right -= 0.6;
        
        background2Right -= 0.6;

        treeRight -= 0.6;

        


        background1.style.right = background1Right + 'vw';

        background2.style.right= background2Right + 'vw';

        tree.style.right= treeRight + 'vw';


        
        
    }


   




