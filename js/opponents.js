
     function opponentComingFromTheBack(){


        if( opponentDirection == leftToRight && playerDirection == forward || opponentDirection == rightToLeft && playerDirection == backward ){
 
            return true;
 
         } else {
 
               return false;
         }
 
     }

     



     

     function nextOpponentsAppearance(){




        //between 5seconds and 30 seconds, an opponent will arrive, either background or forward.
         
         //1 OR 2
        let randomDirectionNum = Math.floor((Math.random()*2))+1;


        //BETWEEN 10s AND 30s

        let randomTimeNum = 4000;




        //MAX NUM 30s

         setTimeout(function(){


            opponent.style.opacity = '1';

            opponentOnScreen = true;


            if( randomDirectionNum == 1){

                opponentDirection = rightToLeft;

                opponent.style.animation = 'opponentRunFromRight 5.5s linear';

            } else {
                opponentDirection = leftToRight;

                opponent.style.animation = 'opponentRunFromLeft 5.5s linear';

            }


            if(opponentComingFromTheBack() == true){


                carefulMessage.style.opacity = '1';



                setTimeout(function(){

                    carefulMessage.style.opacity = '0';


                }, 1000)
            }




         }, randomTimeNum );




        }





 function ladyDisappear(){
    
     
    clearInterval(deathCount);

    ladySeesThePlayer = false;

    ladyOnScreen = false;

    lady.style.opacity = '0';

    lady.style.right = '0.5vw';


    randomApparationTime = Math.floor((Math.random()*3000)+2000);

    setInterval(function(){ ladyOnScreen = true ; lady.style.opacity = '0.1' },randomApparationTime);

 }



 function launchDeathCount(){


    deathCount = setInterval(function(){


    }, 5000);

 }





        
 function checkOpponentDeath(){


    var bulletLeft = window.getComputedStyle(bullet).getPropertyValue('left');
    var bulletOpacity = window.getComputedStyle(bullet).getPropertyValue('opacity');


    var opponentLeft = window.getComputedStyle(opponent).getPropertyValue('left');

    //IF THE OPPONENT LEFT IS SMALLER THAN BULLETLEFT AND THAT BULLETLEFT OPACITY = 0
    
    if( parseInt(opponentLeft) <= bulletLeft && parseInt(bulletOpacity) == 0){


    }

}
