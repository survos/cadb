<?php

namespace App\Repository;

use App\Entity\CaMovementLabels;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @method CaMovementLabels|null find($id, $lockMode = null, $lockVersion = null)
 * @method CaMovementLabels|null findOneBy(array $criteria, array $orderBy = null)
 * @method CaMovementLabels[]    findAll()
 * @method CaMovementLabels[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class CaMovementLabelsRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, CaMovementLabels::class);
    }

    // /**
    //  * @return CaMovementLabels[] Returns an array of CaMovementLabels objects
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
    public function findOneBySomeField($value): ?CaMovementLabels
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
