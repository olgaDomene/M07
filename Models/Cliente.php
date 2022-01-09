<?php

class Cliente
{
    private $nombre;
    private $apellido1;
    private $apellido2;
    private $sexo;
    private $edad;
    private $altura;
    private $peso;

    /**
     * @return mixed
     */
    public function getSexo()
    {
        return $this->sexo;
    }

    /**
     * @param mixed $sexo
     */
    public function setSexo($sexo)
    {
        $this->sexo = $sexo;
    }


    /**
     * @param $nombre
     * @param $apellido1
     * @param $apellido2
     * @param $edad
     * @param $altura
     * @param $peso
     */
    public function __construct($nombre, $apellido1, $apellido2,$sexo, $edad, $altura, $peso)
    {
        $this->nombre = $nombre;
        $this->apellido1 = $apellido1;
        $this->apellido2 = $apellido2;
        $this->sexo = $sexo;
        $this->edad = $edad;
        $this->altura = $altura;
        $this->peso = $peso;
    }

    /**
     * @return mixed
     */
    public function getNombre()
    {
        return $this->nombre;
    }

    /**
     * @param mixed $nombre
     */
    public function setNombre($nombre)
    {
        $this->nombre = $nombre;
    }

    /**
     * @return mixed
     */
    public function getApellido1()
    {
        return $this->apellido1;
    }

    /**
     * @param mixed $apellido1
     */
    public function setApellido1($apellido1)
    {
        $this->apellido1 = $apellido1;
    }

    /**
     * @return mixed
     */
    public function getApellido2()
    {
        return $this->apellido2;
    }

    /**
     * @param mixed $apellido2
     */
    public function setApellido2($apellido2)
    {
        $this->apellido2 = $apellido2;
    }

    /**
     * @return mixed
     */
    public function getEdad()
    {
        return $this->edad;
    }

    /**
     * @param mixed $edad
     */
    public function setEdad($edad)
    {
        $this->edad = $edad;
    }

    /**
     * @return mixed
     */
    public function getAltura()
    {
        return $this->altura;
    }

    /**
     * @param mixed $altura
     */
    public function setAltura($altura)
    {
        $this->altura = $altura;
    }

    /**
     * @return mixed
     */
    public function getPeso()
    {
        return $this->peso;
    }

    /**
     * @param mixed $peso
     */
    public function setPeso($peso)
    {
        $this->peso = $peso;
    }
    public static function obtenerClientes(){

        if(isset($_SESSION['clientes'])){
            //Si ya hemos leido el archivo devolvemos los datos guardados 
            //en la variable de sesión
            $arrayClientes = $_SESSION['clientes'];
        }
        else{
            //Si no hemos leido nunca el archivo, lo leemos y 
            //lo guardamos en la variable de sesión para optimizar el código
            $arrayClientes = file("clientes.txt");
            foreach ($arrayClientes as $indice =>$cliente){
                $arrayClientes[$indice] = explode(",", $arrayClientes[$indice]);
                $nombre =  $arrayClientes[$indice][0];
                $apellido1= $arrayClientes[$indice][1];
                $apellido2= $arrayClientes[$indice][2];
                $sexo =  $arrayClientes[$indice][3];
                $edat = $arrayClientes[$indice][4];
                $altura =  $arrayClientes[$indice][5];
                $peso =  $arrayClientes[$indice][6];
    
                $arrayClientes[$indice] = new Cliente( $nombre,$apellido1, $apellido2, $sexo, $edat, $altura, $peso );
    
            }
            $_SESSION['clientes']= $arrayClientes;

        }

        return $arrayClientes;
    }

}