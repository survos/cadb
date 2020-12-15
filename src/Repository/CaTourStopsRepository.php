<?php

namespace App\Repository;

use App\Entity\CaTourStops;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @method CaTourStops|null find($id, $lockMode = null, $lockVersion = null)
 * @method CaTourStops|null findOneBy(array $criteria, array $orderBy = null)
 * @method CaTourStops[]    findAll()
 * @method CaTourStops[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class CaTourStopsRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, CaTourStops::class);
    }

    // /**
    //  * @return CaTourStops[] Returns an array of CaTourStops objects
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
    public function findOneBySomeField($value): ?CaTourStops
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
