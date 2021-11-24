<?php

$capacidadVuelo=$this->modelVuelo->getVueloByCapacidad($id);
$pasajes=$this->modelPasaje->getPasajeByVuelo(); //otra manera de contar
$cantidadPasajesVendidos=count($pasajes); //sizeof($pasajes)



ELECT capacidad, COUNT(*) AS totalPasajes, vuelo.origen FROM pasajes p JOIN vuelo ON p.id_vuelo= vuelo.id WHERE id_vuelo=7 GROUP BY id_vuelo;


$capacidadVuelo={"capacidad":80};
model----
function getVueloByCapacidad($id){
    "select capacidad from vuelo where id=?"
}

function getPasajeByVuelo(){
    "select COUNT() AS totalPasaje from pasaje GROUP BY id_vuelo "
}

Se debe informar si el vuelo tiene capacidad o ya se vendieron todos sus pasajes.