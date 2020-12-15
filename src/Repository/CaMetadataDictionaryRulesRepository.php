<?php

namespace App\Repository;

use App\Entity\CaMetadataDictionaryRules;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @method CaMetadataDictionaryRules|null find($id, $lockMode = null, $lockVersion = null)
 * @method CaMetadataDictionaryRules|null findOneBy(array $criteria, array $orderBy = null)
 * @method CaMetadataDictionaryRules[]    findAll()
 * @method CaMetadataDictionaryRules[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class CaMetadataDictionaryRulesRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, CaMetadataDictionaryRules::class);
    }

    // /**
    //  * @return CaMetadataDictionaryRules[] Returns an array of CaMetadataDictionaryRules objects
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
    public function findOneBySomeField($value): ?CaMetadataDictionaryRules
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
