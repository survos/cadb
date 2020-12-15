<?php

namespace App\Repository;

use App\Entity\CaSearchIndexingQueue;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @method CaSearchIndexingQueue|null find($id, $lockMode = null, $lockVersion = null)
 * @method CaSearchIndexingQueue|null findOneBy(array $criteria, array $orderBy = null)
 * @method CaSearchIndexingQueue[]    findAll()
 * @method CaSearchIndexingQueue[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class CaSearchIndexingQueueRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, CaSearchIndexingQueue::class);
    }

    // /**
    //  * @return CaSearchIndexingQueue[] Returns an array of CaSearchIndexingQueue objects
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
    public function findOneBySomeField($value): ?CaSearchIndexingQueue
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
