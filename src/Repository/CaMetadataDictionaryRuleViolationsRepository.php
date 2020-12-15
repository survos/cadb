<?php

namespace App\Repository;

use App\Entity\CaMetadataDictionaryRuleViolations;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @method CaMetadataDictionaryRuleViolations|null find($id, $lockMode = null, $lockVersion = null)
 * @method CaMetadataDictionaryRuleViolations|null findOneBy(array $criteria, array $orderBy = null)
 * @method CaMetadataDictionaryRuleViolations[]    findAll()
 * @method CaMetadataDictionaryRuleViolations[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class CaMetadataDictionaryRuleViolationsRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, CaMetadataDictionaryRuleViolations::class);
    }

    // /**
    //  * @return CaMetadataDictionaryRuleViolations[] Returns an array of CaMetadataDictionaryRuleViolations objects
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
    public function findOneBySomeField($value): ?CaMetadataDictionaryRuleViolations
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
