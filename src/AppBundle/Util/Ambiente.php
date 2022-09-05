<?php 
namespace AppBundle\Util;

final class Ambiente{

    //RECEPCIONES HOTELES DEL PARQUE RECREACIONAL
    const RECEPCIONCONSOTA = 8;
    const RECEPCIONMODULO = 12;

    //CAFETERIA EN COMFAMILIAR CENTRO
    const CAFETERIACENTRO = 20;
    
    //CAFETERIA EN COMFAMILIAR DOSQUEBRADAS
    const CAFETERIADOSQUEBRADAS = 23;

    //MOTIVOS 
    const ACTIVO = 1;
    const INACTIVO = 2;
    const AUTORIZADO = 3;

    //FORMAS DE PAGO TARJETAS
    static public $TARJETASARRAY  = array(3=>'T.Debito', 4=>'T.Credito',16=>'Comfaplus',18=>'Sub.Especie' ,5 => 'C.Nomina');
}