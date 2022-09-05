<?php

namespace AppBundle\Services;

class mufService{
    public $manager;

    public function __construct($manager){
        $this->manager = $manager;
    }

    public function ReporteDetallado($date)
    {
        $em = $this->manager->getConnection();

        $query = "SELECT CAJERO,CAJA,SUM(VALOR) as REAL 
        FROM BDMUF.DETCONALOHA 
        WHERE FECHA= :fecha 
        AND TIPO_MOVIMIENTO = 3
        AND DESCRIPCION= 'FORMA PAGO EFECTIVO'
        GROUP BY CAJA,CAJERO
        ORDER BY CAJERO";
        

        $stmt = $em->prepare($query);

        $params = array(
            "fecha"=>$date
        );

        $stmt->execute($params);
        return $result = $stmt->fetchAll();

    }

    public function ReporteNoEfectivas($fecha)
    {
        $em = $this->manager->getConnection();
        
        $query = "SELECT CAJA,CAJERO,DESCRIPCION,COUNT(ID_FACTURA) AS CANTIDAD,SUM(VALOR) AS TOTAL 
        FROM  BDMUF.DETCONALOHA 
        WHERE FECHA= :fecha
        AND TIPO_MOVIMIENTO in ('3')
        AND DESCRIPCION NOT IN ('FORMA PAGO EFECTIVO')
        GROUP BY CAJA,CAJERO,DESCRIPCION
        ORDER BY DESCRIPCION";

        $stmt = $em->prepare($query);

        $params = array(
            "fecha"=>$fecha
        );

        $stmt->execute($params);
        return $result = $stmt->fetchAll();

    }

    public function ReporteNoEfectivasPorFP($fecha)
    {
        $em = $this->manager->getConnection();
        
        $query = "SELECT DESCRIPCION,COUNT(ID_FACTURA) AS CANTIDAD,SUM(VALOR) AS TOTAL 
        FROM  BDMUF.DETCONALOHA 
        WHERE FECHA= :fecha
        AND TIPO_MOVIMIENTO in ('3')
        AND DESCRIPCION NOT IN ('FORMA PAGO EFECTIVO')
        GROUP BY DESCRIPCION
        ORDER BY DESCRIPCION";

        $stmt = $em->prepare($query);

        $params = array(
            "fecha"=>$fecha
        );

        $stmt->execute($params);
        return $result = $stmt->fetchAll();

    }

    public function getDatosVoucherSubsidioEnEspecieTbsubespById($voucher){
        $em = $this->manager->getConnection();
        
        $query = "SELECT a.id,a.fecha
        ,trim(CUPRINOM) || ' ' || trim(CUSEGNOM) || ' ' || trim(CUPRIAPE) || ' ' || trim(CUSEGAPE) as nombre
        ,cunumid,valor_tar,valor_des,porcentaje,a.usr_cate as categoria,a.uspropieta as username
        FROM bdmuf.tbsubesp a
        join bdmuf.tbcuenta b on b.cucod = a.usr_cucodt
        and a.id = :voucher
        ORDER BY a.ID asc";

        $stmt = $em->prepare($query);

        $params = array(
            "voucher"=>$voucher
        );

        $stmt->execute($params);
        $result = $stmt->fetchAll();

        if(!empty($result)){
            return array_pop($result);
        }else{
            return $result;
        }
    }

    public function getDatosVoucherSubsidioEnEspecieTbsubespByRangoFechas($desde,$hasta){
        $em = $this->manager->getConnection();
        
        $query = "SELECT a.id,a.fecha
        ,trim(CUPRINOM) || ' ' || trim(CUSEGNOM) || ' ' || trim(CUPRIAPE) || ' ' || trim(CUSEGAPE) as nombre
        ,cunumid,valor_tar,valor_des,porcentaje,a.usr_cate as categoria,a.uspropieta as username,B.CUFECNACI,B.CUGENERO
        FROM bdmuf.tbsubesp a
        join bdmuf.tbcuenta b on b.cucod = a.usr_cucodt
        and a.aucodestad = 'A' and a.fecha between :desde and :hasta
        ORDER BY a.ID asc";

        $stmt = $em->prepare($query);

        $params = array(
            "desde"=>$desde,
            "hasta"=>$hasta
        );

        $stmt->execute($params);
        return $result = $stmt->fetchAll();
    }

    public function getTbsubespByFechaAndValorDescuento($fecha,$valorDescuento){
        $em = $this->manager->getConnection();
        
        $query = "SELECT a.id,a.fecha,trim(CUPRINOM) || ' ' || trim(CUSEGNOM) || ' ' || trim(CUPRIAPE) || ' ' || trim(CUSEGAPE) as nombre
        ,cunumid,valor_tar,valor_des,porcentaje,a.usr_cate as categoria,a.uspropieta as username
        FROM bdmuf.tbsubesp a
        join bdmuf.tbcuenta b on b.cucod = a.usr_cucodt
        and a.aucodestad='A' and a.FECHA= :fecha and a.valor_des = :descuento";

        $stmt = $em->prepare($query);

        $params = array(
            "fecha"=>$fecha,
            "descuento"=>$valorDescuento
        );

        $stmt->execute($params);
        return $result = $stmt->fetchAll();

    }

