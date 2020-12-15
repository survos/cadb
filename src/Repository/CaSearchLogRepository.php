<?php

namespace App\Repository;

use App\Entity\CaSearchLog;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @method CaSearchLog|null find($id, $lockMode = null, $lockVersion = null)
 * @method CaSearchLog|null findOneBy(array $criteria, array $orderBy = null)
 * @method CaSearchLog[]    findAll()
 * @method CaSearchLog[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class CaSearchLogRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, CaSearchLog::class);
    }

    // /**
    //  * @return CaSearchLog[] Returns an array of CaSearchLog objects
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
    public function findOneBySomeField($value): ?CaSearchLog
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
