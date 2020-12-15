<?php

namespace App\Repository;

use App\Entity\CaBatchLog;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @method CaBatchLog|null find($id, $lockMode = null, $lockVersion = null)
 * @method CaBatchLog|null findOneBy(array $criteria, array $orderBy = null)
 * @method CaBatchLog[]    findAll()
 * @method CaBatchLog[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class CaBatchLogRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, CaBatchLog::class);
    }

    // /**
    //  * @return CaBatchLog[] Returns an array of CaBatchLog objects
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
    public function findOneBySomeField($value): ?CaBatchLog
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