    public function getClienteTbsubesp($voucher){
        $em = $this->manager->getConnection();
        
        $query = "SELECT a.id,a.fecha,trim(CUPRINOM) || ' ' || trim(CUSEGNOM) || ' ' || trim(CUPRIAPE) || ' ' || trim(CUSEGAPE) as nombre
        ,cunumid,valor_tar,valor_des,porcentaje,a.usr_cate as categoria,a.uspropieta as username
        FROM bdmuf.tbsubesp a
        join bdmuf.tbcuenta b on b.cucod = a.usr_cucodt
        and a.id = :voucher";

        $stmt = $em->prepare($query);

        $params = array(
            "voucher"=>$voucher,
        );

        $stmt->execute($params);
        return $result = $stmt->fetchAll();

    }

    public function validarVoucherByFechaAndValorDescuento($voucher,$fecha,$valorDescuento){
        $em = $this->manager->getConnection();
        
        $query = "SELECT a.id,a.fecha
        ,trim(CUPRINOM) || ' ' || trim(CUSEGNOM) || ' ' || trim(CUPRIAPE) || ' ' || trim(CUSEGAPE) as nombre
        ,cunumid,valor_tar,valor_des,porcentaje,a.usr_cate as categoria,a.uspropieta as username
        FROM bdmuf.tbsubesp a
        join bdmuf.tbcuenta b on b.cucod = a.usr_cucodt
        and a.id = :voucher and a.fecha = :fecha and a.valor_des = :valor
        ORDER BY a.ID asc";

        $stmt = $em->prepare($query);

        $params = array(
            "voucher"=>$voucher,
            "fecha"=>$fecha,
            "valor"=>$valorDescuento
        );

        $stmt->execute($params);
        return $result = $stmt->fetchAll();
       
    }

    public function inactivarIDTbSubEsp($voucher,$login){
        $em = $this->manager->getConnection();
        $createdAt = new \Datetime('now', new \DateTimezone('America/Lima'));
        $query = "UPDATE bdmuf.tbsubesp SET AUCODESTAD='I',USCODUSUAR= :login,AUFECMOD= :fecha WHERE id = :id";

        $stmt = $em->prepare($query);

        $params = array(
            "id"=>$voucher,
            "login"=>$login,
            "fecha"=>$createdAt->format('Ymd')
        );

        return $stmt->execute($params);
     
    }
    public function validarSiExisteCierreCentroMuf($fecha, $centro){
        $em = $this->manager->getConnection();
    
        $query = "SELECT * FROM BDMUF.TBFACTLBCH WHERE CNBFECHA= :fecha AND CACODCENAT= :centro";

        $stmt = $em->prepare($query);

        $params = array(
            "centro"=>$centro,
            "fecha"=>$fecha
        );

        $stmt->execute($params);

        $resultado = $stmt->fetchAll();

        if(empty($resultado)){
            $respuesta = true;
        }else{
            $respuesta=  false;
        }

        return $respuesta;
     
    }

    public function getTotalPersonasIngresadasParqueRecreacional($fecha){
        $em = $this->manager->getConnection();
    
        $query = "SELECT coalesce(sum(detcantidad),0) as cantidad FROM bdmuf.tbdetsicer where aucodestad = 'A' AND DETTIPOCLIE in ('A', 'N') AND aufecmod = :fecha";

        $stmt = $em->prepare($query);

        $params = array(
            "fecha"=>$fecha
        );

        $stmt->execute($params);

        return $stmt->fetchAll();
    }

    public function getTotalPersonasConEntradaReservadaPeroSinIngresarParqueRecreacional($fecha){
        $em = $this->manager->getConnection();
    
        $query = "SELECT coalesce(sum(detcantidad),0) as cantidad FROM bdmuf.tbdetsicer A
                    INNER JOIN BDMUF.TBFAMOVREC B ON A.MRCODCONS = B.MRCODCONS AND B.DCTIPDOCUM = 'FA' AND B.MRNUMDOC > 0
                    where A.aucodestad = 'I' AND A.MOCODMOTIV = '14' AND A.DETTIPOCLIE in ('A', 'N') AND A.aufecmod = :fecha ";

        $stmt = $em->prepare($query);

        $params = array(
            "fecha"=>$fecha
        );

        $stmt->execute($params);

        return $stmt->fetchAll();
    }

