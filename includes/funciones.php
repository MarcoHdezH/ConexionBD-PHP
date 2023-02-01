<?php
function obtenerServicios() : array{

    try{

        require 'database.php';

        $sql = "SELECT * FROM servicios;";

        $consulta = mysqli_query($db,$sql);

        $Servicios = [];

        $i=0;

        while($row = mysqli_fetch_assoc($consulta)){
            $Servicios[$i]['id']=$row['id'];
            $Servicios[$i]['nombre']=$row['nombre'];
            $Servicios[$i]['precio']=$row['precio'];

            $i++;
        }

        return $Servicios;


    }catch(Throwable $th){
        var_dump($th);
    }

}

obtenerServicios();
