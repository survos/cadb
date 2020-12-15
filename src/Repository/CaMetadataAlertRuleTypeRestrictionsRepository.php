<?php

namespace App\Repository;

use App\Entity\CaMetadataAlertRuleTypeRestrictions;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @method CaMetadataAlertRuleTypeRestrictions|null find($id, $lockMode = null, $lockVersion = null)
 * @method CaMetadataAlertRuleTypeRestrictions|null findOneBy(array $criteria, array $orderBy = null)
 * @method CaMetadataAlertRuleTypeRestrictions[]    findAll()
 * @method CaMetadataAlertRuleTypeRestrictions[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class CaMetadataAlertRuleTypeRestrictionsRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, CaMetadataAlertRuleTypeRestrictions::class);
    }

    // /**
    //  * @return CaMetadataAlertRuleTypeRestrictions[] Returns an array of CaMetadataAlertRuleTypeRestrictions objects
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
    public function findOneBySomeField($value): ?CaMetadataAlertRuleTypeRestrictions
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
