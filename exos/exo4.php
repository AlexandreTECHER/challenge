<?php
require_once '../inc/functions.php';

/*
 * Exo 4 : Luigi To The Rescue
 *
 * Luigi: Hi!
 * It seems like Mario is in trouble. I'm here to help!
 *
 * But, you know, Mario is my brother. I don't think we should have
 * a Mario class, and a Luigi class. Maybe, we can just pass our firstname
 * when we create the object?
 *
 * Oh, and I saw this is not programmed yet, but I want to say my punchline!
 *
 * For example, we should be able to use the class this way:
 *      $mario = new Hero('Mario');
 *      echo $mario->hello(); // Display: "It's me, Mario!"
 *      $mario->takeHit();
 *      $mario->up();
 *      $mario->takeHit();
 *      echo $mario->getLives(); // Display: 2
 *
 *      $luigi = new Hero('Luigi');
 *      echo $luigi->hello(); // Display: "It's me, Luigi!"
 *      $luigi->up();
 *      $luigi->up();
 *      $luigi->takeHit();
 *      echo $luigi->getLives(); // Display: 4
 */
 class Hero {
     
   private $lives = 3;

   private $name;

   function __construct($nameParam){
        $this->name = $nameParam;
    }

   function getLives(){
        return $this->lives;
    }

    function getName(){
        return $this->name;
    }

   function takeHit(){

      return $this->lives -= 1;
   }

   function up(){
      return $this->lives += 1;
   }

    function hello(){

        return "It's me, ".$this->name."!";
    }

    
}




/*
 * Tests
 * Pas touche !
 */
check(4);
/*
$mamie = new Hero('Mamie PHP');
displayExo(4, method_exists($mamie, 'hello') && $mamie->hello() === "It's me, Mamie PHP!");*/
