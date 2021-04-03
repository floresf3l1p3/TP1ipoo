<?php
class teatro
{
    //atributos
    private $nombreTeatro;
    private $direccion;
    private $precio;
    private $funcionDelDia;
    //contruct
    public function __construct($nombreTeatro,$direccion,$precio,$funcionDelDia) {
        $this->nombreTeatro= $nombreTeatro;
        $this->direccion= $direccion;
        $this->precio= $precio;
        $this->funcionDelDia= $funcionDelDia =[ 
                                                ["nombre1"=>"caperuzita roja","precio1"=>"100"],
                                                ["nombre2"=>"hansel&grethel","precio2"=>"200"],
                                                ["nombre3"=>"shrek","precio3"=>"300"],
                                                ["nombre4"=>"rey arturo","precio4"=>"400"]
                                            ];

    }
    //Metodos
    public function getNombreTeatro()
    {
        return $this->nombreTeatro;
    }
    public function getDirccion()
    {
        return $this->direccion;
    }
    public function getFuncion()
    {
        return $this->funcionDelDia;
    }
    public function getCambioPrecio()//devuelve un lo que este en esta variable
    {
        return $this->precio;
    }
    public function setnombre($nombreTeatro)//recibo un parametro
    {
        $this->nombre=$nombreTeatro;
    }
    public function setDireccion($direccion)
    {
        $this->direccion=$direccion;
    }
    public function setFuncion($funcionDelDia)
    {
        $this->funcionDelDia=$funcionDelDia;
    }
    public function setPrecio($precio)
    {
        $this->precio=$precio;
    }

    /**Un teatro se caracteriza por su nombre y su dirección y en él se realizan 4 funciones al día.
     *  Cada función tiene un nombre y un precio. Realice el diseño de la clase Teatro e indique qué métodos tendría que tener la clase,
     *  teniendo en cuenta que se pueda cambiar el nombre del teatro y la dirección, el nombre de un función y el precio. 
     * Implementar las 4 funciones usando array de array asociativo. Cada función es un array asociativo con las claves “nombre” y “precio”. */
            /**
     * Cambia el nombre del teatro
     * @param string $nombre
     * @return string
     */

     public function nombreTeatro($nombreTeatro)
     {//string $nombreNuevo ,$respuesta
        echo"desea cambiar el nombre del teatro s/n:\n";
        $respuesta=trim(fgets(STDIN));
        if ($respuesta=="s") {
            echo"ingrese nuevo nombre:\n";
            $nombreNuevo=trim(fgets(STDIN));
            $this->nombreTeatro=getCambioNombre($nombreNuevo);
        }elseif ($respuesta=="n") {
            echo"el nombre del teatro no a cambiado";
        }
            return $nombreNuevo;
     }
     /**cambio de direccion
      * @param string $direccion
      *  @return string
      */
     
     //tira un error pero sigue ejecutando undefined variable $direccion... en el test de la funcion
    public function cambio_direccion($direccion)
    {//string $nuevaDireccion $respuesta
        echo"desea cambiar la direccion del teatro s/n:\n";
        $respuesta=trim(fgets(STDIN));
        if ($respuesta=="s") {
            echo"ingrese nueva direccion:\n";
            $nuevaDireccion=trim(fgets(STDIN));
            $direccion=$this->getCambioDireccion($nuevaDireccion);
        }elseif ($respuesta=="n") {
            echo"la direccion del teatro no a cambiado";
        }
            return $nuevaDireccion;
        
    }
        /**
        * cambiamos nombre de funcion 
        * @param string $funcionDelDia
        * @return string
        */

    public function nombreFuncion($funcionDelDia)
    {//string $nuevaFuncion $respuesta
        echo"ingrese el nombre de la funcion que desea cambiar: \n";
        $nombreActual=trim(fgets(STDIN));
        if ($nombreActual==$funcionDelDia["nombre1"]||["nombre2"]||["nombre3"]||["nombre4"]) {
            echo"ingrese nuevo nombre de la funcion:\n";
            $nuevaFuncion=trim(fgets(STDIN));
            $funcionDelDia=$this->getCambioDefuncion($nuevaFuncion);
        }elseif ($nombreActual==$funcionDelDia["nombre1"]||["nombre2"]||["nombre3"]||["nombre4"]) {
                echo"el nombre de su funcion no cambiara:";
        }
            return $nuevaFuncion;
    }
    
        /**
         * cambio de precio de cada funcion
         * @param string $precio
         * @return string
         */
    public function cambioPrecio($precio)
    {// string $nuevoPrecio $respuesta
        echo"desea cambiar el precio ? s/n:\n";
        if ($respuesta=="s") {
            echo"ingrese el precio de la funcion:\n";
            $precioActual=trim(fgets(STDIN));
            if ($precioActual==$funcionDelDia["precio1"]["precio2"]["precio3"]["precio"]) {
                echo"el nuevo precio es :\n";
                
            }
            
        }elseif ($respuesta=="no") {
            echo"el precio no cambiara..:\n";
        }
    
    }
        
        
            public function __toString()
            {
                $cad=$this->getCambioNombre()
                    .$this->getCambioDireccion()
                    .$this->getCambioDefuncion()
                    .$this->getCambioPrecio();

                    return $cad;

            }




}       
