<?php
require_once '../inc/functions.php';

/*
 * Exo 5 : Full Mario!
 *
 * Add these to the Hero class:
 *  - A favorite color.
 *  - To be able to grow when eat a mushroom. Shrink instead of die when taking a hit.
 *  - To be able to be invicible when eat a star.
 *
 * See tests at the bottom of this file for more info :)
 * 
 * Don't panic, this time, there will be a lot of Fatal Errors until you finish this "exo"
 */

//  class Hero {
     
//     private $lives = 3;
//     private $color;
//     private $name;
    
//     function __construct($nameParam, $colorParam){
//         $this->name = $nameParam;
//         $this->color = $colorParam;
//     }

//     function getName(){
//         return $this->name;
//     }

//     function getLives(){
//         return $this->lives;
//     }

//     // - A favorite color.

//     function getColor(){
//         return $this->color;
//     }

//     function eatMushroom(){
//         return true;
//     }

//     function isBig(){
//         return true;
//     }

//     function takeHit(){

//         if($this->eatMushroom() === true){ // Taille * 2 
//             $this->eatMushroom() === false; // Taille * 1 
//             $this->isBig() === false; // Taille * 1 
            
//         }else if($this->eatMushroom() === false){
//             $this->lives -= 1;
//         }
//     }

//     function up(){
//        return $this->lives += 1;
//     }

//     function hello(){

//         return "It's me, ".$this->name."!";
//     }

//     function receiveStar(){
//         return true;
//     }

//     function hasStar(){
//         if(receiveStar()){
//             return true;
//         }
//         else if(!receiveStar()){
//             return false;
//         }
        
//     }   
// }

 class Hero {
     
   private $lives = 3;
   private $name;
   private $color;

   function __construct($nameParam, $colorParam){
        $this->name = $nameParam;
        $this->color = $colorParam;
    }

   function getLives(){
        return $this->lives;
    }

    function getName(){
        return $this->name;
    }

   function takeHit(){
       if($this->isBig() === true){ // Taille * 2 
            $this->isBig() === false; // Taille * 1 
            $this->lives = $this->lives;
            
       }else{
            $this->lives -= 1;
       }
   }

   function up(){
      return $this->lives += 1;
   }

    function hello(){

        return "It's me, ".$this->name."!";
    }

    function getColor() {
        return $this->color;
    }
    function eatMushroom(){
        $this->isBig() === true;
    }
    
    function isBig(){
        return true;
    }

    function receiveStar(){
        $this->vanishStar() === false;
        $this->hasStar() === true;
        return true;
    }

    function hasStar(){
        $this->vanishStar() === false;
        return true;
    }

    function vanishStar(){
        $this->receiveStar() === false;
        $this->hasStar() === false;
        return true;
    }
    
}

/*
 * Tests
 * Pas touche !
 */
$mario = new Hero('Mario', 'red');
$test = (
    $mario->getColor() === 'red'
    && $mario->isBig() === false
    && $mario->hasStar() === false
    && $mario->getLives() === 3
);
if ($test) {
    $mario->eatMushroom();
    $test = $mario->isBig() === true;
    if ($test) {
        $mario->takeHit();
        $test = (
            $mario->isBig() === false
            && $mario->getLives() === 3
        );
        if ($test) {
            $mario->receiveStar();
            $test = $mario->hasStar() === true;
            if ($test) {
                $mario->eatMushroom();
                $mario->takeHit();
                $mario->takeHit();
                $mario->up();
                $mario->vanishStar();
                $test = (
                    $mario->getLives() === 4
                    && $mario->hasStar() === false
                    && $mario->isBig() === true
                );
            }
        }
    }
}
displayExo(5, $test);
