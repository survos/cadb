<?php

namespace App\Repository;

use App\Entity\CaChangeLogSnapshots;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @method CaChangeLogSnapshots|null find($id, $lockMode = null, $lockVersion = null)
 * @method CaChangeLogSnapshots|null findOneBy(array $criteria, array $orderBy = null)
 * @method CaChangeLogSnapshots[]    findAll()
 * @method CaChangeLogSnapshots[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class CaChangeLogSnapshotsRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, CaChangeLogSnapshots::class);
    }

    // /**
    //  * @return CaChangeLogSnapshots[] Returns an array of CaChangeLogSnapshots objects
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
    public function findOneBySomeField($value): ?CaChangeLogSnapshots
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
