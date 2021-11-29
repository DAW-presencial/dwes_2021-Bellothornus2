<html>
    <head>

    </head>
    <body>
        <p>
            El máximo número entero representable es dependiendo de la 
            capacidad del procesador y el sistema operativo es decir, su arquitectura si es del 32 o 64 bits
            en PHP de 32 bits el máximo entero representable es el 2.147.483.647 aprox. 2 billones ingleses
            y el de 64 bits es el de 9,223,372,036,854,775,807 aprox. 9 quintillones
        </p>
        <p>
            Entero de 32 bits: <?php $integer_32 = 2147483647; print($integer_32) ?> </br>
            Entero de 64 bits: <?php $integer_64 = 9223372036854775807; print($integer_64) ?> </br>
            si se excede se guarda como flotante como ocurre aqui si le sumo uno: <?php print($integer_64+1)?> </br>
        </p>
    </body>
</html>