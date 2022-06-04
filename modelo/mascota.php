<?php

require_once 'modelo/dueniomascota.php';

class Mascota
{
    public int $Id;
    public string $Nombre;
    public string $Raza;
    public Duenio $Duenio;

    public function MostrarDatos()
    {
        echo 'Los datos de la mascota son : ' . '<br>';
        echo 'Id : ' . $this->Id . '<br>';
        echo 'Nombre : ' . $this->Nombre . '<br>';
        echo 'Apellido : ' . $this->Raza . '<br>';
        echo 'Los datos del dueño son : ' . '<br>';
        echo 'Id : ' . $this->Duenio->Id . '<br>';
        echo 'Nombre : ' . $this->Duenio->Nombre . '<br>';
        echo 'Apellido : ' . $this->Duenio->Apellido . '<br>';
        echo 'Documento : ' . $this->Duenio->Documento . '<br>';
        echo 'Celular : ' . $this->Duenio->Celular . '<br>';
        echo 'Direccion : ' . $this->Duenio->Direccion . '<br>';
    }
}
