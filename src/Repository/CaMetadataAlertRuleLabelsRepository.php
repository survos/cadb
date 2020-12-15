<?php

namespace App\Repository;

use App\Entity\CaMetadataAlertRuleLabels;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @method CaMetadataAlertRuleLabels|null find($id, $lockMode = null, $lockVersion = null)
 * @method CaMetadataAlertRuleLabels|null findOneBy(array $criteria, array $orderBy = null)
 * @method CaMetadataAlertRuleLabels[]    findAll()
 * @method CaMetadataAlertRuleLabels[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class CaMetadataAlertRuleLabelsRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, CaMetadataAlertRuleLabels::class);
    }

    // /**
    //  * @return CaMetadataAlertRuleLabels[] Returns an array of CaMetadataAlertRuleLabels objects
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
    public function findOneBySomeField($value): ?CaMetadataAlertRuleLabels
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
