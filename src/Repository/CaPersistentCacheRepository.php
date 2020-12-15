<?php

namespace App\Repository;

use App\Entity\CaPersistentCache;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @method CaPersistentCache|null find($id, $lockMode = null, $lockVersion = null)
 * @method CaPersistentCache|null findOneBy(array $criteria, array $orderBy = null)
 * @method CaPersistentCache[]    findAll()
 * @method CaPersistentCache[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class CaPersistentCacheRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, CaPersistentCache::class);
    }

    // /**
    //  * @return CaPersistentCache[] Returns an array of CaPersistentCache objects
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
    public function findOneBySomeField($value): ?CaPersistentCache
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
