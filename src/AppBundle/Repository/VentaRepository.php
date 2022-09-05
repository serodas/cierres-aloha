<?php

namespace AppBundle\Repository;

use AppBundle\Entity\Venta;

class VentaRepository extends \Doctrine\ORM\EntityRepository
{
    public function consultacuentas($fecha)
    {

        $em= $this->getEntityManager();
        $venta_repo= $em->getRepository("AppBundle:Venta");
    
        return $ventas = $venta_repo->createQueryBuilder('v')
            ->where('v.dob = :fecha AND v.type= :tipo ')
            ->setParameter('fecha',$fecha)
            ->setParameter('tipo',4)
            ->getQuery()
            ->getResult();
    }

    public function otrasformasdepago($fecha,$check,$idSec)
    {
        $em= $this->getEntityManager();
        $venta_repo= $em->getRepository("AppBundle:Venta");

        return $ventas = $venta_repo->createQueryBuilder('v')
            ->where(' v.type = :tipo AND v.dob = :fecha AND v.check= :cuenta AND v.id NOT IN (:id)')
            ->setParameter('tipo',4)
            ->setParameter('fecha',$fecha)
            ->setParameter('cuenta',$check)
            ->setParameter('id',$idSec)
            ->getQuery()
            ->getResult();
    }

    public function getTotalfacturaItem($date,$check)
    {
        $em = $this->getEntityManager()->getConnection();

        $query = "SELECT sum(discpric) FROM   dbInventario.dbo.tblGndItem
        WHERE dob= :fecha and [check]= :cuenta";
    

        $stmt = $em->prepare($query);

        $params = array(
            "fecha"=>$date,
            "cuenta"=>$check
        );

        $stmt->execute($params);
        $result = $stmt->fetch();

        foreach( $result as $resultado){
            if($resultado != null){
                $valor = $resultado;
            }else{
                $valor = 0;
            }
        }
        return $valor;
    }

    public function sumaotrasformasdepago($fecha,$check,$idSec)
    {
        $em= $this->getEntityManager();
        $venta_repo= $em->getRepository("AppBundle:Venta");

        return $ventas = $venta_repo->createQueryBuilder('v')
            ->select('SUM(v.amount)')
            ->where(' v.type = :tipo AND v.dob = :fecha AND v.check= :cuenta AND v.id NOT IN (:id)')
            ->setParameter('tipo',4)
            ->setParameter('fecha',$fecha)
            ->setParameter('cuenta',$check)
            ->setParameter('id',$idSec)
            ->getQuery()
            ->getSingleScalarResult();
    }

    public function getTblGndSaleByFechaAndCheck($fecha,$check){
        $em= $this->getEntityManager();
        $tblGndSaleRepository= $em->getRepository("AppBundle:Venta");

        return $tblGndSaleObject = $tblGndSaleRepository->createQueryBuilder('v')
            ->where(' v.type = :tipo AND v.dob = :fecha AND v.check= :cuenta')
            ->setParameter('tipo',4)
            ->setParameter('fecha',$fecha)
            ->setParameter('cuenta',$check)
            ->getQuery()
            ->getResult();
    }

}
