<?php

namespace App\Repository;

use App\Entity\CaTaskQueue;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @method CaTaskQueue|null find($id, $lockMode = null, $lockVersion = null)
 * @method CaTaskQueue|null findOneBy(array $criteria, array $orderBy = null)
 * @method CaTaskQueue[]    findAll()
 * @method CaTaskQueue[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class CaTaskQueueRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, CaTaskQueue::class);
    }

    // /**
    //  * @return CaTaskQueue[] Returns an array of CaTaskQueue objects
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
    public function findOneBySomeField($value): ?CaTaskQueue
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
