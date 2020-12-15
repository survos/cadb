<?php

namespace App\Repository;

use App\Entity\CaTourStopsXTourStops;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @method CaTourStopsXTourStops|null find($id, $lockMode = null, $lockVersion = null)
 * @method CaTourStopsXTourStops|null findOneBy(array $criteria, array $orderBy = null)
 * @method CaTourStopsXTourStops[]    findAll()
 * @method CaTourStopsXTourStops[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class CaTourStopsXTourStopsRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, CaTourStopsXTourStops::class);
    }

    // /**
    //  * @return CaTourStopsXTourStops[] Returns an array of CaTourStopsXTourStops objects
    //  */
    /*
    public function findByExampleField($value)
    {
        return $this->createQueryBuilder('c')
            ->andWhere('c.exampleField = :val')
            ->setParameter('val', $value)
            ->orderBy('c.id', 'ASC')
            ->setMaxResults(10)
            ->getQuery()
            ->getResult()
        ;
    }
    */

    /*
    public function findOneBySomeField($value): ?CaTourStopsXTourStops
    {
        return $this->createQueryBuilder('c')
            ->andWhere('c.exampleField = :val')
            ->setParameter('val', $value)
            ->getQuery()
            ->getOneOrNullResult()
        ;
    }
    */
}