    public function getTotalPersonasConReservaIngresadasParqueRecreacional($fecha){
        $em = $this->manager->getConnection();
    
        $query = "SELECT COUNT(*) as cantidad FROM BDMUF.TBDETSICER A
                INNER JOIN BDMUF.TBFADETALL B ON B.DFDOCUMENT = A.DETDOCUMENT AND A.MRCODCONS = B.MRCODCONS
                INNER JOIN BDMUF.TBFAMOVREC C ON A.MRCODCONS = C.MRCODCONS AND C.DCTIPDOCUM = 'FA' AND C.MRNUMDOC > 0
                WHERE A.aufecmod = :fecha AND AACOD = 11963 AND A.aucodestad = 'A'  ";

        $stmt = $em->prepare($query);

        $params = array(
            "fecha"=>$fecha
        );

        $stmt->execute($params);

        return $stmt->fetchAll();
    }

    public function getTotalReservasServiciosRestaurantes($fecha){
        $em = $this->manager->getConnection();
    
        $query = "SELECT COUNT(*) as cantidad FROM BDMUF.TBDETSICER A
            INNER JOIN BDMUF.TBFADETALL B ON B.DFDOCUMENT = A.DETDOCUMENT AND A.MRCODCONS = B.MRCODCONS
            INNER JOIN BDMUF.TBFAMOVREC C ON A.MRCODCONS = C.MRCODCONS AND C.DCTIPDOCUM = 'FA' AND C.MRNUMDOC > 0
            WHERE A.aufecmod = :fecha AND B.AACOD = 11963
        ";

        $stmt = $em->prepare($query);

        $params = array(
            "fecha"=>$fecha
        );

        $stmt->execute($params);

        return $stmt->fetchAll();
    }

    public function getTotalReservasServiciosRestaurantesYaIngresadosEnElParque($fecha){
        $em = $this->manager->getConnection();
    
        $query = "SELECT COUNT(*) as cantidad FROM BDMUF.TBDETSICER A
            INNER JOIN BDMUF.TBFADETALL B ON B.DFDOCUMENT = A.DETDOCUMENT AND A.MRCODCONS = B.MRCODCONS
            INNER JOIN BDMUF.TBFAMOVREC C ON A.MRCODCONS = C.MRCODCONS AND C.DCTIPDOCUM = 'FA' AND C.MRNUMDOC > 0
            WHERE A.aufecmod = :fecha AND B.AACOD = 11963
            AND A.AUCODESTAD = 'A' 
        ";

        $stmt = $em->prepare($query);

        $params = array(
            "fecha"=>$fecha
        );

        $stmt->execute($params);

        return $stmt->fetchAll();
    }

    public function getTotalRedimidosServiciosRestaurantes($fecha){
        $em = $this->manager->getConnection();
    
        $query = "SELECT COUNT(*) as cantidad FROM BDMUF.TBDETSICER A
            INNER JOIN BDMUF.TBFADETALL B ON B.DFDOCUMENT = A.DETDOCUMENT AND A.MRCODCONS = B.MRCODCONS
            INNER JOIN BDMUF.TBFAMOVREC C ON A.MRCODCONS = C.MRCODCONS AND C.DCTIPDOCUM = 'FA' AND C.MRNUMDOC > 0
            WHERE A.aufecmod = :fecha AND ESTADO = 'RD' AND AACOD = 11963  
        ";

        $stmt = $em->prepare($query);

        $params = array(
            "fecha"=>$fecha
        );

        $stmt->execute($params);

        return $stmt->fetchAll();
    }

    public function getTotalParqueaderoReservados($fecha){
        $em = $this->manager->getConnection();
    
        $query = "SELECT count(*) as cantidad FROM BDMUF.TBPARQUEAONLINE a
            INNER JOIN BDMUF.TBFAMOVREC b ON A.MRCODCONS = b.MRCODCONS AND b.DCTIPDOCUM = 'FA' AND b.MRNUMDOC > 0
            where a.fecha = :fecha 
        ";

        $stmt = $em->prepare($query);

        $params = array(
            "fecha"=>$fecha
        );

        $stmt->execute($params);

        return $stmt->fetchAll();
    }

    public function getTotalParqueaderoReservadosYaIngresados($fecha){
        $em = $this->manager->getConnection();
    
        $query = "SELECT count(*) as cantidad FROM BDMUF.TBPARQUEAONLINE a
            INNER JOIN BDMUF.TBFAMOVREC b ON A.MRCODCONS = b.MRCODCONS AND b.DCTIPDOCUM = 'FA' AND b.MRNUMDOC > 0
            INNER JOIN PARQUEAW.MOVIMIENTO C ON UCASE(C.PLACA) = UCASE(A.PLACA) AND A.FECHA = C.FECING
            where a.fecha = :fecha 
        ";

        $stmt = $em->prepare($query);

        $params = array(
            "fecha"=>$fecha
        );

        $stmt->execute($params);

        return $stmt->fetchAll();
    }
}