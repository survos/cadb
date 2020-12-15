<?php

namespace App\Repository;

use App\Entity\CaMetadataAlertRules;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @method CaMetadataAlertRules|null find($id, $lockMode = null, $lockVersion = null)
 * @method CaMetadataAlertRules|null findOneBy(array $criteria, array $orderBy = null)
 * @method CaMetadataAlertRules[]    findAll()
 * @method CaMetadataAlertRules[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class CaMetadataAlertRulesRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, CaMetadataAlertRules::class);
    }

    // /**
    //  * @return CaMetadataAlertRules[] Returns an array of CaMetadataAlertRules objects
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
    public function findOneBySomeField($value): ?CaMetadataAlertRules
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
