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

$variable = new A;
$puppet = new A;
?> 

<h3>
    <?php 
        $variable->stock = 50;
        echo $variable->stock;
        $puppet2 = new A;
        echo $puppet->stock;
        echo $puppet2->stock;
    ?>
</h3>

<p>
    podemos ver que la nueva propiedad solo se da al objeto
    ya que hemos demostrado que a todos los objetos no es, ya que la 
    variable puppet no tiene esa propiedad además de que depues de instanciar esa propiedad
    hemos creado otro objeto de esa isma clase, y haciendo un echo de esa propiedad en ese objeto de esa misma clase podmeos comprobar que no salta un error, eso demuestra que es esa propiedad
    no se crea en la clase si no sólo en ese dicho objeto en la cuál la hemos instnaciado.
</p>

