<?php
class A {
    function saludo(){
        print "Hola desde A ";
    }
    function calling(){
        static::hello();
        $this->hello();
    }
    function calling_saludo(){
        static::saludo();
        $this->saludo();
    }
    
}

class B extends A {
    function hello(){
        print "Fuck";
    }
    function saludo(){
        print "Hola desde B ";
    }
}
$variable = new B;
?> 

<h1><?php// echo $variable->calling()?></h1>
<h1><?php echo $variable->calling_saludo() ?></h1>