<?php

namespace App\Repository;

use App\Entity\CaChangeLog;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @method CaChangeLog|null find($id, $lockMode = null, $lockVersion = null)
 * @method CaChangeLog|null findOneBy(array $criteria, array $orderBy = null)
 * @method CaChangeLog[]    findAll()
 * @method CaChangeLog[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class CaChangeLogRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, CaChangeLog::class);
    }

    // /**
    //  * @return CaChangeLog[] Returns an array of CaChangeLog objects
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
    public function findOneBySomeField($value): ?CaChangeLog
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
