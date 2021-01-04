
    function checkGun(){


        
        if(distance >= 50){

            alert('vous avez trouvé un gun');

            currentWeapon = gun;

            inventory.push(gun);


            clearInterval(checkGunInterval);

             checkUmp45Interval = setInterval(function(){


                 checkUmp45();


               
           }, 2000);

            
        }

}



function checkUmp45(){

    
         if(distance >= 150){

            alert('vous avez trouvé un ump45!!!!!!');

            inventory.push(gun);

            currentWeapon = ump45;

            clearInterval(checkUmp45Interval);


        }

}



function nextWeapon(){

    if(inventory.length == 2){

        if(currentWeapon == gun){

            currentWeapon = ump45;

            alert("vous avez à présent l'UMP45!");

        } else {

            currentWeapon = gun;

            alert("vous avez à présent le gun");


        }

     } 


}








function shoot(){

    if(currentWeapon != none){

    bullet.style.opacity = '1';

    gunLoaded = false;



   let updatedBulletPosition = parseInt(window.getComputedStyle(bullet).getPropertyValue('right'));

    if( playerDirection == forward ){

        if(currentWeapon == gun){

             shotInterval = setInterval(function(){

             updatedBulletPosition -= 60;

             bullet.style.right = updatedBulletPosition + 'px';

             checkBulletCollision();
       
             }, 30);



        } else if (currentWeapon == ump45){


            
             shotInterval = setInterval(function(){

             updatedBulletPosition -= 60;

             bullet.style.right = updatedBulletPosition + 'px';

             checkBulletCollision();
       
             }, 10);




        }



    
   
      setTimeout(function(){

       bullet.style.opacity = '0';

       bullet.style.right = '60vw';

       gunLoaded = true;


       clearInterval(shotInterval);


       }, 200);



    } else {

        
        if(currentWeapon == gun){

             shotInterval = setInterval(function(){

             updatedBulletPosition += 60;

             bullet.style.right = updatedBulletPosition + 'px';

             checkBulletCollision();
       
             }, 30);



        } else if (currentWeapon == ump45){


            
             shotInterval = setInterval(function(){

             updatedBulletPosition += 60;

             bullet.style.right = updatedBulletPosition + 'px';

             checkBulletCollision();
       
             }, 10);




        }

       
   

    
      setTimeout(function(){

       bullet.style.opacity = '0';

       bullet.style.right = '60vw';

       gunLoaded = true;


       clearInterval(shotInterval);

       }, 200);

    }          
 } else {

     alert ("vous n'avez pas encore d'arme!");
 }
}