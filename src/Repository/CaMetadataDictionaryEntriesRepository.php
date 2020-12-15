<?php

namespace App\Repository;

use App\Entity\CaMetadataDictionaryEntries;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @method CaMetadataDictionaryEntries|null find($id, $lockMode = null, $lockVersion = null)
 * @method CaMetadataDictionaryEntries|null findOneBy(array $criteria, array $orderBy = null)
 * @method CaMetadataDictionaryEntries[]    findAll()
 * @method CaMetadataDictionaryEntries[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class CaMetadataDictionaryEntriesRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, CaMetadataDictionaryEntries::class);
    }

    // /**
    //  * @return CaMetadataDictionaryEntries[] Returns an array of CaMetadataDictionaryEntries objects
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
    public function findOneBySomeField($value): ?CaMetadataDictionaryEntries
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
