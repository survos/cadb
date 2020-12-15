<?php

namespace App\Repository;

use App\Entity\CaHistoryTrackingCurrentValues;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @method CaHistoryTrackingCurrentValues|null find($id, $lockMode = null, $lockVersion = null)
 * @method CaHistoryTrackingCurrentValues|null findOneBy(array $criteria, array $orderBy = null)
 * @method CaHistoryTrackingCurrentValues[]    findAll()
 * @method CaHistoryTrackingCurrentValues[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class CaHistoryTrackingCurrentValuesRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, CaHistoryTrackingCurrentValues::class);
    }

    // /**
    //  * @return CaHistoryTrackingCurrentValues[] Returns an array of CaHistoryTrackingCurrentValues objects
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
    public function findOneBySomeField($value): ?CaHistoryTrackingCurrentValues
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
