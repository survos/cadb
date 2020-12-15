<?php

namespace App\Repository;

use App\Entity\CaReplicationLog;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @method CaReplicationLog|null find($id, $lockMode = null, $lockVersion = null)
 * @method CaReplicationLog|null findOneBy(array $criteria, array $orderBy = null)
 * @method CaReplicationLog[]    findAll()
 * @method CaReplicationLog[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class CaReplicationLogRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, CaReplicationLog::class);
    }

    // /**
    //  * @return CaReplicationLog[] Returns an array of CaReplicationLog objects
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
    public function findOneBySomeField($value): ?CaReplicationLog
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
