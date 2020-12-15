<?php

namespace App\Repository;

use App\Entity\CaMetadataAlertRulesXUsers;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @method CaMetadataAlertRulesXUsers|null find($id, $lockMode = null, $lockVersion = null)
 * @method CaMetadataAlertRulesXUsers|null findOneBy(array $criteria, array $orderBy = null)
 * @method CaMetadataAlertRulesXUsers[]    findAll()
 * @method CaMetadataAlertRulesXUsers[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class CaMetadataAlertRulesXUsersRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, CaMetadataAlertRulesXUsers::class);
    }

    // /**
    //  * @return CaMetadataAlertRulesXUsers[] Returns an array of CaMetadataAlertRulesXUsers objects
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
    public function findOneBySomeField($value): ?CaMetadataAlertRulesXUsers
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
