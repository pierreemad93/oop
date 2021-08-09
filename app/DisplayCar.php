<?php 
   namespace app;
   use app\car\Car ; 
   use app\car\Fiat ;

    class DisplayCar{
        use Car; 
        use Fiat;  
        public function __construct($n,$c)
        {
            $this->name= $n ;
            $this->color = $c ;
        }
       
        public function __call($method, $arguments)
        {
            echo  $method . " Not Found <br>" ;
            foreach($arguments as $arg){
                echo "Don't use " . $arg  . " as Argument <br>" ;
            }
        }
       
      public function __get($propName)
      {
          echo $propName . "  Not Found <br>" ;
      }
      
      public function __set($propName, $value)
      {   
        echo $propName . "  Not Found  and Value " . $value . " Not Found <br>"    ;

      }
    }
    
?>