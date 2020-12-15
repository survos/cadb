<?php

namespace App\Repository;

use App\Entity\CaMetadataAlertRulesXUserGroups;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @method CaMetadataAlertRulesXUserGroups|null find($id, $lockMode = null, $lockVersion = null)
 * @method CaMetadataAlertRulesXUserGroups|null findOneBy(array $criteria, array $orderBy = null)
 * @method CaMetadataAlertRulesXUserGroups[]    findAll()
 * @method CaMetadataAlertRulesXUserGroups[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class CaMetadataAlertRulesXUserGroupsRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, CaMetadataAlertRulesXUserGroups::class);
    }

    // /**
    //  * @return CaMetadataAlertRulesXUserGroups[] Returns an array of CaMetadataAlertRulesXUserGroups objects
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
    public function findOneBySomeField($value): ?CaMetadataAlertRulesXUserGroups
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
