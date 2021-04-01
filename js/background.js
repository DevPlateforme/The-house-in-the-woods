


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


         
        background1Right += 2;
        
        background2Right += 2;

        treeRight += 2;
        


        background1.style.right = background1Right + 'px';

        background2.style.right = background2Right + 'px';
        
        tree.style.right = treeRight + 'vw';

        characterDiv.style.left = '37.5vw';



        
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

         
        
        background1Right -= 2;
        
        background2Right -= 2;

        treeRight -= 2;

        


        background1.style.right = background1Right + 'px';

        background2.style.right= background2Right + 'px';

        tree.style.right= treeRight + 'vw';

        characterDiv.style.left = '7.5vw';





        
        
    }


   




