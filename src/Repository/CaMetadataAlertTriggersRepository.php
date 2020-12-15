<?php

namespace App\Repository;

use App\Entity\CaMetadataAlertTriggers;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @method CaMetadataAlertTriggers|null find($id, $lockMode = null, $lockVersion = null)
 * @method CaMetadataAlertTriggers|null findOneBy(array $criteria, array $orderBy = null)
 * @method CaMetadataAlertTriggers[]    findAll()
 * @method CaMetadataAlertTriggers[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class CaMetadataAlertTriggersRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, CaMetadataAlertTriggers::class);
    }

    // /**
    //  * @return CaMetadataAlertTriggers[] Returns an array of CaMetadataAlertTriggers objects
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
    public function findOneBySomeField($value): ?CaMetadataAlertTriggers
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
