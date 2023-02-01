<?php
require 'includes/funciones.php';

$Servicios = obtenerServicios();

echo json_encode($Servicios);

?>