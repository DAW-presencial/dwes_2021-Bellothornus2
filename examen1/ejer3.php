<?php
class A {
    private $stock = 0;
    protected $almacen = 100;

    public function __set($nombre,$valor){
        echo "Clase A Creando propiedad: $nombre valor: $valor";
    }
    public function __get($nombre){
        echo "Clase A Recibiendo propiedad: $nombre";
    }
    
}

class B extends A {
}
$variable = new A;
$claseB = new B;

?> 

<h3>
    <?php 
        $variable->nombre = "Damian";
    ?>
</h3>
<h3>
    <?php 
        $variable->stock = 50;
    ?>
</h3>
<h3>
    <?php 
        $variable->almacen = 120;
    ?>
</h3>
<h3>
    <?php 
        $claseB->nombre = "Marta";
    ?>
</h3>
<h3>
    <?php 
        $claseB->stock = 60;
    ?>
</h3>
<h3>
    <?php 
        $claseB->almacen = 160;
    ?>
</h3>

<h3>
    <?php 
        echo $variable->nombre;
        echo get_class($variable);
    ?>
</h3>
<h3>
    <?php 
        echo $claseB->nombre;
        echo get_class($claseB);
    ?>
</h3>

<p>
    Como podemos ver si la subclase no las tiene definidas las coge del padre
    pues tmabien parece ser que coge tanto las privadas como las protegidas, sea la 
    superclase o la subclase supongo que habiendo configurado antes el __get magico ese.
    he visto que si lo haces sin definir el get peta.
</p>


